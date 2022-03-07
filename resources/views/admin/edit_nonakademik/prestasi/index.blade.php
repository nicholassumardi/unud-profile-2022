@extends('admin/layouts/app')
@section('content')
<div class="page-heading">
    <h3>Prestasi Non Akademik</h3>
    <section class="section">
        <div class="card">
            <div class="card-header text-start">
                Prestasi Non Akademik
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th class="text-center">Content</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataPrestasi as $dp)
                        <tr>
                            <td>{!!$dp->content!!}</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{route('prestasiNonAkademik.edit', $dp->id_prestasi_nonakademik)}}"
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