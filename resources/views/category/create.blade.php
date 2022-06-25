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

<form action="{{ route('category.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                <input type="text" name="name_category" class="form-control" placeholder="Category">
            </div>
            <div class="form-group">
                <strong>Slug:</strong>
                <input type="text" name="slug" class="form-control" placeholder="Slug">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection