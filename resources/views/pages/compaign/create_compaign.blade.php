@extends('layouts.default')
@section('title', 'Dashboard')
@section('content')
<style>
    .form-container {
        background: #FFFFFF;
        border: 1px solid #FFFFFF;
        display: none;
        border-radius: 20px;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }

    .bg-dark {
        background: #D63388 !important;
    }

    .btn-secondary {
        background: #D63388 !important;
        border: 1px solid !important;
        color: #fff !important;
    }



    .btn-primary {
        background: #D63388 !important;
        border: 1px solid !important;
    }

    .bg-dark-form {
        background: white !important;
    }

    .btn-left {
        border-radius: 10px;
    }

    .btn-right {
        border-radius: 10px;
    }

    .btn-dark {
        background: #4a5363;
        margin-right: 10px;
    }
</style>
<div class="body-wrapper">
    <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Create Compaign</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-muted text-decoration-none" href="/minisidebar/index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">Create Compaign</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="../assets/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-title">Compaign Details fill it</h4>
                        <p class="card-subtitle mb-3"> Enter proper data and fill it</p>
                        <form action="{{ route('store.compaign') }}" method="POST" id="compaign-form" class="validation-wizard wizard-circle mt-5">
                            @csrf
                            <!-- Step 1 -->
                            <h6>Step 1</h6>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="campaign_name">Campaign Name:</label>
                                            <input type="text" class="form-control" id="campaign_name" name="campaign_name" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="campaign_banner">Campaign Banner:</label>
                                            <input type="file" class="form-control" id="campaign_banner" name="campaign_banner" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Influencer Type:</label>
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" id="influencer_type_content_creator" name="influencer_type" value="content_creator">
                                                        <label class="form-check-label" for="influencer_type_content_creator">Content Creator</label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" id="influencer_type_memers" name="influencer_type" value="memers">
                                                        <label class="form-check-label" for="influencer_type_memers">Memers</label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" id="influencer_type_influencer" name="influencer_type" value="influencer">
                                                        <label class="form-check-label" for="influencer_type_influencer">Influencer</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Gender:</label>
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" id="gender_male" name="gender" value="male">
                                                        <label class="form-check-label" for="gender_male">Male</label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" id="gender_female" name="gender" value="female">
                                                        <label class="form-check-label" for="gender_female">Female</label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" id="gender_other" name="gender" value="other">
                                                        <label class="form-check-label" for="gender_other">Other</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="campaign_description" class="form-label">Campaign Description:</label>
                                            <textarea class="form-control" id="campaign_description" name="campaign_description" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Step 2 -->
                            <h6>Step 2</h6>
                            <section>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Promotion Type:</label>
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" id="promotion_type_paid" name="promotion_type" value="paid">
                                                        <label class="form-check-label" for="promotion_type_paid">Paid</label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" id="promotion_type_barter" name="promotion_type" value="barter">
                                                        <label class="form-check-label" for="promotion_type_barter">Barter</label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" id="promotion_type_paid_barter" name="promotion_type" value="paid+barter">
                                                        <label class="form-check-label" for="promotion_type_paid_barter">Paid + Barter</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Platform:</label>
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" id="platform_instagram" name="platform" value="instagram">
                                                        <label class="form-check-label" for="platform_instagram">Instagram</label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" id="platform_youtube" name="platform" value="youtube">
                                                        <label class="form-check-label" for="platform_youtube">YouTube</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Region:</label>
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="region_north_america" name="region[]" value="north_america">
                                                        <label class="form-check-label" for="region_north_america">North America</label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="region_europe" name="region[]" value="europe">
                                                        <label class="form-check-label" for="region_europe">Europe</label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="region_asia" name="region[]" value="asia">
                                                        <label class="form-check-label" for="region_asia">Asia</label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="region_africa" name="region[]" value="africa">
                                                        <label class="form-check-label" for="region_africa">Africa</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Language:</label>
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="language_english" name="language[]" value="english">
                                                        <label class="form-check-label" for="language_english">English</label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="language_french" name="language[]" value="french">
                                                        <label class="form-check-label" for="language_french">French</label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="language_spanish" name="language[]" value="spanish">
                                                        <label class="form-check-label" for="language_spanish">Spanish</label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="language_mandarin" name="language[]" value="mandarin">
                                                        <label class="form-check-label" for="language_mandarin">Mandarin</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="product_description">Product Description:</label>
                                            <textarea class="form-control" id="product_description" name="product_description" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Step 3 -->
                            <h6>Step 3</h6>
                            <section>
                                <div id="product-container">
                                    <div class="row product-row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="wint1">Product Name :</label>
                                                <input type="text" class="form-control required" name="product_name[]" id="product_name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="campaign_banner">Product Image:</label>
                                                <input type="file" class="form-control" id="product_image" name="product_image[]" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" id="add-product" class="btn btn-primary">Add Another Product</button>
                            </section>

                            <!-- Step 4 -->
                            <h6>Step 4</h6>
                            <section>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="container my-4">
                                                <!-- Reels Card -->
                                                <div class="card bg-dark text-white mb-3 p-3 reel-card">
                                                    <div class="d-flex flex-row align-items-center">
                                                        <i class="fas fa-file-video"></i>
                                                        <span class="ms-2">Reels</span>
                                                        <button class="btn btn-secondary ms-auto add-btn">Add</button>
                                                    </div>
                                                </div>

                                                <!-- Story Card -->
                                                <div class="card bg-dark text-white mb-3 p-3 story-card">
                                                    <div class="d-flex flex-row align-items-center">
                                                        <i class="fas fa-plus-circle"></i>
                                                        <span class="ms-2">Story</span>
                                                        <button class="btn btn-secondary ms-auto add-btn">Add</button>
                                                    </div>
                                                </div>

                                                <!-- Video Card -->
                                                <div class="card bg-dark text-white mb-3 p-3 video-card">
                                                    <div class="d-flex flex-row align-items-center">
                                                        <i class="fas fa-video"></i>
                                                        <span class="ms-2">Video</span>
                                                        <button class="btn btn-secondary ms-auto add-btn">Add</button>
                                                    </div>
                                                </div>

                                                <!-- Post Card -->
                                                <div class="card bg-dark text-white mb-3 p-3 post-card">
                                                    <div class="d-flex flex-row align-items-center">
                                                        <i class="far fa-newspaper"></i>
                                                        <span class="ms-2">Post</span>
                                                        <button class="btn btn-secondary ms-auto add-btn">Add</button>
                                                    </div>
                                                </div>

                                                <!-- NEXT Button -->
                                                <button class="btn btn-primary w-100 mt-3 next-btn">NEXT</button>

                                                <!-- Hidden Form Template -->
                                                <div class="form-container bg-dark text-white p-4 mt-3">
                                                    <form>
                                                        <div class="bg-white p-5 rounded shadow-lg w-100 max-w-md mx-auto">
                                                            <h2 class="h5 fw-bold mb-4">Add Reel</h2>

                                                            <!-- Buttons Row -->
                                                            <div class="d-flex mb-4">
                                                                <button
                                                                    id="shootReelBtn"
                                                                    class="btn btn-dark text-white w-50 btn-left">
                                                                    Shoot Reel
                                                                </button>
                                                                <button
                                                                    id="repostReelBtn"
                                                                    class="btn btn-secondary text-dark w-50 btn-right">
                                                                    Repost Reel
                                                                </button>
                                                            </div>

                                                            <!-- Description Field -->
                                                            <div class="mb-3">
                                                                <label for="description" class="form-label">Description (Optional)</label>
                                                                <textarea
                                                                    id="description"
                                                                    class="form-control"
                                                                    rows="3"
                                                                    placeholder="Describe the campaign..."></textarea>
                                                            </div>

                                                            <!-- Instagram Page Field -->
                                                            <div class="mb-3">
                                                                <label for="instagramPage" class="form-label">Brand Instagram Page</label>
                                                                <input
                                                                    type="text"
                                                                    id="instagramPage"
                                                                    class="form-control"
                                                                    placeholder="Enter Instagram page URL" />
                                                            </div>

                                                            <!-- Tags Field -->
                                                            <div class="mb-3">
                                                                <label for="tags" class="form-label">Tags</label>
                                                                <input
                                                                    type="text"
                                                                    id="tags"
                                                                    class="form-control"
                                                                    placeholder="Enter tags, separated by commas" />
                                                            </div>

                                                            <!-- Reel Script Field -->
                                                            <div class="mb-3">
                                                                <label for="script" class="form-label">Enter Script or Upload Reel</label>
                                                                <input
                                                                    type="text"
                                                                    id="script"
                                                                    class="form-control"
                                                                    placeholder="Enter reel script" />
                                                            </div>

                                                            <!-- Reel upload field -->

                                                            <div class="input-group mb-3">
                                                                <input type="file" class="form-control mt-3" id="campaign_banner" name="campaign_banner" />
                                                            </div>

                                                            <!-- Submit Button -->
                                                            <button class="btn btn-primary w-100 mt-3">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function handleColorTheme(e) {
            $("html").attr("data-color-theme", e);
            $(e).prop("checked", !0);
        }
    </script>
    @stop

    @pushOnce('scripts')
    <script src="/assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="/assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/assets/js/forms/form-wizard.js"></script>


    <script>
        $("#add-product").on("click", function() {
            var newProductRow = `
            <div class="row product-row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="wint1">Product Name :</label>
                        <input type="text" class="form-control required" name="product_name[]" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label" for="product_image">Product Image:</label>
                        <input type="file" class="form-control" name="product_image[]" />
                    </div>
                </div>
            </div>
        `;
            $("#product-container").append(newProductRow);
        });


        const addBtns = document.querySelectorAll(".add-btn");
        const formTemplate = document.querySelector(".form-container");


        addBtns.forEach((btn) => {
            btn.addEventListener("click", (e) => {
                e.preventDefault();
                const parentCard = btn.closest(".card");
                const existingForm = parentCard.querySelector(".form-container");

                if (existingForm) {
                    // Toggle visibility if form already exists
                    existingForm.style.display =
                        existingForm.style.display === "none" ? "block" : "none";
                } else {
                    // Clone form and append to the card
                    const formClone = formTemplate.cloneNode(true);
                    formClone.style.display = "block";
                    parentCard.appendChild(formClone);
                }
            });
        });
    </script>
    @endPushOnce