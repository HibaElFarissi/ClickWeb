@extends('layouts.DashAdmin_nav')

@section('title', ($isUpdate ? 'Update' : 'Create').' About')
@php
    $route = route('Abouts.store');
        if ($isUpdate) {
            $route = route('Abouts.update', $About);
        }
@endphp
@section('content')
<form class="row g-3 needs-validation" action="{{ $route }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if ($isUpdate)
        @method('PUT')
    @endif
    <div class="col-md-12">
        <label for="validationCustom10" class="form-label label">title_1</label>
        <div class="position-relative">
            <input type="text" class="form-control h-58 @error('title_1') is-invalid @enderror" name="title_1"
                id="validationCustom10" value="{{ old('title_1',  $About->title_1) }}" required>

        </div>
        @error('title_1')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom18" class="form-label label">slug_1:</label>
        <div class="position-relative">
            <textarea cols="30" name="slug_1" rows="5" class="form-control py-3 @error('slug_1') is-invalid @enderror"
                id="slug_1" placeholder="slug_1" required>{{ old('slug_1',  $About->slug_1) }}</textarea>

        </div>
        @error('slug_1')
            <div class="text-danger">{{ $message }} </div>
        @enderror
    </div>

    
   


    <br><br>

    <div class="col-lg-12">
        <div class="form-group">
            <label class="label">File Upload photo_1</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                <div class="product-upload">
                    <label for="photo_1" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">Drop files here or click to
                            upload.</span>
                    </label>
                    <input id="photo_1" class="@error('photo_1') is-invalid @enderror" type="file" name="photo_1">

                </div>
                @error('photo_1')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
     <div class="col-lg-12">
        <div class="form-group">
            <label class="label">File Upload photo_2</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                <div class="product-upload">
                    <label for="photo_2" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">Drop files here or click to
                            upload.</span>
                    </label>
                    <input id="photo_2" class="@error('photo_2') is-invalid @enderror" type="file" name="photo_2">

                </div>
                @error('photo_2')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

 <div class="col-md-12">
        <label for="validationCustom10" class="form-label label">name_chairman</label>
        <div class="position-relative">
            <input type="text" class="form-control h-58 @error('name_chairman') is-invalid @enderror" name="name_chairman"
                id="validationCustom10" value="{{ old('name_chairman',  $About->name_chairman) }}" required>

        </div>
        @error('name_chairman')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
     <div class="col-md-12">
        <label for="validationCustom10" class="form-label label">work_chairman</label>
        <div class="position-relative">
            <input type="text" class="form-control h-58 @error('work_chairman') is-invalid @enderror" name="work_chairman"
                id="validationCustom10" value="{{ old('work_chairman',  $About->work_chairman) }}" required>

        </div>
        @error('work_chairman')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom18" class="form-label label">slug_chairman:</label>
        <div class="position-relative">
            <textarea cols="30" name="slug_chairman" rows="5" class="form-control py-3 @error('slug_chairman') is-invalid @enderror"
                id="slug_chairman" placeholder="slug_chairman" required>{{ old('slug_chairman',  $About->slug_chairman) }}</textarea>

        </div>
        @error('slug_chairman')
            <div class="text-danger">{{ $message }} </div>
        @enderror
    </div>
<div class="col-lg-12">
        <div class="form-group">
            <label class="label">File Upload photo_chairman</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                <div class="product-upload">
                    <label for="photo_chairman" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">Drop files here or click to
                            upload.</span>
                    </label>
                    <input id="photo_chairman" class="@error('photo_chairman') is-invalid @enderror" type="file" name="photo_chairman">

                </div>
                @error('photo_chairman')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
