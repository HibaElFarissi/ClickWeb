@extends('layouts.navbar')
@section('content')
    <section class="breadcrumb-area banner-6">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner">
                            <div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="#">Contact Form</a></li>
                                </ul>
                            </div>
                            <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                                <h2>Demande Devis</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Area-->

    <!--Start Contact Form-->
    <section class="contact-page pad-tb bg-gradient5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="niwax23form shadow">
                        <div class="common-heading text-l">
                            <h2 class="mt0 mb0">Demande Devis</h2>
                            <p class="mb50 mt10">Remplissez le formulaire ci-joint et nos équipes reviendront vers vous afin
                                d’organiser l’audit.

                            </p>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <div class="form-block">
                            <form id="contactForm" data-bs-toggle="validator" class="shake"
                                action="{{ route('Demande.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group ">
                                        <input type="text" id="name" name="full_name" placeholder="Enter name"
                                            required data-error="Please fill Out" value="{{ old('full_name') }}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group ">
                                        <input type="email" id="email" name="email" placeholder="Enter email"
                                            required data-error="Please fill Out" value="{{ old('email') }}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group ">
                                        <input type="tel" id="mobile" name="telephone" placeholder="Enter mobile"
                                            required data-error="Please fill Out" value="{{ old('telephone') }}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group ">
                                        <input type="text" id="site" name="site"
                                            placeholder="Enter site (optionnel)" required data-error="Please fill Out"
                                            value="{{ old('site') }}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group ">
                                        <select name="contactez_nous" id="Dtype" required>
                                            <option value="">Pour quels besoins nous contactez nous</option>
                                            <option value="ADS" {{ old('contactez_nous') == 'ADS' ? 'selected' : '' }}>
                                                ADS</option>
                                            <option value="hébergement"
                                                {{ old('contactez_nous') == 'hébergement' ? 'selected' : '' }}>hébergement
                                            </option>
                                            <option value="motion design"
                                                {{ old('contactez_nous') == 'motion design' ? 'selected' : '' }}>motion
                                                design</option>
                                            <option value="Instagram ADS"
                                                {{ old('contactez_nous') == 'Instagram ADS' ? 'selected' : '' }}>Instagram
                                                ADS</option>
                                            <option value="Facebook ADS"
                                                {{ old('contactez_nous') == 'Facebook ADS' ? 'selected' : '' }}>Facebook
                                                ADS
                                            </option>
                                            <option value="Création de site web"
                                                {{ old('contactez_nous') == 'Création de site web' ? 'selected' : '' }}>
                                                Création de site web</option>
                                            <option value="création maquette"
                                                {{ old('contactez_nous') == 'création maquette' ? 'selected' : '' }}>
                                                création maquette</option>
                                            <option value="Animation des réseaux de sociaux"
                                                {{ old('contactez_nous') == 'Animation des réseaux de sociaux' ? 'selected' : '' }}>
                                                Animation des réseaux de sociaux</option>
                                            <option value="création landing page"
                                                {{ old('contactez_nous') == 'création landing page' ? 'selected' : '' }}>
                                                création landing page</option>
                                            <option value="creation site WordPress"
                                                {{ old('contactez_nous') == 'creation site WordPress' ? 'selected' : '' }}>
                                                creation site WordPress</option>
                                            <option value="création Application Web"
                                                {{ old('contactez_nous') == 'création Application Web' ? 'selected' : '' }}>
                                                création Application Web</option>
                                            <option value="Autre...."
                                                {{ old('contactez_nous') == 'Autre....' ? 'selected' : '' }}>Autre....
                                            </option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select name="investissement" id="investissement" required>
                                        <option value="">Quel est vôtre investissement mensuel cumulé </option>
                                        <option value="600 - 1000 dh"
                                            {{ old('investissement') == '600 - 1000 dh' ? 'selected' : '' }}>600 - 1000 dh
                                        </option>
                                        <option value="1500-2500 dh"
                                            {{ old('investissement') == '1500-2500 dh' ? 'selected' : '' }}>1500-2500 dh
                                        </option>
                                        <option value="2500 - 4500 dh"
                                            {{ old('investissement') == '2500 - 4500 dh' ? 'selected' : '' }}>2500 - 4500
                                            dh</option>
                                        <option value="5000-8000 dh"
                                            {{ old('investissement') == '5000-8000 dh' ? 'selected' : '' }}>5000-8000 dh
                                        </option>
                                        <option value="10000 - 20 000 dh"
                                            {{ old('investissement') == '10000 - 20 000 dh' ? 'selected' : '' }}>10000 - 20
                                            000 dh</option>
                                        <option value="20000 - plus"
                                            {{ old('investissement') == '20000 - plus' ? 'selected' : '' }}>20000 - plus
                                        </option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <textarea id="message" name="message" rows="5" placeholder="Enter your message" required>{{ old('message') }}</textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck" name="agree"
                                        checked required>
                                    <label class="custom-control-label" for="customCheck">
                                        I agree to the <a href="javascript:void(0)">Terms &amp; Conditions</a> of Business
                                        Name.
                                    </label>
                                </div>

                                <button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">
                                    Submit <span class="circle"></span>Submit
                                </button>

                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                                <p class="trm"><i class="fas fa-lock"></i>We hate spam, and we respect your privacy.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--End Contact Form-->
@endsection
