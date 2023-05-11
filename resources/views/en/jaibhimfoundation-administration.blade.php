@extends('layouts.web-en')
@section('styles')

@endsection
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
<!-- ======= Team Section ======= -->
<section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Chief Administration</h2>
          <!-- <p>Sit sint consectetur velit quos quisquam cupiditate nemo qui</p> -->
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="/assets/img/team/thirumavalavan.jpg" alt="">
              <h4>Chairman</h4>
              <h3>Dr. Thol.Thirumavalavan MP</h3>
              <p style="font-style: normal;">
              Member of Parliament, <br>President, Viduthalai Chiruthaigal Katchi, India, <br>Vice President - Federation of Dalit Members of Parliament
              </p>
              <div class="social">
                <a href="https://twitter.com/thirumaofficial" target="_blank"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/thirumaofficial" target="_blank"><i class="bi bi-facebook"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="/assets/img/team/gowthamasanna.jpg" alt="">
              <h4>Coordinator and Secretary</h4>
              <h3>Gowthama Sanna</h3>
              <p style="font-style: normal;">
              Deputy Secretary General, Viduthalai Chiruthaigal Katchi, India, <br>Founder and Chief Coordinator - Tamil Nadu Buddhists Association
              </p>
              <div class="social">
                <a href="https://twitter.com/gowthama_sanna" target="_blank"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/g.sannah" target="_blank"><i class="bi bi-facebook"></i></a>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" alt="">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Team Section -->

@endsection