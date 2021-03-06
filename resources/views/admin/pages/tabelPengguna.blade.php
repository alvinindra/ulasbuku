@extends('admin.layouts.app', [
    'parentSection' => 'kelolaPengguna',
    'elementName' => 'tabelPengguna'
])

@section('content') 
    @component('admin.layouts.headers.auth') 
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title') 
                {{ __('Tabel Pengguna') }} 
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('admin.page.index', 'tabelPengguna') }}">{{ __('Kelola Pengguna') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Tabel Pengguna') }}</li>
        @endcomponent 
    @endcomponent
    
    <div class="container-fluid mt--6">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        
                        <h3 class="mb-0">Tabel Pengguna</h3>
                        {{-- <p class="text-sm mb-0">
                            This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in order to get started
                            fast.
                        </p> --}}
                        
                    </div>
                    <div class="card-header">
                        <a href="{{ route('admin.page.index','formPengguna') }}" role="button" class="btn btn-primary ms-6">Tambah Pengguna</a>
                    </div>
                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-basic">
                            <thead class="thead-light">
                                <tr>
                                    <th>action</th>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>email_verified_at</th>
                                    <th>password</th>
                                    <th>remember_token</th>
                                    <th>created_at</th>
                                    <th>updated_at</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#" role="button" class="btn btn-info btn-sm">Ubah</a>
                                        <a href="#" role="button" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                    <td>1</td>
                                    <td>Dadang</td>
                                    <td>dadang@email.com</td>
                                    <td>2012-06-06 05:43:45 </td>
                                    <td>*********</td>
                                    <td>TKuElXCE1O</td>
                                    <td>2012-06-06 05:43:45</td>
                                    <td>2012-06-06 05:43:45</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" role="button" class="btn btn-info btn-sm">Ubah</a>
                                        <a href="#" role="button" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                    <td>2</td>
                                    <td>Dayat</td>
                                    <td>dayat@email.com</td>
                                    <td>2012-06-06 05:43:45 </td>
                                    <td>*********</td>
                                    <td>TKuElXCE1O</td>
                                    <td>2012-06-06 05:43:45</td>
                                    <td>2012-06-06 05:43:45</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" role="button" class="btn btn-info btn-sm">Ubah</a>
                                        <a href="#" role="button" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                    <td>3</td>
                                    <td>Tatang</td>
                                    <td>dadang@email.com</td>
                                    <td>2012-06-06 05:43:45</td>
                                    <td>*********</td>
                                    <td>TKuElXCE1O</td>
                                    <td>2012-06-06 05:43:45</td>
                                    <td>2012-06-06 05:43:45</td>
                                </tr>
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