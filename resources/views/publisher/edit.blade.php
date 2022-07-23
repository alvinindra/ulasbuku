@extends('layouts.app')

@section('content')

<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Update Publisher</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('publisher.index') }}"> Back</a>
        </div>
    </div>
</div>

<form action="{{ route('publisher.update',$publisher->id) }}" method="POST">
    @csrf
    @method('PUT')
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
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Publisher:</strong>
                <input type="text" name="name_publisher" value="{{ $publisher->name_publisher }}" class="form-control"
                    placeholder="Publisher">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>

</form>
@endsection