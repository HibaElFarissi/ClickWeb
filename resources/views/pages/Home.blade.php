@extends('layouts.navbar')

@section('content')
    {{-- HERO: content is managed from the existing Abouts section --}}
    @if ($homeAbout)
        <section class="hero-card-web mobile-app-">
            <div class="hero-main-rp container-fluid">
                <div class="row">
                    <div class="col-lg-6 v-center">
                        <div class="hero-heading-sec2 niwax" data-rellax-speed="3">
                            <h1 class="wow fadeIn" data-wow-delay="0.2s">{{ $homeAbout->title_1 }}</h1>
                            <p class="wow fadeIn" data-wow-delay="0.4s">{{ $homeAbout->slug_1 }}</p>
                            <div class="content-sec d-flex mt30 v-center text-w wow fadeIn" data-wow-delay="0.6s">
                                <div class="mr25">
                                    <a href="{{ route('Contact') }}" class="btn-main bg-btn4 lnk">
                                        GET STARTED <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span>
                                    </a>
                                </div>
                                @if ($Logos->isNotEmpty())
                                    <div class="title-hero-oth v-center"><p>Our trusted partners</p></div>
                                @endif
                            </div>

                            @if ($Logos->isNotEmpty())
                                <div class="awrd-sec text-w mt40 wow fadeIn" data-wow-delay="0.8s">
                                    <h5>Our Achievements</h5>
                                    <div class="bages-slider owl-carousel mt20">
                                        @foreach ($Logos as $logo)
                                            @if ($logo->photo)
                                                <div class="img-badge-">
                                                    <img src="{{ asset('storage/' . $logo->photo) }}" alt="Achievement" class="img100w">
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 v-center">
                        <div class="app-hero-bnr wow fadeIn" data-wow-delay="0.4s">
                            <img
                                src="{{ $homeAbout->photo_2 ? asset('storage/' . $homeAbout->photo_2) : asset('Frontend/images/hero/mobile_hero_banner.png') }}"
                                alt="{{ $homeAbout->title_1 }}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- LOGO CAROUSEL --}}
    @if ($Logos->isNotEmpty())
        <div class="weworkfor pt20 pb20 dark-bg2">
            <div class="container">
                <div class="logo-weworkfor owl-carousel">
                    @foreach ($Logos as $logo)
                        @if ($logo->photo)
                            <div class="items">
                                <img src="{{ asset('storage/' . $logo->photo) }}" alt="Partner logo" class="img100w">
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    {{-- ABOUT + REAL DATABASE COUNTERS --}}
    @if ($homeAbout)
        <section class="about-sec-app pad-tb pt60 dark-bg2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="common-heading text-l">
                            <h2 class="mb30">{{ $homeAbout->title_2 }}</h2>
                            <p>{{ $homeAbout->slug_2 }}</p>
                            @if ($homeAbout->slug_chairman)
                                <p class="mt10">{{ $homeAbout->slug_chairman }}</p>
                            @endif
                        </div>
                        <div class="cta-card mt40">
                            <a href="{{ route('About') }}" class="btn-outline lnk">
                                More About Us <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="funfact">
                            <div class="row">
                                @foreach ($stats as $stat)
                                    @if (!is_null($stat['value']))
                                        <div class="col-lg-4 col-md-6 col-sm-12 col-6">
                                            <div class="funfct srcl{{ ($loop->index % 5) + 1 }}">
                                                <img src="{{ asset($stat['icon']) }}" alt="{{ $stat['label'] }}">
                                                <span class="services-cuntr counter">{{ $stat['value'] }}</span>
                                                <span class="services-cuntr">{{ $stat['suffix'] }}</span>
                                                <p>{{ $stat['label'] }}</p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- SERVICES --}}
    @if ($Services->isNotEmpty())
        <section class="service-section-app pad-tb dark-bg2">
            <div class="sctxt">Services</div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="common-heading ptag">
                            <span>What We Do</span>
                            <h2>{{ $Services->first()->title_Golobale ?: 'Our Services' }}</h2>
                            <p class="mb30">{{ $Services->first()->text }}</p>
                        </div>
                    </div>
                </div>
                <div class="row upset ovr-bg1 ho-gdnt">
                    @foreach ($Services as $service)
                        <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay="{{ ($loop->index % 3 + 1) * 0.2 }}s">
                            <div class="s-block up-hor ovr-base">
                                <div class="nn-card-set">
                                    <div class="s-card-icon">
                                        @if ($service->icon)
                                            <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->title }}" class="img-fluid">
                                        @elseif ($service->photo)
                                            <img src="{{ asset('storage/' . $service->photo) }}" alt="{{ $service->title }}" class="img-fluid">
                                        @endif
                                    </div>
                                    <h4>{{ $service->title }}</h4>
                                    <p>{{ $service->description }}</p>
                                    <a href="{{ route('Service') }}">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- WHY CHOOSE US: existing Features CRUD --}}
    @if ($Features->isNotEmpty())
        <section class="why-choos-lg pad-tb deep-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="common-heading text-l">
                            <span>Why Choose Us</span>
                            <h2 class="mb20">Why Choose Our Team?</h2>
                            <div class="itm-media-object mt40 tilt-3d">
                                @foreach ($Features as $feature)
                                    <div class="media {{ !$loop->first ? 'mt40' : '' }}">
                                        <div class="img-ab- base">
                                            @if ($feature->icon)
                                                <img src="{{ asset('storage/' . $feature->icon) }}" alt="{{ $feature->title }}" class="layer">
                                            @endif
                                        </div>
                                        <div class="media-body">
                                            <h4>{{ $feature->title }}</h4>
                                            <p>{{ $feature->description }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="single-image bg-shape-dez wow fadeIn" data-wow-duration="2s">
                            <img src="{{ $homeAbout && $homeAbout->photo_1 ? asset('storage/' . $homeAbout->photo_1) : asset('Frontend/images/about/about-company.jpg') }}" alt="About our company" class="img-fluid">
                        </div>
                        <div class="cta-card mt60 text-center">
                            <h3 class="mb20">Let's Start a <span class="text-second text-bold">New Project</span> Together</h3>
                            <p>Contact us to discuss your project and requirements.</p>
                            <a href="{{ route('Contact') }}" class="btn-outline lnk mt30">Request A Quote <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- PORTFOLIO --}}
    @if ($projects->isNotEmpty())
        <section class="portfolio-section pad-tb">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading">
                            <span>Our Work</span>
                            <h2 class="mb20">{{ $homeAbout->title_project ?? 'Our Latest Creative Work' }}</h2>
                            @if ($homeAbout && $homeAbout->slug_project)
                                <p>{{ $homeAbout->slug_project }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($projects as $project)
                        <div class="col-lg-4 col-sm-6 mt40 wow fadeIn" data-wow-delay="{{ ($loop->index % 3 + 1) * 0.2 }}s">
                            <div class="isotope_item up-hor">
                                <div class="item-image">
                                    <a href="{{ route('projects.show', $project) }}">
                                        <img src="{{ $project->photo ? asset('storage/' . $project->photo) : asset('Frontend/images/portfolio/app-img1.jpg') }}" alt="{{ $project->name }}" class="img-fluid">
                                    </a>
                                </div>
                                <div class="item-info-div shdo">
                                    <h4><a href="{{ route('projects.show', $project) }}">{{ $project->name }}</a></h4>
                                    <p>{{ optional($project->categorie)->name }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-12 maga-btn mt60">
                        <a href="{{ route('Project') }}" class="btn-outline">View More Projects <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- CLIENTS --}}
    @if ($Clients->isNotEmpty())
        <section class="clients-section-app pad-tb">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading text-w">
                            <span>Our happy customers</span>
                            <h2 class="mb30">Some of our Clients</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="client-logoset">
                            <ul class="row text-center clearfix apppg">
                                @foreach ($Clients as $client)
                                    @if ($client->photo)
                                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn">
                                            <div class="brand-logo hoshd">
                                                <img src="{{ asset('storage/' . $client->photo) }}" alt="{{ $client->name }}" class="img-fluid">
                                            </div>
                                            <p>{{ $client->name }}</p>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- SKILLS --}}
    @if ($Skill_item->isNotEmpty())
        <section class="work-category pad-tb">
            <div class="container">
                <div class="row justify-content-left">
                    <div class="col-lg-6">
                        <div class="common-heading pp">
                            <span>Our Work</span>
                            <h2>Skills</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 v-center">
                        <div class="filters">
                            <ul class="filter-menu home-skill-filters">
                                <li data-filter="all" class="is-checked">All</li>
                                @foreach ($Skill_item as $type)
                                    <li data-filter="skill-type-{{ $type->id }}">{{ $type->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt30 osm">
                    @foreach ($Skill_item as $type)
                        @foreach ($type->skill as $skill)
                            <div class="col-lg-3 col-sm-6 col-6 Skill_item skill-type-{{ $type->id }}">
                                <div class="industry-workfor hoshd">
                                    @if ($skill->Photo)
                                        <img src="{{ asset('storage/' . $skill->Photo) }}" alt="{{ $skill->name }}">
                                    @endif
                                    <h6>{{ $skill->name }}</h6>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- TESTIMONIALS --}}
    @if ($Testimonials->isNotEmpty())
        <section class="testinomial-section-app bg-none pad-tb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="common-heading text-l">
                            <span>What our clients say</span>
                            <h2>Client Reviews</h2>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="pl50">
                            <div class="shape shape-a1"><img src="{{ asset('Frontend/images/shape/shape-3.svg') }}" alt="shape"></div>
                            <div class="testimonial-card-a tcd owl-carousel">
                                @foreach ($Testimonials as $testimonial)
                                    <div class="testimonial-card">
                                        <div class="tt-text"><p>{{ $testimonial->Reviews }}</p></div>
                                        <div class="client-thumbs mt30">
                                            <div class="media v-center upset">
                                                @if ($testimonial->photo)
                                                    <div class="user-image bdr-radius">
                                                        <img src="{{ asset('storage/' . $testimonial->photo) }}" alt="{{ $testimonial->name }}" class="img-fluid rounded-circle">
                                                    </div>
                                                @endif
                                                <div class="media-body user-info v-center">
                                                    <h5>{{ $testimonial->name }}</h5>
                                                    <p>{{ $testimonial->work }}</p>
                                                    <i class="fas fa-quote-right posiqut"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- CTA + CONTACT DETAILS --}}
    @if ($infos)
        <section class="app-cta pad-tb">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading text-w">
                            <span>Let's work together</span>
                            <h2>{{ $infos->slug }}</h2>
                            <a href="{{ route('Contact') }}" class="btn-main bg-btn4 lnk">GET STARTED <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                            @if ($infos->Phone_1)
                                <p class="cta-call">Or call us now
                                    <a href="tel:{{ preg_replace('/\s+/', '', $infos->Phone_1) }}"><i class="fas fa-phone-alt"></i> {{ $infos->Phone_1 }}</a>
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape shape-c1"></div>
            <div class="shape shape-c2"></div>
            <div class="shape shape-c3"></div>
        </section>

        <section class="our-office pad-tb">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading">
                            <span>Find Us</span>
                            <h2>Our Office</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-sm-8 shape-loc wow fadeIn">
                        <div class="office-card hoshd">
                            <div class="info-text-div">
                                <h4>Our Office</h4>
                                <h6 class="mt10">Contact Information</h6>
                                <p>{{ $infos->address }}</p>
                                <ul class="-address-list mt10">
                                    @if ($infos->Email_1)
                                        <li><a href="mailto:{{ $infos->Email_1 }}"><i class="fas fa-envelope"></i> {{ $infos->Email_1 }}</a></li>
                                    @endif
                                    @if ($infos->Phone_1)
                                        <li><a href="tel:{{ preg_replace('/\s+/', '', $infos->Phone_1) }}"><i class="fas fa-phone-alt"></i> {{ $infos->Phone_1 }}</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const filters = document.querySelectorAll('.home-skill-filters li');
            const items = document.querySelectorAll('.Skill_item');

            filters.forEach(function (filter) {
                filter.addEventListener('click', function () {
                    filters.forEach(function (item) {
                        item.classList.remove('is-checked');
                    });

                    filter.classList.add('is-checked');
                    const selected = filter.dataset.filter;

                    items.forEach(function (item) {
                        item.style.display = selected === 'all' || item.classList.contains(selected)
                            ? ''
                            : 'none';
                    });
                });
            });
        });
    </script>
@endsection
