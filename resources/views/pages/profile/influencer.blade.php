@extends('layouts.default')
@section('title', 'Page Name')
@section('content')

    <head>
        <style>
            body {
                background-color: #f0f2f5;
                font-family: 'Poppins', sans-serif;
            }

            .body-wrapper {
                padding-top: calc(60px + 30px);
            }

            /* Page Header */
            .page-header {
                background: linear-gradient(135deg, #ca5a98, #E8B2D0);
                border-radius: 20px;
                padding: 20px 30px;
                color: white;
                margin-bottom: 30px;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            }

            .page-header h4 {
                color: #f0f2f5;
            }

            .breadcrumb {
                background: transparent;
                padding: 0;
                margin: 0;
            }

            .breadcrumb-item a {
                color: rgba(255, 255, 255, 0.7);
                text-decoration: none;
            }

            .breadcrumb-item.active {
                color: white;
            }

            .btn-primary {
                background: #B20163;
                border-color: #ca5a98;
            }

            .card-content h6 {
                font-weight: 900;
                color: #B20163;
            }

            /* Profile Card */
            .profile-card {
                background: linear-gradient(135deg, #ca5a98, #E8B2D0);
                border-radius: 25px;
                padding: 32px;
                color: white;
                box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
                transition: transform 0.4s, box-shadow 0.4s;
            }

            .profile-header {
                display: flex;
                align-items: center;
                margin-bottom: 24px;
            }

            .profile-image {
                width: 90px;
                height: 90px;
                border-radius: 50%;
                overflow: hidden;
                margin-right: 20px;
                box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
                border: 5px solid rgba(255, 255, 255, 0.4);
            }

            .user-info h2 {
                color: #f0f2f5;
                font-size: 2rem;
                margin: 0;
                font-weight: bold;
            }

            .user-info p {
                font-size: 1rem;
                opacity: 0.9;
            }

            /* Progress Bar */
            .progress-container {
                margin-top: 10px;
                display: flex;
                align-items: center;
                gap: 12px;
            }

            .progress-bar-wrapper {
                flex-grow: 1;
                height: 15px;
                background-color: rgba(255, 255, 255, 0.3);
                border-radius: 50px;
                overflow: hidden;
            }

            .progress-bar {
                background: linear-gradient(90deg, #E8B2D0, #B20163);
                height: 100%;
                transition: width 0.4s;
            }

            .progress-percentage {
                font-size: 1rem;
                font-weight: 500;
                color: #f0f2f5;
            }

            /* Card Content */
            .card-content {
                background: rgba(255, 255, 255, 0.15);
                padding: 20px;
                border-radius: 20px;
                margin-bottom: 20px;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            }

            .card-content h6 {
                font-size: 1rem;
                opacity: 0.85;
            }

            .edit-link {
                border: 1px solid #B20163;
                color: #fff;
                cursor: pointer;
                font-weight: 500;
                padding: 10px 20px;
                background: #B20163;
                border-radius: 10px;
                margin-bottom: 3px;
            }

            /* Button Styling */
            .social-insight-btn {
                background-color: #B20163;
                color: #f0f2f5;
                border-radius: 30px;
                transition: background 0.3s;
            }

            .social-insight-btn:hover {
                background-color: #E8B2D0;
                color: white;
            }

            /* Redesigned Form Container */
            .form-container {
                background: linear-gradient(135deg, #E8B2D0, white);
                border-radius: 20px;
                padding: 50px;
                max-width: 1250px;
                box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.15);
                transition: transform 0.3s ease-in-out;
                display: none;
            }

            /* Header Styling */
            .form-container h1 {
                font-size: 2.5rem;
                font-weight: bold;
                color: #B20163;
                text-align: center;
                margin-bottom: 40px;
                text-transform: uppercase;
                letter-spacing: 2px;
                position: relative;
            }

            .form-container h1::after {
                content: '';
                width: 60px;
                height: 4px;
                background-color: #B20163;
                position: absolute;
                bottom: -10px;
                left: 50%;
                transform: translateX(-50%);
            }

            /* Avatar Section */
            .avatar-container {
                display: flex;
                justify-content: center;
                margin-bottom: 30px;
            }

            .avatar {
                background-color: #fff;
                border-radius: 50%;
                width: 120px;
                height: 120px;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0px 12px 25px rgba(0, 0, 0, 0.2);
                position: relative;
                transition: box-shadow 0.3s ease;
            }

            .avatar:hover {
                box-shadow: 0px 20px 40px rgba(0, 0, 0, 0.25);
            }

            .avatar svg {
                width: 60px;
                height: 60px;
                color: #ca5a98;
            }

            .avatar .status-dot {
                width: 20px;
                height: 20px;
                background-color: #ca5a98;
                border: 3px solid #fff;
                border-radius: 50%;
                position: absolute;
                bottom: 0;
                right: 0;
            }

            /* Form Group */
            .form-group {
                margin-bottom: 10px;
            }

            .form-group label {
                font-size: 1.2rem;
                color: #B20163;
                margin-bottom: 10px;
                display: block;
            }

            .text-light {
                color: #B20163 !important;
            }

            .form-group .btn-change {
                width: 100px !important;
                background: #B20163;
            }

            /* Input Fields */
            .form-control {
                border-radius: 10px !important;
                padding: 15px !important;
                border: 1px solid #F0CBE0 !important;
                background-color: #fff !important;
                color: #333 !important;
                box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.1) !important;
                transition: box-shadow 0.3s ease;
            }

            .form-control:focus {
                box-shadow: 0px 30px 60px rgba(202, 90, 152, 0.4) !important;
                outline: none;
                border: 1px solid #ca5a98;
                color: #fff;
                font-weight: bold;
                background: #F0CBE0;
            }

            /* WhatsApp Change Button */
            .btn-change {
                background-color: #ca5a98;
                color: #fff;
                border-radius: 20px;
                padding: 15px 20px;
                font-weight: bold;
                border: none;
                transition: background 0.3s ease, color 0.3s ease;
                width: 60px !important;
            }

            .btn-change:hover {
                background-color: #b04a83;
                color: #fff;
            }

            .btn {
                width: 56px !important;
            }

            /* Submit Button */
            .btn-primary {
                background-color: #B20163;
                padding: 12px 40px;
                border-radius: 30px;
                font-size: 1.2rem;
                color: #fff;
                width: 100%;
                transition: all 0.3s ease;
                box-shadow: 0px 10px 20px rgba(202, 90, 152, 0.5);
                text-transform: uppercase;
                border-color: #ca5a98;
            }

            .btn-primary:hover {
                background-color: #b04a83;
                transform: translateY(-3px);
                border-color: #ca5a98;
            }

            /* Gender Buttons */
            .gender-buttons .btn {
                border-radius: 30px;
                padding: 10px 20px;
                font-weight: bold;
                transition: none;
                width: 100% !important;
            }

            .gender-buttons .btn:hover {
                background-color: #b04a83;
                color: #fff;
                transition: 0.3s all ease;
                transform: none;
            }

            .gender-buttons .btn-primary {
                border-color: #ca5a98;
                background-color: #B20163;
            }

            .gender-buttons .btn-outline-secondary {
                text-transform: uppercase;
                border-radius: 30px;
                padding: 10px 20px;
                font-weight: bold;
                font-size: 1.2rem;
                transition: none;
                width: 100% !important;
                border: 2px solid #ca5a98;
                color: #fff;
                background-color: #B20163;
            }

            .gender-buttons .btn-outline-secondary:hover {
                background-color: #b04a83;
                color: #fff;
                transition: 0.3s all ease;
            }

            /* save btn */
            .submit-btn {
                background-color: #B20163;
                padding: 12px 40px;
                border-radius: 30px;
                font-size: 1.2rem;
                color: #fff;
                width: 100% !important;
                transition: all 0.3s ease;
                box-shadow: 0px 10px 20px rgba(202, 90, 152, 0.5);
                text-transform: uppercase;
                border-color: #ca5a98;
            }

            /* Social Card Css */

            .social-card {
                background: linear-gradient(135deg, #E8B2D0, white);
                border: none;
                border-radius: 1.5rem;
                padding: 2rem;
                box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s, box-shadow 0.3s;
                display: none;
            }

            .social-header h2 {
                color: #ca5a98;
                font-weight: bold;
            }

            .social-header p {
                color: #432c47;
                margin-top: 0.25rem;
            }

            .social-item {
                border-radius: 1rem;
                background-color: white;
                padding: 1.5rem;
                margin-top: 1rem;
                border: 2px solid #ca5a98;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .social-item img {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                object-fit: cover;
                margin-right: 1rem;
            }

            .social-item span {
                color: #ca5a98;
            }

            .btn-custom-primary {
                padding: 8px;
                background-color: #B20163;
                color: #f0f2f5;
                border-radius: 30px;
                transition: background 0.3s;
                border: none;
            }

            .btn-custom-primary:hover {
                background-color: #b94d84;
            }

            .btn-custom-secondary {
                border: 1px solid #B20163;
                color: #fff;
                cursor: pointer;
                font-weight: 500;
                padding: 10px 20px;
                background: #B20163;
                border-radius: 10px;
                margin: 0 5px;
            }

            .btn-custom-secondary:hover {
                background-color: #d199bb;
            }

            /* Social Card Css Ends Here */

            /* Payment Card Css starts Here*/

            .form-container_2 {
                background-color: #fff;
                border-radius: 20px;
                box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
                padding: 40px;
                max-width: 1250px;
                position: relative;
                display: none;
            }

            .step-header {
                background-color: #B20163;
                color: #fff;
                padding: 10px 20px;
                border-radius: 30px;
                font-weight: 600;
                text-align: center;
            }

            .btn-custom:hover {
                background: linear-gradient(45deg, #e8b2d0, #ca5a98);
            }

            .navigation-buttons {
                display: flex;
                justify-content: space-between;
                margin-top: 20px;
            }

            .step-indicator {
                position: absolute;
                top: -20px;
                left: 50%;
                transform: translateX(-50%);
                background-color: #fff;
                color: #ca5a98;
                border-radius: 50%;
                width: 40px;
                height: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: bold;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .toast {
                position: fixed;
                top: 20px;
                right: 20px;
                z-index: 9999;
                background-color: #ca5a98;
                color: white;
                padding: 15px;
                border-radius: 10px;
                display: none;
                animation: fadeInOut 3s forwards;
            }

            @keyframes fadeInOut {
                0% {
                    opacity: 0;
                    transform: translateY(-10px);
                }

                10%,
                90% {
                    opacity: 1;
                    transform: translateY(0);
                }

                100% {
                    opacity: 0;
                    transform: translateY(-10px);
                }
            }

            /* Button Checkbox Styling */
            .checkbox-button {
                position: relative;
                width: 18%;
                height: 40px;
                margin: 5px 0;
                background-color: #ffff;
                border: 2px solid transparent;
                border-radius: 30px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: 800;
                color: #B20163;
                cursor: pointer;
                transition: all 0.3s ease;
                box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            }

            .checkbox-button:hover {
                transform: translateY(-3px);
                box-shadow: 0 10px 20px rgba(202, 90, 152, 0.4);
            }

            /* Selected State */
            .checkbox-button.selected {
                background-color: #ca5a98;
                color: white;
                border-color: #b04a83;
            }

            /* Checkmark Icon Styling */
            .checkbox-button .checkmark {
                position: absolute;
                top: 8px;
                right: 8px;
                width: 20px;
                height: 20px;
                border-radius: 50%;
                background-color: #fff;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: background 0.3s;
                visibility: hidden;
            }

            .checkbox-button.selected .checkmark {
                visibility: visible;
                background-color: #b04a83;
            }

            .checkmark svg {
                width: 12px;
                height: 12px;
                fill: white;
            }
            /**************** Mobile Responsivness *******************/

            @media (max-width: 576px) {
                .form-container {
                    padding: 30px 15px;
                }
                .toast{
                    right: 0;
                }
                .form-container_2 {
                    width: 112%;
                    margin-left: -10px;
                    margin-top: 30px !important;
                }

                .step-header {
                    font-size: x-small;
                }

                .form-container h1 {
                    font-size: 1.5rem;
                    color: #B20163;
                }

                .avatar {
                    width: 100px;
                    height: 100px;
                }

                .form-control {
                    margin-bottom: 7px;
                    border-radius: 10px;
                    padding: 12px;
                }

                .form-group {
                    display: flex;
                    margin-bottom: 12px;
                    flex-direction: column;
                    margin-top: 5px;
                }

                .form-group .btn-change {
                    width: 100px !important;
                    background: #B20163;
                }

                .btn-change {
                    padding: 15px 20px;
                    font-weight: bold;
                }

                .gender-buttons .btn-primary {
                    border-color: #ca5a98;
                    background-color: #B20163;
                }

                .gender-buttons .btn {
                    width: 82% !important;
                    margin: 0 auto;
                    font-size: 0.7rem;
                }

                .gender-buttons .btn-outline-secondary {
                    font-size: 0.8rem;
                    width: 83% !important;
                }

                .submit-btn {
                    font-size: 0.5rem;
                }

                #whatsapp {
                    margin: 15px;
                }

                .d-flex {
                    flex-direction: column;
                }

                .form-group label {
                    font-weight: 900;
                    font-size: 0.8rem;
                }

                .text-light {
                    font-size: 0.8rem;
                }

                .user-info h2 {
                    font-size: 1.5rem;
                }

                .user-info p {
                    font-size: 0.8rem;
                }

                .img-fluid {
                    margin-top: 10px;
                }
                .checkbox-button {
                    width: 100% !important;
                    font-size: small;
                    margin: 5px 0;
                }

                .social-item {
                    flex-direction: column;
                    align-items: center;
                    width: 100%;
                }

                .social-card {
                    padding: 0.8rem;
                }

                .btn-group {
                    flex-direction: column;
                    border-radius: 7px;
                    gap: 5px;
                    margin-top: 24px;
                }
                .navigation-buttons {
                    flex-direction: column;
                    gap: 10px;
                }
            }
            @media (min-width: 577px) and (max-width: 768px) {
                .checkbox-button {
                    width: 154px !important;
                    font-size: 10px;
                    margin: 5px 0;
                }

                .social-card {
                    padding: 0.8rem;
                }

                .social-item {
                    flex-direction: row;
                    align-items: center;
                    width: 100%;
                }

                .social-item div {
                    margin-bottom: 1rem;
                }

                .btn-group {
                    display: flex;
                    flex-direction: column;
                    gap: 0.5rem;
                }

                .btn-group button {
                    width: 100%;
                    margin: 0;
                }

            }

            @media (min-width: 767px) and (max-width: 992px) {
                .checkbox-button {
                    margin: 5px 0;
                    width: 160px !important;
                    font-size: 13px;
                }
            }

            /**************** MObile Responsiveness Ends Here **************/
        </style>
    </head>

    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="container mb-3">
                <!-- Page Header Section -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col-md-9">
                            <h4 class="fw-semibold mb-2">Page Name</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="/minisidebar/index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Page Name</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-3 text-center">
                            <img src="../assets/images/breadcrumb/ChatBc.png" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <!-- Profile Card -->
                <div class="profile-card">
                    <div class="profile-header">
                        <div class="profile-image">
                            <img src="https://openui.fly.dev/openui/80x80.svg?text=👤" alt="User Profile Picture"
                                class="img-fluid" />
                        </div>
                        <div class="user-info">
                            <h2>Welcome{{ $user->name }}</h2>
                            <p>Your profile completion progress</p>
                            <!-- Progress Bar -->
                            <div class="progress-container">
                                <div class="progress-bar-wrapper">
                                    <div class="progress-bar" style="width: 18%;">
                                    </div>
                                </div>
                                <span class="progress-percentage">18%</span>
                            </div>
                        </div>
                    </div>
                    <!-- Social Insights Button -->
                    <a href="#" style="width: 100% !important" class="btn social-insight-btn w-100 mb-4">View Social
                        Insights</a>
                    <!-- About You Section -->
                    <div class="card-content">
                        <h6 class="mb-2">INCOMPLETE</h6>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>About You</span>
                            <span class="edit-link" id="editButton">EDIT</span>
                        </div>
                        <p class="mb-0"></p>
                        {{-- ---------------- Hiden Foam ------------------------------------- --}}
                        <div class="container form-container mt-3">
                            <!-- Header -->
                            <h1>About You</h1>
                            <!-- Avatar Section -->
                            <div class="avatar-container">
                                <div class="avatar">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zm6 14a6 6 0 00-6-6H8a6 6 0 00-6 6v1h20v-1z">
                                        </path>
                                    </svg>
                                    <div class="status-dot"></div>
                                </div>
                            </div>
                            <!-- Form Section -->
                            <form method="POST" action="{{route('admin.store.setting')}}">
                            @csrf
                                <!-- Name -->
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" class="form-control"
                                        placeholder="Enter your name" name="name" value="{{ $user->name }}" />
                                </div>
                                <!-- Primary Mobile Number (Disabled) -->
                                <div class="form-group">
                                    <label for="primary-mobile">Primary Mobile Number</label>
                                    <input type="text" id="primary-mobile" value="{{ $user->InfluencerDetail->phone ?? '' }}" class="form-control" value="+91 9118761726" name="phone" />
                                    <small class="text-light">This number is used for login and cannot be edited</small>
                                </div>
                                <!-- WhatsApp Number -->
                                <div class="form-group">
                                    <label for="whatsapp">WhatsApp Number</label>
                                    <div class="d-flex align-items-center">
                                        <input type="text" id="whatsapp" class="form-control me-3"
                                            value="+91 9118761726"  />
                                        <button type="button" class="btn btn-change">CHANGE</button>
                                    </div>
                                </div>
                                <!-- Opt-In Checkbox -->
                                <div class="form-check mb-4">
                                    <input type="checkbox" class="form-check-input" id="whatsapp-optin" checked />
                                    <label class="form-check-label text-light" for="whatsapp-optin">Opt-in for WhatsApp
                                        Communication</label>
                                </div>
                                <!-- Gender Selection -->
                                <div class="form-group gender-buttons d-flex gap-1">
                                    <input type="hidden" name="gender" id="gender-input" value="{{ $user->InfluencerDetail->gender }}">
                                    <div class="checkbox-button {{ $user->InfluencerDetail->gender == 'Male' ? 'selected' : '' }}" data-index="0" onclick="setGender('Male',this)">
                                        Male
                                        <div class="checkmark">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="checkbox-button {{ $user->InfluencerDetail->gender == 'Female' ? 'selected' : '' }}" data-index="1" onclick="setGender('Female',this)">
                                        Female
                                        <div class="checkmark">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="checkbox-button {{ $user->InfluencerDetail->gender == 'Other' ? 'selected' : '' }}" data-index="2" onclick="setGender('Other',this)">
                                        Other
                                        <div class="checkmark">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <!-- Date of Birth -->
                                <div class="form-group">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" id="dob" class="form-control" name="dob"  value="{{ $user->InfluencerDetail->dob ?? ''}}"/>
                                </div>
                                <!-- E-Mail -->
                                <div class="form-group">
                                    <label for="primary-mobile">E-Mail</label>
                                    <input type="text" id="E-Mail" class="form-control"
                                        placeholder="Enter Your E-mail" value="{{ $user->InfluencerDetail->email ?? ''}}" name="email" />
                                </div>
                                <!-- Location -->
                                <div class="form-group">
                                    <label for="primary-mobile">Location</label>
                                    <input type="text" id="E-Mail" class="form-control"
                                        placeholder="Enter Your E-mail" name="location"/>
                                </div>
                                <!-- Profile Type -->
                                <div class="form-group">
                                    <label for="primary-mobile">Profile Type</label>
                                    <div class="form-group gender-buttons d-flex gap-1">
                                        <div class="checkbox-button" data-index="0">
                                            Creator
                                            <div class="checkmark">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path
                                                        d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="checkbox-button" data-index="1">
                                            Buisness
                                            <div class="checkmark">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path
                                                        d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="checkbox-button" data-index="2">
                                            Theme Page
                                            <div class="checkmark">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path
                                                        d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="checkbox-button" data-index="2">
                                            Other
                                            <div class="checkmark">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path
                                                        d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Content Categories -->
                                    <div class="form-group">
                                        <label for="primary-mobile">Content Language</label>
                                        <div class="form-group gender-buttons d-flex flex-wrap gap-1">
                                            <div class="checkbox-button" data-index="0">
                                                Urdu
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="checkbox-button" data-index="1">
                                                Bengali
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="checkbox-button" data-index="2">
                                                Marathi
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="checkbox-button" data-index="2">
                                                Telgu
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="checkbox-button" data-index="2">
                                                Tamil
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="checkbox-button" data-index="2">
                                                Malaylam
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="checkbox-button" data-index="2">
                                                Gujrati
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="checkbox-button" data-index="2">
                                                Kannada
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="checkbox-button" data-index="2">
                                                Odia
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="checkbox-button" data-index="2">
                                                Punjabi
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="checkbox-button" data-index="2">
                                                Hindi
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Content Categories -->
                                    <div class="form-group">
                                        <label for="primary-mobile">Content Categories</label>
                                        <small class="text-light">This number is used for login and cannot be
                                            edited</small>
                                        <div class="form-group gender-buttons d-flex flex-wrap gap-1">
                                            <div class="checkbox-button" data-index="0">
                                                Meme
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="checkbox-button" data-index="0">
                                                Decor
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="checkbox-button" data-index="0">
                                                Wedding
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="checkbox-button" data-index="0">
                                                Buisness
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="checkbox-button" data-index="0">
                                                Automobile
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="checkbox-button" data-index="1">
                                                Education
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="checkbox-button" data-index="2">
                                                sports
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="checkbox-button" data-index="2">
                                                Books
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="checkbox-button" data-index="2">
                                                Parenting
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="checkbox-button" data-index="2">
                                                Self-Improvment
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="checkbox-button" data-index="2">
                                                Animal/pet
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="checkbox-button" data-index="2">
                                                Luxury
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="checkbox-button" data-index="2">
                                                Finance
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="checkbox-button" data-index="2">
                                                Gadgets & Tech
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="checkbox-button" data-index="2">
                                                Entertainment
                                                <div class="checkmark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M20.285 6.709a1 1 0 00-1.414-1.414L9 15.167l-3.871-3.871a1 1 0 00-1.414 1.414l4.578 4.578a1 1 0 001.414 0l10.578-10.578z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Save Button -->
                                    <button type="submit" class="submit-btn btn btn-primary mt-4">SAVE CHANGES</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Social Accounts Section -->
                    <div class="card-content">
                        <h6 class="mb-2">COMPLETE</h6>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Social Accounts</span>
                            <span class="edit-link" id="editButton_1">EDIT</span>
                        </div>
                        <p class="mb-0"></p>
                        <!-- Social Accounts Section Ends Here-->

                        <!-- Social Card Section -->
                        <div class="social-card mt-4">

                            <div class="social-header text-center mb-4">
                                <h2>Social Channels</h2>
                                <p>Link your social accounts to collaborate and grow</p>
                            </div>

                            <!-- Instagram Account Section -->
                            {{-- @foreach ( as )

                            @endforeach --}}
                            <div class="social-item">
                                <div class="d-flex align-items-center">
                                    <img src="https://placehold.co/40?text=📷" alt="Instagram" />
                                    <div>
                                        <span class="d-block font-weight-bold">@alihumdard.dev</span>
                                        <small class="text-muted">Followers: 8</small>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button class="btn-custom-secondary btn-sm">Edit</button>
                                    <button class="btn-custom-secondary btn-sm">Remove</button>
                                </div>
                            </div>

                            <!-- Link YouTube Button -->
                            <div class="mt-4">
                                <button class="btn-custom-primary btn-lg w-100">Link Instagram</button>
                            </div>
                        </div>
                        <div class="social-card mt-4">
                            <div class="social-header text-center mb-4">
                                <h2>Youtube Channels</h2>
                                <p>Link your social accounts to collaborate and grow</p>
                            </div>

                            <!-- Instagram Account Section -->
                            <div class="social-item">
                                <div class="d-flex align-items-center">
                                    <img src="https://placehold.co/40?text=📷" alt="Instagram" />
                                    <div>
                                        <span class="d-block font-weight-bold">@alihumdard.dev</span>
                                        <small class="text-muted">Followers: 8</small>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button class="btn-custom-secondary btn-sm">Edit</button>
                                    <button class="btn-custom-secondary btn-sm">Remove</button>
                                </div>
                            </div>

                            <!-- Link YouTube Button -->
                            <div class="mt-4">
                                <button class="btn-custom-primary btn-lg w-100">Link YouTube</button>
                            </div>
                        </div>
                        <!-- social card section Ends Here -->
                    </div>

                    <!-- Payments Section -->
                    <div class="card-content">
                        <h6 class="mb-2">INCOMPLETE</h6>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Payments</span>
                            <span class="edit-link" id="editButton_3">EDIT</span>
                        </div>

                        {{-- -------------------------- Pyament Section ------------------------------ --}}

                        <div class="form-container_2 mt-3">
                            <div class="step-indicator" id="step-indicator">1</div>

                            <!-- Step 1: ID Verification -->
                            <div id="step-1" class="step active">
                                <div class="step-header mb-4">STEP 01 - ID Verification</div>
                                <label for="aadhaar" class="form-label">Aadhar Card Number</label>
                                <input id="aadhaar" type="number" class="form-control"
                                    placeholder="Enter Aadhar Number" required />
                                <button class="btn-custom-primary w-100 mt-3">Get OTP</button>
                            </div>

                            <!-- Step 2: Pan Card Details -->
                            <div id="step-2" class="step d-none">
                                <div class="step-header mb-4">STEP 02 - Pan Card Details</div>
                                <p class="text-muted">Pan card details and Bank details sholud be of hte same person</p>
                                <div class="form-group">
                                    <label for="aadhaar" class="form-label">Pan Card Number</label>
                                    <input id="aadhaar" type="text" class="form-control"
                                        placeholder="Enter Pan Card Number" required />
                                </div>
                                <div class="form-group">
                                    <label for="aadhaar" class="form-label">Name On Pan Card</label>
                                    <input id="aadhaar" type="text" class="form-control"
                                        placeholder="Enter Name On Pan Card" required />
                                </div>
                                <div class="form-group">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" id="dob" class="form-control" required />
                                </div>
                                <button class="btn-custom-primary w-100 mt-3">Verify</button>
                            </div>

                            <!-- Step 3: Address Verification -->
                            <div id="step-3" class="step d-none">
                                <div class="step-header mb-4">STEP 03 - Address Verification</div>
                                <div class="form-group">
                                    <label for="Label" class="form-label">Label</label>
                                    <input id="Label" type="text" class="form-control" placeholder="ex:home"
                                        required />
                                </div>
                                <div class="form-group">
                                    <label for="Name" class="form-label">Name</label>
                                    <input id="Name" type="text" class="form-control" placeholder="Enter Name"
                                        required />
                                </div>
                                <div class="form-group">
                                    <label for="Phone Number" class="form-label">Phone Number</label>
                                    <input id="Phone Number" type="text" class="form-control"
                                        placeholder="Enter Phone Number" required />
                                </div>
                                <div class="form-group">
                                    <label for="Address Line 1" class="form-label">Address Line 1</label>
                                    <textarea id="Address Line 1" class="form-control" rows="4" placeholder="Enter Address Line 1" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="Address Line 2" class="form-label">Address Line 2</label>
                                    <textarea id="Address Line 2" class="form-control" rows="4" placeholder="Enter Address Line 2" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="Landmark" class="form-label">Landmark (Optional)</label>
                                    <input id="Landmark" type="text" class="form-control" placeholder="Enter City"
                                        required />
                                </div>
                                <div class="form-group">
                                    <label for="Pincode" class="form-label">Pincode</label>
                                    <input id="Pincode" type="text" class="form-control" placeholder="Enter City"
                                        required />
                                </div>
                                <div class="form-group">
                                    <label for="City" class="form-label">City</label>
                                    <input id="City" type="text" class="form-control" placeholder="Enter City"
                                        required />
                                </div>
                                <div class="form-group">
                                    <label for="State" class="form-label">State</label>
                                    <input id="State" type="text" class="form-control" placeholder="Enter State"
                                        required />
                                </div>
                            </div>
                            <!-- Navigation Buttons -->
                            <div class="navigation-buttons">
                                <button id="prev-btn" class="btn-custom-secondary px-4" disabled>Previous</button>
                                <button id="next-btn" class="btn-custom-secondary px-4">Next</button>
                            </div>
                        </div>

                        <!-- Toast Notification -->
                        <div class="toast" id="toast"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@pushOnce('scripts')
    <script>

        // Gender slection JS

        function setGender(gender, element) {
            // Update the hidden input value to the selected gender
            document.getElementById('gender-input').value = gender;

            // Remove 'selected' class from all buttons
            document.querySelectorAll('.checkbox-button').forEach(function(button) {
                button.classList.remove('selected');
            });

            setTimeout(() => {
                element.classList.add('selected');
            }, 200)
        }

        document.addEventListener('DOMContentLoaded', function() {
            const editButton = document.getElementById('editButton');
            const myForm = document.getElementsByClassName('form-container')[0];

            editButton.addEventListener('click', function() {
                if (myForm.style.display === 'none' || myForm.style.display === '') {
                    myForm.style.display = 'block';
                } else {
                    myForm.style.display = 'none';
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const editButton = document.getElementById('editButton_1'); // Select the edit button
            const socialCards = document.querySelectorAll('.social-card'); // Select both cards

            editButton.addEventListener('click', function() {
                socialCards.forEach(card => {
                    // Toggle each card's visibility
                    if (card.style.display === 'none' || card.style.display === '') {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });


        document.addEventListener('DOMContentLoaded', function() {
            const editButton = document.getElementById('editButton_3');
            const myForm = document.getElementsByClassName('form-container_2')[0];

            editButton.addEventListener('click', function() {
                if (myForm.style.display === 'none' || myForm.style.display === '') {
                    myForm.style.display = 'block';
                } else {
                    myForm.style.display = 'none';
                }
            });
        });

        // Multistep js

        const steps = document.querySelectorAll(".step");
        const stepIndicator = document.getElementById("step-indicator");
        const toast = document.getElementById("toast");

        let currentStep = 0;

        const nextBtn = document.getElementById("next-btn");
        const prevBtn = document.getElementById("prev-btn");

        function showStep(index) {
            steps.forEach((step, i) => {
                step.classList.toggle("d-none", i !== index);
            });
            stepIndicator.textContent = index + 1;
            prevBtn.disabled = index === 0;
            nextBtn.textContent = index === steps.length - 1 ? "Submit" : "Next";
        }

        function showToast(message) {
            toast.textContent = message;
            toast.style.display = "block";
            setTimeout(() => {
                toast.style.display = "none";
            }, 3000);
        }

        function validateStep() {
            const inputs = steps[currentStep].querySelectorAll("input[required]");
            for (const input of inputs) {
                if (!input.value.trim()) {
                    showToast("Please fill all required fields.");
                    return false;
                }
            }
            return true;
        }

        nextBtn.addEventListener("click", () => {
            if (currentStep < steps.length - 1) {
                if (validateStep()) {
                    currentStep++;
                    showStep(currentStep);
                    showToast("Your progress is saved. Moving to the next step.");
                }
            } else if (validateStep()) {
                showToast("Your data is saved. Returning to the first step.");
                currentStep = 0;
                showStep(currentStep);
            }
        });

        prevBtn.addEventListener("click", () => {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        });

        showStep(currentStep);

        const buttons = document.querySelectorAll('.checkbox-button');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                button.classList.toggle('selected');
            });
        });
    </script>
@endPushOnce
