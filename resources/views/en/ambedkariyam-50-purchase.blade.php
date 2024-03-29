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
<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
      <h3>இந்தியாவிற்குள் (India)</h3>
        <p>
        அம்பேத்கரியம் 50 தொகுதிகள் மொத்த விலை ரூ.20,000-ம் இருந்தாலும் அவற்றை அச்சு விலையில் மட்டும் வழங்க வேண்டும் என்பதற்காக இரண்டு முன்வெளியீட்டு சலுகைகள் அறிவிக்கப்படுகின்றன.
        </p>
        <ul>
          <li><i class="bx bx-check-double"></i> மொத்தமாக முன்பணம் செலுத்துபவர்கள் ரூ.12,000-ம் மட்டும் செலுத்தினால் போதும்.</li>
          <li><i class="bx bx-check-double"></i> தவணை முறையில் வாங்க விரும்புவோர் ரூ.4,000-ம் என 3 தவணை களாக செலுத்தலாம்.</li>
        </ul>
        <div class="row icon-boxes">
          <div class="col-md-6">
            <i class="bx bx-receipt"></i>
            <h4>Jaibhim Foundation</h4>
            <p>IFSC Code - IDIB000N061</p>
            <p>Indian Bank</p>
            <p>Current A/c No - 7193465410</p>
            <p>www.jaibhimfoudation.net </p>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <i class="bx bx-cube-alt"></i>
            <h4>பரிவர்த்தனை தொடர்புக்கு</h4>
            <p>8072384874<br>
          </div>
        </div>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0">
        <h3>Outside of India</h3>
        <p>
        Total cost of Ambedkarisam in 50 volumes around 140 (after deduction) Euros.(Actual cost is 240 Euros)
        </p>
        <div class="row icon-boxes">
          <div class="col-md-6">
            <i class="bx bx-receipt"></i>
            <h4>Jaibhim Foundation</h4>
            <p>SWIFT Code - IDIBINBBPRK</p>
            <p>Indian Bank - Uthamar Gandhi Salai Branch</p>
            <p>Current A/c No - 7193465410</p>
            <p>Reason for deposit: purchase Ambedkarism volumes 50 Price 150 Euro and dollar</p>
            <p>www.jaibhimfoudation.net </p>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <i class="bx bx-cube-alt"></i>
            <h4>பரிவர்த்தனை தொடர்புக்கு</h4>
            <p>8072384874<br>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End About Section -->

@endsection