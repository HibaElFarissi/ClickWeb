@extends('layouts.DashAdmin_nav')
@section('title', ($isUpdate ? 'Update' : 'Create').' Team')
@php
    $route = route('Teams.store');
        if ($isUpdate) {
            $route = route('Teams.update', $Team);
        }
@endphp
@section('content')
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18"> Teams</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="/" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2"> Teams</span>
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
                            
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">name :</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="name" required class="form-control text-dark ps-5 h-58"
                                            placeholder="name" value="{{ old('name',  $Team->name) }}">
                                        
                                    </div>
                                </div>
                            </div>
                          
                           
                           
                            
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">domain :</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="domain" required class="form-control text-dark ps-5 h-58"
                                            placeholder="domain" value="{{ old('domain',  $Team->domain) }}">
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">experience :</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="experience" required class="form-control text-dark ps-5 h-58"
                                            placeholder="experience" value="{{ old('experience',  $Team->experience) }}">
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">numero :</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="numero" required class="form-control text-dark ps-5 h-58"
                                            placeholder="numero" value="{{ old('numero',  $Team->numero) }}">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">github :</label>
                                    <div class="form-group position-relative">
                                        <input type="url" name="github" required class="form-control text-dark ps-5 h-58"
                                            placeholder="github" value="{{ old('github',  $Team->github) }}">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">website :</label>
                                    <div class="form-group position-relative">
                                        <input type="url" name="website" required class="form-control text-dark ps-5 h-58"
                                            placeholder="website" value="{{ old('website',  $Team->website) }}">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">linkedin :</label>
                                    <div class="form-group position-relative">
                                        <input type="url" name="linkedin" required class="form-control text-dark ps-5 h-58"
                                            placeholder="linkedin" value="{{ old('linkedin',  $Team->linkedin) }}">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">image :</label>
                                    <div class="form-group position-relative">
                                        <input type="file" name="image"  class="form-control text-dark ps-5 h-58"
                                            placeholder="image" >
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom18" class="form-label label">Description :</label>
                                <div class="position-relative">
                                    <textarea cols="30" rows="5" name="description" class="form-control py-3 @error('description') is-invalid @enderror"
                                        id="description" placeholder="description" required>{{ old('description',  $Team->description) }}</textarea>
                    
                                </div>
                                @error('description')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                            </div>
                            
                            <div class="col-md-12">
                                <label for="validationCustom18" class="form-label label">Competitions :</label>
                                <div class="position-relative">
                                    <textarea cols="30" rows="5" name="competitions" class="form-control py-3 @error('competitions') is-invalid @enderror"
                                        id="competitions" placeholder="Notes" required>{{ old('competitions',  $Team->competitions) }}</textarea>
                    
                                </div>
                                @error('competitions')
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
        
     
    @endsection