@extends('layouts.default')
@section('title', 'Dashboard')
@section('content')
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
                        <form action="#" class="validation-wizard wizard-circle mt-5">
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
                                                        <input class="form-check-input" type="radio" id="promotion_type_paid" name="promotion_type" value="paid" onchange="toggleAddProductButton()">
                                                        <label class="form-check-label" for="promotion_type_paid">Paid</label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" id="promotion_type_barter" name="promotion_type" value="barter" onchange="toggleAddProductButton()">
                                                        <label class="form-check-label" for="promotion_type_barter">Barter</label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" id="promotion_type_paid_barter" name="promotion_type" value="paid+barter" onchange="toggleAddProductButton()">
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
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="wint1">Interview For :</label>
                                            <input type="text" class="form-control required" id="wint1" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="wintType1">Interview Type :</label>
                                            <select class="form-select required" id="wintType1" data-placeholder="Type to search cities"
                                                name="wintType1">
                                                <option value="Banquet">Normal</option>
                                                <option value="Fund Raiser">Difficult</option>
                                                <option value="Dinner Party">Hard</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="wLocation1">Location :</label>
                                            <select class="form-select required" id="wLocation1" name="wlocation">
                                                <option value="">Select City</option>
                                                <option value="India">India</option>
                                                <option value="USA">USA</option>
                                                <option value="Dubai">Dubai</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="wjobTitle2">Interview Date :</label>
                                            <input type="date" class="form-control required" id="wjobTitle2" />
                                        </div>
                                        <div class="mb-3">
                                            <label>Requirements :</label>
                                            <div class="c-inputs-stacked">
                                                <div class="form-check">
                                                    <input type="radio" id="customRadio16" name="customRadio" class="form-check-input" />
                                                    <label class="form-check-label" for="customRadio16">Employee</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                                                    <label class="form-check-label" for="customRadio17">Contract</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Step 4 -->
                            <h6>Step 4</h6>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="behName1">Behaviour :</label>
                                            <input type="text" class="form-control required" id="behName1" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="participants1">Confidance</label>
                                            <input type="text" class="form-control required" id="participants1" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="participants1">Result</label>
                                            <select class="form-select required" id="participants1" name="location">
                                                <option value="">Select Result</option>
                                                <option value="Selected">Selected</option>
                                                <option value="Rejected">Rejected</option>
                                                <option value="Call Second-time"> Call Second-time </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="decisions1">Comments</label>
                                            <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label>Rate Interviwer :</label>
                                            <div class="c-inputs-stacked">
                                                <div class="form-check">
                                                    <input type="radio" id="customRadio11" name="customRadio" class="form-check-input" />
                                                    <label class="form-check-label" for="customRadio11">1 star</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="customRadio12" name="customRadio" class="form-check-input" />
                                                    <label class="form-check-label" for="customRadio12">2 star</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="customRadio13" name="customRadio" class="form-check-input" />
                                                    <label class="form-check-label" for="customRadio13">3 star</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="customRadio14" name="customRadio" class="form-check-input" />
                                                    <label class="form-check-label" for="customRadio14">4 star</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="customRadio15" name="customRadio" class="form-check-input" />
                                                    <label class="form-check-label" for="customRadio15">5 star</label>
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



@endPushOnce