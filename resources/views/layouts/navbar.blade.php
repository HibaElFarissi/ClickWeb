<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8" />
    <title>ClickWeb - Web Design &amp; Digital Marketing Agency</title>
    <meta name="description" content="Creative Agency, Marketing Agency Template">
    <meta name="keywords" content="Creative Agency, Marketing Agency">
    <meta name="author" content="rajesh-doot">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#4302b2">
    <!--website-favicon-->
    <link href="{{ asset('Frontend/images/logo.svg') }}" rel="icon">
    <!--plugin-css-->
    <link href="{{ asset('FrontEnd/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('FrontEnd/css/plugin.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- template-style-->
    <link href="{{ asset('FrontEnd/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('FrontEnd/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('FrontEnd/css/darkmode.css') }}" rel="stylesheet">

    <style>
        /* =================================
   LIGHT MODE NAVBAR
================================= */

        body:not(.active-dark) .main-header.menu-white {
            background: rgba(255, 255, 255, .96) !important;
            box-shadow: 0 4px 25px rgba(0, 0, 0, .06);
        }

        body:not(.active-dark) .main-header.menu-white .menu-links {
            color: #171b42 !important;
            font-weight: 700;
        }

        body:not(.active-dark) .main-header.menu-white .menu-links:hover {
            color: #6848ed !important;
        }

        body:not(.active-dark) .main-header.menu-white .mega-white-logo {
            display: none !important;
        }

        body:not(.active-dark) .main-header.menu-white .mega-darks-logo {
            display: block !important;
        }

        body:not(.active-dark) .main-header.menu-white .nx-dropdown {
            background: #fff !important;
        }

        body:not(.active-dark) .main-header.menu-white .nx-dropdown a {
            color: #222 !important;
        }

        body:not(.active-dark) .main-header.menu-white .nx-dropdown a:hover {
            color: #6848ed !important;
        }

        /* DARK MODE */

        body.active-dark .main-header.menu-white {
            background: rgba(18, 18, 18, .97) !important;
            box-shadow: 0 4px 25px rgba(0, 0, 0, .25);
        }

        body.active-dark .main-header.menu-white .menu-links {
            color: #fff !important;
        }

        body.active-dark .main-header.menu-white .mega-white-logo {
            display: block !important;
        }

        body.active-dark .main-header.menu-white .mega-darks-logo {
            display: none !important;
        }

        body.active-dark .main-header.menu-white .nx-dropdown {
            background: #202020 !important;
        }

        body.active-dark .main-header.menu-white .nx-dropdown a {
            color: #fff !important;
        }
    </style>

</head>

