@extends('admin/layouts/app')
@section('content')
<div class="page-heading">
    <h3>Lulusan & PPDS</h3>
    <section class="section">
        <div class="card">
            <div class="card-header text-start">
                Lulusan & PPDS
                {{-- <a href="{{route('ppds_lulusan.create')}}" class="btn btn-primary btn-sm">Create Data</a> --}}
            </div>
            <div class="card-body">
                <table class="table table-striped invisible" id="table1">
                    <thead>
                        <tr>
                            <th class="text-center">No </th>
                            {{-- <th class="text-center">Nama</th> --}}
                            {{-- <th class="text-center">TTL</th> --}}
                            <th class="text-center">Foto</th>
                            {{-- <th class="text-center">Status</th> --}}
                            {{-- <th class="text-center">Content</th> --}}
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataPpds as $key => $dp)
                        <tr>
                            <td class="text-center">{{$key+1}}</td>
                            {{-- <td class="text-center">{{$dp->nama}}</td>
                            <td class="text-center">{{$dp->ttl}}</td> --}}
                            <td class="text-center"><img class="image-dt"
                                    src="{{ asset('storage/' . $dp->path_foto_ppds) }}" alt=""></td>
                            {{-- <td class="text-center">
                                {{$dp->status
                                == 0 ?'Lulusan':'PPDS'}}

                            </td> --}}
                            {{-- <td class="text-center">{!! $dp->content !!}</td> --}}
                            <td class="d-flex justify-content-evenly">
                                <a href="{{route('ppds_lulusan.edit', $dp->id_ppds)}}"
                                    class="btn btn-sm btn-outline-secondary"><i
                                        class="bi bi-pen-fill text-success"></i></a>

                                {{-- <form action="{{route('ppds_lulusan.destroy', $dp->id_ppds)}}" method="POST"
                                    class="">
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
                title: "Delete data ?",
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