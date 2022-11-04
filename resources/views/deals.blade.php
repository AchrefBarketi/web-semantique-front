@extends('theme.default')

@section('swiper')
    <section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
        <div data-speed="0.2" data-type="media" data-url="images/backgrounds/background-01-1920x900.jpg"
            class="rd-parallax-layer"></div>
        <div data-speed="0" data-type="html" class="rd-parallax-layer">
            <div class="shell section-top-57 section-bottom-30 section-md-top-125 section-lg-top-200">
                <div class="veil reveal-md-block">
                    <h1 class="text-bold">Deals</h1>
                </div>
                <ul
                    class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
                    <li><a href="#" class="text-white">Home</a></li>
                    <li><a href="#" class="text-white">Pages</a></li>
                    <li>Deals
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <main class="page-content">
        <!-- Hot Deals-->
        <section class="section-90 section-md-111 text-left bg-white">
            <div class="shell">
                <h2 class="text-bold text-center text-md-left">Hot Deals</h2>
                <hr class="divider hr-md-left-0 bg-gray-darker">
                <div class="offset-top-30 offset-md-top-60">
                    <div class="range range-xs-center">
                        @foreach ($deals as $deal)
                            @php
                                $balades = App\Http\Controllers\BaladeController::getBaladesByDeal($deal->id);
                            @endphp

                            @if ($deal->pourcentage == 0)
                            @else
                                <div class="cell-sm-6 cell-md-4 offset-top-30">
                                    <!-- Box Member Type 2-->
                                    <div
                                        class="box-member box-member-type-2 box-member-modern box-member-caption-offset-67">
                                        <div class="box-member-img-wrap"><img
                                                src="data:image/png;base64,{{ $deal->picture }}"
                                                style="width:3700px ;height:320px;" alt="" class="img-responsive" />
                                        </div>
                                        <div class="box-member-wrap">
                                            <div class="box-member-caption" style="margin-bottom: 20px">
                                                <div class="box-member-caption-inner">
                                                    <div class="box-member-caption-wrap">
                                                        <div class="box-member-discount h6 text-bold text-white">Save
                                                            {{ $deal->pourcentage }}%</div>

                                                        <div class="box-member-title">
                                                            <div class="h4 text-bold text-white"><a>{{ $deal->title }}</a>

                                                            </div>
                                                            <p class="text-bold text-warning">Before {{ $deal->endDate }}
                                                            </p>
                                                        </div>
                                                        <div class="box-member-description offset-top-6">
                                                            <p></p>
                                                        </div>
                                                        <div class="offset-top-20"><a
                                                                data-target="#baladesModal{{ $deal->id }}"
                                                                data-toggle="modal" class="btn btn-xs btn-primary">Learn
                                                                More</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endif


                            <div class="modal fade" tabindex="-1" id="baladesModal{{ $deal->id }}" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document"
                                    style="margin-top: 250px">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h3 class="text-bold text-center text-md-left">Bike tours for this deal</h3>
                                            <hr class="divider hr-md-left-0 bg-gray-darker">

                                            <div class="offset-top-30 offset-md-top-49">
                                                <!-- Classic Responsive Table-->
                                                @if (sizeof($balades) == 0)
                                                    <p>No bike tours with this deal</p>
                                                @else
                                                    <table
                                                        class="table table-custom table-custom-white table-deals  table-hover-rows">
                                                        <tr>
                                                            <th>Tour Name</th>
                                                            <th>Description</th>
                                                            <th>Deal Pourcentage</th>
                                                        </tr>
                                                        @foreach ($balades as $balade)
                                                            <tr>
                                                                <td class="p text-bold text-primary"><a
                                                                        href="/single-tour/{{ $balade->id }}">{{ $balade->title }}</a>
                                                                </td>
                                                                <td>{{ $balade->description }}
                                                                </td>
                                                                <td>{{ $deal->pourcentage }} %</td>
                                                            </tr>
                                                        @endforeach

                                                    </table>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach




                    </div>
                </div>
            </div>
        </section>
        <!-- Top Bus Routes in the US-->

    </main>
@endsection
