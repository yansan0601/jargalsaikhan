@extends('layouts.admin.app')
@section('title','Намтар дэлгэрэнгүй')
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
                        <h5 class="card-title">Намтар дэлгэрэнгүй</h5>
                        </div>

                        <div class="card-body p-3">

                        <div class="row">
                            <div class="col-sm-3">Контент</div>
                            <div class="col-sm-9">
                                <div class="embed-container">
                                    {!! $video->embed_code !!}
                                </div>
                            </div>
                        </div>
            
                        <hr/>
                    </div>

                    <div class="card-footer text-right">
                        <form action="{{ route('videos.destroy', $video->id) }}" method="post">
                            <a class= "btn btn-info" href ="{{ route('videos.edit',$video->id) }}"> Засах </a>
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection