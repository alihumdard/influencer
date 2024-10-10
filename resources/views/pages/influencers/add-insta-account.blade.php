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
                                        <h2 class="fw-bolder fs-7 mb-1 text-white">Link Your Instagram Accounts</h2>
                                        <p class="mb-0">
                                            Connect your Instagram accounts to streamline your experience and manage everything from one place. This will help us ensure seamless integration across all platforms.
                                        </p>
                                    </div>

                                    <form>
                                        <div class="row">
                                            <div class="mb-3">
                                                <label for="intasearch" class="form-label text-white">Search By Username</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon1">@</span>
                                                    <input type="text" class="form-control custom-input" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="intasearch">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <a href="javascript:void(0)" class="btn fw-bold w-100 py-8 mb-3 bg-white text-dark" onclick="searchInstagramUser()">Search Now</a>
                                                <a href="javascript:void(0)" class="btn fw-bold w-100 py-8 mb-3 bg-dark fw-bold text-white" data-bs-toggle="modal" data-bs-target="#instruction-insta-modal">Watch Instruction</a>
                                            </div>
                                        </div>
                                    </form>

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

    <!-- Instruction Modal -->
    <div id="instruction-insta-modal" class="modal fade" tabindex="-1"
        aria-labelledby="danger-header-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header modal-colored-header text-white text-center" style="background-color: rgb(178, 1, 99)">
                    <h4 class="modal-title text-white" style="text-align: center !important;" id="danger-header-modalLabel">
                        How to connet Instagram ?
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="mt-0">Instructions</h5>

                    <!-- Instructional Video -->
                    <div class="video-container mb-3">
                        <video id="instructionVideo" controls width="100%" height="auto">
                            <source src="path_to_your_video.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <!-- Optional text after the video -->
                    <p>
                        Follow the instructions in the video to verify your account and link your social media accounts with our system.
                    </p>

                    <p>
                        If you have any questions, feel free to contact our support team for further assistance.
                    </p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn bg-danger-subtle text-danger font-medium">
                        Save changes
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Ifram Modal Modal -->
    <div id="add-insta-modal" class="modal fade" tabindex="-1" aria-labelledby="danger-header-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header modal-colored-header text-white text-center" style="background-color: rgb(178, 1, 99)">
                    <h4 class="modal-title text-white" style="text-align: center !important;" id="danger-header-modalLabel">
                        Is that your Instagram?
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="mt-0 text-center">Verification</h5>

                    <!-- Instagram Embed with Scrollable Iframe -->
                    <div class="container d-flex justify-content-center align-items-center mb-3" style="height: 400px;">
                        <div class="embed-responsive embed-responsive-16by9" style="width: 90%; height: 100%; border: 1px solid #ddd; overflow: hidden;">
                            <iframe id="instagram-iframe" src="" style="width: 100%; height: 100%; border: none; overflow-y: auto;" scrolling="yes" frameborder="0"></iframe>
                        </div>
                    </div>

                    <!-- Form Section -->
                    <form action="{{route('generate.social.otp') }}" method="POST" class="text-center">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" autocomplete="off">
                        <input type="hidden" name="platform" id="socail_ac" value="instagram">
                        <input type="hidden" name="username" id="hidden-username" value="">

                        <!-- Button Section -->
                        <div class="d-flex justify-content-center align-items-center gap-3 mt-5">
                            <button type="button" data-bs-dismiss="modal" class="btn btn-lg btn-dark" style="width: 200px"><b>Not my account</b></button>
                            <button type="submit" class="btn btn-lg text-light" style="background-color: var(--bs-pink); width: 200px;"><b>Yes It's My</b></button>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->



    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/assets/js/app.min.js"></script>
    <script src="/assets/js/app.minisidebar.init.js"></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/simplebar/dist/simplebar.min.js"></script>

    <script src="/assets/js/sidebarmenu.js"></script>
    <script src="/assets/js/theme.js"></script>
    <script>
        function searchInstagramUser() {
            var username = document.getElementById('intasearch').value;
            if (!username) {
                alert("Please enter a username.");
                return;
            }
            var iframe = document.getElementById('instagram-iframe');
            iframe.src = `https://www.instagram.com/${username}/embed`;
            var modal = new bootstrap.Modal(document.getElementById('add-insta-modal'));
            modal.show();
            document.getElementById('hidden-username').value = username;
        }
    </script>

</body>

</html>