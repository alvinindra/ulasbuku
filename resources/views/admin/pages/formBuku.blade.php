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
                            <form method="POST" action="">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Title</label>
                                    <div class="col-md-10">
                                        <input name="title" class="form-control" type="text" placeholder="" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Description</label>
                                    <div class="col-md-10">
                                        <input name="description" class="form-control" type="text" placeholder="" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Cover</label>
                                    <div class="col-md-10">
                                        <input name="cover" class="form-control" type="text" placeholder="" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">ID Category</label>
                                    <div class="col-md-10">
                                        <input name="idCategory" class="form-control" type="text" placeholder="" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">ID Author</label>
                                    <div class="col-md-10">
                                        <input name="author" class="form-control" type="text" placeholder="" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">ID Publisher</label>
                                    <div class="col-md-10">
                                        <input name="idPublisher" class="form-control" type="text" placeholder="" id="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-datetime-local-input" class="col-md-2 col-form-label form-control-label">Created At</label>
                                    <div class="col-md-10">
                                        <input name="createdAt" class="form-control" type="date" value="2018-11-23" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-datetime-local-input" class="col-md-2 col-form-label form-control-label">Updated At</label>
                                    <div class="col-md-10">
                                        <input name="updatedAt" class="form-control" type="date" value="2018-11-23" id="">
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
        @include('admin.layouts.footers.auth')
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