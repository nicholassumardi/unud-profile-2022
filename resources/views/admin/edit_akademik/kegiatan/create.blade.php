@extends('admin/layouts/app')
@section('content')
<div class="page-heading">
    <h3>Create Kegiatan Akademik</h3>

    <div class="container-fluid mt--6">
        <form action="{{route('kegiatanAkademik.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-end">
                    <a href="{{route('kegiatanAkademik.index')}}" class="btn btn-outline-success btn-sm"><i
                            class="bi bi-arrow-left"></i> Back</a>
                </div>
                <div class="card-body p-5">
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                            <h4>Title <span class="text-danger">*</span></h4>
                        </label>

                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="title" required>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                            <h4>Foto <span class="text-danger">*</span></h4>
                        </label>
                        <div class="col-sm-7">
                            <input class="form-control customicon" type="file" name="path_foto_kegiatan_akademik">
                        </div>

                    </div>

                </div>

                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Create</button>
                    </div>
                </div>

            </div>

        </form>
    </div>
    @endsection