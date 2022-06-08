@extends('layouts.app')

@section('content')

<div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Author</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('author.create') }}"> Add Author</a>
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
      <th scope="col">Author</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($author as $data)
    <tr>
      <th scope="row">{{ $data->id }}</th>
      <td>{{ $data->name_author}}</td>
      <td>
      <form action="{{ route('author.destroy',$data->id) }}" method="POST">
      <a class="btn btn-primary btn-sm" href="{{ route('author.edit',$data->id) }}">Edit</a> |
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Delete</button onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
      </form></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
