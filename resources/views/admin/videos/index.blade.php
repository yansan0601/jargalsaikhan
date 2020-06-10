@extends('layouts.admin.app')
@section('title','Бичлэг удирдах хэсэг')
@section('content')

  <div class="content-wrapper">
    <div class="content-header p-2"></div>
      @if(Session::has('message'))
        <div class="alert alert-success text-center" role="alert">
            {{Session::get('message')}}
        </div>
      @endif
    <section class="content news">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Бичлэг</h5>
                <div class="card-tools">
                  <a class="btn btn-danger" href ="{{route('videos.create')}}" >
                    <i class="fa fa-plus"></i> Нэмэх
                  <a>
                </div>
              </div>

              <div class="card-body p-0">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="row list-header">
                      <div class="col-sm-11"></div>
                      <div class="col-sm-1"></div>
                    </div>
                    @foreach($videos as $video)
                      <a href="{{route('videos.show',$video->id)}}">
                        <div class="row list">
                          <div class="col-sm-11">{{$video->embed_code}}</div>
                          <div class="col-sm-1"><i class="fa fa-angle-right"></i></div>
                        </div>
                      </a>
                      <hr/>
                    @endforeach
                  </div>
                </div>
              </div>

              <div class="card-footer clearfix text-xs-center">
                <div class="pagination__wrapper">
                  <ul class="pagination">
                    {{ $videos->appends(['sort' => 'votes'])->links() }}
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div> 

@endsection