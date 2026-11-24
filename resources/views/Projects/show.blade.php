@extends('layouts.navbar')

@section('content')

@php
    // Decode the gallery images saved as JSON by ProjectsController.
    $galleryImages = [];
    if (!empty($project->images)) {
        $decodedImages = is_array($project->images)
            ? $project->images
            : json_decode($project->images, true);

        if (is_array($decodedImages)) {
            $galleryImages = $decodedImages;
        }
    }

    $mainImage = $project->photo
        ? asset('storage/' . $project->photo)
        : asset('Frontend/images/portfolio/project-view-1.jpg');

    $websiteUrl = trim((string) $project->View_website);
    if ($websiteUrl !== '' && !preg_match('~^https?://~i', $websiteUrl)) {
        $websiteUrl = 'https://' . $websiteUrl;
    }
@endphp

<style>
    /* =========================
       PROJECT HERO
    ========================= */
    .project-hero {
        position: relative;
        isolation: isolate;
        overflow: hidden;
        padding: 125px 0 85px;
        background:
            radial-gradient(circle at 83% 35%, rgba(111, 76, 255, .16), transparent 28%),
            linear-gradient(120deg, #fbfaff 0%, #f0f2ff 55%, #f8f7ff 100%);
    }

    .project-hero::before {
        content: "";
        position: absolute;
        z-index: -1;
        width: 580px;
        height: 580px;
        right: -170px;
        top: -280px;
        border-radius: 50%;
        border: 1px solid rgba(105, 75, 255, .12);
        box-shadow: 0 0 0 45px rgba(105, 75, 255, .025),
                    0 0 0 90px rgba(105, 75, 255, .02);
    }

    .project-hero::after {
        content: "";
        position: absolute;
        z-index: -1;
        left: -5%;
        bottom: -100px;
        width: 110%;
        height: 150px;
        background: linear-gradient(90deg, #b99cff, #6d55f5, #6cb5f4);
        transform: rotate(3deg);
        opacity: .8;
    }

    .project-breadcrumb {
        display: inline-flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 12px;
        margin-bottom: 48px;
        padding: 13px 22px;
        border: 1px solid rgba(255,255,255,.9);
        border-radius: 50px;
        background: rgba(255,255,255,.72);
        box-shadow: 0 10px 35px rgba(60, 55, 130, .07);
        color: #65708b;
        font-size: 15px;
        backdrop-filter: blur(12px);
    }

    .project-breadcrumb a {
        color: #6246ed;
        text-decoration: none;
        transition: color .2s ease;
    }

    .project-breadcrumb a:hover { color: #2512a8; }
    .project-breadcrumb .separator { color: #aaa4d5; }
    .project-breadcrumb .current {
        color: #182044;
        max-width: 260px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .project-eyebrow {
        display: flex;
        align-items: center;
        gap: 13px;
        margin-bottom: 18px;
        color: #6246ed;
        font-size: 15px;
        font-weight: 800;
        letter-spacing: 3px;
        text-transform: uppercase;
    }

    .project-eyebrow::before {
        content: "";
        display: inline-block;
        width: 44px;
        height: 3px;
        border-radius: 5px;
        background: #6246ed;
    }

    .project-hero-title {
        max-width: 900px;
        margin: 0 0 18px;
        color: #090e45;
        font-size: clamp(38px, 5.2vw, 68px);
        font-weight: 800;
        line-height: 1.12;
        letter-spacing: -1.8px;
        overflow-wrap: anywhere;
    }

    .project-hero-description {
        max-width: 760px;
        margin: 0;
        color: #65708b;
        font-size: 19px;
        line-height: 1.75;
    }

    .project-meta-list {
        display: flex;
        flex-wrap: wrap;
        gap: 13px;
        margin-top: 30px;
    }

    .project-meta-item {
        display: inline-flex;
        align-items: center;
        gap: 11px;
        min-height: 55px;
        padding: 12px 20px;
        border: 1px solid rgba(105, 75, 255, .06);
        border-radius: 50px;
        background: rgba(105, 75, 255, .07);
        color: #66708b;
        font-size: 14px;
    }

    .project-meta-item i {
        color: #6548ed;
        font-size: 18px;
    }

    .project-meta-item strong { color: #151b48; }

    /* Decorative browser illustration made with CSS */
    .project-hero-art {
        position: relative;
        max-width: 390px;
        margin: 15px auto 0;
        padding: 22px 10px;
    }

    .project-browser {
        overflow: hidden;
        padding: 15px;
        border: 1px solid rgba(119, 101, 226, .2);
        border-radius: 23px;
        background: rgba(255,255,255,.78);
        box-shadow: 0 25px 65px rgba(81, 65, 190, .16);
        transform: rotate(-5deg);
    }

    .project-browser-top {
        display: flex;
        gap: 7px;
        padding: 3px 0 15px;
        border-bottom: 1px solid #eeeaff;
    }

    .project-browser-top span {
        width: 11px;
        height: 11px;
        border-radius: 50%;
        background: #a99af7;
    }

    .project-browser-body {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 13px;
        padding: 20px 3px 8px;
    }

    .project-browser-picture {
        min-height: 115px;
        border-radius: 13px;
        background: linear-gradient(140deg, #c5baff, #eeeaff);
    }

    .project-browser-lines span {
        display: block;
        height: 12px;
        margin: 10px 0;
        border-radius: 20px;
        background: #e5e0ff;
    }

    .project-browser-lines span:nth-child(2) { width: 85%; }
    .project-browser-lines span:nth-child(3) { width: 65%; }

    .project-code-bubble {
        position: absolute;
        right: 0;
        bottom: 0;
        display: grid;
        width: 78px;
        height: 78px;
        place-items: center;
        border: 5px solid rgba(255,255,255,.8);
        border-radius: 25px;
        background: linear-gradient(135deg, #7957ff, #4522d6);
        color: #fff;
        font-size: 29px;
        box-shadow: 0 15px 35px rgba(90, 50, 220, .28);
    }

    /* =========================
       PROJECT CONTENT
    ========================= */
    .project-content-section { padding: 85px 0; }
    .project-main-image {
        display: block;
        width: 100%;
        max-height: 570px;
        object-fit: cover;
        border-radius: 20px;
        background: #f2f2f8;
        box-shadow: 0 18px 50px rgba(20, 20, 60, .10);
    }

    .project-section-heading { margin-bottom: 22px; }
    .project-section-heading span {
        color: #6748ed;
        font-size: 13px;
        font-weight: 800;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .project-section-heading h2 {
        margin: 8px 0 0;
        color: #101642;
        font-size: 32px;
        font-weight: 800;
    }

    .project-description {
        color: #68718a;
        font-size: 16px;
        line-height: 1.9;
        overflow-wrap: anywhere;
    }

    .project-side-card {
        padding: 27px;
        border: 1px solid #eeedf8;
        border-radius: 18px;
        background: #fff;
        box-shadow: 0 12px 38px rgba(28, 24, 85, .06);
    }

    .project-side-card h3 {
        margin: 0 0 17px;
        color: #101642;
        font-size: 21px;
        font-weight: 800;
    }

    .project-info-row {
        padding: 14px 0;
        border-bottom: 1px solid #f0eff7;
    }

    .project-info-row:last-child { border-bottom: 0; }
    .project-info-row small {
        display: block;
        margin-bottom: 5px;
        color: #8b90a5;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .project-info-row strong {
        color: #24294f;
        font-size: 15px;
        overflow-wrap: anywhere;
    }

    .project-visit-button {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 100%;
        margin-top: 20px;
        padding: 15px 20px;
        border-radius: 10px;
        background: linear-gradient(100deg, #704cff, #4c35d7);
        color: #fff !important;
        font-weight: 700;
        text-decoration: none !important;
        transition: transform .2s ease, box-shadow .2s ease;
    }

    .project-visit-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 25px rgba(91, 65, 220, .22);
    }

    .project-gallery {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 18px;
    }

    .project-gallery a {
        display: block;
        overflow: hidden;
        border-radius: 15px;
        background: #f3f2fa;
    }

    .project-gallery img {
        display: block;
        width: 100%;
        height: 240px;
        object-fit: cover;
        transition: transform .35s ease;
    }

    .project-gallery a:hover img { transform: scale(1.05); }

    .project-tag {
        display: inline-block;
        margin: 5px 5px 5px 0;
        padding: 8px 14px;
        border: 1px solid #e7e1ff;
        border-radius: 30px;
        background: #f5f2ff;
        color: #6246df;
        font-size: 13px;
        font-weight: 600;
    }

    .project-team-card {
        height: 100%;
        padding: 20px;
        border: 1px solid #efedf8;
        border-radius: 15px;
        background: #fff;
    }

    .project-team-card img {
        width: 58px;
        height: 58px;
        border-radius: 50%;
        object-fit: cover;
    }

    .project-team-card h4 {
        margin: 0 0 4px;
        color: #171c45;
        font-size: 16px;
        font-weight: 700;
    }

    .project-team-card p {
        margin: 10px 0 0;
        color: #788098;
        font-size: 13px;
        line-height: 1.6;
    }

    .project-related-section {
        padding: 75px 0;
        background: #f8f8fc;
    }

    .project-related-card {
        height: 100%;
        overflow: hidden;
        border: 1px solid #efedf7;
        border-radius: 16px;
        background: #fff;
        box-shadow: 0 10px 30px rgba(20, 20, 60, .05);
        transition: transform .25s ease, box-shadow .25s ease;
    }

    .project-related-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 18px 38px rgba(20, 20, 60, .10);
    }

    .project-related-card img {
        width: 100%;
        height: 220px;
        object-fit: cover;
    }

    .project-related-card-body { padding: 20px; }
    .project-related-card h3 {
        margin: 0 0 8px;
        font-size: 18px;
        font-weight: 800;
    }

    .project-related-card h3 a {
        color: #151a43;
        text-decoration: none;
    }

    .project-related-card p {
        margin: 0;
        color: #82879b;
        font-size: 13px;
    }

    @media (max-width: 991px) {
        .project-hero-art { max-width: 310px; }
        .project-content-section { padding: 60px 0; }
    }

    @media (max-width: 767px) {
        .project-hero { padding: 105px 0 65px; }
        .project-breadcrumb {
            gap: 7px;
            margin-bottom: 35px;
            padding: 10px 14px;
            font-size: 12px;
        }
        .project-breadcrumb .current { max-width: 130px; }
        .project-hero-title { letter-spacing: -.8px; }
        .project-hero-description { font-size: 16px; }
        .project-meta-list { align-items: flex-start; flex-direction: column; }
        .project-meta-item { width: 100%; }
        .project-gallery { grid-template-columns: 1fr; }
        .project-gallery img { height: 220px; }
        .project-section-heading h2 { font-size: 26px; }
        .project-side-card { margin-top: 25px; }
    }


/* PROJECT SHOW - DARK MODE */

body.active-dark .project-hero {
    background:
        radial-gradient(circle at 83% 35%, rgba(111,76,255,.18), transparent 28%),
        linear-gradient(120deg,#101010,#151515,#181818);
}

body.active-dark .project-breadcrumb {
    background: #202020;
    border-color: #292929;
    color: #aaa;
}

body.active-dark .project-breadcrumb .current {
    color: #eee;
}

body.active-dark .project-hero-title,
body.active-dark .project-section-heading h2,
body.active-dark .project-side-card h3,
body.active-dark .project-team-card h4 {
    color: #e6e6e6;
}

body.active-dark .project-hero-description,
body.active-dark .project-description {
    color: #a2a2a2;
}

body.active-dark .project-content-section {
    background: #101010;
}

body.active-dark .project-side-card,
body.active-dark .project-team-card {
    background: #181818;
    border-color: #292929;
}

body.active-dark .project-info-row {
    border-color: #292929;
}

body.active-dark .project-info-row strong {
    color: #e6e6e6;
}

body.active-dark .project-info-row small {
    color: #999;
}

body.active-dark .project-related-section {
    background: #151515;
}

body.active-dark .project-related-card {
    background: #1b1b1b;
    border-color: #292929;
}

body.active-dark .project-related-card h3 a {
    color: #e6e6e6;
}

body.active-dark .project-related-card p {
    color: #a2a2a2;
}

body.active-dark .project-tag {
    background: #211b32;
    border-color: #39304f;
    color: #c0b2ff;
}

body.active-dark .project-meta-item {
    background: #211b32;
    color: #bbb;
}

body.active-dark .project-meta-item strong {
    color: #eee;
}

body.active-dark .project-browser {
    background: #202026;
    border-color: #393044;
}

body.active-dark .project-browser-lines span {
    background: #39334f;
}

</style>

{{-- =========================
     HERO BANNER
========================= --}}
<section class="project-hero">
    <div class="container">

        <nav class="project-breadcrumb" aria-label="Breadcrumb">
            <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a>
            <span class="separator">/</span>
            <a href="{{ route('Project') }}">Projects</a>
            <span class="separator">/</span>
            <span class="current">{{ $project->name }}</span>
        </nav>

        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="project-eyebrow">Project Details</div>

                <h1 class="project-hero-title">{{ $project->name }}</h1>

                @if($project->description)
                    <p class="project-hero-description">
                        {{ \Illuminate\Support\Str::limit(strip_tags($project->description), 180) }}
                    </p>
                @endif

                <div class="project-meta-list">
                    @if($project->Start_Date)
                        <div class="project-meta-item">
                            <i class="far fa-calendar-alt"></i>
                            <span>Project Date:
                                <strong>
                                    {{ \Illuminate\Support\Carbon::parse($project->Start_Date)->format('M Y') }}
                                </strong>
                            </span>
                        </div>
                    @endif

                    @if($project->Client)
                        <div class="project-meta-item">
                            <i class="fas fa-user-friends"></i>
                            <span>Client: <strong>{{ $project->Client }}</strong></span>
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-lg-4 d-none d-lg-block">
                <div class="project-hero-art" aria-hidden="true">
                    <div class="project-browser">
                        <div class="project-browser-top">
                            <span></span><span></span><span></span>
                        </div>
                        <div class="project-browser-body">
                            <div class="project-browser-picture"></div>
                            <div class="project-browser-lines">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
                    </div>
                    <div class="project-code-bubble">
                        <i class="fas fa-code"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- =========================
     PROJECT DETAILS
========================= --}}
<section class="project-content-section">
    <div class="container">
        <div class="row align-items-start">

            <div class="col-lg-8">
                <img
                    src="{{ $mainImage }}"
                    alt="{{ $project->name }}"
                    class="project-main-image"
                    loading="eager"
                >

                <div class="mt-5">
                    <div class="project-section-heading">
                        <span>Project Overview</span>
                        <h2>About This Project</h2>
                    </div>

                    <div class="project-description">
                        {!! nl2br(e($project->description)) !!}
                    </div>
                </div>

                @if(count($galleryImages))
                    <div class="mt-5">
                        <div class="project-section-heading">
                            <span>Project Gallery</span>
                            <h2>Some Screenshots</h2>
                        </div>

                        <div class="project-gallery">
                            @foreach($galleryImages as $galleryImage)
                                @if(is_string($galleryImage) && $galleryImage !== '')
                                    <a
                                        href="{{ asset('storage/' . $galleryImage) }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                    >
                                        <img
                                            src="{{ asset('storage/' . $galleryImage) }}"
                                            alt="{{ $project->name }} screenshot"
                                            loading="lazy"
                                        >
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

                @if($project->tags && $project->tags->isNotEmpty())
                    <div class="mt-5">
                        <div class="project-section-heading">
                            <span>Tools & Technologies</span>
                            <h2>Project Tags</h2>
                        </div>

                        @foreach($project->tags as $tag)
                            <span class="project-tag">{{ $tag->name }}</span>
                        @endforeach
                    </div>
                @endif

                @if($project->teams && $project->teams->isNotEmpty())
                    <div class="mt-5">
                        <div class="project-section-heading">
                            <span>People Behind The Work</span>
                            <h2>Project Team</h2>
                        </div>

                        <div class="row">
                            @foreach($project->teams as $member)
                                <div class="col-md-6 mb-3">
                                    <div class="project-team-card">
                                        <div class="d-flex align-items-center">
                                            @if(!empty($member->image))
                                                <img
                                                    src="{{ asset('storage/' . $member->image) }}"
                                                    alt="{{ $member->name }}"
                                                    class="mr-3"
                                                >
                                            @endif

                                            <div class="ml-3">
                                                <h4>{{ $member->name }}</h4>
                                                @if(!empty($member->domain))
                                                    <small class="text-muted">{{ $member->domain }}</small>
                                                @endif
                                            </div>
                                        </div>

                                        @if(!empty($member->description))
                                            <p>{{ $member->description }}</p>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

            {{-- SIDEBAR --}}
            <aside class="col-lg-4">
                <div class="project-side-card">
                    <h3>Project Information</h3>

                    @if($project->Client)
                        <div class="project-info-row">
                            <small>Client</small>
                            <strong>{{ $project->Client }}</strong>
                        </div>
                    @endif

                    @if($project->categorie)
                        <div class="project-info-row">
                            <small>Category</small>
                            <strong>{{ $project->categorie->name }}</strong>
                        </div>
                    @endif

                    @if($project->Start_Date)
                        <div class="project-info-row">
                            <small>Start Date</small>
                            <strong>
                                {{ \Illuminate\Support\Carbon::parse($project->Start_Date)->format('d M Y') }}
                            </strong>
                        </div>
                    @endif

                    @if($project->date_final)
                        <div class="project-info-row">
                            <small>Completion Date</small>
                            <strong>
                                {{ \Illuminate\Support\Carbon::parse($project->date_final)->format('d M Y') }}
                            </strong>
                        </div>
                    @endif

                    @if($websiteUrl !== '')
                        <a
                            href="{{ $websiteUrl }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="project-visit-button"
                        >
                            Visit Website <i class="fas fa-external-link-alt"></i>
                        </a>
                    @endif
                </div>

                <div class="project-side-card mt-4">
                    <h3>Have a Similar Project?</h3>
                    <p class="text-muted">
                        Let's discuss your idea and create something great together.
                    </p>
                    <a href="{{ url('/Contact') }}" class="project-visit-button">
                        Contact Us <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </aside>

        </div>
    </div>
</section>

{{-- =========================
     RELATED PROJECTS
========================= --}}
@if(isset($projects) && $projects->count())
    <section class="project-related-section">
        <div class="container">
            <div class="project-section-heading">
                <span>Explore More</span>
                <h2>Related Projects</h2>
            </div>

            <div class="row">
                @foreach($projects as $relatedProject)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <article class="project-related-card">
                            <a href="{{ route('projects.show', $relatedProject->id) }}">
                                <img
                                    src="{{ $relatedProject->photo
                                        ? asset('storage/' . $relatedProject->photo)
                                        : asset('Frontend/images/portfolio/project-view-1.jpg') }}"
                                    alt="{{ $relatedProject->name }}"
                                    loading="lazy"
                                >
                            </a>

                            <div class="project-related-card-body">
                                <h3>
                                    <a href="{{ route('projects.show', $relatedProject->id) }}">
                                        {{ $relatedProject->name }}
                                    </a>
                                </h3>

                                @if($relatedProject->categorie)
                                    <p>{{ $relatedProject->categorie->name }}</p>
                                @endif
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>

            @if(method_exists($projects, 'links'))
                <div class="mt-3">
                    {{ $projects->links() }}
                </div>
            @endif
        </div>
    </section>
@endif

@endsection
