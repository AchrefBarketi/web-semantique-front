@extends('theme.default')

@section('swiper')
          <!-- Swiper-->
          <div data-height="" data-min-height="200px" data-slide-effect="fade" data-simulate-touch="false" data-loop="true" data-autoplay="true" class="swiper-container swiper-slider context-dark">
            <div class="swiper-wrapper">
              <div data-slide-bg="images/backgrounds/background-02-1920x800.jpg" class="swiper-slide"></div>
              <div data-slide-bg="images/backgrounds/background-03-1920x800.jpg" class="swiper-slide"></div>
              <div data-slide-bg="images/backgrounds/background-04-1920x800.jpg" class="swiper-slide"></div>
            </div>
            <div class="swiper-static-caption">
              <h1><span class="text-medium big">Bike rental services</span></h1>
              <h5 class="veil reveal-sm-block"><span class="big">We provide affordable and reliable bike rent services all over the USA.</span></h5><a href="#" class="btn btn-default">Learn more</a>
            </div>
            <!-- Swiper Pagination-->
            <div class="swiper-pagination"></div>
          </div>
@endsection

@section('content')
      <!-- Page Contents-->
      <main id="section-change-color" class="page-content">
        <!-- Our Advantages-->
        <section class="section-90 section-md-111 bg-texture-01 context-dark">
          <div class="shell">
            <h2 class="text-bold">Our Advantages</h2>
            <hr class="divider bg-primary">
            <div class="range range-xs-center offset-top-69">
              <div class="cell-xs-6 cell-sm-5 cell-md-3">
                <!-- Box Icon-->
                <div class="box-icon"><span class="icon icon-xlg icon-circle icon-transparent-white-filled mdi mdi-clock"></span>
                  <div class="offset-top-20">
                    <h5 class="text-bold">Bike Rentals</h5>
                  </div>
                  <div class="offset-top-15">
                    <hr class="divider divider-xs bg-primary"/>
                  </div>
                  <div class="offset-top-15">
                    <p class="text-white">We have been renting out bicycles for almost 13 years </p>
                  </div>
                </div>
              </div>
              <div class="cell-xs-6 cell-sm-5 cell-md-3 offset-top-60 offset-xs-top-0">
                <!-- Box Icon-->
                <div class="box-icon"><span class="icon icon-xlg icon-circle icon-transparent-white-filled mdi mdi-credit-card"></span>
                  <div class="offset-top-20">
                    <h5 class="text-bold">Bike Repair</h5>
                  </div>
                  <div class="offset-top-15">
                    <hr class="divider divider-xs bg-primary"/>
                  </div>
                  <div class="offset-top-15">
                    <p class="text-white">Our bicycle mechanic can repair bikes within a day</p>
                  </div>
                </div>
              </div>
              <div class="cell-xs-6 cell-sm-5 cell-md-3 offset-top-60 offset-md-top-0">
                <!-- Box Icon-->
                <div class="box-icon"><span class="icon icon-xlg icon-circle icon-transparent-white-filled mdi mdi-web"></span>
                  <div class="offset-top-20">
                    <h5 class="text-bold">Guided Tours</h5>
                  </div>
                  <div class="offset-top-15">
                    <hr class="divider divider-xs bg-primary"/>
                  </div>
                  <div class="offset-top-15">
                    <p class="text-white">Tourists who want to cycle with a guide can join a daily bike ride</p>
                  </div>
                </div>
              </div>
              <div class="cell-xs-6 cell-sm-5 cell-md-3 offset-top-60 offset-md-top-0">
                <!-- Box Icon-->
                <div class="box-icon"><span class="icon icon-xlg icon-circle icon-transparent-white-filled mdi mdi-emoticon"></span>
                  <div class="offset-top-20">
                    <h5 class="text-bold">Online Booking</h5>
                  </div>
                  <div class="offset-top-15">
                    <hr class="divider divider-xs bg-primary"/>
                  </div>
                  <div class="offset-top-15">
                    <p class="text-white">You can use booking form to rent a bike online</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Popular Routes-->
        <section class="section-90 section-md-111">
          <div class="shell">
            <h2 class="text-bold">Popular Routes</h2>
            <hr class="divider bg-gray-darker">
            <div class="range range-xs-center offset-top-60">
              <div class="cell-xs-10 cell-sm-6">
                <!-- Post Ticket--><a href="#" class="post-ticket post-ticket-boxed">
                  <div class="post-ticket-header"><img src="images/blog/post-02-570x280.jpg" width="570" height="280" alt="" class="img-responsive"/>
                    <div class="post-ticket-price-svg-wrap">
                      <div class="post-ticket-price-svg">
                        <div class="post-ticket-price text-bold text-shark"><span>$</span><span>26.00</span><span>/pers.</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="post-ticket-body text-left">
                    <!-- List Inline-->
                    <div>
                      <ul class="group-xs list list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-white">
                        <li class="post-ticket-boxed-title text-bold">Mountain Tour</li>
                      </ul>
                    </div>
                  </div></a>
              </div>
              <div class="cell-xs-10 cell-sm-6 offset-top-30 offset-sm-top-0">
                <!-- Post Ticket--><a href="#" class="post-ticket post-ticket-boxed">
                  <div class="post-ticket-header"><img src="images/blog/post-03-570x280.jpg" width="570" height="280" alt="" class="img-responsive"/>
                    <div class="post-ticket-price-svg-wrap">
                      <div class="post-ticket-price-svg">
                        <div class="post-ticket-price text-bold text-shark"><span>$</span><span>30.00</span><span>/pers.</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="post-ticket-body text-left">
                    <!-- List Inline-->
                    <div>
                      <ul class="group-xs list list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-white">
                        <li class="post-ticket-boxed-title text-bold">Off-Road Tour</li>
                      </ul>
                    </div>
                  </div></a>
              </div>
              <div class="cell-xs-10 cell-sm-6 offset-top-30 offset-sm-top-25">
                <!-- Post Ticket--><a href="#" class="post-ticket post-ticket-boxed">
                  <div class="post-ticket-header"><img src="images/blog/post-04-570x280.jpg" width="570" height="280" alt="" class="img-responsive"/>
                    <div class="post-ticket-price-svg-wrap">
                      <div class="post-ticket-price-svg">
                        <div class="post-ticket-price text-bold text-shark"><span>$</span><span>20.00</span><span>/pers.</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="post-ticket-body text-left">
                    <!-- List Inline-->
                    <div>
                      <ul class="group-xs list list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-white">
                        <li class="post-ticket-boxed-title text-bold">New York (Short Tour)</li>
                      </ul>
                    </div>
                  </div></a>
              </div>
              <div class="cell-xs-10 cell-sm-6 offset-top-30 offset-sm-top-25">
                <!-- Post Ticket--><a href="#" class="post-ticket post-ticket-boxed">
                  <div class="post-ticket-header"><img src="images/blog/post-05-570x280.jpg" width="570" height="280" alt="" class="img-responsive"/>
                    <div class="post-ticket-price-svg-wrap">
                      <div class="post-ticket-price-svg">
                        <div class="post-ticket-price text-bold text-shark"><span>$</span><span>28.00</span><span>/pers.</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="post-ticket-body text-left">
                    <!-- List Inline-->
                    <div>
                      <ul class="group-xs list list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-white">
                        <li class="post-ticket-boxed-title text-bold">Golden Gate Bridge Tour</li>
                      </ul>
                    </div>
                  </div></a>
              </div>
            </div>
            <div class="offset-top-60"><a href="#" class="btn btn-primary">View All Routes</a></div>
          </div>
        </section>
        <!-- Special Service-->
        <section>
          <!-- RD Parallax-->
          <div data-on="false" data-md-on="true" class="bg-gray-base context-dark rd-parallax">
            <div data-speed="0.15" data-type="media" data-url="images/backgrounds/background-05-1920x697.jpg" class="rd-parallax-layer"></div>
            <div data-speed="0" data-type="html" data-md-fade="false" class="rd-parallax-layer">
              <div class="shell section-top-90 section-bottom-90 section-md-top-144 section-md-bottom-130">
                <div>
                  <h2 class="text-bold text-white">Need to Get Your Bicycle Fixed?</h2>
                </div>
                <div class="offset-top-10">
                  <h5 class="text-bold text-white">We will do it!</h5>
                </div>
                <div class="offset-top-42"><a href="#" class="btn btn-primary">Book Now</a></div>
              </div>
            </div>
          </div>
        </section>
        <!-- Latest News-->
        <section class="section-90 section-md-111">
          <div class="shell">
            <h2 class="text-bold">Latest News</h2>
            <hr class="divider bg-gray-darker">
            <div class="range range-xs-center offset-top-60">
              <div class="cell-xs-10 cell-sm-7 cell-md-4">
                <article class="post post-masonry">
                  <!-- Post media-->
                  <header class="post-media"><img src="images/blog/post-01-370x240.jpg" width="370" height="240" alt="" class="img-responsive center-block"/>
                  </header>
                  <!-- Post content-->
                  <section class="post-content text-left">
                    <ul class="list list-inline list-inline-dots list-inline-8 list-inline-0 text-gray">
                      <li class="offset-top-0"><span style="position: relative; top: -1px;" class="icon icon-xxs mdi mdi-calendar text-gray text-middle"></span><span class="inset-left-10">1 days ago</span></li>
                      <li><span>by <a href="#" class="text-orange-peel">Joyce Contreras</a></span></li>
                    </ul>
                    <!-- Post Title-->
                    <div class="post-title offset-top-20">
                      <h6 class="text-bold text-primary"><a href="#">Rent a Bike Touring Bikes</a></h6>
                    </div>
                    <!-- Post Body-->
                    <div class="post-body offset-top-10">
                      <p>Our new touring bikes have had rave reviews. They have been successfully ridden all over the US, covering hundreds of kilometres.</p>
                      <div class="offset-top-20">
                        <div class="tags group group-sm"><a href="#" class="btn-xs btn-tag btn btn-big-stone">Bikes</a><a href="#" class="btn-xs btn-tag btn btn-big-stone">Rental</a>
                        </div>
                      </div>
                    </div>
                  </section>
                </article>
              </div>
              <div class="cell-xs-10 cell-sm-7 cell-md-4 offset-top-30 offset-md-top-0">
                <article class="post post-masonry">
                  <!-- Post media-->
                  <header class="post-media"><img src="images/blog/post-06-370x240.jpg" width="370" height="240" alt="" class="img-responsive center-block"/>
                  </header>
                  <!-- Post content-->
                  <section class="post-content text-left">
                    <ul class="list list-inline list-inline-dots list-inline-8 list-inline-0 text-gray">
                      <li class="offset-top-0"><span style="position: relative; top: -1px;" class="icon icon-xxs mdi mdi-calendar text-gray text-middle"></span><span class="inset-left-10">2 days ago</span></li>
                      <li><span>by <a href="#" class="text-orange-peel">Dan Newman</a></span></li>
                    </ul>
                    <!-- Post Title-->
                    <div class="post-title offset-top-20">
                      <h6 class="text-bold text-primary"><a href="#">Long-distance Bike Tours</a></h6>
                    </div>
                    <!-- Post Body-->
                    <div class="post-body offset-top-10">
                      <p>In this article, our regular customers tell about their experience and impression they got from our newest long-distance bike tours.</p>
                      <div class="offset-top-20">
                        <div class="tags group group-sm"><a href="#" class="btn-xs btn-tag btn btn-big-stone">Traveling</a><a href="#" class="btn-xs btn-tag btn btn-big-stone">Tips</a>
                        </div>
                      </div>
                    </div>
                  </section>
                </article>
              </div>
              <div class="cell-xs-10 cell-sm-7 cell-md-4 offset-top-30 offset-md-top-0">
                <article class="post post-masonry">
                  <!-- Post media-->
                  <header class="post-media"><img src="images/blog/post-07-370x240.jpg" width="370" height="240" alt="" class="img-responsive center-block"/>
                  </header>
                  <!-- Post content-->
                  <section class="post-content text-left">
                    <ul class="list list-inline list-inline-dots list-inline-8 list-inline-0 text-gray">
                      <li class="offset-top-0"><span style="position: relative; top: -1px;" class="icon icon-xxs mdi mdi-calendar text-gray text-middle"></span><span class="inset-left-10">2 days ago</span></li>
                      <li><span>by <a href="#" class="text-orange-peel">Laura Wallace</a></span></li>
                    </ul>
                    <!-- Post Title-->
                    <div class="post-title offset-top-20">
                      <h6 class="text-bold text-primary"><a href="#">5 Reasons to Take the Bike in the USA</a></h6>
                    </div>
                    <!-- Post Body-->
                    <div class="post-body offset-top-10">
                      <p>Taking the bike may not be the number one mode of transport that comes to mind when planning your trip, but it is definitely useful.</p>
                      <div class="offset-top-20">
                        <div class="tags group group-sm"><a href="#" class="btn-xs btn-tag btn btn-big-stone">Bikes</a><a href="#" class="btn-xs btn-tag btn btn-big-stone">USA</a>
                        </div>
                      </div>
                    </div>
                  </section>
                </article>
              </div>
            </div>
            <div class="offset-top-60"><a href="#" class="btn btn-primary">View All News</a></div>
          </div>
        </section>
        <!-- Take Part in the Discount Campaign-->
        <section class="section-57 context-dark bg-primary">
          <div class="shell">
            <div class="range range-xs-center range-xs-middle">
              <div class="cell-md-10 cell-lg-8 text-center text-md-right">
                <h2 class="text-bold">Take Part in the Discount Campaign</h2>
              </div>
              <div class="cell-lg-3 offset-top-30 offset-lg-top-0 text-lg-left"><a href="#" class="btn btn-white">Get Started</a></div>
            </div>
          </div>
        </section>

      </main>
@endsection
