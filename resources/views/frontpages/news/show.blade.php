@extends('frontpages/layouts/app')
@section('content')
@include('frontpages/layouts/rightbar')

<div class="col container pt-5">
    <div class="pt-5">
        {{-- <div class="d-flex justify-content-center">
            <img src="{{asset('storage/' .  $dc->path_foto_berita)}}" alt="" class="custombg img-fluid">
        </div> --}}


        {{-- <div class="container-fluid mb-5 mt-5">
            <div class="row d-flex justify-content-evenly">
                <div class="col-md-12  text-md-start">
                    <a href="{{route('home.news')}}"> <button class="custom-news-button"><b>KEMBALI KE DAFTAR
                                BERITA</b></button></a>
                    <h1 class="custom-title-news mt-4" style="text-transform: uppercase;"><b>{{$db->judul_berita}}</b>
                    </h1>

                </div>
            </div>

            <div class="row mb-4 mt-2">
                <div class="col-md-12">
                    <h5 class="custom-date2">{{\Carbon\Carbon::parse($db->tanggal_berita)->translatedFormat('d F Y')}}
                    </h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 custom-news-content">
                    {!!$db->isi_berita!!}
                </div>
            </div>
        </div> --}}

        <div class="container d-flex flex-column justify-content-center mt-5 mb-5">
            <img src="{{asset('storage/' .  $dc->path_foto_carousel2)}}" alt="" class=" img-fluid">
            <img src="{{asset('storage/' .  $dc->path_foto_carousel3)}}" alt="" class=" img-fluid">
            <img src="{{asset('storage/' .  $dc->path_foto_carousel4)}}" alt="" class=" img-fluid">
        </div>
    </div>
</div>

@endsection

@push('js')

@endpush