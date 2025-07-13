@extends('layouts.navbar')
@section('content')
    <section class="breadcrumb-areav2" data-background="{{ asset('Frontend/images/banner/6.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bread-titlev2">
                        <h1 class="wow fadeInUp" data-wow-delay=".2s">Need A Premium & Creative Website Designing?</h1>
                        <p class="mt20 wow fadeInUp" data-wow-delay=".4s">From Startup to Enterprise be ready and don't worry
                            about design and user experience.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="statistics-wrap bg-gradient5">
        <div class="container">
            <div class="row small t-ctr mt0">
                <div class="col-lg-3 col-sm-6">
                    <div class="statistics">
                        <div class="statistics-img">
                            <img src="{{ asset('Frontend/images/icons/deal.svg') }}" alt="happy" class="img-fluid">
                        </div>
                        <div class="statnumb">
                            <span class="counter">450</span>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="statistics">
                        <div class="statistics-img">
                            <img src="{{ asset('Frontend/images/icons/computers.svg') }}" alt="project" class="img-fluid">
                        </div>
                        <div class="statnumb counter-number">
                            <span class="counter">48</span><span>k</span>
                            <p>Projects Done</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="statistics">
                        <div class="statistics-img">
                            <img src="{{ asset('Frontend/images/icons/worker.svg') }}" alt="work" class="img-fluid">
                        </div>
                        <div class="statnumb">
                            <span class="counter">95</span><span>k</span>
                            <p>Hours Worked</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="statistics mb0">
                        <div class="statistics-img">
                            <img src="{{ asset('Frontend/images/icons/customer-service.svg') }}" alt="support"
                                class="img-fluid">
                        </div>
                        <div class="statnumb">
                            <span class="counter">24</span><span>/</span><span class="counter">7</span>
                            <p>Support Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Hero-->

    <!--Start Service-->
    <section class="service-block bg-gradient6 pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="common-heading ptag">
                        <span>Service</span>
                        <h2>Our Services</h2>
                        <p class="mb30">We think big and have hands in all leading technology platforms to provide you
                            wide array of services.</p>
                    </div>
                </div>
            </div>

            <div class="row upset ovr-bg2 bd-hor">
                @foreach ($Services as $item)
                    <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="s-block up-hor bd-hor-base">
                            <div class="nn-card-set">
                                <div class="s-card-icon"><img src="{{ asset('storage/' . $item->icon) }}" alt="service"
                                        class="img-fluid" /></div>
                                <h4>{{ $item->title_Golobale }}</h4>
                                <p>{{ $item->slug }} </p>
                                <a href="{{ route('Services.show', $item) }}">Learn More <i
                                        class="fas fa-chevron-right fa-icon"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--End Service-->
    <!--Start Process-->

    <!--End Process-->
    <!--Start Why Choose-->
    <section class="service-block pad-tb bg-gradient7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading ptag">
                        <span>We Deliver Our Best</span>
                        <h2>Why Choose Niwax</h2>
                        <p class="mb30">Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel
                            hendrerit nisi. Vestibulum eget risus velit.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($Features as $item)
                    <div class="col-lg-4 col-sm-6 mt30  wow fadeIn" data-wow-delay=".2s">
                        <div class="s-block wide-sblock">
                            <div class="s-card-icon"><img src="{{ asset('storage/' . $item->icon) }}" alt="service"
                                    class="img-fluid"></div>
                            <div class="s-block-content">
                                <h4>{{ $item->title }}</h4>
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>
    <!--End Why Choose-->
    <!--Start Pricing-->

    <section class="block-a1 pad-tb">
        <div class="container">
            <div class="row justify-content-left">
                <div class="col-lg-6">
                    <div class="common-heading ptag">
                        <span>Pricing</span>
                        <h2>Pricing Table</h2>
                        <p class="mb0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
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
    <!--Stat Projects-->
    <section class="featured-project pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="common-heading ptag">
                        <span>Our Projects</span>
                        <h2>Some of Our Works</h2>
                        <p class="mb0">We think big and have hands in all leading technology platforms to provide you
                            wide array of services.</p>
                    </div>
                </div>
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
    <!--Start reveiws-->
    <section class="reviews-block pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading ptag">
                        <span>Reviews</span>
                        <h2>Client Testimonials</h2>
                        <p class="mb30">Check our customers success stories.</p>
                    </div>
                </div>
            </div>
            <div class="row">
				  @foreach ($Testimonials as $item)
                <div class="col-md-4 mt30">
                    <div class="reviews-card pr-shadow">
                        <div class="row v-center">
                            <div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
                           
                        </div>
                        <div class="review-text">
                            <p>{{ $item->Reviews }} </p>
                        </div>
                        <div class="-client-details-">
                            <div class="-reviewr">
                                <img src="{{ asset('storage/' . $item->photo) }}" alt="Good Review" class="img-fluid">
                            </div>
                            <div class="reviewer-text">
                                <h4>{{ $item->name }} </h4>
                                <p>{{ $item->work }} </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
    </section>
    
    <!--End reviews-->
    <!--Start CTA-->
    <section class="cta-area pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <span>Let's work together</span>
                        <h2>We Love to Listen to Your Requirements</h2>
                        <a href="{{ route('Demande.create') }}" class="btn-outline">Demande Devis <i
                                class="fas fa-chevron-right fa-icon"></i></a>
								@foreach ($infos as $item )
									
								
                        <p class="cta-call">Or call us now <a href="tel:{{ $item->Phone_1 }} "><i class="fas fa-phone-alt"></i>
                                {{ $item->Phone_1 }} </a></p>
						<p class="cta-call">Or call us now <a href="tel:{{ $item->Phone_2 }} "><i class="fas fa-phone-alt"></i>
                                {{ $item->Phone_2 }} </a></p>
								@endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="shape shape-a1"><img src="{{ asset('Frontend/images/shape/shape-3.svg') }}" alt="shape" /></div>
        <div class="shape shape-a2"><img src="{{ asset('Frontend/images/shape/shape-4.svg') }}" alt="shape" /></div>
        <div class="shape shape-a3"><img src="{{ asset('Frontend/images/shape/shape-13.svg') }}" alt="shape" /></div>
        <div class="shape shape-a4"><img src="{{ asset('Frontend/images/shape/shape-11.svg') }}" alt="shape" /></div>
    </section>

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
    <!--End CTA-->
@endsection
