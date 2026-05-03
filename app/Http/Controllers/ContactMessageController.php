<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'phone' => ['required', 'string', 'max:30'],
            'email' => ['required', 'email', 'max:255'],
            'service' => ['required', 'in:consult,notary,contract,case'],
            'notes' => ['nullable', 'string', 'max:2000'],
        ]);

        ContactMessage::create([
            ...$validated,
            'locale' => app()->getLocale(),
            'ip_address' => $request->ip(),
            'user_agent' => (string) $request->userAgent(),
        ]);

        return back()
            ->with('contact_success', true)
            ->with('contact_message', app()->getLocale() === 'ar' ? 'تم استلام طلبك بنجاح. سيتم التواصل معك قريبًا.' : 'Your request has been received. We will contact you soon.')
            ->withInput([]);
    }
}
