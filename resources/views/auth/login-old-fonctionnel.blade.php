<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<!-- Mirrored from wowdash.wowtheme7.com/demo/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Aug 2024 12:13:00 GMT -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connectez-vous !!!</title>
  <link rel="icon" type="image/png" href="{{ asset("storage/assets_backend/images/favicon.png")}}" sizes="16x16">
  <!-- remix icon font css  -->
  <link rel="stylesheet" href="{{ asset("storage/assets_backend/css/remixicon.css")}}">
  <!-- BootStrap css -->
  <link rel="stylesheet" href="{{ asset("storage/assets_backend/css/lib/bootstrap.min.css")}}">
  <!-- Apex Chart css -->
  <link rel="stylesheet" href="{{ asset("storage/assets_backend/css/lib/apexcharts.css")}}">
  <!-- Data Table css -->
  <link rel="stylesheet" href="{{ asset("storage/assets_backend/css/lib/dataTables.min.css")}}">
  <!-- Text Editor css -->
  <link rel="stylesheet" href="{{ asset("storage/assets_backend/css/lib/editor-katex.min.css")}}">
  <link rel="stylesheet" href="{{ asset("storage/assets_backend/css/lib/editor.atom-one-dark.min.css")}}">
  <link rel="stylesheet" href="{{ asset("storage/assets_backend/css/lib/editor.quill.snow.css")}}">
  <!-- Date picker css -->
  <link rel="stylesheet" href="{{ asset("storage/assets_backend/css/lib/flatpickr.min.css")}}">
  <!-- Calendar css -->
  <link rel="stylesheet" href="{{ asset("storage/assets_backend/css/lib/full-calendar.css")}}">
  <!-- Vector Map css -->
  <link rel="stylesheet" href="{{ asset("storage/assets_backend/css/lib/jquery-jvectormap-2.0.5.css")}}">
  <!-- Popup css -->
  <link rel="stylesheet" href="{{ asset("storage/assets_backend/css/lib/magnific-popup.css")}}">
  <!-- Slick Slider css -->
  <link rel="stylesheet" href="{{ asset("storage/assets_backend/css/lib/slick.css")}}">
  <!-- prism css -->
  <link rel="stylesheet" href="{{ asset("storage/assets_backend/css/lib/prism.css")}}">
  <!-- file upload css -->
  <link rel="stylesheet" href="{{ asset("storage/assets_backend/css/lib/file-upload.css")}}">
  
  <link rel="stylesheet" href="{{ asset("storage/assets_backend/css/lib/audioplayer.css")}}">
  <!-- main css -->
  <link rel="stylesheet" href="{{ asset("storage/assets_backend/css/style.css")}}">
</head>
  <body>

