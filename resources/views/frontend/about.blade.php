@extends('frontend.master')

@section('content')

<!-- Page Title Starts -->
<section class="title-section text-center text-sm-center revealator-slideup revealator-once revealator-delay1">
  <p class="utf-section-description">About Main Info</p>
  <h1>About <span>Me</span></h1>
  <div class="animated-bar"></div>
  {{-- <p class="text-max-700">Lorem ipsum dolor sit amet, consect adipisic elit, sed do eiusmod tempor incididunt ut labore et d magna aliqua enim sed do sit.</p> --}}
</section>
<!-- Page Title Ends -->

<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
  <div class="container">
    <div class="row">
      <!-- Personal Info Starts -->
      <div class="col-12 col-lg-12 col-xl-12">
        <div class="row">
          <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 utf-about-user-img"> <img src="{{asset('uploads/about')}}/{{($basic_info != ''? $basic_info->picture:'no-image')}}" class="img-fluid main-img-mobile" alt="{{($basic_info != ''? $basic_info->picture:'No Image')}}" /> </div>
		  <div class="row col-xl-7 col-lg-7 col-md-12 utf-about-dtl">
			  <div class="col-12 mb-3">
				<h2 class="mb-0">Hello, I'm {{($basic_info != ''? $basic_info->name:'Not Added')}}</h2>
                <h6>{{($basic_info != ''? $basic_info->designation:'Not Added')}}</h6>
				<p>- It's My Pleasure to Introduce About Myself.</p>
				{!! ($basic_info != ''? $basic_info->description:'Not Added') !!}
			  </div>
			  <div class="col-6">
				<ul class="utf-about-list list-unstyled">
				  <li><span class="title">Name :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{($basic_info != ''? $basic_info->name:'Not Added')}}</span></li>
				  <li><span class="title">Date of Birth :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{($basic_info != ''? $basic_info->date:'Not Added')}}</span></li>
				  <li><span class="title">Work Status :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{($basic_info != ''? $basic_info->designation:'Not Added')}}</span></li>
				</ul>
			  </div>
			  <div class="col-6">
				<ul class="utf-about-list list-unstyled">
				  <li><span class="title">Email :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{($basic_info != ''? $basic_info->email:'Not Added')}}</span></li>
				  <li><span class="title">Phone :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{($basic_info != ''? $basic_info->phone:'Not Added')}}</span></li>
                  <li><span class="title">Nationality :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{($basic_info != ''? $basic_info->nationality:'Not Added')}}</span></li>
				</ul>
			  </div>
			  <div class="col-12 mt-3">
				<a href="{{route('admin.downloadCVPdfFile')}}" class="btn btn-download">Download My CV <i class="fa fa-download"></i></a>

				<a href="{{route('frontend.contact')}}" class="btn btn-hire">Hire Me! <i class="fa fa-file"></i></a>
			  </div>
		  </div>
        </div>
      </div>
      <!-- Personal Info Ends -->
      <!-- Boxes Starts -->
      <div class="col-12 col-lg-12 col-xl-12 pt-5 mt-lg-0 pb-5">
        <div class="row">
          <div class="col-6 col-lg-2 col-sm-4 col-xs-12">
            <div class="utf-box-stats with-margin">
			  <i class="fa fa-user"></i>
              <p class="m-0 position-relative">{{($counter != ''?$counter->projects:'14+ Projects')}}</p>
            </div>
          </div>
          <div class="col-6 col-lg-2 col-sm-4 col-xs-12">
            <div class="utf-box-stats with-margin">
			  <i class="fa fa-coffee"></i>
              <p class="m-0 position-relative">{{($counter != ''?$counter->coffee:'140+ Coffee')}}</p>
            </div>
          </div>
          <div class="col-6 col-lg-2 col-sm-4 col-xs-12">
            <div class="utf-box-stats with-margin">
			  <i class="fa fa-smile-o"></i>
              <p class="m-0 position-relative">{{($counter != ''?$counter->clients:'9+ Clients')}}</p>
            </div>
          </div>
          <div class="col-6 col-lg-2 col-sm-4 col-xs-12">
            <div class="utf-box-stats with-margin">
			  <i class="fa fa-certificate"></i>
              <p class="m-0 position-relative">{{($counter != ''?$counter->exprience:'14+ Exprience')}}</p>
            </div>
          </div>
		  <div class="col-6 col-lg-2 col-sm-4 col-xs-12">
            <div class="utf-box-stats with-margin">
			  <i class="fa fa-trophy"></i>
              <p class="m-0 position-relative">{{($counter != ''?$counter->awards:'4+ Awards')}}</p>
            </div>
          </div>
          <div class="col-6 col-lg-2 col-sm-4 col-xs-12">
            <div class="utf-box-stats with-margin">
			  <i class="fa fa-code"></i>
              <p class="m-0 position-relative">{{($counter != ''?$counter->codes:'2500+ Codes')}}</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Boxes Ends -->
    </div>


    <!-- Skills Starts -->
    <div class="row pb-5">
        <div class="col-12">
            <h3 class="pb-5 pb-sm-5 mb-3 mb-sm-0 text-center text-sm-center custom-title ft-wt-600">My Skills</h3>
        </div>
      @forelse ($skills as $skill)
        <div class="col-12 col-lg-4 col-sm-6 col-xs-12 mb-3 mb-sm-4">
            <div class="utf-skills-box">
                <div class="c100 p{{$skill->performance}}"> <span>{{$skill->performance}}%</span>
                <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                </div>
                </div>
                <h6 class="text-center mt-2 mt-sm-4 mb-0">{{$skill->subject}}</h6>
                <p>{{$skill->description}}</p>
            </div>
        </div>
      @empty
      <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
        <h5 class="alert alert-warning">Add some skills first.</h5>
        </div>
      @endforelse

    </div>
    <!-- Skills Ends -->

    <!-- Experience & Education Starts -->
    <div class="row">
      <div class="col-lg-6 m-15px-tb">
	    <h3 class="col-title">My Education</h3>
        <div class="utf-resume-box">
          <ul>
            @forelse ($education as $edu)
            <li>
              <div class="icon"></div>
              <span class="time">{{$edu->start_year}} - {{$edu->end_year}}</span>
              <h5>{{$edu->degree}} <span class="place">{{$edu->institute}}</span></h5>
              <p>{{$edu->description}}</p>
            </li>
            @empty
            <li>
                <h6 class="alert alert-warning">Add Your Educational Info</h6>
            </li>
            @endforelse

          </ul>
        </div>
      </div>
      <div class="col-lg-6 m-15px-tb">
	    <h3 class="col-title">My Experience</h3>
        <div class="utf-resume-box">
          <ul>
            @forelse($experience as $item)
            <li>
              <div class="icon"></div>
              <span class="time">{{$item->start_year}} - {{$item->end_year}}</span>
              <h5>{{$item->position}} <span class="place">{{$item->organization}}</span></h5>
              <p>{{$item->description}}</p>
            </li>
            @empty
            <li>
                <h6 class="alert alert-warning">Add Your Educational Info</h6>
            </li>
            @endforelse
          </ul>
        </div>
      </div>
    </div>
    <!-- Experience & Education Ends -->

    <!-- Provide Services Starts -->
    <div class="row pb-3 pt-5 utf-services-section">
      <div class="col-12">
        <h3 class="pb-5 pb-sm-5 mb-3 mb-sm-0 text-center text-sm-center custom-title ft-wt-600">What Can I Do</h3>
      </div>
	  @forelse ($service as $item)
	  <div class="col-12 col-md-6 col-lg-4">
		<div class="utf-single-service rc-mb-0"><i class="service-icon fa fa-bolt"></i>
		  <h6 class="utf-service-title">{{$item->title}}</h6>
		  <p class="utf-service-description">{{Str::limit($item->description, 150)}}</p>
		</div>
	  </div>
      @empty
      <div class="col-12">
        <h6 class="alert alert-warning">Add Your Services Info</h6>
      </div>
      @endforelse


    </div>
    <!-- Provide Services Ends -->

	<!-- Testimonials section Starts-->
    <div class="pb-3 pt-5 utf-testimonials-section utf-single-section">
      <div class="col-12">
        <h3 class="pb-5 pb-sm-5 mb-3 mb-sm-0 text-center text-sm-center custom-title ft-wt-600">Customer Testimonials</h3>
      </div>
	  <div class="utf-testimonial-slider">
		@forelse ($testimonials as $testimonial)
        <div class="utf-slider-item">
		  <!-- Single review-->
		  <div class="utf-single-review utf-swiper-slide">
			<div class="utf-review-header d-flex justify-content-between">
			  <div class="utf-review-client">
				<div class="media"><img class="img-fluid rounded-circle client-avatar" src="{{($testimonial->picture != ''?asset('uploads/clients/'.$testimonial->picture):asset('admin_assets/images/users/testimonials.png'))}}" alt="Client">
				  <div class="utf-client-details">
					<h6 class="utf-client-name">{{$testimonial->name}}</h6>
					<span class="utf-client-role">Web Designer</span> </div>
				</div>
			  </div>
			  <i class="icon ion-md-quote review-icon"></i> </div>
			<p class="utf-client-review-content">{{$testimonial->description}}</p>
		  </div>
		</div>
        @empty
        <div class="utf-single-review utf-swiper-slid">
            <h5 class="alert alert-warning">Testimonial Not Founded!</h5>
        </div>
        @endforelse

	  </div>
    </div>
    <!-- Testimonials section Ends -->

	<!-- Choose Your Plan Starts -->
    <!-- Only visible in laravel -->
    {{-- <div class="row pb-3 pt-5 utf-pricing-section utf-single-section">
      <div class="col-12">
        <h3 class="pb-5 pb-sm-5 mb-3 mb-sm-0 text-center text-sm-center custom-title ft-wt-600">Pricing Plan</h3>
      </div>
	   <!-- Single plan-->
	   <div class="col-lg-4 col-sm-6 col-xs-12">
		  <div class="utf-single-plan mb-4 mb-sm-5 rc-mb-0"><i class="plan-icon fa fa-flash"></i>
			<h3 class="utf-plan-type">Basic Plan</h3>
			<h2 class="utf-plan-price">$199/Month</h2>
			<p>Basic User Membership</p>
			<ul class="list-unstyled plan-list">
			  <li>1 GB Disk Space</li>
			  <li>2 Domain Names</li>
			  <li>1 Email Address</li>
			  <li>Enhanced Security</li>
			  <li>Customer Service</li>
			  <li>24/7 Support</li>
			</ul>
			<a class="btn button-main button-scheme utf-plan-btn" href="#" role="button">Purchase Now <i class="icon fa fa-shopping-cart"></i></a>
		  </div>
		</div>
		<!-- Single plan-->
		<div class="col-lg-4 col-sm-6 col-xs-12">
		  <div class="utf-single-plan mb-4 mb-sm-5 rc-mb-0"><i class="plan-icon fa fa-life-bouy"></i>
			<h3 class="utf-plan-type">Premium Plan</h3>
			<h2 class="utf-plan-price">$299/Month</h2>
			<p>Premium User Membership</p>
			<ul class="list-unstyled plan-list">
			  <li>50 GB Disk Space</li>
			  <li>5 Domain Names</li>
			  <li>10 Email Address</li>
			  <li>Enhanced Security</li>
			  <li>Customer Service</li>
			  <li>24/7 Support</li>
			</ul>
			<a class="btn button-main button-scheme utf-plan-btn" href="#" role="button">Purchase Now <i class="icon fa fa-shopping-cart"></i></a>
		  </div>
		</div>
		<!-- Single plan-->
		<div class="col-lg-4 col-sm-6 col-xs-12">
		  <div class="utf-single-plan mb-4 mb-sm-5 rc-mb-0"><i class="plan-icon fa fa-trophy"></i>
			<h3 class="utf-plan-type">Platinum Plan</h3>
			<h2 class="utf-plan-price">$399/Month</h2>
			<p>Platinum User Membership</p>
			<ul class="list-unstyled plan-list">
			  <li>120 GB Disk Space</li>
			  <li>30 Domain Names</li>
			  <li>20 Email Address</li>
			  <li>Enhanced Security</li>
			  <li>Customer Service</li>
			  <li>24/7 Support</li>
			</ul>
			<a class="btn button-main button-scheme utf-plan-btn" href="#" role="button">Purchase Now <i class="icon fa fa-shopping-cart"></i></a>
		  </div>
		</div>
    </div> --}}
    <!-- Choose Your Plan Ends -->
  </div>
</section>
<!-- Main Content Ends -->

@endsection


@section('footer_script')

<script>
    tns({
        container: ".utf-testimonials-section .utf-testimonial-slider",
        items: 2,
        gutter: 30,
        responsive: {
            0: {
                items: 1,
                gutter: 0
		},
		768: {
            items: 2,
			gutter: 30
		}
	},
	preventScrollOnTouch: "auto",
	slideBy: "page",
	mouseDrag: !0,
	swipeAngle: !1,
	speed: 400,
	controls: !1,
	autoHeight: !0,
	navPosition: "bottom"
});
</script>

@endsection
