@extends('layouts.admin')

@section('title', app()->getLocale() === 'ar' ? 'لوحة التحكم | رسالة' : 'Admin | Message')

@section('page_title')
    {{ app()->getLocale() === 'ar' ? 'تفاصيل الرسالة' : 'Message Details' }}
@endsection

@section('header_actions')
    <a class="btn btn-outline-light btn-sm" href="{{ route('admin.contact-messages.index') }}">{{ app()->getLocale() === 'ar' ? 'رجوع للقائمة' : 'Back to list' }}</a>
@endsection

@section('content')
    <div class="row g-3">
        <div class="col-12 col-lg-5">
            <div class="card shadow-sm">
                <div class="card-header fw-semibold">{{ app()->getLocale() === 'ar' ? 'بيانات المرسل' : 'Sender' }}</div>
                <div class="card-body">
                    <div class="mb-2"><span class="text-secondary">{{ app()->getLocale() === 'ar' ? 'الاسم' : 'Name' }}:</span> <span class="fw-semibold">{{ $message->name }}</span></div>
                    <div class="mb-2"><span class="text-secondary">{{ app()->getLocale() === 'ar' ? 'الجوال' : 'Phone' }}:</span> <span class="fw-semibold">{{ $message->phone }}</span></div>
                    <div><span class="text-secondary">{{ app()->getLocale() === 'ar' ? 'البريد' : 'Email' }}:</span> <span class="fw-semibold">{{ $message->email }}</span></div>
                </div>
            </div>

            <div class="card shadow-sm mt-3">
                <div class="card-header fw-semibold">{{ app()->getLocale() === 'ar' ? 'تفاصيل الطلب' : 'Request' }}</div>
                <div class="card-body">
                    <div class="mb-2"><span class="text-secondary">{{ app()->getLocale() === 'ar' ? 'الخدمة' : 'Service' }}:</span> <span class="fw-semibold">{{ $message->service }}</span></div>
                    <div class="mb-2"><span class="text-secondary">{{ app()->getLocale() === 'ar' ? 'التاريخ' : 'Date' }}:</span> <span class="fw-semibold">{{ $message->created_at?->format('Y-m-d H:i:s') }}</span></div>
                    <div><span class="text-secondary">{{ app()->getLocale() === 'ar' ? 'اللغة' : 'Locale' }}:</span> <span class="fw-semibold">{{ $message->locale }}</span></div>
                </div>
            </div>

            <div class="card shadow-sm mt-3">
                <div class="card-header fw-semibold">{{ app()->getLocale() === 'ar' ? 'بيانات تقنية' : 'Technical' }}</div>
                <div class="card-body">
                    <div class="mb-2"><span class="text-secondary">IP:</span> <span class="fw-semibold">{{ $message->ip_address }}</span></div>
                    <div class="text-secondary small" style="word-break: break-word;">{{ $message->user_agent ?: '—' }}</div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-7">
            <div class="card shadow-sm">
                <div class="card-header fw-semibold">{{ app()->getLocale() === 'ar' ? 'نص الرسالة' : 'Message' }}</div>
                <div class="card-body">
                    <div style="white-space: pre-wrap;">{{ $message->notes ?: '—' }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
