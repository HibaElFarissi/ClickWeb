@extends('layouts.navbar')
@section('content')
    <!--Breadcrumb Area-->
    <section class="breadcrumb-area banner-2">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner">
                            <div class="bread-menu">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="#">Blog Details</a></li>
                                </ul>
                            </div>
                            <div class="bread-title">
                                <h2>Blog Single</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--End Breadcrumb Area-->
    <!--Start Blog Details-->
    <section class="blog-page pad-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-header">
                        <h1> {{$Article->title}}</h1>
                       
                    </div>
                    <br><br>
                    <div class="image-set"><img src="{{ asset('storage/' . $Article->photo) }}" alt="blog images" class="img-fluid" />
                    </div>
                    <div class="blog-content mt30">
                        <p>
                            {!! $Article->text !!}
                        </p>
                       

                    

                    </div>
                   
                </div>
                <!--End Blog Details-->
                <!--Start Sidebar-->
                <div class="col-lg-4">
                    <div class="sidebar">
                        
                        <!--Start Recent post-->
                        <div class="recent-post widgets mt60">
                            <h3 class="mb30">Recent post</h3>
                            @foreach ($Post as $item)
                                <div class="media">
                                <div class="post-image bdr-radius">
                                    <a href="{{ route('Articles.show', $item) }}"><img src="{{ asset('storage/' . $item->photo) }}" alt="girl"
                                            class="img-fluid" /></a>
                                </div>
                                <div class="media-body post-info">
                                    <h5><a href="{{ route('Articles.show', $item) }}">{{$item->title}}</a></h5>
                                    <p>{{ $item->updated_at->format('F j, Y') }}</p>
                                </div>
                            </div>
                            @endforeach
                           
                        </div>
                        <!--Start Recent post-->
                        <!--Start Blog Category-->
                        <div class="recent-post widgets mt60">
                            <h3 class="mb30">Blog Category</h3>
                            <div class="blog-categories">
                                <ul>
                                   @foreach ($Categories as $item )
                                        <li>
                                        <a href="{{ route('ArticleCategorys.show', $item) }}">{{$item->name}}<span class="categories-number">({{$item->blog_count}} )</span></a>
                                    </li>
                                   @endforeach
                                   
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!--End Sidebar-->
            </div>
        </div>
    </section>
@endsection
