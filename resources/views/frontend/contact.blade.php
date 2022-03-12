@extends('frontend.master')

@section('content')

<!-- Page Title Starts -->
<section class="title-section text-center text-sm-center revealator-slideup revealator-once revealator-delay1">
    <p class="utf-section-description">Connect Me</p>
    <h1>Get In <span>Touch</span></h1>
    <div class="animated-bar"></div>
    <p class="text-max-700">Hello Everyone! Have a great day :) I am here to help you. If you want to know something or you have any suggestion then please mail me. Thank You.</p>
  </section>
  <!-- Page Title Ends -->

  <!-- Main Content Starts -->
  <section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
      <div class="row">
        <!-- Left Side Starts -->
        <div class="col-12 col-lg-5">
          <h4 class="utf-content-title">My Address Info</h4>
          <p class="utf-custom-span-contact position-relative" style="margin-top: 2.5rem;"><i class="fa fa-map-marker position-absolute"></i> <span class="d-block">Location</span>{{($address_info != ''? $address_info->location:'Not Define')}}</p>
          <p class="utf-custom-span-contact position-relative"><i class="fa fa-phone position-absolute"></i> <span class="d-block">Phone Number</span><a href="tel:{{($address_info != ''? $address_info->phone:'Not Define')}}">{{($address_info != ''? $address_info->phone:'Not Define')}}</a></p>
          <p class="utf-custom-span-contact position-relative"><i class="fa fa-envelope position-absolute"></i> <span class="d-block">Email Address</span><a href="mailto:{{($address_info != ''? $address_info->email:'Not Define')}}">{{($address_info != ''? $address_info->email:'Not Define')}}</a></p>
          <p class="utf-custom-span-contact position-relative"><i class="fa fa-globe position-absolute"></i> <span class="d-block">Website</span><a href="{{($address_info != ''? $address_info->website:'Not Define')}}" target="_blank">{{($address_info != ''? $address_info->website:'Not Define')}}</a></p>

          @if ($social_info != '')
            <ul class="social list-unstyled pt-2 mb-3">
              <li class="facebook"><a title="Facebook" href="{{$social_info->facebook}}"><i class="fa fa-facebook"></i></a></li>
              <li class="linkedin"><a title="Linkedin" href="{{$social_info->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
              <li class="instagram"><a title="Instagram" href="{{$social_info->instagram}}"><i class="fa fa-instagram"></i></a></li>
              <li class="whatsapp"><a title="Whatsapp" href="{{$social_info->whatsapp}}"><i class="fa fa-whatsapp"></i></a></li>
            </ul>
        @endif

          {{-- <p class="mb-4 connect_with">I Am Available for Freelance Work. Connect with Me via <b><i class="fa fa-whatsapp"></i> Whatsapp :</b> <a href="https://wa.link/b0dyi1">+880 17380 0869</a> or <b>Email:</b> <a href="mailto:rixetbd@gmail.com">rixetbd@gmail.com</a></p> --}}
        </div>
        <!-- Left Side Ends -->
        <!-- Contact Form Starts -->
        <div class="col-12 col-lg-7">
          <form class="contactform utf-contact-form form mb-5" method="post" action="{{route('frontend.mail')}}">
            @csrf
              <h4 class="utf-content-title">Contact Us</h4>
              <!-- Success Message -->
              <div class="col-md-12 mt-3 p-0">
               <div class="alert alert-success utf-contact-msg" style="display:none;text-align:center;width:100%;" role="alert">
                  <div class="col-12 p-0">Your Message Was Sent Successfully.</div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-6 input-group">
                  <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-12 col-md-6 input-group">
                  <input name="email" type="email" id="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="col-12 col-md-6 input-group">
                  <input type="text" name="subject" id="subject" class="form-control" placeholder="Write a Subject" required>
                </div>
                <div class="col-12 col-md-6 input-group">
                  <input type="url" name="link" id="link" class="form-control" placeholder="Any Social Links" required>
                </div>
                <div class="col-12 col-md-12 input-group">
                  <textarea name="message" id="message" style="min-height: 195px;" class="form-control" placeholder="Your Message..." required></textarea>
                </div>
                <div class="col-12 col-md-12 input-group">
                  <button type="submit" class="mx-auto btn btn_submit">Submit <i class="fa fa-envelope"></i></button>
                </div>
              </div>
          </form>
        </div>
        <!-- Contact Form Ends -->
      </div>

    </div>
  </section>
  <!-- Contact Section Ends -->
@endsection

@section('footer_script')

@endsection

