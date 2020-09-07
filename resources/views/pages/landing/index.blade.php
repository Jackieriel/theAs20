@extends('layouts.app')

@section('title')
Home
@endsection


@section('content')
<x-header />

<section id="home" class="video-hero js-fullheight"
  style="height: 700px; background-image: url(images/copp.jpeg); background-size:cover; background-position: top center;"
  data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <!-- <a class="player"
    data-property="{videoURL:'https://www.youtube.com/watch?v=Mjjw19B7rMk',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default',optimizeDisplay:true}">
  </a> -->
  <div class="container">
    <div class="row js-fullheight justify-content-center d-flex align-items-center">
      <div class="col-md-12">
        <div class="text text-center">
          <div class="icon">
            <span class="flaticon-rose-outline-variant-with-vines-and-leaves"></span>
          </div>
          <span class="subheading">#theA's20</span>
          <h1>Emem &amp; Idorenyin</h1>
          <div id="timer" class="d-flex">
            <div class="time" id="days"></div>
            <div class="time pl-3" id="hours"></div>
            <div class="time pl-3" id="minutes"></div>
            <div class="time pl-3" id="seconds"></div>
          </div>
        </div>
      </div>
      <!-- <section id="groom-bride-section"></section> -->
    </div>
  </div>
</section>


<!-- Bride and the groom -->

<section class="ftco-section bg-section" id="groom-bride-section">
  <div class="overlay-top" style="background-image: url(images/hockup/images/top-bg.jpg);"></div>
  <div class="overlay-bottom" style="background-image: url(images/hockup/images/bottom-bg.jpg);"></div>
  <div class="container">
    <div class="row justify-content-center pb-5">
      <div class="col-md-12 text-center heading-section ftco-animate">
        <span class="clone">Bride &amp; Groom</span>
        <h2 class="mb-3">Bride &amp; Groom</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-6 text-center d-flex align-items-stretch">
            <div class="bride-groom ftco-animate">
              <div class="img" style="background-image: url(images/4.jpg);"></div>
              <div class="text mt-4 px-4">
                <h2>Idorenyin Amaunam</h2>
                <h4>About My wife</h4>
                <p>Best gift GOD has given me. A very unassuming, calm, intelligent, collected, humble and caring young
                  lady who believes in live and let’s live. </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 text-center d-flex align-items-stretch">
            <div class="bride-groom ftco-animate">
              <div class="img" style="background-image: url(images/emem1.jpg);"></div>
              <div class="text mt-4 px-4">
                <h2>Emem Udofia</h2>
                <h4>About my husband</h4>
                <p>He is an irreplaceable gift from God to me. He is my complete package, intelligent,God fearing,
                  smart, a complete gentleman, a very strong support system, the list is long. I feel blessed to have
                  him all to myself forever.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- End -->



