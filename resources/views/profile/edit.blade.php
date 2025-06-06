{{-- 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div> --}}
@extends('layouts.DashAdmin_nav')
@section('content')
   

    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18">Profile Information</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="{{route('admin.dashboard')}}" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Profile Information</span>
            </li>
        </ul>
    </div>
    <div class="row justify-content-center">
        <div class="col-xxl-9">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <h4 class="fw-semibold fs-18 border-bottom pb-20 mb-20">Settings</h4>
                    <ul class="ps-0 mb-4 list-unstyled d-sm-flex gap-3">
                        <li>
                            <a href="{{route('profile.edit')}}"
                                class="btn btn-primary bg-primary text-white py-2 px-3 border-0 fw-semibold w-sm-100 d-inline-block">Account</a>
                        </li>
                        <li>
                            <a href="{{route('update_password')}}"
                                class="btn btn-primary bg-primary text-primary py-2 px-3 bg-opacity-10 border-0 fw-semibold w-sm-100 d-inline-block mt-2 mt-sm-0">Security</a>
                        </li>
                      
                        <li>
                            <a href="{{route('delete_user')}}"
                                class="btn btn-primary bg-primary text-primary py-2 px-3 bg-opacity-10 border-0 fw-semibold w-sm-100 d-inline-block mt-2 mt-sm-0">delete</a>
                        </li>
                       
                    </ul>
                    <div class="border-bottom pb-3 mb-3">
                        <h4 class="fs-18 fw-semibold mb-1">Profile Information</h4>
                        <p class="fs-15">Update your account's profile information and email address.</p>
                    </div>
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
        </div>
    </div>
@endsection

