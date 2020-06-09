@extends('layouts.admin.app')
 
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
                <h5 class="card-title">Мэдээ</h5>
                <div class="card-tools">
                  <a class="btn btn-danger"href="{{route('posts.create')}}" >
                    <i class="fa fa-plus"></i> Нэмэх
                  <a>
                </div>
              </div>

              <div class="card-body p-0">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="row list-header">
                      <div class="col-sm-3">Зураг</div>
                      <div class="col-sm-3">Гарчиг</div>
                      <div class="col-sm-5">Контент</div>
                      <div class="col-sm-1"></div>
                    </div>

                    @foreach($posts as $post)
                      <a href="{{route('posts.show',$post->id)}}">
                        <div class="row list">
                          <div class="col-sm-3"></div>
                          <div class="col-sm-3">{{$post->title}}</div>
                          <div class="col-sm-5">{{$post->body}}</div>
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
                  {{ $posts->appends(['sort' => 'votes'])->links() }}
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