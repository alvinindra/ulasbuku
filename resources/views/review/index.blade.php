@extends('layouts.app')

@section('content')

<div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2></h2>
            </div>
            <div class="float-right">
            </div>
        </div>
</div>

@if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Review Content</th>
      <th scope="col">Rating</th>
      <th scope="col">Book</th>
      <th scope="col">User</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($review as $data)
    <tr>
      <th scope="row">{{ ++$i }}</th>
      <td>{{ $data->review_content}}</td>
      <td>{{ $data->rating}}</td>
      <td>{{ $data->book->title}}</td>
      <td>{{ $data->user->name}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
