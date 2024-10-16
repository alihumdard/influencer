@extends('layouts.default')
@section('title', 'Dashboard')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css" />
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>

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
        
        
    html * {
        box-sizing: border-box;
    }

    p {
        margin: 0;
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

    .hide {
        display: none !important;
    }
</style>
<style>
    .flip-card {
        background-color: transparent;
        width: 100px;
        height: 100px;
        perspective: 1000px;
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front,
    .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .flip-card-front {
        background-color: #bbb;
        color: black;
    }

    .flip-card-back {
        background-color: #2980b9;
        color: white;
        transform: rotateY(180deg);
    }

    .flip-card-back {
        background-color: #2980b9;
        color: white;
        transform: rotateY(180deg);
        display: flex;
        justify-content: center;
        /* Center horizontally */
        align-items: center;
        /* Center vertically */
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
                                            <input type="file" class="form-control" id="campaign_banner" name="campaign_banner" required />
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
                                            <label class="form-label" for="product_description">Compaign Description:</label>
                                            <textarea class="form-control" id="product_description" name="product_description" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Step 3 -->
                            <h6>Step 3</h6>
                            <section class="product-sec">
                                <form class=" g-3 mt-3 needs-validation" id="product_detail_from" method="post" action="{{ route('admin.storeProduct') }}" novalidate enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{  $product['id'] ?? '' }}">
                                    <input type="hidden" name="duplicate" value="{{  $duplicate ?? 'no' }}">
                                    <div class="row gy-4">
                                        <div class=" col-md-6 extra-images">
                                            <label class="form-label">Extra Images</label>
                                            <!-- below containerrrrrrrrrrrrrrrrrrrrrrrr -->
                                            <div class="upload__box">
                                                <div class="upload__btn-box">
                                                    <div class="upload__img-wrap">
                                                        <label class="upload__btn" id="uploadbtn" for="product_images">
                                                            <p>+</p>
                                                            <input type="file" multiple data-max_length="5" id="product_images" name="images" class="upload__inputfile">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- below containerrrrrrrrrrrrrrrrrrrrrrrr -->
                                            <div style="margin-top: 10px;margin-bottom:5px">
                                                <div class="row" style="padding-right: 12px;">
                                                    @foreach($product['product_attributes'] ?? [] as $key => $val1)
                                                    @php
                                                    $src = ($val1['image']) ? $val1['image'] : '';
                                                    @endphp
                                                    @if($src)
                                                    <div class="col-sm-2" id="attribute-{{ $val1['id'] }}">
                                                        <div class="flip-card">
                                                            <div class="flip-card-inner">
                                                                <div class="flip-card-front">
                                                                    <img src="{{ asset('storage/'.$src)}}" alt="Avatar" style="width:100px;height:100px;">
                                                                </div>
                                                                <div class="flip-card-back">
                                                                    <a href="#" class="delete-attribute" data-id="{{ $val1['id'] }}">
                                                                        <i class="fa fa-trash-o" style="font-size:48px;color:red"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endforeach

                                                </div>
                                            </div>

                                            <div class="invalid-feedback">Please select product image!</div>
                                            @error('images')
                                            <div class="alert-danger text-danger ">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 text-and-gallery-images">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="form-label">Product Title</label>
                                                    <input class="form-control me-2" type="text" name="title" id="title" value="{{  $product['title'] ?? old('title') }}" placeholder="Product Title" aria-label="Search" required>
                                                    <div class="invalid-feedback">Please write product title!</div>
                                                    @error('title')
                                                    <div class="alert-danger text-danger ">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                @php
                                                $path = url('assets/admin/img/upload_btn.png');
                                                if($product['main_image'] ?? NULL){
                                                $path = asset('storage/'.$product['main_image']);
                                                }
                                                @endphp
                                                <div class="col-12 mt-2 produt-main-image">
                                                    <label for="product_main_image" class="form-label">Upload Main Image</label>
                                                    <div class="d-flex align-items-center" style="gap: 20px; justify-content: space-between;">
                                                        <input type="file" class="form-control w-100" id="product_main_image" name="main_image" value="{{ ($product['main_image'] ?? NULL) ? 'required' : '' }}" onchange="previewMainImage(this)">
                                                        <label for="product_main_image" class=" d-block ">
                                                            <img id="mainImage_preview" src="{{  $path ?? '' }}" class="rounded-circle" alt="no image" style="width: 45px; height: 45px;  cursor:pointer;   object-fit: cover;">
                                                        </label>
                                                    </div>
                                                    <div class="invalid-feedback">* Upload product main Image!</div>
                                                </div>
                                                <div class="col-12 select-product-category">
                                                    <label for="category_id" class="form-label">Select Product Category</label>
                                                    <select id="category_id" name="category_id" class="form-select" required>
                                                        <option value="" selected>Choose...</option>
                                                        @foreach ($categories ?? [] as $key => $value)
                                                        <option value="{{ $value['id'] ?? '' }}" {{ (isset($product['category_id']) && $product['category_id'] == $value['id']) ? 'selected' : '' }}>{{ $value['name'] ?? '' }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">* Please select product category</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="cut_price" class="col-form-label"> Cut Price <span class="cut-price"></span></label>
                                            <input type="text" name="cut_price" id="cut_price" value="{{  $product['cut_price'] ?? old('cut_price') }}" class="form-control">
                                            <div class="invalid-feedback">Enter Cut Price!</div>
                                            @error('cut_price')
                                            <div class="alert-danger text-danger ">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="price" class="col-form-label"> Price <span class="extra-text">(Price in UK Pound)</span></label>
                                            <input type="text" name="price" id="price" value="{{  $product['price'] ?? old('price') }}" class="form-control" required>
                                            <div class="invalid-feedback">Enter product price!</div>
                                            @error('price')
                                            <div class="alert-danger text-danger ">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="stock" class="col-form-label">Inventory <span class="extra-text">(Available Stock)</span></label>
                                            <input type="number" id="stock" name="stock" value="{{  $product['stock'] ?? old('stock') }}" class="form-control" required>
                                            <div class="invalid-feedback">Enter product stock!</div>
                                            @error('stock')
                                            <div class="alert-danger text-danger ">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="stock" class="col-form-label">SKU </label>
                                            <input type="text" name="SKU" id="SKU" value="{{  $product['SKU'] ?? old('SKU') }}" class="form-control">
                                            <div class="invalid-feedback">Enter avialable stock!</div>
                                            @error('SKU')
                                            <div class="alert-danger text-danger ">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <label for="barcode" class="form-label">Barcode (ISBN, UPC, GTIN, etc.)</label>
                                            <input type="text" name="barcode" id="barcode" value="{{  $product['barcode'] ?? old('barcode') }}" class="form-control">
                                            <div class="invalid-feedback">Enter GTIN number!</div>
                                            @error('barcode')
                                            <div class="alert-danger text-danger ">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <label for="weight" class="form-label">Weight (gm)</label>
                                            <input type="text" name="weight" id="weight" value="{{  $product['weight'] ?? old('weight') }}" class="form-control">
                                            <div class="invalid-feedback">Enter product weight!</div>
                                            @error('weight')
                                            <div class="alert-danger text-danger ">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="stock_status" class="col-form-label"> Stock Status </label>
                                            <select id="stock_status" name="stock_status" class="form-select" required>
                                                <option value="IN" {{ (isset($product['stock_status']) && $product['stock_status'] == 'IN') ? 'selected' : '' }}>IN</option>
                                                <option value="OUT" {{ (isset($product['stock_status']) && $product['stock_status'] == 'OUT') ? 'selected' : '' }}>OUT</option>
                                            </select>
                                            <div class="invalid-feedback">Select Stock Status!</div>
                                            @error('stock_status')
                                            <div class="alert-danger text-danger ">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                    </div>
                    <div class="row mb-5">
                        <div class="form-floating col-12  mt-3">
                            <textarea class="form-control tinymce-editor" name="short_desc" id="short_desc" placeholder="Product short Description">{{$product['short_desc'] ?? ''}}</textarea>
                            <div class="invalid-feedback">Please write product short desc!</div>
                            @error('short_desc')
                            <div class="alert-danger text-danger ">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="form-floating col-12  mt-3">
                            <textarea class="form-control tinymce-editor" name="desc" id="pro_desc" placeholder="Product main Description" required=''>{{$product['desc'] ?? ''}}</textarea>
                            <div class="invalid-feedback">Please write product Main desc!</div>
                            @error('desc')
                            <div class="alert-danger text-danger ">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- Variant Section --}}
                    <div class="container-fluid m-0 ">
                        <div class="d-flex justify-content-between col-md-12 align-items-center">
                            <div class="variants-div">
                                <h4 class="fw-bold">Product Variants</h4>
                            </div>
                            <div class=" float-end">
                                <div class="p-2">
                                    <lable id="add_new_row" class="btn btn-success mb-2"><i class="fa fa-plus"></i> Add Variants</lable>
                                </div>
                                <button type="button" id="add-product" class="btn btn-primary">Add Another Product</button>
                            </section>

                            <!-- Step 4 -->
                            <h6>Step 4</h6>
                            </div>
                        </div>
                        {{-- existing variants --}}
                        <div id="variant_row_existing">
                            @if(isset($product['variants']))
                            @foreach ($product['variants'] as $variant)
                            <div class="row bg-white rounded-3  mb-4 py-2" id="variant_{{ $variant['id'] }}">
                                <input type="hidden" value="{{$variant['id']}}" name="exist_vari_id[]">
                                <div class="col-12">
                                    <hr class="">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="p-2">
                                        <label for="" class="form-label">Variant Price <span class="vari-price">(Price in UK Pound)</span></label>
                                        <input type="text" class="form-control" name="exist_vari_price[]" id="" value="{{ $variant['price']}}" required>
                                        <div class="invalid-feedback">Enter variant price!</div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="p-2">
                                        <label for="" class="form-label">Variant Cut Price <span class="vari-cut-price">(Price in UK Pound)</span></label>
                                        <input type="text" class="form-control" name="exist_vari_cut_price[]" id="" value="{{ $variant['cut_price']}}">
                                        <div class="invalid-feedback">Enter variant cut price!</div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="p-2">
                                        <label for="" class="form-label">Variant Name <span class="extra-text"></span></label>
                                        <input type="text" class="form-control" name="exist_vari_name[]" id="" value="{{ $variant['title']}}" required>
                                        <div class="invalid-feedback">Enter variant title!</div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 product-md">
                                    <div class="p-2">
                                        <label for="" class="form-label">Variant Value <span class="extra-text"></span></label>
                                        <input type="text" class="form-control" name="exist_vari_value[]" id="" value="{{ $variant['value']}}" required>
                                        <div class="invalid-feedback">Enter variant value!</div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 ">
                                    <div class="p-2">
                                        <label for="" class="form-label">Inventory <span class="extra-text">(Available Stock)</span></label>
                                        <input type="number" class="form-control" name="exist_vari_inventory[]" id="" value="{{ $variant['inventory']}}" required>
                                        <div class="invalid-feedback">Enter variant stock!</div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 ">
                                    <div class="p-2">
                                        <label for="" class="form-label">weight <span class="extra-text">(gm)</span></label>
                                        <input type="text" class="form-control" name="exist_vari_weight[]" id="" value="{{ $variant['weight'] }}">
                                        <div class="invalid-feedback">Enter variant weight!</div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="p-2">
                                        <label for="" class="form-label">Barcode <span class="extra-text">(ISBN, UPC, GTIN, etc.)</span></label>
                                        <input type="text" class="form-control" name="exist_vari_barcode[]" id="" value="{{ $variant['barcode']}}">
                                        <div class="invalid-feedback">Enter variant barcode!</div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="p-2">
                                        <label for="" class="form-label">SKU <span class="extra-text">(Stock Keeping Unit)</span></label>
                                        <input type="text" class="form-control" name="exist_vari_sku[]" id="" value="{{ $variant['sku']}}">
                                        <div class="invalid-feedback">Enter variant stock!</div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 ">
                                    <div class="p-2">
                                        <label class="form-label">Select Image</label>
                                        <input class="form-control variant-image-exist" name="exist_vari_attr_image[]" type="file" id="">
                                        <div class="invalid-feedback">Enter variant image!</div>
                                    </div>
                                </div>
                                <div class="col-md-12 d-flex justify-content-end col-sm-12 mt-4 ">
                                    <div class="p-2 ">
                                        <button type="button" class="btn delete-variant btn-danger bg-danger" data-id="{{ $variant['id'] }}" data-token="{{ csrf_token() }}"><i class="fa fa-minus"></i> Remove</button>
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
                        <input type="reset" class=" btn btn-secondary bg-secondary rounded-2  px-5 mx-1 fw-bold" value="Cancel">
                        <button class="rounded-2 py-2 px-5 fw-bold mt-0">Submit</button>
                    </div>

                </div>
                </form>
                </section>

                <!-- Step 4 -->
                {{-- <h6>Step 4</h6>
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
                            </section> --}}

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
<script>
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
                url: "{{route('admin.deleteVariant')}}",
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

            // Create FormData object
            var formData = new FormData();
            // Append main image
            formData.append('main_image', $('#product_main_image')[0].files[0]);
            // Append variant images
            $('.variant-image').each(function(index, element) {
                formData.append('vari_attr_images[]', element.files[0]);
            });
            // Append variant images Existing
            $('.variant-image-exist').each(function(index, element) {
                var variantId = $(element).closest('.row').find('input[name="exist_vari_id[]"]').val();
                formData.append('exist_vari_attr_images[' + variantId + ']', element.files[0]);
            });
            // Append images to the FormData object
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

                        console.log(response.message);
                        $('.error-label').remove();

                        $.each(response.message, function(field, errorMessages) {
                            var inputField = $('input[name="' + field + '"]');

                            $.each(errorMessages, function(index, errorMessage) {
                                var errorLabel = $('<label class="error-label text-danger">* ' + errorMessage + '</label>');
                                inputField.addClass('error');
                                inputField.after(errorLabel);
                            });
                        });
                    }

                },
                error: function(error) {
                    alert('technical error occur')
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

    function previewMainImage(input) {
        var preview = $('#mainImage_preview');
        var file = input.files[0];
        var reader = new FileReader();

        reader.onload = function(e) {
            preview.attr('src', e.target.result);
        };

        if (file) {
            reader.readAsDataURL(file);
        }
    }

    // new row add 
    var new_row = `<div class="row bg-white rounded-3  mb-4 py-2">
                        <div class="col-12">
                            <hr class="">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="p-2">
                                <label for="" class="form-label">Variant Price <span class="extra-text">(Price in UK Pound)</span></label>
                                <input type="text" class="form-control" name="vari_price[]" id="" required>
                                <div class="invalid-feedback">Enter variant price!</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="p-2">
                                <label for="" class="form-label">Variant Cut Price <span class="extra-text">(Price in UK Pound)</span></label>
                                <input type="text" class="form-control" name="vari_cut_price[]" id="">
                                <div class="invalid-feedback">Enter variant cut price!</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="p-2">
                                <label for="" class="form-label">Variant Name <span class="extra-text"></span></label>
                                <input type="text" class="form-control" name="vari_name[]" id="" required>
                                <div class="invalid-feedback">Enter variant title!</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 product-md">
                            <div class="p-2">
                                <label for="" class="form-label">Variant Value <span class="extra-text"></span></label>
                                <input type="text" class="form-control" name="vari_value[]" id="" required>
                                <div class="invalid-feedback">Enter variant value!</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 ">
                            <div class="p-2">
                                <label for="" class="form-label">Inventory <span class="extra-text">(Available Stock)</span></label>
                                <input type="number" class="form-control" name="vari_inventory[]" id="" required>
                                <div class="invalid-feedback">Enter variant stock!</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="p-2">
                                <label for="" class="form-label">Weight <span class="extra-text">(gm)</span></label>
                                <input type="text" class="form-control" name="vari_weight[]" id="" >
                                <div class="invalid-feedback">Enter variant weight!</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="p-2">
                                <label for="" class="form-label">Barcode <span class="extra-text">(ISBN, UPC, GTIN, etc.)</span></label>
                                <input type="text" class="form-control" name="vari_barcode[]" id="" >
                                <div class="invalid-feedback">Enter variant barcode!</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="p-2">
                                <label for="" class="form-label">SKU <span class="extra-text">(Stock Keeping Unit)</span></label>
                                <input type="text" class="form-control" name="vari_sku[]" id="" >
                                <div class="invalid-feedback">Enter variant stock!</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 ">
                            <div class="p-2">
                                <label  class="form-label">Select Image</label>
                                <input class="form-control variant-image" name="vari_attr_image[]" type="file" id="">
                                <div class="invalid-feedback">Enter variant image!</div>
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

    $('#add_new_row').on('click', function() {
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
</script>
@endPushOnce
