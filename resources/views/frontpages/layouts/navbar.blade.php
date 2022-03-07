<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-grad" style="width:100vw; height:auto;">
    <div class="container-md">
        <a class="navbar-brand" href="https://www.unud.ac.id/" target="_blank">
            <img src="{{asset('images/home/logo udayana.png')}}" class="customlogonavbar d-inline-block align-text-top">

        </a>
        <div class="vr mx-4 d-none d-lg-block"></div>


        <div class="search-box ms-2 d-lg-none d-block">
            <button class="btn-search"><i class="bi bi-search"></i></button>
        </div>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <a class="navbar-brand d-none d-lg-block" href="{{route('/')}}">
                    <img src="{{asset('images/home/logo udayana2.png')}}"
                        class="customlogonavbar2 d-inline-block align-text-top  ms-lg-1 ms-md-2">
                </a>

                <div class="container">
                    <div class="row mt-3 d-none d-lg-block">
                        <div class="col-12 nomargin2">
                            <img src="{{asset('images/home/logo udayana3.png')}}" class="customlogonavbar3" alt="">
                        </div>
                    </div>
                    <div class="row fontfornavlink">
                        <div class="col d-inline-flex flex-column flex-lg-row nomargin">
                            <li class="nav-item mx-2">
                                <a class="nav-link {{request()->is('/') ? ' active' : ''}}" aria-current="page"
                                    href="/">Beranda</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link {{request()->is('/berita') || request()->is('/berita/show')? ' active' : ''}}"
                                    aria-current="page" href="{{route('home.news')}}">Berita</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link {{request()->is('/#section2') ? ' active' : ''}}" aria-current="page"
                                    href="/#section2">Visi & Misi</a>
                            </li>
                            <li class="nav-item mx-2 dropdown">
                                <a class="nav-link {{request()->is('/sejarah') || request()->is('/staff') || request()->is('/#section2') || request()->is('/ppds-lulusan') || request()->is('/akreditasi') ? ' active' : ''}}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Profil
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{route('home.sejarah')}}">Sejarah</a></li>
                                    <li><a class="dropdown-item" href="{{route('home.staff')}}">Staf Pengajar</a></li>
                                    <li><a class="dropdown-item" href="{{route('home.ppds')}}">Lulusan & PPDS</a></li>
                                    <li><a class="dropdown-item" href="{{route('home.akreditasi')}}">Akreditasi</a></li>
                                    <li><a class="dropdown-item" href="{{route('home.struktur')}}">Struktur Organisasi</a></li>
                                  </ul>
                            </li>
                            
                            <li class="nav-item mx-2">
                                <a class="nav-link {{request()->is('akademik') ? ' active' : ''}}" aria-current="page"
                                    href="{{route('home.akademik')}}">Akademik</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link {{request()->is('non-akademik') ? ' active' : ''}}"
                                    aria-current="page" href="{{route('home.nonakademik')}}">Non Akademik</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link {{request()->is('kontak') ? ' active' : ''}} " aria-current="page"
                                    href="{{route('home.kontak')}}">Kontak</a>
                            </li>

                        </div>
                    </div>
                </div>
            </ul>
        </div>
        <div class="search-box d-flex justify-content-center d-none d-lg-block me-xl-2">
            <button class="btn-search"><i class="bi bi-search"></i></button>
        </div>


    </div>
</nav>