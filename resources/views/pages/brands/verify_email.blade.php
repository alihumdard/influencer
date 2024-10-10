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

    <style>
        .custom-input {
            /* background-color: #dddd; */
            color: white !important;
        }

        .custom-input::placeholder {
            color: rgba(255, 255, 255, 0.5) !important;
        }

        .custom-input:focus {
            background-color: white !important;
            color: black !important;
            outline: none;
        }
    </style>
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
                            <img src="/assets/images/backgrounds/Email capture-pana.png" alt="" class="img-fluid" width="100%" style="max-width: 500px;">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-xxl-6">
                        <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100 text-white" style="background-color: rgb(178, 1, 99)">
                            <div class="d-flex align-items-center w-100 h-100">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <h2 class="fw-bolder fs-7 mb-3 text-white">Verify Your Email</h2>
                                        <p class="mb-0">
                                            Please enter the email address associated with your account, and we will send you a verification link to confirm your email address.
                                        </p>
                                    </div>
                                    <div class="col-12">
                                        <form action="{{ route('generate.email.otp') }}" method="post">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label text-white">Email address</label>
                                                <input type="email" class="form-control custom-input" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>

                                            <button type="submit" class="btn fw-bold w-100 py-2 mb-3 bg-white text-dark">Verify Now</button>
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

        <div class="dark-transparent sidebartoggler"></div>
        <!-- Import Js Files -->

        <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="/assets/js/app.min.js"></script>
        <script src="/assets/js/app.minisidebar.init.js"></script>
        <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/libs/simplebar/dist/simplebar.min.js"></script>

        <script src="/assets/js/sidebarmenu.js"></script>
        <script src="/assets/js/theme.js"></script>

        <!-- Add this script to enable Bootstrap validation styles -->
        <script>
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    var forms = document.getElementsByClassName('needs-validation');
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                });
            })();
        </script>
</body>

</html>