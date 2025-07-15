<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs4.min.js"></script>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('Backend/css/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('Backend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('Backend/css/sidebar-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('Backend/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('Backend/css/apexcharts.css') }}">
    <link rel="stylesheet" href="{{ asset('Backend/css/prism.css') }}">
    <link rel="stylesheet" href="{{ asset('Backend/css/rangeslider.css') }}">
    <link rel="stylesheet" href="{{ asset('Backend/css/sweetalert.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Backend/css/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('Backend/css/style.css') }}">

    <link href="{{ asset('Backend/imgs/icon.png') }}" rel="icon">

    <title>Clickweb - Dashboard_Admin</title>
</head>

<body>

    <div class="preloader" id="preloader">
        <div class="preloader">
            <div class="waviy position-relative">
                <span class="d-inline-block">C</span>
                <span class="d-inline-block">L</span>
                <span class="d-inline-block">I</span>
                <span class="d-inline-block">C</span>
                <span class="d-inline-block">K</span>
                <span class="d-inline-block">W</span>
                <span class="d-inline-block">E</span>
                <span class="d-inline-block">B</span>
            </div>
        </div>
    </div>


    <div class="sidebar-area" id="sidebar-area">
        <div class="logo position-relative">
            <a href="/" class="d-block text-decoration-none">
                <!-- <img src="assets/images/logo-icon.png" alt="logo-icon"> -->
                <span class="logo-text fw-bold text-dark">ClickWeb</span>
                <br>
            </a>
            <button
                class="sidebar-burger-menu bg-transparent p-0 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y"
                id="sidebar-burger-menu">
                <i data-feather="x"></i>
            </button>
        </div>
        <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
            <ul class="menu-inner">
                <li class="menu-item open">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="grid" class="menu-icon tf-icons"></i>
                        <span class="title">Dashboard</span>
                        {{-- <span class="count">7</span> --}}
                    </a>
                </li>

                <li class="menu-title small text-uppercase">
                    <span class="menu-title-text">LOGO</span>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="feather" class="menu-icon tf-icons"></i>
                        <span class="title">Logo</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('Logos.index') }}" class="menu-link">
                                Show logo
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('Logos.create') }}" class="menu-link">
                                Create logo
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Informations -->
                <li class="menu-title small text-uppercase">
                    <span class="menu-title-text">All Information</span>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">

                        <i data-feather="at-sign" class="menu-icon tf-icons"></i>
                        <span class="title">Infos</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('infos.index') }}" class="menu-link">
                                All infos
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('infos.create') }}" class="menu-link">
                                Create an info
                            </a>
                        </li>
                    </ul>
                </li>




                <li class="menu-title small text-uppercase">
                    <span class="menu-title-text">PAGES</span>
                </li>

                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">

                        {{-- <i data-feather="award" class="menu-icon tf-icons"></i> --}}
                        <i data-feather="briefcase" class="menu-icon tf-icons"></i>
                        <span class="title">Demande Devis</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('Demande.index') }}" class="menu-link">
                                All Demandes
                            </a>
                        </li>


                    </ul>
                </li>
                {{-- Email --}}
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="mail" class="menu-icon tf-icons"></i>
                        <span class="title">Email</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('Contacts.index') }}" class="menu-link">
                                Inbox
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('Newsletters.index') }}" class="menu-link">
                                Newsletters
                            </a>
                        </li>
                    </ul>


                    {{-- Banner --}}
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        {{-- <i data-feather="message-square" class="menu-icon tf-icons"></i> --}}
                        <i data-feather="flag" class="menu-icon tf-icons"></i>
                        <span class="title">Clients</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('Clients.index') }}" class="menu-link">
                                all Clients
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('Clients.create') }}" class="menu-link">
                                Create Client
                            </a>
                        </li>
                    </ul>


                    {{-- Blog --}}
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">

                        {{-- <i data-feather="align-left" class="menu-icon tf-icons"></i> --}}
                        <i data-feather="book-open" class="menu-icon tf-icons"></i>
                        <span class="title">Blog</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('ArticleCategorys.index') }}" class="menu-link">
                                Article Category
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('Articles.index') }}" class="menu-link">
                                All Articles
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('Articles.create') }}" class="menu-link">
                                Create Article
                            </a>
                        </li>
                    </ul>

                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">

                        {{-- <i data-feather="align-left" class="menu-icon tf-icons"></i> --}}
                        <i data-feather="dollar-sign" class="menu-icon tf-icons"></i>
                        <span class="title">Pricings</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('PricingCategory.index') }}" class="menu-link">
                                Pricing Category
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('Pricings.index') }}" class="menu-link">
                                All Pricings
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('Pricings.create') }}" class="menu-link">
                                Create Pricing
                            </a>
                        </li>
                    </ul>

                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">

                        <i data-feather="book" class="menu-icon tf-icons"></i>
                        <span class="title">About</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('Abouts.index') }}" class="menu-link">
                                All About
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('Abouts.create') }}" class="menu-link">
                                Create About
                            </a>
                        </li>
                    </ul>



                    {{-- Features --}}
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">

                        {{-- <i data-feather="award" class="menu-icon tf-icons"></i> --}}
                        <i data-feather="briefcase" class="menu-icon tf-icons"></i>
                        <span class="title">Our Features</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('Features.index') }}" class="menu-link">
                                All Features
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('Features.create') }}" class="menu-link">
                                Create An Features
                            </a>
                        </li>
                    </ul>
                </li>


                {{-- Testimonial --}}
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">

                        <i data-feather="star" class="menu-icon tf-icons"></i>
                        <span class="title">Testimonial</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('Testimonials.index') }}" class="menu-link">
                                feedback
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('Testimonials.create') }}" class="menu-link">
                                Create feedback
                            </a>
                        </li>
                    </ul>


                    {{-- Skills --}}
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        {{-- <i data-feather="cpu" class="menu-icon tf-icons"></i> --}}
                        <i data-feather="award" class="menu-icon tf-icons"></i>

                        <span class="title">Skills</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('Skills.index') }}" class="menu-link">
                                All skills
                            </a>
                        </li>

                    </ul>

                    {{-- Skills-Types --}}
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="code" class="menu-icon tf-icons"></i>

                        <span class="title">Skills Type</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('Skills-Types.index') }}" class="menu-link">
                                Type Skills
                            </a>
                        </li>
                    </ul>


                    {{-- Tags --}}
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">

                        <i data-feather="tag" class="menu-icon tf-icons"></i>
                        <span class="title">Tags</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('Tags.index') }}" class="menu-link">
                                All Tags
                            </a>
                        </li>
                    </ul>


                    {{-- Services --}}
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">

                        <i data-feather="aperture" class="menu-icon tf-icons"></i>
                        <span class="title">Services</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('Services.index') }}" class="menu-link">
                                Show Services
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('Services.create') }}" class="menu-link">
                                Create
                            </a>
                        </li>


                    </ul>

                </li>

                    {{-- Projects --}}
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="folder" class="menu-icon tf-icons"></i>
                        <span class="title">Projects</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('Teams.index') }}" class="menu-link">
                                All Teams
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('Tags.index') }}" class="menu-link">
                                All Tags
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('Categories.index') }}" class="menu-link">
                                All Categories
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('projects.index') }}" class="menu-link">
                                All Projects
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('projects.create') }}" class="menu-link">
                                Create
                            </a>
                        </li>
                    </ul>
                </li>
                 <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">

                        <i data-feather="monitor" class="menu-icon tf-icons"></i>
                        <span class="title">Marketings</span>
                    </a>
                    <ul class="menu-sub">
                         <li class="menu-item">
                            <a href="{{ route('Categorie_Marketings.index') }}" class="menu-link">
                                All Categories
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('Marketings.index') }}" class="menu-link">
                                All Marketings
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('Marketings.create') }}" class="menu-link">
                                Create Marketing
                            </a>
                        </li>


                    </ul>

                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="help-circle" class="menu-icon tf-icons"></i>
                        <span class="title">Faqs</span>
                    </a>
                    <ul class="menu-sub">

                        <li class="menu-item">
                            <a href="{{ route('Faqs.index') }}" class="menu-link">
                                All Faqs
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('Faqs.create') }}" class="menu-link">
                                Create Faq
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="users" class="menu-icon tf-icons"></i>
                        <span class="title">Members</span>

                    </a>
                    <ul class="menu-sub">

                        <li class="menu-item">
                            <a href="{{ route('Teams.index') }}" class="menu-link">
                                All Members
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('Teams.create') }}" class="menu-link">
                                Create Member
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="edit" class="menu-icon tf-icons"></i>


                        <span class="title">Designs</span>
                    </a>
                    <ul class="menu-sub">

                        <li class="menu-item">
                            <a href="{{ route('Categorie_Designs.index') }}" class="menu-link">
                                Design Category
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('Designs.index') }}" class="menu-link">
                                All Designs
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('Designs.create') }}" class="menu-link">
                                Create Design
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="video" class="menu-icon tf-icons"></i>

                        <span class="title">Videos</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('Categorie_Videos.index') }}" class="menu-link">
                                Video Category
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('Videos.index') }}" class="menu-link">
                                All Videos
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('Videos.create') }}" class="menu-link">
                                Create Video
                            </a>
                        </li>

                    </ul>
                </li>




                <!-- Auth -->
                <li class="menu-title small text-uppercase">
                    <span class="menu-title-text">Settings & Others</span>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="settings" class="menu-icon tf-icons"></i>
                        <span class="title">Settings</span>
                    </a>
                    <ul class="menu-sub">

                        <li class="menu-item">
                            <a href="{{ route('profile.edit') }}" class="menu-link">
                                Account
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('update_password') }}" class="menu-link">
                                Security
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('delete_user') }}" class="menu-link">
                                Delete
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </aside>
        <div class="bg-white z-1 admin">
            <div class="d-flex align-items-center admin-info border-top">
                <div class="flex-shrink-0">
                    {{-- <a href="{{ route('profile') }}" class="d-block">
                       @foreach ($infos as $item)
                            @if ($item->image1 === null)
                            <img src="{{ asset('BackEnd/images/userAuto.jpeg') }}" class="rounded-circle wh-54" alt="">
                            @else
                                <img src="{{ asset('storage/profile_pictures/' . auth()->user()->photo) }}" class="rounded-circle wh-54" alt="admin">
                                <img src="{{ asset('storage/' . $item->image1) }}" class="rounded-circle wh-54" alt="admin">
                            @endif

                    </a> --}}
                </div>
                <div class="flex-grow-1 ms-3 info">
                    {{-- <a href="#" class="d-block name">{{ $item->name }}</a> --}}
                    <a href=""
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a>
                    <form action="{{ route('logout') }}" id="logout-form" method="post">
                        @csrf
                    </form>
                </div>
                {{-- @endforeach --}}
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="main-content d-flex flex-column">

            <header class="header-area bg-white mb-4 rounded-bottom-10" id="header-area">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="left-header-content">
                            <ul
                                class="d-flex align-items-center ps-0 mb-0 list-unstyled justify-content-center justify-content-sm-start">
                                <li>
                                    <button class="header-burger-menu bg-transparent p-0 border-0"
                                        id="header-burger-menu">
                                        <i data-feather="menu"></i>
                                    </button>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-6 col-md-8">
                        <div class="right-header-content mt-2 mt-sm-0">
                            <ul
                                class="d-flex align-items-center justify-content-center justify-content-sm-end ps-0 mb-0 list-unstyled">


                                <li class="header-right-item">
                                    <div class="dropdown notifications noti">

                                        <!-- Home :  -->
                                        <a href="/">
                                            <button class="btn btn-secondary border-0 p-0 position-relative"
                                                type="button">
                                                <i data-feather="home"></i>
                                            </button>
                                        </a>
                                </li>

                                <li class="header-right-item d-none d-md-block">
                                    <div class="today-date">
                                        <span id="digitalDate"></span>
                                        <i data-feather="calendar"></i>
                                    </div>
                                </li>
                                <li class="header-right-item">
                                    <div class="dropdown admin-profile">
                                        <div class="d-xxl-flex align-items-center bg-transparent border-0 text-start p-0 cursor"
                                            data-bs-toggle="dropdown">
                                            {{-- <div class="flex-shrink-0">
                                            @foreach ($infos as $item)
                                                    @if ($item->image1 === null)
                                                    <img src="{{ asset('BackEnd/images/userAuto.jpeg') }}" class="rounded-circle wh-54" alt="">
                                                    @else
                                                        <img src="{{ asset('storage/profile_pictures/' . auth()->user()->photo) }}" class="rounded-circle wh-54" alt="admin">
                                                        <img src="{{ asset('storage/' . $item->image1) }}" class="rounded-circle wh-54" alt="admin">
                                                    @endif

                                            </div> --}}
                                            <div class="flex-grow-1 ms-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-none d-xxl-block">
                                                        {{-- <span class="degeneration">{{ auth()->user()->role }}</span> --}}
                                                        <div class="d-flex align-content-center">
                                                            {{-- <h3>{{ $item->name }}</h3> --}}
                                                            <div class="down">
                                                                <i data-feather="chevron-down"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- @endforeach --}}
                                        <ul class="dropdown-menu border-0 bg-white w-100 admin-link">
                                            <li>
                                                {{-- <a class="dropdown-item d-flex align-items-center text-body"
                                                    href="{{ route('profile') }}"> --}}
                                                <i data-feather="user"></i>
                                                <span class="ms-2">Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center text-body"
                                                    href="{{ route('profile.edit') }}">
                                                    <i data-feather="settings"></i>
                                                    <span class="ms-2">Setting</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                                    class="dropdown-item d-flex align-items-center text-body">
                                                    <i data-feather="log-out"></i>
                                                    <span class="ms-2">Logout</span>
                                                </a>
                                                <form action="{{ route('logout') }}" id="logout-form"
                                                    method="post">
                                                    @csrf
                                                </form>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>

            <main>
                @yield('content')
            </main>


            <div class="flex-grow-1"></div>
            <footer class="footer-area bg-white text-center rounded-top-10">
                <p class="fs-14"> <span class="TSM">©</span><span class="text-primary">ClickWeb</span> <span
                        class="TSM">is Proudly Owned by</span> <a href="/" target="_blank"
                        class="text-primary text-decoration-none">ClickWeb</a></p>
            </footer>
        </div>
    </div>



    <button class="btn btn-danger theme-settings-btn p-0 position-fixed z-2 text-center"
        style="bottom: 30px; right: 30px; width: 40px; height: 40px;" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
        <i data-feather="settings" class="wh-20 text-white position-relative" style="top: -1px; outline: none;"
            data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Click On Theme Settings"></i>
    </button>
    <div class="offcanvas offcanvas-end bg-white" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1"
        id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel"
        style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
        <div class="offcanvas-header bg-body-bg py-3 px-4 mb-4">
            <h5 class="offcanvas-title fs-18" id="offcanvasScrollingLabel">Theme Settings</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-4">

            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Light / Dark</h4>
            <button class="switch-toggle settings-btn dark-btn" id="switch-toggle">
                Click To <span class="dark">Dark</span> <span class="light">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Sidebar Light / Dark</h4>
            <button class="sidebar-light-dark settings-btn sidebar-dark-btn" id="sidebar-light-dark">
                Click To <span class="dark1">Dark</span> <span class="light1">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Header Light / Dark</h4>
            <button class="header-light-dark settings-btn header-dark-btn" id="header-light-dark">
                Click To <span class="dark2">Dark</span> <span class="light2">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Footer Light / Dark</h4>
            <button class="footer-light-dark settings-btn footer-dark-btn" id="footer-light-dark">
                Click To <span class="dark3">Dark</span> <span class="light3">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Card Style Radius / Square</h4>
            <button class="card-radius-square settings-btn card-style-btn" id="card-radius-square">
                Click To <span class="square">Square</span> <span class="radius">Radius</span>
            </button>
        </div>
    </div>


    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('Backend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Backend/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('Backend/js/dragdrop.js') }}"></script>
    <script src="{{ asset('Backend/js/rangeslider.min.js') }}"></script>
    <script src="{{ asset('Backend/js/sweetalert.js') }}"></script>
    <script src="{{ asset('Backend/js/quill.min.js') }}"></script>
    <script src="{{ asset('Backend/js/data-table.js') }}"></script>
    <script src="{{ asset('Backend/js/prism.js') }}"></script>
    <script src="{{ asset('Backend/js/clipboard.min.js') }}"></script>
    <script src="{{ asset('Backend/js/feather.min.js') }}"></script>
    <script src="{{ asset('Backend/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('Backend/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('Backend/js/amcharts.js') }}"></script>
    <script src="{{ asset('Backend/js/custom/ecommerce-chart.js') }}"></script>
    <script src="{{ asset('Backend/js/custom/custom.js') }}"></script>
</body>

<!-- Mirrored from HibaElFarissi/Protfolio/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Feb 2024 15:49:17 GMT -->

</html>
