@extends('theme.default')

@section('swiper')
    <section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
        <div data-speed="0.2" data-type="media" data-url="/images/backgrounds/background-01-1920x900.jpg"
            class="rd-parallax-layer"></div>
        <div data-speed="0" data-type="html" class="rd-parallax-layer">
            <div class="shell section-top-57 section-bottom-30 section-md-top-125 section-lg-top-200">
                <div class="veil reveal-md-block">
                    <h1 class="text-bold">Bike Tours</h1>
                </div>
                <ul
                    class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
                    <li><a href="#" class="text-white">Home</a></li>
                    <li><a href="#" class="text-white">Bike Tours</a></li>
                    <li>All Destinations
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <!-- Page Contents-->
    <main class="page-content bg-white">
        <!-- Where Will You Go?-->
        <section class="section-90 section-md-111 text-left">
            <div class="shell">
                <div class="range range-xs-center">
                    <div class="cell-md-8">
                        <div class="range range-xs-center">

                            @foreach ($Types as $balade)
                                <div class="cell-xs-10 cell-sm-6 offset-top-30">
                                    <!-- Box Member Type 2-->
                                    <div class="box-member box-member-type-2 box-member-modern box-member-caption-offset">
                                        <div class="box-member-img-wrap"><img src="/images/portfolio/gallery-01-370x240.jpg"
                                                style="height: 280px; width: 370px;" alt=""
                                                class="img-responsive" /></div>
                                        <div class="box-member-wrap">

                                            <div class="box-member-caption">
                                                <div class="box-member-caption-inner">
                                                    <div class="box-member-caption-wrap">
                                                        <div class="box-member-title">
                                                            @if (Request::routeIs('tour') || Request::routeIs('tour-city') || Request::routeIs('tour-offRoad'))
                                                                <div class="h4 text-bold text-white"><a
                                                                        href="#">{{ $balade }}</a></div>
                                                            @else
                                                                <div class="h4 text-bold text-white"><a
                                                                        href="/single-tour/{{ $balade->Type->value }}/{{ $balade->Title->value }}">{{ $balade->Title->value }}</a>
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="box-member-description offset-top-6">
                                                            <p></p>
                                                        </div>
                                                        @if (Request::routeIs('tour'))
                                                            <div class="offset-top-20"><a
                                                                    href="/bike-tours/{{ $balade }}"
                                                                    class="btn btn-primary">Learn More</a></div>
                                                        @elseif (Request::routeIs('tour-city'))
                                                            <div class="offset-top-20"><a
                                                                    href="/bike-tours/City/{{ $balade }}"
                                                                    class="btn btn-primary">Learn More</a></div>
                                                        @elseif (Request::routeIs('tour-offRoad'))
                                                            <div class="offset-top-20"><a
                                                                    href="/bike-tours/OffRoad/{{ $balade }}"
                                                                    class="btn btn-primary">Learn More</a></div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            @endforeach

                        </div>
                        {{-- <div class="text-center text-md-left offset-top-60">
                            <!-- Classic Pagination-->
                                    {!! $balades->links("pagination::bootstrap-4") !!}
                        </div> --}}
                    </div>
                    <div class="cell-md-4 offset-top-60 offset-md-top-0">
                        <div class="inset-md-left-30">
                            <!-- Panel-->
                            <div
                                class="panel panel-xl panel-vertical panel-sm-resize panel-md-resize section-bottom-40 bg-gray-darker context-dark text-lg-left">
                                <h5 class="text-bold"><span class="big"><span class="big"><span class="big">Find
                                                Bike Tours</span></span></span></h5>


                                <form class="offset-top-25" method="GET" action="/searchTour">
                                    @csrf
                                    <div class="group group-top">

                                        <div
                                            class="group-item element-fullwidth offset-top-6 offset-xs-top-0 offset-lg-top-6">
                                            <div class="form-group text-left">
                                                <label for="traveling-to"
                                                    class="form-label form-label-outside">Title</label>
                                                <div class="select2-whitout-border shadow-drop-md">
                                                    <input class="form-control" type="text" name="search">
                                                </div>
                                            </div>
                                        </div>


                                        <div
                                            class="group-item reveal-block reveal-md-inline-block text-center text-md-left offset-top-15">
                                            <button type="submit" class="btn btn-primary shadow-drop-md">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Testimonials-->
                            <div class="offset-top-60">
                                <h5 class="text-bold">Testimonials</h5>
                            </div>
                            <div class="offset-top-6">
                                <div class="text-subline"></div>
                            </div>
                            <!-- Owl Carousel-->
                            <div data-items="1" data-loop="false" data-stage-padding="5" data-margin="10" data-nav="false"
                                data-dots="true"
                                class="owl-carousel owl-carousel-classic owl-dots-primary owl-dots-25 text-center text-md-left">
                                <div class="owl-item">
                                    <!-- Classic Blockquote-->
                                    <blockquote class="quote quote-classic quote-accent offset-top-25">
                                        <!-- Media-->
                                        <div class="media">
                                            <div class="media-left"><span
                                                    class="icon icon-xs fa fa-quote-left text-primary"></span></div>
                                            <div class="media-body">
                                                <p class="h6 text-italic">
                                                    <q>Me and my extended family, 7 total, rented bikes from this place
                                                        during our visit in June 2015. Rent a Bike was excellent.</q>
                                                </p>
                                                <div class="offset-top-10">
                                                    <div class="unit unit-middle unit-horizontal unit-spacing-xs">
                                                        <div class="unit-left"><img
                                                                src="images/users/user-tyheresa-barrett-40x40.jpg"
                                                                width="40" height="40" alt=""
                                                                class="img-circle img-responsive center-block"></div>
                                                        <div class="unit-body">
                                                            <p class="quote-author"><a href="#"
                                                                    class="text-gray">Theresa Barrett</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="owl-item">
                                    <!-- Classic Blockquote-->
                                    <blockquote class="quote quote-classic quote-accent offset-top-25">
                                        <!-- Media-->
                                        <div class="media">
                                            <div class="media-left"><span
                                                    class="icon icon-xs fa fa-quote-left text-primary"></span></div>
                                            <div class="media-body">
                                                <p class="h6 text-italic">
                                                    <q>Rent a Bike is a perfect bike rental service for me. They were very
                                                        helpful in fitting me and my girlfriend for a couple of bikes and
                                                        heading us in the right direction.</q>
                                                </p>
                                                <div class="offset-top-10">
                                                    <div class="unit unit-middle unit-horizontal unit-spacing-xs">
                                                        <div class="unit-left"><img
                                                                src="images/users/user-roger-washington-40x40.jpg"
                                                                width="40" height="40" alt=""
                                                                class="img-circle img-responsive center-block"></div>
                                                        <div class="unit-body">
                                                            <p class="quote-author"><a href="#"
                                                                    class="text-gray">Roger Washington</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="owl-item">
                                    <!-- Classic Blockquote-->
                                    <blockquote class="quote quote-classic quote-accent offset-top-25">
                                        <!-- Media-->
                                        <div class="media">
                                            <div class="media-left"><span
                                                    class="icon icon-xs fa fa-quote-left text-primary"></span></div>
                                            <div class="media-body">
                                                <p class="h6 text-italic">
                                                    <q>What a way to spend an afternoon riding a bike through California! It
                                                        was an unforgettable experience for me. But what I really liked was
                                                        a service provided by Rent a Bike.</q>
                                                </p>
                                                <div class="offset-top-10">
                                                    <div class="unit unit-middle unit-horizontal unit-spacing-xs">
                                                        <div class="unit-left"><img
                                                                src="images/users/user-jean-kennedy-40x40.jpg"
                                                                width="40" height="40" alt=""
                                                                class="img-circle img-responsive center-block"></div>
                                                        <div class="unit-body">
                                                            <p class="quote-author"><a href="#"
                                                                    class="text-gray">Jean Kennedy</a></p>
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
            </div>
        </section>
    </main>
@endsection
