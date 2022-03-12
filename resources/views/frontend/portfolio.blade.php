@extends('frontend.master')

@section('content')
<!-- Page Title Starts -->
<section class="title-section text-center text-sm-center revealator-slideup revealator-once revealator-delay1">
    <p class="utf-section-description">My Portfolio</p>
    <h1>My Recent <span>Works</span></h1>
    <div class="animated-bar"></div>
    <p class="text-max-700">Lorem ipsum dolor sit amet, consect adipisic elit, sed do eiusmod tempor incididunt ut labore et d magna aliqua enim sed do sit.</p>
  </section>
  <!-- Page Title Ends -->

  <!-- Main Content Starts -->
  <div class="main-content text-center revealator-slideup revealator-once revealator-delay1">
    <div id="grid-gallery" class="container grid-gallery">
      <!-- Portfolio Grid Starts -->
      <div class="grid-wrap">
        <ul class="row grid">

            @forelse ($portfolio_info as $portfolio)
                <li>
                    <figure style="border-radius:0;border:none;"><img src="{{asset('uploads/portfolio')}}/{{$portfolio->thumbnail}}" alt="Portolio Image" /></figure>
                </li>
            @empty
                <div class="text-center">
                    <h5 class="lead alert alert-warning">Project information not available !!</h5>
                </div>
            @endforelse
        </ul>
      </div>
      <!-- Portfolio Grid Ends -->

      <!-- Portfolio Details Starts -->
      <div class="slideshow">
        <ul>
        @foreach ($portfolio_info as $portfolio)
          <li>
            <figure>
              <img src="{{asset('uploads/portfolio')}}/{{$portfolio->thumbnail}}" alt="Portolio Image" />
              <figcaption>
                <div class="row">
                  <div class="col-12 col-sm-12 mb-2"><span class="project-label ft-wt-600">Project Title </span>: <span class="uppercase">{{$portfolio->title}}</span></div>
                  <div class="col-12 col-sm-12 mb-2"><span class="project-label ft-wt-600">Website Preview </span>: <span class="uppercase"><a href="{{($portfolio->preview_link != ''?$portfolio->preview_link:'#')}}">{{($portfolio->preview_link != ''?$portfolio->preview_link:'Not Available')}}</a></span></div>
                  <div class="col-12 col-sm-12 mb-2"><span class="project-label ft-wt-600">View Full Documentation </span>: <a href="{{route('frontend.portfolio.portfolio_single', $portfolio->id)}}">Click here</a></div>
                </div>
              </figcaption>
            </figure>
          </li>
        @endforeach


          <li>
            <figure>
              <div id="slider" class="carousel slide portfolio-slider" data-ride="carousel" data-interval="false">
                <ol class="carousel-indicators">
                    @foreach ($portfolio_info as $key=>$portfolio)
                    <li data-target="#slider" data-slide-to="{{$key++}}" class="{{($key++ == 0?'active':'')}}"></li>
                    @endforeach
                  </ol>
                  <div class="carousel-inner">
                    @foreach ($portfolio_info as $key=>$portfolio)
                    <div class="carousel-item {{($key++ == 0?'active':'')}}"><img src="{{asset('uploads/portfolio')}}/{{$portfolio->thumbnail}}" alt="slide 1"></div>
                    @endforeach
                  </div>
              </div>
            </figure>
          </li>
        </ul>
        <nav>
            <span class="icon nav-prev"><img src="http://utouchdesign.com/themes/meetu/dark/img/projects/navigation/left-arrow.png" alt="previous"></span>
            <span class="icon nav-next"><img src="http://utouchdesign.com/themes/meetu/dark/img/projects/navigation/right-arrow.png" alt="next"></span>
            <span class="nav-close"><img src="http://utouchdesign.com/themes/meetu/dark/img/projects/navigation/close-button.png" alt="close"> </span>
        </nav>
        <!-- Portfolio Navigation Ends -->
      </div>
    </div>

    <div class="container mt-4">
        <div class="row justify-content-center">
            {{$portfolio_info->links()}}
        </div>
    </div>

    <style>
        .pagination  .page-link {
            color: #69b513;
        }
        .pagination .page-item .page-link {
            border: none;
            background-color: transparent!important;
        }
        .pagination .disabled{
            color: #919191;
            background-color: transparent;
            border: none;
        }
    </style>
  </div>
  <!-- Main Content Ends -->

@endsection