<!-- Love Story -->
<section class="ftco-section" id="lovestory-section">
  <div class="container">
    <div class="row justify-content-center pb-5">
      <div class="col-md-12 text-center heading-section ftco-animate">
        <span class="clone">Love Story</span>
        <h2 class="mb-3">Love Story</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <ul class="timeline animate-box">
          <li class="animate-box">
            <div class="timeline-badge" style="background-image:url(images/am.png);"></div>
            <div class="timeline-panel ftco-animate text-md-right">
              <div class="overlay"></div>
              <div class="timeline-heading">
                <!-- <span class="date">2011</span> -->
                <h3 class="timeline-title">How We Met</h3>
              </div>
              <div class="timeline-body">
                <i> <span class="fa fa-male date"></span> Idorenyin</i>
                <p>I first met her through a friend at the University of Calabar, about 2012.</p>
                <hr>
                <i><span class="fa fa-female date"></span> Emem</i>
                <p>I met him through a very good friend of mine at the University of Calabar.</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted animate-box">
            <div class="timeline-badge" style="background-image:url(images/am.png);"></div>
            <div class="timeline-panel ftco-animate">
              <div class="overlay overlay-2"></div>
              <div class="timeline-heading">
                <!-- <span class="date">April, 2012</span> -->
                <h3 class="timeline-title">First Dinner</h3>
              </div>
              <div class="timeline-body">
                <i> <span class="fa fa-male date"></span> Idorenyin</i>
                <p>Can’t really remember…hahaha</p>
                <hr>
                <i><span class="fa fa-female date"></span> Emem</i>
                <p>I honestly can’t remember the date.</p>
              </div>
            </div>
          </li>
          <li class="animate-box">
            <div class="timeline-badge" style="background-image:url(images/am.png);"></div>
            <div class="timeline-panel ftco-animate text-md-right">
              <div class="overlay"></div>
              <div class="timeline-heading">
                <!-- <span class="date">2012</span> -->
                <h3 class="timeline-title">Our Holidays</h3>
              </div>
              <div class="timeline-body">
                <i> <span class="fa fa-male date"></span> Idorenyin</i>
                <p>Our holidays are mostly private affair. We spend long hours together and few external</p>
                <hr>
                <i><span class="fa fa-female date"></span> Emem</i>
                <p>Our holidays are quiet memorable and special but very private.</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted animate-box">
            <div class="timeline-badge" style="background-image:url(images/am.png);"></div>
            <div class="timeline-panel ftco-animate">
              <div class="overlay overlay-2"></div>
              <div class="timeline-heading">
                <!-- <span class="date">February 8, 2020</span> -->
                <h3 class="timeline-title">First Date</h3>
              </div>
              <div class="timeline-body">
                <i> <span class="fa fa-male date"></span> Idorenyin</i>
                <p>This was about April 2012. Still at Calabar.</p>
                <hr>
                <i><span class="fa fa-female date"></span> Emem</i>
                <p>First date was in calabar, it was a brief meeting.</p>
              </div>
            </div>
          </li>
          <li class="animate-box">
            <div class="timeline-badge" style="background-image:url(images/am.png);"></div>
            <div class="timeline-panel ftco-animate">
              <div class="overlay overlay-2"></div>
              <div class="timeline-heading">
                <!-- <span class="date">February 8, 2020</span> -->
                <h3 class="timeline-title">In Relationship</h3>
              </div>
              <div class="timeline-body">
                <i><span class="fa fa-female date"></span> <span class="fa fa-male date"></span> Emem/Idorenyin</i>
                <p>We’ve been in relationship since 2012.</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted animate-box">
            <div class="timeline-badge" style="background-image:url(images/am.png);"></div>
            <div class="timeline-panel ftco-animate">
              <div class="overlay overlay-2"></div>
              <div class="timeline-heading">
                <!-- <span class="date">February 8, 2020</span> -->
                <h3 class="timeline-title">Got Engaged</h3>
              </div>
              <div class="timeline-body">
                <i><span class="fa fa-female date"></span> <span class="fa fa-male date"></span> Emem/Idorenyin</i>
                <p>We got engaged on February 8th, 2020.</p>
              </div>
            </div>
          </li>
          <li class="animate-box">
            <div class="timeline-badge" style="background-image:url(images/am.png);"></div>
            <div class="timeline-panel ftco-animate">
              <div class="overlay overlay-2"></div>
              <div class="timeline-heading">
                <!-- <span class="date">February 8, 2020</span> -->
                <h3 class="timeline-title">The big question feeling</h3>
              </div>
              <div class="timeline-body">
                <i> <span class="fa fa-male date"></span> Idorenyin</i>
                <p>How I felt when I popped the question?
                  certainly, I can’t described how I felt. You know it was a surprise stuff; so mixture of anxiety and
                  thankfulness. But when she accepted, was sky glad. </p>
                <hr>
                <i><span class="fa fa-female date"></span> Emem</i>
                <p>When he popped the question, I was speechless for long period of mins, I can’t describe in words how
                  i felt. I said YES and that
                  was the best YES ever.</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted animate-box">
            <div class="timeline-badge" style="background-image:url(images/am.png);"></div>
            <div class="timeline-panel ftco-animate">
              <div class="overlay overlay-2"></div>
              <div class="timeline-heading">
                <!-- <span class="date">April, 2012</span> -->
                <h3 class="timeline-title">Best Meal</h3>
              </div>
              <div class="timeline-body">
                <i> <span class="fa fa-male date"></span> Idorenyin</i>
                <p>Her best meal is rice and rice</p>
                <hr>
                <i><span class="fa fa-female date"></span> Emem</i>
                <p>His best meal is pounded yam and white soup prepared with goat meat</p>
              </div>
            </div>
          </li>
          <li class="animate-box">
            <div class="timeline-badge" style="background-image:url(images/am.png);"></div>
            <div class="timeline-panel ftco-animate">
              <div class="overlay overlay-2"></div>
              <div class="timeline-heading">
                <!-- <span class="date">April, 2012</span> -->
                <h3 class="timeline-title">Best Color</h3>
              </div>
              <div class="timeline-body">
                <i> <span class="fa fa-male date"></span> Idorenyin</i>
                <p>Hahaha, such a simplicity. Pink!</p>
                <hr>
                <i><span class="fa fa-female date"></span> Emem</i>
                <p>His best color is blue</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted animate-box">
            <div class="timeline-badge" style="background-image:url(images/am.png);"></div>
            <div class="timeline-panel ftco-animate">
              <div class="overlay overlay-2"></div>
              <div class="timeline-heading">
                <!-- <span class="date">April, 2012</span> -->
                <h3 class="timeline-title">Best Moment</h3>
              </div>
              <div class="timeline-body">
                <i> <span class="fa fa-male date"></span> Idorenyin</i>
                <p>My best moment with her is anytime we spend together.</p>
                <hr>
                <i><span class="fa fa-female date"></span> Emem</i>
                <p>My best moment with him is every moment we spend together</p>
              </div>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </div>
