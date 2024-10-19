@extends('layouts.default')
@section('title', 'Page Name')
@section('content')

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
            background: linear-gradient(135deg, #e8b2d0, #ca5a98);
            border-radius: 20px;
            padding: 50px;
            max-width: 1250px;
            margin: 60px auto;
            box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease-in-out;
            display: none;
        }

        /* Header Styling */
        .form-container h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #fff;
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
            background-color: #fff;
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
            margin-bottom: 30px;
        }

        .form-group label {
            font-size: 1.2rem;
            color: #fff;
            margin-bottom: 10px;
            display: block;
        }

        .form-group .btn-change {
            width: 100px !important;
            background: #B20163;
        }

        /* Input Fields */
        .form-control {
            border-radius: 10px;
            padding: 15px;
            border: none;
            background-color: #fff;
            color: #333;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .form-control:focus {
            box-shadow: 0px 30px 30px rgba(202, 90, 152, 0.4);
            outline: none;
            border: 1px solid #ca5a98;
            color: #fff;
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

        .form-check-input:checked {
            background-color: #ca5a98;
            border-color: #ca5a98;
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

        .capsule {
            width: 15% !important;
            height: 40px;
            font-size: small;
            margin: 5px 5px;
            background: #fff;
            color: #B20163;
            border-color: #ca5a98;
            box-shadow: 0px 10px 20px rgba(202, 90, 152, 0.5);
            border-radius: 20px;
            padding: 6px;
            border: none;
            font-weight: 900;
        }

        .capsule:hover {
            background-color: #b04a83;
            color: #fff;
            transition: 0.3s all ease;
        }

        #myForm {
            display: none;
        }
    </style>
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
                            <h2>Welcome, User</h2>
                            <p>Your profile completion progress</p>

                            <!-- Progress Bar -->
                            <div class="progress-container">
                                <div class="progress-bar-wrapper">
                                    <div class="progress-bar" style="width: 18%;"></div>
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
                        <p class="mb-0">Phone: 9118761726</p>

                        {{-- ---------------- Hiden Foam ------------------------------------- --}}
                        <div class="container form-container">
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
                            <form>
                                <!-- Name -->
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" class="form-control"
                                        placeholder="Enter your name" />
                                </div>

                                <!-- Primary Mobile Number (Disabled) -->
                                <div class="form-group">
                                    <label for="primary-mobile">Primary Mobile Number</label>
                                    <input type="text" id="primary-mobile" class="form-control" value="+91 9118761726" />
                                    <small class="text-light">This number is used for login and cannot be edited</small>
                                </div>

                                <!-- WhatsApp Number -->
                                <div class="form-group">
                                    <label for="whatsapp">WhatsApp Number</label>
                                    <div class="d-flex align-items-center">
                                        <input type="text" id="whatsapp" class="form-control me-3"
                                            value="+91 9118761726" />
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
                                <div class="form-group gender-buttons d-flex justify-content-between">
                                    <button type="button" class="btn btn-primary">Male</button>
                                    <button type="button" class="btn btn-outline-secondary">Female</button>
                                    <button type="button" class="btn btn-outline-secondary">Other</button>
                                </div>

                                <!-- Date of Birth -->
                                <div class="form-group">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" id="dob" class="form-control" />
                                </div>

                                <!-- E-Mail -->
                                <div class="form-group">
                                    <label for="primary-mobile">E-Mail</label>
                                    <input type="text" id="E-Mail" class="form-control"
                                        placeholder="Enter Your E-mail" />
                                </div>

                                <!-- Location -->
                                <div class="form-group">
                                    <label for="primary-mobile">Location</label>
                                    <input type="text" id="E-Mail" class="form-control"
                                        placeholder="Enter Your E-mail" />
                                </div>

                                <!-- Profile Type -->
                                <div class="form-group">
                                    <label for="primary-mobile">Profile Type</label>
                                    <div class="form-group gender-buttons d-flex flex-wrap gap-1">
                                        <button type="button" class="capsule">Creator</button>
                                        <button type="button" class="capsule">Buisness</button>
                                        <button type="button" class="capsule">Theme Page</button>
                                        <button type="button" class="capsule">Other</button>
                                    </div>
                                </div>

                                <!-- Content Categories -->
                                <div class="form-group">
                                    <label for="primary-mobile">Content Language</label>
                                    <div class="form-group gender-buttons d-flex flex-wrap">
                                        <button type="button" class="capsule">English</button>
                                        <button type="button" class="capsule">Urdu</button>
                                        <button type="button" class="capsule">Bengali</button>
                                        <button type="button" class="capsule">Marathi</button>
                                        <button type="button" class="capsule">Telgu</button>
                                        <button type="button" class="capsule">Tamil</button>
                                        <button type="button" class="capsule">Malaylam</button>
                                        <button type="button" class="capsule">Gujrati</button>
                                        <button type="button" class="capsule">Kannada</button>
                                        <button type="button" class="capsule">Odia</button>
                                        <button type="button" class="capsule">Punjabi</button>
                                        <button type="button" class="capsule">Hindi</button>
                                    </div>
                                </div>

                                <!-- Content Categories -->
                                <div class="form-group">
                                    <label for="primary-mobile">Content Categories</label>
                                    <small class="text-light">This number is used for login and cannot be edited</small>
                                    <div class="form-group gender-buttons d-flex flex-wrap">
                                        <button type="button" class="capsule">Comedy</button>
                                        <button type="button" class="capsule">Meme</button>
                                        <button type="button" class="capsule">Decor</button>
                                        <button type="button" class="capsule">Wedding</button>
                                        <button type="button" class="capsule">Buisness</button>
                                        <button type="button" class="capsule">Automobile</button>
                                        <button type="button" class="capsule">Education</button>
                                        <button type="button" class="capsule">sports</button>
                                        <button type="button" class="capsule">Books</button>
                                        <button type="button" class="capsule">Parenting</button>
                                        <button type="button" class="capsule">Self-Improvment</button>
                                        <button type="button" class="capsule">Animal/pet</button>
                                        <button type="button" class="capsule">Luxury</button>
                                        <button type="button" class="capsule">Finance</button>
                                        <button type="button" class="capsule">Gadgets & Tech</button>
                                        <button type="button" class="capsule">Entertainment</button>
                                    </div>
                                </div>

                                <!-- Save Button -->
                                <button type="submit" class="submit-btn btn btn-primary mt-4">SAVE CHANGES</button>
                            </form>
                        </div>

                    </div>

                    <!-- Social Accounts Section -->
                    <div class="card-content">
                        <h6 class="mb-2">COMPLETE</h6>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Social Accounts</span>
                            <span class="edit-link">EDIT</span>
                        </div>
                        <p class="mb-0">Instagram: alihumdard.dev</p>
                    </div>

                    <!-- Payments Section -->
                    <div class="card-content">
                        <h6 class="mb-2">INCOMPLETE</h6>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Payments</span>
                            <span class="edit-link">EDIT</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@pushOnce('scripts')
    <script>
        // Ensure the DOM is fully loaded before accessing elements
        document.addEventListener('DOMContentLoaded', function() {
            const editButton = document.getElementById('editButton');
            const myForm = document.getElementsByClassName('form-container')[0]; // Access the first element

            // Toggle the form visibility on button click
            editButton.addEventListener('click', function() {
                if (myForm.style.display === 'none' || myForm.style.display === '') {
                    myForm.style.display = 'block'; // Show form
                } else {
                    myForm.style.display = 'none'; // Hide form
                }
            });
        });
    </script>
@endPushOnce
