@extends('layouts.admin.app')
@section('title','Намтар нэмэх')
@section('content')

<form action="{{ route('about.store') }}" method="POST">
    @csrf
  <div class="content-wrapper">
    <div class="content-header p-2"></div>
    <section class="content news">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Намтар нэмэх</h3>
              </div>
              <div class="card-body">
                @include('layouts.admin.errors')
                <div class="form-group">
                  <input type="text" name="body" class="form-control" placeholder="Намтар">
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