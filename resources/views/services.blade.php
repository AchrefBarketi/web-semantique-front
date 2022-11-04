@extends('theme.default')

@section('swiper')
<section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
    <div data-speed="0.2" data-type="media" data-url="images/backgrounds/background-01-1920x900.jpg" class="rd-parallax-layer"></div>
    <div data-speed="0" data-type="html" class="rd-parallax-layer">
      <div class="shell section-top-57 section-bottom-30 section-md-top-125 section-lg-top-200">
        <div class="veil reveal-md-block">
          <h1 class="text-bold">Services</h1>
        </div>
        <ul class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
          <li><a href="#" class="text-white">Home</a></li>
          <li><a href="#" class="text-white">Pages</a></li>
          <li>Services
          </li>
        </ul>
      </div>
    </div>
  </section>
@endsection

@section('content')
<main class="page-content bg-white">
    <section class="section-60 section-sm-0">
      <div class="shell">
        <div class="range range-xs-center range-sm-right">
          <div class="cell-xs-10 cell-sm-6 section-image-aside section-image-aside-left text-left">
            <div style="background-image: url(images/pages/services-01-960x593.jpg); background-position: center center;" class="section-image-aside-img veil reveal-sm-block"></div>
            <div class="section-image-aside-body section-sm-top-90 section-sm-bottom-90 section-md-top-111 section-md-bottom-162 inset-sm-left-50 inset-lg-left-100">
              <h2 class="text-bold text-center text-sm-left">Our Services</h2>
              <hr class="divider hr-sm-left-0 bg-gray-darker">
              <div class="offset-top-30 offset-md-top-60">
                <p>We envision a world in which every person can fulfill their need for travel. A world where you can easily visit family and friends, commute to school and work, and explore the world. As humans, we have the urge to explore. When traveling by bike, you can be closer to the people you love. You can also discover more about yourself and the world around you. By empowering travelers through various Rent a Bike services, we aim to create a more accessible world for everyone.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="range range-xs-center range-sm-left offset-top-0">
          <div class="cell-xs-10 cell-sm-6 section-image-aside section-image-aside-right text-left">
            <div style="background-image: url(images/pages/services-02-960x593.jpg); background-position: center center;" class="section-image-aside-img veil reveal-sm-block"></div>
            <div class="section-image-aside-body offset-top-60 offset-sm-top-0 section-sm-90 section-md-111 inset-sm-right-30 inset-lg-right-90">
              <h2 class="text-bold text-center text-sm-left">Bike rental <br class="veil reveal-md-inline-block"> services</h2>
              <hr class="divider hr-sm-left-0 bg-gray-darker">
              <div class="offset-top-30 offset-md-top-60">
                <p>We offer bike rentals so you can ride the famous American bicycle trails or roll across your favorite sandy shores, such as Wrightsville Beach and Figure Eight Island. We’ll even deliver and pick up your rental bikes, so you can spend more time cruising!</p>
              </div>
              <div class="text-center text-sm-left offset-top-15 offset-md-top-30"><a href="#" class="btn btn-default">Buy Tickets</a></div>
            </div>
          </div>
        </div>
        <div class="range range-xs-center range-sm-right offset-top-0">
          <div class="cell-xs-10 cell-sm-6 section-image-aside section-image-aside-left text-left">
            <div style="background-image: url(images/pages/services-03-960x593.jpg); background-position: center center;" class="section-image-aside-img veil reveal-sm-block"></div>
            <div class="section-image-aside-body offset-top-60 offset-sm-top-0 section-sm-top-90 section-sm-bottom-90 section-md-top-111 section-md-bottom-162 inset-sm-left-50 inset-lg-left-100">
              <h2 class="text-bold text-center text-sm-left">Guided tours</h2>
              <hr class="divider hr-sm-left-0 bg-gray-darker">
              <div class="offset-top-30 offset-md-top-60">
                <p>Tourists who want to cycle with a guide can join a daily bike ride through the most renowned cities, organized by our guides. They will show the most spectacular and breathtaking sights, and give historical and recent information about the city and beyond.</p>
              </div>
              <div class="text-center text-sm-left offset-top-15 offset-md-top-30"><a href="#" class="btn btn-default">Book Now</a></div>
            </div>
          </div>
        </div>
        <div class="range range-xs-center range-sm-left offset-top-0">
          <div class="cell-xs-10 cell-sm-6 section-image-aside section-image-aside-right text-left">
            <div style="background-image: url(images/pages/services-04-960x593.jpg); background-position: center center;" class="section-image-aside-img veil reveal-sm-block"></div>
            <div class="section-image-aside-body offset-top-60 offset-sm-top-0 section-sm-90 section-md-111 inset-sm-right-30 inset-lg-right-90">
              <h2 class="text-bold text-center text-sm-left">Public bikes for your needs</h2>
              <hr class="divider hr-sm-left-0 bg-gray-darker">
              <div class="offset-top-30 offset-md-top-60">
                <p>We offer a unique oportunity to make the city a cleaner and more pleasant place. On the basis of the Public Bike partner program, hotels, museums, businesses, festivals and events agencies can make one of our bicycles available to their customers and staff.</p>
              </div>
              <div class="text-center text-sm-left offset-top-15 offset-md-top-30"><a href="#" class="btn btn-default">Book Now</a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
