@extends('layouts.web-en')
@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style="padding-top:70px;">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/assets/img/banner.jpg" class="d-block w-100" alt="banner1">
      </div>
      <div class="carousel-item">
        <img src="/assets/img/banner.jpg" class="d-block w-100" alt="banner2">
      </div>
      <div class="carousel-item">
        <img src="/assets/img/banner.jpg" class="d-block w-100" alt="banner3">
      </div>
    </div>
</div>
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>ஜெய் பீம் 2.0 நிகழ்ச்சி நடத்த விருப்பம் உள்ளவர்கள் </h2>
          <!-- <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga</p> -->
        </div>

        <div class="row mt-1 justify-content-center">
        @if (session('status'))
        <div class="alert alert-success">
        {{ session('status') }}
        </div>
        @endif
        <!-- <div class="col-lg-10">

            <div class="info-wrap">
            <div class="row">
                <div class="col-lg-4 info">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Chennai, Tamilnadu, India</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>jaibhim2info@gmail.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 8144798956, +91 9884326339<br>+91 8667755132, +91 9380601000</p>
                </div>
            </div>
            </div>

            </div>

        </div> -->

        <div class="row mt-1 justify-content-center">
          <div class="col-lg-10">
            <form action="{{ route('send.email')}}" method="POST">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <input type="submit" name="Submit" class="">
              <!-- <div class="text-center"><button type="submit">Send Message</button></div> -->
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
@endsection