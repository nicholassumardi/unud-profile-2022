<section id="section1" class="py-lg-3 padding-top padding-top-landscape pagesection">
    <div>
        <div id="carouselExampleDark" class="carousel carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">

                @foreach ($dataCarousel as $key => $ds)
              
                <div class="carousel-item {{$key === 0 ? 'active' : ''}}" data-bs-interval="4000">
                    <div class="row customrowhome">
                        <div class="col">
                            <h3 class="customtitle mt-4 mx-5 mb-1 " data-aos="fade-right" data-aos-duration="1500">
                                {!! $ds->content!!}</h3>
                            <div class="col" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="300"><a
                                    href="{{route('home.newsShow', $ds->id_carousel)}}"
                                    class="customlinkberita mx-5">{{$ds->link}}</a>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('home.newsShow', $ds->id_carousel)}}"><img
                            src="{{asset('storage/' . $ds->path_foto_carousel)}}?t=<?=time()?>"
                            class="mt-2 mt-md-2 custombg d-block-w-100"></a>
                </div>
                @endforeach



            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">

         
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">

     
            </button>
        </div>

    </div>
</section>