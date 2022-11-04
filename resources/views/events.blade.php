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
                    <li>Events
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
                <h2 class="text-bold text-center text-lg-left">Upcoming Events</h2>
                <hr class="divider hr-lg-left-0 bg-gray-darker">
                <div class="col" style="width: 400px;">
                    <div>
                        <h5 class="text-bold">Search</h5>
                    </div>
                    <div class="offset-top-6">
                        <div class="text-subline"></div>
                    </div>
                    <div class="offset-top-15 offset-md-top-20 rd-search-blog">
                        <!-- RD Search Form-->
                        <form method="GET" action="/searchEvent" class="form-search rd-search">
                            @csrf
                            <div class="form-group">
                                <label for="blog-classic-form-search-widget"
                                    class="form-label form-search-label">Search...</label>
                                <input id="blog-classic-form-search-widget" type="text" name="search"
                                    class="form-search-input form-control null">
                            </div>
                            <button type="submit" class="form-search-submit"><span class="fa fa-search"></span></button>
                        </form>
                    </div>
                </div>

                <div class="range range-xs-center offset-top-60">
                    @foreach ($Types as $event)
                        <div class="cell-xs-10 cell-sm-6 offset-top-30">
                            <!-- Post Boxed-->
                            <div class="reveal-block">
                                <div class="post post-boxed">
                                    <!-- Post media-->
                                    <header class="post-media"><img style="max-height:350px"
                                            src="/images/blog/post-08-570x310.jpg" alt="" class="img-responsive" />
                                    </header>

                                    {{-- <div class="box-member-caption">
                                        <div class="box-member-caption-inner">
                                            <div class="box-member-caption-wrap">
                                                <div class="box-member-title">
                                                    @if (Request::routeIs('events') || Request::routeIs('event-marathon'))
                                                        <div class="h4 text-bold text-white"><a
                                                                href="#">{{ $event }}</a></div>
                                                    @else
                                                        <div class="h4 text-bold text-white"><a
                                                                href="/single-tour/{{ $event->Type->value }}/{{ $event->Title->value }}">{{ $event->Title->value }}</a>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="box-member-description offset-top-6">
                                                    <p></p>
                                                </div>
                                                @if (Request::routeIs('events'))
                                                    <div class="offset-top-20"><a href="/events/{{ $event }}"
                                                            class="btn btn-primary">Learn More</a></div>
                                                @elseif (Request::routeIs('event-marathon'))
                                                    <div class="offset-top-20"><a
                                                            href="/events/Marathon/{{ $event }}"
                                                            class="btn btn-primary">Learn More</a></div>
                                                @endif
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- Post content -->
                                    <section class="post-content text-left">
                                        {{-- <div class="post-tags group-sm"><a href="#"><span
                                                    class="label-custom label-lg-custom label-primary"> $event->location
                                                </span>
                                            </a>
                                        </div> --}}
                                        <div class="post-body">
                                            <div class="post-title">
                                                @if (Request::routeIs('events') || Request::routeIs('event-marathon'))
                                                    @if (Request::routeIs('events') && $event != 'Marathon')
                                                        <div class="h4 text-bold text-white"><a
                                                                href="/events/{{ $event }}">{{ $event }}</a>
                                                        </div>
                                                    @elseif (Request::routeIs('events') && $event == 'Marathon')
                                                        <div class="h4 text-bold text-white"><a
                                                                href="/events/m/Marathon">{{ $event }}</a>
                                                        </div>
                                                    @elseif (Request::routeIs('event-marathon'))
                                                        <div class="h4 text-bold text-white"><a
                                                                href="/events/Marathon/{{ $event }}">{{ $event }}</a>
                                                        </div>
                                                    @endif
                                                @else
                                                    <div class="h4 text-bold text-white"><a
                                                            href="/single-event/{{ $event->Type->value }}/{{ $event->Title->value }}">{{ $event->Title->value }}</a>
                                                    </div>
                                                @endif
                                            </div>
                                            {{-- <div class="post-meta">
                                                <ul class="list-inline list-inline-sm p">
                                                    <li><span class="text-middle icon-xxs mdi mdi-calendar"></span>
                                                        <time datetime="2016-01-01"
                                                            class="text-middle inset-left-6 text-ripe-lemon">Start:
                                                            $event->start_date </time>
                                                    </li>
                                                    <li><span class="text-middle icon-xxs mdi mdi-calendar"></span>
                                                        <time datetime="2016-01-01"
                                                            class="text-middle inset-left-6 text-ripe-lemon">End:
                                                            $event->end_date </time>
                                                    </li>

                                                </ul>
                                            </div> --}}
                                        </div>
                                    </section>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            </div>
        </section>
    </main>
@endsection
