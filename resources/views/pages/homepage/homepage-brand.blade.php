@extends('layouts.default')
@section('title', 'page name')
@section('content')
    <style>
        .card-wrapper {
            margin-top: 2rem;
            display: flex;
            flex-direction: column;
            gap: 2rem;
            /* Spacing between cards */
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

        .campaign-card {
            border: none;
            border-radius: 15px;
            background: #fff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 1250px;
        }

        .campaign-card .card-body h4 {
            color: #91225f;
            font-weight: bold;
        }

        .campaign-card .card-body p {
            color: #91225f;
        }

        .custom-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            background-color: #f7a3c8;
            cursor: pointer;
        }

        .custom-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.15);
            background: #ffd6e0;
        }

        .home-card {
            background-color: #f7a3c8;
            color: white;
        }

        .welcome-card {
            background-color: #ffd6e0;
            color: black;
        }

        .social-card {
            background-color: white;
            border: 1px solid #ddd;
        }

        .custom-card .card-body h4,
        .custom-card h5 {
            color: #91225f;
            font-weight: bold;
        }

        .custom-card .card-body p {
            font-size: 1rem;
            color: #91225f;
        }

        .btn-custom {
            background-color: #f7a3c8;
            color: white;
            border-radius: 8px;
            border: none;
            padding: 10px 20px;
        }

        .btn-custom:hover {
            background-color: #ffd6e0;
            color: black;
        }

        .card-link {
            font-weight: 700;
            color: #91225f;
            text-decoration: none;
        }

        .card-link:hover {
            text-decoration: underline;
        }

        .icon-card {
            font-size: 2rem;
            margin-right: 10px;
            color: #f7a3c8;
        }

        .row>.col-md-4 {
            margin-bottom: 20px;
            /* Ensure vertical spacing between columns */
        }
    </style>
    <div class="body-wrapper">
        <div class="container-fluid">
            <!-- Home Section -->
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

            <!-- Welcome Section as a Card -->
            <div class="card">
                <div class="container card-wrapper">
                    <div class="card custom-card welcome-card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h4>Welcome <span class="highlight">Qaiser Ali</span>,</h4>
                            </div>
                            <button class="btn-custom"><i class="fas fa-lock"></i> Upgrade Account</button>
                        </div>
                    </div>

                    <!-- Campaign Options Section -->
                    <div class="campaign-card">
                        <div class="card-body">
                            <h4 class="highlight mb-5">Unlock influence of your brand.</h4>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <h5>Find Relevant Influencers</h5>
                                            <p>Shortlist creators that reach and engage your target audience effectively.
                                            </p>
                                            <a href="#" class="card-link">Discover Influencers <i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <h5>Promote Your Brand</h5>
                                            <p>Reach your audience through micro & nano influencers with smart campaigns.
                                            </p>
                                            <a href="#" class="card-link">Create a Campaign <i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <h5>Track & Analyze Campaigns</h5>
                                            <p>Measure ROI and analyze content performance from each creator.</p>
                                            <a href="#" class="card-link">Generate Report <i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Identify Social Trends Section as a Card -->
                    <div class="campaign-card">
                        <div class="card-body">
                            <h4 class="highlight mb-3">Identify Social Trends</h4>
                            <p>Use a data-driven approach to create your next campaign strategy.</p>

                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <i class="fas fa-chart-line icon-card"></i>
                                                <h5>Topic Research</h5>
                                            </div>
                                            <p>Generate detailed reports on content, creators, and consumers for any topic
                                                or
                                                keyword.
                                            </p>
                                            <a href="#" class="card-link">Generate Report <i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <i class="fas fa-user icon-card"></i>
                                                <h5>Account Tracking</h5>
                                            </div>
                                            <p>Track your own or competitor accounts to compare performance effectively.</p>
                                            <a href="#" class="card-link">Track Accounts <i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <i class="fas fa-search icon-card"></i>
                                                <h5>Genre Insights</h5>
                                            </div>
                                            <p>Analyze trends across 45+ categories and gain deep consumer insights.</p>
                                            <a href="#" class="card-link">Get Insights <i
                                                    class="fas fa-arrow-right"></i></a>
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
    <script></script>
@endPushOnce
