<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phoenix</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../../vendors/simplebar/simplebar.min.js"></script>
    <script src="../../../assets/js/config.js"></script>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link href="../../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="../../../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
            document.getElementById('style-default').setAttribute('disabled', true);
            document.getElementById('user-style-default').setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            document.getElementById('style-rtl').setAttribute('disabled', true);
            document.getElementById('user-style-rtl').setAttribute('disabled', true);
        }
    </script>
</head>
<body>
    <main class="main" id="top">
        <div class="container-fluid bg-body-tertiary dark__bg-gray-1200">
            <div class="bg-holder bg-auth-card-overlay" style="background-image:url(../../../assets/img/bg/37.png);"></div>

            <div class="py-5 row flex-center position-relative min-vh-100 g-0">
                <div class="col-11 col-sm-10 col-xl-8">
                    <div class="border card border-translucent auth-card">
                        <div class="card-body pe-md-0">
                            <div class="row align-items-center gx-0 gy-7">
                                <div class="col-auto overflow-hidden bg-body-highlight dark__bg-gray-1100 rounded-3 position-relative auth-title-box">
                                    <div class="bg-holder" style="background-image:url(../../../assets/img/bg/38.png);"></div>
                                    <div class="px-4 text-center position-relative px-lg-7 pt-7 pb-7 pb-sm-5 text-md-start pb-lg-7 card-sign-up">
                                        <h3 class="mb-3 text-body-emphasis fs-7">Phoenix Authentication</h3>
                                        <p class="text-body-tertiary">Give yourself some hassle-free development process with the uniqueness of Phoenix!</p>
                                        <ul class="mb-0 list-unstyled w-max-content w-md-auto">
                                            <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Fast</span></li>
                                            <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Simple</span></li>
                                            <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Responsive</span></li>
                                        </ul>
                                    </div>
                                    <div class="mb-6 text-center position-relative z-n1 d-none d-md-block mt-md-15">
                                        <img class="auth-title-box-img d-dark-none" src="../../../assets/img/spot-illustrations/auth.png" alt="" />
                                        <img class="auth-title-box-img d-light-none" src="../../../assets/img/spot-illustrations/auth-dark.png" alt="" />
                                    </div>
                                </div>
                                <div class="mx-auto col">
                                    <div class="auth-form-box">
                                        <div class="text-center mb-7">
                                            <a class="mb-4 d-flex flex-center text-decoration-none" href="../../../index.html">
                                                <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block">
                                                    <img src="../../../assets/img/icons/logo.png" alt="phoenix" width="58" />
                                                </div>
                                            </a>
                                            <h3 class="text-body-highlight">Sign Up</h3>
                                            <p class="text-body-tertiary">Create your account today</p>
                                        </div>

                                        <button class="mb-3 btn btn-phoenix-secondary w-100">
                                            <span class="fab fa-google text-danger me-2 fs-9"></span>Sign up with Google
                                        </button>
                                        <button class="btn btn-phoenix-secondary w-100">
                                            <span class="fab fa-facebook text-primary me-2 fs-9"></span>Sign up with Facebook
                                        </button>

                                        <div class="mt-4 position-relative">
                                            <hr class="bg-body-secondary" />
                                            <div class="divider-content-center bg-body-emphasis">or use email</div>
                                        </div>

                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf

                                            <div class="mb-3 text-start">
                                                <label class="form-label" for="name">Name</label>
                                                <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Name" autofocus autocomplete="name" />
                                                @error('name')
                                                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                                @enderror
                                            </div>

                                            <div class="mb-3 text-start">
                                                <label class="form-label" for="email">Email address</label>
                                                <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="name@example.com" autocomplete="username" />
                                                @error('email')
                                                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                                @enderror
                                            </div>

                                            <div class="mb-3 row g-3">
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="password">Password</label>
                                                    <div class="position-relative" data-password="data-password">
                                                        <input class="form-control form-icon-input pe-6 @error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="Password" autocomplete="new-password" />
                                                        <button class="top-0 px-3 py-0 btn h-100 position-absolute end-0 fs-7 text-body-tertiary @error('password') d-none @enderror" data-password-toggle="data-password-toggle">
                                                            <span class="uil uil-eye show"></span>
                                                            <span class="uil uil-eye-slash hide"></span>
                                                        </button>
                                                        @error('password')
                                                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="confirmPassword">Confirm Password</label>
                                                    <div class="position-relative" data-password="data-password">
                                                        <input class="form-control form-icon-input pe-6 @error('password_confirmation') is-invalid @enderror" id="confirmPassword" type="password" name="password_confirmation" placeholder="Confirm Password" autocomplete="new-password" />
                                                        <button class="top-0 px-3 py-0 btn h-100 position-absolute end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle">
                                                            <span class="uil uil-eye show"></span>
                                                            <span class="uil uil-eye-slash hide"></span>
                                                        </button>
                                                        @error('password_confirmation')
                                                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                                <div class="mb-3 form-check">
                                                    <input class="form-check-input" id="termsService" type="checkbox" name="terms" />
                                                    <label class="form-label fs-9 text-transform-none" for="termsService">
                                                        {!! __(' agree to the :terms_of_service and :privacy_policy', [
                                                            'termIs_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                                        ]) !!}
                                                    </label>
                                                </div>
                                            @endif

                                            <button class="mb-3 btn btn-primary w-100" type="submit">Sign up</button>
                                            <div class="text-center">
                                                <a class="fs-9 fw-bold" href="{{ route('login') }}">Sign in to an existing account</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Scripts -->
    <script src="../../../vendors/popper/popper.min.js"></script>
    <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../../vendors/is/is.min.js"></script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="../../../vendors/feather-icons/feather.min.js"></script>
    <script src="../../../vendors/dayjs/dayjs.min.js"></script>
    <script src="../../../assets/js/phoenix.js"></script>
</body>
</html>
