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
    <link rel="stylesheet" href="/assets/css/custom.css" />

    <title>Link Instagram</title>
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
                                        <h2 class="fw-bolder fs-7 mb-1 text-white">How to Verify Instagram?</h2>
                                        <p class="mb-0">
                                            Copy the code and send it to our Instagram inbox. Ensure you send it from the connected Instagram account for a seamless experience.
                                        </p>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <form>
                                            <div class="row">

                                                <div class="video-container mb-3">
                                                    <video id="instructionVideo" controls width="100%" height="auto">
                                                        <source src="path_to_your_video.mp4" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                                <div class="mb-2">
                                                    <label for="intasearch" class="form-label text-white">Copy Verification Code</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text copy-btn bg-dark" onclick="copyOTP()" id="basic-addon1"><img src="/assets/images/icons/iv_white_copy.png" alt="" style="height: 15px; width: 15px;" /></span>
                                                        <input type="text" id="otp" class="form-control custom-input" value="{{$otp}}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="d-flex mt-2 justify-content-center pb-1">
                                                    <a href="https://www.instagram.com/direct/t/340282366841710300949128165366488264355" target="_blank" id="verifyButton" class="btn btn-lg px-4 bg-white">
                                                        <b class="text-dark">Send</b>
                                                        <img src="/assets/images/icons/iv_share.png" alt="Send Icon" style="height: 25px; width: 25px; margin-left: 8px;">
                                                    </a>
                                                    <a href="{{ route('socail.insta.details') }}" id="nextButton" class="btn btn-lg text-light px-4 bg-dark ms-3" disabled>
                                                        <b class="bg-dark">Next</b>
                                                        <img src="/assets/images/icons/iv_right_white.png" alt="Next Icon" style="height: 15px; width: 15px; margin-left: 8px;">
                                                    </a>
                                                </div>
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
        function copyOTP() {
            var otp = document.getElementById("otp");
            otp.select();
            otp.setSelectionRange(0, 99999); /* For mobile devices */
            navigator.clipboard.writeText(otp.value);
            alert("OTP copied: " + otp.value);
        }
        $(document).ready(function() {
            $('#nextButton').prop('disabled', true);
            $('#verifyButton').on('click', function() {
                $('#nextButton').prop('disabled', false);
            });
        });
    </script>
</body>

</html>