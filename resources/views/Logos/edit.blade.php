
@extends('layouts.DashAdmin_nav')

@section('content')

<div class="d-sm-flex justify-content-between align-items-center mb-4">
    <h3 class="fs-18">Edit Website Logos</h3>

    <a href="{{ route('Logos.index') }}" class="btn btn-secondary">
        <i class="ri-arrow-left-line"></i>
        Back
    </a>
</div>


<div class="card bg-white border-0 rounded-10 mb-4">

    <div class="card-body p-4">

        <h4 class="fw-semibold fs-18 mb-4">
            Update Light & Dark Logos
        </h4>

        <form class="row g-4"
              action="{{ route('Logos.update', $Logo->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')


            {{-- LIGHT LOGO --}}

            <div class="col-md-6">

                <label class="label fw-semibold mb-3">
                    <i class="ri-sun-line text-warning"></i>
                    Light Mode Logo
                </label>

                <div class="border rounded-3 p-4 text-center">

                    @if($Logo->logo_light)

                        <div class="mb-3 p-3 rounded"
                             style="background:#f1f1f1;">

                            <img
                                src="{{ asset('storage/'.$Logo->logo_light) }}"
                                id="lightPreview"
                                alt="Light Logo"
                                style="width:100%;max-width:180px;height:90px;object-fit:contain;">

                        </div>

                    @else

                        <img id="lightPreview"
                             src=""
                             alt="Light Logo Preview"
                             style="display:none;width:100%;max-width:180px;height:90px;object-fit:contain;">

                        <p class="text-muted">No Light Logo uploaded</p>

                    @endif

                    <input
                        type="file"
                        name="logo_light"
                        id="logo_light"
                        class="form-control @error('logo_light') is-invalid @enderror"
                        accept="image/png,image/jpeg,image/webp,image/svg+xml">

                    @error('logo_light')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror

                    <small class="text-muted d-block mt-2">
                        Upload the logo used in Light Mode.
                    </small>

                </div>

            </div>


            {{-- DARK LOGO --}}

            <div class="col-md-6">

                <label class="label fw-semibold mb-3">
                    <i class="ri-moon-line text-primary"></i>
                    Dark Mode Logo
                </label>

                <div class="border rounded-3 p-4 text-center">

                    @if($Logo->logo_dark)

                        <div class="mb-3 p-3 rounded"
                             style="background:#222;">

                            <img
                                src="{{ asset('storage/'.$Logo->logo_dark) }}"
                                id="darkPreview"
                                alt="Dark Logo"
                                style="width:100%;max-width:180px;height:90px;object-fit:contain;">

                        </div>

                    @else

                        <img id="darkPreview"
                             src=""
                             alt="Dark Logo Preview"
                             style="display:none;width:100%;max-width:180px;height:90px;object-fit:contain;">

                        <p class="text-muted">No Dark Logo uploaded</p>

                    @endif

                    <input
                        type="file"
                        name="logo_dark"
                        id="logo_dark"
                        class="form-control @error('logo_dark') is-invalid @enderror"
                        accept="image/png,image/jpeg,image/webp,image/svg+xml">

                    @error('logo_dark')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror

                    <small class="text-muted d-block mt-2">
                        Upload the logo used in Dark Mode.
                    </small>

                </div>

            </div>


            {{-- BUTTONS --}}

            <div class="col-12 d-flex gap-2">

                <button class="btn btn-primary text-white fw-semibold py-2 px-4"
                        type="submit">

                    <i class="ri-save-line"></i>
                    Update Logos

                </button>

                <a href="{{ route('Logos.index') }}"
                   class="btn btn-light py-2 px-4">

                    Cancel

                </a>

            </div>

        </form>

    </div>

</div>


{{-- IMAGE PREVIEW SCRIPT --}}

<script>

document.getElementById('logo_light').addEventListener('change', function(event) {

    const file = event.target.files[0];

    if(file) {

        const preview = document.getElementById('lightPreview');

        preview.src = URL.createObjectURL(file);
        preview.style.display = 'inline-block';

    }

});


document.getElementById('logo_dark').addEventListener('change', function(event) {

    const file = event.target.files[0];

    if(file) {

        const preview = document.getElementById('darkPreview');

        preview.src = URL.createObjectURL(file);
        preview.style.display = 'inline-block';

    }

});

</script>

@endsection
