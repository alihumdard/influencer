@extends('layouts.default')
@section('title', 'Product Page')
@section('content')
    <style>
        /* General Styles */
        body {
            background-color: #f0f4f8;
            font-family: 'Arial', sans-serif;
        }

        .card {
            border: none;
            border-radius: 15px;
            background: linear-gradient(135deg, #ca5a98, #E8B2D0);
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 1250px;
        }

        /* Page Title Styles */
        .page-title {
            text-align: center;
            font-size: 32px;
            font-weight: bold;
            color: #d5006d;
            margin-bottom: 20px;
        }

        /* Horizontal Product Card Styles */
        .product-card {
            display: flex;
            background: #3d2c3a;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 30px;
        }

        .product-image {
            width: 45%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .product-image:hover {
            transform: scale(1.05);
        }

        .product-details {
            padding: 50px;
        }

        .product-title {
            font-size: 28px;
            font-weight: bold;
            background: linear-gradient(to right, #ca5a98, #e8b2d0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }

        .heart-icon {
            color: #e8b2d0;
            font-size: 1.5rem;
            cursor: pointer;
            transition: color 0.3s;
            position: absolute;
            top: 75px;
            right: 73px;
        }

        .heart-icon:hover {
            color: #ff4081;
        }

        .rating {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .review-text {
            font-size: 0.9rem;
            color: #e8b2d0;
            ;
        }

        .product-description {
            margin: 15px 0;
            color: #f5e1e8;
            font-size: 1rem;
        }

        /* Size Selection Buttons */
        .size-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-bottom: 15px;
        }

        .size-button {
            flex: 1;
            height: 50px;
            font-size: 0.9rem;
            border-radius: 10px;
            background-color: #ca5a98;
            color: white;
            border: none;
            transition: background 0.3s, box-shadow 0.3s;
        }
        .size-button:hover {
            background-color: #e8b2d0;
            color: #3d2c3a;
            box-shadow: 0 4px 12px rgba(213, 0, 109, 0.5);
        }
        .variant-size-button {
            height: 50px;
            font-size: 0.9rem;
            border-radius: 10px;
            background-color: #ca5a98;
            color: white;
            border: none;
            transition: background 0.3s, box-shadow 0.3s;
        }
        .variant-size-button:hover {
            background-color: #e8b2d0;
            color: #3d2c3a;
            box-shadow: 0 4px 12px rgba(213, 0, 109, 0.5);
        }

        .star-icon {
            color: #e8b2d0;
        }

        /* Call to Action Button */
        .cta-button {
            width: 100%;
            height: 50px;
            background-color: #ca5a98;
            color: white;
            font-weight: bold;
            border-radius: 10px;
            border: none;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .cta-button:hover {
            background-color: #e8b2d0;
            color: #3d2c3a;
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(232, 178, 208, 0.6);
        }

        /* Product Details Card Styles */
        .details-card {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin-top: 20px;
            border: 1px solid #d5006d;
        }

        .details-title {
            font-size: 24px;
            font-weight: bold;
            color: #d5006d;
            margin-bottom: 15px;
            text-align: center;
        }

        .details-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 1rem;
            color: #333;
            padding: 5px 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .product-detail-image {
            display: flex;
            width: 20%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s;
            flex-wrap: wrap;
            margin-right: 10px;
        }

        /* Variant Card Styles */
        .variant-card {
            background: #f9f9f9;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
            border: 1px solid #ff4081;
        }

        .variant-title {
            font-size: 20px;
            font-weight: bold;
            color: #d5006d;
            margin-bottom: 10px;
            text-align: center;
        }

        .variant-image {
            width: 80px;
            height: 80px;
            border-radius: 10px;
            object-fit: cover;
            margin-left: 15px;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .product-card {
                flex-direction: column;
            }

            .size-buttons {
                flex-direction: column;
                gap: 10px;
            }

            .size-button {
                width: 100%;
            }

            .variant-image {
                width: 60px;
                height: 60px;
            }
        }
    </style>

    <div class="body-wrapper">
        <div class="container-fluid">
            <!-- Page Title Section -->
            <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">Page Name</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-muted text-decoration-none" href="/minisidebar/index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Page Name</li>
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
            <div class="card">
                <div class="product-card">
                    <img src="../assets/images/product-image.png" alt="Product Image" class="product-image" />
                    <div class="product-details">
                        <i class="fas fa-heart heart-icon"></i>
                        <h2 class="product-title">Herbalism</h2>
                        <p class="product-description">
                            Discover the power of herbal remedies with our natural cleanser. Made with organic ingredients
                            to nourish and rejuvenate your skin.
                        </p>
                        <div class="rating">
                            <i class="fas fa-star star-icon"></i>
                            <i class="fas fa-star star-icon"></i>
                            <i class="fas fa-star star-icon"></i>
                            <i class="fas fa-star star-icon"></i>
                            <i class="fas fa-star-half-alt star-icon"></i>
                            <span class="ms-2 review-text">1590 Reviews</span>
                        </div>
                        <div class="size-buttons">
                            <button class="btn size-button">
                                <div class="fw-bold mt-1">$12.95</div>
                            </button>
                            <button class="btn size-button">
                                <div class="fw-bold mt-1">$21.95</div>
                            </button>
                        </div>
                        <button class="cta-button" onclick="showProductDetails()">
                            <i class="fas fa-eye me-2"></i> View Product Details
                        </button>
                    </div>
                </div>
            </div>
            <!-- Product Details Card -->
            <div class="card" id="productDetails" style="display:none;">
                <div class="details-card">
                    <div class="details-title">Product Details</div>
                    <div class="details-item">
                        <span>Title:</span>
                        <span>Herbalism</span>
                    </div>
                    <div class="product-detail-image">
                        <span>Main Image:</span>
                        <img src="../assets/images/product-image.png" alt="Product Main" class="product-image" />
                    </div>
                    <div class="details-item">
                        <span>Category:</span>
                        <span>Natural Remedies</span>
                    </div>
                    <div class="details-item">
                        <span>Price:</span>
                        <span>$12.95</span>
                    </div>
                    <div class="details-item">
                        <span>Cut Price:</span>
                        <span style="text-decoration: line-through;">$15.00</span>
                    </div>
                    <div class="details-item">
                        <span>Inventory:</span>
                        <span>120</span>
                    </div>
                    <div class="details-item">
                        <span>SKU:</span>
                        <span>HRBL-2024</span>
                    </div>
                    <div class="details-item">
                        <span>Barcode:</span>
                        <span>123456789012</span>
                    </div>
                    <div class="details-item">
                        <span>Weight:</span>
                        <span>1.5 oz.</span>
                    </div>
                    <div class="details-item">
                        <span>Stock Status:</span>
                        <span style="color: green;">In Stock</span>
                    </div>
                    <div class="details-item">
                        <span>Description:</span>
                        <span class="product-description">
                            A natural cleanser made with organic herbs to detoxify your skin and enhance its natural glow.
                        </span>
                    </div>
                    <div class="details-item">
                        <span>Variant Details:</span>
                        <button class="btn variant-size-button" onclick="showVariantDetails()">
                            <i class="fas fa-eye me-2"></i> View Variant Details
                        </button>
                    </div>
                </div>
            </div>

            <!-- Variant Details Card -->
            <div class="card" id="variantDetails" style="display:none;">
                <div class="variant-card">
                    <div class="variant-title">Variant Details</div>
                    <div class="details-item">
                        <span>Variant Name:</span>
                        <span>4.4 oz.</span>
                    </div>
                    <div class="details-item">
                        <span>Variant Price:</span>
                        <span>$21.95</span>
                    </div>
                    <div class="details-item">
                        <span>Variant Cut Price:</span>
                        <span style="text-decoration: line-through;">$25.00</span>
                    </div>
                    <div class="details-item">
                        <span>Inventory Stock:</span>
                        <span>50</span>
                    </div>
                    <div class="details-item">
                        <span>Weight:</span>
                        <span>4.4 oz.</span>
                    </div>
                    <div class="details-item">
                        <span>Barcode:</span>
                        <span>123456789013</span>
                    </div>
                    <div class="details-item">
                        <span>SKU:</span>
                        <span>HRBL-2024-V2</span>
                    </div>
                    <div class="product-detail-image">
                        <span>Variant Image:</span>
                        <img src="../assets/images/variant-image.png" alt="Variant Image" class="variant-image" />
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        function showProductDetails() {
            const productDetails = document.getElementById('productDetails');
            

            // Toggle visibility of product details
            productDetails.style.display = productDetails.style.display === 'none' ? 'block' : 'none';
            
        }
        function showVariantDetails() {
            const variantDetails = document.getElementById('variantDetails');

            // Toggle visibility of variant details
            variantDetails.style.display = variantDetails.style.display === 'none' ? 'block' : 'none';
        }
    </script>
@stop

@pushOnce('scripts')
    <script></script>
@endPushOnce
