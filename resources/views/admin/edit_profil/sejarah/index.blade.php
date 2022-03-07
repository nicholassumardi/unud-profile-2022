@extends('admin/layouts/app')
@section('content')
<div class="page-heading">
    <h3>Sejarah</h3>
    <section class="section">
        <div class="card">
            <div class="card-header text-start">
                Sejarah
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
                        @foreach ($dataSejarah as $ds)
                        <tr>
                            <td>{!!$ds->content!!}</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{route('sejarah.edit', $ds->id_sejarah)}}"
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