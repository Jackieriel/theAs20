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
              <div class="img" style="background-image: url(images/hockup/images/groom.jpg);"></div>
              <div class="text mt-4 px-4">
                <h2>Idorenyin Amaunam</h2>
                <h4>About My Lady</h4>
                <p>A very firm young man, made calm by a very reasonable and collected young lady. I am also very vocal,
                  aspiring/inspiring, knowledge seeking, teachable and humble. who believes that the sun, moon and stars
                  will know his name.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 text-center d-flex align-items-stretch">
            <div class="bride-groom ftco-animate">
              <div class="img" style="background-image: url(images/hockup/images/bride.jpg);"></div>
              <div class="text mt-4 px-4">
                <h2>Emem Udofia</h2>
                <h4>About my Man</h4>
                <p>Best gift GOD has given me. A very unassuming, calm, intelligent, collected, humble and caring young
                  lady who believes in live and lets live. </p>
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
                <span class="date">2011</span>
                <h3 class="timeline-title">First We Meet</h3>
              </div>
              <div class="timeline-body">
                <p>We first met at the University of Calabar, about 2011. At the time, I was leaving the University when
                  she
                  was getting to the second year.</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted animate-box">
            <div class="timeline-badge" style="background-image:url(images/am.png);"></div>
            <div class="timeline-panel ftco-animate">
              <div class="overlay overlay-2"></div>
              <div class="timeline-heading">
                <span class="date">April, 2012</span>
                <h3 class="timeline-title">First Date</h3>
              </div>
              <div class="timeline-body">
                <p>This was about April 2012. I had to come from my place of primary assignment (Ondo State) as a youth
                  corps member, to see her at Calabar.</p>
              </div>
            </div>
          </li>
          <li class="animate-box">
            <div class="timeline-badge" style="background-image:url(images/am.png);"></div>
            <div class="timeline-panel ftco-animate text-md-right">
              <div class="overlay"></div>
              <div class="timeline-heading">
                <span class="date">2012</span>
                <h3 class="timeline-title">In A Relationship</h3>
              </div>
              <div class="timeline-body">
                <p>We’ve been in relationship since 2012. Though because of my idiocy, we paused briefly for a year and
                  few months between 2017/2018</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted animate-box">
            <div class="timeline-badge" style="background-image:url(images/am.png);"></div>
            <div class="timeline-panel ftco-animate">
              <div class="overlay overlay-2"></div>
              <div class="timeline-heading">
                <span class="date">February 8, 2020</span>
                <h3 class="timeline-title">We're Engaged</h3>
              </div>
              <div class="timeline-body">
                <p>We got engaged on February 8th, 2020.</p>
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
              <div class="img" style="background-image: url(images/hockup/images/groom-men-1.jpg);"></div>
              <div class="text">
                <h3>Mark Tomy</h3>
                <span>Groomsmen</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="people text-center">
              <div class="img" style="background-image: url(images/hockup/images/groom-men-2.jpg);"></div>
              <div class="text">
                <h3>John Henceworth</h3>
                <span>Groomsmen</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="people text-center">
              <div class="img" style="background-image: url(images/hockup/images/groom-men-3.jpg);"></div>
              <div class="text">
                <h3>Rey Cooper</h3>
                <span>Groomsmen</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="people text-center">
              <div class="img" style="background-image: url(images/hockup/images/groom-men-4.jpg);"></div>
              <div class="text">
                <h3>Robert Chan</h3>
                <span>Groomsmen</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="people text-center">
              <div class="img" style="background-image: url(images/hockup/images/bridesmaid-1.jpg);"></div>
              <div class="text">
                <h3>Rose Jones</h3>
                <span>Bridesmaid</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="people text-center">
              <div class="img" style="background-image: url(images/hockup/images/bridesmaid-2.jpg);"></div>
              <div class="text">
                <h3>Mary Dell</h3>
                <span>Bridesmaid</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="people text-center">
              <div class="img" style="background-image: url(images/hockup/images/bridesmaid-3.jpg);"></div>
              <div class="text">
                <h3>Alicia Brean</h3>
                <span>Bridesmaid</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="people text-center">
              <div class="img" style="background-image: url(images/hockup/images/bridesmaid-4.jpg);"></div>
              <div class="text">
                <h3>Angel Worth</h3>
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
        <a href="{{ asset('images/hockup/images/gallery-1.jpg')}}"
          class="gallery img image-popup d-flex align-items-center justify-content-center"
          style="background-image: url(images/hockup/images/gallery-1.jpg);">
          <div class="icon d-flex align-items-center justify-content-center"><span class="ion-ios-image"></span></div>
        </a>
      </div>
      <div class="col-md-3 ftco-animate">
        <a href="{{ asset('images/hockup/images/gallery-2.jpg')}}"
          class="gallery img image-popup d-flex align-items-center justify-content-center"
          style="background-image: url(images/hockup/images/gallery-2.jpg);">
          <div class="icon d-flex align-items-center justify-content-center"><span class="ion-ios-image"></span></div>
        </a>
      </div>
      <div class="col-md-3 ftco-animate">
        <a href="{{ asset('images/hockup/images/gallery-3.jpg')}}"
          class="gallery img image-popup d-flex align-items-center justify-content-center"
          style="background-image: url(images/hockup/images/gallery-3.jpg);">
          <div class="icon d-flex align-items-center justify-content-center"><span class="ion-ios-image"></span></div>
        </a>
      </div>
      <div class="col-md-3 ftco-animate">
        <a href="{{ asset('images/hockup/images/gallery-4.jpg')}}"
          class="gallery img image-popup d-flex align-items-center justify-content-center"
          style="background-image: url(images/hockup/images/gallery-4.jpg);">
          <div class="icon d-flex align-items-center justify-content-center"><span class="ion-ios-image"></span></div>
        </a>
      </div>

    </div>
    <p class="text-center"><a href="{{url('/pix')}}" type="button" class="btn btn-primary">View more..</a></p>
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