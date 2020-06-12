@extends('layouts.admin.app')
@section('title','Мэдээ нэмэх')
@section('content')

   
<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" files= "true" >
    @csrf
    {{csrf_field()}}
  <div class="content-wrapper">
    <div class="content-header p-2"></div>
    <section class="content news">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Мэдээ нэмэх</h3>
              </div>
              <div class="card-body">
                @include('layouts.admin.errors')

                <div class="form-group">
                  <label> Зураг </label>
                  <p>Зурагны хэмжээ 400x400 байх ёстой.</p>
                  <input type="file" name="image" class="form-control">
                </div>

                <div class="form-group">
                  <label> Гарчиг </label>
                  <input type="text" name="title" class="form-control" placeholder="Гарчиг">
                </div>

                <div class="form-group">
                  <label> Контент </label>
                  <textarea id="editor" name="body"></textarea>
                </div>

              </div>

              <div class="card-footer text-right">
                <input type="submit" value= "Оруулах" class= "btn btn-secondary" %>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<% end %>
@endsection