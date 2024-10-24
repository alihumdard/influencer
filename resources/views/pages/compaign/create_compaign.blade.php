@extends('layouts.default')
@section('title', 'Dashboard')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
    <style>
        .form-container {
            background: #FFFFFF;
            border: 1px solid #FFFFFF;
            display: none;
            border-radius: 20px;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        /* Styling for tag input */
        .tag-input-container {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            padding: 8px 16px;
            border: 1px solid #dfe5ef;
            border-radius: 8px;
            cursor: text;
        }

        .tag-input-container:focus-within {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .tag {
            background-color: #007bff;
            color: #fff;
            border-radius: 20px;
            padding: 5px 10px;
            margin-right: 5px;
            display: flex;
            align-items: center;
        }

        .tag i {
            margin-left: 5px;
            cursor: pointer;
        }

        .tag-input-container input {
            border: none;
            outline: none;
            flex: 1;
            min-width: 100px;
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

        .step-container {
            position: relative;
            text-align: center;
            transform: translateY(-43%);
        }

        .progress-bar {
            background-color: #D63388 !important;
        }

        .step-circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #fff;
            border: 2px solid #D63388;
            line-height: 30px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .step-circle-filled {
            color: #fff;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #D63388;
            border: 2px solid #D63388;
            line-height: 30px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .step-line {
            position: absolute;
            top: 16px;
            left: 50px;
            width: calc(100% - 100px);
            height: 2px;
            background-color: #D63388;
            z-index: -1;
        }

        #multi-step-form {
            overflow-x: hidden;
        }


        .upload__box {
            padding: 50px 0;
            min-height: 342px;
            border: 1px dotted;
            position: relative;
            background: white;
        }

        .upload__inputfile {
            width: .1px;
            height: .1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .upload__btn {
            color: #fff;
            text-align: center;
            min-width: 65px;
            height: 65px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border: 2px solid;
            background-color: #4045ba;
            border-color: #4045ba;
            border-radius: 56px;
            line-height: 26px;
            font-size: 35px;
            position: absolute;
            top: 37%;
            font-weight: 900;
            left: 43%;
        }

        .uploaded__btn {
            color: #fff;
            text-align: center;
            min-width: 55px;
            height: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border: 2px solid;
            background-color: #4045ba;
            border-color: #4045ba;
            border-radius: 56px;
            line-height: 26px;
            font-size: 35px;
            position: absolute;
            font-weight: 900;
            bottom: 5%;
            right: 6%;
            bottom: 9%;
        }

        .upload__btn:hover {
            background-color: unset;
            color: #4045ba;
            transition: all .3s ease;
        }

        .upload__btn-box {
            margin-bottom: 10px;
        }

        .upload__img-wrap {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
        }

        .upload__img-box {
            width: 200px;
            padding: 0 10px;
            margin-bottom: 12px;
        }

        .upload__img-close {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 10px;
            right: 10px;
            text-align: center;
            line-height: 24px;
            z-index: 1;
            cursor: pointer;
        }

        .upload__img-close:after {
            content: '\2716';
            font-size: 14px;
            color: white;
        }

        .img-bg {
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
            padding-bottom: 100%;
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
            {{-- Alert strat --}}
            <div class="alert alert-success" style="display: none" id="draftAlert" role="alert">
                <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0">A draft campaign is available. Do you want to continue with the draft?</p>
                    <div>
                        <button type="button" class="btn btn-primary" onclick="handleDraft(true);">Yes</button>
                        <button type="button" class="btn btn-secondary" onclick="handleDraft(false);">No</button>
                    </div>

                </div>
            </div>
            {{-- Alerts Ends --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-body ">
                        <div id="container" class="container justify-content-center mt-5">
                            <div class="row justify-content-center">
                                <div class="col-md-8 mb-4">
                                    <div class="progress px-1" style="height: 3px;">
                                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="step-container d-flex justify-content-between">
                                        <div class="step-circle step-circle-1">1</div>
                                        <div class="step-circle step-circle-2">2</div>
                                        <div class="step-circle step-circle-3">3</div>
                                        <div class="step-circle step-circle-4">4</div>
                                    </div>
                                </div>
                            </div>

                            <div id="multi-step-form" class="row justify-content-center">
                                <div class="col-md-10">
                                    <div class="step step-1">
                                        <section>
                                            <form action="{{ route('store.step1.compaign') }}" id="form_step_1"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="campaign_name">Campaign
                                                                Name:</label>
                                                            <input type="text" class="form-control" id="campaign_name"
                                                                name="campaign_name" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="campaign_banner">Campaign
                                                                Banner:</label>
                                                            <input type="file" class="form-control float-right"
                                                                id="campaign_banner" name="campaign_banner" />
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
                                                                        <input class="form-check-input" type="radio"
                                                                            id="influencer_type_content_creator"
                                                                            name="influencer_type" value="content_creator">
                                                                        <label class="form-check-label"
                                                                            for="influencer_type_content_creator">Content
                                                                            Creator</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            id="influencer_type_memers"
                                                                            name="influencer_type" value="memers">
                                                                        <label class="form-check-label"
                                                                            for="influencer_type_memers">Memers</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            id="influencer_type_influencer"
                                                                            name="influencer_type" value="influencer">
                                                                        <label class="form-check-label"
                                                                            for="influencer_type_influencer">Influencer</label>
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
                                                                        <input class="form-check-input" type="radio"
                                                                            id="gender_male" name="gender"
                                                                            value="male">
                                                                        <label class="form-check-label"
                                                                            for="gender_male">Male</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            id="gender_female" name="gender"
                                                                            value="female">
                                                                        <label class="form-check-label"
                                                                            for="gender_female">Female</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            id="gender_other" name="gender"
                                                                            value="other">
                                                                        <label class="form-check-label"
                                                                            for="gender_other">Other</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="campaign_description" class="form-label">Campaign
                                                                Description:</label>
                                                            <textarea class="form-control" id="campaign_description" name="campaign_description" rows="10"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="d-flex justify-content-end mt-2">
                                                <button type="button" data-form="form_step_1"
                                                    class="btn px-5 btn-primary next-step fw-bold">Next</button>
                                            </div>
                                        </section>
                                    </div>

                                    <div class="step step-2">
                                        <div class="mb-3">
                                            <section>
                                                <form action="{{ route('store.step2.compaign') }}" id="form_step_2"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id" class="campaign_id"
                                                        value="{{ $compaign ? $compaign->id : '' }}">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Promotion Type:</label>
                                                                <div class="row">
                                                                    <div class="col-3">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                id="promotion_type_paid"
                                                                                name="promotion_type" value="paid">
                                                                            <label class="form-check-label"
                                                                                for="promotion_type_paid">Paid</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                id="promotion_type_barter"
                                                                                name="promotion_type" value="barter">
                                                                            <label class="form-check-label"
                                                                                for="promotion_type_barter">Barter</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                id="promotion_type_paid_barter"
                                                                                name="promotion_type" value="paid+barter">
                                                                            <label class="form-check-label"
                                                                                for="promotion_type_paid_barter">Paid +
                                                                                Barter</label>
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
                                                                            <input class="form-check-input" type="radio"
                                                                                id="platform_instagram" name="platform"
                                                                                value="instagram">
                                                                            <label class="form-check-label"
                                                                                for="platform_instagram">Instagram</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                id="platform_youtube" name="platform"
                                                                                value="youtube">
                                                                            <label class="form-check-label"
                                                                                for="platform_youtube">YouTube</label>
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
                                                                            <input class="form-check-input"
                                                                                type="checkbox" id="region_north_america"
                                                                                name="region[]" value="north_america">
                                                                            <label class="form-check-label"
                                                                                for="region_north_america">North
                                                                                America</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" id="region_europe"
                                                                                name="region[]" value="europe">
                                                                            <label class="form-check-label"
                                                                                for="region_europe">Europe</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" id="region_asia"
                                                                                name="region[]" value="asia">
                                                                            <label class="form-check-label"
                                                                                for="region_asia">Asia</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" id="region_africa"
                                                                                name="region[]" value="africa">
                                                                            <label class="form-check-label"
                                                                                for="region_africa">Africa</label>
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
                                                                            <input class="form-check-input"
                                                                                type="checkbox" id="language_english"
                                                                                name="language[]" value="english">
                                                                            <label class="form-check-label"
                                                                                for="language_english">English</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" id="language_french"
                                                                                name="language[]" value="french">
                                                                            <label class="form-check-label"
                                                                                for="language_french">French</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" id="language_spanish"
                                                                                name="language[]" value="spanish">
                                                                            <label class="form-check-label"
                                                                                for="language_spanish">Spanish</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" id="language_mandarin"
                                                                                name="language[]" value="mandarin">
                                                                            <label class="form-check-label"
                                                                                for="language_mandarin">Mandarin</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </section>
                                        </div>
                                        <div class="d-flex justify-content-end mt-2  ">
                                            <!-- <button type="button" class="btn px-4 btn-dark fw-bold mx-2 prev-step">Previous</button> -->
                                            <button data-form="form_step_2" type="button"
                                                class="btn px-5 btn-primary next-step mx-1 ">Next</button>
                                        </div>
                                    </div>

                                    <div class="step step-3">
                                        <div class="mb-3">
                                            <section class="product-sec">
                                                <div class="row">
                                                    <div class="col">

                                                        <input type="search" class="form-control"
                                                            placeholder="Search Product" id="search_product"
                                                            autocomplete="off">
                                                        <div id="product_list"></div>
                                                        <!-- This is where the search results will be displayed -->


                                                        <form class=" g-3 mt-3 needs-validation" id="product_detail_from"
                                                            method="post" action="{{ route('admin.storeProduct') }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="id"
                                                                value="{{ $product['id'] ?? '' }}">
                                                            <input type="hidden" name="duplicate"
                                                                value="{{ $duplicate ?? 'no' }}">
                                                            <input type="hidden" name="campaign_id" class="campaign_id"
                                                                value="{{ $compaign ? $compaign->id : '' }}">
                                                            <input type="hidden" name="product_id" id="product_id">
                                                            <div class="row gy-4">
                                                                <div class=" col-md-6 extra-images">
                                                                    <label class="form-label">Extra Images</label>
                                                                    <!-- below containerrrrrrrrrrrrrrrrrrrrrrrr -->
                                                                    <div class="upload__box">
                                                                        <div class="upload__btn-box">
                                                                            <div class="upload__img-wrap">
                                                                                <label class="upload__btn" id="uploadbtn"
                                                                                    for="product_images">
                                                                                    <p>+</p>
                                                                                    <input type="file" multiple
                                                                                        data-max_length="5"
                                                                                        id="product_images" name="images"
                                                                                        class="upload__inputfile">
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- below containerrrrrrrrrrrrrrrrrrrrrrrr -->
                                                                    <div style="margin-top: 10px;margin-bottom:5px">
                                                                        <div class="row" style="padding-right: 12px;">
                                                                            @foreach ($product['product_attributes'] ?? [] as $key => $val1)
                                                                                @php
                                                                                    $src = $val1['image']
                                                                                        ? $val1['image']
                                                                                        : '';
                                                                                @endphp
                                                                                @if ($src)
                                                                                    <div class="col-sm-2"
                                                                                        id="attribute-{{ $val1['id'] }}">
                                                                                        <div class="flip-card">
                                                                                            <div class="flip-card-inner">
                                                                                                <div
                                                                                                    class="flip-card-front">
                                                                                                    <img src="{{ asset('storage/' . $src) }}"
                                                                                                        alt="Avatar"
                                                                                                        style="width:100px;height:100px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="flip-card-back">
                                                                                                    <a href="#"
                                                                                                        class="delete-attribute"
                                                                                                        data-id="{{ $val1['id'] }}">
                                                                                                        <i class="fa fa-trash-o"
                                                                                                            style="font-size:48px;color:red"></i>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                            @endforeach

                                                                        </div>
                                                                    </div>

                                                                    {{-- <div class="invalid-feedback">Please select product
                                                                        image!</div> --}}
                                                                    @error('images')
                                                                        <div class="alert-danger text-danger ">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6 text-and-gallery-images">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <label class="form-label">Product Title</label>
                                                                            <input class="form-control me-2"
                                                                                type="text" name="title"
                                                                                id="title" value=""
                                                                                placeholder="Product Title"
                                                                                aria-label="Search">
                                                                            {{-- <div class="invalid-feedback">Please write
                                                                                product title!</div> --}}
                                                                            @error('title')
                                                                                <div class="alert-danger text-danger ">
                                                                                    {{ $message }}
                                                                                </div>
                                                                            @enderror
                                                                        </div>
                                                                        @php
                                                                            $path = url(
                                                                                'assets/images/icons/upload_btn.png',
                                                                            );
                                                                            if ($product['main_image'] ?? null) {
                                                                                $path = asset(
                                                                                    'storage/' . $product['main_image'],
                                                                                );
                                                                            }
                                                                        @endphp
                                                                        <div class="col-12 mt-2 produt-main-image">
                                                                            <label for="product_main_image"
                                                                                class="form-label">Upload Main
                                                                                Image</label>
                                                                            <div class="d-flex align-items-center"
                                                                                style="gap: 20px; justify-content: space-between;">
                                                                                <input type="file"
                                                                                    class="form-control w-100"
                                                                                    id="product_main_image"
                                                                                    name="main_image"
                                                                                    onchange="previewMainImage(this, 'mainImage_preview')">
                                                                                <label for="product_main_image"
                                                                                    class="d-block">
                                                                                    <img id="mainImage_preview"
                                                                                        src="{{ $path ?? '' }}"
                                                                                        class="rounded-circle"
                                                                                        alt="no image"
                                                                                        style="width: 45px; height: 45px; cursor: pointer; object-fit: cover;">
                                                                                </label>
                                                                            </div>
                                                                            {{-- <div class="invalid-feedback">* Upload product main Image!</div> --}}
                                                                        </div>

                                                                        <div class="col-9 select-product-category">
                                                                            <label for="category_id"
                                                                                class="form-label">Select Product
                                                                                Category</label>
                                                                            <select id="category_id" name="category_id"
                                                                                class="form-select">
                                                                                <option value="" selected>Choose...
                                                                                </option>
                                                                                @foreach ($categories ?? [] as $key => $value)
                                                                                    <option value="{{ $value->id }}">
                                                                                        {{ $value->title }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                            {{-- <div class="invalid-feedback">* Please select
                                                                                product category</div> --}}
                                                                        </div>
                                                                        <div class="col-3" style="margin-top: 30px">
                                                                            <button type="button" class="btn btn-primary"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#staticBackdrop">
                                                                                Add
                                                                            </button>
                                                                            <div class="modal fade" id="staticBackdrop"
                                                                                data-bs-backdrop="static"
                                                                                data-bs-keyboard="false" tabindex="-1"
                                                                                aria-labelledby="staticBackdropLabel"
                                                                                aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h1 class="modal-title fs-5"
                                                                                                id="staticBackdropLabel">
                                                                                                category</h1>
                                                                                            <button type="button"
                                                                                                class="btn-close"
                                                                                                data-bs-dismiss="modal"
                                                                                                aria-label="Close"></button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div>
                                                                                                <label>Name</label>
                                                                                                <input type="text"
                                                                                                    name="name"
                                                                                                    id="categoryName"
                                                                                                    class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button"
                                                                                                class="btn btn-secondary"
                                                                                                data-bs-dismiss="modal">Close</button>
                                                                                            <button type="button"
                                                                                                id="addCategory"
                                                                                                class="btn btn-primary">Add</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label for="cut_price" class="col-form-label"> Cut
                                                                        Price <span class="cut-price"></span></label>
                                                                    <input type="number" name="cut_price" id="cut_price"
                                                                        value="{{ $product['cut_price'] ?? old('cut_price') }}"
                                                                        class="form-control" step="0.01"
                                                                        min="0">
                                                                    {{-- <div class="invalid-feedback">Enter Cut Price!</div> --}}
                                                                    @error('cut_price')
                                                                        <div class="alert-danger text-danger ">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label for="price" class="col-form-label"> Price
                                                                        <span class="extra-text">(Price in UK
                                                                            Pound)</span></label>
                                                                    <input type="number" name="price" id="price"
                                                                        value="{{ $product['price'] ?? old('price') }}"
                                                                        class="form-control" step="0.01"
                                                                        min="0">
                                                                    {{-- <div class="invalid-feedback">Enter product price!
                                                                    </div> --}}
                                                                    @error('price')
                                                                        <div class="alert-danger text-danger ">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="stock" class="col-form-label">Inventory
                                                                        <span class="extra-text">(Available
                                                                            Stock)</span></label>
                                                                    <input type="number" id="stock" name="stock"
                                                                        value="{{ $product['stock'] ?? old('stock') }}"
                                                                        class="form-control">
                                                                    {{-- <div class="invalid-feedback">Enter product stock!
                                                                    </div> --}}
                                                                    @error('stock')
                                                                        <div class="alert-danger text-danger ">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="stock" class="col-form-label">SKU
                                                                    </label>
                                                                    <input type="text" name="SKU" id="SKU"
                                                                        value="{{ $product['SKU'] ?? old('SKU') }}"
                                                                        class="form-control">
                                                                    {{-- <div class="invalid-feedback">Enter avialable stock!
                                                                    </div> --}}
                                                                    @error('SKU')
                                                                        <div class="alert-danger text-danger ">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-4 mt-2">
                                                                    <label for="barcode" class="form-label">Barcode
                                                                        (ISBN, UPC, GTIN, etc.)</label>
                                                                    <input type="text" name="barcode" id="barcode"
                                                                        value="{{ $product['barcode'] ?? old('barcode') }}"
                                                                        class="form-control">
                                                                    {{-- <div class="invalid-feedback">Enter GTIN number!</div> --}}
                                                                    @error('barcode')
                                                                        <div class="alert-danger text-danger ">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-4 mt-2">
                                                                    <label for="weight" class="form-label">Weight
                                                                        (gm)</label>
                                                                    <input type="number" name="weight" id="weight"
                                                                        value="{{ $product['weight'] ?? old('weight') }}"
                                                                        class="form-control" step="0.01"
                                                                        min="0">
                                                                    {{-- <div class="invalid-feedback">Enter product weight!
                                                                    </div> --}}
                                                                    @error('weight')
                                                                        <div class="alert-danger text-danger ">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label for="stock_status" class="col-form-label">
                                                                        Stock Status </label>
                                                                    <select id="stock_status" name="stock_status"
                                                                        class="form-select">
                                                                        <option value="IN"
                                                                            {{ isset($product['stock_status']) && $product['stock_status'] == 'IN' ? 'selected' : '' }}>
                                                                            IN</option>
                                                                        <option value="OUT"
                                                                            {{ isset($product['stock_status']) && $product['stock_status'] == 'OUT' ? 'selected' : '' }}>
                                                                            OUT</option>
                                                                    </select>
                                                                    {{-- <div class="invalid-feedback">Select Stock Status!
                                                                    </div> --}}
                                                                    @error('stock_status')
                                                                        <div class="alert-danger text-danger ">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="row mb-5">
                                                                <div class="form-floating col-12  mt-3">
                                                                    <textarea class="form-control tinymce-editor" name="short_description" id="short_description"
                                                                        placeholder="Product short Description">{{ $product['short_description'] ?? '' }}</textarea>
                                                                    {{-- <div class="invalid-feedback">Please write product
                                                                        short desc!</div> --}}
                                                                    @error('short_description')
                                                                        <div class="alert-danger text-danger ">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="row mb-5">
                                                                <div class="form-floating col-12  mt-3">
                                                                    <textarea class="form-control tinymce-editor" name="description" id="description"
                                                                        placeholder="Product main Description">{{ $product['desc'] ?? '' }}</textarea>
                                                                    {{-- <div class="invalid-feedback">Please write product Main
                                                                        desc!</div> --}}
                                                                    @error('description')
                                                                        <div class="alert-danger text-danger ">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            {{-- Variant Section --}}
                                                            <div class="container-fluid m-0 ">
                                                                <div
                                                                    class="d-flex justify-content-between col-md-12 align-items-center">
                                                                    <div class="variants-div">
                                                                        <h4 class="fw-bold">Product Variants</h4>
                                                                    </div>
                                                                    <div class=" float-end">
                                                                        <div class="p-2">
                                                                            <lable id="add_new_row"
                                                                                class="btn btn-success mb-2"><i
                                                                                    class="fa fa-plus"></i> Add Variants
                                                                            </lable>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- existing variants --}}
                                                                <div id="variant_row_existing">
                                                                    @if (isset($product['variants']))
                                                                        @foreach ($product['variants'] as $variant)
                                                                            <div class="row bg-white rounded-3  mb-4 py-2"
                                                                                id="variant_{{ $variant['id'] }}">
                                                                                <input type="hidden"
                                                                                    value="{{ $variant['id'] }}"
                                                                                    name="variant_id[]">
                                                                                <div class="col-12">
                                                                                    <hr class="">
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-12">
                                                                                    <div class="p-2">
                                                                                        <label for=""
                                                                                            class="form-label">Variant
                                                                                            Price <span
                                                                                                class="vari-price">(Price
                                                                                                in UK Pound)</span></label>
                                                                                        <input type="number"
                                                                                            class="form-control"
                                                                                            name="variant_price[]"
                                                                                            id=""
                                                                                            value="{{ $variant['price'] }}"
                                                                                             step="0.01"
                                                                                            min="0">
                                                                                        {{-- <div class="invalid-feedback">Enter
                                                                                            variant price!</div> --}}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-12">
                                                                                    <div class="p-2">
                                                                                        <label for=""
                                                                                            class="form-label">Variant Cut
                                                                                            Price <span
                                                                                                class="vari-cut-price">(Price
                                                                                                in UK Pound)</span></label>
                                                                                        <input type="number"
                                                                                            class="form-control"
                                                                                            name="varient_cut_price[]"
                                                                                            id=""
                                                                                            value="{{ $variant['cut_price'] }}"
                                                                                            step="0.01" min="0">
                                                                                        {{-- <div class="invalid-feedback">Enter
                                                                                            variant cut price!</div> --}}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-12">
                                                                                    <div class="p-2">
                                                                                        <label for=""
                                                                                            class="form-label">Variant Name
                                                                                            <span
                                                                                                class="extra-text"></span></label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            name="variant_name[]"
                                                                                            id=""
                                                                                            value="{{ $variant['title'] }}"
                                                                                            >
                                                                                        {{-- <div class="invalid-feedback">Enter
                                                                                            variant title!</div> --}}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-12 product-md">
                                                                                    <div class="p-2">
                                                                                        <label for=""
                                                                                            class="form-label">Variant
                                                                                            Value <span
                                                                                                class="extra-text"></span></label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            name="variant_value[]"
                                                                                            id=""
                                                                                            value="{{ $variant['value'] }}"
                                                                                            >
                                                                                        <div class="invalid-feedback">Enter
                                                                                            variant value!</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-12 ">
                                                                                    <div class="p-2">
                                                                                        <label for=""
                                                                                            class="form-label">Inventory
                                                                                            <span
                                                                                                class="extra-text">(Available
                                                                                                Stock)</span></label>
                                                                                        <input type="number"
                                                                                            class="form-control"
                                                                                            name="variant_inventory[]"
                                                                                            id=""
                                                                                            value="{{ $variant['inventory'] }}"
                                                                                            >
                                                                                        {{-- <div class="invalid-feedback">Enter
                                                                                            variant stock!</div> --}}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-12 ">
                                                                                    <div class="p-2">
                                                                                        <label for=""
                                                                                            class="form-label">weight <span
                                                                                                class="extra-text">(gm)</span></label>
                                                                                        <input type="number"
                                                                                            class="form-control"
                                                                                            name="variant_weight[]"
                                                                                            id=""
                                                                                            value="{{ $variant['weight'] }}"
                                                                                            step="0.01" min="0">
                                                                                        {{-- <div class="invalid-feedback">Enter
                                                                                            variant weight!</div> --}}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-12">
                                                                                    <div class="p-2">
                                                                                        <label for=""
                                                                                            class="form-label">Barcode
                                                                                            <span class="extra-text">(ISBN,
                                                                                                UPC, GTIN,
                                                                                                etc.)</span></label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            name="variant_barcode[]"
                                                                                            id=""
                                                                                            value="{{ $variant['barcode'] }}">
                                                                                        {{-- <div class="invalid-feedback">Enter
                                                                                            variant barcode!</div> --}}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-12">
                                                                                    <div class="p-2">
                                                                                        <label for=""
                                                                                            class="form-label">SKU <span
                                                                                                class="extra-text">(Stock
                                                                                                Keeping Unit)</span></label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            name="variant_sku[]"
                                                                                            id=""
                                                                                            value="{{ $variant['sku'] }}">
                                                                                        {{-- <div class="invalid-feedback">Enter
                                                                                            variant stock!</div> --}}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3 col-sm-12 ">
                                                                                    <div class="p-2">
                                                                                        <label class="form-label">Select
                                                                                            Image</label>
                                                                                        <input
                                                                                            class="form-control variant-image-exist"
                                                                                            name="variant_attr_image[]"
                                                                                            type="file" id="">
                                                                                            <label for="product_main_image"
                                                                                    class="d-block">
                                                                                    <img id="mainImage_preview"
                                                                                        src="{{ $path ?? '' }}"
                                                                                        class="rounded-circle"
                                                                                        alt="no image"
                                                                                        style="width: 45px; height: 45px; cursor: pointer; object-fit: cover;">
                                                                                </label>
                                                                                        {{-- <div class="invalid-feedback">Enter
                                                                                            variant image!</div> --}}
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-md-12 d-flex justify-content-end col-sm-12 mt-4 ">
                                                                                    <div class="p-2 ">
                                                                                        <button type="button"
                                                                                            class="btn delete-variant btn-danger bg-danger"
                                                                                            data-id="{{ $variant['id'] }}"
                                                                                            data-token="{{ csrf_token() }}"><i
                                                                                                class="fa fa-minus"></i>
                                                                                            Remove</button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <hr class="">
                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                    @endif
                                                                </div>
                                                                <div id="variant_row">

                                                                </div>
                                                            </div>
                                                            <div class="product-btns mt-4 text-end px-4 d-flex d-md-block">
                                                                <button type="submit"
                                                                    class="btn btn-primary rounded-2 py-2 px-5 fw-bold mt-0">Save
                                                                    Product</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <hr class="mb-5" />
                                        <div class="row" id="product_card_list">
                                            @if (!empty($compaign->products))
                                                @if (count($compaign->products) > 0)
                                                    @foreach ($compaign->products as $item)
                                                        <div class="col-md-4 single-note-item all-category"
                                                            id="product-card-{{ $item->id }}">
                                                            <div class="card card-body">
                                                                <span class="side-stick"></span>
                                                                <h6 class="note-title text-truncate w-75 mb-0"
                                                                    data-noteheading="Book a Ticket for Movie">
                                                                    {{ $item->title }}</h6>
                                                                {{-- <p class="note-date fs-2">11 March 2009</p> --}}
                                                                <div class="note-content">
                                                                    <p class="note-inner-content"
                                                                        data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                                                                        {{ $item->description }} </p>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    {{-- <a href="javascript:void(0)" class="link me-1">
                                                                    <i class="ti ti-star fs-4 favourite-note"></i>
                                                                </a> --}}
                                                                    <a href="javascript:void(0)" type="button"
                                                                        class="link text-danger delete-product"
                                                                        data-id="{{ $item->id }}">
                                                                        <i class="ti ti-trash fs-4 remove-note"></i>
                                                                    </a>
                                                                    <div class="ms-auto">
                                                                        <div class="category-selector btn-group">
                                                                            <a class="nav-link category-dropdown label-group p-0"
                                                                                data-bs-toggle="dropdown" href="#"
                                                                                role="button" aria-haspopup="true"
                                                                                aria-expanded="true">
                                                                                <div class="category">
                                                                                    <div class="category-business"></div>
                                                                                    <div class="category-social"></div>
                                                                                    <div class="category-important"></div>
                                                                                    <span class="more-options text-dark">
                                                                                        <i
                                                                                            class="ti ti-dots-vertical fs-5"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </a>
                                                                            <div
                                                                                class="dropdown-menu dropdown-menu-right category-menu">
                                                                                {{-- <a class="
                                                                    note-business
                                                                    badge-group-item badge-business
                                                                    dropdown-item
                                                                    position-relative
                                                                    category-business
                                                                    d-flex
                                                                    align-items-center
                                                                    "
                                                                    href="javascript:void(0);">Edit</a> --}}
                                                                                <a class="
                                                                    note-social
                                                                    badge-group-item badge-social
                                                                    dropdown-item
                                                                    position-relative
                                                                    category-social
                                                                    d-flex
                                                                    align-items-center duplicate-product
                                                                    "
                                                                                    href="javascript:void(0);"
                                                                                    data-id="{{ $item->id }}">
                                                                                    Duplicate</a>
                                                                                {{-- <a class="
                                                                    note-important
                                                                    badge-group-item badge-important
                                                                    dropdown-item
                                                                    position-relative
                                                                    category-important
                                                                    d-flex
                                                                    align-items-center
                                                                    "
                                                                                    href="javascript:void(0);">
                                                                                    Important</a> --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            @endif
                                        </div>

                                        <div class="d-flex justify-content-end mt-2  ">
                                            <!-- <button type="button" class="btn px-4 btn-dark fw-bold mx-2 prev-step">Previous</button> -->
                                            <button type="button" data-form="next_move" id="nextButton"
                                                class="btn px-5 btn-primary next-step mx-1" disabled>Next-3</button>
                                        </div>
                                    </div>

                                    <div class="step step-4">
                                        <div class="mb-3">
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
                                                                        <button
                                                                            class="btn btn-secondary ms-auto add-btn">Add</button>
                                                                    </div>
                                                                </div>
                                                                <!-- Hidden Reels Form Template -->
                                                                <div class="form-container bg-dark text-white p-4 mt-3">
                                                                    <form class="g-3 mt-3 needs-validation" id="reelForm"
                                                                        method="post"
                                                                        action="{{ route('store.compaign.reel') }}"
                                                                        novalidate enctype="multipart/form-data">
                                                                        @csrf
                                                                        <input type="hidden" name="campaign_id"
                                                                            class="campaign_id"
                                                                            value="{{ $compaign ? $compaign->id : '' }}">
                                                                        <div
                                                                            class="bg-white p-5 rounded shadow-lg w-100 max-w-md mx-auto">
                                                                            <h2 class="h5 fw-bold mb-4">Add Reel</h2>

                                                                            <!-- Reel Type -->
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Reel
                                                                                    Type:</label>
                                                                                <div class="row">
                                                                                    <div class="col-3">
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input "
                                                                                                type="radio"
                                                                                                id="repost-reel"
                                                                                                name="reel_type"
                                                                                                value="repost">
                                                                                            <label
                                                                                                class="form-check-label text-muted"
                                                                                                for="repost-reel">Repost
                                                                                                Reel</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-3">
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input"
                                                                                                type="radio"
                                                                                                id="shoot-reel"
                                                                                                name="reel_type"
                                                                                                value="shoot">
                                                                                            <label
                                                                                                class="form-check-label text-muted"
                                                                                                for="shoot-reel">Shoot
                                                                                                Reel</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Description Field -->
                                                                            <div class="mb-3">
                                                                                <label for="description"
                                                                                    class="form-label">Description
                                                                                    (Optional)</label>
                                                                                <textarea name="description" id="description" class="form-control" rows="3"
                                                                                    placeholder="Describe the campaign..."></textarea>
                                                                            </div>

                                                                            <!-- Instagram Page Field -->
                                                                            <div class="mb-3">
                                                                                <label for="instagramPage"
                                                                                    class="form-label">Brand Instagram
                                                                                    Page</label>
                                                                                <input type="text"
                                                                                    name="instagram_page"
                                                                                    id="instagramPage"
                                                                                    class="form-control"
                                                                                    placeholder="Enter Instagram page URL" />
                                                                            </div>

                                                                            <!-- Tags Field -->
                                                                            <div class="mb-3">
                                                                                <label for="tags"
                                                                                    class="form-label">Tags</label>
                                                                                <input type="text" name="tags"
                                                                                    id="tags" class="form-control"
                                                                                    placeholder="Enter tags, separated by commas" />
                                                                            </div>

                                                                            <!-- Reel Script Field -->
                                                                            <div class="mb-3">
                                                                                <label for="script"
                                                                                    class="form-label">Enter Script or
                                                                                    Upload Reel</label>
                                                                                <input type="text" name="script"
                                                                                    id="script" class="form-control"
                                                                                    placeholder="Enter reel script" />
                                                                            </div>

                                                                            <!-- Reel upload field -->

                                                                            <div class="input-group mb-3">
                                                                                <input type="file" name="file"
                                                                                    class="form-control mt-3"
                                                                                    id="campaign_banner"
                                                                                    name="campaign_banner" />
                                                                            </div>

                                                                            <!-- Submit Button -->
                                                                            <button
                                                                                class="btn btn-primary w-100 mt-3">Submit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                                <!-- Story Card -->
                                                                <div class="card bg-dark text-white mb-3 p-3 story-card">
                                                                    <div class="d-flex flex-row align-items-center">
                                                                        <i class="fas fa-plus-circle"></i>
                                                                        <span class="ms-2">Story</span>
                                                                        <button
                                                                            class="btn btn-secondary ms-auto add-btn">Add</button>
                                                                    </div>
                                                                </div>
                                                                <!-- Hidden Story Form Template -->
                                                                <div class="form-container bg-dark text-white p-4 mt-3">
                                                                    <form class="g-3 mt-3 needs-validation" id="storyForm"
                                                                        method="post"
                                                                        action="{{ route('store.compaign.story') }}"
                                                                        novalidate enctype="multipart/form-data">
                                                                        @csrf
                                                                        <input type="hidden" name="campaign_id"
                                                                            class="campaign_id"
                                                                            value="{{ $compaign ? $compaign->id : '' }}">
                                                                        <div
                                                                            class="bg-white p-5 rounded shadow-lg w-100 max-w-md mx-auto">
                                                                            <h2 class="h5 fw-bold mb-4">Add Story</h2>

                                                                            <!-- Reel Type -->
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Story
                                                                                    Type:</label>
                                                                                <div class="row">
                                                                                    <div class="col-3">
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input "
                                                                                                type="radio"
                                                                                                id="repost-story"
                                                                                                name="story_type"
                                                                                                value="repost">
                                                                                            <label
                                                                                                class="form-check-label text-muted"
                                                                                                for="repost-story">Repost
                                                                                                Story</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-3">
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input"
                                                                                                type="radio"
                                                                                                id="shoot-story"
                                                                                                name="story_type"
                                                                                                value="shoot">
                                                                                            <label
                                                                                                class="form-check-label text-muted"
                                                                                                for="shoot-story">Shoot
                                                                                                Story</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Description Field -->
                                                                            <div class="mb-3">
                                                                                <label for="description"
                                                                                    class="form-label">Description
                                                                                    (Optional)</label>
                                                                                <textarea name="description" id="description" class="form-control" rows="3"
                                                                                    placeholder="Describe the campaign..."></textarea>
                                                                            </div>

                                                                            <!-- Instagram Page Field -->
                                                                            <div class="mb-3">
                                                                                <label for="instagramPage"
                                                                                    class="form-label">Brand Instagram
                                                                                    Page</label>
                                                                                <input type="text"
                                                                                    name="instagram_page"
                                                                                    id="instagramPage"
                                                                                    class="form-control"
                                                                                    placeholder="Enter Instagram page URL" />
                                                                            </div>

                                                                            <!-- Tags Field -->
                                                                            <div class="mb-3">
                                                                                <label for="tags"
                                                                                    class="form-label">Tags</label>
                                                                                <input type="text" name="tags"
                                                                                    id="tags" class="form-control"
                                                                                    placeholder="Enter tags, separated by commas" />
                                                                            </div>

                                                                            <!-- Reel Script Field -->
                                                                            <div class="mb-3">
                                                                                <label for="script"
                                                                                    class="form-label">Enter Script or
                                                                                    Upload Story</label>
                                                                                <input type="text" name="script"
                                                                                    id="script" class="form-control"
                                                                                    placeholder="Enter reel script" />
                                                                            </div>

                                                                            <!-- Reel upload field -->

                                                                            <div class="input-group mb-3">
                                                                                <input type="file" name="file"
                                                                                    class="form-control mt-3"
                                                                                    id="campaign_banner"
                                                                                    name="campaign_banner" />
                                                                            </div>

                                                                            <!-- Submit Button -->
                                                                            <button
                                                                                class="btn btn-primary w-100 mt-3">Submit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                                <!-- Video Card -->
                                                                <div class="card bg-dark text-white mb-3 p-3 video-card">
                                                                    <div class="d-flex flex-row align-items-center">
                                                                        <i class="fas fa-video"></i>
                                                                        <span class="ms-2">Video</span>
                                                                        <button
                                                                            class="btn btn-secondary ms-auto add-btn">Add</button>
                                                                    </div>
                                                                </div>
                                                                <!-- Hidden Video Form Template -->
                                                                <div class="form-container bg-dark text-white p-4 mt-3">
                                                                    <form class="g-3 mt-3 needs-validation" id="videoForm"
                                                                        method="post"
                                                                        action="{{ route('store.compaign.video') }}"
                                                                        novalidate enctype="multipart/form-data">
                                                                        @csrf
                                                                        <input type="hidden" name="campaign_id"
                                                                            class="campaign_id"
                                                                            value="{{ $compaign ? $compaign->id : '' }}">
                                                                        <div
                                                                            class="bg-white p-5 rounded shadow-lg w-100 max-w-md mx-auto">
                                                                            <h2 class="h5 fw-bold mb-4">Add Video</h2>

                                                                            <!-- Reel Type -->
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Video
                                                                                    Type:</label>
                                                                                <div class="row">
                                                                                    <div class="col-3">
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input "
                                                                                                type="radio"
                                                                                                id="repost-video"
                                                                                                name="video_type"
                                                                                                value="repost">
                                                                                            <label
                                                                                                class="form-check-label text-muted"
                                                                                                for="repost-video">Repost
                                                                                                Video</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-3">
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input"
                                                                                                type="radio"
                                                                                                id="shoot-video"
                                                                                                name="video_type"
                                                                                                value="shoot">
                                                                                            <label
                                                                                                class="form-check-label text-muted"
                                                                                                for="shoot-video">Shoot
                                                                                                Video</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Description Field -->
                                                                            <div class="mb-3">
                                                                                <label for="description"
                                                                                    class="form-label">Description
                                                                                    (Optional)</label>
                                                                                <textarea name="description" id="description" class="form-control" rows="3"
                                                                                    placeholder="Describe the campaign..."></textarea>
                                                                            </div>

                                                                            <!-- Instagram Page Field -->
                                                                            <div class="mb-3">
                                                                                <label for="instagramPage"
                                                                                    class="form-label">Brand Instagram
                                                                                    Page</label>
                                                                                <input type="text"
                                                                                    name="instagram_page"
                                                                                    id="instagramPage"
                                                                                    class="form-control"
                                                                                    placeholder="Enter Instagram page URL" />
                                                                            </div>

                                                                            <!-- Tags Field -->
                                                                            <div class="mb-3">
                                                                                <label for="tags"
                                                                                    class="form-label">Tags</label>
                                                                                <input type="text" name="tags"
                                                                                    id="tags" class="form-control"
                                                                                    placeholder="Enter tags, separated by commas" />
                                                                            </div>

                                                                            <!-- Reel Script Field -->
                                                                            <div class="mb-3">
                                                                                <label for="script"
                                                                                    class="form-label">Enter Script or
                                                                                    Upload Reel</label>
                                                                                <input type="text" name="script"
                                                                                    id="script" class="form-control"
                                                                                    placeholder="Enter reel script" />
                                                                            </div>

                                                                            <!-- Reel upload field -->

                                                                            <div class="input-group mb-3">
                                                                                <input type="file" name="file"
                                                                                    class="form-control mt-3"
                                                                                    id="campaign_banner"
                                                                                    name="campaign_banner" />
                                                                            </div>

                                                                            <!-- Submit Button -->
                                                                            <button
                                                                                class="btn btn-primary w-100 mt-3">Submit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                                <!-- Post Card -->
                                                                <div class="card bg-dark text-white mb-3 p-3 post-card">
                                                                    <div class="d-flex flex-row align-items-center">
                                                                        <i class="far fa-newspaper"></i>
                                                                        <span class="ms-2">Post</span>
                                                                        <button
                                                                            class="btn btn-secondary ms-auto add-btn">Add</button>
                                                                    </div>
                                                                </div>
                                                                <!-- Hidden Post Form Template -->
                                                                <div class="form-container bg-dark text-white p-4 mt-3">
                                                                    <form class="g-3 mt-3 needs-validation" id="postForm"
                                                                        method="post"
                                                                        action="{{ route('store.compaign.post') }}"
                                                                        novalidate enctype="multipart/form-data">
                                                                        @csrf
                                                                        <input type="hidden" name="campaign_id"
                                                                            class="campaign_id"
                                                                            value="{{ $compaign ? $compaign->id : '' }}">
                                                                        <div
                                                                            class="bg-white p-5 rounded shadow-lg w-100 max-w-md mx-auto">
                                                                            <h2 class="h5 fw-bold mb-4">Add Post</h2>

                                                                            <!-- Reel Type -->
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Post
                                                                                    Type:</label>
                                                                                <div class="row">
                                                                                    <div class="col-3">
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input "
                                                                                                type="radio"
                                                                                                id="repost-post"
                                                                                                name="post_type"
                                                                                                value="repost">
                                                                                            <label
                                                                                                class="form-check-label text-muted"
                                                                                                for="repost-post">Repost
                                                                                                Post</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-3">
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input"
                                                                                                type="radio"
                                                                                                id="shoot-post"
                                                                                                name="post_type"
                                                                                                value="shoot">
                                                                                            <label
                                                                                                class="form-check-label text-muted"
                                                                                                for="shoot-post">Shoot
                                                                                                Post</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Description Field -->
                                                                            <div class="mb-3">
                                                                                <label for="description"
                                                                                    class="form-label">Description
                                                                                    (Optional)</label>
                                                                                <textarea name="description" id="description" class="form-control" rows="3"
                                                                                    placeholder="Describe the campaign..."></textarea>
                                                                            </div>

                                                                            <!-- Instagram Page Field -->
                                                                            <div class="mb-3">
                                                                                <label for="instagramPage"
                                                                                    class="form-label">Brand Instagram
                                                                                    Page</label>
                                                                                <input type="text"
                                                                                    name="instagram_page"
                                                                                    id="instagramPage"
                                                                                    class="form-control"
                                                                                    placeholder="Enter Instagram page URL" />
                                                                            </div>

                                                                            <!-- Tags Field -->
                                                                            <div class="mb-3">
                                                                                <label for="tags"
                                                                                    class="form-label">Tags</label>
                                                                                <input type="text" name="tags"
                                                                                    id="tags" class="form-control"
                                                                                    placeholder="Enter tags, separated by commas" />
                                                                            </div>

                                                                            <!-- Reel Script Field -->
                                                                            <div class="mb-3">
                                                                                <label for="script"
                                                                                    class="form-label">Enter Script or
                                                                                    Upload Reel</label>
                                                                                <input type="text" name="script"
                                                                                    id="script" class="form-control"
                                                                                    placeholder="Enter reel script" />
                                                                            </div>

                                                                            <!-- Reel upload field -->

                                                                            <div class="input-group mb-3">
                                                                                <input type="file" name="file"
                                                                                    class="form-control mt-3"
                                                                                    id="campaign_banner"
                                                                                    name="campaign_banner" />
                                                                            </div>

                                                                            <!-- Submit Button -->
                                                                            <button
                                                                                class="btn btn-primary w-100 mt-3">Submit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                                <!-- Logo Card -->
                                                                <div class="card bg-dark text-white mb-3 p-3 logo-card">
                                                                    <div class="d-flex flex-row align-items-center">
                                                                        <i class="far fa-newspaper"></i>
                                                                        <span class="ms-2">Logo</span>
                                                                        <button
                                                                            class="btn btn-secondary ms-auto add-btn">Add</button>
                                                                    </div>
                                                                </div>
                                                                <!-- Hidden Logo Form Template -->
                                                                <div class="form-container bg-dark text-white p-4 mt-3">
                                                                    <form class="g-3 mt-3 needs-validation"
                                                                        id="logoForm" method="post"
                                                                        action="{{ route('store.compaign.logo') }}"
                                                                        novalidate enctype="multipart/form-data">
                                                                        @csrf
                                                                        <input type="hidden" name="campaign_id"
                                                                            class="campaign_id"
                                                                            value="{{ $compaign ? $compaign->id : '' }}">
                                                                        <div
                                                                            class="bg-white p-5 rounded shadow-lg w-100 max-w-md mx-auto">
                                                                            <h2 class="h5 fw-bold mb-4">Add Logo</h2>

                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label class="form-label"
                                                                                            for="campaign_name">Logo
                                                                                            Name:</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="logo_name"
                                                                                            name="logo_name"  />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label class="form-label"
                                                                                            for="campaign_banner">Logo
                                                                                            file:</label>
                                                                                        <input type="file"
                                                                                            class="form-control"
                                                                                            id="logo_file"
                                                                                            name="logo_file"  />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label
                                                                                            class="form-label">Tags</label>
                                                                                        <div class="tag-input-container"
                                                                                            id="tag-input-container">
                                                                                            <input type="text"
                                                                                                id="tag-input"
                                                                                                placeholder="Enter Tags"
                                                                                                onkeydown="handleTagInput(event)" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="payment"
                                                                                            class="form-label">Per 1
                                                                                            Million Views
                                                                                            Payment</label>
                                                                                        <input type="text"
                                                                                            id="payment"
                                                                                            name="payment"
                                                                                            class="form-control"
                                                                                            placeholder="Enter Payment Details" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <label class="form-label"
                                                                                        for="description">Decription</label>
                                                                                    <textarea name="description" class="form-control" rows="3" placeholder="Write Description Here......."></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col mt-3">
                                                                                    <label class="form-label"
                                                                                        for="sample_video">Upload Sample
                                                                                        Video</label>
                                                                                    <input
                                                                                        class="form-control form-control-file"
                                                                                        type="file" id="sample_video"
                                                                                        name="sample_video" />
                                                                                </div>
                                                                            </div>

                                                                            <!-- Submit Button -->
                                                                            <button
                                                                                class="btn btn-primary w-100 mt-3">Submit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <hr class="mb-5" />
                                        <div class="d-flex justify-content-end mt-2  ">
                                            <button type="button"
                                                class="btn px-4 btn-dark fw-bold mx-2 prev-step">Previous</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@pushOnce('scripts')
    <script>
        $(document).ready(function() {
            // Trigger live search on keyup event
            $('#search_product').on('keyup', function() {
                var query = $(this).val();

                // If query is not empty, make the AJAX call
                if (query != '') {
                    $.ajax({
                        url: "{{ route('product.liveSearch') }}", // Route for live search
                        method: 'GET',
                        data: {
                            search: query
                        },
                        success: function(data) {
                            $('#product_list').html(data); // Populate results
                        }
                    });
                } else {
                    $('#product_list').html(''); // Clear results if query is empty
                }
            });

            // Make product title selectable
            $(document).on('click', '.product-item', function() {
                var title = $(this).data('title');
                $('#search_product').val(title); // Set selected title in the input
                $('#product_list').html(''); // Clear the search results dropdown
            });
        });


        function getProduct(target) {
            var productId = $(target).data('id');
            $.ajax({
                url: "{{ route('product.get') }}",
                type: 'GET',
                data: {
                    product_id: productId
                },
                success: function(response) {
                    console.log(response);
                    $('#product_id').val(response.id);
                    $('#title').val(response.title);
                    $('#mainImage_preview').attr('src', '/storage/' + response
                    .main_image); // Append base URL to main image path
                    $('#category_id').val(response.category_id);
                    $('#cut_price').val(response.cut_price);
                    $('#price').val(response.price);
                    $('#stock').val(response.stock);
                    $('#SKU').val(response.sku);
                    $('#stock_status').val(response.stock_status);
                    $('#barcode').val(response.barcode);
                    $('#weight').val(response.weight);
                    $('#description').val(response.description);
                    $('#short_description').val(response.short_description);

                    if (response.variants.length > 0) {
                        response.variants.forEach(function(variant) {
                            var new_row = `<div class="row bg-white rounded-3 mb-4 py-2">
            <div class="col-12">
                <hr class="">
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="p-2">
                    <label for="" class="form-label">Variant Price <span class="extra-text">(Price in UK Pound)</span></label>
                    <input type="hidden" class="form-control" name="variant_id[]" value="${variant.id}">
                    <input type="number" class="form-control" name="variant_price[]" value="${variant.variant_price}" step="0.01" min="0" >
                    <div class="invalid-feedback">Enter variant price!</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="p-2">
                    <label for="" class="form-label">Variant Cut Price <span class="extra-text">(Price in UK Pound)</span></label>
                    <input type="number" class="form-control" name="variant_cut_price[]" value="${variant.variant_cut_price}" step="0.01" min="0">
                    <div class="invalid-feedback">Enter variant cut price!</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="p-2">
                    <label for="" class="form-label">Variant Name <span class="extra-text"></span></label>
                    <input type="text" class="form-control" name="variant_name[]" value="${variant.variant_name}" >
                    <div class="invalid-feedback">Enter variant title!</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 product-md">
                <div class="p-2">
                    <label for="" class="form-label">Variant Value <span class="extra-text"></span></label>
                    <input type="text" class="form-control" name="variant_value[]" value="${variant.variant_value}" >
                    <div class="invalid-feedback">Enter variant value!</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="p-2">
                    <label for="" class="form-label">Inventory <span class="extra-text">(Available Stock)</span></label>
                    <input type="number" class="form-control" name="variant_inventory[]" value="${variant.variant_inventory}" >
                    <div class="invalid-feedback">Enter variant stock!</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="p-2">
                    <label for="" class="form-label">Weight <span class="extra-text">(gm)</span></label>
                    <input type="number" class="form-control" name="variant_weight[]" value="${variant.variant_weight}" step="0.01" min="0">
                    <div class="invalid-feedback">Enter variant weight!</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="p-2">
                    <label for="" class="form-label">Barcode <span class="extra-text">(ISBN, UPC, GTIN, etc.)</span></label>
                    <input type="text" class="form-control" name="variant_barcode[]" value="${variant.variant_barcode}">
                    <div class="invalid-feedback">Enter variant barcode!</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="p-2">
                    <label for="" class="form-label">SKU <span class="extra-text">(Stock Keeping Unit)</span></label>
                    <input type="text" class="form-control" name="variant_sku[]" value="${variant.variant_sku}">
                    <div class="invalid-feedback">Enter variant SKU!</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="p-2">
                    <label class="form-label">Select Image</label>
                    <input class="form-control variant-image" name="variant_attr_image[]" type="file">
                         <label for="product_main_image"
                                                                                    class="d-block">
                                                                                    <img id="mainImage_preview"
                                                                                        src="{{ $path ?? '' }}"
                                                                                        class="rounded-circle"
                                                                                        alt="no image"
                                                                                        style="width: 45px; height: 45px; cursor: pointer; object-fit: cover;">
                                                                                </label>
                    <div class="invalid-feedback">Enter variant image!</div>
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-end col-sm-12 mt-4">
                <div class="p-2">
                    <button type="button" class="btn remove_row btn-danger bg-danger"><i class="fa fa-minus"></i> Remove</button>
                </div>
            </div>
            <div class="col-12">
                <hr class="">
            </div>
        </div>`;

                            // Append the new row with the prefilled data
                            $('#variant_row').append(new_row);
                        });
                    }




                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                }
            });
        }



        $(document).on('click', '.delete-product', function() {
            var productId = $(this).data('id'); // Get the product ID from the button

            if (confirm('Are you sure you want to delete this product?')) {
                $.ajax({
                    url: '{{ route('product.list.delete') }}', // URL to your route
                    type: 'DELETE', // Use DELETE request
                    data: {
                        product_id: productId, // Pass the product ID
                        _token: '{{ csrf_token() }}' // CSRF token
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#product-card-' + productId).fadeOut('slow');
                            toastr.success('Product deleted successfully.');
                        } else {
                            toastr.error('Something went wrong.');
                        }
                    },
                    error: function(xhr) {
                        alert('Error: ' + xhr.statusText);
                    }
                });
            }
        });

        // duplicate Product

        $(document).on('click', '.duplicate-product', function() {
            var productId = $(this).data('id');
            var productCard = $('#product-card-' + productId).clone();

            if (confirm('Are you sure you want to replicate this product?')) {
                $.ajax({
                    url: '{{ route('product.duplicate') }}',
                    type: 'get',
                    data: {
                        product_id: productId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#product_card_list').append(productCard);
                            toastr.success('Product copied successfully.');
                        } else {
                            toastr.error('Something went wrong.');
                        }
                    },
                    error: function(xhr) {
                        alert('Error: ' + xhr.statusText);
                    }
                });
            }
        });
            // Varient Image Preview
        function previewMainImage(input, previewElId) {
            var preview = document.getElementById(previewElId);
            var file = input.files[0];

            var reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        }

        var currentStep = 1;

        function handleDraft(isDraft) {
            @if ($compaign)
                if (isDraft) {
                    currentStep = @json($compaign->current_step);
                    $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
                    setTimeout(function() {
                        $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
                        $(".step-" + currentStep).show().addClass(
                            "animate__animated animate__fadeInRight");
                        updateProgressBar();
                    }, 500);
                } else {
                    currentStep = 1;

                    $.ajax({
                        url: "{{ route('compaign.delete', $compaign->id) }}",
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.success) {
                                alert('Draft campaign deleted. You can start fresh.');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', error);
                        }
                    });
                }
            @endif

            $('#draftAlert').hide();
        }


        function updateProgressBar() {
            var progressPercentage = ((currentStep - 1) / 3) * 100;
            $(".progress-bar").css("width", progressPercentage + "%");
            $(".step-circle").removeClass("step-circle-filled");
            $(".step-circle-" + currentStep).addClass("step-circle-filled");
        }


        $(document).ready(function() {



            @if ($compaign)
                $('#draftAlert').show();
            @endif

            $('#multi-step-form').find('.step').slice(1).hide();

            $(".next-step").click(function(e) {
                e.preventDefault();
                var form_id = $(this).attr('data-form');
                if (form_id == 'next_move') {
                    if (currentStep < 4) {
                        $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
                        currentStep++;
                        setTimeout(function() {
                            $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
                            $(".step-" + currentStep).show().addClass(
                                "animate__animated animate__fadeInRight");
                            updateProgressBar();
                        }, 500);
                    }

                    toastr.success('This Step saved successfully!');
                } else {
                    var form = $("#" + form_id);
                    var formData = new FormData(form[0]);

                    var submitButton = $(this);
                    submitButton.prop('disabled', true);

                    $.ajax({
                        url: form.attr('action'),
                        type: form.attr('method'),
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            if (response.status === 'success') {
                                submitButton.prop('disabled', false);
                                let campaignId = response.campaign_id;
                                $('.campaign_id').each(function() {
                                    $(this).val(campaignId);
                                });

                                currentStep = response.current_step;

                                if (currentStep < 4) {
                                    $(".step-" + currentStep).addClass(
                                        "animate__animated animate__fadeOutLeft");
                                    setTimeout(function() {
                                        $(".step").removeClass(
                                            "animate__animated animate__fadeOutLeft"
                                        ).hide();
                                        $(".step-" + currentStep).show().addClass(
                                            "animate__animated animate__fadeInRight"
                                        );
                                        updateProgressBar();
                                    }, 500);
                                }

                                toastr.success('This Step is saved successfully!');
                            } else if (response.status === 'error') {
                                toastr.error('This Step is not saved');
                                displayErrors(response.errors);
                            }
                        },
                        error: function(xhr) {
                            if (xhr.status === 422) {
                                const errors = xhr.responseJSON.errors;
                                toastr.error('This Step not saved');
                                displayErrors(errors);
                            } else {
                                toastr.error('This Step not saved');
                            }
                            submitButton.prop('disabled', false);
                        }
                    });
                }
            });



            $(".prev-step").click(function() {
                if (currentStep > 1) {
                    $(".step-" + currentStep).addClass("animate__animated animate__fadeOutRight");
                    currentStep--;
                    setTimeout(function() {
                        $(".step").removeClass("animate__animated animate__fadeOutRight").hide();
                        $(".step-" + currentStep).show().addClass(
                            "animate__animated animate__fadeInLeft");
                        updateProgressBar();
                    }, 500);
                }
            });


            function displayStep(stepNumber) {
                if (stepNumber >= 1 && stepNumber <= 4) {
                    $(".step-" + currentStep).hide();
                    $(".step-" + stepNumber).show();
                    currentStep = stepNumber;
                    updateProgressBar();
                }
            }

            updateProgressBar();





            //upload the product
            function handleTagInput(event) {
                const tagInput = document.getElementById('tag-input');
                const tagContainer = document.getElementById('tag-input-container');

                if (event.key === 'Enter') {
                    event.preventDefault();
                    const tagValue = tagInput.value.trim();
                    if (tagValue) {
                        const tagElement = document.createElement('span');
                        tagElement.className = 'tag';
                        tagElement.innerHTML =
                            `${tagValue} <i class="bi bi-x-circle" onclick="removeTag(this)"></i>`;
                        tagContainer.insertBefore(tagElement, tagInput);
                        tagInput.value = '';
                    }
                }
            }

            function removeTag(element) {
                element.parentElement.remove();
            }

            const addBtns = document.querySelectorAll(".add-btn");
            const formContainers = document.querySelectorAll(".form-container");

            // Iterate over each "Add" button
            addBtns.forEach((btn) => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();

                    // Find the parent card of the button (reel, story, post, or video)
                    const parentCard = btn.closest(".card");

                    // Get the card type dynamically by matching the class that ends with "-card"
                    const cardType = [...parentCard.classList].find(className => className.endsWith(
                        "-card")).split("-")[0];

                    // Find the corresponding form for the clicked card type
                    const formContainer = [...formContainers].find(container =>
                        container.previousElementSibling &&
                        container.previousElementSibling.classList.contains(cardType + "-card")
                    );

                    // Toggle visibility of the form for this specific card
                    if (formContainer.style.display === "none" || formContainer.style.display ===
                        "") {
                        formContainers.forEach(form => form.style.display =
                            "none"); // Hide any other forms
                        formContainer.style.display = "block";
                    } else {
                        formContainer.style.display = "none";
                    }
                });
            });

            jQuery(document).ready(function() {
                ImgUpload();
                $('.delete-variant').on('click', function() {
                    var id = $(this).data("id");
                    var token = $(this).data("token");

                    var confirmDelete = confirm("Are you sure you want to delete this variant?");
                    if (!confirmDelete) {
                        return false;
                    }

                    $.ajax({
                        url: "{{ route('admin.deleteVariant') }}",
                        type: 'DELETE',
                        dataType: "JSON",
                        data: {
                            "id": id,
                            "_token": token,
                        },
                        success: function(response) {
                            if (response.status == 'success') {
                                alert(response.message);
                                $('#variant_' + id).remove();
                            }
                        }
                    });
                });
            });

            var imgArray = [];

            function ImgUpload() {
                var imgWrap = $('.upload__img-wrap');
                var maxLength = $('.upload__inputfile').attr('data-max_length');

                $('.upload__inputfile').on('change', function(e) {
                    var files = e.target.files;
                    var filesArr = Array.prototype.slice.call(files);

                    for (var i = 0; i < filesArr.length; i++) {
                        if (!filesArr[i].type.match('image.*')) {
                            continue;
                        }

                        imgArray.push(filesArr[i]);

                        var reader = new FileReader();
                        reader.onload = function(e) {
                            var html =
                                "<div class='upload__img-box'><div style='background-image: url(" +
                                e.target.result + ")' data-number='" + imgArray.length +
                                "' data-file='" + imgArray[imgArray.length - 1].name +
                                "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                            $('#uploadbtn').removeClass('upload__btn').addClass('uploaded__btn');
                            imgWrap.prepend(html);
                        };

                        reader.readAsDataURL(filesArr[i]);
                    }
                });

                $('body').on('click', ".upload__img-close", function(e) {
                    var file = $(this).parent().data("file");
                    imgArray = imgArray.filter(function(img) {
                        return img.name !== file;
                    });
                    $(this).parent().parent().remove();
                });

                $('body').on('submit', '#product_detail_from', function(e) {
                    e.preventDefault();

                    let isValid = true;  // Flag to track form validity

                    $('#variant_row_existing input, #variant_row input').each(function() {

                        if ($(this).attr('type') === 'hidden') {
                            return true; // Continue to the next iteration
                        }
                        if ($(this).val() == '') {
                            console.log($(this));
                            console.log($(this).val());

                            isValid = false;
                            $(this).addClass('is-invalid');
                            $(this).siblings('.invalid-feedback').show();
                        } else {
                            $(this).removeClass('is-invalid');
                            $(this).siblings('.invalid-feedback').hide();
                        }
                    });

                    // If the form is invalid, prevent submission
                    // if (!isValid) {
                    //     toastr.error("Please fill in all required variant fields!");  // Optional alert message
                    //     return
                    // }

                    var formData = new FormData();
                    formData.append('main_image', $('#product_main_image')[0].files[0]);
                    $('.variant-image').each(function(index, element) {
                        formData.append('variant_attr_images[]', element.files[0]);
                    });

                    $('.variant-image-exist').each(function(index, element) {
                        var variantId = $(element).closest('.row').find(
                            'input[name="variant_id[]"]').val();
                        formData.append('variant_attr_images[' + variantId + ']', element.files[0]);
                    });

                    for (var i = 0; i < imgArray.length; i++) {
                        formData.append('images[]', imgArray[i]);
                    }

                    // Append other form data
                    $(this).serializeArray().forEach(function(field) {
                        formData.append(field.name, field.value);
                    });

                    // Submit the form with AJAX
                    $.ajax({
                        url: $(this).attr('action'),
                        type: $(this).attr('method'),
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            if (response.status === 'success') {
                                window.location.href = "{{ route('admin.prodcuts') }}";
                            } else if (response.status === 'error') {

                                console.log("sssss",response.message);
                                $('.error-label').remove();

                                $.each(response.message, function(field, errorMessages) {
                                    var inputField = $('input[name="' + field + '"]');

                                    $.each(errorMessages, function(index,
                                        errorMessage) {
                                        var errorLabel = $(
                                            '<label class="error-label text-danger">* ' +
                                            errorMessage + '</label>');
                                        inputField.addClass('error');
                                        inputField.after(errorLabel);
                                    });
                                });
                            }

                            $.ajax({
                                url: '{{ route("admin.single_product_layout", ["id" => ":id"]) }}'.replace(':id', response.product.id),
                                success: function(response) {
                                    $("#product_card_list").prepend(response);


                                }
                            });

                            function resetPreview(previewId, defaultImage = '') {
                            const preview = document.getElementById(previewId);
                            preview.src = defaultImage; // Reset to default image
                        }

                            toastr.success('Product saved Successful');
                            document.getElementById('product_detail_from').reset();
                            resetPreview('mainImage_preview', '{{ $path ?? '' }}');
                                    // Next-3 button enable
                                    document.getElementById('nextButton').disabled = false;
                        },
                        error: function(error) {
                            if (error.status === 422) {
                                const errors = error.responseJSON.errors;
                                displayErrors(errors);
                            } else {
                                toastr.error(
                                    'An unexpected error occurred.'); // Handle other errors
                            }
                        }
                    });
                });

                $('input').on('input', function() {
                    $(this).removeClass('error');
                    $(this).next('.error-label').remove();
                });

                $('select').on('change', function() {
                    $(this).removeClass('error');
                    $(this).next('.error-label').remove();
                });

            }




            $('#add_new_row').on('click', function() {
                variant_uid = Math.floor(Math.random() * 100000)

                // new row add
            var new_row = `<div class="row bg-white rounded-3  mb-4 py-2">
                        <div class="col-12">
                            <hr class="">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="p-2">
                                <label for="" class="form-label">Variant Price <span class="extra-text">(Price in UK Pound)</span></label>
                                <input type="hidden" class="form-control" name="variant_id[]" value="">
                                <input type="number" class="form-control" name="variant_price[]" id="" step="0.01"
                                                                        min="0" >
                                <div class="invalid-feedback">Enter variant price!</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="p-2">
                                <label for="" class="form-label">Variant Cut Price <span class="extra-text">(Price in UK Pound)</span></label>
                                <input type="number"  class="form-control" name="variant_cut_price[]" id="" step="0.01"
                                                                        min="0">
                                <div class="invalid-feedback">Enter variant cut price!</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="p-2">
                                <label for="" class="form-label">Variant Name <span class="extra-text"></span></label>
                                <input type="text" class="form-control" name="variant_name[]" id="" >
                                <div class="invalid-feedback">Enter variant title!</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 product-md">
                            <div class="p-2">
                                <label for="" class="form-label">Variant Value <span class="extra-text"></span></label>
                                <input type="text" class="form-control" name="variant_value[]" id="" >
                                <div class="invalid-feedback">Enter variant value!</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 ">
                            <div class="p-2">
                                <label for="" class="form-label">Inventory <span class="extra-text">(Available Stock)</span></label>
                                <input type="number" class="form-control" name="variant_inventory[]" id="" >
                                <div class="invalid-feedback">Enter variant stock!</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="p-2">
                                <label for="" class="form-label">Weight <span class="extra-text">(gm)</span></label>
                                <input type="number" class="form-control" name="variant_weight[]" id="" step="0.01"
                                                                        min="0" >
                                <div class="invalid-feedback">Enter variant weight!</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="p-2">
                                <label for="" class="form-label">Barcode <span class="extra-text">(ISBN, UPC, GTIN, etc.)</span></label>
                                <input type="text" class="form-control" name="variant_barcode[]" id="" >
                                <div class="invalid-feedback">Enter variant barcode!</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="p-2">
                                <label for="" class="form-label">SKU <span class="extra-text">(Stock Keeping Unit)</span></label>
                                <input type="text" class="form-control" name="variant_sku[]" id="" >
                                <div class="invalid-feedback">Enter variant stock!</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 ">
                            <div class="p-2">
                                <label  class="form-label">Select Image</label>
                                <input class="form-control variant-image" name="variant_attr_image[]" type="file" id=""
                                data-previewId="vImage_preview${variant_uid}" onchange="previewMainImage(this, 'vImage_preview${variant_uid}')">
                                <div class="invalid-feedback">Enter variant image!</div>
                                <img id="vImage_preview${variant_uid}"
                                        src="{{ $path ?? '' }}"
                                        class="rounded-circle"
                                        alt="no image"
                                        style="width: 45px; height: 45px; cursor: pointer; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-end col-sm-12 mt-4 ">
                            <div class="p-2 ">
                                <button type="button" class="btn remove_row btn-danger bg-danger"><i class="fa fa-minus"></i> Remove</button>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr class="">
                        </div>
                    </div>`;

                $('#variant_row').append(new_row);
            });

            $(document).on('click', '.remove_row', function() {
                $(this).closest('.row').fadeOut('slow', function() {
                    $(this).remove();
                });
            });

            $(document).on('click', '.delete-attribute', function(e) {
                e.preventDefault();
                var attributeId = $(this).data('id');

                $.ajax({
                    url: "{{ route('admin.deleteProductAttribute') }}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: attributeId
                    },
                    success: function(response) {
                        if (response.status == 'success') {
                            $('#attribute-' + attributeId).fadeOut('slow', function() {
                                $(this).remove();
                            });
                            // alert('image is deleted.')
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function(xhr) {
                        alert('An error occurred while trying to delete the attribute.');

                    }

                });
            });

            $('#reelForm').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    url: '{{ route('store.compaign.reel') }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == 'success') {
                            toastr.success('Reel data saved successfully!');
                            $('#reelForm')[0].reset();
                        } else {
                            toastr.error('Some Error Occur!');
                        }
                    },
                    error: function(xhr, status, error) {
                        toastr.error('Error submitting reel.');
                    }
                });
            });

            $('#storyForm').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    url: '{{ route('store.compaign.story') }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == 'success') {
                            toastr.success('Story data saved successfully!');
                            $('#storyForm')[0].reset();
                        } else {
                            toastr.error('Some Error Occur!');
                        }
                    },
                    error: function(xhr, status, error) {
                        toastr.error('Error submitting video.');
                    }
                });
            });

            $('#videoForm').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    url: '{{ route('store.compaign.video') }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == 'success') {
                            toastr.success('Video data saved successfully!');
                            $('#videoForm')[0].reset();
                        } else {
                            toastr.error('Some Error Occur!');
                        }
                    },
                    error: function(xhr, status, error) {
                        toastr.error('Error submitting video.');
                    }
                });
            });

            $('#postForm').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    url: '{{ route('store.compaign.post') }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == 'success') {
                            toastr.success('Post data saved successfully!');
                            $('#postForm')[0].reset();
                        } else {
                            toastr.error('Some Error Occur!');
                        }
                    },
                    error: function(xhr, status, error) {
                        toastr.error('Error submitting post.');
                    }
                });
            });

            $('#logoForm').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    url: '{{ route('store.compaign.logo') }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == 'success') {
                            toastr.success('Logo data saved successfully!');
                            $('#logoForm')[0].reset();
                        } else {
                            toastr.error('Some Error Occur!');
                        }
                    },
                    error: function(xhr, status, error) {
                        toastr.error('Error submitting logo.');
                    }
                });
            });


            $('#addCategory').on('click', function(e) {
                let name = $('#categoryName').val();

                $.ajax({
                    url: "{{ route('category.create') }}", // Route to your create method
                    method: 'GET',
                    data: 'name=' + name,
                    success: function(response) {
                        if (response.success == true) {
                            $('#categoryName').val('');
                            $('#category_id').append(response.option)
                        }
                    },
                    error: function(error) {
                        if (error.status === 422) { // Unprocessable Entity
                            toastValidationError(error);
                        } else {
                            toastr.error(
                                'An unexpected error occurred.'); // Handle other errors
                        }

                    }
                });



            });

            function displayErrors(errors) {
                    $('.error-label').remove();
                    $.each(errors, function(field, errorMessages) {
                        var inputField = $('input[name="' + field + '"], select[name="' + field +
                            '"], textarea[name="' + field + '"]');
                        inputField.addClass('is-invalid');

                        $.each(errorMessages, function(index, errorMessage) {
                            var errorLabel = $('<label class="error-label text-danger">* ' +
                                errorMessage + '</label>');
                            inputField.after(errorLabel);
                        });
                    });
                }

                function toastValidationError(error) {
                    const errors = error.responseJSON.errors;
                    for (let field in errors) {
                        console.log('errors[field]', errors[field]);

                        toastr.error(errors[field][
                            0
                        ]);
                    }
                }
        });
    </script>
@endPushOnce
