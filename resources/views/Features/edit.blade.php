@extends('layouts.DashAdmin_nav')
@section('content')
    <form class="row g-3 needs-validation" action="{{ route('Features.update', $Feature->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-mb-12">
            <label for="validationCustom10" class="form-label label">title</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('title') is-invalid @enderror" name="title"
                    id="validationCustom10" value="{{ old('title', $Feature->title) }}" required>

            </div>
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
 <div class="col-mb-12">
              <label for="validationCustom18" class="form-label label">description:</label>
        <div class="position-relative">
            <textarea cols="30" name="description" rows="5" class="form-control py-3 @error('description') is-invalid @enderror"
                id="description" placeholder="description" required>{{ old('description', $Feature->description) }}</textarea>

        </div>
        @error('description')
            <div class="text-danger">{{ $message }} </div>
        @enderror
        </div>
 <div class="form-group mb-12">
                          <div class="form-group">
            <label class="label">File Upload icon</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                <div class="product-upload">
                    <label for="icon" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">Drop files here or click to
                            upload.</span>
                    </label>
                    <input id="icon" class="@error('icon') is-invalid @enderror" type="file" name="icon">

                </div>
                @error('icon')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        <br>   <br>   <br>
        <div class="col-12">
            <button class="btn btn-primary fw-semibold text-white py-2 px-3" type="submit">Submit Form</button>
        </div>
    </form>
    <br>
    <br>
   
@endsection
