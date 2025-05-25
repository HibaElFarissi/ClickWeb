@extends('layouts.navbar')

@section('content')
  <section class="breadcrumb-area banner-2">
    <div class="text-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 v-center">
            <div class="bread-inner">
              
              <div class="bread-title">
                <h2>Blog </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Breadcrumb Area-->
  <!--Start Blog Grid-->
  <section class="blog-page pad-tb pt40">
    <div class="container">
      <div class="row">
        @foreach ($Articles as  $Article )
            <div class="col-lg-4 col-sm-6 single-card-item">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="{{ route('Articles.show', $Article) }}"><img src="{{ asset('storage/' . $Article->photo) }}" alt="blog" class="img-fluid"/> </a>
              <span class="category-blog"><a href="{{ route('Articles.show', $Article) }}">{{$Article->categorie__article->name}}</a></span>
            </div>
            <div class="item-info blog-info">
              <div class="entry-blog">
                <span class="bypost"><a href="{{ route('Articles.show', $Article) }}"><i class="fas fa-user"></i> {{$Article->user->name}}</a></span>
                <span class="posted-on">
                <a href="{{ route('Articles.show', $Article) }}"><i class="fas fa-clock"></i> {{ $Article->updated_at->format('F j, Y') }}</a>
                </span>

              </div>
              <h4><a href="{{ route('Articles.show', $Article) }}">{{ $Article->title }}</a></h4>
             
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
    </div>
  </section>
  <!--End Blog Grid-->
@endsection
