@extends('admin.layouts.app', [
    'parentSection' => 'kelolaAuthor',
    'elementName' => 'tabelAuthor'
])

@section('content') 
    @component('admin.layouts.headers.auth') 
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title') 
                {{ __('Kelola Author') }} 
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('admin.page.index', 'tabelAuthor') }}">{{ __('Kelola Penulis') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Tabel Author') }}</li>
        @endcomponent 
    @endcomponent
    
    <div class="container-fluid mt--6">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        
                        <h3 class="mb-0">Tabel Author</h3>
                        {{-- <p class="text-sm mb-0">
                            This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in order to get started
                            fast.
                        </p> --}}
                        
                    </div>
                    <div class="card-header">
                        <a href="{{ url('admin/author/create') }}" role="button" class="btn btn-primary ms-6">Tambah Author</a>
                    </div>
                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-basic">
                            <thead class="thead-light">
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Author</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach ($author as $data)
                                <tr>
                                  <th>{{ ++$i }}</th>
                                  <td>{{ $data->name_author}}</td>
                                  <td>
                                  <form action="{{ route('author.destroy',$data->id) }}" method="POST">
                                  <a class="btn btn-primary btn-sm" href="{{ route('author.edit',$data->id) }}">Edit</a> |
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger btn-sm">Delete</button onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                  </form></td>
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