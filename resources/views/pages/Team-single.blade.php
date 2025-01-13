@extends('layouts.navbar')
@section('content')

  <section class="breadcrumb-area banner-4">
    <div class="text-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 v-center">
            <div class="bread-inner">
              <div class="bread-menu">
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="team.html">Team</a></li>
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
            <div class="image-div"><a href="#"><img src="images/team/team-single.jpg" alt="team" class="img-fluid"/></a></div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="full-image-card mt0">
            <div class="info-text-block">
              <h4><a href="#">Anna Rexia</a></h4>
              <p>Company CTO</p>
            </div>
            <div class="otherinfo">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. is simply dummy text of the printing and typesetting industry. </p>
              <div class="social-media-profile">
                <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                <a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
                <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                <a href="javascript:void(0)" target="blank"><i class="fab fa-dribbble"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Team Details-->

@endsection
