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
                                        <h2 class="fw-bolder fs-7 mb-3 text-white">Enter Your Brand Information</h2>
                                        <p class="mb-0">
                                            Please provide the details associated with your brand, and we will verify the information for further processing.
                                        </p>

                                    </div>
                                    <div class="col-12">
                                        <form action="{{ route('save.brand.detail') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="brand_name" class="form-label text-white">Brand Name</label>
                                                <input type="text" id="brand_name" class="form-control custom-input" name="brand_name" placeholder="Brand Name" aria-describedby="Brand Name" required>
                                                @error('brand_name')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="contact_person_name" class="form-label text-white">Contact Person</label>
                                                <input type="text" class="form-control custom-input" id="contact_person_name" name="contact_person_name" placeholder="Contact Person Name" aria-describedby="Contact Person Name" required>
                                                @error('contact_person_name')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="contact_person_designation" class="form-label text-white">Contact Person Designation</label>
                                                <input type="text" class="form-control custom-input" id="contact_person_designation" name="contact_person_designation" placeholder="Contact Person Designation" aria-describedby="Contact Person Designation" required>
                                                @error('contact_person_designation')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="brand_type" class="form-label text-white">Select Brand Type</label>
                                                <select class="form-select custom-input mr-sm-2" id="brand_type" name="brand_type" required>
                                                    <option selected disabled>Choose...</option>
                                                    @if ($brand_types)
                                                    @foreach ($brand_types as $brand_type)
                                                    <option value="{{ $brand_type->name }}">{{ $brand_type->name }}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                                @error('brand_type')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="business_type" class="form-label text-white">Select Business Type</label>
                                                <select class="form-select custom-input mr-sm-2" id="business_type" name="business_type" required>
                                                    <option selected disabled>Choose...</option>
                                                    @if ($business_types)
                                                    @foreach ($business_types as $business_type)
                                                    <option value="{{ $business_type->name }}">{{ $business_type->name }}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                                @error('business_type')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="address_1" class="form-label text-white">Street Address</label>
                                                <textarea name="address_1" id="address_1" placeholder="Address Line 1" class="form-control custom-input" required></textarea>
                                                @error('address_1')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="address_2" class="form-label text-white">Street Address</label>
                                                <textarea name="address_2" id="address_2" placeholder="Address Line 2" class="form-control custom-input"></textarea>
                                            </div>

                                            <button type="submit" class="btn fw-bold w-100 py-8 mb-3 bg-white text-dark">Submit</button>
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