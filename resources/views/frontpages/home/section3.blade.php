<section id="section3" class="pagesection">

    <div class="container">
        <div class="row d-flex justify-content-between mb-3" data-aos="fade-right" data-aos-duration="2000">
            <div class=" col-md-12 text-center text-md-start custom-title-profile">
                <h3><b>PROFIL</b></h3>
            </div>

        </div>

        <div class="row d-flex justify-content-evenly" data-aos="fade-up" data-aos-duration="2000">

            @foreach ($dataProfil as $dp)
            <div class="col-md-3 text-center mb-3">
                <a href="{{route($dp->route)}}" class="d-flex justify-content-center align-items-center"> <img
                        src="{{asset('storage/' . $dp->path_foto_profil)}}?t=<?=time()?>" alt="" class="image-profile">
                    <h3 class="custom-content-profile" style="text-transform: uppercase;">{!!$dp->content!!}</h3>
                </a>
            </div>
            @endforeach

        </div>
    </div>


</section>