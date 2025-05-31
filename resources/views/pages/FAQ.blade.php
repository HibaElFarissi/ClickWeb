@extends('layouts.navbar')
@section('content')
    <!--Breadcrumb Area-->
    <section class="breadcrumb-area banner-5">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner">
                            <div class="bread-menu">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="#">FAQ</a></li>
                                </ul>
                            </div>
                            <div class="bread-title">
                                <h2>FAQ</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Area-->
    <!--Start Faqs-->
    <section class="pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <h2 class="mb0">FAQS</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12 mt60">
                    <div class="accordion" id="accordionExample">
                        @forelse ($Faqs as $index => $item)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-{{ $index }}">
                                    <button class="accordion-button {{ $index != 0 ? 'collapsed' : '' }}" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-{{ $index }}"
                                        aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                        aria-controls="collapse-{{ $index }}">
                                        {{ $item->question }}
                                    </button>
                                </h2>
                                <div id="collapse-{{ $index }}"
                                    class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                    aria-labelledby="heading-{{ $index }}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="data-reqs">
                                            <p>{{ $item->answer }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h4>No FAQs found</h4>
                        @endforelse
                    </div>

                </div>


            </div>
        </div>
    </section>
    <!--End Faqs-->
    <!--Start Testinomial-->
    <section class="testinomial-section-app bg-none pad-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="common-heading text-l">
                        <span>What our clients say about ClickWeb.</span>
                        <h2>Over 1200+ Satisfied Clients and Growing</h2>
                    </div>

                </div>
                <div class="col-lg-7">
                    <div class="pl50">
                        <div class="shape shape-a1"><img src="{{ asset('Frontend/images/shape/shape-3.svg') }}"
                                alt="shape"></div>
                        <div class="testimonial-card-a tcd owl-carousel">
                            @foreach ($Testimonials as $item )
                                <div class="testimonial-card">
                                <div class="tt-text">
                                    <p> {{$item->Reviews}}
                                    </p>
                                </div>
                                <div class="client-thumbs mt30">
                                    <div class="media v-center upset">
                                        <div class="user-image bdr-radius"><img
                                                src="{{ asset('storage/' . $item->photo) }}" alt="girl"
                                                class="img-fluid rounded-circle" /></div>
                                        <div class="media-body user-info v-center">
                                            <h5>{{$item->name}}</h5>
                                            <p>{{$item->work}}</p>
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
    <!--End Testinomial-->
@endsection
