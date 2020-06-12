@extends('layouts.admin.app')
@section('title','Мэдээ засах')
@section('content')

<form action="{{ route('posts.update',$post->id) }}" method="POST",  enctype="multipart/form-data" files= "true">
    @csrf  

    @method('PUT')  
  <div class="content-wrapper">
    <div class="content-header p-2"></div>
    <section class="content news">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Намтар засах</h3>
              </div>
              <div class="card-body">
              @include('layouts.admin.errors')
              <div class="form-group">
                  <label> Зураг </label>
                  <img src="{{ asset('images/' . $post->image ) }}", style="width:80px;height:80px; margin-left: 10px; margin-bottom: 10px"> 
                  <input type="file" name="image" value="{{ $post->image }}" class="form-control">
                </div>

                <div class="form-group">
                  <label> Гарчиг </label>
                  <input type="text" name="title" value="{{$post->title}}" class="form-control" placeholder="Гарчиг">
                </div>

                <div class="form-group">
                  <label> Контент </label>
                  <textarea id="editor" name="body">{{$post->body}}</textarea>
                </div>
              <div class="card-footer text-right">
                <input type="submit" value= "Засах" class= "btn btn-secondary" %>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<% end %>
@endsection