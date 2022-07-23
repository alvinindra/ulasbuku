<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner scroll-scrollx_visible">
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="{{ url('admin/book') }}">
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
                    <li class="nav-item">
                        <a href="{{ url('admin/book') }}">
                            <div class="nav-link {{ $parentSection == 'kelolaBuku' ? 'active' : '' }}">
                                <i class="ni ni-books"></i>
                                <span
                                    class="nav-link-text {{ $parentSection == 'kelolaBuku' ? 'font-weight-bold active' : '' }}">{{
                                    __('Kelola Buku') }}</span>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ $parentSection == 'kelolaReview' ? 'active' : '' }}"
                            href="{{ url('admin/review') }}">
                            <i class="ni ni-chat-round"></i>
                            <span
                                class="nav-link-text {{ $parentSection == 'kelolaReview' ? 'font-weight-bold active' : '' }}">{{
                                __('Kelola Review') }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $parentSection == 'kelolaAuthor' ? 'active' : '' }}"
                            href="{{ url('admin/author') }}">
                            <i class="ni ni-single-02"></i>
                            <span
                                class="nav-link-text {{ $parentSection == 'kelolaAuthor' ? 'font-weight-bold active' : '' }}">{{
                                __('Kelola Author') }}</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ $parentSection == 'kelolaKategori' ? 'active' : '' }}"
                            href="{{ url('admin/category') }}">
                            <i class="ni ni-bullet-list-67"></i>
                            <span
                                class="nav-link-text {{ $parentSection == 'kelolaKategori' ? 'font-weight-bold active' : '' }}">{{
                                __('Kelola Kategori') }}</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ $parentSection == 'kelolaPublisher' ? 'active' : '' }}"
                            href="{{ url('/admin/publisher') }}">
                            <i class="ni ni-building"></i>
                            <span
                                class="nav-link-text {{ $parentSection == 'kelolaPublisher' ? 'font-weight-bold active' : '' }}">{{
                                __('Kelola Publisher') }}</span>
                        </a>
                    </li>
            </div>
            </ul>
        </div>
    </div>
</nav>