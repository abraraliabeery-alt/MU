@extends('layouts.site')

@section('title', app()->getLocale() === 'ar' ? 'الميموني للمحاماة والاستشارات القانونية | محامٍ مرخص وموثق معتمد' : 'Al‑Maimouni Law Firm | Licensed Lawyer & Registered Notary')
@section('meta_description', app()->getLocale() === 'ar' ? 'محامٍ مرخص وموثق معتمد: استشارات قانونية، خدمات توثيق، وتمثيل قضائي—بإجراءات واضحة وتواصل سريع.' : 'Licensed lawyer and registered notary: legal consultations, notarization, and representation—clear process and fast communication.')
@section('og_title', app()->getLocale() === 'ar' ? 'الميموني للمحاماة والاستشارات القانونية' : 'Al‑Maimouni Law Firm & Legal Consultations')
@section('og_description', app()->getLocale() === 'ar' ? 'محامٍ مرخص وموثق معتمد—حلول قانونية واضحة وثقة في كل خطوة.' : 'Licensed lawyer & registered notary—clear legal solutions and confidence at every step.')

@php
    $whatsAppNumber = '966500000000';
    $whatsAppMessage = app()->getLocale() === 'ar' ? 'مرحبًا، أود طلب استشارة قانونية.' : 'Hi, I would like to request a legal consultation.';
    $whatsAppUrl = 'https://wa.me/' . $whatsAppNumber . '?text=' . urlencode($whatsAppMessage);
@endphp

