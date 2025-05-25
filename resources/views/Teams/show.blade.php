@extends('layouts.navbar')
@section('content')
 <!--Breadcrumb Area-->
 <section class="breadcrumb-area banner-4">
    <div class="text-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 v-center">
            <div class="bread-inner">
              <div class="bread-menu">
                <ul>
                  <li><a href="/">Home</a></li>
                  <li><a href="#">Member Details</a></li>
                </ul>
              </div>
              <div class="bread-title">
                <h2>Member Details</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Breadcrumb Area-->
  <!--Start Team Details-->
  <section class="team pad-tb deep-dark">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-5">
          <div class="image-block upset bg-shape">
            <div class="image-div"><img src="{{ asset('storage/' . $Team->image) }}" alt="team" class="img-fluid"/></div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="full-image-card mt0">
            <div class="info-text-block">
              <h4>{{$Team->name}}</h4>
              <p>{{$Team->domain}} |<b> experience : </b>{{$Team->experience}} Years  </p>
            </div>
            <div class="otherinfo">
                <h5> Description : </h5>
              <p>{{$Team->description}} </p>
              <br>
              <h5> Competitions : </h5>
              <p>{{$Team->competitions}} </p>
              <div class="social-media-profile">
                
                <a href="{{ $Team->github }}" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-github"></i>
                </a>
                <a href="{{ $Team->linkedin }}" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="{{ $Team->website }}" target="_blank" rel="noopener noreferrer">
                    <i class="fas fa-globe"></i>
                </a>
                <a href="tel:{{ $Team->numero }}" target="_blank" rel="noopener noreferrer">
                    <i class="fas fa-phone"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Team Details-->
@endsection