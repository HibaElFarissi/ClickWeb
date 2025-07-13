@extends('layouts.navbar')
@section('content')
    <section class="breadcrumb-area text-l banner-1">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 v-center">
                        <div class="bread-inner">
                            <div class="bread-menu">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                </ul>
                            </div>
                            @foreach ($Abouts as $item)
                                <div class="bread-title">
                                    <h2>{{ $item->title_1 }}</h2>
                                    <p class="pt20">{{ $item->slug_1 }} </p>
                                    <a href="#" class="btn-main bg-btn lnk mt30">Contact Us <i
                                            class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-7 v-center">
                        <div class="img-design h-scl-">
                            <div class="imgac "> <img src="{{ asset('Frontend/images/banner/office-view-2.jpg') }}"
                                    alt="creative agnecy html template" class="ag-dg1 img-fluid h-scl-base"></div>
                            <div class="imgac h-scl-base"><img src="{{ asset('Frontend/images/banner/office-view-1.jpg') }}"
                                    alt="creative agnecy html template" class="ag-dg2 img-fluid "></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Area-->
    <!--Start About-->
    <section class="about-agencys pad-tb block-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 v-center">
                    <div class="image-block upset bg-shape wow fadeIn">
                        <img src="{{ asset('Frontend/images/about/cheerful-businessman.jpg') }}" alt="about us Niwax"
                            class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="common-heading text-l">
                        <span>Chairman's message</span>
                        <h2 class="mb0">{{ $item->name_chairman }} </h2>
                        <p class="niwax21">{{ $item->work_chairman }} </p>
                        <p class="pt20"><i class="fas fa-quote-left"></i> {{ $item->slug_chairman }} <i
                                class="fas fa-quote-right"></i> </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About-->

    <!--Start Mission Vision-->
    <section class="missionvision dark-bg4 pad-tb bg-gradient3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <h2>{{ $item->title_2 }} </h2>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <p>{{ $item->slug_2 }} </p>

                </div>
            </div>
            <div class="row mt30">
                <div class="col-lg-6 col-sm-12 mt30">
                    <div class="s-block2">
                        <div class="card-icon"><img src="{{ asset('Frontend/images/icons/vision.png') }}" alt="icon"
                                class="w80 mb20"></div>
                        <h3>Our Vision</h3>
                        <p class="mt15">{{ $item->our_vision }} </p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 mt30">
                    <div class="s-block2">
                        <div class="card-icon"><img src="{{ asset('Frontend/images/icons/mountain.png') }}" alt="icon"
                                class="w80 mb20"></div>
                        <h3>Our Mission</h3>
                        <p class="mt15">{{ $item->our_mission }} </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Mission Vision-->

    <!--Start About Features-->
    <section class="about-agencys pad-tb block-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <span>Our Philosophy</span>
                        <h2>{{ $item->title_philosophy }} </h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center niwaxgap40">
                <div class="col-lg-5 v-center order1">
                    <div class="image-block">
                        <img src="{{ asset('Frontend/images/about/leadership.jpg') }}" alt="about us Niwax"
                            class="img-fluid" />
                    </div>
                </div>

                <div class="col-lg-5 v-center order2">
                    <div class="common-heading text-l">
                        <span>Supervision</span>
                        <h2 class="mb20">{{ $item->supervision_post }} </h2>
                        <p> {{ $item->supervision_slug }} </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center niwaxgap40 mt60">
                <div class="col-lg-5 v-center order2">
                    <div class="common-heading text-l">
                        <span>Strength</span>
                        <h2 class="mb20">{{ $item->strength_post }} </h2>
                        <p> {{ $item->strength_slug }} </p>
                    </div>
                </div>

                <div class="col-lg-5 v-center order1">
                    <div class="image-block">
                        <img src="{{ asset('Frontend/images/about/collaboration.jpg') }}" alt="about us Niwax"
                            class="img-fluid" />
                    </div>
                </div>
            </div>

            <div class="row justify-content-center niwaxgap40 mt60">

                <div class="col-lg-5 v-center order1">
                    <div class="image-block">
                        <img src="{{ asset('Frontend/images/about/transparency.jpg') }}" alt="about us Niwax"
                            class="img-fluid" />
                    </div>
                </div>

                <div class="col-lg-5 v-center order2">
                    <div class="common-heading text-l">
                        <span>Quality</span>
                        <h2 class="mb20">{{ $item->quality_post }} </h2>
                        <p> {{ $item->quality_slug }} </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End About Features-->
    <!--Start why-choose-->
    <section class="why-choose pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="common-heading">
                        <span>We Are Awesome</span>
                        <h2 class="mb30">{{ $item->title_3 }} </h2>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="row upset">
                @foreach ($Features as $item)
                    <div class="col-lg-3 col-sm-6 mt30">
                        <div class="s-block up-hor">
                            <div class="s-card-icon"><img src="{{ asset('storage/' . $item->icon) }}"
                                    alt="{{ $item->icon }}" class="img-fluid" /></div>
                            <h4>{{ $item->title }} </h4>
                            <p>{{ $item->description }} </p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--End why-choose-->
    <!--Start timeline-->

    <!--End timeline-->
    <!--Start Team-->
    <section class="dg-testinomial-section bg-gradient5 dark-bg4  pb80 pt80">
        <div class="container">
            @foreach ($Abouts as $item)
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading">
                            <h2 class="mb20">{{ $item->title_team }} </h2>
                            <p class="mb30">{{ $item->slug_team }} </p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="single-slide owl-carousel mt60">
                @foreach ($Teams as $item)
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4">
                            <div class="image-block upset h-scl-">
                                <div class="image-div h-scl-base"><img src="{{ asset('storage/' . $item->image) }}"
                                        alt="team" class="img-fluid" /></div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <div class="full-image-card mt0">
                                <div class="info-text-block">
                                    <h3><a href="{{ route('Teams.show', $item) }}">{{ $item->name }} </a></h3>
                                    <p>{{ $item->domain }} </p>
                                    <div class="social-media-profile">
                                        <a href="{{ $item->github }} " target="blank"><i class="fab fa-github"></i></a>
                                        <a href="{{ $item->website }} " target="blank"><i class="fas fa-globe"></i></a>
                                        <a href="{{ $item->numero }} " target="blank"><i class="fas fa-phone"></i></a>
                                        <a href="{{ $item->linkedin }} " target="blank"><i
                                                class="fab fa-linkedin"></i></a>

                                    </div>
                                </div>
                                <div class="otherinfo">
                                    <p>{{ $item->description }} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
               
        </div>
    </section>
    <!--End Team-->
           
    <!--Stat Projects-->
    <section class="featured-project pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                   @foreach ($Abouts as $item)
                            <div class="col-lg-8">
                                <div class="common-heading ptag">
                                    <span>Projects</span>
                                    <h2>{{ $item->title_project }} </h2>
                                    <p class="mb0">{{ $item->slug_project }} </p>
                                </div>
                            </div>
                        @endforeach
            </div>
            <div class="row">
                @foreach ($projects as $item)
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay=".2s">
                        <div class="isotope_item hover-scale">
                            <div class="item-image">
                                <a href="{{ route('projects.show', $item) }}"><img src="{{ asset('storage/' . $item->photo) }}" alt="portfolio"
                                        class="img-fluid" /> </a>
                            </div>
                            <div class="item-info">
                                <h4><a href="{{ route('projects.show', $item) }}">{{ $item->name }} </a></h4>
                                
                                <p>{{ $item->categorie->name }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-lg-12 maga-btn mt60">
                    <a href="{{ route('Project') }}" class="btn-outline">View More Projects <i
                            class="fas fa-chevron-right fa-icon"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--End Projects-->
 
    <!--Start Pricing-->
    <section class="block-a1 pad-tb">
        <div class="container">
            <div class="row justify-content-left">
                <div class="col-lg-6">
                    @foreach ($Abouts as $item)
                        <div class="common-heading pp">
                            <span>Pricing</span>
                            <h2>{{ $item->title_pricing }}</h2>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-6 v-center">
                    <div class="filters">
                        <ul class="filter-menu">
                            <li data-filter="all" class="is-checked">All</li>
                            @php $tabId = 1; @endphp
                            @foreach ($Pricings_item as $item)
                                <li data-filter="tab-{{ $tabId }}">{{ $item->name }}</li>
                                @php $tabId++; @endphp
                            @endforeach
                        </ul>


                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                @php $tabId = 1; @endphp
                @foreach ($Pricings_item as $item)
                    @if (!is_null($item->pricing) && $item->pricing->isNotEmpty())
                        @foreach ($item->pricing as $plan)
                            <div class="col-lg-4 col-md-6 pricing-item tab-{{ $tabId }}">
                                <div class="pricing-table mt60">
                                    <div class="inner-table">
                                        <img src="{{ asset('FrontEnd/images/icons/plan-1.svg') }}" alt="Plan" />
                                        <span class="title">{{ $plan->type }}</span>
                                        <p class="title-sub">{{ $plan->titre }}</p>
                                        <h2><sup>$</sup> {{ $plan->prix }}</h2>
                                        <p class="duration">Monthly Package</p>
                                        <div class="details">{!! $plan->description !!}</div>
                                    </div>
                                    <a href="#" class="btn-main bg-btn lnk">Get Started <i
                                            class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    @php $tabId++; @endphp
                @endforeach
            </div>
        </div>
    </section>
    <!--End Pricing-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.filter-menu li').on('click', function() {
                let filter = $(this).data('filter');

                // Set active class
                $('.filter-menu li').removeClass('is-checked');
                $(this).addClass('is-checked');

                // Show/hide pricing items
                if (filter === 'all') {
                    $('.pricing-item').show();
                } else {
                    $('.pricing-item').hide();
                    $('.' + filter).show();
                }
            });

            // Show all by default
            $('.pricing-item').show();
        });
    </script>
@endsection
