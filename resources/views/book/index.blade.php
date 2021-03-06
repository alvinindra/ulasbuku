@extends('layouts.app')

@section('content')

<div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Book</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('book.create') }}"> Add Book</a>
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
      <th scope="col">Cover</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Author</th>
      <th scope="col">Publisher</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($book as $data)
    <tr>
      <th scope="row">{{ ++$i }}</th>
      <td><img src="{{ asset('assets/img/cover/' .$data->cover)}}" width="150px;" style="margin-right: 5px;"></td>
      <td>{{ $data->title}}</td>
      <td>{{ $data->description}}</td>
      <td>{{ $data->category->name_category}}</td>
      <td>{{ $data->author->name_author}}</td>
      <td>{{ $data->publisher->name_publisher}}</td>
      <td>
      <form action="{{ route('book.destroy',$data->id) }}" method="POST">
      <a class="btn btn-primary btn-sm" href="{{ route('book.edit',$data->id) }}">Edit</a> |
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Delete</button onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
      </form></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