<body>

    <!--Start Preloader -->
    {{-- <div class="onloadpage" id="page_loader">
	<div class="pre-content">
	   <div class="logo-pre"><img src="{{ asset('FrontEnd/{{ asset('Frontend/images/logo.png') }}" alt="Logo" class="img-fluid" /></div>
	   <div class="pre-text- text-radius text-light text-animation bg-b">ClickWeb - Creative Agency & Portfolio</div>
	</div>
 </div> --}}
    <!--End Preloader -->

    <!--Start Header -->
    <header class="nav-bg-b main-header navfix fixed-top menu-white">
        <div class="container-fluid m-pad">
            <div class="menu-header">
                <div class="dsk-logo">
                    <a href="{{ url('/') }}" class="logo">

                        @if ($siteLogo && $siteLogo->logo_light)
                            <img src="{{ asset('storage/' . $siteLogo->logo_light) }}" class="logo-light"
                                alt="ClickWeb">
                        @endif

                        @if ($siteLogo && $siteLogo->logo_dark)
                            <img src="{{ asset('storage/' . $siteLogo->logo_dark) }}" class="logo-dark" alt="ClickWeb">
                        @endif

                    </a>

                </div>
                <div class="custom-nav" role="navigation">
                    <ul class="nav-list">
                        <li class="sbmenu">
                            <a href="/" class="menu-links">Home</a>
                        </li>
                        <li class="sbmenu">
                            <a href="{{ route('About') }}" class="menu-links">About</a>
                        </li>
                        <li class="sbmenu">
                            <a href="{{ route('Service') }}" class="menu-links">Services</a>
                        </li>
                        <li class="sbmenu rpdropdown">
                            <a href="#" class="menu-links">Références</a>
                            <div class="nx-dropdown menu-dorpdown">
                                <div class="sub-menu-section">
                                    {{-- <div class="container"> --}}
                                    <div class="sub-menu-center-block">
                                        <div class="sub-menu-column smfull">
                                            <ul>
                                                <li><a href="{{ route('Project') }}">Creating Websites</a></li>
                                                <li><a href="{{ route('Marketings') }}">Marketings</a></li>
                                                <li><a href="{{ route('Designs_all') }}">Designs</a></li>
                                                <li><a href="{{ route('Videos_all') }}">Videos</a></li>
                                            </ul>
                                        </div>
                        </li>
                        <li class="sbmenu rpdropdown">
                            <a href="{{ route('Blog') }}" class="menu-links">Blog</a>
                        </li>
                        <li class="sbmenu rpdropdown">
                            <a href="{{ route('Contact') }}" class="menu-links">Contact</a>
                        </li>
                    </ul>

                    <!-- mobile + desktop - sidebar menu- dark mode witch and button -->
                    <ul class="nav-list right-end-btn">
                        <li class="hidemobile"><a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                class="btn-round- btn-br bg-btn2"><i class="fas fa-phone-alt"></i></a></li>
                        <li class="hidemobile"><a href="{{ route('Demande.create') }}"
                                class="btn-br bg-btn3 btshad-b2 lnk">Demande Devis <span class="circle"></span></a>
                        </li>
                        <li class="hidedesktop darkmodeswitch">
                            <div class="switch-wrapper"> <label class="switch" for="niwax"> <input type="checkbox"
                                        id="niwax" /> <span class="slider round"></span> </label> </div>
                        </li>
                        <li class="hidedesktop"><a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                class="btn-round- btn-br bg-btn2"><i class="fas fa-phone-alt"></i></a></li>
                        <li class="navm- hidedesktop"> <a class="toggle" href="#"><span></span></a></li>
                    </ul>
                </div>
            </div>

            <!--Mobile Menu-->
            <nav id="main-nav">
                <ul class="first-nav">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('About') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ route('Service') }}">Services</a>
                    </li>
                    <li>
                        <a href="#">Réferences</a>
                        <ul>
                            <li>
                                <a href="{{ route('Project') }}">Websites</a>
                            </li>
                            <li><a href="{{ route('Marketings') }}">Marketings</a></li>
                            <li>
                                <a href="{{ route('Designs_all') }}">Designs</a>
                            </li>
                            <li>
                                <a href="{{ route('Videos_all') }}">Videos</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('Blog') }}">Blog</a>
                    </li>
                    <li>
                        <a href="{{ route('Contact') }}">Contact</a>
                    </li>
                </ul>

            </nav>
        </div>
    </header>
    <!--End Header -->


    <!--Start sidebar -->
    <div class="niwaxofcanvas offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample">
        <div class="offcanvas-body">
            <div class="cbtn animation">
                <div class="btnclose"> <button type="button" class="btn-close text-reset"
                        data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
            </div>
            <div class="form-block sidebarform">
                <h4>Demande Devis</h4>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <form id="contactForm" data-bs-toggle="validator" class="shake mt20"
                    action="{{ route('Demande.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <input type="text" name="full_name" id="name" placeholder="Enter name" required
                                data-error="Please fill Out" value="{{ old('full_name') }}">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-sm-12">
                            <input type="email" name="email" id="email" placeholder="Enter email" required
                                value="{{ old('email') }}">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <input type="tel" name="telephone" id="mobile" placeholder="Enter mobile"
                                required data-error="Please fill Out" value="{{ old('telephone') }}">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-sm-12">
                            <input type="text" name="site" id="site" placeholder="Enter site (optionnel)"
                                value="{{ old('site') }}">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-sm-12">
                            <select name="contactez_nous" id="Dtype" required>
                                <option value="">Pour quels besoins nous contactez nous</option>
                                <option value="ADS" {{ old('contactez_nous') == 'ADS' ? 'selected' : '' }}>ADS
                                </option>
                                <option value="hébergement"
                                    {{ old('contactez_nous') == 'hébergement' ? 'selected' : '' }}>hébergement</option>
                                <option value="motion design"
                                    {{ old('contactez_nous') == 'motion design' ? 'selected' : '' }}>motion design
                                </option>
                                <option value="Instagram ADS"
                                    {{ old('contactez_nous') == 'Instagram ADS' ? 'selected' : '' }}>Instagram ADS
                                </option>
                                <option value="Facebook ADS"
                                    {{ old('contactez_nous') == 'Facebook ADS' ? 'selected' : '' }}>Facebook ADS
                                </option>
                                <option value="Création de site web"
                                    {{ old('contactez_nous') == 'Création de site web' ? 'selected' : '' }}>Création de
                                    site web</option>
                                <option value="création maquette"
                                    {{ old('contactez_nous') == 'création maquette' ? 'selected' : '' }}>création
                                    maquette</option>
                                <option value="Animation des réseaux de sociaux"
                                    {{ old('contactez_nous') == 'Animation des réseaux de sociaux' ? 'selected' : '' }}>
                                    Animation des réseaux de sociaux</option>
                                <option value="création landing page"
                                    {{ old('contactez_nous') == 'création landing page' ? 'selected' : '' }}>création
                                    landing page</option>
                                <option value="creation site WordPress"
                                    {{ old('contactez_nous') == 'creation site WordPress' ? 'selected' : '' }}>creation
                                    site WordPress</option>
                                <option value="création Application Web"
                                    {{ old('contactez_nous') == 'création Application Web' ? 'selected' : '' }}>
                                    création Application Web</option>
                                <option value="Autre...."
                                    {{ old('contactez_nous') == 'Autre....' ? 'selected' : '' }}>Autre....</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <select name="investissement" id="investissement" required>
                            <option value="">Quel est vôtre investissement mensuel cumulé</option>
                            <option value="600 - 1000 dh"
                                {{ old('investissement') == '600 - 1000 dh' ? 'selected' : '' }}>600 - 1000 dh</option>
                            <option value="1500-2500 dh"
                                {{ old('investissement') == '1500-2500 dh' ? 'selected' : '' }}>1500-2500 dh</option>
                            <option value="2500 - 4500 dh"
                                {{ old('investissement') == '2500 - 4500 dh' ? 'selected' : '' }}>2500 - 4500 dh
                            </option>
                            <option value="5000-8000 dh"
                                {{ old('investissement') == '5000-8000 dh' ? 'selected' : '' }}>5000-8000 dh</option>
                            <option value="10000 - 20 000 dh"
                                {{ old('investissement') == '10000 - 20 000 dh' ? 'selected' : '' }}>10000 - 20 000 dh
                            </option>
                            <option value="20000 - plus"
                                {{ old('investissement') == '20000 - plus' ? 'selected' : '' }}>20000 - plus</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <textarea name="message" id="message" rows="5" placeholder="Enter your message" required>{{ old('message') }}</textarea>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck" name="agree" checked
                            required>
                        <label class="custom-control-label" for="customCheck">
                            I agree to the <a href="#">Terms &amp; Conditions</a>.
                        </label>
                    </div>

                    <button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit <span
                            class="circle"></span></button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </form>
            </div>

            <div class="getintouchblock mt30">
                <h4>Get In Touch</h4>
                <p class="mt10">Please fill out the form below if you have a plan or project in mind that you'd like
                    to share with us.</p>
                <div class="media mt15">
                    <div class="icondive"><img src="{{ asset('Frontend/images/icons/call.svg') }}" alt="icon">
                    </div>
                    <div class="media-body getintouchinfo">
                        <a href="tel:123456790">+91-123 4567 890 <span>Mon-Fri 9am - 6pm</span></a>
                    </div>
                </div>
                <div class="media mt15">
                    <div class="icondive"><img src="{{ asset('Frontend/images/icons/whatsapp.svg') }}"
                            alt="icon"></div>
                    <div class="media-body getintouchinfo">
                        <a href="tel:123456790">+91-123 4567 890 <span>Mon-Fri 9am - 6pm</span></a>
                    </div>
                </div>
                <div class="media mt15">
                    <div class="icondive"><img src="{{ asset('Frontend/images/icons/mail.svg') }}" alt="icon">
                    </div>
                    <div class="media-body getintouchinfo">
                        <a href="mailto:info@website.com">info@website.com <span>Online Support</span></a>
                    </div>
                </div>
                <div class="media mt15">
                    <div class="icondive"><img src="{{ asset('Frontend/images/icons/map.svg') }}" alt="icon">
                    </div>
                    <div class="media-body getintouchinfo">
                        <a href="mailto:info@website.com">Jaipur, Rajasthan, India<span>Visit Our Office</span></a>
                    </div>
                </div>
            </div>
            <div class="contact-data mt30">
                <h4>Follow Us On:</h4>
                <div class="social-media-linkz mt10">
                    <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                    <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                    <a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
                    <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                    <a href="javascript:void(0)" target="blank"><i class="fab fa-youtube"></i></a>
                    <a href="javascript:void(0)" target="blank"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--end sidebar -->

    <!-- Body main wrapper start -->
    <main>
        @yield('content')
    </main>
    <!-- Body main wrapper end -->

    <footer class="cw-footer">

        <div class="container">
            <div class="row py-5">

                {{-- LOGO --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="{{ url('/') }}" class="cw-footer-logo">

                        @if ($siteLogo && $siteLogo->logo_light)
                            <img src="{{ asset('storage/' . $siteLogo->logo_light) }}" class="logo-light"
                                alt="ClickWeb">
                        @endif

                        @if ($siteLogo && $siteLogo->logo_dark)
                            <img src="{{ asset('storage/' . $siteLogo->logo_dark) }}" class="logo-dark"
                                alt="ClickWeb">
                        @endif

                    </a>

                    <p class="cw-footer-text">
                        {{ optional($siteInfo)->slug ?: 'Creative digital solutions to grow your business and strengthen your online presence.' }}
                    </p>

                    <div class="cw-social">
                        {{-- <a href="{{ config('site.facebook', '#') }}"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ config('site.instagram', '#') }}"><i class="fab fa-instagram"></i></a>
                    <a href="{{ config('site.linkedin', '#') }}"><i class="fab fa-linkedin-in"></i></a>
                    <a href="{{ config('site.youtube', '#') }}"><i class="fab fa-youtube"></i></a> --}}
                        @php
                            $socialNetworks = [
                                'facebook' => 'facebook-f',
                                'instagram' => 'instagram',
                                'linkedin' => 'linkedin-in',
                                'youtube' => 'youtube',
                            ];
                        @endphp

                        @foreach ($socialNetworks as $field => $icon)
                            @php $socialUrl = optional($siteInfo)->$field; @endphp
                            @if ($socialUrl && filter_var($socialUrl, FILTER_VALIDATE_URL))
                                <a href="{{ $socialUrl }}" target="_blank" rel="noopener noreferrer"
                                    aria-label="{{ ucfirst($field) }}">
                                    <i class="fab fa-{{ $icon }}"></i>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>

                {{-- QUICK LINKS --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="cw-footer-heading">Quick Links</h5>

                    <div class="cw-footer-links">
                        <a href="{{ url('/') }}">Home</a>
                        <a href="{{ route('About') }}">About</a>
                        <a href="{{ route('Service') }}">Services</a>
                        <a href="{{ route('Marketings') }}">References</a>
                        <a href="{{ route('Contact') }}">Contact</a>
                    </div>
                </div>

                {{-- CONTACT --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="cw-footer-heading">Contact Us</h5>

                    @if (optional($siteInfo)->Email_1)
                        <p class="cw-contact-line">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:{{ $siteInfo->Email_1 }}">{{ $siteInfo->Email_1 }}</a>
                        </p>
                    @endif
                    @if (optional($siteInfo)->Email_2)
                        <p class="cw-contact-line">
                            <i class="fas fa-envelope-open"></i>
                            <a href="mailto:{{ $siteInfo->Email_2 }}">{{ $siteInfo->Email_2 }}</a>
                        </p>
                    @endif
                    @if (optional($siteInfo)->Phone_1)
                        <p class="cw-contact-line">
                            <i class="fas fa-phone-alt"></i>
                            <a href="tel:{{ $siteInfo->Phone_1 }}">{{ $siteInfo->Phone_1 }}</a>
                        </p>
                    @endif

                    @if (optional($siteInfo)->Phone_2)
                        <p class="cw-contact-line">
                            <i class="fab fa-whatsapp"></i>
                            <a href="https://wa.me/{{ preg_replace('/\D+/', '', $siteInfo->Phone_2) }}"
                                target="_blank" rel="noopener noreferrer">
                                {{ $siteInfo->Phone_2 }}
                            </a>
                        </p>
                    @endif



                    @if (optional($siteInfo)->address)
                        <p class="cw-contact-line">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>{{ $siteInfo->address }}</span>
                        </p>
                    @endif
                </div>

            </div>

            {{-- COPYRIGHT --}}
            <div class="cw-footer-bottom">
                <p>
                    © {{ date('Y') }} <strong>ClickWeb</strong>.
                    All Rights Reserved.
                </p>

                <a href="{{ route('Contact') }}">
                    Let's Work Together
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>

    </footer>


    <style>
        .cw-footer {
            background: #f8f8fc;
            color: #6f758a;
            border-top: 1px solid #eeeef5;
        }

        .cw-footer-logo {
            width: 130px;
            max-height: 55px;
            object-fit: contain;
            margin-bottom: 15px;
        }

        .cw-footer-text {
            max-width: 320px;
            font-size: 13px;
            line-height: 1.8;
            color: #777d91;
        }

        .cw-footer-heading {
            margin: 8px 0 22px;
            color: #171b42;
            font-size: 17px;
            font-weight: 800;
        }

        .cw-footer-heading:after {
            content: "";
            display: block;
            width: 30px;
            height: 3px;
            margin-top: 9px;
            background: #704cff;
            border-radius: 5px;
        }

        .cw-footer-links {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .cw-footer-links a,
        .cw-footer-bottom a {
            color: #747a90;
            font-size: 13px;
            text-decoration: none;
            transition: .3s;
        }

        .cw-footer-links a:hover,
        .cw-footer-bottom a:hover {
            color: #704cff;
            padding-left: 4px;
        }

        .cw-contact-line {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 15px;
            color: #747a90;
            font-size: 13px;
        }

        .cw-contact-line i {
            width: 17px;
            color: #704cff;
        }

        .cw-social {
            display: flex;
            gap: 9px;
            margin-top: 17px;
        }

        .cw-social a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 34px;
            height: 34px;
            border-radius: 9px;
            background: #eeebff;
            color: #704cff;
            text-decoration: none;
            transition: .3s;
        }

        .cw-social a:hover {
            background: #704cff;
            color: white;
            transform: translateY(-3px);
        }

        .cw-footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            padding: 18px 0;
            border-top: 1px solid #e8e8f0;
        }

        .cw-footer-bottom p {
            margin: 0;
            color: #888da0;
            font-size: 12px;
        }

        .cw-footer-bottom strong {
            color: #704cff;
        }

        /* DARK MODE */

        body.active-dark .cw-footer {
            background: #151515;
            border-color: #303030;
        }

        body.active-dark .cw-footer-heading {
            color: #fff;
        }

        body.active-dark .cw-footer-text,
        body.active-dark .cw-contact-line,
        body.active-dark .cw-footer-links a,
        body.active-dark .cw-footer-bottom p,
        body.active-dark .cw-footer-bottom a {
            color: #aaa;
        }

        body.active-dark .cw-footer-bottom {
            border-color: #303030;
        }

        body.active-dark .cw-social a {
            background: #29223d;
            color: #b5a2ff;
        }

        /* RESPONSIVE */

        @media(max-width:767px) {
            .cw-footer-bottom {
                flex-direction: column;
                text-align: center;
            }

            .cw-footer .row {
                padding-bottom: 10px !important;
            }
        }


        /* LIGHT MODE */

        body:not(.active-dark) .logo-light {
            display: inline-block !important;
        }

        body:not(.active-dark) .logo-dark {
            display: none !important;
        }

        /* DARK MODE */

        body.active-dark .logo-light {
            display: none !important;
        }

        body.active-dark .logo-dark {
            display: inline-block !important;
        }

        /* LOGO SIZE */

        .logo img {
            width: 145px;
            height: auto;
            object-fit: contain;
        }

        .cw-footer-logo img {
            width: 130px;
            height: auto;
            object-fit: contain;
        }
    </style>

    <!--Start Footer-->
    {{-- <footer>
    <div class="footer-row1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="email-subs">
                        <h3>Get New Insights Weekly</h3>
                        <p>News letter dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Enter your email</p>
                    </div>
                </div>
                <div class="col-lg-6 v-center">
                    <div class="email-subs-form">
                        <form action="{{ route('Newsletters.store') }}" method="POST" enctype="multipart/form-data"  >
                        @csrf
                            <input type="email" name="email" placeholder="Email Your Address" name="emails">
                            <button type="submit" name="submit" class="lnk btn-main bg-btn">Subscribe <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-row2">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-sm-6  ftr-brand-pp">
                 <a class="navbar-brand mt30 mb25 f-dark-logo" href="#"> <img src="{{ asset('Frontend/images/logo.png') }}" alt="Logo"/></a>
                 <a class="navbar-brand mt30 mb25 f-white-logo" href="#"> <img src="{{ asset('Frontend/images/white-logo.png') }}" alt="Logo" /></a>
                 <p>News letter dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Enter your email</p>
                 <a href="#" class="btn-main bg-btn3 lnk mt20">Become Partner <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
            </div>
                <div class="col-lg-3 col-sm-6">
                    <h5>Contact Us</h5>
                    <ul class="footer-address-list ftr-details">
                        <li>
                            <span><i class="fas fa-envelope"></i></span>
                            <p>Email <span> <a href="mailto:info@businessname.com">info@businessname.com</a></span></p>
                        </li>
                        <li>
                            <span><i class="fas fa-phone-alt"></i></span>
                            <p>Phone <span> <a href="tel:+10000000000">+1 0000 000 000</a></span></p>
                        </li>
                        <li>
                            <span><i class="fas fa-map-marker-alt"></i></span>
                            <p>Address <span> 123 Business Centre London SW1A 1AA</span></p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h5>Company</h5>
                    <ul class="footer-address-list link-hover">
                        <li><a href="get-quote.html">Contact</a></li>
                        <li><a href="{{route('Faq')}}">Customer's FAQ</a></li>
                        <li><a href="javascript:void(0)">Refund Policy</a></li>
                        <li><a href="javascript:void(0)">Privacy Policy</a></li>
                        <li><a href="javascript:void(0)">Terms and Conditions</a></li>
                        <li><a href="javascript:void(0)">License & Copyright</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-6 footer-blog-">
                    <h5>Latest Blogs</h5>
                    <div class="single-blog-">
                        <div class="post-thumb"><a href="#"><img src="{{ asset('Frontend/images/blog/blog-small.jpg') }}" alt="blog"></a></div>
                        <div class="content">
                            <p class="post-meta"><span class="post-date"><i class="far fa-clock"></i>April 15, 2020</span></p>
                            <h4 class="title"><a href="blog-sngle.html">We Provide you Best &amp; Creative Consulting Service</a></h4>
                        </div>
                    </div>
                    <div class="single-blog-">
                        <div class="post-thumb"><a href="#"><img src="{{ asset('Frontend/images/blog/blog-small.jpg') }}" alt="blog"></a></div>
                        <div class="content">
                            <p class="post-meta"><span class="post-date"><i class="far fa-clock"></i>April 15, 2020</span></p>
                            <h4 class="title"><a href="blog-sngle.html">We Provide you Best &amp; Creative Consulting Service</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="footer-row3">
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-social-media-icons">
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-youtube"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-pinterest-p"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-vimeo-v"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-dribbble"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-behance"></i></a>
                        </div>
                        <div class="footer-">
                            <p>© 2024. All Rights Reserved By <a href="/" target="blank">ClickWeb</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> --}}
    <!--End Footer-->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('FrontEnd/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('FrontEnd/js/jquery.min.js') }}"></script>
    <script src="{{ asset('FrontEnd/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('FrontEnd/js/plugin.min.js') }}"></script>
    <script src="{{ asset('FrontEnd/js/preloader.js') }}"></script>
    <script src="{{ asset('FrontEnd/js/dark-mode.js') }}"></script>
    <!--common script file-->
    <script src="{{ asset('FrontEnd/js/main.js') }}"></script>
</body>

</html>


















{{--
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Hiba El Farissi || Personal Portfolio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
<!-- Place favicon.ico in the root directory -->
{{-- <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/icon.png') }}"> --}}
<!-- CSS here -->
{{-- <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/fontawesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/hover-reveal.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>
<body> --}}

<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Preloader start -->
{{-- <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div> --}}
<!-- Preloader start -->

<!-- Backtotop start -->
{{-- <div class="backtotop-wrap cursor-pointer">
        <svg class="backtotop-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div> --}}
<!-- Backtotop end -->

<!-- Offcanvas area start -->
{{-- <div class="fix">
        <div class="offcanvas__area">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="/">
                                <img src="assets/imgs/logo/logo.svg" alt="logo not found"> --}}
{{-- <img src="assets/imgs/logoo.png') }}" alt="logo not found"> --}}
{{-- </a>
                        </div>
                        <div class="offcanvas__close">
                            <button class="offcanvas-close-icon animation--flip">
                                <span class="offcanvas-m-lines">
                                    <span class="offcanvas-m-line line--1"></span><span
                                        class="offcanvas-m-line line--2"></span><span
                                        class="offcanvas-m-line line--3"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="mobile-menu fix"></div>
                    <div class="offcanvas__social">
                        <h4 class="offcanvas__title mb-20">Subscribe & Follow</h4>
                        <div class="theme__social">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="icon-twiter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-behance"></i></a>
                        </div>
                    </div>
                    <div class="offcanvas__btn">
                        <div class="header__btn-wrap">
                            <a class="bd-btn is-btn-anim" href="#">
                                <span class="bd-btn-inner">
                                    <span class="bd-btn-normal">Purchase now</span>
                                    <span class="bd-btn-hover">Purchase now</span>
                                    <i class="contentHidden"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>
    <div class="offcanvas__overlay-white"></div> --}}
<!-- Offcanvas area end-->

<!-- Header area start -->
{{-- <header>
        <div id="header-sticky" class="header__area header-transparent">
            <div class="container">
                <div class="mega__menu-wrapper p-relative">
                    <div class="header__main">
                        <div class="header__left">
                            <div class="header__logo">
                                <a href="/"> --}}
{{-- <img class="logo__white" src="assets/imgs/logo/logo.svg" alt="logo not found"> --}}
{{-- <img src="assets/imgs/logoo.png') }}" alt="logo not found">
                                </a>
                            </div>
                        </div>
                        <div class="header__middle">
                            <div class="mean__menu-wrapper d-none d-md-block">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul class="onepage-menu">
                                            <li>
                                                <a href="/">Home</a>
                                            </li>
                                            <li>
                                                <a href="/About">About</a>
                                            </li>
                                            <li><a href="/Service">Services</a>
                                            </li>
                                            <li><a href="/Project">Protolio</a>
                                            </li>
                                            <li><a href="/Blog">Blog</a>
                                            </li>
                                        </ul>
                                    </nav>

                                    <div class="header__hamburger ml-20 d-none">
                                        <button type="button" class="hamburger-btn offcanvas-open-btn">
                                            <span>01</span>
                                            <span>01</span>
                                            <span>01</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header__right">
                            <div class="header__action d-flex align-items-center">
                                <div
                                    class="header__btn-wrap d-none d-sm-inline-flex d-inline-flex align-items-center gap-5">
                                    <a class="bd-btn is-btn-anim bordered-blue" href="{{ route('download.cv') }}">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Dowland CV</span>
                                            <span class="bd-btn-hover">Dowland CV</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>

                                </div>
                                <div class="header__hamburger ml-20 d-lg-none">
                                    <div class="sidebar__toggle">
                                        <a class="bar-icon" href="javascript:void(0)">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="header__hamburger ml-20 d-none">
                                    <button type="button" class="hamburger-btn offcanvas-open-btn">
                                        <span>01</span>
                                        <span>01</span>
                                        <span>01</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> --}}
<!-- Header area end -->

{{-- <main>
        @yield('content')
    </main> --}}


<!-- Footer area start -->
{{-- <footer>
    <section class="footer__area section-space-top">
        <div class="container">
            <div class="footer__top">
                <div class="footer__logo">
                    <a href="/">
                        <h5 class="text-uppercase">@ Social Media</h5> --}}
{{-- <img src="assets/imgs/logo/logo.svg" alt="logo not found"> --}}
{{-- <img src="assets/imgs/logoo.png') }}" alt="logo not found"> --}}
{{-- </a>
                </div>
                <div class="footer__content">
                    <div class="theme__social">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="icon-twiter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-behance"></i></a>
                    </div>
                </div>
            </div> --}}
<!-- Section divider -->
{{-- <div class="section__divider">
                <hr>
            </div>
            <div class="footer__bottom">
                <div class="footer__widget">
                    <div class="footer__widget-title">
                        <h5>About Me</h5>
                    </div>
                    <div class="footer__widget-content">
                        <p class="mb-30">
                            Meet Hiba, a dynamic full-stack developer known for her passion for crafting exceptional digital experiences.
                             With expertise in both frontend and backend development, she brings a unique blend of creativity to every project she undertakes.
                             When not coding,
                             Hiba enjoys exploring new technologies.
                        </p>
                    </div>
                </div>


                <div class="footer__widget">
                    <div class="footer__widget-title">
                        <h5>Contact Me</h5>
                    </div>
                    <div class="footer__widget-content">
                        <div class="contact__info-item style-two">
                            <ul>
                                <li>
                                    <div class="contact__info">
                                        <div class="contact__info-icon">
                                            <span>
                                                <i class="icon-phone"></i>
                                            </span>
                                        </div>
                                        <div class="contact__info-content">
                                            <p>Phone</p>
                                            <h6><a href="tel:+212615256198">+212615256198</a></h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact__info">
                                        <div class="contact__info-icon">
                                            <span>
                                                <i class="icon-envelope"></i>
                                            </span>
                                        </div>
                                        <div class="contact__info-content">
                                            <p>Email</p>
                                            <h6><a href="mailto:elfarissihiba780@gmail.com">elfarissihiba780@gmail.com</a></h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>




                <div class="footer__widget">
                    <div class="footer__widget-title">
                        <h5>Services</h5>
                    </div>
                    <div class="footer__links">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="{{ url('About') }}">About Me</a></li>
                            <li><a href="{{ url('Service') }}">Services</a></li>
                            <li><a href="{{ url('Project') }}">Protfolio</a></li>
                            <li><a href="{{ url('Blog') }}">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__widget">
                    <div class="footer__widget-title">
                        <h5>Subscribe Now</h5>
                    </div>
                    <div class="footer__widget-content">
                        <p>Subscribe to get the latest news from me</p>
                        <form action="#">
                            <div class="footer__input">
                                <input type="text" placeholder="Enter your mail">
                                <button class="footer__btn" type="submit"><i class="icon-plane"></i></button>
                            </div>
                        </form>
                        <p>*I am not going to save your data</p>
                    </div>
                </div>
            </div>
        </div> --}}
<!-- Section divider -->
{{-- <div class="section__divider">
            <hr>
        </div>
        <div class="footer__copyright style-two">
            <div class="container">
                <div class="footer__copyright">
                    <p>Copyright @ 2024 <a href="/">Hiba EL Farissi.</a> All Right Reserved</p>
                </div>
            </div>
        </div>
    </section>
</footer> --}}
<!-- Footer area end -->

<!-- JS here -->
{{-- <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/meanmenu.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/tween-max.js') }}"></script>
<script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
<script src="{{ asset('assets/js/vendor/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/{{ asset('Frontend/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/vanilla.tilt.js') }}"></script>
<script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/hover-reveal.js') }}"></script>
<script src="{{ asset('assets/js/plugins/parallax.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/parallax-scroll.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/ajax-form.js') }}"></script>
<script src="{{ asset('assets/js/vendor/js_circle-progress.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script> --}}

{{-- @endsection --}}
