@extends('frontpages/layouts/app')
@section('content')
@include('frontpages/layouts/rightbar')

<div class="col">
    <img src="{{asset('images/home/sejarah.jpg')}}" alt="" class="img-fluid">

    <div class="container mb-5 mt-5">
        <div class="row d-flex justify-content-evenly" data-aos="fade-right" data-aos-duration="2000"
            data-aos-once="true">
            <div class="col-md-12 mt-3  text-md-start">
                <h1 class="custom-title-allpage"><b>SEJARAH<br>PROGRAM STUDI</b></h1>

            </div>
            
        </div>

        <div class="row d-flex justify-content-between mt-5" data-aos="fade-right" data-aos-duration="2000"
            data-aos-delay="200" data-aos-once="true">
            <div class="col-md-8">
                @foreach ($dataSejarah as $ds)
                {!! $ds->content!!}
                @endforeach
            </div>
            <div class="col-md-2">

            </div>
        </div>
    </div>

    @endsection

    @push('js')

    @endpush