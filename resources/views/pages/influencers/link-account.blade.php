<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link
        rel="shortcut icon"
        type="image/png"
        href="/assets/images/logos/favicon.png" />

    <!-- Core Css -->
    <link rel="stylesheet" href="/assets/css/styles.css" />

    <title>Modernize Bootstrap Admin</title>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div id="main-wrapper">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100">
            <div class="position-relative z-index-5">
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-xxl-6">
                        <a href="/minisidebar/index.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                            <img src="assets/images/logos/dark-logo.svg" class="dark-logo" alt="Logo-Dark" />
                            <img src="assets/images/logos/light-logo.svg" class="light-logo" alt="Logo-light" />
                        </a>
                        <!-- Ensure image visibility on smaller screens -->
                        <div class="d-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
                            <img src="/assets/images/backgrounds/Social-tree-cuate.png" alt="" class="img-fluid" width="100%" style="max-width: 500px;">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-xxl-6">
                        <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100 text-white" style="background-color: rgb(178, 1, 99)">
                            <div class="d-flex align-items-center w-100 h-100">
                                <div class="card-body">
                                    <div class="mb-5">
                                        <h2 class="fw-bolder fs-7 mb-1 text-white">Link Your Social Accounts</h2>
                                        <p class="mb-0">
                                            Connect your social media accounts to streamline your experience and manage everything from one place. This will help us ensure seamless integration across all platforms.
                                        </p>
                                    </div>
                                    <div class="col-12">
                                        <form>
                                            <div class="row">
                                                <!-- Instagram Button -->
                                                <div class="col-12 mb-3">
                                                    <a class="btn btn-lg d-flex align-items-center justify-content-center rounded-pill"
                                                        href="{{ route('account.type', ['ac_type' => Crypt::encrypt('instagram')]) }}"
                                                        role="button"
                                                        style="background-color: #000; border: 2px solid #000 !important;">
                                                        <i class="fab fa-instagram me-2 fs-7" style="color:rgb(178, 1, 99);"></i>
                                                        <div class="text-center">
                                                            <h5 class="mb-0 fw-bold text-white">Link Your Instagram</h5>
                                                        </div>
                                                    </a>
                                                </div>

                                                @if($instagrams ?? '')
                                                <div class="col-12 mb-3">
                                                    <a class="btn btn-lg d-flex align-items-center justify-content-center rounded-pill"
                                                        href="#"
                                                        role="button"
                                                        style="background-color: #000; border: 2px solid #000 !important;">
                                                        <!-- <span class="text-white px-4">Linked Accounts: </span> -->
                                                        @foreach($instagrams as $key => $username)
                                                        <i class="fab ms-4 me-2 fa-instagram  fs-7" style="color:rgb(178, 1, 99);"></i>
                                                        <div class="text-center">
                                                            <h5 class="mb-0 fw-bold text-white"><b>{{ $username}}</b></h5>
                                                        </div>
                                                        @endforeach
                                                    </a>
                                                </div>
                                                @endif
                                                <!-- Youtube Button -->
                                                <div class="col-12 mb-3">
                                                    <a class="btn btn-lg    d-flex align-items-center justify-content-center  rounded-pill  shadow-sm" href="{{ route('account.type', ['ac_type' => Crypt::encrypt('youtube')]) }}" role="button" style="background-color: #fff; border: 2px solid #ddd;">
                                                        <i class="fab fa-youtube me-2 fs-7 " style=" color:rgb(178, 1, 99);"></i>
                                                        <div class="text-center">
                                                            <h5 class="mb-0 fw-bold text-dark">Link You'r Youtube</h5>
                                                        </div>
                                                    </a>
                                                </div>
                                                @if($youtubes ?? '')
                                                <div class="col-12 mb-3">
                                                    <a class="btn btn-lg d-flex align-items-center justify-content-center rounded-pill"
                                                        href="#"
                                                        role="button"
                                                        style="background-color: #ffff; border: 2px solid #ffff !important;">
                                                        <!-- <span class="text-white px-4">Linked Accounts: </span> -->
                                                        @foreach($youtubes as $key => $username)
                                                        <i class="fab ms-4 me-2 fa-instagram  fs-7" style="color:rgb(178, 1, 99);"></i>
                                                        <div class="text-center">
                                                            <h5 class="mb-0 fw-bold text-dark"><b>{{ $username}}</b></h5>
                                                        </div>
                                                        @endforeach
                                                    </a>
                                                </div>
                                                @endif
                                            </div>
                                        </form>
                                    </div>
                                    <div class="mb-5">
                                        <p class="mb-0">
                                            Please provide the email address associated with your account, and we will send you a link to access and review the updated Agreement & Conditions.
                                            <a class="btn btn-link fw-bold text-white" href="#">View Details</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="dark-transparent sidebartoggler"></div>
    <!-- Import Js Files -->

    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/assets/js/app.min.js"></script>
    <script src="/assets/js/app.minisidebar.init.js"></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/simplebar/dist/simplebar.min.js"></script>

    <script src="/assets/js/sidebarmenu.js"></script>
    <script src="/assets/js/theme.js"></script>

</body>

</html>