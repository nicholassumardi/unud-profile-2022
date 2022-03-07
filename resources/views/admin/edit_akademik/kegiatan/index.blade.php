@extends('admin/layouts/app')
@section('content')
<div class="page-heading">
    <h3>Kegiatan Akademik</h3>
    <section class="section">
        <div class="card">
            <div class="card-header text-start">
                Kegiatan Akademik
            </div>
            <div class="card-body">
                <table class="table table-striped invisible" id="table1">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            {{-- <th class="text-center">Title</th> --}}
                            <th class="text-center">Foto</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataKegiatan as $key => $dk)
                        <tr>
                            <td class="text-center">{{$key+1}}</td>
                            {{-- <td class="text-center">{{$dk->title}}</td> --}}
                            <td class="text-center"><img class="image-dt"
                                    src="{{ asset('storage/' . $dk->path_foto_kegiatan_akademik) }}" alt=""></td>
                            <td class="d-flex justify-content-center">
                                <a href="{{route('kegiatanAkademik.edit', $dk->id_kegiatan_akademik)}}"
                                    class="btn btn-sm btn-outline-secondary"><i
                                        class="bi bi-pen-fill text-success"></i></a>

                                {{-- <form action="{{route('kegiatanAkademik.destroy', $dk->id_kegiatan_akademik)}}"
                                    method="POST" class="">
                                    @method('DELETE')
                                    @csrf

                                    <button type="button" class="btn btn-sm btn-outline-secondary js-button-submit"><i
                                            class="bi bi-trash2-fill text-danger"></i></button>
                                </form> --}}
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
                title: "Delete kegiatan ?",
                text: "Are you sure want to make change to this data ?",
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