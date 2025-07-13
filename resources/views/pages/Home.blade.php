@extends('layouts.navbar')
@section('content')
    <section class="hero-card-web mobile-app-">
        <div class="hero-main-rp container-fluid">
            <div class="row">
                <div class="col-lg-6 v-center">
                    <div class="hero-heading-sec2 niwax" data-rellax-speed="3">
                        <h1 class="wow fadeIn" data-wow-delay="0.2s">Top Rated Mobile App Development Company</h1>
                        <p class="wow fadeIn" data-wow-delay="0.4s">Niwax is one of the most creative and experienced mobile
                            app development companies in India.</p>
                        <div class="content-sec  d-flex mt30 v-center text-w wow fadeIn" data-wow-delay="0.6s">
                            <div class="mr25"><a href="#" class="btn-main bg-btn4 lnk">GET STARTED<i
                                        class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a></div>
                            <div class="video-intro-pp v-center"><a class="video-link play-video"
                                    href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0"><span
                                        class="triangle-play"></span></a></div>
                            <div class="title-hero-oth v-center">
                                <p>See live demo</p>
                            </div>
                        </div>
                        <div class="awrd-sec text-w mt40 wow fadeIn" data-wow-delay="0.8s">
                            <h5>Our Achievements</h5>
                            <div class="bages-slider owl-carousel mt20">
                                <div class="img-badge-"><a href="#"> <img
                                            src="{{ asset('Frontend/images/icons/badge1.png') }}"
                                            alt="niwax mobile app development company" class="img100w"></a> </div>
                                <div class="img-badge-"><a href="#"> <img
                                            src="{{ asset('Frontend/images/icons/badge2.png') }}"
                                            alt="niwax mobile app development company" class="img100w"></a> </div>
                                <div class="img-badge-"><a href="#"> <img
                                            src="{{ asset('Frontend/images/icons/badge3.png') }}"
                                            alt="niwax mobile app development company" class="img100w"></a> </div>
                                <div class="img-badge-"><a href="#"> <img
                                            src="{{ asset('Frontend/images/icons/badge4.png') }}"
                                            alt="niwax mobile app development company" class="img100w"></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 v-center">
                    <div class="app-hero-bnr wow fadeIn" data-wow-delay="0.4s"> <img
                            src="{{ asset('Frontend/images/hero/mobile_hero_banner.png') }}"
                            alt="niwax mobile app development company" class="img-fluid"> </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Hero-->
    <div class="weworkfor pt20 pb20 dark-bg2">
        <div class="container">
            <div class="logo-weworkfor owl-carousel">
                <div class="items"><img src="{{ asset('Frontend/images/client/clients-1.png') }}" alt="niwax html template"
                        class="img100w"></div>
                <div class="items"><img src="{{ asset('Frontend/images/client/clients-2.png') }}" alt="niwax html template"
                        class="img100w"></div>
                <div class="items"><img src="{{ asset('Frontend/images/client/clients-3.png') }}" alt="niwax html template"
                        class="img100w"></div>
                <div class="items"><img src="{{ asset('Frontend/images/client/clients-4.png') }}" alt="niwax html template"
                        class="img100w"></div>
                <div class="items"><img src="{{ asset('Frontend/images/client/clients-5.png') }}" alt="niwax html template"
                        class="img100w"></div>
                <div class="items"><img src="{{ asset('Frontend/images/client/clients-6.png') }}"
                        alt="niwax html template" class="img100w"></div>
                <div class="items"><img src="{{ asset('Frontend/images/client/clients-7.png') }}"
                        alt="niwax html template" class="img100w"></div>
                <div class="items"><img src="{{ asset('Frontend/images/client/clients-8.png') }}"
                        alt="niwax html template" class="img100w"></div>
            </div>
        </div>
    </div>
    <!--Start About-->
    <section class="about-sec-app pad-tb pt60 dark-bg2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="common-heading text-l">
                        <h2 class="mb30"><span class="text-second text-bold">Niwax</span> Mobile App Development Company
                        </h2>
                        <p>Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                            scrambled it to make a type specimen book.</p>

                        <p class="mt10">Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.</p>
                        <p class="mt10"> <span class="text-bold">Lorem Ipsumis simply dummy text of the printing and
                                typesetting industry. Simply dummy text of the printing and typesetting industry. </span>
                        </p>
                    </div>
                    <div class="cta-card mt40">
                        <a href="#" class="btn-outline lnk">Request A Quote<i
                                class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="funfact">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 col-6">
                                <div class="funfct srcl1">
                                    <img src="{{ asset('Frontend/images/icons/startup.svg') }}"
                                        alt="niwax app development template">
                                    <span class="services-cuntr counter">20</span><span class="services-cuntr">+</span>
                                    <p>Years Experience</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-6">
                                <div class="funfct srcl2">
                                    <img src="{{ asset('Frontend/images/icons/team.svg') }}"
                                        alt="niwax app development template">
                                    <span class="services-cuntr counter">250</span><span class="services-cuntr">+</span>
                                    <p>Talented Squad</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-6">
                                <div class="funfct srcl3">
                                    <img src="{{ asset('Frontend/images/icons/mobile.svg') }}"
                                        alt="niwax app development template">
                                    <span class="services-cuntr counter">1200</span><span class="services-cuntr">+</span>
                                    <p>Apps Developed</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-6">
                                <div class="funfct srcl4">
                                    <img src="{{ asset('Frontend/images/icons/computers.svg') }}"
                                        alt="niwax app development template">
                                    <span class="services-cuntr counter">100</span><span class="services-cuntr">%</span>
                                    <p>Projects Delivered</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-6">
                                <div class="funfct srcl5">
                                    <img src="{{ asset('Frontend/images/icons/world.svg') }}"
                                        alt="niwax app development template">
                                    <span class="services-cuntr counter">120</span><span class="services-cuntr">+</span>
                                    <p>Countries Served</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-6">
                                <div class="funfct srcl1">
                                    <img src="{{ asset('Frontend/images/icons/deal.svg') }}"
                                        alt="niwax app development template">
                                    <span class="services-cuntr counter">100</span><span class="services-cuntr">%</span>
                                    <p>Client Satisfaction</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About-->
    <!--Start Service-->
    <section class="service-section-app pad-tb dark-bg2">
        <div class="sctxt">App Development</div>
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
            <div class="row upset ovr-bg1 ho-gdnt">
                <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                    <div class="s-block up-hor ovr-base">
                        <div class="nn-card-set">
                            <div class="s-card-icon"><img src="images/icons/branding.svg" alt="service"
                                    class="img-fluid" /></div>
                            <h4>Social Media Marketing</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".4s">
                    <div class="s-block up-hor ovr-base">
                        <div class="nn-card-set">
                            <div class="s-card-icon"><img src="images/icons/development.svg" alt="service"
                                    class="img-fluid" /></div>
                            <h4>Branding & Identity</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="s-block up-hor ovr-base">
                        <div class="nn-card-set">
                            <div class="s-card-icon"><img src="images/icons/app.svg" alt="service" class="img-fluid" />
                            </div>
                            <h4>Performance Marketing</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Service-->
    <!--why choose-->
    <section class="why-choos-lg pad-tb deep-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="common-heading text-l">
                        <span>Why Choose Us</span>
                        <h2 class="mb20">Why The Niwax <span class="text-second text-bold">Ranked Top</span> Among The
                            Leading Web & App Development Companies</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s.</p>
                        <div class="itm-media-object mt40 tilt-3d">
                            <div class="media">
                                <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                                        src="{{ asset('Frontend/images/icons/computers.svg') }}" alt="icon"
                                        class="layer"></div>
                                <div class="media-body">
                                    <h4>Streamlined Project Management</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo
                                        elementum semper. Mauris aliquet egestas metus.</p>
                                </div>
                            </div>
                            <div class="media mt40">
                                <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                                        src="{{ asset('Frontend/images/icons/worker.svg') }}" alt="icon"
                                        class="layer"></div>
                                <div class="media-body">
                                    <h4>A Dedicated Team of Experts</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo
                                        elementum semper. Mauris aliquet egestas metus.</p>
                                </div>
                            </div>
                            <div class="media mt40">
                                <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"> <img
                                        src="{{ asset('Frontend/images/icons/deal.svg') }}" alt="icon"
                                        class="layer"></div>
                                <div class="media-body">
                                    <h4>Completion of Project in Given Time</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo
                                        elementum semper. Mauris aliquet egestas metus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="single-image bg-shape-dez wow fadeIn"
                        data-wow-duration="2s"><img src="{{ asset('Frontend/images/about/about-company.jpg') }}"
                            alt="image" class="img-fluid"></div>
                    <p class="text-center mt30">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <div class="cta-card mt60 text-center">
                        <h3 class="mb20">Let's Start a <span class="text-second text-bold">New Project</span> Together
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum
                            semper.</p>
                        <a href="#" class="btn-outline lnk mt30">Request A Quote <i
                                class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End why choose-->
    <!--Start Portfolio-->
    <section class="portfolio-section pad-tb">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <span>Our Work</span>
                        <h2 class="mb20">Our Latest Creative Work</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col mt40 wow fadeIn" data-wow-delay="0.2s">
                    <div class="isotope_item up-hor">
                        <div class="item-image">
                            <a href="#"><img src="{{ asset('Frontend/images/portfolio/app-img1.jpg') }}"
                                    alt="image" class="img-fluid" /> </a>
                        </div>
                        <div class="item-info-div shdo">
                            <h4><a href="#">Pets Care & Training App</a></h4>
                            <p>iOs, Android</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt40 wow fadeIn" data-wow-delay="0.4s">
                    <div class="isotope_item up-hor">
                        <div class="item-image">
                            <a href="#"><img src="{{ asset('Frontend/images/portfolio/app-img2.jpg') }}"
                                    alt="image" class="img-fluid" /> </a>
                        </div>
                        <div class="item-info-div shdo">
                            <h4><a href="#">Car Rental App</a></h4>
                            <p>Graphic, Print</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt40 wow fadeIn" data-wow-delay="0.6s">
                    <div class="isotope_item up-hor">
                        <div class="item-image">
                            <a href="#"><img src="{{ asset('Frontend/images/portfolio/app-img3.jpg') }}"
                                    alt="image" class="img-fluid" /> </a>
                        </div>
                        <div class="item-info-div shdo">
                            <h4><a href="#">Event Management App</a></h4>
                            <p>Graphic, Print</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt40 wow fadeIn" data-wow-delay="0.8s">
                    <div class="isotope_item up-hor">
                        <div class="item-image">
                            <a href="#"><img src="{{ asset('Frontend/images/portfolio/app-img4.jpg') }}"
                                    alt="image" class="img-fluid" /> </a>
                        </div>
                        <div class="item-info-div shdo">
                            <h4><a href="#">Restaurant App</a></h4>
                            <p>iOs, Android</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt40 wow fadeIn" data-wow-delay="1s">
                    <div class="isotope_item up-hor">
                        <div class="item-image">
                            <a href="#"><img src="{{ asset('Frontend/images/portfolio/app-img5.jpg') }}"
                                    alt="image" class="img-fluid" /> </a>
                        </div>
                        <div class="item-info-div shdo">
                            <h4><a href="#">Restaurant / Hotel App</a></h4>
                            <p>Graphic, Print</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt40 wow fadeIn" data-wow-delay="1.2s">
                    <div class="isotope_item up-hor">
                        <div class="item-image">
                            <a href="#"><img src="{{ asset('Frontend/images/portfolio/app-img6.jpg') }}"
                                    alt="image" class="img-fluid" /> </a>
                        </div>
                        <div class="item-info-div shdo">
                            <h4><a href="#">Super Mart App</a></h4>
                            <p>Graphic, Print</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Portfolio-->
    <!--Start Clients-->
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
                            <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay=".2s">
                                <div class="brand-logo hoshd"><img src="{{ asset('Frontend/images/client/logo1.png') }}"
                                        alt="clients" class="img-fluid"></div>
                                <p>Shutter, USA</p>
                            </li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay=".4s">
                                <div class="brand-logo hoshd"><img src="{{ asset('Frontend/images/client/logo2.png') }}"
                                        alt="clients" class="img-fluid"></div>
                                <p>Hipster, USA</p>
                            </li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay=".6s">
                                <div class="brand-logo hoshd"><img src="{{ asset('Frontend/images/client/logo3.png') }}"
                                        alt="clients" class="img-fluid"></div>
                                <p>Happy, USA</p>
                            </li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay=".8s">
                                <div class="brand-logo hoshd"><img src="{{ asset('Frontend/images/client/logo4.png') }}"
                                        alt="clients" class="img-fluid"></div>
                                <p>Opera Tours, USA</p>
                            </li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay="1s">
                                <div class="brand-logo hoshd"><img src="{{ asset('Frontend/images/client/logo5.png') }}"
                                        alt="clients" class="img-fluid"></div>
                                <p>Royale Stone, UK</p>
                            </li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay="1.2s">
                                <div class="brand-logo hoshd"><img src="{{ asset('Frontend/images/client/logo6.png') }}"
                                        alt="clients" class="img-fluid"></div>
                                <p>QTP, Australia</p>
                            </li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay="1.4s">
                                <div class="brand-logo hoshd"><img src="{{ asset('Frontend/images/client/logo7.png') }}"
                                        alt="clients" class="img-fluid"></div>
                                <p>PAPA, Malaysia</p>
                            </li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay="1.6s">
                                <div class="brand-logo hoshd"><img src="{{ asset('Frontend/images/client/logo8.png') }}"
                                        alt="clients" class="img-fluid"></div>
                                <p>Coffee, Australia</p>
                            </li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay="1.8s">
                                <div class="brand-logo hoshd"><img src="{{ asset('Frontend/images/client/logo9.png') }}"
                                        alt="clients" class="img-fluid"></div>
                                <p>Bakery, India</p>
                            </li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay="2s">
                                <div class="brand-logo hoshd"><img src="{{ asset('Frontend/images/client/logo10.png') }}"
                                        alt="clients" class="img-fluid"></div>
                                <p>Iconico, India</p>
                            </li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay="2.2s">
                                <div class="brand-logo hoshd"><img src="{{ asset('Frontend/images/client/logo11.png') }}"
                                        alt="clients" class="img-fluid"></div>
                                <p>Tom N Jerry, UK</p>
                            </li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay="2.4s">
                                <div class="brand-logo hoshd"><img src="{{ asset('Frontend/images/client/logo12.png') }}"
                                        alt="clients" class="img-fluid"></div>
                                <p>Arch, India</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Clients-->
    <!--Start Badges-->
    <section class="badges-section pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading w-tdxt">
                        <span>WE MAKE RELATIONSHIPS</span>
                        <h2>Ranked as #1 Top Web & App Development Companies</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".2s">
                    <div class="badges-content">
                        <img src="{{ asset('Frontend/images/about/badges-a.png') }}" alt="budges" class="img-fluid">
                        <p>ABC DEF Industry Leader</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".4s">
                    <div class="badges-content">
                        <img src="{{ asset('Frontend/images/about/badges-b.png') }}" alt="budges" class="img-fluid">
                        <p>Best eCommerce Development Company</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".6s">
                    <div class="badges-content">
                        <img src="{{ asset('Frontend/images/about/badges-c.png') }}" alt="budges" class="img-fluid">
                        <p>ABC DEF High Performer Winner</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".8s">
                    <div class="badges-content">
                        <img src="{{ asset('Frontend/images/about/badges-d.png') }}" alt="budges" class="img-fluid">
                        <p>Top App Developer 2019-20</p>
                    </div>
                </div>
            </div>
            <div class="-cta-btn mt70">
                <div class="free-cta-title v-center wow fadeInUp" data-wow-delay="1s">
                    <p>We <span>Promise.</span> We <span>Deliver.</span></p>
                    <a href="#" class="btn-main bg-btn2 lnk">Let's Work Together<i
                            class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!--End Badges-->
    <!--Start work-category-->
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
                    <ul class="filter-menu">
                        <li data-filter="*" class="is-checked">All</li>
                        @php $tabId = 1; @endphp
                        @foreach ($Skill_item as $item)
                            <li data-filter=".tab-{{ $tabId }}">{{ $item->name }}</li>
                            @php $tabId++; @endphp
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        {{-- ✅ Le container avec les éléments filtrables --}}
        <div class="row mt30 osm">
            @php $tabId = 1; @endphp
            @foreach ($Skill_item as $item)
                @if (!is_null($item->skill) && $item->skill->isNotEmpty())
                    @foreach ($item->skill as $plan)
                        <div class="col-lg-3 col-sm-6 col-6 Skill_item tab-{{ $tabId }}">
                            <div class="industry-workfor hoshd">
                                <img src="{{ asset('storage/' . $plan->Photo) }}" alt="img">
                                <h6>{{ $plan->name }}</h6>
                            </div>
                        </div>
                    @endforeach
                @endif
                @php $tabId++; @endphp
            @endforeach
        </div>
    </div>
