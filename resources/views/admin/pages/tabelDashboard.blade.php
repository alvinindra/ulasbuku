@extends('admin.layouts.app', [
    'parentSection' => 'dashboard',
    'elementName' => 'tabelDashboard'
])

@section('content') 
    @component('admin.layouts.headers.auth') 
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title') 
                {{ __('Dashboard') }} 
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('admin.page.index', 'tabelDashboard') }}">{{ __('Dashboard') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Overview') }}</li>
        @endcomponent 
    @endcomponent
    
    <div class="container-fluid mt--6">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        
                        <h3 class="mb-0">Overview</h3>
                        {{-- <p class="text-sm mb-0">
                            This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in order to get started
                            fast.
                        </p> --}}
                        
                    </div>
                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-basic">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama User</th>
                                    <th>Judul Buku</th>
                                    <th>Penulis</th>
                                    <th>Rating</th>
                                    <th>Review</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dadang</td>
                                    <td>Man's Search For Meaning</td>
                                    <td>Viktor E. Frankl</td>
                                    <td>⭐️⭐️⭐️⭐️⭐️</td>
                                    <td>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet..</td>
                                    <td>8 Jun 2022</td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Dayat</td>
                                    <td>How To Win Friends And Influece People</td>
                                    <td>Dale Carnegie</td>
                                    <td>⭐️⭐️⭐️⭐️⭐️</td>
                                    <td>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet..</td>
                                    <td>6 Jun 2022</td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>Tatang</td>
                                    <td>Filosofi Teras</td>
                                    <td>Henry Manampiring</td>
                                    <td>⭐️⭐️⭐️⭐️⭐️</td>
                                    <td>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet..</td>
                                    <td>3 Jun 2022</td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>Tatang</td>
                                    <td>Filosofi Teras</td>
                                    <td>Henry Manampiring</td>
                                    <td>⭐️⭐️⭐️⭐️⭐️</td>
                                    <td>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet..</td>
                                    <td>3 Jun 2022</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tatang</td>
                                    <td>Filosofi Teras</td>
                                    <td>Henry Manampiring</td>
                                    <td>⭐️⭐️⭐️⭐️⭐️</td>
                                    <td>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet..</td>
                                    <td>3 Jun 2022</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tatang</td>
                                    <td>Filosofi Teras</td>
                                    <td>Henry Manampiring</td>
                                    <td>⭐️⭐️⭐️⭐️⭐️</td>
                                    <td>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet..</td>
                                    <td>3 Jun 2022</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tatang</td>
                                    <td>Filosofi Teras</td>
                                    <td>Henry Manampiring</td>
                                    <td>⭐️⭐️⭐️⭐️⭐️</td>
                                    <td>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet..</td>
                                    <td>3 Jun 2022</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tatang</td>
                                    <td>Filosofi Teras</td>
                                    <td>Henry Manampiring</td>
                                    <td>⭐️⭐️⭐️⭐️⭐️</td>
                                    <td>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet..</td>
                                    <td>3 Jun 2022</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tatang</td>
                                    <td>Filosofi Teras</td>
                                    <td>Henry Manampiring</td>
                                    <td>⭐️⭐️⭐️⭐️⭐️</td>
                                    <td>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet..</td>
                                    <td>3 Jun 2022</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tatang</td>
                                    <td>Filosofi Teras</td>
                                    <td>Henry Manampiring</td>
                                    <td>⭐️⭐️⭐️⭐️⭐️</td>
                                    <td>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet..</td>
                                    <td>3 Jun 2022</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tatang</td>
                                    <td>Filosofi Teras</td>
                                    <td>Henry Manampiring</td>
                                    <td>⭐️⭐️⭐️⭐️⭐️</td>
                                    <td>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet..</td>
                                    <td>3 Jun 2022</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tatang</td>
                                    <td>Filosofi Teras</td>
                                    <td>Henry Manampiring</td>
                                    <td>⭐️⭐️⭐️⭐️⭐️</td>
                                    <td>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet..</td>
                                    <td>3 Jun 2022</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tatang</td>
                                    <td>Filosofi Teras</td>
                                    <td>Henry Manampiring</td>
                                    <td>⭐️⭐️⭐️⭐️⭐️</td>
                                    <td>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet..</td>
                                    <td>3 Jun 2022</td>
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