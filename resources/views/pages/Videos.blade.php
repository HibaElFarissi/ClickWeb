@extends('layouts.navbar')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="breadcrumb-area banner-3">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner">
                            <div class="bread-menu">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="#">Références</a></li>
                                </ul>
                            </div>
                            <div class="bread-title">
                                <h2>Our Videos</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio-page pad-tb">
        <div class="container">
            <div class="row justify-content-left">
                <div class="col-lg-6">
                    <div class="common-heading pp">
                        <span>Our Work</span>
                        <h2>Videos</h2>
                    </div>
                </div>
                <div class="col-lg-6 v-center">
                    <div class="filters">
                        <ul class="filter-menu">
                            <li data-filter="*" class="is-checked">All</li>
                            @php $tabId = 1; @endphp
                            @foreach ($Video_item as $item)
                                <li data-filter=".tab-{{ $tabId }}">{{ $item->name }}</li>
                                @php $tabId++; @endphp
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row card-list">
                @php $tabId = 1; @endphp
                @foreach ($Video_item as $item)
                    @if (!is_null($item->video) && $item->video->isNotEmpty())
                        @foreach ($item->video as $plan)
                            <div class="col-lg-4 col-sm-6 single-card-item  Video_item tab-{{ $tabId }}">
                                <div class="reviews-card pr-shadow">
                                    <div class="review-video- mb20">
                                        <div class="video-review">
                                            <a class="video-link"
                                                href="https://www.youtube.com/watch?v={{ $plan->code_video }}?autoplay=1&amp;rel=0"><img
                                                    src="{{ asset('storage/' . $plan->photo) }}" alt="client"
                                                    class="img-fluid">
                                                <div class="review-vid-details">
                                                    <div class="-vid-ico"><span class="triangle-play2"></span></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="-client-details-">
                                        <div class="reviewer-text">
                                            <h4>{{ $plan->name }}</h4>
                                            <p>{{ $plan->client }} -- <small>{{ $plan->categorie_Video->name }} </small></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    @php $tabId++; @endphp
                @endforeach
            </div>
        </div>
    </section>
   
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

    <script>
        $(window).on('load', function() {
            var $grid = $('.card-list').isotope({
                itemSelector: '.Video_item',
                layoutMode: 'fitRows'
            });

            $('.filter-menu li').on('click', function() {
                $('.filter-menu li').removeClass('is-checked');
                $(this).addClass('is-checked');
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
        });
    </script>
@endsection
