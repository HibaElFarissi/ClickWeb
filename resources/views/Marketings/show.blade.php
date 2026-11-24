
@extends('layouts.navbar')

@section('content')

@php
    $image = $Marketing->photo
        ? asset('storage/' . $Marketing->photo)
        : null;

    $category = optional($Marketing->categoriemarketing);
    $categoryName = data_get($category, 'name')
        ?: data_get($category, 'title')
        ?: 'Marketing';

    $related = $RelatedMarketings ?? collect();
@endphp

<style>
/* =====================================
   MARKETING DETAIL PAGE
===================================== */

.mk-hero {
    position: relative;
    overflow: hidden;
    padding: 120px 0 85px;
    background:
        radial-gradient(circle at 90% 20%, rgba(112,76,255,.15), transparent 30%),
        linear-gradient(120deg,#faf9ff,#eff0ff,#f9f8ff);
}

.mk-hero:before {
    content: "";
    position: absolute;
    width: 450px;
    height: 450px;
    right: -180px;
    top: -250px;
    border: 1px solid rgba(105,75,255,.15);
    border-radius: 50%;
    box-shadow: 0 0 0 55px rgba(105,75,255,.03),
                0 0 0 110px rgba(105,75,255,.02);
}

.mk-container {
    position: relative;
    z-index: 1;
}

.mk-breadcrumb {
    display: inline-flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 12px;
    margin-bottom: 45px;
    padding: 12px 20px;
    border: 1px solid rgba(255,255,255,.8);
    border-radius: 50px;
    background: rgba(255,255,255,.75);
    color: #777d94;
    font-size: 13px;
}

.mk-breadcrumb a {
    color: #6948ed;
    text-decoration: none;
}

.mk-breadcrumb .current {
    color: #171b42;
}

.mk-label {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 20px;
    color: #6948ed;
    font-size: 13px;
    font-weight: 800;
    letter-spacing: 3px;
    text-transform: uppercase;
}

.mk-label:before {
    content: "";
    width: 35px;
    height: 3px;
    border-radius: 5px;
    background: #6948ed;
}

.mk-title {
    max-width: 850px;
    margin-bottom: 22px;
    color: #111440;
    font-size: clamp(38px,5vw,65px);
    font-weight: 800;
    line-height: 1.15;
    overflow-wrap: anywhere;
}

.mk-subtitle {
    max-width: 750px;
    color: #707891;
    font-size: 17px;
    line-height: 1.9;
}

.mk-hero-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 175px;
    height: 175px;
    margin: auto;
    border: 1px solid #e8e1ff;
    border-radius: 40px;
    background: white;
    box-shadow: 0 25px 60px rgba(80,60,170,.12);
    transform: rotate(-7deg);
}

.mk-hero-icon i {
    color: #6948ed;
    font-size: 65px;
}

/* =====================================
   MAIN CONTENT
===================================== */

.mk-content {
    padding: 85px 0;
    background: #fff;
}

.mk-main-image {
    width: 100%;
    max-height: 520px;
    object-fit: cover;
    border-radius: 22px;
    box-shadow: 0 20px 55px rgba(20,20,60,.10);
}

.mk-section-title {
    margin-bottom: 25px;
}

.mk-section-title span {
    color: #6948ed;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.mk-section-title h2 {
    margin-top: 10px;
    color: #111440;
    font-size: 31px;
    font-weight: 800;
}

.mk-description {
    color: #737b92;
    font-size: 16px;
    line-height: 2;
    overflow-wrap: anywhere;
}

/* =====================================
   PROJECT INFORMATION
===================================== */

.mk-info-card {
    padding: 30px;
    border: 1px solid #eeedf7;
    border-radius: 20px;
    background: #fff;
    box-shadow: 0 12px 40px rgba(30,25,90,.06);
}

.mk-info-card h3 {
    margin-bottom: 22px;
    color: #111440;
    font-size: 22px;
    font-weight: 800;
}

.mk-info-item {
    padding: 16px 0;
    border-bottom: 1px solid #f0eff7;
}

.mk-info-item:last-child {
    border-bottom: 0;
}

.mk-info-item small {
    display: block;
    margin-bottom: 7px;
    color: #9296a8;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.mk-info-item strong {
    color: #252a50;
    font-size: 15px;
    overflow-wrap: anywhere;
}

/* =====================================
   CONTACT
===================================== */

