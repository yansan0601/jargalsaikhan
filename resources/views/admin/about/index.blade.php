@extends('layouts.admin.app')
@section('title','Намтар удирдах хэсэг')
@section('content')

  <div class="content-wrapper">
    <div class="content-header p-2"></div>
      @if(Session::has('message'))
        <div class="alert alert-success text-center" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{Session::get('message')}}
        </div>
      @endif
    <section class="content news">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Намтар</h5>
              </div>

              <div class="card-body p-0">
                <div class="">
                  <div class="col-sm-12">
                    <div class="row list-header">
                      <div class="col-sm-11"></div>
                      <div class="col-sm-1"></div>
                    </div>
                    @foreach($about as $about)
                    <div class="col-sm-12">
                      <div class="" style="padding-left: 0px">{!! $about->body !!}</div>
                      <div class="card-footer text-right">
                        <a class= "btn btn-info" href ="{{ route('about.edit',$about->id) }}"> Засах </a>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>

              
            </div>
          </div>
        </div>
      </div>
    </section>
  </div> 

@endsection