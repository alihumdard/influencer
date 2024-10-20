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
            text-align: center;
            color: white !important;
            font-weight: bold;
            border: 1px solid #ccc;
            font-size: 20px;
        }

        .custom-input::placeholder {
            color: rgba(255, 255, 255, 0.5) !important;
        }

        .custom-input:focus {
            background-color: white !important;
            color: black !important;
            outline: none;
            border: 2px solid #000;
        }

        .custom-input:blur {
            background-color: white !important;
            color: black !important;
            outline: none;
            border: 2px solid #000;
        }

        .custom-input:not(:placeholder-shown) {
            color: black !important;
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
                            <img src="assets/images//logos/dark-logo.svg" class="dark-logo" alt="Logo-Dark" />
                            <img src="assets/images//logos/light-logo.svg" class="light-logo" alt="Logo-light" />
                        </a>
                        <div class=" d-lg-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
                            <img src="/assets/images/backgrounds/enter_otp.png" alt="" class="img-fluid" width="500">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-xxl-6">
                        <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100">
                            <div class="d-flex align-items-center w-100 h-100" style="background-color: rgb(178, 1, 99)">
                                <div class="card-body text-white">
                                    <div class="mb-5">
                                        <h3 class="fw-bolder fs-7 mb-3 text-white">Two Step Verification</h3>
                                        <p>We sent a verification code to your mobile. Enter the code from the mobile in the field below.
                                        </p>
                                        <div class="d-flex align-items-center ">
                                            <h6 class="fw-bolder mb-0 text-white">+91******1234</h6>
                                            <a href="#" class="ms-2 text-white">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <form action="{{ route('verify.otp') }}" method="POST">
                                            <input type="hidden" name="otp_type" value="{{$otp_type}}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label fw-semibold text-white">Type your 5 digits security code</label>
                                                <div class="d-flex align-items-center gap-2 gap-sm-3">
                                                    <input type="text" class="form-control custom-input otp-input" name="otp[]" maxlength="1" required>
                                                    <input type="text" class="form-control custom-input otp-input" name="otp[]" maxlength="1" required>
                                                    <input type="text" class="form-control custom-input otp-input" name="otp[]" maxlength="1" required>
                                                    <input type="text" class="form-control custom-input otp-input" name="otp[]" maxlength="1" required>
                                                    <input type="text" class="form-control custom-input otp-input" name="otp[]" maxlength="1" required>
                                                </div>
                                                @if ($errors->has('otp'))
                                                <div class=" mt-1 fw-bold text-dark">
                                                    * {{ $errors->first('otp') }}
                                                </div>
                                                @endif

                                            </div>
                                            <button class="btn w-100 py-8 mb-4 bg-white text-dark" type="submit">Verify My Account</button>
                                            <div class="d-flex align-items-center">
                                                <p class="fs-4 mb-0 text-white">Didn't get the code?</p>
                                                <a class="text-primary fw-medium ms-2 text-black" href="javascript:void(0)">Resend</a>
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

    <script>
        $(document).ready(function() {
            $('.otp-input').on('input', function() {
                let $this = $(this);
                if ($this.val().length === 1) {
                    $this.next('.otp-input').focus();
                }
                if ($this.val().length === 0) {
                    $this.prev('.otp-input').focus();
                }
            });

            $('.otp-input').on('paste', function(e) {
                let pasteData = (e.originalEvent || e).clipboardData.getData('text');
                if (pasteData.length === 5 && /^\d+$/.test(pasteData)) {
                    let inputs = $('.otp-input');
                    inputs.each(function(index) {
                        $(this).val(pasteData.charAt(index));
                    });
                    inputs.last().focus();
                }
                e.preventDefault();
            });
        });
    </script>
</body>

</html>