@extends('layouts.app')

@section('content')

<div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Category</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('category.create') }}"> Add Category</a>
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
      <th scope="col">Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($category as $data)
    <tr>
      <th scope="row">{{ $data->id }}</th>
      <td>{{ $data->name_category}}</td>
      <td>
      <form action="{{ route('category.destroy',$data->id) }}" method="POST">
      <a class="btn btn-primary btn-sm" href="{{ route('category.edit',$data->id) }}">Edit</a> |
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Delete</button onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
      </form></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
