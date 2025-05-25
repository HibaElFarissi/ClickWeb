@extends('layouts.DashAdmin_nav')
@section('title', ($isUpdate ? 'Update' : 'Create').' Pricing')
@php
    $route = route('Pricings.store');
        if ($isUpdate) {
            $route = route('Pricings.update', $Pricing);
        }
@endphp
@section('content')
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18"> Pricings</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="/" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2"> Pricings</span>
            </li>
        </ul>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($isUpdate)
                            @method('PUT')
                        @endif
                        <div class="row">
                            
                            <div class="col-md-12">
                                <div class="form-group mb-4">
                                    <label class="label">type :</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="type" required class="form-control text-dark ps-5 h-58"
                                            placeholder="type" value="{{ old('type',  $Pricing->type) }}">
                                        
                                    </div>
                                </div>
                            </div>
                          
                           
                          
                           
                            
                            <div class="col-md-12">
                                <div class="form-group mb-4">
                                    <label class="label">titre :</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="titre" required class="form-control text-dark ps-5 h-58"
                                            placeholder="titre" value="{{ old('titre',  $Pricing->titre) }}">
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group mb-4">
                                    <label class="label">prix :</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="prix" required class="form-control text-dark ps-5 h-58"
                                            placeholder="prix" value="{{ old('prix',  $Pricing->prix) }}">
                                        
                                    </div>
                                </div>
                            </div>

                           
                            <div class="col-md-12">
                                <label for="validationCustom18" class="form-label label">Description :</label>
                                <div class="position-relative">
                                    <textarea cols="30" rows="5" name="description" class="form-control py-3 @error('description') is-invalid @enderror"
                                        id="description" placeholder="description" required>{{ old('description',  $Pricing->description) }}</textarea>
                    
                                </div>
                                @error('description')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                            </div>
                            
                           
                         <div class="form-group">
                            <input type="submit" class="btn btn-primary fw-semibold text-white py-3 px-4 mt-2 w-100" value="{{ $isUpdate ? 'Edit' : 'Create' }}">
                        </div>
                    </form>

                </div>
            </div>
        </div>
        
<script>

    $('#description').summernote({
        placeholder: 'description',
        tabsize: 2,
        height: 100
    });
    
</script>     
@endsection