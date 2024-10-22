<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Brand Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />

    <style>
        body {
            font-family: "Poppins", sans-serif;
            background-color: #f3f3f5;
            margin: 0;
            overflow-x: hidden;
        }

        /* Logo Section */
        .logo-section {
            margin-top: 30px;
            margin-bottom: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .logo-container {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .logo-container img {
            width: 70%;
            border-radius: 50%;
        }

        .logo-text {
            margin-top: 10px;
            font-size: 22px;
            font-weight: bold;
            color: white;
        }

        /* Sidebar Styling */
        .sidebar {
            background-color: #ca5a98;
            width: 280px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            transition: all 0.3s ease;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar.hidden {
            transform: translateX(-100%);
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 15px 20px;
            display: block;
            font-size: 16px;
            transition: background 0.3s ease;
        }

        .sidebar .text-white {
            font-size: 18px;
            font-weight: 900;
        }

        .sidebar a:hover {
            background-color: #e380ad;
            border-radius: 10px;
        }

        .text-white {
            font-size: 18px;
            font-weight: 900;
        }

        /* Header Styling */
        .header {
            background-color: #e8b2d0;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: fixed;
            top: 0;
            left: 280px;
            width: calc(100% - 280px);
            transition: width 0.3s ease, left 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            z-index: 10;
        }

        .header.hidden {
            width: 100%;
            left: 0;
        }

        .header input {
            width: 400px;
            border-radius: 30px;
            border: none;
            padding: 10px 20px;
            background-color: white;
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Profile Section */
        .profile-section {
            background-color: white;
            margin-top: 90px;
            margin-left: 290px;
            padding: 30px;
            display: flex;
            align-items: center;
            gap: 20px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            transition: margin-left 0.3s ease;
            margin-right: 10px;
        }

        .profile-section.hidden {
            margin-left: 15px;
            margin-right: 15px;
        }

        .profile-section img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 3px solid #ca5a98;
        }

        .profile-info h5 {
            font-size: 24px;
            color: #ca5a98;
            margin: 0;
        }

        .profile-info p {
            margin: 5px 0;
            color: #6c757d;
        }

        /* Content Styling */
        .content {
            margin-top: 20px;
            margin-left: 290px;
            transition: margin-left 0.3s ease;
            margin-right: 10px;
            max-width: 1136px;
            margin-bottom: 20px;
        }

        .content.hidden {
            width: 100% !important;
            margin-left: 15px;
        }

        .content h1 {
            font-size: 32px;
            color: #ca5a98;
            margin-bottom: 20px;
        }

        /* Card Styling */
        .card {
            background-color: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        /* Redesigned Card Styling */
        .card {
            border: none;
            border-radius: 20px;
            background: linear-gradient(145deg, #ffd6e0, #f7a3c8);
            padding: 30px;
            color: #333;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .card::before {
            content: "";
            position: absolute;
            top: -50px;
            right: -50px;
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            z-index: 0;
        }

        .card h5 {
            font-size: 24px;
            color: #ca5a98;
            margin-bottom: 15px;
            position: relative;
            z-index: 1;
        }

        .card p {
            font-size: 16px;
            color: #555;
            margin-bottom: 10px;
            position: relative;
            z-index: 1;
        }

        .btn-primary {
            background-color: #ca5a98;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            transition: background-color 0.3s ease;
            position: relative;
            z-index: 1;
        }

        .btn-primary:hover {
            background-color: #e8b2d0;
        }

        .nav-link {
            color: #333;
        }

        /* Custom Subscription Plan Cards */
        .subscription-plan {
            border: 2px solid #ca5a98;
            border-radius: 15px;
            padding: 25px;
            background: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .subscription-plan:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .subscription-plan h5 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #ca5a98;
        }

        .subscription-plan button {
            background-color: #ca5a98;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
        }

        .subscription-plan button:hover {
            background-color: #e8b2d0;
        }

        /* Toggle Button */
        .toggle-btn {
            background-color: #ca5a98;
            border: none;
            padding: 10px 15px;
            border-radius: 50%;
            color: white;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="sidebar" id="sidebar">
        <div class="logo-section">
            <div class="logo-container">
                <img src="https://via.placeholder.com/100" alt="Logo" />
            </div>
            <div class="logo-text">My Brand</div>
        </div>
        <div class="text-white">
            <a href="#"><i class="fas fa-home text-white"></i> Home</a>
        </div>
        <a href="#"><i class="fas fa-search"></i> Creator Discovery</a>
        <a href="#"><i class="fas fa-folder"></i> Collections</a>
        <h6 class="px-4 mt-4 text-white">Analytical Tools</h6>
        <a href="#"><i class="fas fa-chart-line"></i> Account Tracking</a>
        <h6 class="px-4 mt-4 text-white">Campaign Tools</h6>
        <a href="#"><i class="fas fa-bullhorn"></i> Smart Campaigns</a>
        <a href="#"><i class="fas fa-file-alt"></i> Campaign Report</a>
    </div>

    <div class="header" id="header">
        <button class="toggle-btn" id="toggleButton">
            <i class="fas fa-bars"></i>
        </button>
        <input type="text" placeholder="🔍 Analyze any Influencer..." />
    </div>

    <div class="profile-section" id="profileSection">
        <img src="https://via.placeholder.com/100" alt="User Avatar" />
        <div class="profile-info">
            <h5>Qaiser Ali</h5>
            <p>Full Stack Developer at Tech</p>
            <p>Email: qal79614@gmail.com</p>
        </div>
    </div>

    <div class="content" id="content">
        <h1>My Profile</h1>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">Account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Team</a>
            </li>
        </ul>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <h5>Account Details</h5>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" value="Qaiser Ali" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" value="qal79614@gmail.com" />
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" value="(+91) 4567892341" />
                        </div>
                        <div class="mb-3">
                            <label for="company" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="company" value="Tech" />
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="subscription-plan text-center">
                    <h5>Subscription</h5>
                    <p>Current Plan: Free Plan</p>
                    <button data-bs-toggle="modal" data-bs-target="#subscriptionModal">
                        Upgrade Subscription
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="subscriptionModal" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Choose Your Subscription Plan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="subscription-plan">
                                                <h5>Basic Plan</h5>
                                                <p>$9.99/month</p>
                                                <button>Select</button>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="subscription-plan">
                                                <h5>Pro Plan</h5>
                                                <p>$19.99/month</p>
                                                <button>Select</button>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="subscription-plan">
                                                <h5>Premium Plan</h5>
                                                <p>$29.99/month</p>
                                                <button>Select</button>
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
    </div>
    <script>
        const sidebar = document.getElementById("sidebar");
        const toggleButton = document.getElementById("toggleButton");
        const profileSection = document.getElementById("profileSection");
        const content = document.getElementById("content");
        const header = document.getElementById("header");

        toggleButton.addEventListener("click", () => {
            sidebar.classList.toggle("hidden");
            profileSection.classList.toggle("hidden");
            content.classList.toggle("hidden");
            header.classList.toggle("hidden");
        });
    </script>
</body>

</html>
