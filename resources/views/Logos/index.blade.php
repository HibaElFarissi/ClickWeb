
@extends('layouts.DashAdmin_nav')

@section('content')

<div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
    <h3 class="mb-sm-0 mb-1 fs-18">Website Logos</h3>

    <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
        <li>
            <a href="{{ route('admin.dashboard') }}" class="text-decoration-none">
                <i class="ri-home-2-line"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">
                Logos
            </span>
        </li>
    </ul>
</div>


{{-- LOGOS TABLE --}}

<div class="card bg-white border-0 rounded-10 mb-4">
    <div class="card-body p-4">

        <div class="d-sm-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
            <h4 class="fw-semibold fs-18 mb-sm-0">Manage Website Logos</h4>

            <button class="btn btn-primary py-2 px-4 text-white"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight">
                <i class="ri-add-line"></i>
                Add Logos
            </button>
        </div>

        <div class="table-responsive">
            <table class="table align-middle">

                <thead>
                    <tr class="text-center">
                        <th>Light Mode Logo</th>
                        <th>Dark Mode Logo</th>
                        <th>Last Updated</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($Logos as $Logo)

                    <tr class="text-center">

                        <td>
                            @if($Logo->logo_light)
                                <img
                                    src="{{ asset('storage/'.$Logo->logo_light) }}"
                                    alt="Light Logo"
                                    style="width:130px;height:65px;object-fit:contain;background:#f3f3f3;padding:8px;border-radius:8px;">
                            @else
                                <span class="text-muted">No Light Logo</span>
                            @endif
                        </td>

                        <td>
                            @if($Logo->logo_dark)
                                <img
                                    src="{{ asset('storage/'.$Logo->logo_dark) }}"
                                    alt="Dark Logo"
                                    style="width:130px;height:65px;object-fit:contain;background:#222;padding:8px;border-radius:8px;">
                            @else
                                <span class="text-muted">No Dark Logo</span>
                            @endif
                        </td>

                        <td>
                            {{ $Logo->updated_at?->format('d/m/Y H:i') }}
                        </td>

                        <td>
                            <div class="dropdown action-opt">
                                <button class="btn bg p-0" type="button"
                                        data-bs-toggle="dropdown">
                                    <i data-feather="more-horizontal"></i>
                                </button>

                                <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">

                                    <li>
                                        <a class="dropdown-item"
                                           href="{{ route('Logos.edit', $Logo->id) }}">
                                            <i data-feather="edit-3"></i>
                                            Edit Logos
                                        </a>
                                    </li>

                                    <li>
                                        <form action="{{ route('Logos.destroy', $Logo->id) }}"
                                              method="POST"
                                              onsubmit="return confirm('Are you sure you want to delete these logos?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="dropdown-item text-danger">
                                                <i data-feather="trash-2"></i>
                                                Delete
                                            </button>
                                        </form>
                                    </li>

                                </ul>
                            </div>
                        </td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="4" class="text-center py-4">
                            <h5>No Logos Found!</h5>
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>
        </div>

    </div>
</div>


{{-- CREATE LOGOS OFFCANVAS --}}

<div class="offcanvas offcanvas-end" tabindex="-1"
     id="offcanvasRight">

    <div class="offcanvas-header border-bottom p-4">
        <h5 class="offcanvas-title fs-18">Add Website Logos</h5>
        <button type="button" class="btn-close"
                data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body p-4">

        <form action="{{ route('Logos.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            {{-- LIGHT LOGO --}}

            <div class="form-group mb-4">

                <label class="label fw-semibold mb-2">
                    Light Mode Logo
                </label>

                <div class="form-control h-100 text-center p-4">

                    <i class="ri-sun-line fs-2 text-warning"></i>

                    <p class="mb-2">Logo for Light Mode</p>

                    <input type="file"
                           name="logo_light"
                           class="form-control @error('logo_light') is-invalid @enderror"
                           accept="image/*"
                           required>

                    @error('logo_light')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror

                </div>
            </div>


            {{-- DARK LOGO --}}

            <div class="form-group mb-4">

                <label class="label fw-semibold mb-2">
                    Dark Mode Logo
                </label>

                <div class="form-control h-100 text-center p-4">

                    <i class="ri-moon-line fs-2 text-primary"></i>

                    <p class="mb-2">Logo for Dark Mode</p>

                    <input type="file"
                           name="logo_dark"
                           class="form-control @error('logo_dark') is-invalid @enderror"
                           accept="image/*"
                           required>

                    @error('logo_dark')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror

                </div>
            </div>


            <button type="submit" class="btn btn-primary text-white w-100 py-2">
                <i class="ri-save-line"></i>
                Save Logos
            </button>

        </form>

    </div>
</div>

@endsection
