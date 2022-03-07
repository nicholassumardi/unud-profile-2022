@extends('admin/layouts/app')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">
          
                    <h3>Data</h3>
            </div>
            <div class="col-md-4 text-end">
               
                <a href="{{route('profile.edit', Auth::id())}}" class="btn btn-sm btn-outline-primary"><i
                        class="bi bi-pencil"></i>
                    Edit</a>
                
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-5 mx-auto ">
            <div class="col d-flex justify-content-center">
                <div class="text-center customimage">
                    <img src="{{ asset('storage/' . $admin->path_foto) }}" class="rounded-circle customimage" alt="...">
                  </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-sm-6 col-lg-8">
                <div class="table-responsive">
                    @include('admin.profile.info')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection