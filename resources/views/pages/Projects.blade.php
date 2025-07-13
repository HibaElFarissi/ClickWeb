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
                                <h2>Our Projects</h2>
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
                        <h2>Projects</h2>
                    </div>
                </div>
                <div class="col-lg-6 v-center">
                    <div class="filters">
                        <ul class="filter-menu">
                            <li data-filter="*" class="is-checked">All</li>
                            @php $tabId = 1; @endphp
                            @foreach ($project_item as $item)
                                <li data-filter=".tab-{{ $tabId }}">{{ $item->name }}</li>
                                @php $tabId++; @endphp
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row card-list">
                @php $tabId = 1; @endphp
                @foreach ($project_item as $item)
                    @if (!is_null($item->project) && $item->project->isNotEmpty())
                        @foreach ($item->project as $plan)
                            <div class="col-lg-4 col-sm-6 single-card-item project_item tab-{{ $tabId }}">
                                <div class="isotope_item hover-scale">
                                    <div class="item-image">
                                        <a href="{{ route('projects.show', $plan) }}">
                                            <img src="{{ asset('storage/' . $plan->photo) }}" alt="image" class="img-fluid" />
                                        </a>
                                    </div>
                                    <div class="item-info">
                                        <h4><a href="{{ route('projects.show', $plan) }}">{{ $plan->name }}</a></h4>
                                        <p>{{ $plan->categorie->name }}</p>
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
        $(window).on('load', function () {
            var $grid = $('.card-list').isotope({
                itemSelector: '.project_item',
                layoutMode: 'fitRows'
            });

            $('.filter-menu li').on('click', function () {
                $('.filter-menu li').removeClass('is-checked');
                $(this).addClass('is-checked');
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({ filter: filterValue });
            });
        });
    </script>
@endsection