</div>

 <div class="col-md-12">
        <label for="validationCustom10" class="form-label label">title_2</label>
        <div class="position-relative">
            <input type="text" class="form-control h-58 @error('title_2') is-invalid @enderror" name="title_2"
                id="validationCustom10" value="{{ old('title_2',  $About->title_2) }}" required>

        </div>
        @error('title_2')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom18" class="form-label label">slug_2:</label>
        <div class="position-relative">
            <textarea cols="30" name="slug_2" rows="5" class="form-control py-3 @error('slug_2') is-invalid @enderror"
                id="slug_2" placeholder="slug_2" required>{{ old('slug_2',  $About->slug_2) }}</textarea>

        </div>
        @error('slug_2')
            <div class="text-danger">{{ $message }} </div>
        @enderror
    </div>
 <div class="col-md-12">
        <label for="validationCustom18" class="form-label label">our_vision:</label>
        <div class="position-relative">
            <textarea cols="30" name="our_vision" rows="5" class="form-control py-3 @error('our_vision') is-invalid @enderror"
                id="our_vision" placeholder="our_vision" required>{{ old('our_vision',  $About->our_vision) }}</textarea>

        </div>
        @error('our_vision')
            <div class="text-danger">{{ $message }} </div>
        @enderror
    </div>
    
 <div class="col-md-12">
        <label for="validationCustom18" class="form-label label">our_mission:</label>
        <div class="position-relative">
            <textarea cols="30" name="our_mission" rows="5" class="form-control py-3 @error('our_mission') is-invalid @enderror"
                id="our_mission" placeholder="our_mission" required>{{ old('our_mission',  $About->our_mission) }}</textarea>

        </div>
        @error('our_mission')
            <div class="text-danger">{{ $message }} </div>
        @enderror
    </div>

<div class="col-md-12">
        <label for="validationCustom10" class="form-label label">title_philosophy</label>
        <div class="position-relative">
            <input type="text" class="form-control h-58 @error('title_philosophy') is-invalid @enderror" name="title_philosophy"
                id="validationCustom10" value="{{ old('title_philosophy',  $About->title_philosophy) }}" required>

        </div>
        @error('title_philosophy')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
     <div class="col-md-12">
        <label for="validationCustom10" class="form-label label">supervision_post</label>
        <div class="position-relative">
            <input type="text" class="form-control h-58 @error('supervision_post') is-invalid @enderror" name="supervision_post"
                id="validationCustom10" value="{{ old('supervision_post',  $About->supervision_post) }}" required>

        </div>
        @error('supervision_post')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom18" class="form-label label">supervision_slug:</label>
        <div class="position-relative">
            <textarea cols="30" name="supervision_slug" rows="5" class="form-control py-3 @error('supervision_slug') is-invalid @enderror"
                id="supervision_slug" placeholder="supervision_slug" required>{{ old('supervision_slug',  $About->supervision_slug) }}</textarea>

        </div>
        @error('supervision_slug')
            <div class="text-danger">{{ $message }} </div>
        @enderror
    </div>
