@extends('admin/layouts/app')
@section('content')
<div class="page-heading">
    <h3>Kegiatan</h3>
    <section class="section">
        <div class="card">
            <div class="card-header text-start">
                Kegiatan
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Foto</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataKegiatan as $dk)
                        <tr>
                            <td class="text-center">{{$dk->id_kegiatan}}</td>
                            <td class="text-center"><img class="image-dt"
                                    src="{{ asset('storage/' . $dk->path_foto_kegiatan) }}" alt=""></td>
                            <td class="d-flex justify-content-center">
                                <a href="{{route('section4.edit', $dk->id_kegiatan)}}"
                                    class="btn btn-sm btn-outline-secondary"><i
                                        class="bi bi-pen-fill text-success"></i></a>
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