</section>


    <!--End  work-category-->
    <!--Start Testinomial-->
    <section class="testinomial-section-app bg-none pad-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="common-heading text-l">
                        <span>What our clients say about Niwax.</span>
                        <h2>Over 1200+ Satisfied Clients and Growing</h2>
                    </div>
                    <div class="review-title-ref mt40">
                        <h4>Read More Reviews</h4>
                    </div>
                    <div class="row mt30 justify-content-center">
                        <a href="#" target="blank" class="wow fadeIn col-lg-4 col-4" data-wow-delay=".2s"><img
                                src="{{ asset('Frontend/images/about/reviews-icon-1.png') }}" alt="review"
                                class="img-fluid"></a>
                        <a href="#" target="blank" class="wow fadeIn col-lg-4 col-4" data-wow-delay=".4s"><img
                                src="{{ asset('Frontend/images/about/reviews-icon-2.png') }}" alt="review"
                                class="img-fluid"></a>
                        <a href="#" target="blank" class="wow fadeIn col-lg-4 col-4" data-wow-delay=".6s"><img
                                src="{{ asset('Frontend/images/about/reviews-icon-3.png') }}" alt="review"
                                class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="pl50">
                        <div class="shape shape-a1"><img src="{{ asset('Frontend/images/shape/shape-3.svg') }}"
                                alt="shape"></div>
                        <div class="testimonial-card-a tcd owl-carousel">
                            <div class="testimonial-card">
                                <div class="tt-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    </p>
                                </div>
                                <div class="client-thumbs mt30">
                                    <div class="media v-center upset">
                                        <div class="user-image bdr-radius"><img
                                                src="{{ asset('Frontend/images/user-thumb/girl.jpg') }}" alt="girl"
                                                class="img-fluid rounded-circle" /></div>
                                        <div class="media-body user-info v-center">
                                            <h5>Mike Smith</h5>
                                            <p>Founder at Itawa Real eState</p>
                                            <i class="fas fa-quote-right posiqut"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card">
                                <div class="tt-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    </p>
                                </div>
                                <div class="client-thumbs mt30">
                                    <div class="media v-center upset">
                                        <div class="user-image bdr-radius"><img
                                                src="{{ asset('Frontend/images/user-thumb/girl.jpg') }}" alt="girl"
                                                class="img-fluid rounded-circle" /></div>
                                        <div class="media-body user-info v-center">
                                            <h5>Mike Smith</h5>
                                            <p>Founder at Itawa Real eState</p>
                                            <i class="fas fa-quote-right posiqut"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testinomial-->
    <!--Start CTA-->
    <section class="app-cta pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading text-w">
                        <span>Let's work together</span>
                        <h2>We Love to Listen to Your Requirements</h2>
                        <a href="#" class="btn-main bg-btn4 lnk">GET STARTED<i
                                class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                        <p class="cta-call">Or call us now <a href="tel:+1234567890"><i class="fas fa-phone-alt"></i>
                                (123) 456 7890</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape shape-c1"></div>
        <div class="shape shape-c2"></div>
        <div class="shape shape-c3"></div>
    </section>
    <!--End CTA-->
    <!--Start Location-->
    <section class="our-office pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <span>Our Locations</span>
                        <h2>Our Office</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 shape-loc wow fadeIn" data-wow-delay=".2s">
                    <div class="office-card hoshd">
                        <div class="landscp">
                            <img src="{{ asset('Frontend/images/location/india-img.png') }}" alt="location"
                                class="img-fluid" />
                        </div>
                        <div class="info-text-div">
                            <h4>India</h4>
                            <h6 class="mt10">Registered Office</h6>
                            <p>232, 21st East Street, Kamaraj Nagar, Jaipur, Rajasthan 303030</p>
                            <ul class="-address-list mt10">
                                <li><a href="mailto:info@businessname.com"><i class="fas fa-envelope"></i>
                                        info@businessname.com</a></li>
                                <li><a href="tel:+10000000000"><i class="fas fa-phone-alt"></i> +1 0000 000 000</a> </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 shape-loc wow fadeIn" data-wow-delay=".4s">
                    <div class="office-card hoshd">
                        <div class="landscp">
                            <img src="{{ asset('Frontend/images/location/italy.png') }}" alt="location"
                                class="img-fluid" />
                        </div>
                        <div class="info-text-div">
                            <h4>Italy</h4>
                            <h6 class="mt10">Registered Office</h6>
                            <p>9988 Piazzetta Scalette Rubiani 99, Rome, 84090</p>
                            <ul class="-address-list mt10">
                                <li><a href="mailto:info@businessname.com"><i class="fas fa-envelope"></i>
                                        info@businessname.com</a></li>
                                <li><a href="tel:+10000000000"><i class="fas fa-phone-alt"></i> +1 0000 000 000</a> </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 shape-loc wow fadeIn" data-wow-delay=".6s">
                    <div class="office-card hoshd">
                        <div class="landscp">
                            <img src="{{ asset('Frontend/images/location/paris.png') }}" alt="location"
                                class="img-fluid" />
                        </div>
                        <div class="info-text-div">
                            <h4>Paris</h4>
                            <h6 class="mt10">Registered Office</h6>
                            <p>603 FA Forest Avenue, New York, USA 10021</p>
                            <ul class="-address-list mt10">
                                <li><a href="mailto:info@businessname.com"><i class="fas fa-envelope"></i>
                                        info@businessname.com</a></li>
                                <li><a href="tel:+10000000000"><i class="fas fa-phone-alt"></i> +1 0000 000 000</a> </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Location-->

   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

<script>
    $(window).on('load', function () {
        console.log("DOM ready. Initializing Isotope...");

        var $grid = $('.osm').isotope({
            itemSelector: '.Skill_item',
            layoutMode: 'fitRows'
        });

        $('.filter-menu li').on('click', function () {
            $('.filter-menu li').removeClass('is-checked');
            $(this).addClass('is-checked');

            var filterValue = $(this).attr('data-filter');
            console.log("Filtering to: ", filterValue);
            $grid.isotope({ filter: filterValue });
        });
    });

 </script>
@endsection
