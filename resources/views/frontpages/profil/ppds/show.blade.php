@extends('frontpages/layouts/app')
@section('content')
@include('frontpages/layouts/rightbar')
<section id="section3" class="py-2 pagesection">
    <div>
        <div class=" mt-5 row d-flex justify-content-evenly" data-aos="fade-right" data-aos-duration="2000">
            <div
                class="col-md-5 order-md-2 text-center text-center d-flex justify-content-center align-items-center flex-column">
                <h2>
                    {!! $dp->nama!!}
                </h2>
                <h5>
                    {{$dp->ttl}}
                </h5>
                <p>
                    {!! $dp->content!!}
                    
                </p>
            </div>

            <div class="col-md-5 order-md-1 text-center">
                <div class="d-flex justify-content-center">
                  <img src="{{asset('storage/' . $dp->path_foto_ppds)}}" alt="" class="img-fluid img-thumbnail">
                </div>

            </div>

        </div>
    </div>
    </div>

</section>
@endsection