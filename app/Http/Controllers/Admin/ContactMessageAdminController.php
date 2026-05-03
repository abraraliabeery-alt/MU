<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ContactMessageAdminController extends Controller
{
    public function index(Request $request): View
    {
        $query = ContactMessage::query()->latest();

        $now = Carbon::now();
        $totalAll = ContactMessage::query()->count();
        $totalToday = ContactMessage::query()->whereDate('created_at', $now->toDateString())->count();
        $totalLast7Days = ContactMessage::query()->where('created_at', '>=', $now->copy()->subDays(7))->count();

        if ($request->filled('q')) {
            $q = (string) $request->string('q');
            $query->where(function ($sub) use ($q) {
                $sub
                    ->where('name', 'like', "%{$q}%")
                    ->orWhere('phone', 'like', "%{$q}%")
                    ->orWhere('email', 'like', "%{$q}%")
                    ->orWhere('notes', 'like', "%{$q}%");
            });
        }

        $messages = $query->paginate(20)->withQueryString();

        return view('admin.contact-messages.index', [
            'messages' => $messages,
            'totalAll' => $totalAll,
            'totalToday' => $totalToday,
            'totalLast7Days' => $totalLast7Days,
        ]);
    }

    public function show(ContactMessage $contactMessage): View
    {
        return view('admin.contact-messages.show', [
            'message' => $contactMessage,
        ]);
    }
}
