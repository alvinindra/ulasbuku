@extends('admin.layouts.app', [
'parentSection' => 'kelolaBuku',
'elementName' => 'tabelBuku'
])

@section('content')
@component('admin.layouts.headers.auth')
@component('admin.layouts.headers.breadcrumbs')
@slot('title')
{{ __('Kelola Buku') }}
@endslot

<li class="breadcrumb-item"><a href="{{ route('admin.page.index', 'tabelBuku') }}">{{ __('Kelola Buku') }}</a></li>
<li class="breadcrumb-item active" aria-current="page">{{ __('Tabel Buku') }}</li>
@endcomponent
@endcomponent

<div class="container-fluid mt--6">
    @if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <!-- Table -->
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">

                    <h3 class="mb-0">Tabel Buku</h3>

                </div>
                <div class="card-header customColor">
                    <a href="{{ url('admin/book/create') }}" role="button" class="btn btn-primary ms-6">Tambah Bukus</a>
                </div>
                <div class="table-responsive py-4">
                    <table class="table table-flush" id="datatable-basic">
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
                                <td><img src="{{ asset('assets/img/cover/' .$data->cover)}}" width="150px;"
                                        style="margin-right: 5px;"></td>
                                <td>{{ $data->title}}</td>
                                <td
                                    style="word-wrap: break-word;min-width: 300px;max-width: 300px; white-space: normal !important; ">
                                    {{ $data->description}}</td>
                                <td>{{ $data->category->name_category}}</td>
                                <td>{{ $data->author->name_author}}</td>
                                <td>{{ $data->publisher->name_publisher}}</td>
                                <td>
                                    <form action="{{ route('book.destroy',$data->id) }}" method="POST">
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('book.edit',$data->id) }}">Edit</a> |
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <!-- Footer -->
    {{-- @include('admin.layouts.footers.auth') --}}
</div>
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('argon') }}/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('argon') }}/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('argon') }}/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
@endpush

@push('js')
<script src="{{ asset('argon') }}/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
@endpush