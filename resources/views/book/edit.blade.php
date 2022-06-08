@extends('layouts.app')

@section('content')

<div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Update Book</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('book.index') }}"> Back</a>
            </div>
        </div>
</div>

@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif

<form action="{{ route('book.update',$book->id) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        @method('PUT')

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" value="{{ $book->title }}" class="form-control" placeholder="Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripiton:</strong>
                <input type="text" name="description" value="{{ $book->description }}" class="form-control" placeholder="Description">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cover:</strong>
                @if (isset ($book) && $book->cover)
                <p>
                    <br>
                    <img src="{{ asset('assets/img/cover/' .$book->cover)}}" style="max-height: 125px; max-width: 125px; margin-top: 7px;" alt="">
                </p>
                @endif
                <input type="file" name="cover" value="{{ $book->cover }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                <select name="id_category" class="form-control" value="{{ $book->category->name_category }}">
                <option>pilih Category</option>
                @foreach($category as $data)
                <option value="{{ $data->id }}" {{ $data->id == $book->id_category ? 'selected' : '' }}>{{ $data->name_category }}</option>
                @endforeach
            </select>
            @if ($errors->has('id_category'))
            <span class="help-block">
                <strong>{{ $errors->first('id_category') }}</strong>
            </span>
            @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Author:</strong>
                <select name="id_author" class="form-control" value="{{ $book->author->name_author }}">
                <option>pilih Author</option>
                @foreach($author as $data)
                <option value="{{ $data->id }}" {{ $data->id == $book->id_author ? 'selected' : '' }}>{{ $data->name_author }}</option>
                @endforeach
            </select>
            @if ($errors->has('id_author'))
            <span class="help-block">
                <strong>{{ $errors->first('id_author') }}</strong>
            </span>
            @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Publisher:</strong>
                <select name="id_publisher" class="form-control" value="{{ $book->publisher->name_publisher }}">
                <option>pilih Publisher</option>
                @foreach($publisher as $data)
                <option value="{{ $data->id }}" {{ $data->id == $book->id_publisher ? 'selected' : '' }}>{{ $data->name_publisher }}</option>
                @endforeach
            </select>
            @if ($errors->has('id_publisher'))
            <span class="help-block">
                <strong>{{ $errors->first('id_publisher') }}</strong>
            </span>
            @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
    </form>
@endsection
