@extends('layouts.web-en')
@section('content')

  <!-- ======= What We Do Section ======= -->
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
<section id="what-we-do" class="what-we-do">
      <div class="container">

        <div class="section-title">
          <h2>Jaibhim Foundation</h2>
          <p style="text-align:justify;">Jaibhim Foundation is a charitable organisation operating under the leadership of Ezhuchi Thamizhar Dr.Thol Thirumavalavan. Mr. Gauthama Sanna in his role as the Secretary of the organisation, acts as its administrative in-charge. Jaibhim foundation is a part of a larger effort to revitalise the Ambedkarite awakening that first came about in 90s. The Ambedkar foundation has been established with an aim to place firmly in every village/region/camp, Ambedkarism as a counter offensive against Sanatan forces. The Jai Bhim 2.0 project and Jaibhim Publications have been set-up as first steps in this action plan. 
          </p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <h4><a href="#">Jaibhim 2.0 Project</a></h4>
              <p style="text-align:justify;">-Jaibhim 2.0 project aims to take Ambedkarite Thoughts to people in every village and town in Tamil Nadu. </p>
              <p><a href="{{ url('en/jaibhim-20-purpose') }}">Read more</a></p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <h4><a href="">To join as Ambassador of Equality</a></h4>
              <p style="text-align:justify;">There are more than two lakh government employees, officers, doctors, lawyers, teachers who have benefited from the reservation that revolutionary Ambedkar worked hard for...</p>
              <p><a href="{{ url('en/joining-form') }}">Read more</a></p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <h4><a href="">Ambedkariyam 50</a></h4>
              <p style="text-align:justify;">A huge collection of about 21,000 pages in 50 volumes based on the thought process and philosophy of revolutionary Ambedkar, the pinnacle of vast knowledge.</p>
              <p><a href="{{ url('en/ambedkariyam-volume-details') }}">Read more</a></p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <h4><a href="">Your Libraries also connected</a></h4>
              <p style="text-align:justify;">Ambedkar/Periyar/Ayothitasar/Thiruma Podagakas which are already working in your area can join this scheme and create great integration at Tamil Nadu level. Through it Ambedkar's dream can be realized. Students who want to fulfill Ambedkar's dream fill the application form here and send it....</p>
              <p><a href="{{ url('en/joining-form') }}">Join the Project</a></p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <h4><a href="">Interested in hosting a Jai ​​Bhim 2.0 event in your area?</a></h4>
              <p style="text-align:justify;">If more than 300 people join the Jai Bheem 2.0 program, Eruchithamizhar will preside over the event and present Ambedkarian ambassador certificates...</p>
              <p><a href="{{ url('en/ambedkariyam-library-open-procedures') }}">Yes. Like to join!</a></p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
            <h4><a href="">Join JayBeam 2.0 program to verify their name & area</a></h4>
            <p style="text-align:justify;">Verify your details who joined Jaibhim 2.0 project. Click here to verify your name / area / Ambedkar Library details..</p>
              <p><a href="{{ url('en/ambedkariyam-ambassadors') }}">To verify</a></p>
            </div>
          </div>
        </div>

       

      </div>
    </section><!-- End What We Do Section -->
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <!-- <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga</p>
        </div> -->

        <div class="row mt-2 justify-content-center">

          <div class="col-lg-10">

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
                  <p>+91 8072384874</p>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

@endsection