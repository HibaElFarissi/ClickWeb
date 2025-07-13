@extends('layouts.DashAdmin_nav')
@section('title', ($isUpdate ? 'Update' : 'Create') . ' info')
@php
    $route = route('infos.store');
    if ($isUpdate) {
        $route = route('infos.update', $info);
    }
@endphp
@section('content')
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18"> infos</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="/" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2"> infos</span>
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
                                    <label class="label">address :</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="address" required
                                            class="form-control text-dark ps-5 h-58" placeholder="address"
                                            value="{{ old('address', $info->address) }}">

                                    </div>
                                </div>
                            </div>





                            <div class="col-md-12">
                                <div class="form-group mb-4">
                                    <label class="label">Phone_1 :</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="Phone_1" required
                                            class="form-control text-dark ps-5 h-58" placeholder="Phone_1"
                                            value="{{ old('Phone_1', $info->Phone_1) }}">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-4">
                                    <label class="label">Phone_2 :</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="Phone_2" required
                                            class="form-control text-dark ps-5 h-58" placeholder="Phone_2"
                                            value="{{ old('Phone_2', $info->Phone_2) }}">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-4">
                                    <label class="label">Email_1 :</label>
                                    <div class="form-group position-relative">
                                        <input type="email" name="Email_1" required
                                            class="form-control text-dark ps-5 h-58" placeholder="Email_1"
                                            value="{{ old('Email_1', $info->Email_1) }}">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-4">
                                    <label class="label">Email_2 :</label>
                                    <div class="form-group position-relative">
                                        <input type="email" name="Email_2" required
                                            class="form-control text-dark ps-5 h-58" placeholder="Email_2"
                                            value="{{ old('Email_2', $info->Email_2) }}">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-4">
                                    <label class="label">facebook :</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="facebook" required
                                            class="form-control text-dark ps-5 h-58" placeholder="facebook"
                                            value="{{ old('facebook', $info->facebook) }}">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-4">
                                    <label class="label">twitter :</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="twitter" required
                                            class="form-control text-dark ps-5 h-58" placeholder="twitter"
                                            value="{{ old('twitter', $info->twitter) }}">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-4">
                                    <label class="label">instagram :</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="instagram" required
                                            class="form-control text-dark ps-5 h-58" placeholder="instagram"
                                            value="{{ old('instagram', $info->instagram) }}">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-4">
                                    <label class="label">linkedin :</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="linkedin" required
                                            class="form-control text-dark ps-5 h-58" placeholder="linkedin"
                                            value="{{ old('linkedin', $info->linkedin) }}">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-4">
                                    <label class="label">youtube :</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="youtube" required
                                            class="form-control text-dark ps-5 h-58" placeholder="youtube"
                                            value="{{ old('youtube', $info->youtube) }}">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom18" class="form-label label">slug :</label>
                                <div class="position-relative">
                                    <textarea cols="30" rows="5" name="slug" class="form-control py-3 @error('slug') is-invalid @enderror"
                                        id="slug" placeholder="slug" required>{{ old('slug', $info->slug) }}</textarea>

                                </div>
                                @error('slug')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom18" class="form-label label">experience :</label>
                                <div class="position-relative">
                                    <textarea cols="30" rows="5" name="experience" class="form-control py-3 @error('experience') is-invalid @enderror"
                                        id="experience" placeholder="experience" required>{{ old('experience', $info->experience) }}</textarea>

                                </div>
                                @error('experience')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary fw-semibold text-white py-3 px-4 mt-2 w-100"
                                    value="{{ $isUpdate ? 'Edit' : 'Create' }}">
                            </div>
                    </form>

                </div>
            </div>
        </div>


    @endsection