</section>

<!-- end Love Story -->

<!-- place and time -->
<section class="ftco-section bg-light" id="when-where-section">
  <div class="container">
    <div class="row justify-content-center pb-5">
      <div class="col-md-12 text-center heading-section ftco-animate">
        <span class="clone">Place</span>
        <h2 class="mb-3">Place &amp; Time</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 ftco-animate">
        <div class="place img" style="background-image: url(images/hockup/images/place-1.jpg);">
          <div class="text text-center">
            <span class="icon flaticon-reception-bell"></span>
            <h3>Traditional Marriage</h3>
            <p><span>Thursday, 26 November 2020</span><br><span>02:00 pm</span></p>
            <p><span>@</span></p>
            <p><span>Mr Emmanuel Udofia's Compound, Ikot Ubo, Nsit Ubium LGA</span></p>
            <!-- <p><span>Ikot Ubo, Nsit Ubium LGA</span></p> -->
            <p><a href="{{url('/direction')}}" class="btn-custom">See Map</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="place img" style="background-image: url(images/hockup/images/place-2.jpg);">
          <div class="text text-center">
            <span class="icon flaticon-wedding-kiss"></span>
            <h3>Church Wedding</h3>
            <p><span>Saturday, 28 November, 2020</span><br><span>10:00 pm</span></p>
            <p>@</p>
            <p><span>The Redeemed Christian Church Of God, Akwa Ibom Province. 11 Provincial Headquarters, Eket</span>
            </p>
            <!-- <p>11 Provincial Headquarters, Eket</p> -->
            <p><a href="{{url('/direction')}}" class="btn-custom">See Map</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="place img" style="background-image: url(images/hockup/images/place-3.jpg);">
          <div class="text text-center">
            <span class="icon flaticon-cake"></span>
            <h3>Reception</h3>
            <p><span>Villa Marina Hotel</span></p>
            <p><span>Banquest Hall, Eket</span></p>
            <!-- <p><a href="#">+0 (123) 456 78 910</a></p>
            <p><a href="#" class="btn-custom">See Map</a></p> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- place and time end-->

