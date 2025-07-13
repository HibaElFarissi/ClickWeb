<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8"/>
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
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<!-- template-style-->
	<link href="{{ asset('FrontEnd/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('FrontEnd/css/responsive.css') }}" rel="stylesheet">
	<link href="{{ asset('FrontEnd/css/darkmode.css') }}" rel="stylesheet">
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
		   <div class="dsk-logo"><a class="nav-brand" href="./">
			  <img src="{{ asset('Frontend/images/logo.svg') }}" alt="Logo" class="mega-white-logo"/>
			  <img src="{{ asset('Frontend/images/logo.svg') }}" alt="Logo" class="mega-darks-logo"/>
			  </a>
		   </div>
		   <div class="custom-nav" role="navigation">
			  <ul class="nav-list">
				 <li class="sbmenu">
					<a href="/" class="menu-links">Home</a>
				 </li>
				 <li class="sbmenu">
					<a href="{{route('About')}}" class="menu-links">About</a>
				 </li>
				 <li class="sbmenu">
					<a href="{{route('Service')}}" class="menu-links">Services</a>
				 </li>
				 <li class="sbmenu rpdropdown">
					<a href="#" class="menu-links">Références</a>
                    <div class="nx-dropdown menu-dorpdown">
                        <div class="sub-menu-section">
                           {{-- <div class="container"> --}}
                              <div class="sub-menu-center-block">
                                <div class="sub-menu-column smfull">
                                    <ul>
                                       <li><a href="{{route('Project')}}">Creating Websites</a></li>
                                       <li><a href="{{route('Designs_all')}}">Designs</a></li>
                                       <li><a href="{{route('Videos_all')}}">Videos</a></li>
                                    </ul>
                    </div>
				 </li>
				 <li class="sbmenu rpdropdown">
					<a href="{{route('Blog')}}" class="menu-links">Blog</a>
				</li>
				 <li class="sbmenu rpdropdown">
					<a href="{{route('Contact')}}" class="menu-links">Contact</a>
				</li>
              </ul>
            
              <!-- mobile + desktop - sidebar menu- dark mode witch and button -->
              <ul class="nav-list right-end-btn">
              <li class="hidemobile"><a data-bs-toggle="offcanvas" href="#offcanvasExample" class="btn-round- btn-br bg-btn2"><i class="fas fa-phone-alt"></i></a></li>
              <li class="hidemobile"><a href="{{ route('Demande.create') }}" class="btn-br bg-btn3 btshad-b2 lnk">Demande Devis <span class="circle"></span></a> </li>
              <li class="hidedesktop darkmodeswitch"><div class="switch-wrapper"> <label class="switch" for="niwax"> <input type="checkbox" id="niwax"/>  <span class="slider round"></span> </label> </div> </li>
              <li class="hidedesktop"><a data-bs-toggle="offcanvas" href="#offcanvasExample" class="btn-round- btn-br bg-btn2"><i class="fas fa-phone-alt"></i></a></li>
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
				<a href="{{route('About')}}">About</a>
			  </li>
			  <li>
				<a href="{{route('Service')}}">Services</a>
			  </li>
			  <li>
				<a href="#">Réferences</a>
                    <ul>
                        <li>
                            <a href="{{route('Project')}}">Websites</a>
                        </li>
                        <li>
                            <a href="{{route('Designs_all')}}">Designs</a>
                        </li>
                        <li>
                            <a href="{{route('Videos_all')}}">Videos</a>
                        </li>
                    </ul>
			  </li>
			  <li>
				<a href="{{route('Blog')}}">Blog</a>
			  </li>
              <li>
                <a href="{{route('Contact')}}">Contact</a>
             </li>
		   </ul>
		   <ul class="bottom-nav">
			  <li class="prb">
				 <a href="tel:+11111111111">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
					   <path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
						  c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
						  c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
						  C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z"
						  />
					</svg>
				 </a>
			  </li>
			  <li class="prb">
				 <a href="mailto:somewebmedia@gmail.com">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
					   <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
					   <path d="M0 0h24v24H0z" fill="none"/>
					</svg>
				 </a>
			  </li>
			  <li class="prb">
				 <a href="skype:niwax.company?call">
					<svg enable-background="new 0 0 24 24" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
					   <path d="m23.309 14.547c1.738-7.81-5.104-14.905-13.139-13.543-4.362-2.707-10.17.352-10.17 5.542 0 1.207.333 2.337.912 3.311-1.615 7.828 5.283 14.821 13.311 13.366 5.675 3.001 11.946-2.984 9.086-8.676zm-7.638 4.71c-2.108.867-5.577.872-7.676-.227-2.993-1.596-3.525-5.189-.943-5.189 1.946 0 1.33 2.269 3.295 3.194.902.417 2.841.46 3.968-.3 1.113-.745 1.011-1.917.406-2.477-1.603-1.48-6.19-.892-8.287-3.483-.911-1.124-1.083-3.107.037-4.545 1.952-2.512 7.68-2.665 10.143-.768 2.274 1.76 1.66 4.096-.175 4.096-2.207 0-1.047-2.888-4.61-2.888-2.583 0-3.599 1.837-1.78 2.731 2.466 1.225 8.75.816 8.75 5.603-.005 1.992-1.226 3.477-3.128 4.253z"/>
					</svg>
				 </a>
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
	  <div class="btnclose"> <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
	</div>
	<div class="form-block sidebarform">
  <h4>Demande Devis</h4>
  @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif
  <form id="contactForm" data-bs-toggle="validator" class="shake mt20" action="{{ route('Demande.store') }}" method="POST">
    @csrf
    <div class="row">
      <div class="form-group col-sm-12">
        <input type="text" name="full_name" id="name" placeholder="Enter name" required data-error="Please fill Out" value="{{ old('full_name') }}">
        <div class="help-block with-errors"></div>
      </div>
      <div class="form-group col-sm-12">
        <input type="email" name="email" id="email" placeholder="Enter email" required value="{{ old('email') }}">
        <div class="help-block with-errors"></div>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-sm-12">
        <input type="tel" name="telephone" id="mobile" placeholder="Enter mobile" required data-error="Please fill Out" value="{{ old('telephone') }}">
        <div class="help-block with-errors"></div>
      </div>
      <div class="form-group col-sm-12">
        <input type="text" name="site" id="site" placeholder="Enter site (optionnel)" value="{{ old('site') }}">
        <div class="help-block with-errors"></div>
      </div>
      <div class="form-group col-sm-12">
        <select name="contactez_nous" id="Dtype" required>
          <option value="">Pour quels besoins nous contactez nous</option>
          <option value="ADS" {{ old('contactez_nous') == 'ADS' ? 'selected' : '' }}>ADS</option>
          <option value="hébergement" {{ old('contactez_nous') == 'hébergement' ? 'selected' : '' }}>hébergement</option>
          <option value="motion design" {{ old('contactez_nous') == 'motion design' ? 'selected' : '' }}>motion design</option>
          <option value="Instagram ADS" {{ old('contactez_nous') == 'Instagram ADS' ? 'selected' : '' }}>Instagram ADS</option>
          <option value="Facebook ADS" {{ old('contactez_nous') == 'Facebook ADS' ? 'selected' : '' }}>Facebook ADS</option>
          <option value="Création de site web" {{ old('contactez_nous') == 'Création de site web' ? 'selected' : '' }}>Création de site web</option>
          <option value="création maquette" {{ old('contactez_nous') == 'création maquette' ? 'selected' : '' }}>création maquette</option>
          <option value="Animation des réseaux de sociaux" {{ old('contactez_nous') == 'Animation des réseaux de sociaux' ? 'selected' : '' }}>Animation des réseaux de sociaux</option>
          <option value="création landing page" {{ old('contactez_nous') == 'création landing page' ? 'selected' : '' }}>création landing page</option>
          <option value="creation site WordPress" {{ old('contactez_nous') == 'creation site WordPress' ? 'selected' : '' }}>creation site WordPress</option>
          <option value="création Application Web" {{ old('contactez_nous') == 'création Application Web' ? 'selected' : '' }}>création Application Web</option>
          <option value="Autre...." {{ old('contactez_nous') == 'Autre....' ? 'selected' : '' }}>Autre....</option>
        </select>
        <div class="help-block with-errors"></div>
      </div>
    </div>

    <div class="form-group">
      <select name="investissement" id="investissement" required>
        <option value="">Quel est vôtre investissement mensuel cumulé</option>
        <option value="600 - 1000 dh" {{ old('investissement') == '600 - 1000 dh' ? 'selected' : '' }}>600 - 1000 dh</option>
        <option value="1500-2500 dh" {{ old('investissement') == '1500-2500 dh' ? 'selected' : '' }}>1500-2500 dh</option>
        <option value="2500 - 4500 dh" {{ old('investissement') == '2500 - 4500 dh' ? 'selected' : '' }}>2500 - 4500 dh</option>
        <option value="5000-8000 dh" {{ old('investissement') == '5000-8000 dh' ? 'selected' : '' }}>5000-8000 dh</option>
        <option value="10000 - 20 000 dh" {{ old('investissement') == '10000 - 20 000 dh' ? 'selected' : '' }}>10000 - 20 000 dh</option>
        <option value="20000 - plus" {{ old('investissement') == '20000 - plus' ? 'selected' : '' }}>20000 - plus</option>
      </select>
      <div class="help-block with-errors"></div>
    </div>

    <div class="form-group">
      <textarea name="message" id="message" rows="5" placeholder="Enter your message" required>{{ old('message') }}</textarea>
      <div class="help-block with-errors"></div>
    </div>

    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="customCheck" name="agree" checked required>
      <label class="custom-control-label" for="customCheck">
        I agree to the <a href="#">Terms &amp; Conditions</a>.
      </label>
    </div>

    <button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit <span class="circle"></span></button>
    <div id="msgSubmit" class="h3 text-center hidden"></div>
    <div class="clearfix"></div>
  </form>
