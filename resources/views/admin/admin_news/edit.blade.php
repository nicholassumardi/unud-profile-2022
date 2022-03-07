@extends('admin/layouts/app')
@section('content')
<div class="page-heading">
    <h3>Edit News</h3>

    <div class="container-fluid mt--6">
        <form action="{{route('news.update', $dc->id_carousel)}}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-end">
                    <a href="{{route('news.index')}}" class="btn btn-outline-success btn-sm"><i
                            class="bi bi-arrow-left"></i> Back</a>
                </div>
                <div class="card-body p-5">

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                            <h3>Status <span class="text-danger">*</span></h3>
                        </label>
                        <div class="col-sm-7">
                            <select class="form-control" id="" name="status">
                                <option value="1" @if ($dc->status == 1) {{ 'selected' }} @endif>Active</option>
                                <option value="0" @if ($dc->status == 0) {{ 'selected' }} @endif>Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                            <h4>News Title <span class="text-danger">*</span></h4>
                        </label>

                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="judul_berita" value="{{$dc->judul_berita}}"
                                required>
                        </div>

                    </div>

                    <div class="form-group row position-relative has-icon-left mb-4">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                            <h4>Date <span class="text-danger">*</span></h4>
                        </label>

                        <div class="col-sm-7">
                            <div class="input-group">
                                <input class="form-control datepicker" placeholder="Select date" type="text"
                                    name="tanggal_berita"
                                    value="{{\Carbon\Carbon::parse($dc->tanggal_berita)->translatedFormat('m/d/Y') }}"
                                    autocomplete="off" required>
                                <div class="form-control-icon">
                                    <i class="bi bi-calendar-day"></i>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                            <h4>News Photo 1</h4>
                        </label>
                        <div class="col-sm-7">
                            <input class="form-control customicon" type="file" name="path_foto_carousel2">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                            <h4>News Photo 2</h4>
                        </label>
                        <div class="col-sm-7">
                            <input class="form-control customicon" type="file" name="path_foto_carousel3">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                            <h4>News Photo 3</h4>
                        </label>
                        <div class="col-sm-7">
                            <input class="form-control customicon" type="file" name="path_foto_carousel4">
                        </div>

                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                            <h4>News Content <span class="text-danger">*</span></h4>
                        </label>
                        <div class="col-sm-7">
                            <textarea name="isi_berita" id="summernote" value="{{$dc->isi_berita}}"></textarea>
                        </div>
                    </div>

                </div>

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
        $('#summernote').summernote('code', {!! json_encode($dc->isi_berita) !!});
        $('#summernote').summernote({
            tabsize: 2,
            height: 200,
        });

        $('body').on('focus',".datepicker", function(){
            $(this).datepicker();
        });
    </script>
    @endpush