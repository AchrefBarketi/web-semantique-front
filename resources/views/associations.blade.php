
@extends('theme.default')

@section('swiper')
<section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
    <div data-speed="0.2" data-type="media" data-url="images/backgrounds/background-01-1920x900.jpg" class="rd-parallax-layer"></div>
    <div data-speed="0" data-type="html" class="rd-parallax-layer">
      <div class="shell section-top-57 section-bottom-30 section-md-top-125 section-lg-top-200">
        <div class="veil reveal-md-block">
          <h1 class="text-bold">Associations</h1>
        </div>
        <ul class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
          <li><a href="/associations" class="text-white">Home</a></li>
          <li><a href="/reclamation" class="text-white">Reclamation</a>
          </li>
        </ul>
      </div>
    </div>

  </section>

@endsection
@section('content')
<main id="section-change-color" class="page-content mt-5 mb-5 "  >
        <div class="association">
        <section class="section-90 section-md-111 mt-5 " style="margin-top:30px; margin-left:auto; margin-right:auto;">
          <div class="shell text-center">

            <hr class="divider bg-gray-darker">


            <div class="range range-xs-center offset-top-60 ">
            <div class="row ">

            @foreach ($associations as $association)

                  <div class="col-6 mx-4" >
                      <!-- Post Ticket--><div class="post-ticket post-ticket-boxed" style=" margin:10px; ">
                        <div class="post-ticket-header"><img src="http://americanhumanist.org/wp-content/uploads/2020/09/AHA_ZoomBkgs1.jpg" width="570" height="280" style="width:580px; height:280px;" alt="" class="img-responsive"/>
                          <div class="post-ticket-price-svg-wrap">
                            <div class="post-ticket-price-svg">
                              <div class="post-ticket-price text-bold text-shark">Phone: {{ $association->Phone->value }}</div>

                            </div>
                          </div>
                        </div>
                        <div class="post-ticket-body text-left" >
                          <!-- List Inline-->
                          <div>
                            <ul class="group-xs list list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-white">
                              <li >
                                  <div class="post-ticket-boxed-title text-bold">{{ $association->Name->value }}</div>
                                  <p style="color:white;">{{ $association->Address->value }}</p>
                                  <p style="color:white; font-size:11px;margin-top:50px;">{{ $association->Email->value }}</p>
                              </li>

                            </ul>
                          </div>
                        </div></div>
                    </div>
                  </div>

            @endforeach
            </div>
            <div class="offset-top-60"><a href="Association" class="btn btn-primary">View All Association</a></div>
          </div>
          <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
        </section>

        </div>

</main>
<script>
var myModal = document.getElementById('modal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>

@endsection