@section('body')
<div class="min-h-screen bg-[color:var(--bg)] text-[color:var(--fg)]">
    <a href="#content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:start-4 focus:z-50 focus:rounded-xl focus:bg-[color:var(--card)] focus:px-4 focus:py-2 focus:ring-2 focus:ring-[color:var(--ring)]">
        {{ app()->getLocale() === 'ar' ? 'تخطي إلى المحتوى' : 'Skip to content' }}
    </a>

    <main id="content">
        <div class="hero-bg hero-bg--photo">
            <header class="site-header sticky top-0 z-40 is-top" data-site-header>
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex min-h-[4.5rem] flex-wrap items-center justify-between gap-6 py-3 lg:flex-nowrap">
                        <div class="flex items-center gap-3">
                            <a href="#" class="group flex items-center gap-3" aria-label="{{ app()->getLocale() === 'ar' ? 'الصفحة الرئيسية' : 'Home' }}">
                                <img src="{{ asset('images/image (3).png') }}" alt="{{ app()->getLocale() === 'ar' ? 'الشعار' : 'Logo' }}" class="h-12 sm:h-14 w-auto rounded-xl shadow-soft" />
                            </a>
                        </div>

                        <nav class="hidden lg:flex flex-1 items-center justify-center gap-2 text-sm whitespace-nowrap" aria-label="Primary">
                            <a class="nav-link" href="#about">{{ app()->getLocale() === 'ar' ? 'نبذة' : 'About' }}</a>
                            <a class="nav-link" href="#services">{{ app()->getLocale() === 'ar' ? 'الخدمات' : 'Services' }}</a>
                            <a class="nav-link" href="#why">{{ app()->getLocale() === 'ar' ? 'لماذا نحن' : 'Why Us' }}</a>
                            <a class="nav-link" href="#process">{{ app()->getLocale() === 'ar' ? 'الخطوات' : 'Process' }}</a>
                            <a class="nav-link" href="#faq">{{ app()->getLocale() === 'ar' ? 'الأسئلة' : 'FAQ' }}</a>
                            <a class="nav-link" href="#contact">{{ app()->getLocale() === 'ar' ? 'تواصل' : 'Contact' }}</a>
                        </nav>

                        <div class="flex flex-none items-center gap-3">
                            <button type="button" class="icon-btn" data-theme-toggle aria-label="Toggle theme">
                                <span class="theme-icon theme-icon-sun">☼</span>
                                <span class="theme-icon theme-icon-moon">◐</span>
                            </button>

                            <a href="{{ request()->fullUrlWithQuery(['lang' => app()->getLocale() === 'ar' ? 'en' : 'ar']) }}" class="chip h-10 !py-0 px-4">
                                {{ app()->getLocale() === 'ar' ? 'EN' : 'ع' }}
                            </a>

                            <a href="#contact" class="btn-primary hidden sm:inline-flex h-10 !py-0">
                                {{ app()->getLocale() === 'ar' ? 'اطلب استشارة' : 'Request a Consult' }}
                            </a>

                            <button type="button" class="icon-btn lg:hidden" data-mobile-nav-toggle aria-label="Menu">
                                <span class="text-base">≡</span>
                            </button>
                        </div>
                    </div>

                    <div class="lg:hidden" data-mobile-nav hidden>
                        <div class="pb-4 pt-2 grid gap-1 text-sm">
                            <a class="nav-link" href="#about">{{ app()->getLocale() === 'ar' ? 'نبذة' : 'About' }}</a>
                            <a class="nav-link" href="#services">{{ app()->getLocale() === 'ar' ? 'الخدمات' : 'Services' }}</a>
                            <a class="nav-link" href="#why">{{ app()->getLocale() === 'ar' ? 'لماذا نحن' : 'Why Us' }}</a>
                            <a class="nav-link" href="#process">{{ app()->getLocale() === 'ar' ? 'الخطوات' : 'Process' }}</a>
                            <a class="nav-link" href="#faq">{{ app()->getLocale() === 'ar' ? 'الأسئلة' : 'FAQ' }}</a>
                            <a class="nav-link" href="#contact">{{ app()->getLocale() === 'ar' ? 'تواصل' : 'Contact' }}</a>
                            <a href="#contact" class="btn-primary mt-2 justify-center">
                                {{ app()->getLocale() === 'ar' ? 'اطلب استشارة' : 'Request a Consult' }}
                            </a>
                        </div>
                    </div>
                </div>
            </header>

            <section aria-label="Hero">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 min-h-[calc(100svh-4.5rem)] flex items-center py-12 sm:py-14 lg:py-16">
                    <div class="mx-auto max-w-3xl lg:text-center">
                            <div class="hero-eyebrow mx-auto w-fit">
                                <span class="hero-eyebrow-dot" aria-hidden="true"></span>
                                <span>{{ app()->getLocale() === 'ar' ? 'محامٍ مرخص وموثق معتمد — إجراءات واضحة ومتابعة دقيقة.' : 'Licensed lawyer & registered notary — clear process and precise follow-up.' }}</span>
                            </div>

                            <h1 class="mx-auto text-balance max-w-2xl text-2xl font-semibold leading-[1.25] tracking-tight sm:text-3xl lg:text-4xl">
                                @if (app()->getLocale() === 'ar')
                                    <span class="block">الميموني للمحاماة</span>
                                    <span class="block mt-2">والاستشارات القانونية</span>
                                @else
                                    Al‑Maimouni Law Firm & Legal Consultations
                                @endif
                            </h1>

                            <p class="mx-auto mt-3 max-w-2xl text-pretty text-[13px] leading-7 text-[color:var(--muted)] sm:text-sm">
                                {{ app()->getLocale() === 'ar'
                                    ? 'خدمات قانونية وتوثيقية باعتماد رسمي: استشارات، صياغة عقود، توثيق، وتمثيل. تركيز على جودة الصياغة، سرية المعلومات، وسرعة الاستجابة.'
                                    : 'Officially delivered legal & notary services: consultations, contract drafting, notarization, and representation—focused on confidentiality, strong drafting, and fast response.' }}
                            </p>

                            <div class="hero-divider" aria-hidden="true"></div>

                            <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:items-center lg:justify-center">
                                <a href="#contact" class="btn-primary justify-center">
                                    {{ app()->getLocale() === 'ar' ? 'ابدأ طلبك الآن' : 'Start Your Request' }}
                                </a>
                                <a href="#services" class="btn-secondary justify-center">
                                    {{ app()->getLocale() === 'ar' ? 'استعرض الخدمات' : 'Explore Services' }}
                                </a>
                            </div>
                    </div>
                </div>
            </section>
        </div>

        <section id="about" class="section">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid gap-10 lg:grid-cols-12">
                    <div class="lg:col-span-5">
                        <h2 class="section-title">{{ app()->getLocale() === 'ar' ? 'نبذة مختصرة' : 'Quick intro' }}</h2>
                        <p class="section-subtitle">
                            {{ app()->getLocale() === 'ar'
                                ? 'نهج مهني معتمد: فهم الحالة، تحديد الخيارات، ثم تنفيذ الحل المناسب بخطوات واضحة ومخرجات موثقة.'
                                : 'A licensed, professional approach: understand the case, outline options, then execute the right solution with clear steps and documented outputs.' }}
                        </p>
                    </div>
                    <div class="lg:col-span-7">
                        <div class="grid gap-4 sm:grid-cols-2">
                            <div class="card">
                                <div class="card-title">{{ app()->getLocale() === 'ar' ? 'خصوصية' : 'Confidentiality' }}</div>
                                <div class="card-text">{{ app()->getLocale() === 'ar' ? 'سرية معلوماتك أولوية.' : 'Your information is handled with confidentiality.' }}</div>
                            </div>
                            <div class="card">
                                <div class="card-title">{{ app()->getLocale() === 'ar' ? 'سرعة استجابة' : 'Fast response' }}</div>
                                <div class="card-text">{{ app()->getLocale() === 'ar' ? 'قنوات تواصل واضحة ووقت استجابة سريع.' : 'Clear channels and quick response times.' }}</div>
                            </div>
                            <div class="card">
                                <div class="card-title">{{ app()->getLocale() === 'ar' ? 'صياغة دقيقة' : 'Strong drafting' }}</div>
                                <div class="card-text">{{ app()->getLocale() === 'ar' ? 'عقود ومذكرات بصياغة احترافية.' : 'Contracts and memos with professional drafting.' }}</div>
                            </div>
                            <div class="card">
                                <div class="card-title">{{ app()->getLocale() === 'ar' ? 'مسار واضح' : 'Clear process' }}</div>
                                <div class="card-text">{{ app()->getLocale() === 'ar' ? 'من أول تواصل حتى الإغلاق—خطوات مرتبة.' : 'From first contact to closure—structured steps.' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="section">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex items-end justify-between gap-6 flex-wrap">
                    <div>
                        <h2 class="section-title">{{ app()->getLocale() === 'ar' ? 'الخدمات' : 'Services' }}</h2>
                        <p class="section-subtitle">{{ app()->getLocale() === 'ar' ? 'محاماة واستشارات قانونية وخدمات توثيق باعتماد رسمي—بحسب احتياجك.' : 'Legal services and notarization delivered officially—tailored to your needs.' }}</p>
                    </div>
                    <a href="#contact" class="btn-secondary">{{ app()->getLocale() === 'ar' ? 'استشارة سريعة' : 'Quick consult' }}</a>
                </div>

                <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="service-card">
                        <div class="service-icon">
                            <svg class="h-5 w-5" aria-hidden="true"><use href="#i-scale" /></svg>
                        </div>
                        <div class="service-title">{{ app()->getLocale() === 'ar' ? 'استشارات قانونية' : 'Legal consultations' }}</div>
                        <div class="service-text">{{ app()->getLocale() === 'ar' ? 'تحليل الحالة وتحديد الخيارات مع توصية واضحة.' : 'Case analysis, options, and a clear recommendation.' }}</div>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <svg class="h-5 w-5" aria-hidden="true"><use href="#i-contract" /></svg>
                        </div>
                        <div class="service-title">{{ app()->getLocale() === 'ar' ? 'صياغة ومراجعة العقود' : 'Contract drafting & review' }}</div>
                        <div class="service-text">{{ app()->getLocale() === 'ar' ? 'صياغة احترافية ومراجعة البنود لحماية حقوقك.' : 'Professional drafting and clause review to protect your rights.' }}</div>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <svg class="h-5 w-5" aria-hidden="true"><use href="#i-notary" /></svg>
                        </div>
                        <div class="service-title">{{ app()->getLocale() === 'ar' ? 'التوثيق' : 'Notarization' }}</div>
                        <div class="service-text">{{ app()->getLocale() === 'ar' ? 'خدمات توثيق وفق الأنظمة وبإجراءات واضحة.' : 'Notary services with clear and compliant steps.' }}</div>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <svg class="h-5 w-5" aria-hidden="true"><use href="#i-gavel" /></svg>
                        </div>
                        <div class="service-title">{{ app()->getLocale() === 'ar' ? 'التمثيل القضائي' : 'Representation' }}</div>
                        <div class="service-text">{{ app()->getLocale() === 'ar' ? 'متابعة القضايا والمرافعة عند الحاجة.' : 'Case follow-up and court representation when needed.' }}</div>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <svg class="h-5 w-5" aria-hidden="true"><use href="#i-contract" /></svg>
                        </div>
                        <div class="service-title">{{ app()->getLocale() === 'ar' ? 'مذكرات ولوائح' : 'Memos & pleadings' }}</div>
                        <div class="service-text">{{ app()->getLocale() === 'ar' ? 'إعداد مذكرات دفاع/ادعاء بتركيز على القوة النظامية.' : 'Prepare pleadings focused on legal strength.' }}</div>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <svg class="h-5 w-5" aria-hidden="true"><use href="#i-chat" /></svg>
                        </div>
                        <div class="service-title">{{ app()->getLocale() === 'ar' ? 'تسويات ودية' : 'Amicable settlements' }}</div>
                        <div class="service-text">{{ app()->getLocale() === 'ar' ? 'حلول تفاوضية تحافظ على الوقت والحقوق.' : 'Negotiated solutions that save time and protect rights.' }}</div>
                    </div>
                </div>
            </div>
        </section>

        <section id="why" class="section">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid gap-10 lg:grid-cols-12">
                    <div class="lg:col-span-5">
                        <h2 class="section-title">{{ app()->getLocale() === 'ar' ? 'لماذا تختارنا' : 'Why choose us' }}</h2>
                        <p class="section-subtitle">{{ app()->getLocale() === 'ar' ? 'اعتماد رسمي وصياغة قوية—مع سرعة استجابة ومسار واضح.' : 'Official credentials, strong drafting, and a clear process—with fast response.' }}</p>
                    </div>
                    <div class="lg:col-span-7">
                        <div class="grid gap-4 sm:grid-cols-2">
                            <div class="feature">
                                <div class="mb-3">
                                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-2xl border border-[color:var(--border)] bg-[color:var(--card)]">
                                        <svg class="h-5 w-5 text-[color:var(--fg)]" aria-hidden="true"><use href="#i-scale" /></svg>
                                    </span>
                                </div>
                                <div class="feature-k">{{ app()->getLocale() === 'ar' ? 'وضوح' : 'Clarity' }}</div>
                                <div class="feature-v">{{ app()->getLocale() === 'ar' ? 'توضيح الخيارات والخطوات قبل البدء.' : 'Clear options and steps before proceeding.' }}</div>
                            </div>
                            <div class="feature">
                                <div class="mb-3">
                                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-2xl border border-[color:var(--border)] bg-[color:var(--card)]">
                                        <svg class="h-5 w-5 text-[color:var(--fg)]" aria-hidden="true"><use href="#i-shield" /></svg>
                                    </span>
                                </div>
                                <div class="feature-k">{{ app()->getLocale() === 'ar' ? 'التزام' : 'Commitment' }}</div>
                                <div class="feature-v">{{ app()->getLocale() === 'ar' ? 'مواعيد واحترام للوقت والمتابعة.' : 'Timelines and follow-through you can rely on.' }}</div>
                            </div>
                            <div class="feature">
                                <div class="mb-3">
                                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-2xl border border-[color:var(--border)] bg-[color:var(--card)]">
                                        <svg class="h-5 w-5 text-[color:var(--fg)]" aria-hidden="true"><use href="#i-bolt" /></svg>
                                    </span>
                                </div>
                                <div class="feature-k">{{ app()->getLocale() === 'ar' ? 'تواصل' : 'Communication' }}</div>
                                <div class="feature-v">{{ app()->getLocale() === 'ar' ? 'قنوات تواصل واضحة واستجابة سريعة.' : 'Clear channels and responsive communication.' }}</div>
                            </div>
                            <div class="feature">
                                <div class="mb-3">
                                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-2xl border border-[color:var(--border)] bg-[color:var(--card)]">
                                        <svg class="h-5 w-5 text-[color:var(--fg)]" aria-hidden="true"><use href="#i-contract" /></svg>
                                    </span>
                                </div>
                                <div class="feature-k">{{ app()->getLocale() === 'ar' ? 'قابلية للتوسع' : 'Scalable' }}</div>
                                <div class="feature-v">{{ app()->getLocale() === 'ar' ? 'جاهز لإضافة خدمات وحجوزات وملفات لاحقًا.' : 'Ready to expand with services, bookings, and files later.' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="process" class="section">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h2 class="section-title">{{ app()->getLocale() === 'ar' ? 'كيف نعمل' : 'How it works' }}</h2>
                <p class="section-subtitle">{{ app()->getLocale() === 'ar' ? '4 خطوات بسيطة من الطلب إلى التنفيذ.' : '4 simple steps from request to execution.' }}</p>

                <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="card">
                        <div class="card-title">{{ app()->getLocale() === 'ar' ? '1) ارسل طلبك' : '1) Send request' }}</div>
                        <div class="card-text">{{ app()->getLocale() === 'ar' ? 'عبئ النموذج أو تواصل عبر واتساب.' : 'Fill the form or contact via WhatsApp.' }}</div>
                    </div>
                    <div class="card">
                        <div class="card-title">{{ app()->getLocale() === 'ar' ? '2) تواصل أولي' : '2) Initial call' }}</div>
                        <div class="card-text">{{ app()->getLocale() === 'ar' ? 'تحديد نوع الخدمة والمستندات المطلوبة.' : 'Confirm service type and required documents.' }}</div>
                    </div>
                    <div class="card">
                        <div class="card-title">{{ app()->getLocale() === 'ar' ? '3) تنفيذ' : '3) Execution' }}</div>
                        <div class="card-text">{{ app()->getLocale() === 'ar' ? 'صياغة/توثيق/متابعة حسب الخدمة.' : 'Drafting / notarization / follow-up as needed.' }}</div>
                    </div>
                    <div class="card">
                        <div class="card-title">{{ app()->getLocale() === 'ar' ? '4) تسليم ومتابعة' : '4) Delivery' }}</div>
                        <div class="card-text">{{ app()->getLocale() === 'ar' ? 'تسليم النتائج مع خيارات متابعة.' : 'Deliver results and define next steps.' }}</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="stats-grid">
                    <div class="stat-big">
                        <div class="stat-big-v">10+</div>
                        <div class="stat-big-k">{{ app()->getLocale() === 'ar' ? 'سنوات خبرة' : 'Years of experience' }}</div>
                    </div>
                    <div class="stat-big">
                        <div class="stat-big-v">500+</div>
                        <div class="stat-big-k">{{ app()->getLocale() === 'ar' ? 'استشارة ومعاملة' : 'Consultations & matters' }}</div>
                    </div>
                    <div class="stat-big">
                        <div class="stat-big-v">200+</div>
                        <div class="stat-big-k">{{ app()->getLocale() === 'ar' ? 'عمليات توثيق' : 'Notarizations' }}</div>
                    </div>
                    <div class="stat-big">
                        <div class="stat-big-v">24h</div>
                        <div class="stat-big-k">{{ app()->getLocale() === 'ar' ? 'متوسط الاستجابة' : 'Avg response' }}</div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="section">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid gap-8 lg:grid-cols-12">
                    <div class="lg:col-span-5">
                        <h2 class="section-title">{{ app()->getLocale() === 'ar' ? 'تواصل / طلب خدمة' : 'Contact / Request' }}</h2>
                        <p class="section-subtitle">{{ app()->getLocale() === 'ar' ? 'قدّم طلبك—وسيتم التواصل معك لتأكيد نوع الخدمة والمتطلبات.' : 'Submit your request—we will contact you to confirm service type and requirements.' }}</p>

                        <div class="mt-6 grid gap-3 text-sm">
                            <div class="contact-item">
                                <div class="contact-k">{{ app()->getLocale() === 'ar' ? 'واتساب' : 'WhatsApp' }}</div>
                                <div class="contact-v">+966 50 000 0000</div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-k">{{ app()->getLocale() === 'ar' ? 'الهاتف' : 'Phone' }}</div>
                                <div class="contact-v">+966 11 000 0000</div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-k">{{ app()->getLocale() === 'ar' ? 'البريد' : 'Email' }}</div>
                                <div class="contact-v">hello@example.com</div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-k">{{ app()->getLocale() === 'ar' ? 'المدينة' : 'City' }}</div>
                                <div class="contact-v">{{ app()->getLocale() === 'ar' ? 'المملكة العربية السعودية' : 'Saudi Arabia' }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-7">
                        <div class="form-card">
                            <form class="grid gap-4" action="#" method="POST" novalidate>
                                <div class="grid gap-4 sm:grid-cols-2">
                                    <div>
                                        <label class="label" for="name">{{ app()->getLocale() === 'ar' ? 'الاسم' : 'Name' }}</label>
                                        <input class="input" id="name" name="name" autocomplete="name" required>
                                    </div>
                                    <div>
                                        <label class="label" for="phone">{{ app()->getLocale() === 'ar' ? 'رقم الجوال' : 'Phone' }}</label>
                                        <input class="input" id="phone" name="phone" inputmode="tel" autocomplete="tel" required>
                                    </div>
                                </div>

                                <div class="grid gap-4 sm:grid-cols-2">
                                    <div>
                                        <label class="label" for="email">{{ app()->getLocale() === 'ar' ? 'البريد الإلكتروني' : 'Email' }}</label>
                                        <input class="input" id="email" name="email" type="email" autocomplete="email" required>
                                    </div>
                                    <div>
                                        <label class="label" for="service">{{ app()->getLocale() === 'ar' ? 'الخدمة المطلوبة' : 'Service' }}</label>
                                        <select class="select" id="service" name="service" required>
                                            <option value="" selected disabled>{{ app()->getLocale() === 'ar' ? 'اختر الخدمة' : 'Select service' }}</option>
                                            <option value="consult">{{ app()->getLocale() === 'ar' ? 'استشارة' : 'Consultation' }}</option>
                                            <option value="notary">{{ app()->getLocale() === 'ar' ? 'توثيق' : 'Notarization' }}</option>
                                            <option value="contract">{{ app()->getLocale() === 'ar' ? 'عقد / صياغة' : 'Contract / Drafting' }}</option>
                                            <option value="case">{{ app()->getLocale() === 'ar' ? 'قضية / تمثيل' : 'Case / Representation' }}</option>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <label class="label" for="notes">{{ app()->getLocale() === 'ar' ? 'تفاصيل الطلب' : 'Request details' }}</label>
                                    <textarea class="textarea" id="notes" name="notes" rows="4"></textarea>
                                </div>

                                <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                                    <button type="submit" class="btn-primary justify-center">
                                        {{ app()->getLocale() === 'ar' ? 'إرسال' : 'Submit' }}
                                    </button>
                                    <a href="{{ $whatsAppUrl }}" target="_blank" rel="noopener noreferrer" class="btn-secondary justify-center">
                                        {{ app()->getLocale() === 'ar' ? 'واتساب' : 'WhatsApp' }}
                                    </a>
                                </div>

                                <div class="text-xs text-[color:var(--muted)]">
                                    {{ app()->getLocale() === 'ar' ? 'بالإرسال أنت توافق على التواصل معك بخصوص الطلب.' : 'By submitting, you agree to be contacted about your request.' }}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="faq" class="section">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h2 class="section-title">{{ app()->getLocale() === 'ar' ? 'الأسئلة الشائعة' : 'FAQ' }}</h2>
                <p class="section-subtitle">{{ app()->getLocale() === 'ar' ? 'إجابات مختصرة وواضحة.' : 'Short and clear answers.' }}</p>

                <div class="mt-8 grid gap-3">
                    <details class="faq">
                        <summary class="faq-q">{{ app()->getLocale() === 'ar' ? 'كم تستغرق الاستجابة؟' : 'How fast is the response?' }}</summary>
                        <div class="faq-a">{{ app()->getLocale() === 'ar' ? 'عادة خلال ساعات العمل، وقد تختلف حسب الضغط.' : 'Usually within business hours, depending on volume.' }}</div>
                    </details>
                    <details class="faq">
                        <summary class="faq-q">{{ app()->getLocale() === 'ar' ? 'هل معلوماتي سرية؟' : 'Is my information confidential?' }}</summary>
                        <div class="faq-a">{{ app()->getLocale() === 'ar' ? 'نعم، تُعامل المعلومات بسرية ووفق ضوابط مناسبة.' : 'Yes. Information is handled confidentially with appropriate safeguards.' }}</div>
                    </details>
                    <details class="faq">
                        <summary class="faq-q">{{ app()->getLocale() === 'ar' ? 'هل تقدمون خدمات توثيق؟' : 'Do you provide notarization?' }}</summary>
                        <div class="faq-a">{{ app()->getLocale() === 'ar' ? 'نعم، وفق الأنظمة والإجراءات المعتمدة.' : 'Yes, following the applicable rules and procedures.' }}</div>
                    </details>
                </div>
            </div>
        </section>

        <footer class="border-t border-[color:var(--border)]">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-10">
                <div class="grid gap-8 lg:grid-cols-12">
                    <div class="lg:col-span-5">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('images/image (3).png') }}" alt="{{ app()->getLocale() === 'ar' ? 'الشعار' : 'Logo' }}" class="h-10 w-auto rounded-xl shadow-soft" />
                            <div>
                                <div class="text-sm font-semibold">{{ app()->getLocale() === 'ar' ? 'الميموني للمحاماة والاستشارات القانونية' : 'Al‑Maimouni Law Firm & Legal Consultations' }}</div>
                                <div class="text-xs text-[color:var(--muted)]">{{ app()->getLocale() === 'ar' ? 'محامٍ مرخص وموثق معتمد' : 'Licensed Lawyer & Registered Notary' }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-7 grid gap-6 sm:grid-cols-3 text-sm">
                        <div class="grid gap-2">
                            <div class="footer-title">{{ app()->getLocale() === 'ar' ? 'روابط' : 'Links' }}</div>
                            <a class="footer-link" href="#services">{{ app()->getLocale() === 'ar' ? 'الخدمات' : 'Services' }}</a>
                            <a class="footer-link" href="#process">{{ app()->getLocale() === 'ar' ? 'الخطوات' : 'Process' }}</a>
                            <a class="footer-link" href="#faq">{{ app()->getLocale() === 'ar' ? 'الأسئلة' : 'FAQ' }}</a>
                        </div>
                        <div class="grid gap-2">
                            <div class="footer-title">{{ app()->getLocale() === 'ar' ? 'التواصل' : 'Contact' }}</div>
                            <div class="footer-meta">+966 50 000 0000</div>
                            <div class="footer-meta">hello@example.com</div>
                        </div>
                        <div class="grid gap-2">
                            <div class="footer-title">{{ app()->getLocale() === 'ar' ? 'اللغة' : 'Language' }}</div>
                            <a class="footer-link" href="{{ request()->fullUrlWithQuery(['lang' => 'ar']) }}">العربية</a>
                            <a class="footer-link" href="{{ request()->fullUrlWithQuery(['lang' => 'en']) }}">English</a>
                        </div>
                    </div>
                </div>

                <div class="mt-10 flex flex-col gap-2 border-t border-[color:var(--border)] pt-6 text-xs text-[color:var(--muted)] sm:flex-row sm:items-center sm:justify-between">
                    <div>© {{ date('Y') }} {{ app()->getLocale() === 'ar' ? 'الميموني' : 'Al‑Maimouni' }}. {{ app()->getLocale() === 'ar' ? 'جميع الحقوق محفوظة.' : 'All rights reserved.' }}</div>
                    <div class="flex items-center gap-3">
                        <a class="icon-btn" href="{{ $whatsAppUrl }}" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
                            <svg class="h-5 w-5" aria-hidden="true"><use href="#i-social-whatsapp" /></svg>
                        </a>

                        <a class="icon-btn" href="#" target="_blank" rel="noopener noreferrer" aria-label="X">
                            <svg class="h-5 w-5" aria-hidden="true"><use href="#i-social-x" /></svg>
                        </a>

                        <a class="icon-btn" href="#" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                            <svg class="h-5 w-5" aria-hidden="true"><use href="#i-social-instagram" /></svg>
                        </a>

                        <a class="icon-btn" href="#" target="_blank" rel="noopener noreferrer" aria-label="TikTok">
                            <svg class="h-5 w-5" aria-hidden="true"><use href="#i-social-tiktok" /></svg>
                        </a>

                        <a class="icon-btn" href="#" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
                            <svg class="h-5 w-5" aria-hidden="true"><use href="#i-social-youtube" /></svg>
                        </a>

                        <a class="icon-btn" href="#" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                            <svg class="h-5 w-5" aria-hidden="true"><use href="#i-social-linkedin" /></svg>
                        </a>

                        <a class="icon-btn" href="#" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                            <svg class="h-5 w-5" aria-hidden="true"><use href="#i-social-facebook" /></svg>
                        </a>

                        <a class="icon-btn" href="#" target="_blank" rel="noopener noreferrer" aria-label="Snapchat">
                            <svg class="h-5 w-5" aria-hidden="true"><use href="#i-social-snapchat" /></svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer>

        <a href="{{ $whatsAppUrl }}" target="_blank" rel="noopener noreferrer" class="btn-primary fixed bottom-6 start-6 z-50 h-12 w-12 !p-0 justify-center" aria-label="WhatsApp">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-7 w-7" aria-hidden="true">
                <path fill="#fff" d="M12 2a10 10 0 0 0-8.54 15.2L2 22l4.93-1.3A10 10 0 1 0 12 2z" opacity=".22" />
                <path fill="#fff" d="M8.7 7.8c-.2-.5-.4-.5-.7-.5H7.4c-.2 0-.5.1-.7.3-.2.2-.9.9-.9 2.2 0 1.3.9 2.6 1.1 2.8.2.2 1.8 2.8 4.5 3.8 2.2.9 2.7.7 3.2.6.5-.1 1.6-.6 1.8-1.3.2-.6.2-1.2.1-1.3-.1-.1-.2-.2-.5-.3l-1.6-.8c-.2-.1-.4-.1-.6.2l-.7.9c-.1.2-.3.2-.5.1-.2-.1-1-.4-1.9-1.2-.7-.6-1.2-1.4-1.3-1.7-.1-.2 0-.4.1-.5l.4-.5c.1-.1.2-.3.3-.5.1-.2.1-.4 0-.6L8.7 7.8z" />
            </svg>
            <span class="sr-only">WhatsApp</span>
        </a>
    </main>
</div>
@endsection
