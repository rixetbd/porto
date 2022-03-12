@extends('frontend.master')

@section('content')


  <!-- Page Title Starts -->
  <section class="title-section text-center text-sm-center revealator-slideup revealator-once revealator-delay1">
    <p class="utf-section-description">Portfolio</p>
    <h1>Portfolio Single <span>Post</span></h1>
    <div class="animated-bar"></div>
    <p class="text-max-700">Lorem ipsum dolor sit amet, consect adipisic elit, sed do eiusmod tempor incididunt ut labore et d magna aliqua enim sed do sit.</p>
  </section>
  <!-- Page Title Ends -->

  <!-- Main Content Starts -->
  <div class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
      <div class="row">
        <!-- Article Starts -->
        <article class="col-12">
          <img src="{{asset('uploads/portfolio')}}/{{$portfolio->thumbnail}}" class="img-fluid w-100 rounded" alt="Blog image"/>
          <h1 class="text-uppercase text-capitalize mt-3">{{$portfolio->title}}</h1>
          <div class="meta">
              <span><i class="fa fa-user"></i> By, {{$portfolio->rel_to_user->name}}</span>
              <span class="date mx-3"><i class="fa fa-calendar"></i> {{$portfolio->created_at->format(date('d-m-Y'))}}</span>
              <span><i class="fa fa-tags"></i> {{$portfolio->technology}}</span>
          </div>
        <div class="utf-blog-excerpt pb-2 my-4">
            {!! $portfolio->description !!}
        </div>
          <!--  Comments Starts -->
          <div class="comments">
            <h3 class="utf-comments-heading">{{$portfolio_comment->count()}} Comments</h3>

            @forelse ($portfolio_comment as $comment)
            <ul class="utf-comments-list p-0">
                <li>
                  <div class="comment pb-0"> <!-- <img class="comment-avatar pull-left" alt="" src="http://utouchdesign.com/themes/meetu/dark/img/user1.jpg"> -->
                    <i class="fa fa-user fa-4x comment-avatar pull-left"></i>
                    <div class="comment-body" style="margin-left: 75px;">
                      <div class="meta-data"> <span class="comment-author">{{$comment->viewer_name}}</span> <span class="comment-date pull-right">{{$comment->created_at->format(date('d-m-Y'))}}</span> </div>
                      <div class="comment-content m-1">
                        <p class="text-justify">{{$comment->comment}}</p>
                      </div>
                      {{-- <div> <a class="comment-reply" href="#">Reply</a> </div> --}}
                    </div>
                  </div>
                  {{-- Reply Comment
                      <ul class="comments-reply">
                    <li>
                      <div class="comment"> <img class="comment-avatar pull-left" alt="" src="http://utouchdesign.com/themes/meetu/dark/img/user2.jpg">
                        <div class="comment-body">
                          <div class="meta-data"> <span class="comment-author">Jackson Brown</span> <span class="comment-date pull-right">12 March, 2020</span> </div>
                          <div class="comment-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                          </div>
                          <div> <a class="comment-reply" href="#">Reply</a> </div>
                        </div>
                      </div>
                    </li>
                  </ul> --}}
                </li>
              </ul>
            @empty

            @endforelse


            <h3 class="utf-comments-heading add-comment">Add a Comment</h3>
            <!-- Comments Form Starts -->
            <div class="comments-form">
              <form method="POST" action="{{route('frontend.portfolio.comments')}}">
                  @csrf
                  <div class="row">
                    <div class="form-group col-md-6 col-lg-6">
                      <input type="hidden" name="portfolio_id" class="form-control" value="{{$portfolio->id}}">
                      <input type="text" name="viewer_name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="form-group col-md-6 col-lg-6">
                      <input type="email" name="viewer_email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group col-md-12 col-lg-12">
                      <textarea name="comment" class="form-control" placeholder="Comment..." required></textarea>
                    </div>
                    <div class="col-12 submit-form">
                      <button class="mx-auto btn" type="submit"><span>Submit Comment</span></button>
                    </div>
                  </div>
              </form>
            </div>
            <!-- Comments Form Ends -->
          </div>
        </article>
        <!-- Article Ends -->
      </div>
    </div>
  </div>
  <!-- Main Content Ends -->
@endsection
