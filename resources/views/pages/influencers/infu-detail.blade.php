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
                            <img src="/assets/images/backgrounds/Influencer-amico.png" alt="" class="img-fluid" width="100%" style="max-width: 500px;">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-xxl-6">
                        <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100 text-white" style="background-color: rgb(178, 1, 99)">
                            <div class="d-flex align-items-center w-100 h-100">
                                <div class="card-body">

                                    <div class="mb-4">
                                        <h2 class="fw-bolder fs-7  text-white">Enter Your Information</h2>
                                        <p class="mb-0">
                                            Please provide the details associated with your channel, and we will verify the information for further processing.
                                        </p>
                                    </div>
                                    <div class=" card bg-light p-4 pt-4 main_card col-12 mb-4">
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif

                                        <form action="{{ route('insta.details.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $id }}">

                                            <div class="mb-2">
                                                <label for="" style="color: #b20163;"><b class="fs-4">Select Influencer Type</b></label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="content_creator" name="influencer_type[]">
                                                    <label class="form-check-label">
                                                        Influencer/Content Creator
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="theme_page" name="influencer_type[]">
                                                    <label class="form-check-label">
                                                        Theme Page
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="memers" name="influencer_type[]">
                                                    <label class="form-check-label">
                                                        Memers
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="" style="color: #b20163;"><b class="fs-4">Channel Language</b></label>
                                                <select class="form-select" aria-label="Default select example" name="channel_language">
                                                    <option value="hindi" selected="">Hindi</option>
                                                    <option value="english">English</option>
                                                    <option value="bhojpuri">Bhojpuri</option>
                                                    <option value="marathi">Marathi</option>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="" style="color: #b20163;"><b class="fs-4">Current Subscribers</b></label>
                                                <input type="number" name="subscriber" class="form-control" placeholder="Enter Current Subscribers" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="" style="color: #b20163;"><b class="fs-4">Pick Your Category</b></label>
                                                <p><b>Select Up to 3 Categories</b></p>
                                                <div class="container">
                                                    <div class="row mb-2">
                                                        <div class="col-12 col-sm-4 mb-2 mb-sm-0">
                                                            <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" name="category[]" value="comedy">
                                                            <label class="btn btn-outline-dark w-100" for="btncheck1">Comedy</label>
                                                        </div>
                                                        <div class="col-12 col-sm-4 mb-2 mb-sm-0">
                                                            <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off" name="category[]" value="meme">
                                                            <label class="btn btn-outline-dark w-100" for="btncheck2">Meme</label>
                                                        </div>
                                                        <div class="col-12 col-sm-4 mb-2 mb-sm-0">
                                                            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off" name="category[]" value="decor">
                                                            <label class="btn btn-outline-dark w-100" for="btncheck3">Decor</label>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-12 col-sm-4 mb-2 mb-sm-0">
                                                            <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off" name="category[]" value="wedding">
                                                            <label class="btn btn-outline-dark w-100" for="btncheck4">Wedding</label>
                                                        </div>
                                                        <div class="col-12 col-sm-4 mb-2 mb-sm-0">
                                                            <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off" name="category[]" value="business">
                                                            <label class="btn btn-outline-dark w-100" for="btncheck5">Business</label>
                                                        </div>
                                                        <div class="col-12 col-sm-4 mb-2 mb-sm-0">
                                                            <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off" name="category[]" value="automobile">
                                                            <label class="btn btn-outline-dark w-100" for="btncheck6"><span style="font-size:11px;">Automobile</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn w-100 text-light" style="background-color: #b20163"><b>NEXT</b></button>
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

</body>

</html>