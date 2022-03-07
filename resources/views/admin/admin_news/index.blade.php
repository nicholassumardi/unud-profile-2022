@extends('admin/layouts/app')
@section('content')
<div class="page-heading">
    <h3>News</h3>
    <section class="section">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                News
                <a href="{{route('news.create')}}" class="btn btn-primary btn-sm">Create News</a>
            </div>
            <div class="card-body">
                <table class="table table-striped invisible" id="table1">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Created Date</th>
                            <th>Konten</th>
                            <th>Status</th>
                            <th>Foto 1</th>
                            <th>Foto 2</th>
                            <th>Foto 3</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataCarousel as $dc)
                        <tr>
                            <td class="text-center">{{$dc->judul_berita}}</td>
                            <td class="text-center">{{$dc->tanggal_berita}}</td>
                            <td class="text-center">{{$dc->konten}}</td>
                            <td class="text-center text-light badge {{$dc->status==1?'bg-success':'bg-danger'}}">
                                {{$dc->status==1?'Active':'Inactive'}}</td>
                            <td class="text-center"><img class="image-dt"
                                    src="{{asset('storage/' . $dc->path_foto_carousel2)}}" alt=""></td>
                            <td class="text-center"><img class="image-dt"
                                    src="{{asset('storage/' . $dc->path_foto_carousel3)}}"></td>
                            <td class="text-center"><img class="image-dt"
                                    src="{{asset('storage/' .$dc->path_foto_carousel4)}}"></td>
                            <td class="d-flex justify-content-evenly">
                                <a href="{{route('news.edit', $dc->id_carousel)}}"
                                    class="btn btn-sm btn-outline-secondary"><i
                                        class="bi bi-pen-fill text-success"></i></a>

                                <form action="{{route('news.deactiveNews',  $dc->id_carousel)}}" method="POST" class="">
                                    @method('PATCH')
                                    @csrf
                                    <button type="button" class="btn btn-sm btn-outline-secondary js-button-submit"><i
                                            class="bi bi-trash2-fill text-danger"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
@endsection

@push('js')

<script>
    $(function () {
        // Tampilkan tabel setelah #dataTable telah terload sepenuhnya.
        $("#table1").removeClass("invisible");

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-primary',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: true
        });

        // Button Delete
        $("#table1").on("click", ".js-button-submit", function () {
            swalWithBootstrapButtons.fire({
                title: "Inactive News?",
                text: "Are you sure want to make change to this news ?",
                icon: "warning",
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonText: "Yes!",
                cancelButtonText: "Cancel!",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).parent().submit();
                }
            });
        });
    });
</script>

@endpush