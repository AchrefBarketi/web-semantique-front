@extends('theme.default')
@php
// Retrieve the currently authenticated user...
$user = Illuminate\Support\Facades\Auth::user();
@endphp
@section('swiper')
    <section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
        <div data-speed="0.2" data-type="media" data-url="images/backgrounds/background-01-1920x900.jpg"
            class="rd-parallax-layer"></div>

        <div data-speed="0" data-type="html" class="rd-parallax-layer">
            <div class="shell section-top-57 section-bottom-30 section-md-top-125 section-lg-top-200">
                <div class="veil reveal-md-block">
                    <h1 class="text-bold">Profile</h1>

                </div>


                <ul
                    class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
                    <li><a href="#" class="text-white">Home</a></li>
                    <li>Profile
                    </li>

                </ul>

            </div>

        </div>

    </section>
@endsection

@section('content')
    <main class="page-content">
        <!-- Get in touch-->
        <section class="section-90 section-md-111 text-left">
            <div class="shell">
                <div class="range range-xs-center">
                    <div class="cell-xs-10 cell-md-8">
                        <div class="inset-lg-right-40">
                            <h2 class="text-bold text-center text-md-left">My profile</h2>
                            <hr class="divider hr-sm-left-0 bg-gray-darker">

                            <img src="data:image/png;base64,{{$user->picture ? $user->picture : 'assets/images/users/user-dummy-img.jpg'}}" width="200px" height="200px" alt=""
                style="margin-left: 300px; border-radius: 50%">

                            <div class="offset-top-20 offset-md-top-30">
                                <!-- RD Mailform-->
                                <form method="post" action="/users/update/{{ $user->id }}" enctype="multipart/form-data">

                                    @method('PUT')
                                    @csrf
                                    <div class="range range-xs-center">
                                        <div class="cell-sm-6">
                                            <div class="form-group form-group-label-outside">
                                                <label for="contacts-first-name"
                                                    class="form-label form-label-outside text-dark">Name</label>
                                                <input id="contacts-first-name" type="text" name="name" value="{{$user->name}}"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group form-group-label-outside offset-top-20">
                                                <label for="contacts-email"
                                                    class="form-label form-label-outside text-dark">E-mail</label>
                                                <input id="contacts-email" type="email" name="email" value="{{$user->email}}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="cell-sm-6 offset-top-20 offset-sm-top-0">
                                            <div class="form-group form-group-label-outside">
                                                <label for="contacts-last-name"
                                                    class="form-label form-label-outside text-dark">Joining Date</label>
                                                <input id="contacts-last-name" type="text" value="{{$user->created_at}}" readonly
                                                    class="form-control">
                                            </div>
                                            <div class="form-group form-group-label-outside offset-top-20">
                                                <label for="contacts-phone"
                                                    class="form-label form-label-outside text-dark">Status</label>
                                                <input id="contacts-phone" type="text" value="{{$user->status}}" readonly
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="cell-sm-12 offset-top-20 offset-sm-top-0">
                                            <div class="form-group form-group-label-outside">
                                                <label for="contacts-last-name"
                                                    class="form-label form-label-outside text-dark">Picture</label>
                                                <input id="contacts-last-name" type="file" name="picture" value="{{$user->picture}}"
                                                    class="form-control">
                                            </div>

                                        </div>

                                    </div>

                                    <div class="offset-top-18 offset-sm-top-30 text-center text-sm-left">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