.mk-cta {
    margin-top: 25px;
    padding: 32px;
    border-radius: 20px;
    background: linear-gradient(120deg,#704cff,#4932d4);
    box-shadow: 0 18px 40px rgba(91,65,220,.18);
}

.mk-cta h3 {
    margin-bottom: 12px;
    color: white;
    font-size: 24px;
    font-weight: 800;
}

.mk-cta p {
    color: rgba(255,255,255,.85);
    line-height: 1.8;
}

.mk-cta a {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-top: 12px;
    padding: 13px 22px;
    border-radius: 10px;
    background: white;
    color: #593bdd !important;
    font-weight: 700;
    text-decoration: none;
    transition: .3s;
}

.mk-cta a:hover {
    transform: translateY(-3px);
}

/* =====================================
   RELATED MARKETING
===================================== */

.mk-related {
    padding: 80px 0;
    background: #f8f8fc;
}

.mk-related-card {
    height: 100%;
    overflow: hidden;
    border: 1px solid #efedf7;
    border-radius: 18px;
    background: white;
    box-shadow: 0 10px 30px rgba(20,20,60,.05);
    transition: .3s ease;
}

.mk-related-card:hover {
    transform: translateY(-7px);
    box-shadow: 0 20px 40px rgba(20,20,60,.10);
}

.mk-related-card img {
    width: 100%;
    height: 220px;
    object-fit: cover;
}

.mk-related-body {
    padding: 24px;
}

.mk-related-body h3 {
    font-size: 19px;
    font-weight: 800;
}

.mk-related-body h3 a {
    color: #171b42;
    text-decoration: none;
}

.mk-related-body p {
    color: #81869a;
    font-size: 14px;
    line-height: 1.8;
}

.mk-related-link {
    display: inline-block;
    margin-top: 10px;
    color: #6948ed;
    font-weight: 700;
    text-decoration: none;
}

/* =====================================
   DARK MODE
===================================== */

body.active-dark .mk-hero {
    background:
        radial-gradient(circle at 90% 20%,rgba(112,76,255,.18),transparent 30%),
        linear-gradient(120deg,#101010,#171717,#1b1b1b);
}

body.active-dark .mk-breadcrumb {
    border-color: #303030;
    background: #222;
    color: #aaa;
}

body.active-dark .mk-breadcrumb .current,
body.active-dark .mk-title {
    color: #f0efff;
}

body.active-dark .mk-breadcrumb a,
body.active-dark .mk-label {
    color: #aa98ff;
}

body.active-dark .mk-subtitle {
    color: #aaa;
}

body.active-dark .mk-hero-icon {
    border-color: #343044;
    background: #222;
}

body.active-dark .mk-content {
    background: #101010;
}

body.active-dark .mk-section-title h2,
body.active-dark .mk-info-card h3 {
    color: #eee;
}

body.active-dark .mk-section-title span {
    color: #aa98ff;
}

body.active-dark .mk-description {
    color: #aaa;
}

body.active-dark .mk-info-card,
body.active-dark .mk-related-card {
    border-color: #303030;
    background: #1c1c1c;
}

body.active-dark .mk-info-item {
    border-color: #333;
}

body.active-dark .mk-info-item strong,
body.active-dark .mk-related-body h3 a {
    color: #eee;
}

body.active-dark .mk-info-item small,
body.active-dark .mk-related-body p {
    color: #aaa;
}

body.active-dark .mk-related {
    background: #151515;
}

body.active-dark .mk-related-link {
    color: #aa98ff;
}

/* =====================================
   RESPONSIVE
===================================== */

@media(max-width:767px) {

    .mk-hero {
        padding: 100px 0 60px;
    }

    .mk-breadcrumb {
        gap: 7px;
        margin-bottom: 30px;
        padding: 10px 13px;
        font-size: 11px;
    }

    .mk-content {
        padding: 55px 0;
    }

    .mk-title {
        font-size: 38px;
    }

    .mk-subtitle {
        font-size: 15px;
    }

    .mk-section-title h2 {
        font-size: 25px;
    }

    .mk-info-card,
    .mk-cta {
        padding: 23px;
    }

    .mk-related {
        padding: 55px 0;
    }
}
</style>


{{-- =====================================
     HERO
===================================== --}}

<section class="mk-hero">
    <div class="container mk-container">

        <nav class="mk-breadcrumb">
            <a href="{{ route('home') }}">
                <i class="fas fa-home"></i> Home
            </a>

            <span>/</span>

            <a href="{{ route('Marketings') }}">
                Marketings
            </a>

            <span>/</span>

            <span class="current">
                {{ $Marketing->title }}
            </span>
        </nav>

        <div class="row align-items-center">

            <div class="col-lg-8">

                <div class="mk-label">
                    Marketing Project
                </div>

                <h1 class="mk-title">
                    {{ $Marketing->title }}
                </h1>

                @if($Marketing->description)
                    <p class="mk-subtitle">
                        {{ \Illuminate\Support\Str::limit(
                            strip_tags($Marketing->description), 220
                        ) }}
                    </p>
                @endif

            </div>

            <div class="col-lg-4 d-none d-lg-block">
                <div class="mk-hero-icon">
                    <i class="fas fa-bullhorn"></i>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- =====================================
     PROJECT DETAILS
===================================== --}}