<!-- people -->
<section class="ftco-section" id="people-section">
  <div class="container-fluid px-md-5">
    <div class="row justify-content-center pb-5">
      <div class="col-md-12 text-center heading-section ftco-animate">
        <span class="clone">People</span>
        <h2 class="mb-3">Family &amp; Friends</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="carousel-friends owl-carousel ftco-owl ftco-animate">
          <div class="item">
            <div class="people text-center">
              <div class="img" style="background-image: url(images/edima.jpeg);"></div>
              <div class="text">
                <h3>Edima Willie</h3>
                <span>Bridesmaid</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="people text-center">
              <div class="img" style="background-image: url(images/am.png);"></div>
              <div class="text">
                <h3>Lorem Lorem</h3>
                <span>Bridesmaid</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="people text-center">
              <div class="img" style="background-image: url(images/emaido.jpg);"></div>
              <div class="text">
                <h3>Emaido Emmanuel</h3>
                <span>Bridesmaid</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="people text-center">
              <div class="img" style="background-image: url(images/idorenyin.jpg);"></div>
              <div class="text">
                <h3>Idorenyin Umoh</h3>
                <span>Best Man</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="people text-center">
              <div class="img" style="background-image: url(images/imo.jpg);"></div>
              <div class="text">
                <h3>Imo Udobong</h3>
                <span>Grooms Men</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="people text-center">
              <div class="img" style="background-image: url(images/mfon3.jpg);"></div>
              <div class="text">
                <h3>Mfon Umoren</h3>
                <span>Brooms Men</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="people text-center">
              <div class="img" style="background-image: url(images/bolaji2.jpg);"></div>
              <div class="text">
                <h3>Bolaji Opadiran</h3>
                <span>Brooms Men</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="people text-center">
              <div class="img" style="background-image: url(images/edidiong.jpg);"></div>
              <div class="text">
                <h3>Edidiong Ekwere</h3>
                <span>Brooms Men</span>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="people text-center">
              <div class="img" style="background-image: url(images/celina2.jpg);"></div>
              <div class="text">
                <h3>Celina Ideh</h3>
                <span>Chief Bridesmaid</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="people text-center">
              <div class="img" style="background-image: url(images/titilayo2.jpg);"></div>
              <div class="text">
                <h3>Titilayo Adewunmi</h3>
                <span>Bridesmaid</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- people End -->

<!-- gallary -->
<section class="ftco-section" id="gallery-section">
  <div class="container-fluid px-md-4">
    <div class="row justify-content-center pb-5">
      <div class="col-md-12 text-center heading-section ftco-animate">
        <span class="clone">Photos</span>
        <h2 class="mb-3">Gallery</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 ftco-animate">
        <a href="{{ asset('images/emem2.jpg')}}"
          class="gallery img image-popup d-flex align-items-center justify-content-center"
          style="background-image: url(images/emem2.jpg);">
          <div class="icon d-flex align-items-center justify-content-center"><span class="ion-ios-image"></span></div>
        </a>
      </div>
      <div class="col-md-3 ftco-animate">
        <a href="{{ asset('images/2.jpg')}}"
          class="gallery img image-popup d-flex align-items-center justify-content-center"
          style="background-image: url(images/2.jpg);">
          <div class="icon d-flex align-items-center justify-content-center"><span class="ion-ios-image"></span></div>
        </a>
      </div>
      <div class="col-md-3 ftco-animate">
        <a href="{{ asset('images/am.png')}}"
          class="gallery img image-popup d-flex align-items-center justify-content-center"
          style="background-image: url(images/am.png);">
          <div class="icon d-flex align-items-center justify-content-center"><span class="ion-ios-image"></span></div>
        </a>
      </div>
      <div class="col-md-3 ftco-animate">
        <a href="{{ asset('images/1.jpg')}}"
          class="gallery img image-popup d-flex align-items-center justify-content-center"
          style="background-image: url(images/1.jpg);">
          <div class="icon d-flex align-items-center justify-content-center"><span class="ion-ios-image"></span></div>
        </a>
      </div>
    </div>
    <p class="text-center view-more"><a href="{{url('/pix')}}" type="button" class="btn btn-primary">View more..</a></p>
  </div>
</section>

<!-- gallary  end-->

<!-- footer -->
<x-footer />

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
  </svg></div>

<!-- footer -->




@endsection