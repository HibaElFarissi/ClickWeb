@extends('layouts.DashAdmin_nav')
@section('content')
    <form class="row g-3 needs-validation" action="{{ route('Logos.update', $Logo->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
 
 <div class="form-group mb-12">
                          <div class="form-group">
            <label class="label">File Upload Logo</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                <div class="product-upload">
                    <label for="photo" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">Drop files here or click to
                            upload.</span>
                    </label>
                    <input id="photo" class="@error('photo') is-invalid @enderror" type="file" name="photo">

                </div>
                @error('photo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        <br>   <br>   <br>
        <div class="col-12">
            <button class="btn btn-primary fw-semibold text-white py-2 px-3" type="submit">Edit Logo</button>
        </div>
    </form>
    <br>
    <br>
   
@endsection