</div>

	<div class="getintouchblock mt30">
	  <h4>Get In Touch</h4>
	  <p class="mt10">Please fill out the form below if you have a plan or project in mind that you'd like to share with us.</p>
	  <div class="media mt15">
		<div class="icondive"><img src="{{ asset('Frontend/images/icons/call.svg') }}" alt="icon"></div>
		<div class="media-body getintouchinfo">
		  <a href="tel:123456790">+91-123 4567 890 <span>Mon-Fri 9am - 6pm</span></a>
		</div>
	  </div>
	  <div class="media mt15">
		<div class="icondive"><img src="{{ asset('Frontend/images/icons/whatsapp.svg') }}" alt="icon"></div>
		<div class="media-body getintouchinfo">
		  <a href="tel:123456790">+91-123 4567 890 <span>Mon-Fri 9am - 6pm</span></a>
		</div>
	  </div>
	  <div class="media mt15">
		<div class="icondive"><img src="{{ asset('Frontend/images/icons/mail.svg') }}" alt="icon"></div>
		<div class="media-body getintouchinfo">
		  <a href="mailto:info@website.com">info@website.com <span>Online Support</span></a>
		</div>
	  </div>
	  <div class="media mt15">
		<div class="icondive"><img src="{{ asset('Frontend/images/icons/map.svg') }}" alt="icon"></div>
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

<!--Start Footer-->
<footer>
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
</footer>
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









