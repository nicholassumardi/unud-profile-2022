@extends('admin/layouts/app')
@section('content')
<div class="page-heading">
    <h3>Visi & Misi</h3>
    <section class="section">
        <div class="card">
            <div class="card-header text-start">
                Visi & Misi
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
                        @foreach ($dataVisimisi as $dv)
                        <tr>
                            <td class="text-center">{{$dv->id_visimisi}}</td>
                            <td class="text-center"><img class="image-dt"
                                src="{{ asset('storage/' . $dv->path_foto_visimisi) }}" alt=""></td>
                            <td class="d-flex justify-content-center">
                                <a href="{{route('section2.edit', $dv->id_visimisi)}}"
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