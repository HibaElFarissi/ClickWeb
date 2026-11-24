
@extends('layouts.navbar')

@section('content')

@php
    $servicePhoto = $Service->photo
        ? asset('storage/' . $Service->photo)
        : null;

    $serviceIcon = $Service->icon
        ? asset('storage/' . $Service->icon)
        : null;
@endphp

<style>
/* =================================
   SERVICE HERO
================================= */

.service-detail-hero {
    position: relative;
    overflow: hidden;
    padding: 125px 0 85px;
    background:
        radial-gradient(circle at 85% 25%, rgba(111,76,255,.14), transparent 28%),
        linear-gradient(120deg,#fbfaff,#f0f2ff,#f8f7ff);
}

.service-detail-hero:before {
    content: "";
    position: absolute;
    width: 480px;
    height: 480px;
    right: -160px;
    top: -250px;
    border: 1px solid rgba(105,75,255,.13);
    border-radius: 50%;
    box-shadow:
        0 0 0 45px rgba(105,75,255,.025),
        0 0 0 90px rgba(105,75,255,.02);
    pointer-events: none;
}

.service-breadcrumb {
    position: relative;
    display: inline-flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 12px;
    margin-bottom: 48px;
    padding: 12px 20px;
    border: 1px solid rgba(255,255,255,.9);
    border-radius: 50px;
    background: rgba(255,255,255,.75);
    color: #707891;
    font-size: 14px;
    box-shadow: 0 10px 35px rgba(60,55,130,.06);
}

.service-breadcrumb a {
    color: #6246ed;
    text-decoration: none;
}

.service-breadcrumb .current {
    color: #172044;
}

.service-eyebrow {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 18px;
    color: #6246ed;
    font-size: 14px;
    font-weight: 800;
    letter-spacing: 3px;
    text-transform: uppercase;
}

.service-eyebrow:before {
    content: "";
    width: 42px;
    height: 3px;
    border-radius: 5px;
    background: #6246ed;
}

.service-detail-title {
    max-width: 850px;
    margin-bottom: 20px;
    color: #090e45;
    font-size: clamp(38px,5vw,66px);
    font-weight: 800;
    line-height: 1.15;
    letter-spacing: -1.5px;
    overflow-wrap: anywhere;
}

.service-detail-lead {
    max-width: 760px;
    color: #65708b;
    font-size: 18px;
    line-height: 1.8;
}

/* HERO IMAGE */

.service-hero-visual {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 220px;
    height: 220px;
    margin: auto;
    padding: 35px;
    border: 1px solid #e8e3ff;
    border-radius: 42px;
    background: rgba(255,255,255,.8);
    box-shadow: 0 25px 65px rgba(81,65,190,.13);
    transform: rotate(-5deg);
}

.service-hero-visual img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

/* =================================
   SERVICE CONTENT
================================= */

.service-detail-content {
    padding: 85px 0;
    background: #fff;
}

.service-detail-image {
    display: block;
    width: 100%;
    max-height: 480px;
    object-fit: cover;
    border-radius: 20px;
    box-shadow: 0 18px 50px rgba(20,20,60,.10);
}

.service-section-heading {
    margin-bottom: 22px;
}

.service-section-heading span {
    color: #6748ed;
    font-size: 13px;
    font-weight: 800;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.service-section-heading h2 {
    margin-top: 8px;
    color: #101642;
    font-size: 32px;
    font-weight: 800;
}

.service-rich-text {
    color: #68718a;
    font-size: 16px;
    line-height: 1.95;
    overflow-wrap: anywhere;
}

/* INFORMATION CARD */

.service-info-card {
    padding: 28px;
    border: 1px solid #eeedf8;
    border-radius: 18px;
    background: #fff;
    box-shadow: 0 12px 38px rgba(28,24,85,.06);
}

.service-info-card h3 {
    margin-bottom: 18px;
    color: #101642;
    font-size: 22px;
    font-weight: 800;
}

.service-info-row {
    padding: 15px 0;
    border-bottom: 1px solid #f0eff7;
}

.service-info-row:last-child {
    border-bottom: 0;
}

.service-info-row small {
    display: block;
    margin-bottom: 5px;
    color: #9296a8;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
}

.service-info-row strong {
    color: #252a50;
    overflow-wrap: anywhere;
}

/* CTA */

.service-cta {
    padding: 32px;
    border-radius: 18px;
    background: linear-gradient(110deg,#704cff,#4c35d7);
    color: white;
    box-shadow: 0 18px 40px rgba(91,65,220,.18);
}

.service-cta h3 {
    margin-bottom: 10px;
    color: white;
    font-size: 24px;
    font-weight: 800;
}

.service-cta p {
    color: rgba(255,255,255,.85);
    line-height: 1.7;
}

.service-cta a {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-top: 15px;
    padding: 13px 22px;
    border-radius: 9px;
    background: white;
    color: #5439dc !important;
    font-weight: 700;
    text-decoration: none;
}

/* =================================
   RELATED SERVICES
================================= */

.related-services-section {
    padding: 80px 0;
    background: #f8f8fc;
}

.related-service-card {
    height: 100%;
    padding: 28px;
    border: 1px solid #efedf7;
    border-radius: 17px;
    background: white;
    box-shadow: 0 10px 30px rgba(20,20,60,.05);
    transition: .3s ease;
}

.related-service-card:hover {
    transform: translateY(-7px);
    box-shadow: 0 18px 38px rgba(20,20,60,.10);
}

.related-service-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 60px;
    height: 60px;
    margin-bottom: 20px;
    border-radius: 17px;
    background: #f2efff;
}

.related-service-icon img {
    width: 35px;
    height: 35px;
    object-fit: contain;
}

.related-service-card h3 {
    font-size: 19px;
    font-weight: 800;
}

.related-service-card h3 a {
    color: #151a43;
    text-decoration: none;
}

.related-service-card p {
    color: #788098;
    font-size: 14px;
    line-height: 1.8;
}

.related-service-link {
    display: inline-block;
    margin-top: 12px;
    color: #6246ed;
    font-weight: 700;
    text-decoration: none;
}

/* =================================
   DARK MODE
================================= */

body.active-dark .service-detail-hero {
    background:
        radial-gradient(circle at 85% 25%,rgba(111,76,255,.18),transparent 28%),
        linear-gradient(120deg,#101010,#151515,#181818);
}

body.active-dark .service-breadcrumb {
    border-color: #292929;
    background: #202020;
    color: #aaa;
}

body.active-dark .service-breadcrumb .current {
    color: #eee;
}

body.active-dark .service-breadcrumb a,
body.active-dark .service-eyebrow {
    color: #aa98ff;
}

body.active-dark .service-detail-title {
    color: #f0efff;
}

body.active-dark .service-detail-lead {
    color: #aaa;
}

body.active-dark .service-hero-visual {
    border-color: #343044;
    background: #202026;
    box-shadow: 0 25px 65px rgba(0,0,0,.35);
}

body.active-dark .service-detail-content {
    background: #101010;
}

body.active-dark .service-section-heading h2 {
    color: #e6e6e6;
}

body.active-dark .service-section-heading span {
    color: #aa98ff;
}

body.active-dark .service-rich-text {
    color: #aaa;
}

body.active-dark .service-info-card,
body.active-dark .related-service-card {
    border-color: #292929;
    background: #1b1b1b;
    box-shadow: 0 12px 38px rgba(0,0,0,.22);
}

body.active-dark .service-info-card h3,
body.active-dark .service-info-row strong,
body.active-dark .related-service-card h3 a {
    color: #e6e6e6;
}

body.active-dark .service-info-row {
    border-color: #292929;
}

body.active-dark .service-info-row small,
body.active-dark .related-service-card p {
    color: #aaa;
}

body.active-dark .related-services-section {
    background: #151515;
}

body.active-dark .related-service-icon {
    background: #29223d;
}

body.active-dark .related-service-link {
    color: #aa98ff;
}

/* RESPONSIVE */

@media(max-width:767px) {
    .service-detail-hero {
        padding: 105px 0 65px;
    }

    .service-breadcrumb {
        gap: 7px;
        margin-bottom: 35px;
        padding: 10px 14px;
        font-size: 12px;
    }

    .service-detail-content {
        padding: 55px 0;
    }

    .service-detail-lead {
        font-size: 16px;
    }

    .service-section-heading h2 {
        font-size: 26px;
    }

    .service-hero-visual {
        width: 140px;
        height: 140px;
        padding: 25px;
    }

    .service-cta {
        padding: 25px;
    }
}
</style>


{{-- =================================
     HERO SECTION
================================= --}}

<section class="service-detail-hero">
    <div class="container">

        <nav class="service-breadcrumb">
            <a href="{{ url('/') }}">
                <i class="fas fa-home"></i> Home
            </a>

            <span>/</span>

            <a href="{{ route('Services.index') }}">
                Services
            </a>

            <span>/</span>

            <span class="current">
                {{ $Service->title }}
            </span>
        </nav>

        <div class="row align-items-center">

            <div class="col-lg-8">

                <div class="service-eyebrow">
                    {{ $Service->title_Golobale ?: 'Our Services' }}
                </div>

                <h1 class="service-detail-title">
                    {{ $Service->title }}
                </h1>

                @if($Service->description)
                    <p class="service-detail-lead">
                        {{ \Illuminate\Support\Str::limit(strip_tags($Service->description), 220) }}
                    </p>
                @endif

            </div>

            <div class="col-lg-4 d-none d-lg-block">

                @if($serviceIcon)
                    <div class="service-hero-visual">
                        <img src="{{ $serviceIcon }}"
                             alt="{{ $Service->title }}">
                    </div>
                @else
                    <div class="service-hero-visual">
                        <i class="fas fa-layer-group"
                           style="font-size:65px;color:#6748ed"></i>
                    </div>
                @endif

            </div>

        </div>
    </div>
</section>


{{-- =================================
     SERVICE DETAILS
================================= --}}

<section class="service-detail-content">
    <div class="container">

        <div class="row align-items-start">

            <div class="col-lg-7">

                @if($servicePhoto)
                    <img
                        src="{{ $servicePhoto }}"
                        alt="{{ $Service->title }}"
                        class="service-detail-image"
                    >
                @endif

                <div class="mt-5">

                    <div class="service-section-heading">
                        <span>Service Overview</span>

                        <h2>
                            {{ $Service->title_Golobale ?: $Service->title }}
                        </h2>
                    </div>

                    @if($Service->description)
                        <div class="service-rich-text">
                            {!! nl2br(e($Service->description)) !!}
                        </div>
                    @endif

                    @if($Service->text)
                        <div class="service-rich-text mt-4">
                            {!! nl2br(e($Service->text)) !!}
                        </div>
                    @endif

                </div>

            </div>


            {{-- SERVICE SIDEBAR --}}

            <aside class="col-lg-5">

                <div class="service-info-card">

                    <h3>Service Information</h3>

                    <div class="service-info-row">
                        <small>Service Name</small>
                        <strong>{{ $Service->title }}</strong>
                    </div>

                    @if($Service->title_Golobale)
                        <div class="service-info-row">
                            <small>Category</small>
                            <strong>{{ $Service->title_Golobale }}</strong>
                        </div>
                    @endif

                    @if($Service->slug)
                        <div class="service-info-row">
                            <small>Reference</small>
                            <strong>{{ $Service->slug }}</strong>
                        </div>
                    @endif

                </div>


                {{-- CONTACT CTA --}}

                <div class="service-cta mt-4">

                    <h3>Have a Project in Mind?</h3>

                    <p>
                        Let's discuss your idea and find the best solution
                        for your business.
                    </p>

                    <a href="{{ url('/Contact') }}">
                        Request a Quote
                        <i class="fas fa-arrow-right"></i>
                    </a>

                </div>

            </aside>

        </div>

    </div>
</section>


{{-- =================================
     RELATED SERVICES
================================= --}}

@if(isset($RelatedServices) && $RelatedServices->isNotEmpty())

<section class="related-services-section">

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">

                <div class="service-section-heading">
                    <span>Explore More</span>
                    <h2>Other Services</h2>
                    <p class="text-muted">
                        Discover more solutions for your business.
                    </p>
                </div>

            </div>
        </div>


        <div class="row">

            @foreach($RelatedServices as $relatedService)

                <div class="col-lg-4 col-md-6 mb-4">

                    <article class="related-service-card">

                        <div class="related-service-icon">

                            @if($relatedService->icon)
                                <img
                                    src="{{ asset('storage/' . $relatedService->icon) }}"
                                    alt="{{ $relatedService->title }}"
                                    loading="lazy"
                                >
                            @else
                                <i class="fas fa-layer-group"
                                   style="font-size:25px;color:#6748ed"></i>
                            @endif

                        </div>

                        <h3>
                            <a href="{{ route('Services.show', $relatedService->id) }}">
                                {{ $relatedService->title }}
                            </a>
                        </h3>

                        <p>
                            {{ \Illuminate\Support\Str::limit(strip_tags($relatedService->description), 120) }}
                        </p>

                        <a class="related-service-link"
                           href="{{ route('Services.show', $relatedService->id) }}">

                            View Details
                            <i class="fas fa-arrow-right"></i>

                        </a>

                    </article>

                </div>

            @endforeach

        </div>

    </div>

</section>

@endif

@endsection
