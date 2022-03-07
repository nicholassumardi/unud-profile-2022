@extends('frontpages/layouts/app')
@section('content')
<section id="section3" class="py-5 mt-2 pagesection">

    <div class="container-fluid mb-5">
        <div class="row d-flex justify-content-center mb-5" data-aos="fade-down" data-aos-duration="2000"
            data-aos-once="true">
            <div class="col-md-12 mt-3 text-center">
                <h1 class="custom-title-allpage"><b>STAF PENGAJAR</b></h1>
            </div>
        </div>
        <div class="" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">
            <div class="container-fluid d-flex justify-content-center"> <img
                    src="{{asset('storage/' . $ds->path_foto_staff)}}" alt="" class="" style="width:100vw; height: auto;" >
            </div>
            {{-- @foreach ($dataStaff as $ds)
            <div class="col d-flex justify-content-center">
                <div class="cards5  d-flex flex-md-column" data-aos="flip-left" data-aos-duration="2000"
                    data-aos-delay="500" data-aos-easing="linear" data-aos-once="true">
                    <div> <img src="{{asset('storage/' . $ds->path_foto_staff)}}" alt="" class="img-card-custom2">
                    </div>
                    <div class="container mt-3">
                        <h5><b>{{$ds->nama}}</b></h5>
                        <h5 class="custom-date">{{$ds->ttl}}</h5>
                    </div>
                </div>
            </div>
            @endforeach --}}

        </div>

        {{-- <div class="d-flex justify-content-center mt-5">
            <nav aria-label="...">
                <ul class="pagination pagination-md">
                    {!! $dataStaff->links() !!}
                </ul>
            </nav>
        </div> --}}

    </div>

</section>
@endsection