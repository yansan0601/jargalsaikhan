@extends('layouts.admin.app')
@section('title','Намтар засах')
@section('content')

<form action="{{ route('about.update',$about->id) }}" method="POST">
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
                  <label> Гарчиг </label>
                  <textarea id="editor" name="body">{{$about->body}}</textarea>
                </div>
              <div class="card-footer text-right">
                <input type="submit" value= "Засах" class= "btn btn-secondary" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<% end %>
@endsection