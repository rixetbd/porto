@extends('frontend.master')

@section('content')

@php
    $temp_alert_short = "No data found";
    $temp_alert = "There is no information in the database. Please add some information";
@endphp

<!-- Main Content Starts -->
<section class="container-fluid main-container container-home p-0 hero-area-block utf-element-cover-bg element-cover-bg revealator-slideup revealator-once revealator-delay1" style="background-image:url('{{($dataBG != ''?asset('uploads/bg/'.$dataBG->image):asset('frontend/img/main_bg.png'))}}');">
  <!--<div class="color-block d-none d-lg-block"></div>-->
  <div class="row utf-home-details-container align-items-center">
    <div class="col-12 col-lg-7 offset-lg-5 utf-home-details text-center text-sm-center text-lg-left">
      <div>
	    <img src="{{asset('frontend/img/focus_pic3.png')}}" class="img-fluid main-img-mobile hero-d-none d-sm-block d-lg-none" alt="my picture" style="width: 200px;"/>
        <h6 class="mb-0 d-block d-lg-block">{{($user_info != ''? $user_info->heading:$temp_alert_short)}}</h6>
        <h1><span>{{($user_info != ''? $user_info->starting:'Hi, Sir')}}</span><span class="typed-words"></span></h1>
        <p>{!! ($user_info != ''? $user_info->description:$temp_alert) !!}</p>
        <a href="{{($user_info != ''? $user_info->btnOneUrl:$temp_alert_short)}}" class="btn btn-about">{{($user_info != ''? $user_info->btnOneText:$temp_alert_short)}} <i class="fa fa-ravelry"></i></a>
		<a href="{{($user_info != ''? $user_info->btnTowUrl:$temp_alert_short)}}" class="btn btn-contact">{{($user_info != ''? $user_info->btnTowText:$temp_alert_short)}} <i class="fa fa-ravelry"></i></a>
	  </div>
    </div>
  </div>
  <div class="utf-fixed-wrapper">
	  <!-- Languages list -->
	  <div class="utf-fixed-block block-right">
		<ul class="list-unstyled languages-list">

		  <li><a href="#"><span class="single-language">ENG</span></a></li>
		  {{-- <li><a href="#"><span class="single-language">RUS</span></a></li>
		  <li><a href="#"><span class="single-language">CEB</span></a></li> --}}
		</ul>
	  </div>
  </div>
</section>
<!-- Main Content Ends -->


@endsection

@section('footer_script')

        <?php
            if ($user_info != '' ) {
                $skills = explode(',', $user_info->skills);
            }else {
                $skills = explode(',', $temp_alert_short);
            }

        ?>

        <script>

        var typed = new Typed('.typed-words', {
        strings: [ <?php
                         foreach ($skills as $item){ echo '"'.$item.'"'.',';}
                    ?> ],
        // strings: ["Web Developer.","Web Designer."," UI/UX Designer."," Content Writer."],

        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 4000,
        startDelay: 1000,
        loop: true,
        showCursor: true
    });
</script>
@endsection
