@extends('frontpages/layouts/app')
@section('content')
<section id="section3" class="py-5 mt-2 pagesection">

    <div class="container-fluid mb-5">
        <div class="row d-flex justify-content-center mb-5" data-aos="fade-down" data-aos-duration="2000"
            data-aos-once="true">
            <div class="col-md-12 mt-3 text-center">
                <h1 class="custom-title-allpage"><b>{{ $page == 1 ? 'Lulusan' : 'PPDS'}}</b></h1>
            </div>
        </div>
        <div class="" data-aos="fade-up" data-aos-duration="2000"
            data-aos-delay="500">

            @foreach ($dataPpds as $dp)
            <div class="container-fluid d-flex justify-content-center"> <img
                    src="{{asset('storage/' . $dp->path_foto_ppds)}}" alt="" class="" style="width:100vw; height: auto;" ></div>
            @endforeach


            {{-- @foreach ($dataPpds as $dp)
            <div class="col text-center d-flex justify-content-center mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('storage/' . $dp->path_foto_ppds)}}" class="card-img-top image-card" alt="...">
                    <div class="card-body">
                        <b>{{$dp->status
                            == 1 ?'Lulusan':'PPDS'}}</b>
                        <h5 class="card-title">{{$dp->nama}}
                        </h5>
                        <p class="card-text">{{$dp->ttl}}
                        </p>
                        <a href="{{route('home.ppdsShow', $dp->id_ppds)}}" class="btn custom-button-card">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach --}}
        </div>

        <div class="d-flex justify-content-center mt-5">
            <nav aria-label="...">
                <ul class="pagination pagination-md">
                    {!! $dataPpds->links()!!}
                </ul>
            </nav>
        </div>

    </div>

</section>
@endsection