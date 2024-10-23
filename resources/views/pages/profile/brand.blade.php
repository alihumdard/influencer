@extends('layouts.default')
@section('title', 'My Profile')

@section('content')
    <style>
        /*************************************** Profile Section *********************************************************/
        .profile-section {
            background-color: white;
            margin-top: 20px;
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 20px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
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

        /* Content Section */
        .content {
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .content h1 {
            font-size: 28px;
            color: #ca5a98;
            margin-bottom: 20px;
        }

        /**************************************************8**** Card Styling *********************************************/
        .card {
            border: none;
            border-radius: 15px;
            background: linear-gradient(135deg, #ca5a98, #E8B2D0);
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        /************************************ Custom Navigation Tabs *****************************************************/
        .custom-nav-tabs {
            margin-top: 20px;
            background-color: #f8f9fa;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;

        }
        .nav-tabs {
            background: #ffd6e0;
            display: flex;
            justify-content: space-around;
        }
        .nav-item {
            flex-grow: 1;
        }

        .nav-link {
            border-radius: 0;
            padding: 15px 20px;
            text-align: center;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s, transform 0.3s;
            cursor: pointer;
        }

        .active-tab {
            background-color: #ca5a98 !important;
            color: white !important;
        }

        /* Hide inactive sections */
        .hidden {
            display: none;
        }

        /* Active Tab Style */
        .nav-link.active {
            background-color: #ca5a98 !important;
            color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }
        .nav-link:not(.active) {
            color: #6c757d;
        }

        .nav-link:hover {
            background-color: rgba(202, 90, 152, 0.1);

            color: #ca5a98;

        }

        /**************************** Custom Account Information Card *****************************************************/
        .account-info-card {
            background: linear-gradient(145deg, #ffd6e0, #f7a3c8);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .account-info-card::before {
            content: "";
            position: absolute;
            top: -20%;
            left: -20%;
            width: 140%;
            height: 140%;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            z-index: 0;
            transform: rotate(30deg);
        }

        .account-info-card h5 {
            font-size: 24px;
            color: #2d3e50;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;

        }

        .account-info-card input {
            background-color: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 15px;
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;

        }

        .account-info-card input:focus {
            outline: none;
            box-shadow: 0 0 0 2px #ca5a98;
            background-color: white;
        }

        .account-info-card .form-label {
            color: #6c757d;
            font-weight: bold;
            z-index: 1;

        }

        /******************************** Custom Subscription Plan Cards *************************************************/
        .subscription-plan {
            border: 2px solid #ca5a98;
            border-radius: 15px;
            padding: 25px;
            background: linear-gradient(135deg, #ffe6f0, #f9d6e4);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: center;
        }

        .subscription-plan h5 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #ca5a98;
        }

        .subscription-plan p {
            margin: 10px 0;
            font-size: 16px;
            color: #6c757d;
        }

        .subscription-plan button {
            background-color: #ca5a98;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .subscription-plan button:hover {
            background-color: #e8b2d0;
        }

        .form-control {
            background: #fff;
        }

        /******************************************** team section ******************************************************/
        .team-card {
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
        }

        .team-card-header {
            background: linear-gradient(145deg, #ffd6e0, #f7a3c8);
            color: #2d3e50;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            padding: 15px;
            font-weight: 600;
        }

        .team-card-body {
            padding: 20px;
        }

        .invite-section {
            margin-bottom: 30px;
            text-align: center;
        }

        .invite-section h5 {
            font-weight: 600;
            color: #2c3e50;
        }

        .invite-section p {
            color: #7f8c8d;
            margin-bottom: 20px;
        }

        .invite-section .form-control {
            display: inline-block;
            width: 300px;
            vertical-align: middle;
            margin-right: 10px;
            border-radius: 20px;
            border: 1px solid #bdc3c7;
            padding: 10px 15px;
        }

        .invite-section .btn {
            background-color: #ca5a98;
            color: white;
            vertical-align: middle;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            font-weight: 600;
        }

        .invite-section .btn:hover {
            background-color: #f7a3c8;
        }

        .table-section {
            background: linear-gradient(145deg, #ffd6e0, #f7a3c8);
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #bdc3c7;
        }

        .table-section th {
            font-weight: 600;
            color: #2c3e50;
            text-align: center;
        }

        .table-section td {
            color: #7f8c8d;
            text-align: center;
        }

        .table-section td[colspan="2"] {
            padding: 20px;
            background-color: #ecf0f1;
            border: 1px solid #bdc3c7;
            border-radius: 10px;
        }
    </style>

    <div class="body-wrapper">
        <div class="container-fluid">
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
                <div class="container-fluid">
                    <!-- Profile Section -->
                    <div class="profile-section">
                        <img src="https://via.placeholder.com/100" alt="User Avatar" />
                        <div class="profile-info">
                            <h5>Qaiser Ali</h5>
                            <p>Full Stack Developer at Tech</p>
                            <p>Email: qal79614@gmail.com</p>
                        </div>
                    </div>

                    <!-- Content Section with Dynamic Tabs -->
                    <div class="content mt-4">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active-tab" id="accountTab">Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="teamTab">Team</a>
                            </li>
                        </ul>

                        <!-- Account Section -->
                        <div id="accountSection">
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="account-info-card">
                                        <h5>Account Details</h5>
                                        <form>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="name"
                                                    value="Qaiser Ali" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email"
                                                    value="qal79614@gmail.com" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Phone Number</label>
                                                <input type="tel" class="form-control" id="phone"
                                                    value="(+91) 4567892341" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="company" class="form-label">Company Name</label>
                                                <input type="text" class="form-control" id="company" value="Tech" />
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="subscription-plan">
                                        <h5>Subscription</h5>
                                        <p>Current Plan: Free Plan</p>
                                        <button data-bs-toggle="modal" data-bs-target="#subscriptionModal">
                                            Upgrade Subscription
                                        </button>

                                        <!-- Subscription Modal -->
                                        <div class="modal fade" id="subscriptionModal" tabindex="-1">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Choose Your Subscription Plan</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
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

                        <!-- Team Section (Initially Hidden) -->
                        <div id="teamSection" class="hidden">
                            <div class="row">
                                <div class="col">
                                    <div class="team-card">
                                        <div class="team-card-header">Invite new team members</div>
                                        <div class="team-card-body">
                                            <div class="invite-section">
                                                <h5>Invite new team members</h5>
                                                <p>Invite new members or simply share the invite link</p>
                                                <input type="email" class="form-control" placeholder="Email">
                                                <button class="btn">Send Invite</button>
                                            </div>
                                            <div class="table-section">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="2">No user available</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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

@stop

@pushOnce('scripts')
    <script>
        const accountTab = document.getElementById('accountTab');
        const teamTab = document.getElementById('teamTab');
        const accountSection = document.getElementById('accountSection');
        const teamSection = document.getElementById('teamSection');

        // Function to switch between tabs
        function switchTab(activeTab, inactiveTab, showSection, hideSection) {
            activeTab.classList.add('active-tab');
            inactiveTab.classList.remove('active-tab');
            showSection.classList.remove('hidden');
            hideSection.classList.add('hidden');
        }

        // Event Listeners for Tab Clicks
        accountTab.addEventListener('click', () => {
            switchTab(accountTab, teamTab, accountSection, teamSection);
        });

        teamTab.addEventListener('click', () => {
            switchTab(teamTab, accountTab, teamSection, accountSection);
        });
    </script>
@endPushOnce
