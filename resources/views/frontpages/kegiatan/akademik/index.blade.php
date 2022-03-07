@extends('frontpages/layouts/app')
@section('content')
<section id="section3" class="pt-5 mt-2 pagesection">
    <div class="container-fluid  p-5">
        <div class="d-flex justify-content-center mb-5" data-aos="fade-down" data-aos-duration="2000"
            data-aos-once="true">
            <div class="mt-3 text-center">
                <h1 class="custom-title-allpage"><b>AKADEMIK</b></h1>
            </div>

        </div>

        <div class="py-5 mt-5" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
            <nav>
                <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-kegiatan-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-kegiatan" type="button" role="tab" aria-controls="nav-kegiatan"
                        aria-selected="true">Kegiatan</button>
                    <button class="nav-link" id="nav-kurikulum-tab" data-bs-toggle="tab" data-bs-target="#nav-kurikulum"
                        type="button" role="tab" aria-controls="nav-kurikulum" aria-selected="false">Kurikulum</button>
                    <button class="nav-link" id="nav-prestasi-tab" data-bs-toggle="tab" data-bs-target="#nav-prestasi"
                        type="button" role="tab" aria-controls="nav-prestasi" aria-selected="false">Prestasi</button>

                </div>
            </nav>
            <div class="tab-content d-flex justify-content-center text-center align-items-center mt-5"
                id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-kegiatan" role="tabpanel"
                    aria-labelledby="nav-kegiatan-tab">
                    <div class="container mt-4 d-flex justify-content-center">
                        <div class="row g-0">
                           <a href="#" data-bs-toggle="modal" data-bs-target="#modalKurikulum5" id="pop5"><img src="{{asset('storage/'. $dk->path_foto_kegiatan_akademik)}}?t=<?=time()?>" alt="" id="imageresource5" class="img-fluid"></a> 
                            {{-- @foreach ($dataKegiatan as $dk)
                            <div class="col-md-6 border-right">
                                <div class="cards d-flex align-items-center justify-content-center">
                                    <div class="first bg-white p-4 text-center"> <img class="images-for-card"
                                            src="{{asset('storage/'. $dk->path_foto_kegiatan_akademik)}}" />
                                        <h5 class="mt-2">{{$dk->title}}</h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach --}}
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-kurikulum" role="tabpanel" aria-labelledby="nav-kurikulum-tab">
                    <div class="row mt-5 d-flex justify-content-center text-center">
                        <div class="col-8" style="">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalKurikulum0" id="pop"><img
                                    class="img-fluid image-akreditasi" src="{{asset('images/kurikulum/1.jpg')}}" alt=""
                                    id="imageresource"></a>
                        </div>
                    </div>
                    <div class="row mt-2  d-flex justify-content-center text-center">
                        <div class="col-8" style="">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalKurikulum1" id="pop1"><img
                                    class="img-fluid image-akreditasi" src="{{asset('images/kurikulum/2.jpg')}}" alt=""
                                    id="imageresource1"></a>
                        </div>
                    </div>
                    <div class="row mt-2  d-flex justify-content-center text-center">
                        <div class="col-8" style="">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalKurikulum2" id="pop2"><img
                                    class="img-fluid image-akreditasi" src="{{asset('images/kurikulum/3.jpg')}}" alt=""
                                    id="imageresource2"></a>
                        </div>
                    </div>
                    <div class="row mt-2  d-flex justify-content-center text-center">
                        <div class="col-8" style="">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalKurikulum3" id="pop3"><img
                                    class="img-fluid image-akreditasi" src="{{asset('images/kurikulum/4.jpg')}}" alt=""
                                    id="imageresource3"></a>
                        </div>
                    </div>
                    <div class="row mt-2  d-flex justify-content-center text-center">
                        <div class="col-8" style="">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalKurikulum4" id="pop4"><img
                                    class="img-fluid image-akreditasi" src="{{asset('images/kurikulum/5.jpg')}}" alt=""
                                    id="imageresource4"></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-prestasi" role="tabpanel" aria-labelledby="nav-prestasi-tab">
                    <div class="row d-flex justify-content-center">
                        <div class="col-8" style="">
                            <h2> PRESTASI PESERTA DIDIK</h2>
                        </div>
                    </div>
                    <div class="row mt-5 d-flex justify-content-center text-center">
                        <div class="col-12" style="">
                            @foreach ($dataPrestasi as $dp)
                            {!!$dp->content!!}
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- End rounded tabs -->



</div>
<ul id="rcbrand1">
    @foreach ($dataCarousel as $ds)
    <li><img src="{{asset('storage/'. $ds->path_foto_carousel_akademik)}}" class="" /></li>
    @endforeach
</ul>


<!-- Modal -->

@for($i=0; $i<6; $i++) <div class="modal fade" id="modalKurikulum{{$i}}" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img src="" id="imagepreview{{$i}}" class="img-fluid">
            </div>
        </div>
    </div>
    </div>
    @endfor






    @endsection

    @push('js')
    <script>
        $("#rcbrand1").rcbrand({
        visibleItems: 5.5,
        itemsToScroll: 1,
        animationSpeed: 1000,
        infinite: true,
        navigationTargetSelector: null,
        autoPlay: {
            enable: true,
            interval: 5000,
            pauseOnHover: true
        },
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 3.5,
                itemsToScroll: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 3.5,
                itemsToScroll: 1
            },
            tablet: { 
                changePoint:768,
                visibleItems: 5.5,
                itemsToScroll: 1
            }
        }
    });

    $("#pop, #pop1, #pop2, #pop3, #pop4, #pop5").on("click", function() {
        $('#imagepreview0').attr('src', $('#imageresource').attr('src')); 
        $('#imagepreview1').attr('src', $('#imageresource1').attr('src')); 
        $('#imagepreview2').attr('src', $('#imageresource2').attr('src')); 
        $('#imagepreview3').attr('src', $('#imageresource3').attr('src')); 
        $('#imagepreview4').attr('src', $('#imageresource4').attr('src')); 
        $('#imagepreview5').attr('src', $('#imageresource5').attr('src')); 
    });
    </script>
    @endpush