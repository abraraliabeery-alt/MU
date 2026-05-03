@extends('layouts.admin')

@section('title', app()->getLocale() === 'ar' ? 'لوحة التحكم | رسائل التواصل' : 'Admin | Contact Messages')

@section('page_title')
    {{ app()->getLocale() === 'ar' ? 'رسائل التواصل' : 'Contact Messages' }}
@endsection

@section('header_actions')
    <form method="GET" class="d-flex align-items-center gap-2">
        <input class="form-control form-control-sm" name="q" value="{{ request('q') }}" placeholder="{{ app()->getLocale() === 'ar' ? 'بحث بالاسم/الجوال/البريد/التفاصيل' : 'Search name/phone/email/notes' }}" style="min-width: 240px;" />
        <button class="btn btn-light btn-sm" type="submit">{{ app()->getLocale() === 'ar' ? 'بحث' : 'Search' }}</button>
    </form>
@endsection

@section('content')
    <div class="row g-3">
        <div class="col-12 col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="text-secondary small">{{ app()->getLocale() === 'ar' ? 'إجمالي الرسائل' : 'Total messages' }}</div>
                    <div class="fs-3 fw-semibold">{{ $totalAll }}</div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="text-secondary small">{{ app()->getLocale() === 'ar' ? 'رسائل اليوم' : 'Today' }}</div>
                    <div class="fs-3 fw-semibold">{{ $totalToday }}</div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="text-secondary small">{{ app()->getLocale() === 'ar' ? 'آخر 7 أيام' : 'Last 7 days' }}</div>
                    <div class="fs-3 fw-semibold">{{ $totalLast7Days }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow-sm mt-3">
        <div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-2">
            <div class="fw-semibold">
                {{ app()->getLocale() === 'ar' ? 'قائمة الرسائل' : 'Messages' }}
                <span class="text-secondary">({{ $messages->total() }})</span>
            </div>
            <div class="text-secondary small">{{ app()->getLocale() === 'ar' ? 'مرتبة من الأحدث' : 'Sorted by latest' }}</div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col">{{ app()->getLocale() === 'ar' ? 'التاريخ' : 'Date' }}</th>
                        <th scope="col">{{ app()->getLocale() === 'ar' ? 'الاسم' : 'Name' }}</th>
                        <th scope="col">{{ app()->getLocale() === 'ar' ? 'الجوال' : 'Phone' }}</th>
                        <th scope="col">{{ app()->getLocale() === 'ar' ? 'البريد' : 'Email' }}</th>
                        <th scope="col">{{ app()->getLocale() === 'ar' ? 'الخدمة' : 'Service' }}</th>
                        <th scope="col" class="text-end">{{ app()->getLocale() === 'ar' ? 'إجراءات' : 'Actions' }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($messages as $m)
                        <tr>
                            <td class="text-nowrap">{{ $m->created_at?->format('Y-m-d H:i') }}</td>
                            <td>{{ $m->name }}</td>
                            <td class="text-nowrap">{{ $m->phone }}</td>
                            <td>{{ $m->email }}</td>
                            <td class="text-nowrap">{{ $m->service }}</td>
                            <td class="text-end">
                                <a class="btn btn-outline-primary btn-sm" style="border-color:#111a3a;color:#111a3a;" href="{{ route('admin.contact-messages.show', $m) }}">
                                    {{ app()->getLocale() === 'ar' ? 'عرض' : 'View' }}
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-secondary py-5">
                                {{ app()->getLocale() === 'ar' ? 'لا توجد رسائل حتى الآن.' : 'No messages yet.' }}
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">
        {{ $messages->links() }}
    </div>
@endsection