<div class="col-lg-12">
        <div class="form-group">
            <label class="label">File Upload supervision_photo</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                <div class="product-upload">
                    <label for="supervision_photo" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">Drop files here or click to
                            upload.</span>
                    </label>
                    <input id="supervision_photo" class="@error('supervision_photo') is-invalid @enderror" type="file" name="supervision_photo">

                </div>
                @error('supervision_photo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
</div>

 <div class="col-md-12">
        <label for="validationCustom10" class="form-label label">strength_post</label>
        <div class="position-relative">
            <input type="text" class="form-control h-58 @error('strength_post') is-invalid @enderror" name="strength_post"
                id="validationCustom10" value="{{ old('strength_post',  $About->strength_post) }}" required>

        </div>
        @error('strength_post')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom18" class="form-label label">strength_slug:</label>
        <div class="position-relative">
            <textarea cols="30" name="strength_slug" rows="5" class="form-control py-3 @error('strength_slug') is-invalid @enderror"
                id="strength_slug" placeholder="strength_slug" required>{{ old('strength_slug',  $About->strength_slug) }}</textarea>

        </div>
        @error('strength_slug')
            <div class="text-danger">{{ $message }} </div>
        @enderror
    </div>
<div class="col-lg-12">
        <div class="form-group">
            <label class="label">File Upload strength_photo</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                <div class="product-upload">
                    <label for="strength_photo" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">Drop files here or click to
                            upload.</span>
                    </label>
                    <input id="strength_photo" class="@error('strength_photo') is-invalid @enderror" type="file" name="strength_photo">

                </div>
                @error('strength_photo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
</div>

 <div class="col-md-12">
        <label for="validationCustom10" class="form-label label">quality_post</label>
        <div class="position-relative">
            <input type="text" class="form-control h-58 @error('quality_post') is-invalid @enderror" name="quality_post"
                id="validationCustom10" value="{{ old('quality_post',  $About->quality_post) }}" required>

        </div>
        @error('quality_post')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom18" class="form-label label">quality_slug:</label>
        <div class="position-relative">
            <textarea cols="30" name="quality_slug" rows="5" class="form-control py-3 @error('quality_slug') is-invalid @enderror"
                id="quality_slug" placeholder="quality_slug" required>{{ old('quality_slug',  $About->quality_slug) }}</textarea>

        </div>
        @error('quality_slug')
            <div class="text-danger">{{ $message }} </div>
        @enderror
    </div>
<div class="col-lg-12">
        <div class="form-group">
            <label class="label">File Upload quality_photo</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                <div class="product-upload">
                    <label for="quality_photo" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">Drop files here or click to
                            upload.</span>
                    </label>
                    <input id="quality_photo" class="@error('quality_photo') is-invalid @enderror" type="file" name="quality_photo">

                </div>
                @error('quality_photo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
</div>

<div class="col-md-12">
        <label for="validationCustom10" class="form-label label">title_3</label>
        <div class="position-relative">
            <input type="text" class="form-control h-58 @error('title_3') is-invalid @enderror" name="title_3"
                id="validationCustom10" value="{{ old('title_3',  $About->title_3) }}" required>

        </div>
        @error('title_3')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
     <div class="col-md-12">
        <label for="validationCustom10" class="form-label label">title_team</label>
        <div class="position-relative">
            <input type="text" class="form-control h-58 @error('title_team') is-invalid @enderror" name="title_team"
                id="validationCustom10" value="{{ old('title_team',  $About->title_team) }}" required>

        </div>
        @error('title_team')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom18" class="form-label label">slug_team:</label>
        <div class="position-relative">
            <textarea cols="30" name="slug_team" rows="5" class="form-control py-3 @error('slug_team') is-invalid @enderror"
                id="slug_team" placeholder="slug_team" required>{{ old('slug_team',  $About->slug_team) }}</textarea>

        </div>
        @error('slug_team')
            <div class="text-danger">{{ $message }} </div>
        @enderror
    </div>

<div class="col-md-12">
        <label for="validationCustom10" class="form-label label">title_project</label>
        <div class="position-relative">
            <input type="text" class="form-control h-58 @error('title_project') is-invalid @enderror" name="title_project"
                id="validationCustom10" value="{{ old('title_project',  $About->title_project) }}" required>

        </div>
        @error('title_project')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom18" class="form-label label">slug_project:</label>
        <div class="position-relative">
            <textarea cols="30" name="slug_project" rows="5" class="form-control py-3 @error('slug_project') is-invalid @enderror"
                id="slug_project" placeholder="slug_project" required>{{ old('slug_project',  $About->slug_project) }}</textarea>

        </div>
        @error('slug_project')
            <div class="text-danger">{{ $message }} </div>
        @enderror
    </div>
<div class="col-md-12">
        <label for="validationCustom10" class="form-label label">title_pricing</label>
        <div class="position-relative">
            <input type="text" class="form-control h-58 @error('title_pricing') is-invalid @enderror" name="title_pricing"
                id="validationCustom10" value="{{ old('title_pricing',  $About->title_pricing) }}" required>

        </div>
        @error('title_pricing')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom18" class="form-label label">slug_pricing:</label>
        <div class="position-relative">
            <textarea cols="30" name="slug_pricing" rows="5" class="form-control py-3 @error('slug_pricing') is-invalid @enderror"
                id="slug_pricing" placeholder="slug_pricing" required>{{ old('slug_pricing',  $About->slug_pricing) }}</textarea>

        </div>
        @error('slug_pricing')
            <div class="text-danger">{{ $message }} </div>
        @enderror
    </div>






    <div class="col-12">
        <button class="btn btn-primary fw-semibold text-white py-2 px-3" type="submit">Submit Form</button>
    </div>
</form>
<br>
<br>

@endsection