@extends('admin/layouts/app')
@section('content')
<div class="page-heading">
    <h3>Edit Data Lulusan & PPDS</h3>

    <div class="container-fluid mt--6">
        <form action="{{route('ppds_lulusan.update', $dp->id_ppds)}}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-end">
                    <a href="{{route('ppds_lulusan.index')}}" class="btn btn-outline-success btn-sm"><i
                            class="bi bi-arrow-left"></i> Back</a>
                </div>
                <div class="card-body p-5">
                    {{-- <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                            <h4>Nama <span class="text-danger">*</span></h4>
                        </label>

                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="nama" value="{{$dp->nama}}" required>
                        </div>

                    </div> --}}

                    {{-- <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                            <h4>TTL <span class="text-danger">*</span></h4>
                        </label>

                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="ttl" value="{{$dp->ttl}}" required>
                        </div>

                    </div> --}}

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                            <h4>Foto <span class="text-danger">*</span></h4>
                        </label>
                        <div class="col-sm-7">
                            <input class="form-control customicon" type="file" name="path_foto_ppds">
                        </div>

                    </div>
                    {{-- <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                            <h3>Status <span class="text-danger">*</span></h3>
                        </label>
                        <div class="col-sm-7">
                            <select class="form-control" id="" name="status">
                                <option value="0" @if ($dp->status == 0) {{ 'selected' }} @endif>1. Lulusan</option>
                                <option value="1" @if ($dp->status == 1) {{ 'selected' }} @endif>2. PPDS</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">

                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                            <h4>Content <span class="text-danger">*</span></h4>
                        </label>
                        <div class="col-sm-7">
                            <textarea name="content" id="summernote" value="{{$dp->content}}"></textarea>
                        </div>
                    </div>

                </div> --}}

                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Update</button>
                    </div>
                </div>

            </div>

        </form>
    </div>
    @endsection

    @push('js')
    <script>
        $('#summernote').summernote('code', {!! json_encode($dp->content) !!});
        // $('#summernote').summernote('code', $('input[name="content"]').val());
        $('#summernote').summernote({
            tabsize: 2,
            height: 200,
        });

        $('body').on('focus',".datepicker", function(){
            $(this).datepicker();
        });
    </script>
    @endpush