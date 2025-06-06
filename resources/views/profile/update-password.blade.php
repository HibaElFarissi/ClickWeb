@extends('layouts.DashAdmin_nav')
@section('content')
<div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
    <h3 class="mb-sm-0 mb-1 fs-18">Security</h3>
    <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
        <li>
            <a href="{{route('admin.dashboard')}}" class="text-decoration-none">
                <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Security</span>
        </li>
    </ul>
</div>
<div class="row justify-content-center">
    <div class="col-xxl-9">
        <div class="card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                <h4 class="fw-semibold fs-18 border-bottom pb-20 mb-20">Security</h4>
                <ul class="ps-0 mb-4 list-unstyled d-sm-flex gap-3">
                    <li>
                        <a href="{{route('profile.edit')}}"
                            class="btn btn-primary bg-primary text-primary py-2 bg-opacity-10 px-3 border-0 fw-semibold w-sm-100 d-inline-block">Account</a>
                    </li>
                    <li>
                        <a href="{{route('update_password')}}"
                            class="btn btn-primary bg-primary text-white py-2 px-3 border-0 fw-semibold w-sm-100 d-inline-block mt-2 mt-sm-0">Security</a>
                    </li>
                    
                    <li>
                        <a href="{{route('delete_user')}}"
                            class="btn btn-primary bg-primary text-primary py-2 px-3 bg-opacity-10 border-0 fw-semibold w-sm-100 d-inline-block mt-2 mt-sm-0">delete</a>
                    </li>
                   
                </ul>
                <div class="border-bottom pb-3 mb-3">
                    <h4 class="fs-18 fw-semibold mb-1">Security</h4>
                    <p class="fs-15">Update your photo and personal details here.</p>
                </div>
                @include('profile.partials.update-password-form')
            </div>
        </div>
        



@endsection