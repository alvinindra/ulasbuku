@extends('admin.layouts.app', [
    'parentSection' => 'kelolaBuku',
    'elementName' => 'formBuku'
])

@section('content') 
    @component('admin.layouts.headers.auth') 
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title') 
                {{ __('Form Buku') }} 
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('admin.page.index', 'formBuku') }}">{{ __('Kelola Buku') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Form Buku') }}</li>
        @endcomponent 
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-wrapper">
                    <!-- Input groups -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <h3 class="mb-0">Form Buku</h3>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <form method="POST" action="{{ route('book.store') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Title</label>
                                    <div class="col-md-10">
                                        <input name="title" class="form-control" type="text" placeholder="" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Description</label>
                                    <div class="col-md-10">
                                        <textarea rows="10" name="description" class="form-control" type="text" placeholder="" id=""> </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Slug</label>
                                    <div class="col-md-10">
                                        <input name="slug" class="form-control" type="text" placeholder="" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Cover</label>
                                    <div class="col-md-10">
                                        <input name="cover" class="form-control" type="file" required placeholder="" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Category</label>
                                    <div class="col-md-10">
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
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Author</label>
                                    <div class="col-md-10">
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
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Publisher</label>
                                    <div class="col-md-10">
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

                                <button class="btn btn-primary" type="submit">Submit</button>
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