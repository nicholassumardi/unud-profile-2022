<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <a href=""><img src="{{asset('images/udayana2.png')}}" alt="Logo" srcset=""></a>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item {{request()->is('admin/dashboard') ? ' active' : ''}}">
                        <a href="{{route('admin.index')}}" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li
                        class="sidebar-item  has-sub {{request()->is('admin/news') || request()->is('admin/news/create') || request()->is('admin/news/edit')  ? ' active' : ''}}">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-newspaper"></i>
                            <span>News</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{route('news.index')}}">News</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('news.create')}}">Create News</a>
                            </li>

                        </ul>
                    </li>
                    <li
                        class="sidebar-item  has-sub {{request()->is('admin/section1') || request()->is('admin/section1/edit') || request()->is('admin/section2') || request()->is('admin/section2/edit') || request()->is('admin/section3') || request()->is('admin/section3/edit') || request()->is('admin/section4') || request()->is('admin/section4/edit') ? ' active' : ''}}">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-house-door"></i>
                            <span>Edit Home</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{route('section1.index')}}">Carousel Berita</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('section2.index')}}">Foto Visi & Misi</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('section3.index')}}">Foto Profil</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('section4.index')}}">Foto Kegiatan</a>
                            </li>
                        </ul>
                    </li>

                    <li
                        class="sidebar-item  has-sub {{request()->is('admin/staffPengajar') || request()->is('admin/staffPengajar/create') || request()->is('admin/staffPengajar/edit') || request()->is('admin/ppds_lulusan') || request()->is('admin/ppds_lulusan/create') || request()->is('admin/ppds_lulusan/edit') || request()->is('admin/sejarah')  || request()->is('admin/sejarah/edit') ? ' active' : ''}}">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-journals"></i>
                            <span>Profil Universitas</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{route('sejarah.index')}}">Sejarah</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('staffPengajar.index')}}">Staff</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('ppds_lulusan.index')}}">PPDS & LULUSAN</a>
                            </li>
                        </ul>
                    </li>

                    <li
                        class="sidebar-item  has-sub {{request()->is('admin/kegiatanAkademik') || request()->is('admin/kegiatanAkademik/create') || request()->is('admin/kegiatanAkademik/edit') || request()->is('admin/prestasiAkademik') || request()->is('admin/prestasiAkademik/edit') || request()->is('admin/carouselAkademik') || request()->is('admin/carouselAkademik/edit') ? ' active' : ''}}">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hospital"></i>
                            <span>Akademik</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{route('kegiatanAkademik.index')}}">Kegiatan</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('prestasiAkademik.index')}}">Prestasi</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('carouselAkademik.index')}}">Carousel</a>
                            </li>
                        </ul>
                    </li>
                    <li
                        class="sidebar-item  has-sub {{request()->is('admin/kegiatanNonAkademik') || request()->is('admin/kegiatanNonAkademik/create') || request()->is('admin/kegiatanNonAkademik/edit') || request()->is('admin/prestasiNonAkademik') || request()->is('admin/prestasiNonAkademik/edit') || request()->is('admin/carouselNonAkademik') || request()->is('admin/carouselNonAkademik/edit') ? ' active' : ''}}">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-heart-pulse"></i>
                            <span>Non Akademik</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{route('kegiatanNonAkademik.index')}}">Kegiatan</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('prestasiNonAkademik.index')}}">Prestasi</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('carouselNonAkademik.index')}}">Carousel</a>
                            </li>
                        </ul>
                    </li>



                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>