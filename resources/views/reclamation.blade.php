@extends('theme.default')
@section('swiper')
<section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
    <div data-speed="0.2" data-type="media" data-url="images/backgrounds/background-01-1920x900.jpg" class="rd-parallax-layer"></div>
    <div data-speed="0" data-type="html" class="rd-parallax-layer">
      <div class="shell section-top-57 section-bottom-30 section-md-top-125 section-lg-top-200">
        <div class="veil reveal-md-block">
          <h1 class="text-bold">Reclamation</h1>
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
<div class="container"style="padding:0px 170px; background-color:rgba(255,255,255,0.1); margin:30px auto 50px auto ;max-width:150vh;border-radius:10px;">
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form method="post" action="{{ route('reclamation.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group " >
                                            
                                           
                                            <div class="row g-3">
                                                <div class="col-lg-6" style="margin-bottom:20px;">
                                                  
                                                    <div>
                                                        <label for="leadname-field" >Subject</label>
                                                        <input type="text" id="leadname-field" name="sujet" class="form-control"  />
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <!--end col-->
                                                <div class="col-lg-6" style="margin-bottom:20px;">
                                                    <div>
                                                        <label >Email</label>
                                                        <input type="email" id="location-field" name="email" class="form-control"   />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6" style="margin-bottom:20px;">
                                                    <div>
                                                    <label >Associations</label>
                                                        <select name="association_id" id="delegation" class="form-control">
                                                            @foreach($Association as $Association)
                                                            <option value="{{ $Association->id }}">{{ $Association->name }}</option>
                                                            @endforeach


                                                        </select>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-lg-6" style="margin-bottom:20px;">
                                                <label >Priority</label>
                                                        <select name="priority" id="delegation" class="form-control" >
                                                                    <option value="LOW">LOW</option>
                                                                    <option value="MEDIUM">MEDIUM</option>
                                                                    <option value="HEIGHT">HEIGHT</option>
                                                        </select>    
                                                </div>
                                                <!--end col-->
                                                <!--end col-->
                                                <div class="col-lg-12" style="margin-bottom:20px;">
                                                    <div>
                                                        <label >Description</label>
                                                        <textarea id="form10" class="md-textarea form-control" name="description"  rows="3" ></textarea>
                                                    </div>
                                                </div>
                                                

                                                
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="modal-footer">
                                            <div class="hstack gap-2 justify-content-end">
                                               
                                                <button type="submit" class="btn btn-primary" id="add-btn">Send
                                                    reclamation</button>
                                                {{-- <button type="submit" class="btn btn-success"
                                                           id="edit-btn">Update</button> --}}
                                            </div>
                                        </div>
                                    </form>

</div>
@endsection