<section class="auth bg-base d-flex flex-wrap">  
    <div class="auth-left d-lg-block d-none">
        <div class="d-flex align-items-center flex-column h-100 justify-content-center">
            <img src="{{ asset("storage/assets/logo/logo_envol_petit.png")}}" alt="">
        </div>
    </div>
    <div class="auth-right py-32 px-24 d-flex flex-column justify-content-center">
        <div class="max-w-464-px mx-auto w-100">
            <div>
                {{-- <a href="index.html" class="mb-40 max-w-290-px">
                    <img src="{{ asset("storage/assets_backend/images/logo.png")}}" alt="">
                </a> --}}
                <h4 class="mb-12">Connectez-vous à votre compte</h4>
                <p class="mb-32 text-secondary-light text-lg">Bienvenue! Veuillez entrer vos informations de connexion</p>
            </div>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="icon-field mb-16">
                    <span class="icon top-50 translate-middle-y">
                        <iconify-icon icon="mage:email"></iconify-icon>
                    </span>
                    <input type="email" class="form-control h-56-px bg-neutral-50 radius-12 @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="position-relative mb-20">
                    <div class="icon-field">
                        <span class="icon top-50 translate-middle-y">
                            <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                        </span> 
                        <input type="password" class="form-control h-56-px bg-neutral-50 radius-12 @error('password') is-invalid @enderror" id="your-password" placeholder="Password" name="password" required autocomplete="current-password"/>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <span class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light" data-toggle="#your-password"></span>
                </div>
                <div class="">
                    <div class="d-flex justify-content-between gap-2">
                        <div class="form-check style-check d-flex align-items-center">
                            <input class="form-check-input border border-neutral-300" type="checkbox" value="" id="remember" name="remember"  {{ old('remember') ? 'checked' : ''}}>
                            <label class="form-check-label" for="remeber">Se souvenir de moi </label>
                        </div>
                        <a href="{{ route("password.request") }}" class="text-primary-600 fw-medium">Mot de passe oublié ?</a>
                    </div>
                </div>

                <button type="submit" class="btn btn-danger text-sm btn-sm px-12 py-16 w-100 radius-12 mt-32"> Se connecter</button>

                {{-- <div class="mt-32 center-border-horizontal text-center">
                    <span class="bg-base z-1 px-4">Ou Se connecter avec</span>
                </div>
                <div class="mt-32 d-flex align-items-center gap-3">
                    <button type="button" class="fw-semibold text-primary-light py-16 px-24 w-50 border radius-12 text-md d-flex align-items-center justify-content-center gap-12 line-height-1 bg-hover-primary-50"> 
                        <iconify-icon icon="ic:baseline-facebook" class="text-primary-600 text-xl line-height-1"></iconify-icon>
                        Google
                    </button>
                    <button type="button" class="fw-semibold text-primary-light py-16 px-24 w-50 border radius-12 text-md d-flex align-items-center justify-content-center gap-12 line-height-1 bg-hover-primary-50"> 
                        <iconify-icon icon="logos:google-icon" class="text-primary-600 text-xl line-height-1"></iconify-icon>
                        Google
                    </button>
                </div> --}}
                <div class="mt-32 text-center text-sm">
                    <p class="mb-0">Vous n'avez pas compte ? <a href="{{ route("register") }}" class="text-primary-600 fw-semibold">Créez-en un</a></p>
                </div>
                
            </form>
        </div>
    </div>
</section>

  <!-- jQuery library js -->
  <script src="{{ asset("storage/assets_backend/js/lib/jquery-3.7.1.min.js")}}"></script>
  <!-- Bootstrap js -->
  <script src="{{ asset("storage/assets_backend/js/lib/bootstrap.bundle.min.js")}}"></script>
  <!-- Apex Chart js -->
  <!-- <script src="{{ asset("storage/assets_backend/js/lib/apexcharts.min.js")}}"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <!-- Data Table js -->
  <script src="{{ asset("storage/assets_backend/js/lib/dataTables.min.js")}}"></script>
  <!-- Iconify Font js -->
  <script src="{{ asset("storage/assets_backend/js/lib/iconify-icon.min.js")}}"></script>
  <!-- jQuery UI js -->
  <script src="{{ asset("storage/assets_backend/js/lib/jquery-ui.min.js")}}"></script>
  <!-- Vector Map js -->
  <script src="{{ asset("storage/assets_backend/js/lib/jquery-jvectormap-2.0.5.min.js")}}"></script>
  <script src="{{ asset("storage/assets_backend/js/lib/jquery-jvectormap-world-mill-en.js")}}"></script>
  <!-- Popup js -->
  <script src="{{ asset("storage/assets_backend/js/lib/magnifc-popup.min.js")}}"></script>
  <!-- Slick Slider js -->
  <script src="{{ asset("storage/assets_backend/js/lib/slick.min.js")}}"></script>
  <!-- prism js -->
  <script src="{{ asset("storage/assets_backend/js/lib/prism.js")}}"></script>
  <!-- file upload js -->
  <script src="{{ asset("storage/assets_backend/js/lib/file-upload.js")}}"></script>
  <!-- audioplayer -->
  <script src="{{ asset("storage/assets_backend/js/lib/audioplayer.js")}}"></script>
  
  <!-- main js -->
  <script src="{{ asset("storage/assets_backend/js/app.js")}}"></script>

<script>
      // ================== Password Show Hide Js Start ==========
      function initializePasswordToggle(toggleSelector) {
        $(toggleSelector).on('click', function() {
            $(this).toggleClass("ri-eye-off-line");
            var input = $($(this).attr("data-toggle"));
            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    }
    // Call the function
    initializePasswordToggle('.toggle-password');
  // ========================= Password Show Hide Js End ===========================
</script>

</body>

</html>
