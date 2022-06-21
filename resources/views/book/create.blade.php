@extends('layouts.app')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> Input gagal.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <input type="text" name="description" class="form-control" placeholder="Description">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Slug:</strong>
                <input type="text" name="slug" class="form-control" placeholder="Slug">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1">Cover</label>
                <input name="cover" type="file" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                <select name="id_category" class="form-control">
                    <option>
                        @foreach($category as $data)
                    <option value="{{ $data->id }}">{{ $data->name_category }}</option>
                    @endforeach
                </select>
                @if ($errors->has('id_category'))
                <span class="help-block">
                    <strong>{{ $errors->first('id_category') }}</strong>
                </span>
                </option>
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Author:</strong>
                <select name="id_author" class="form-control">
                    <option>
                        @foreach($author as $data)
                    <option value="{{ $data->id }}">{{ $data->name_author }}</option>
                    @endforeach
                </select>
                @if ($errors->has('id_author'))
                <span class="help-block">
                    <strong>{{ $errors->first('id_author') }}</strong>
                </span>
                </option>
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Publisher:</strong>
                <select name="id_publisher" class="form-control">
                    <option>
                        @foreach($publisher as $data)
                    <option value="{{ $data->id }}">{{ $data->name_publisher }}</option>
                    @endforeach
                </select>
                @if ($errors->has('id_publisher'))
                <span class="help-block">
                    <strong>{{ $errors->first('id_publisher') }}</strong>
                </span>
                </option>
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection