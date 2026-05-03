@extends('layouts.admin')

@section('title', app()->getLocale() === 'ar' ? 'لوحة التحكم | تسجيل الدخول' : 'Admin | Login')

@section('page_title')
    {{ app()->getLocale() === 'ar' ? 'تسجيل الدخول' : 'Sign in' }}
@endsection

@section('header_actions')
    <a class="btn btn-outline-light btn-sm" href="{{ route('landing') }}">{{ app()->getLocale() === 'ar' ? 'زيارة الموقع' : 'View site' }}</a>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-5 col-xl-4">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <img src="{{ asset('images/image (3).png') }}" alt="{{ app()->getLocale() === 'ar' ? 'الشعار' : 'Logo' }}" class="rounded" style="height: 44px; width: auto;" />
                        <div>
                            <div class="fw-semibold">{{ app()->getLocale() === 'ar' ? 'لوحة التحكم' : 'Admin Panel' }}</div>
                            <div class="text-secondary small">{{ app()->getLocale() === 'ar' ? 'أدخل بيانات الإدارة للمتابعة' : 'Enter admin credentials to continue' }}</div>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('admin.login.submit') }}" novalidate>
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="username">{{ app()->getLocale() === 'ar' ? 'اسم المستخدم' : 'Username' }}</label>
                            <input class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" autocomplete="username" required>
                            @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="password">{{ app()->getLocale() === 'ar' ? 'كلمة المرور' : 'Password' }}</label>
                            <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="password" autocomplete="current-password" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-100" style="background-color:#111a3a;border-color:#111a3a;">
                            {{ app()->getLocale() === 'ar' ? 'دخول' : 'Sign in' }}
                        </button>

                        <div class="text-secondary small mt-3">
                            {{ app()->getLocale() === 'ar' ? 'بيانات الدخول يتم تعريفها من ملف .env (ADMIN_USER/ADMIN_PASSWORD).' : 'Credentials are configured in .env (ADMIN_USER/ADMIN_PASSWORD).' }}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
