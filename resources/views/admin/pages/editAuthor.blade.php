@extends('admin.layouts.app', [
'parentSection' => 'kelolaAuthor',
'elementName' => 'formAuthor'
])

@section('content')
@component('admin.layouts.headers.auth')
@component('admin.layouts.headers.breadcrumbs')
@slot('title')
{{ __('Edit Author') }}
@endslot

<li class="breadcrumb-item"><a href="{{ route('admin.page.index', 'editAuthor') }}">{{ __('Kelola Author') }}</a></li>
<li class="breadcrumb-item active" aria-current="page">{{ __('Edit Author') }}</li>
@endcomponent
@endcomponent

<div class="container mt--6">
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
        <div class="col-lg-12">
            <div class="card-wrapper">
                <!-- Input groups -->
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">Form Author</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <form method="POST" action="{{ route('author.update',$author->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-md-2 col-form-label form-control-label">Author Name</label>
                                <div class="col-md-10">
                                    <input name="name_author" value="{{ $author->name_author }}" class="form-control"
                                        type="text" placeholder="" id="">
                                </div>
                            </div>

                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>
                </div>
                <!-- Dropdowns -->

            </div>
        </div>
    </div>
    <!-- Footer -->
    {{-- @include('admin.layouts.footers.auth') --}}
</div>
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('argon') }}/vendor/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="{{ asset('argon') }}/vendor/quill/dist/quill.core.css">
@endpush

@push('js')
<script src="{{ asset('argon') }}/vendor/select2/dist/js/select2.min.js"></script>
<script src="{{ asset('argon') }}/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="{{ asset('argon') }}/vendor/nouislider/distribute/nouislider.min.js"></script>
<script src="{{ asset('argon') }}/vendor/quill/dist/quill.min.js"></script>
<script src="{{ asset('argon') }}/vendor/dropzone/dist/min/dropzone.min.js"></script>
<script src="{{ asset('argon') }}/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
@endpush