@extends('theme.default')

@section('swiper')
    <section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
        <div data-speed="0.2" data-type="media" data-url="images/backgrounds/background-01-1920x900.jpg"
            class="rd-parallax-layer"></div>
        <div data-speed="0" data-type="html" class="rd-parallax-layer">
            <div class="shell section-top-57 section-bottom-30 section-md-top-125 section-lg-top-200">
                <div class="veil reveal-md-block">
                    <h1 class="text-bold">Single Tour</h1>
                </div>
                <ul
                    class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
                    <li><a href="#" class="text-white">Home</a></li>
                    <li><a href="#" class="text-white">Bike Tours</a></li>
                    <li>Single Tour
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection


@section('content')
    <main class="page-content bg-white">
        <!-- Press-->
        <br>
        <section class="section-60 section-sm-0 bg-zircon">
            <div class="shell list-index-lg">
                <div class="range range-xs-center range-sm-right">
                    <div class="cell-xs-10 cell-sm-6 section-image-aside section-image-aside-left text-left">
                        <div style="background-image: url(/images/portfolio/gallery-01-370x240.jpg); background-position: center center;"
                            class="section-image-aside-img veil reveal-sm-block"></div>
                        <div
                            class="section-image-aside-body section-sm-top-90 section-sm-bottom-90 section-md-top-100 section-md-bottom-162 inset-left-15 inset-right-15 inset-sm-left-50 inset-lg-left-100">
                            <div class="offset-top-15">
                                <h2 class="text-bold text-center text-sm-left">{{$Balade[0]->Title->value}}</h2>
                            </div>
                            <hr class="divider hr-sm-left-0 bg-gray-darker">
                            <div class="offset-top-30 offset-md-top-60">
                                <p><strong><u>Description:</u></strong><br> {{$Balade[0]->Description->value}}</p>
                                <p><strong><u>Date:</u></strong><br> {{$Balade[0]->Date->value}}</p>
                                <p><strong><u>Duration:</u></strong><br> {{$Balade[0]->Duration->value}} heures</p>
                                {{-- <p><strong><u>Starting Point:</u></strong><br> {{$prog->startingPoint}} heures</p>
                                <p><strong><u>Departure Time:</u></strong><br> {{$prog->departureTime}} heures</p>
                                <p><strong><u>Remarks:</u></strong><br> {{$prog->remarks}} heures</p> --}}


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        {{-- <section class="section-90 section-md-111 text-left">
            <div class="shell">
                <h2 class="text-bold text-center text-md-left">Activities</h2>
                <hr class="divider hr-md-left-0 bg-gray-darker">
                <div class="range range-xs-center range-xs-middle range-md-left">
                    <div class="cell-sm-1 text-center section-sm-top-30 section-md-top-75">
                        <!-- Timetable-->
                        <div class="timetable-range timetable-range-horizontal veil-sm">
                            <div class="timetable-range-circle"></div>
                            <div class="timetable-range-circle"><span
                                    class="icon icon-circle icon-xxs mdi mdi-bike icon-primary-filled"></span></div>
                            <div class="timetable-range-circle"></div>
                            <div class="timetable-range-circle"></div>
                            <div class="timetable-range-circle"></div>
                        </div>
                        <!-- Timetable Vertical-->
                        <div class="timetable-range timetable-range-vertical veil reveal-sm-inline-block">
                            <div class="timetable-range-circle"></div>
                            <div class="timetable-range-circle"><span
                                    class="icon icon-circle icon-xxs mdi mdi-bike icon-primary-filled"></span></div>
                            <div class="timetable-range-circle"></div>
                            <div class="timetable-range-circle"></div>
                            <div class="timetable-range-circle"></div>
                        </div>
                    </div>
                    <div class="cell-sm-11 cell-md-11">
                        <!-- Classic Responsive Table-->

                        <table
                            class="table table-custom table-timetable table-fixed table-hover-rows stacktable large-only">
                            <tbody>
                                <tr>
                                    <th>Scheduled</th>
                                    <th style="width: 300px">Details</th>
                                </tr>
                                @foreach($acts as $act)
                                <tr>
                                    <td>{{$act->time}}</td>
                                    <td><span class="reveal-block text-bold text-primary">{{$act->title}}</span><span
                                            class="reveal-block">{{$act->details}}</span></td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section> --}}
        <section class="section-90 section-md-111 text-left">
            <div class="shell">
                <div class="range range-xs-center">
                    <div class="cell-xs-12 cell-sm-12">
                        <div class="inset-sm-right-20 inset-lg-righ-50">
                            <h2 class="text-bold text-center text-sm-left">Location on map</h2>
                            <hr class="divider hr-sm-left-0 bg-gray-darker">
                            <div>
                                <div class="mapouter">
                                    <div class="gmap_canvas"><iframe width="1200" height="600" id="gmap_canvas"
                                            src="https://maps.google.com/maps?q={{$Balade[0]->Location->value}}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cell-xs-10 cell-sm-6 offset-top-69 offset-sm-top-0">
                            <div class="rd-google-map-xs">
                                <!-- RD Google Map-->
                            </div>
                        </div>
                    </div>
        </section>
    </main>
@endsection