<section class="mk-content">

    <div class="container">

        <div class="row align-items-start">

            <div class="col-lg-8">

                @if($image)
                    <img
                        src="{{ $image }}"
                        alt="{{ $Marketing->title }}"
                        class="mk-main-image"
                    >
                @endif

                <div class="mt-5">

                    <div class="mk-section-title">
                        <span>Project Overview</span>

                        <h2>
                            {{ $Marketing->title }}
                        </h2>
                    </div>

                    @if($Marketing->description)

                        <div class="mk-description">
                            {!! nl2br(e($Marketing->description)) !!}
                        </div>

                    @endif

                </div>

            </div>


            {{-- SIDEBAR --}}

            <aside class="col-lg-4 mt-4 mt-lg-0">

                <div class="mk-info-card">

                    <h3>
                        <i class="fas fa-info-circle"
                           style="color:#6948ed"></i>
                        Project Information
                    </h3>

                    <div class="mk-info-item">
                        <small>Project Name</small>
                        <strong>{{ $Marketing->title }}</strong>
                    </div>

                    <div class="mk-info-item">
                        <small>Category</small>
                        <strong>{{ $categoryName }}</strong>
                    </div>

                    <div class="mk-info-item">
                        <small>Published Date</small>
                        <strong>
                            {{ optional($Marketing->created_at)->format('d M Y') ?? '—' }}
                        </strong>
                    </div>

                </div>


                {{-- CTA --}}

                <div class="mk-cta">

                    <h3>
                        Ready to Grow Your Business?
                    </h3>

                    <p>
                        Let's build a powerful marketing strategy
                        that helps your business reach more customers.
                    </p>

                    <a href="{{ route('Contact') }}">
                        Start Your Project
                        <i class="fas fa-arrow-right"></i>
                    </a>

                </div>

            </aside>

        </div>

    </div>

</section>


{{-- =====================================
     RELATED MARKETING PROJECTS
===================================== --}}

@if($related->isNotEmpty())

<section class="mk-related">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-7 text-center">

                <div class="mk-section-title">
                    <span>Explore More</span>
                    <h2>Related Marketing Projects</h2>

                    <p class="text-muted">
                        Discover more of our creative marketing work.
                    </p>
                </div>

            </div>

        </div>


        <div class="row">

            @foreach($related as $relatedMarketing)

                <div class="col-lg-4 col-md-6 mb-4">

                    <article class="mk-related-card">

                        @if($relatedMarketing->photo)

                            <img
                                src="{{ asset('storage/' . $relatedMarketing->photo) }}"
                                alt="{{ $relatedMarketing->title }}"
                                loading="lazy"
                            >

                        @endif

                        <div class="mk-related-body">

                            <h3>
                                <a href="{{ route(
                                    'Marketings.show',
                                    $relatedMarketing->id
                                ) }}">
                                    {{ $relatedMarketing->title }}
                                </a>
                            </h3>

                            <p>
                                {{ \Illuminate\Support\Str::limit(
                                    strip_tags($relatedMarketing->description), 110
                                ) }}
                            </p>

                            <a
                                class="mk-related-link"
                                href="{{ route(
                                    'Marketings.show',
                                    $relatedMarketing->id
                                ) }}"
                            >
                                View Project
                                <i class="fas fa-arrow-right"></i>
                            </a>

                        </div>

                    </article>

                </div>

            @endforeach

        </div>

    </div>

</section>

@endif

@endsection
