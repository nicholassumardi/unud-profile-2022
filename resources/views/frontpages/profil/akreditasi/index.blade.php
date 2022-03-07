@extends('frontpages/layouts/app')
@section('content')
@include('frontpages/layouts/rightbar')
<section id="section3" class="py-5 mt-2 pagesection">

    <div class="container-fluid mb-5">
        <div class="row d-flex justify-content-center mb-3">
            <div class="col-md-12 mt-3 text-center">
                <h1 class="custom-title-allpage"><b>AKREDITASI</b></h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center mb-5">
            <div class="col-md-6 mt-3 text-center">
                <h5>Berikut adalah sertifikat Akreditasi terbaru untuk program studi Bedah Plastik Rekonstruksi dan
                    Estetik
                    Universitas Udayana
                </h5>
            </div>
        </div>
        <div class="row d-flex justify-content-center mb-5">
            <div class="col-md-8 mt-3 text-center">
                <a href="#" data-bs-toggle="modal" data-bs-target="#modalAkreditasi" id="pop"> <img id="imageresource"
                        src="{{asset('images/akreditasi/1.jpg')}}" alt="" class="img-fluid image-akreditasi"></a>
            </div>
        </div>


    </div>



    <!-- Modal -->
    <div class="modal fade" id="modalAkreditasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" id="imagepreview" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
@push('js')
<script>
    $("#pop").on("click", function() {
   $('#imagepreview').attr('src', $('#imageresource').attr('src')); // here asign the image to the modal when the user click the enlarge link
//    $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
});
</script>
@endpush