@extends('theme.default')

@section('swiper')
    <section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
        <div data-speed="0.2" data-type="media" data-url="/images/backgrounds/background-01-1920x900.jpg"
            class="rd-parallax-layer"></div>
        <div data-speed="0" data-type="html" class="rd-parallax-layer">
            <div class="shell section-top-57 section-bottom-30 section-md-top-125 section-lg-top-200">
                <div class="veil reveal-md-block">
                    <h1 class="text-bold">Events</h1>
                </div>
                <ul
                    class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
                    <li><a href="/" class="text-white">Home</a></li>
                    <li><a href="/events" class="text-white">Events</a></li>
                    <li>Event Details
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <main class="page-content">
        <!-- Blog Classic-->
        <div id="fb-root"></div>
        <section class="section-90 section-md-111 text-left">
            <div class="shell">
                <div class="range range-xs-center range-lg-right">
                    <div class="cell-sm-10 cell-md-8">
                        <h2 class="text-bold">{{$Event[0]->Title->value}}</h2>
                        <div class="offset-top-15">
                            <ul class="list list-inline list-inline-dots list-inline-8 list-inline-0 text-gray">
                                <li class="offset-top-0"><span style="position: relative; top: -1px;"
                                        class="icon icon-xxs mdi mdi-calendar text-gray text-middle"></span><span
                                        class="inset-left-10"><strong>Start:</strong> {{ $Event[0]->StartDate->value }}</span></li>
                                <li class="offset-top-0"><span style="position: relative; top: -1px;"
                                        class="icon icon-xxs mdi mdi-calendar text-gray text-middle"></span><span
                                        class="inset-left-10"><strong>End:</strong> {{ $Event[0]->EndDate->value }}</span></li>

                                <li><span><strong>By</strong> <a href="#"
                                            class="text-orange-peel">Decathlon</a></span></li>
                                <li class="offset-top-0"><span style="position: relative; top: -1px;"
                                        class="icon icon-xxs mdi mdi-map text-gray text-middle"></span><span
                                        class="inset-left-10">Location: {{ $Event[0]->Location->value }}</span></li>
                            </ul>
                        </div>
                        <div class="offset-top-25 offset-md-top-40"><img src="/images/blog/post-08-570x310.jpg"
                                width="770" height="420" alt="" class="img-responsive center-block"></div>
                        <div class="offset-top-30">
                            <p class="text-gray-darker">{{ $Event[0]->Description->value }}</p>
                        </div>



                    </div>
                    <div class="cell-sm-10 cell-md-4 offset-top-60 offset-md-top-0">
                        <div class="inset-md-left-30">
                            <!-- Aside-->
                            <aside class="text-left">
                                <!-- Search the Blog-->
                                <div>
                                    <h5 class="text-bold">Search</h5>
                                </div>
                                <div class="offset-top-6">
                                    <div class="text-subline"></div>
                                </div>
                                <div class="offset-top-15 offset-md-top-20 rd-search-blog">
                                    <!-- RD Search Form-->
                                    <form action="#" method="GET" class="form-search rd-search">
                                        <div class="form-group">
                                            <label for="blog-classic-form-search-widget"
                                                class="form-label form-search-label">Search...</label>
                                            <input id="blog-classic-form-search-widget" type="text" name="s"
                                                autocomplete="off" class="form-search-input form-control null">
                                        </div>
                                        <button type="submit" class="form-search-submit"><span
                                                class="fa fa-search"></span></button>
                                    </form>
                                </div>
                                <!-- Archive-->
                                <div class="offset-top-30 offset-md-top-60">
                                    <h5 class="text-bold">Location</h5>
                                </div>

                                <div class="offset-top-6">
                                    <div class="text-subline"></div>
                                </div>

                                <div class="offset-top-15 offset-md-top-20">
                                    <div class="range range-xs-center">
                                        <div class="cell-xs-6">
                                            <div class="mapouter">
                                                <div class="gmap_canvas"><iframe width="340" height="400" id="gmap_canvas"
                                                        src="https://maps.google.com/maps?q={{$Event[0]->Location->value}}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cell-xs-6 offset-top-10 offset-xs-top-0 inset-xs-left-8">
                                            <!-- List Marked-->

                                        </div>
                                    </div>
                                </div>
                                <!-- About-->

                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
