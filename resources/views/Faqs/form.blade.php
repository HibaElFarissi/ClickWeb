@extends('layouts.DashAdmin_nav')
@section('title', ($isUpdate ? 'Update' : 'Create').' Faq')
@php
    $route = route('Faqs.store');
        if ($isUpdate) {
            $route = route('Faqs.update', $Faq);
        }
@endphp
@section('content')
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18"> Faqs</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="/" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2"> Faqs</span>
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
                                    <label class="label">question :</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="question" required class="form-control text-dark ps-5 h-58"
                                            placeholder="question" value="{{ old('question',  $Faq->question) }}">
                                        
                                    </div>
                                </div>
                            </div>
                          
                           
                           
                            
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">answer :</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="answer" required class="form-control text-dark ps-5 h-58"
                                            placeholder="answer" value="{{ old('answer',  $Faq->answer) }}">
                                        
                                    </div>
                                </div>
                            </div>
                           
                         <div class="form-group">
                            <input type="submit" class="btn btn-primary fw-semibold text-white py-3 px-4 mt-2 w-100" value="{{ $isUpdate ? 'Edit' : 'Create' }}">
                        </div>
                    </form>

                </div>
            </div>
        </div>
        
     
    @endsection