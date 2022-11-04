@extends('theme.default')

@section('swiper')
    <section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
        <div data-speed="0.2" data-type="media" data-url="images/backgrounds/background-06-1920x617.jpg"
            class="rd-parallax-layer"></div>
        <div data-speed="0" data-type="html" class="rd-parallax-layer">
            <div class="shell section-top-57 section-bottom-30 section-md-top-125 section-lg-top-200">
                <div class="veil reveal-md-block">
                    <h1 class="text-bold">Bike rentals</h1>
                </div>
                <ul
                    class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
                    <li><a href="#" class="text-white">Home</a></li>
                    <li>Bike rentals
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <!-- Page Contents-->
    <main class="page-content bg-white">
        <!-- Pricing-->
        <section class="section-90 section-md-111">
            <div class="shell">
                <h2 class="text-bold">Choose the Type of Bike</h2>
                <hr class="divider bg-gray-darker">
                <div class="range range-xs-center offset-top-60">
                    <div class="cell-xs-10 cell-sm-6 cell-md-12">
                        <div class="range">
                            @foreach ($Types as $bike)
                                <div class="cell-xs-4 cell-sm-4 offset-top-30 offset-md-top-30">
                                    <!-- Pricing Box-->
                                    <div class="pricing-box">
                                        <div class="pricing-box-header"><span
                                                class="icon icon-xxlg mdi mdi-bike text-primary"></span></div>
                                        <div class="pricing-box-title offset-top-35">
                                            <div class="h5 text-bold">{{ $bike }}</div>
                                        </div>

                                        <div class="pricing-box-btn offset-top-42" style="margin-top: 150px">
                                            <a type="submit" href="/bikes/{{ $bike }}" class="btn btn-block btn-primary">Choose a bike</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
