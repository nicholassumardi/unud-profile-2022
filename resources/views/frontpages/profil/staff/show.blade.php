@extends('frontpages/layouts/app')
@section('content')
@include('frontpages/layouts/rightbar')
<section id="section3" class="py-2 pagesection">
    <div>

        <div class="container-fluid mt-5">
            <div class="row d-flex justify-content-evenly" data-aos="fade-right" data-aos-duration="2000">
                <div
                    class="col-md-5 order-md-2 text-center text-center d-flex justify-content-center align-items-center flex-column">
                    <h2>{{$ds->nama}}

                    </h2>
                    <h5>
                        {{$ds->ttl}}

                    </h5>
                    <p>
                        {!!$ds->content!!}
                    </p>
                </div>

                <div class="col-md-5 order-md-1 text-center">
                    <div class="d-flex justify-content-center">
                        <a href=""><img src="{{asset('storage/' . $ds->path_foto_staff)}}" alt="" class="img-fluid"></a>
                    </div>

                </div>

            </div>
        </div>
    </div>

</section>
@endsection