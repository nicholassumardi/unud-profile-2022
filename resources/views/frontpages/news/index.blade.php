@extends('frontpages/layouts/app')
@section('content')
@include('frontpages/layouts/rightbar')

<div class="col">

    <div class="container-fluid mb-5 mt-5 py-5">
        <div class="row d-flex justify-content-center" data-aos="fade-down" data-aos-duration="2000"
            data-aos-once="true">
            <div class="col-md-12 mt-3 text-center">
                <h1 class="custom-title-allpage"><b>BERITA</b></h1>

            </div>
            {{-- <div class="col-md-6"></div> --}}
        </div>
        @php
        \Carbon\Carbon::setLocale('id');
        @endphp


        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">

                @foreach ($dataCarousel as $dc)
                <a href="{{route('home.newsShow', $dc->id_carousel)}}" class="col d-flex justify-content-center">
                    <div class="cards3  d-flex flex-md-column" data-aos="flip-left" data-aos-duration="2000"
                        data-aos-delay="500" data-aos-easing="linear" data-aos-once="true">
                        <div> <img src="{{asset('storage/'. $dc->path_foto_carousel)}}" alt="" class="img-card-custom">
                        </div>
                        <div class="container mt-3">
                            <h5><b>Berita</b></h5>
                            <h5 class="custom-date">{{
                                \Carbon\Carbon::parse($dc->tanggal_berita)->translatedFormat('d F
                                Y') }}</h5>
                            <h3 class="custom-news-title">{{$dc->judul_berita}}</h3>
                        </div>
                    </div>
                </a>
                @endforeach


            </div>
            <div class="d-flex justify-content-center mt-5">
                <nav aria-label="...">
                    <ul class="pagination pagination-md">
                        {!! $dataCarousel->links() !!}
                    </ul>
                </nav>
            </div>


        </div>




    </div>
</div>

@endsection

@push('js')

@endpush