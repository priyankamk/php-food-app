@extends('base')

@section('main')

<div class="row">
  <div class="col-sm-12">
    <h1 class="display-3">Foods</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Type</td>
        </tr>
      </thead>
      <tbody>
        @foreach($foods as $food)
        <tr>
          <td>{{$food->id}}</td>
          <td>{{$food->name}}</td>
          <td>{{$food->type}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div>
    </div>
    @endsection