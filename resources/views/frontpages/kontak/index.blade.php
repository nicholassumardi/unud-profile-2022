@extends('frontpages/layouts/app')
@section('content')
@include('frontpages/layouts/rightbar')

<div class="col">

    <div class="container-fluid mb-5 mt-5 py-5">
        <div class="row d-flex justify-content-center" data-aos="fade-down" data-aos-duration="2000">
            <div class="col-md-12 mt-3 text-center">
                <h1 class="custom-title-allpage"><b>KONTAK</b></h1>

            </div>
            {{-- <div class="col-md-6"></div> --}}
        </div>
        <div class="row d-flex justify-content-center mb-5" data-aos="fade-down" data-aos-duration="2000">
            <div class="col-md-6 mt-3 text-center">
                <h5>Untuk informasi lebih lanjut, silahkan hubungi kami melalui kontak di bawah ini.
                </h5>
            </div>
        </div>

        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 g-4 mt-2" data-aos="fade-up" data-aos-duration="2000"
                data-aos-delay="400" data-aos-once="true">

                <div class="col d-flex justify-content-center">
                    <div class="cards4">
                        <div class="first bg-white p-4 text-center"> <img
                                src="https://img.icons8.com/clouds/100/000000/address.png" />
                            <h5>Address</h5>
                            <p class="custom-content-contact">RSUP Sanglah <br>Jl. Diponegoro, Dauh Puri Klod, Kec.
                                Denpasar Bar., Kota Denpasar, Bali 80113</p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="cards4">
                        <div class="first bg-white p-4 text-center"> <img
                                src="https://img.icons8.com/clouds/100/000000/email.png" />
                            <h5>Email</h5>
                            <p class="custom-content-contact">info@unud.ac.id</p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="cards4">
                        <div class="first bg-white p-4 text-center"> <img
                                src="https://img.icons8.com/clouds/100/print.png" />
                            <h5>Fax</h5>
                            <p class="custom-content-contact">+62 (361) 701907</p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="cards4">
                        <div class="first bg-white p-4 text-center"> <img
                                src="https://img.icons8.com/clouds/100/phone.png" />
                            <h5>Phone Number</h5>
                            <p class="custom-content-contact">RSUP Sanglah <br> (0361) 227912</p>
                        </div>
                    </div>
                </div>



            </div>


            <div class="mapouter mt-5">
                <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
                        marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=sanglah&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                        href="https://kokagames.com/">FNF</a></div>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        width: 100%;
                        height: 400px;
                    }

                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        width: 100%;
                        height: 400px;
                    }

                    .gmap_iframe {
                        height: 400px !important;
                    }
                </style>
            </div>
        </div>



    </div>
</div>

@endsection

@push('js')

@endpush