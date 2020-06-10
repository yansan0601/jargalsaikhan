@extends('layouts.admin.app')
@section('title','Мэдээ дэлгэрэнгүй')
@section('content')

    <div class="content-wrapper">
        <div class="content-header p-2"></div>

        <section class="content news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                        <h5 class="card-title">Мэдээ дэлгэрэнгүй</h5>
                        </div>

                        <div class="card-body p-3">
                        <div class="row">
                            <div class="col-sm-3">Гарчиг</div>
                            <div class="col-sm-9">{{$post->title}}</div>
                        </div>

                        <hr/>

                        <div class="row">
                            <div class="col-sm-3">Зураг</div>
                            <div class="col-sm-9"><%= image_tag(@post.image, class: 'custom-img', width: '50') if @post.image.attached? %></div>
                        </div>

                        <hr/>

                        <div class="row">
                            <div class="col-sm-3">Контент</div>
                            <div class="col-sm-9">{!! $post->body !!}</div>
                        </div>
            
                        <hr/>
                    </div>

                    <div class="card-footer text-right">
                        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                            <a class= "btn btn-info" href ="{{ route('posts.edit',$post->id) }}"> Засах </a>
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