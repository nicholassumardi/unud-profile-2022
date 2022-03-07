@extends('admin/layouts/app')
@section('content')
<div class="page-heading">
    <h3>Profil</h3>
    <section class="section">
        <div class="card">
            <div class="card-header text-start">
                Profil
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
                        @foreach ($dataProfil as $dp)
                        <tr>
                            <td class="text-center">{{$dp->id_profil}}</td>
                            <td class="text-center"><img class="image-dt"
                                    src="{{ asset('storage/' . $dp->path_foto_profil) }}" alt=""></td>
                            <td class="d-flex justify-content-center">
                                <a href="{{route('section3.edit', $dp->id_profil)}}"
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