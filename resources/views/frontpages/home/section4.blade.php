<section id="section4" class="py-3 pagesection">
    <div>
        <div class="container mb-5">
            <div class="row d-flex justify-content-center mb-5" data-aos="fade-right" data-aos-duration="2000">
                <div class="col-md-12 mt-3 text-center text-md-start custom-title-profile">
                    <h3><b>KEGIATAN</b></h3>
                </div>
            </div>

            <div class="row d-flex justify-content-between" data-aos="fade-down" data-aos-duration="2000"
                data-aos-delay="500">
                @foreach ($dataKegiatan as $dk)
                <div class="col-md-6 text-center mb-3" {{--style="padding: 5px !important; "--}}>
                    <a href="{{route($dk->route)}}" class="d-flex justify-content-center align-items-center"> <img
                            src="{{asset('storage/' .  $dk->path_foto_kegiatan)}}?t=<?=time()?>" alt="" class="image">
                        <h3 class="custom-content-profile">{{$dk->content}}</h3>
                    </a>

                </div>
                @endforeach


            </div>
        </div>
    </div>
    </div>

</section>