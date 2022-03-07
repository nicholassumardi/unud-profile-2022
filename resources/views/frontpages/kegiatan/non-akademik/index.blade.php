@extends('frontpages/layouts/app')
@section('content')
<section id="section3" class="pt-5 mt-2 pagesection">
    <div class="container-fluid p-5">
        <div class="d-flex justify-content-center mb-5" data-aos="fade-down" data-aos-duration="2000"
            data-aos-once="true">
            <div class="mt-3 text-center">
                <h1 class="custom-title-allpage"><b>NON AKADEMIK</b></h1>
            </div>

        </div>

        <div class="py-5 mt-5" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
            <nav>
                <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Kegiatan</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Prestasi</button>

                </div>
            </nav>
            <div class="tab-content d-flex justify-content-center text-center align-items-center mt-5"
                id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="container mt-4 d-flex justify-content-center">
                        <div class="row g-0">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalKurikulum" id="pop"><img
                                    src="{{asset('storage/'. $dk->path_foto_kegiatan_nonakademik)}}?t=<?=time()?>" alt=""
                                    id="imageresource"class="img-fluid"></a>
                            {{-- @foreach ($dataKegiatan as $dk)
                            <div class="col-md-4 border-right">
                                <div class="cards2 d-flex align-items-center justify-content-center">
                                    <div class="first bg-white p-4 text-center"> <img class="images-for-card"
                                            src="{{asset('storage/'. $dk->path_foto_kegiatan_nonakademik)}}" />
                                        <h5 class="mt-2">{{$dk->title}}</h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach --}}

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row d-flex justify-content-center">
                        <div class="col-8" style="">
                            <h2> PRESTASI PESERTA DIDIK (NON AKADEMIK)</h2>
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
    <li><img src="{{asset('storage/'. $ds->path_foto_carousel_nonakademik)}}?t=<?=time()?>" class="" /></li>
    @endforeach
</ul>


<div class="modal fade" id="modalKurikulum" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img src="" id="imagepreview" class="img-fluid">
            </div>
        </div>
    </div>
</div>

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
    $("#pop").on("click", function() {
        $('#imagepreview').attr('src', $('#imageresource').attr('src')); 
    });
</script>
@endpush