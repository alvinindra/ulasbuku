<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner scroll-scrollx_visible">
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="{{ route('admin') }}">
                {{-- <img src="{{ asset('argon') }}/img/brand/blue.png" class="navbar-brand-img" alt="..."> --}}
                UlasBuku
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item {{ $parentSection == 'dashboards' ? 'active' : '' }}">
                        <a class="nav-link collapsed" href="{{ route('admin.page.index','tabelDashboard') }}" data-toggle="" role="button" aria-expanded="{{ $parentSection == 'dashboards' ? 'true' : '' }}" aria-controls="navbar-dashboards">
                            <i class="ni ni-shop text-primary"></i>
                            <span class="nav-link-text">{{ __('Dashboards') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'dashboards' ? 'show' : '' }}" id="navbar-dashboards">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'tabelDashboard' ? 'active' : '' }}">
                                    <a href="{{ route('admin.page.index','tabelDashboard') }}" class="nav-link">{{ __('Dashboard') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item class="nav-item {{ $parentSection == 'kelolaBuku' ? 'active' : '' }}"">
                        <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                            {{-- <i class="fab fa-laravel" style="color: #f4645f;"></i> --}}
                            <i class="ni ni-books"></i>
                            <span class="nav-link-text" style="color: #f4645f;">{{ __('Kelola Buku') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'kelolaBuku' ? 'show' : '' }}" id="navbar-examples">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'tabelBuku' ? 'active' : '' }}">
                                    <a href="{{ url('admin/book') }}" class="nav-link">{{ __('Tabel Buku') }}</a>
                                </li>
                                
                                {{-- @can('manage-users', App\Models\User::class)
                                    <li class="nav-item  {{ $elementName == 'role-management' ? 'active' : '' }}">
                                        <a href="{{ route('role.index') }}" class="nav-link">{{ __('Role Management') }}</a>
                                    </li>
                                @endcan
                                @can('manage-users', App\Models\User::class)
                                    <li class="nav-item {{ $elementName == 'user-management' ? 'active' : '' }}">
                                        <a href="{{ route('user.index') }}" class="nav-link">{{ __('User Management') }}</a>
                                    </li>
                                @endcan
                                @can('manage-items', App\Models\User::class)
                                    <li class="nav-item {{ $elementName == 'category-management' ? 'active' : '' }}">
                                        <a href="{{ route('category.index') }}" class="nav-link">{{ __('Category Management') }}</a>
                                    </li>
                                @endcan
                                @can('manage-items', App\Models\User::class)
                                    <li class="nav-item {{ $elementName == 'tag-management' ? 'active' : '' }}">
                                        <a href="{{ route('tag.index') }}" class="nav-link">{{ __('Tag Management') }}</a>
                                    </li>
                                @endcan
                                @can('manage-items', App\Models\User::class)
                                    <li class="nav-item {{ $elementName == 'item-management' ? 'active' : '' }}">
                                        <a href="{{ route('admin') }}" class="nav-link">{{ __('Item Management') }}</a>
                                    </li>
                                @else
                                    <li class="nav-item {{ $elementName == 'item-management' ? 'active' : '' }}">
                                        <a href="{{ route('admin') }}" class="nav-link">{{ __('Items') }}</a>
                                    </li>
                                @endcan --}}
                            </ul>
                        </div>
                    </li>
                    
                    <li class="nav-item {{ $parentSection == 'kelolaReview' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-components" data-toggle="collapse" role="button" aria-expanded="{{ $parentSection == 'kelolaReview' ? 'true' : '' }}" aria-controls="navbar-components">
                            {{-- <i class="ni ni-ui-04 text-info"></i> --}}
                            <i class="ni ni-chat-round"></i>
                            <span class="nav-link-text">{{ __('Kelola Review') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'kelolaReview' ? 'show' : '' }}" id="navbar-components">
                            <ul class="nav nav-sm flex-column">

                                <li class="nav-item {{ $elementName == 'tabelReview' ? 'active' : '' }}">
                                    <a href="{{ url('admin/review') }}" class="nav-link">{{ __('Tabel Reviews') }}</a>
                                </li>
                                
                                {{-- <li class="nav-item {{ $elementName == 'buttons' ? 'active' : '' }}">
                                    <a href="{{ route('admin.page.index','buttons') }}" class="nav-link">{{ __('Buttons') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'cards' ? 'active' : '' }}">
                                    <a href="{{ route('admin.page.index','cards') }}" class="nav-link">{{ __('Cards') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'grid' ? 'active' : '' }}">
                                    <a href="{{ route('admin.page.index','grid') }}" class="nav-link">{{ __('Grid') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'notifications' ? 'active' : '' }}">
                                    <a href="{{ route('admin.page.index','notifications') }}" class="nav-link">{{ __('Notifications') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'icons' ? 'active' : '' }}">
                                    <a href="{{ route('admin.page.index','icons') }}" class="nav-link">{{ __('Icons') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'typography' ? 'active' : '' }}">
                                    <a href="{{ route('admin.page.index','typography') }}" class="nav-link">{{ __('Typography') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#navbar-multilevel" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-multilevel">{{ __('Multi') }} level</a>
                                    <div class="collapse show" id="navbar-multilevel" style="">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="#!" class="nav-link ">{{ __('Thirdlevelmenu') }}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#!" class="nav-link ">{{ __('Justanotherlink') }}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#!" class="nav-link ">{{ __('Onelastlink') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li> --}}
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item {{ $parentSection == 'kelolaAuthor' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-forms" data-toggle="collapse" role="button" aria-expanded="{{ $parentSection == 'kelolaAuthor' ? 'true' : '' }}" aria-controls="navbar-forms">
                            {{-- <i class="ni ni-single-copy-04 text-pink"></i> --}}
                            <i class="ni ni-single-02"></i>
                            <span class="nav-link-text">{{ __('Kelola Author') }}</span>
                        </a>
                        
                        <div class="collapse {{ $parentSection == 'kelolaAuthor' ? 'show' : '' }}" id="navbar-forms">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'tabelAuthor' ? 'active' : '' }}">
                                    <a href="{{ url('admin/author') }}" class="nav-link">{{ __('Tabel Author') }}</a>
                                </li>
                                {{-- <li class="nav-item {{ $elementName == 'elements' ? 'active' : '' }}">
                                    <a href="{{ route('admin.page.index','elements') }}" class="nav-link">{{ __('Elements') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'components' ? 'active' : '' }}">
                                    <a href="{{ route('admin.page.index','components') }}" class="nav-link">{{ __('Components') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'validations' ? 'active' : '' }}">
                                    <a href="{{ route('admin.page.index','validation') }}" class="nav-link">{{ __('Validations') }}</a>
                                </li> --}}
                            </ul>
                        </div>
                    </li>
                    {{-- <li class="nav-item {{ $parentSection == 'kelolaPengguna' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-tables" data-toggle="collapse" role="button" aria-expanded="{{ $parentSection == 'kelolaPengguna' ? 'true' : '' }}" aria-controls="navbar-tables">
                            {{-- <i class="ni ni-align-left-2 text-default"></i> --}}
                            {{-- <i class="ni ni-circle-08"></i>
                            <span class="nav-link-text">{{ __('Kelola Pengguna') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'kelolaPengguna' ? 'show' : '' }}" id="navbar-tables">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'tabelPengguna' ? 'active' : '' }}">
                                    <a href="{{ route('admin.page.index','tabelPengguna') }}" class="nav-link">{{ __('Tabel Pengguna') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li> --}} 

                    <li class="nav-item {{ $parentSection == 'kelolaKategori' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-pages" data-toggle="collapse" role="button" aria-expanded="{{ $parentSection == 'kelolaKategori' ? 'true' : '' }}" aria-controls="navbar-tables">
                            {{-- <i class="ni ni-align-left-2 text-default"></i> --}}
                            <i class="ni ni-bullet-list-67"></i>
                            <span class="nav-link-text">{{ __('Kelola Kategori') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'kelolaKategori' ? 'show' : '' }}" id="navbar-pages">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'tabelKategori' ? 'active' : '' }}">
                                    <a href="{{ url('admin/category') }}" class="nav-link">{{ __('Tabel Kategori') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item {{ $parentSection == 'kelolaPublisher' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-maps" data-toggle="collapse" role="button" aria-expanded="{{ $parentSection == 'kelolaPublisher' ? 'true' : '' }}" aria-controls="navbar-forms">
                            {{-- <i class="ni ni-single-copy-04 text-pink"></i> --}}
                            <i class="ni ni-building"></i>
                            <span class="nav-link-text">{{ __('Kelola Publisher') }}</span>
                        </a>
                        
                        <div class="collapse {{ $parentSection == 'kelolaPublisher' ? 'show' : '' }}" id="navbar-maps">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'tabelPublisher' ? 'active' : '' }}">
                                    <a href="{{ url('/admin/publisher') }}" class="nav-link">{{ __('Tabel Publisher') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
</nav>
