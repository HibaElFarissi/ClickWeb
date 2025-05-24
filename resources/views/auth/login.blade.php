<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8"/>
  <title>ClickWeb - Web Design &amp; Digital Marketing Agency</title>
  <meta name="description" content="Creative Agency, Marketing Agency Template">
  <meta name="keywords" content="Creative Agency, Marketing Agency">
  <meta name="author" content="rajesh-doot">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="#101010">
  <!--website-favicon-->
  <link href="images/favicon.png" rel="icon">
  <!--plugin-css-->
  <link href="{{ asset('FrontEnd/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('FrontEnd/css/plugin.min.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <!-- template-style-->
  <link href="{{ asset('FrontEnd/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('FrontEnd/css/responsive.css') }}" rel="stylesheet">
  <link href="{{ asset('FrontEnd/css/darkmode.css') }}" rel="stylesheet">
</head>
<body>
  <!--Start login Form-->
  <x-auth-session-status class="mb-4" :status="session('status')" />
  <section class="login-page pad-tb">
    <div class="v-center m-auto">
      <a href="#" class="d-block text-center mb30"><img src="{{ asset('FrontEnd/images/white-logo.svg') }}" alt="Logo" class="mega-darks-logo"></a>
      <div class="login-form-div">        
        <h4 class="mb40 text-center">Login to your Account</h4>
        <div class="form-block">
            <form id="contact-form" method="POST" action="{{ route('login') }}">
                @csrf
            <div class="fieldsets row">
              <div class="col-md-12 form-group">
                <input id="form_name" type="email"  placeholder="Email" name="email" value="{{old('email')}}" required autofocus autocomplete="username">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
              <div class="col-md-12 form-group"><input  type="password"   placeholder="password"   name="password" required autocomplete="current-password" >
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            </div>
            <div class="fieldsets row mt20">
              <div class="col-md-6 form-group v-center">
                <button type="submit" class="lnk btn-main bg-btn">Submit <span class="circle"></span></button>
              </div>
              @if (Route::has('password.request'))
              <div class="col-md-6 form-group v-center text-right"><a href="{{ route('password.request') }}" class="psforgt">Forgot Password?</a>     </div>
              @endif

            </div>            
                      
          </form>
        </div>
      </div>      
      </div>      
    </section>
    <!--End login Form-->


  
<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ asset('FrontEnd/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('FrontEnd/js/jquery.min.js') }}"></script>
<script src="{{ asset('FrontEnd/js/bootstrap.bundle.min.js') }}"></script> 
<script src="{{ asset('FrontEnd/js/plugin.min.js') }}"></script>
<!--common script file-->
<script src="{{ asset('FrontEnd/js/main.js') }}"></script>
</body>
</html>
    <!-- Session Status -->
 

   

       

   
        

         