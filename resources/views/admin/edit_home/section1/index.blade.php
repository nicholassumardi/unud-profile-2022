@extends('admin/layouts/app')
@section('content')
<div class="page-heading">
    <h3>Carousel</h3>
    <section class="section">
        <div class="card">
            <div class="card-header text-start">
                Carousel
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Navigation</th>
                            <th class="text-center">Content</th>
                            <th class="text-center">Foto</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataCarousel as $dc)
                        <tr>
                            <td class="text-center">{{$dc->id_carousel}}</td>
                            <td class="text-center">{{$dc->link}}</td>
                            <td class="text-center">{!!$dc->content!!}</td>
                            <td class="text-center"><img class="image-dt"
                                src="{{ asset('storage/' . $dc->path_foto_carousel) }}" alt=""></td>
                            <td class="d-flex justify-content-center">
                                <a href="{{route('section1.edit', $dc->id_carousel)}}"
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