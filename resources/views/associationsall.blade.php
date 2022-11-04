@extends('theme.default')

@section('swiper')
    <section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
        <div data-speed="0.2" data-type="media" data-url="images/backgrounds/background-01-1920x900.jpg"
            class="rd-parallax-layer"></div>
        <div data-speed="0" data-type="html" class="rd-parallax-layer">
            <div class="shell section-top-57 section-bottom-30 section-md-top-125 section-lg-top-200">
                <div class="veil reveal-md-block">
                    <h1 class="text-bold">Associations</h1>
                </div>
                <ul
                    class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
                    <li><a href="/associations" class="text-white">Home</a></li>
                    <li><a href="/reclamation" class="text-white">Reclamation</a>
                    </li>
                </ul>
            </div>
        </div>

    </section>
@endsection
@section('content')
    <main class="page-content">
        <!-- Blog Grid-->
        <section class="section-90 section-md-111 text-left">
            <div class="shell">
                <h2 class="text-bold text-center text-lg-left">Associations</h2>
                <hr class="divider hr-lg-left-0 bg-gray-darker">
                <div class="range range-xs-center offset-top-60">
                    @foreach ($Types as $association)
                    <div class="cell-xs-10 cell-sm-6">
                        <!-- Post Boxed-->

                            <div class="reveal-block">
                                <br>
                                <div class="post post-boxed">
                                    <!-- Post media-->
                                    <header class="post-media"><img  style="max-width:570px; max-height:310px"
                                            src="http://americanhumanist.org/wp-content/uploads/2020/09/AHA_ZoomBkgs1.jpg" alt=""
                                            class="img-responsive" /></header>
                                    <!-- Post content-->
                                    <section class="post-content text-left">
                                        <div class="post-tags group-sm"><a href="#"><span
                                                    class="label-custom label-lg-custom label-primary">{{ $association->Phone->value }}</span></a>
                                        </div>
                                         <div class="post-body">
                                            <!-- Post Title-->
                                            <div class="post-title">
                                                <div class="h4 text-bold text-white"><a > {{ $association->Name->value }} </a>
                                                </div>
                                            </div>
                                            <div class="post-meta">
                                                <ul class="list-inline list-inline-sm p">
                                                    <li><span class="text-middle icon-xxs mdi mdi-calendar"></span>
                                                        <time datetime="2016-01-01"
                                                            class="text-middle inset-left-6 text-ripe-lemon"> {{$association->Address->value}} </time>
                                                    </li>

                                                    <li class="text-middle">Email:  &nbsp;<span
                                                            class="inset-left-3 text-ripe-lemon"> {{$association->Email->value}} </span>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>


                    </div>

                    @endforeach

                </div>

            </div>
        </section>
    </main>
@endsection

