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
                    data-bs-toggle="collapse"
                    data-bs-target="#collapse-{{ $index }}"
                    aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                    aria-controls="collapse-{{ $index }}">
                    {{ $item->question }}
                </button>
            </h2>
            <div id="collapse-{{ $index }}"
                class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                aria-labelledby="heading-{{ $index }}"
                data-bs-parent="#accordionExample">
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
@endsection
