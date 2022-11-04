

<div class="rd-navbar-wrap">
    <nav data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-md-stick-up-offset="90px"
        data-lg-stick-up-offset="75px" data-auto-height="false"
        class="rd-navbar rd-navbar-top-panel rd-navbar-default rd-navbar-white rd-navbar-static-fullwidth-transparent"
        data-lg-auto-height="true" data-md-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-static"
        data-lg-stick-up="true">
        <div class="rd-navbar-inner">
            <!-- RD Navbar Panel-->
            <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"
                    class="rd-navbar-toggle"><span></span></button>
                <!-- Navbar Brand-->
                <div class="rd-navbar-brand"><a href="index.html">Rent a bike</a></div>
            </div>
            <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                    <div class="rd-navbar-mobile-scroll">
                        <!-- Navbar Brand Mobile-->
                        <div class="rd-navbar-mobile-brand"><a href="index.html">Rent a bike</a></div>
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li class="{{ Request::routeIs('index') ? 'active' : '' }}"><a
                                    href="{{ url('/') }}">Home</a></li>
                            <li
                                class="{{ Request::routeIs('our-history') | Request::routeIs('our-team') | Request::routeIs('services')
                                    ? 'active'
                                    : '' }}">
                                <a>About</a>
                                <!-- RD Navbar Dropdown-->
                                <ul class="rd-navbar-dropdown">
                                    <li><a href="{{ url('/our-history') }}">Our History</a></li>
                                    <li><a href="{{ url('/our-team') }}">Our Team</a></li>
                                    <li><a href="{{ url('/services') }}">Services</a></li>
                                </ul>
                            </li>


                            <li class="{{ Request::routeIs('Association.showAll') ? 'active' : '' }}"><a
                                href="{{ url('/Association') }}">Associations</a></li>

                            <li class="{{ Request::routeIs('tour') ? 'active' : '' }}"><a
                                href="{{ url('/bike-tours') }}">Bike Tours</a></li>

                            <li class="{{ Request::routeIs('bike-rental') ? 'active' : '' }}"><a
                                    href="{{ url('/bike-rental') }}">Bikes</a></li>


                            <li class="{{ Request::routeIs('events') ? 'active' : '' }}"><a
                                    href="{{ url('/events') }}">Events</a></li>
                            <!--li(class=(navbar.active == 6 ? 'active' : ''))//a(href= cfg.nav.tracking.href)= cfg.nav.tracking.title
                -->




                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
