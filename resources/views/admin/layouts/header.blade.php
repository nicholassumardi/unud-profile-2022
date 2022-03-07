<div id="main">
    
    <header class="mb-3">
        <div class="d-flex justify-content-between">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>

            <div class="dropdown ms-auto">
                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="user-menu d-flex">
                        <div class="user-name text-end me-3">
                            <h6 class="mb-0 text-gray-600"></h6>
                            <p class="mb-0 text-sm text-gray-600"></p>
                        </div>
                        <div class="user-img d-flex align-items-center">
                            <div class="avatar avatar-md">
                                <img src="{{asset('storage/' . $admin->path_foto)}}">
                            </div>
                        </div>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                    <li>
                        <h6 class="dropdown-header">Hello, {{ $admin->nama }}</h6>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{route('profile.index')}}"><i class="icon-mid bi bi-person-circle"></i> My Profile</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li><a class="dropdown-item" href="{{route('login.logout')}}"><i class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a>
                    </li>
                </ul>
            </div>

        </div>
        
        @include('admin/layouts/flash-message')
            
            

  


    </header>