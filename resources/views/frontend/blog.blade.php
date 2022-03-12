@extends('frontend.master')


@section('content')
<!-- Page Title Starts -->
<section class="title-section text-center text-sm-center revealator-slideup revealator-once revealator-delay1">
    <p class="utf-section-description">My Blog Post</p>
    <h1>Latest <span>Posts</span></h1>
    <div class="animated-bar"></div>
    <p class="text-max-700">Lorem ipsum dolor sit amet, consect adipisic elit, sed do eiusmod tempor incididunt ut labore et d magna aliqua enim sed do sit.</p>
  </section>
  <!-- Page Title Ends -->

  <!-- Main Content Starts -->
  <div class="main-content utf-blog-section revealator-slideup revealator-once revealator-delay1">
    <div class="container">
      <!-- Articles Starts -->
      <div class="row">
        <!-- Article Starts -->
        @forelse ($blog as $item)
            <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                <article class="post-container">
                    <div class="post-thumb">
                    <a href="{{route('frontend.blog_post', $item->id)}}" class="d-block position-relative overflow-hidden">
                        <img src="{{asset('uploads/blog')}}/{{$item->thumbnail}}" class="img-fluid" alt="Blog Post">
                        <span class="content-date">{{$item->created_at->format(date('d m Y'))}}</span>
                    </a>
                    </div>
                    <div class="post-content">
                    <div class="entry-header">
                        <div class="utf-blog-post-user">By, {{$item->rel_to_user->name}}</div>
                        <div class="utf-blog-post-tage">{{Str::limit($item->category, 12)}}</div>
                        <h3><a href="{{route('frontend.blog_post', $item->id)}}">{{$item->title}}</a></h3>
                    </div>
                    <p class="card-text utf-content-description">{!! Str::limit($item->description, 80) !!}</p>
                    </div>
                </article>
            </div>
        @empty
        <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
            <h5 class="alert alert-warning">Post something first.</h5>
        </div>
        @endforelse
        <!-- Article Ends -->

        <!-- Pagination Starts -->
        <div class="col-12 mt-4 row justify-content-center">
          {{$blog->links()}}
        </div>
        <!-- Pagination Ends -->

      </div>
      <!-- Articles Ends -->
    </div>
  </div>
@endsection
