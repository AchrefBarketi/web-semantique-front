@extends('theme.default')

@section('swiper')
<section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
    <div data-speed="0.2" data-type="media" data-url="images/backgrounds/background-01-1920x900.jpg" class="rd-parallax-layer"></div>
    <div data-speed="0" data-type="html" class="rd-parallax-layer">
      <div class="shell section-top-57 section-bottom-30 section-md-top-125 section-lg-top-200">
        <div class="veil reveal-md-block">
          <h1 class="text-bold">Our History</h1>
        </div>
        <ul class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
          <li><a href="#" class="text-white">Home</a></li>
          <li><a href="#" class="text-white">About</a></li>
          <li>Our History
          </li>
        </ul>
      </div>
    </div>
  </section>
@endsection

@section('content')
<main class="page-content bg-white">
    <!-- A Few Words About Us-->
    <section class="section-90 section-md-111 text-left">
      <div class="shell">
        <div class="range range-xs-center">
          <div class="cell-sm-8 cell-md-6">
            <div class="inset-lg-right-20">
              <h2 class="text-bold text-center text-md-left">A Few Words About Us</h2>
              <hr class="divider hr-md-left-0 bg-gray-darker">
              <div class="offset-top-30 offset-md-top-60">
                <p>Rent a Bike was founded by Dan Newman and Mary Flumbergen in 1981. New York was already one of the leaders of cycling cities, however, no one gave visitors the opportunity to discover New York by bike. Soon, Newman and Flumbergen opened their first branch in the old bicycle factory. They also wanted to fulfil a function to the locals. So, apart from rental they also offered their services to repair bikes.</p>
              </div>
            </div>
          </div>
          <div class="cell-sm-8 cell-md-6 offset-top-40 offset-md-top-0">
            <!-- RD Video-->
            <div data-rd-video-path="video/video-for-player-1" data-rd-video-title="" data-rd-video-muted="true" data-rd-video-preview="video/video-for-player-1.jpg" data-rd-video-preload="false" class="rd-video-player">
              <div class="rd-video-wrap embed-responsive-16by9">
                <!-- Play\Pause button--><a href="#" class="rd-video-play-pause rd-video-main-play mdi mdi-play-circle-outline"></a>
                <div class="rd-video-preloader"></div>
                <video preload="metadata"></video>
                <div class="rd-video-preview"></div>
                <div class="rd-video-top-controls">
                  <!-- Title--><span class="rd-video-title"></span><a href="#" class="rd-video-fullscreen mdi mdi-fullscreen rd-video-icon"></a>
                </div>
                <div class="rd-video-controls">
                  <div class="rd-video-controls-buttons">
                    <!-- Play\Pause button--><a href="#" class="rd-video-play-pause mdi mdi-play"></a>
                    <!-- Progress bar-->
                  </div>
                  <div class="rd-video-progress-bar"></div>
                  <div class="rd-video-time"><span class="rd-video-current-time"></span> <span class="rd-video-time-divider">:</span>  <span class="rd-video-duration"></span></div>
                  <div class="rd-video-volume-wrap">
                    <!-- Volume button--><a href="#" class="rd-video-volume mdi mdi-volume-high rd-video-icon"></a>
                    <div class="rd-video-volume-bar-wrap">
                      <!-- Volume bar-->
                      <div class="rd-video-volume-bar"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Company's Timeline-->
    <section class="section-90 section-md-111 bg-zircon">
      <div class="shell">
        <h2 class="text-bold text-center">Company's Timeline</h2>
        <hr class="divider bg-primary">
        <!-- Blog Timeline-->
        <div class="range range-xs-center blog-timeline offset-top-30 offset-md-top-47">
          <div class="cell-sm-8 cell-md-5 text-md-right blog-timeline-images">
            <div class="range range-xs-center">
              <div data-wow-duration="1s" data-wow-delay="0.2s" class="cell-xs-6 cell-md-12 blog-timeline-image-wrap wow fadeInLeft">
                <div class="reveal-inline-block shadow-drop-md"><img src="images/blog/post-11-300x200.jpg" width="300" height="200" alt="" class="img-responsive center-block"></div>
              </div>
              <div data-wow-duration="1s" data-wow-delay="0.3s" class="cell-xs-6 cell-md-12 blog-timeline-image-wrap offset-top-30 offset-xs-top-0 wow fadeInLeft">
                <div class="reveal-inline-block shadow-drop-md"><img src="images/blog/post-12-300x200.jpg" width="300" height="200" alt="" class="img-responsive center-block"></div>
              </div>
              <div data-wow-duration="1s" data-wow-delay="0.6s" class="cell-xs-6 cell-md-12 blog-timeline-image-wrap offset-top-30 offset-md-top-0 wow fadeInLeft">
                <div class="reveal-inline-block shadow-drop-md"><img src="images/blog/post-13-300x200.jpg" width="300" height="200" alt="" class="img-responsive center-block"></div>
              </div>
              <div data-wow-duration="1s" data-wow-delay="0.9s" class="cell-xs-6 cell-md-12 blog-timeline-image-wrap offset-top-30 offset-md-top-0 wow fadeInLeft">
                <div class="reveal-inline-block shadow-drop-md"><img src="images/blog/post-14-300x200.jpg" width="300" height="200" alt="" class="img-responsive center-block"></div>
              </div>
            </div>
          </div>
          <div class="cell-sm-8 cell-md-7 text-left offset-top-40 offset-md-top-0">
            <div class="inset-md-left-50 inset-lg-left-130">
              <div class="blog-timeline-posts">
                <div class="blog-timeline-post">
                  <div class="blog-timeline-post-media text-center text-md-left">
                    <p class="text-bold text-gray-darker">2016</p>
                  </div>
                  <div class="blog-timeline-post-body offset-top-10 offset-lg-top-0">
                    <p class="offset-top-10"><span class="text-bold">April:</span> Rent a Bike has launched 50+ Bike Tours</p>
                    <p class="offset-top-10"><span class="text-bold">March:</span> Repair services available on iOS and Android apps</p>
                  </div>
                </div>
                <div class="blog-timeline-post offset-top-30 offset-lg-top-0">
                  <div class="blog-timeline-post-media text-center text-md-left">
                    <p class="text-bold text-gray-darker">2015</p>
                  </div>
                  <div class="blog-timeline-post-body offset-top-10 offset-lg-top-0">
                    <p><span class="text-bold">August:</span> We have opened 200+ Bike Stations</p>
                    <div class="offset-top-10">
                      <p><span class="text-bold">July:</span> Major revamp is made to the Rent a Bike iOS & Android apps</p>
                    </div>
                    <div class="offset-top-10">
                      <p><span class="text-bold">June:</span> Rent a Bike expands services to San Francisco</p>
                    </div>
                  </div>
                </div>
                <div class="blog-timeline-post offset-top-30 offset-lg-top-0">
                  <div class="blog-timeline-post-media text-center text-md-left">
                    <p class="text-bold text-gray-darker">2014</p>
                  </div>
                  <div class="blog-timeline-post-body offset-top-10 offset-lg-top-0">
                    <p><span class="text-bold">June:</span> Search algorithm for Bike Tours booking is relaunched for an improved user experience</p>
                  </div>
                </div>
                <div class="blog-timeline-post offset-top-30 offset-lg-top-0">
                  <div class="blog-timeline-post-media text-center text-md-left">
                    <p class="text-bold text-gray-darker">2013</p>
                  </div>
                  <div class="blog-timeline-post-body offset-top-10 offset-lg-top-0">
                    <p><span class="text-bold">July:</span> Rent a Bike releases mobile website for booking Bike Tours online</p>
                  </div>
                </div>
                <div class="blog-timeline-post offset-top-30 offset-lg-top-0">
                  <div class="blog-timeline-post-media text-center text-md-left">
                    <p class="text-bold text-gray-darker">2012</p>
                  </div>
                  <div class="blog-timeline-post-body offset-top-10 offset-lg-top-0">
                    <p><span class="text-bold">January:</span> We have opened 50+ Bike Stations</p>
                  </div>
                </div>
                <div class="blog-timeline-post offset-top-30 offset-lg-top-0">
                  <div class="blog-timeline-post-media text-center text-md-left">
                    <p class="text-bold text-gray-darker">2011</p>
                  </div>
                  <div class="blog-timeline-post-body offset-top-10 offset-lg-top-0">
                    <p><span class="text-bold">February:</span> Rent a Bike releases first-time affiliate program allowing website owners to sell tours online</p>
                  </div>
                </div>
                <div class="blog-timeline-post offset-top-30 offset-lg-top-0">
                  <div class="blog-timeline-post-media text-center text-md-left">
                    <p class="text-bold text-gray-darker">2008</p>
                  </div>
                  <div class="blog-timeline-post-body offset-top-10 offset-lg-top-0">
                    <p>We begin selling tour services online</p>
                  </div>
                </div>
                <div class="blog-timeline-post offset-top-30 offset-lg-top-0">
                  <div class="blog-timeline-post-media text-center text-md-left">
                    <p class="text-bold text-gray-darker">2006</p>
                  </div>
                  <div class="blog-timeline-post-body offset-top-10 offset-lg-top-0">
                    <p>Rent a Bike was founded</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonials-->
    <section class="section-top-90 section-bottom-90 section-md-top-111 section-md-bottom-100">
      <div class="shell">
        <h2 class="text-bold text-center">Testimonials</h2>
        <hr class="divider bg-primary">
        <div class="range range-xs-center offset-top-30">
          <div class="cell-sm-8 cell-md-12">
            <!-- Owl Carousel-->
            <div data-items="1" data-md-items="3" data-loop="false" data-stage-padding="5" data-margin="60" data-nav="false" data-dots="true" class="owl-carousel owl-carousel-classic owl-dots-60">
              <div class="owl-item">
                <!-- Classic Blockquote-->
                <blockquote class="quote quote-classic offset-top-25">
                  <!-- Media-->
                  <div class="media">
                    <div class="media-left"><span class="icon icon-xs fa fa-quote-left text-primary"></span></div>
                    <div class="media-body">
                      <p class="h6 text-italic">
                        <q>Rent a Bike is a perfect bike rental service for me. They were very helpful in fitting me and my girlfriend for a couple of bikes and heading us in the right direction.</q>
                      </p>
                      <div class="offset-top-10">
                        <div class="unit unit-middle unit-horizontal unit-spacing-xs">
                          <div class="unit-left"><img src="images/users/user-roger-washington-40x40.jpg" width="40" height="40" alt="" class="img-circle img-responsive center-block"></div>
                          <div class="unit-body">
                            <p class="quote-author"><a href="#" class="text-gray">Roger Washington</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </blockquote>
              </div>
              <div class="owl-item">
                <!-- Classic Blockquote-->
                <blockquote class="quote quote-classic offset-top-25">
                  <!-- Media-->
                  <div class="media">
                    <div class="media-left"><span class="icon icon-xs fa fa-quote-left text-primary"></span></div>
                    <div class="media-body">
                      <p class="h6 text-italic">
                        <q>Me and my extended family, 7 total, rented bikes from this place during our visit in June 2015. Rent a Bike was excellent, they were friendly and very informative, and they also gave us a run-down of the trail.</q>
                      </p>
                      <div class="offset-top-10">
                        <div class="unit unit-middle unit-horizontal unit-spacing-xs">
                          <div class="unit-left"><img src="images/users/user-tyheresa-barrett-40x40.jpg" width="40" height="40" alt="" class="img-circle img-responsive center-block"></div>
                          <div class="unit-body">
                            <p class="quote-author"><a href="#" class="text-gray">Theresa Barrett</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </blockquote>
              </div>
              <div class="owl-item">
                <!-- Classic Blockquote-->
                <blockquote class="quote quote-classic offset-top-25">
                  <!-- Media-->
                  <div class="media">
                    <div class="media-left"><span class="icon icon-xs fa fa-quote-left text-primary"></span></div>
                    <div class="media-body">
                      <p class="h6 text-italic">
                        <q>What a way to spend an afternoon riding a bike through California! It was an unforgettable experience for me. But what I really liked was a service provided by Rent a Bike.</q>
                      </p>
                      <div class="offset-top-10">
                        <div class="unit unit-middle unit-horizontal unit-spacing-xs">
                          <div class="unit-left"><img src="images/users/user-jean-kennedy-40x40.jpg" width="40" height="40" alt="" class="img-circle img-responsive center-block"></div>
                          <div class="unit-body">
                            <p class="quote-author"><a href="#" class="text-gray">Jean Kennedy</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </blockquote>
              </div>
              <div class="owl-item">
                <!-- Classic Blockquote-->
                <blockquote class="quote quote-classic offset-top-25">
                  <!-- Media-->
                  <div class="media">
                    <div class="media-left"><span class="icon icon-xs fa fa-quote-left text-primary"></span></div>
                    <div class="media-body">
                      <p class="h6 text-italic">
                        <q>What a way to spend an afternoon riding a bike through California! It was an unforgettable experience for me. But what I really liked was a service provided by Rent a Bike.</q>
                      </p>
                      <div class="offset-top-10">
                        <div class="unit unit-middle unit-horizontal unit-spacing-xs">
                          <div class="unit-left"><img src="images/users/user-roger-washington-40x40.jpg" width="40" height="40" alt="" class="img-circle img-responsive center-block"></div>
                          <div class="unit-body">
                            <p class="quote-author"><a href="#" class="text-gray">Roger Washington</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </blockquote>
              </div>
              <div class="owl-item">
                <!-- Classic Blockquote-->
                <blockquote class="quote quote-classic offset-top-25">
                  <!-- Media-->
                  <div class="media">
                    <div class="media-left"><span class="icon icon-xs fa fa-quote-left text-primary"></span></div>
                    <div class="media-body">
                      <p class="h6 text-italic">
                        <q>Me and my extended family, 7 total, rented bikes from this place during our visit in June 2015. Rent a Bike was excellent.</q>
                      </p>
                      <div class="offset-top-10">
                        <div class="unit unit-middle unit-horizontal unit-spacing-xs">
                          <div class="unit-left"><img src="images/users/user-tyheresa-barrett-40x40.jpg" width="40" height="40" alt="" class="img-circle img-responsive center-block"></div>
                          <div class="unit-body">
                            <p class="quote-author"><a href="#" class="text-gray">Theresa Barrett</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </blockquote>
              </div>
              <div class="owl-item">
                <!-- Classic Blockquote-->
                <blockquote class="quote quote-classic offset-top-25">
                  <!-- Media-->
                  <div class="media">
                    <div class="media-left"><span class="icon icon-xs fa fa-quote-left text-primary"></span></div>
                    <div class="media-body">
                      <p class="h6 text-italic">
                        <q>What a way to spend an afternoon riding a bike through California! It was an unforgettable experience for me. But what I really liked was a service provided by Rent a Bike.</q>
                      </p>
                      <div class="offset-top-10">
                        <div class="unit unit-middle unit-horizontal unit-spacing-xs">
                          <div class="unit-left"><img src="images/users/user-jean-kennedy-40x40.jpg" width="40" height="40" alt="" class="img-circle img-responsive center-block"></div>
                          <div class="unit-body">
                            <p class="quote-author"><a href="#" class="text-gray">Jean Kennedy</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </blockquote>
              </div>
              <div class="owl-item">
                <!-- Classic Blockquote-->
                <blockquote class="quote quote-classic offset-top-25">
                  <!-- Media-->
                  <div class="media">
                    <div class="media-left"><span class="icon icon-xs fa fa-quote-left text-primary"></span></div>
                    <div class="media-body">
                      <p class="h6 text-italic">
                        <q>Rent a Bike is a perfect bike rental service for me. They were very helpful in fitting me and my girlfriend for a couple of bikes and heading us in the right direction.</q>
                      </p>
                      <div class="offset-top-10">
                        <div class="unit unit-middle unit-horizontal unit-spacing-xs">
                          <div class="unit-left"><img src="images/users/user-roger-washington-40x40.jpg" width="40" height="40" alt="" class="img-circle img-responsive center-block"></div>
                          <div class="unit-body">
                            <p class="quote-author"><a href="#" class="text-gray">Roger Washington</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </blockquote>
              </div>
              <div class="owl-item">
                <!-- Classic Blockquote-->
                <blockquote class="quote quote-classic offset-top-25">
                  <!-- Media-->
                  <div class="media">
                    <div class="media-left"><span class="icon icon-xs fa fa-quote-left text-primary"></span></div>
                    <div class="media-body">
                      <p class="h6 text-italic">
                        <q>Me and my extended family, 7 total, rented bikes from this place during our visit in June 2015. Rent a Bike was excellent.</q>
                      </p>
                      <div class="offset-top-10">
                        <div class="unit unit-middle unit-horizontal unit-spacing-xs">
                          <div class="unit-left"><img src="images/users/user-tyheresa-barrett-40x40.jpg" width="40" height="40" alt="" class="img-circle img-responsive center-block"></div>
                          <div class="unit-body">
                            <p class="quote-author"><a href="#" class="text-gray">Theresa Barrett</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </blockquote>
              </div>
              <div class="owl-item">
                <!-- Classic Blockquote-->
                <blockquote class="quote quote-classic offset-top-25">
                  <!-- Media-->
                  <div class="media">
                    <div class="media-left"><span class="icon icon-xs fa fa-quote-left text-primary"></span></div>
                    <div class="media-body">
                      <p class="h6 text-italic">
                        <q>What a way to spend an afternoon riding a bike through California! It was an unforgettable experience for me. But what I really liked was a service provided by Rent a Bike.</q>
                      </p>
                      <div class="offset-top-10">
                        <div class="unit unit-middle unit-horizontal unit-spacing-xs">
                          <div class="unit-left"><img src="images/users/user-jean-kennedy-40x40.jpg" width="40" height="40" alt="" class="img-circle img-responsive center-block"></div>
                          <div class="unit-body">
                            <p class="quote-author"><a href="#" class="text-gray">Jean Kennedy</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
