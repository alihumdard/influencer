<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link
        rel="shortcut icon"
        type="image/png"
        href="/assets/images/logos/favicon.png" />

    <!-- Core Css -->
    <link rel="stylesheet" href="/assets/css/styles.css" />
    <link rel="stylesheet" href="/assets/css/custom.css" />

    <title>Link Youtube</title>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div id="main-wrapper">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100">
            <div class="position-relative z-index-5">
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-xxl-6">
                        <a href="/minisidebar/index.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                            <img src="assets/images/logos/dark-logo.svg" class="dark-logo" alt="Logo-Dark" />
                            <img src="assets/images/logos/light-logo.svg" class="light-logo" alt="Logo-light" />
                        </a>
                        <!-- Ensure image visibility on smaller screens -->
                        <div class="d-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
                            <img src="/assets/images/backgrounds/Social-tree-cuate.png" alt="" class="img-fluid" width="100%" style="max-width: 500px;">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-xxl-6">
                        <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100 text-white" style="background-color: rgb(178, 1, 99)">
                            <div class="d-flex align-items-center w-100 h-100">
                                <div class="card-body">
                                    <div class="mb-5">
                                        <h2 class="fw-bolder fs-7 mb-1 text-white">Link Your Youtube Accounts</h2>
                                        <p class="mb-0">
                                            Connect your Youtube accounts to streamline your experience and manage everything from one place. This will help us ensure seamless integration across all platforms.
                                        </p>
                                    </div>
                                    <!-- Search Form -->
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="youtubesearch" class="form-label text-white">Search By Channel Name</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                <input type="text" class="form-control custom-input" placeholder="Channel Name" aria-label="Channel Name" aria-describedby="basic-addon1" id="youtubesearch">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <a href="javascript:void(0)" class="btn fw-bold w-100 py-8 mb-3 bg-white text-dark" onclick="searchYouTubeChannel()">Search Now</a>
                                            <a href="javascript:void(0)" class="btn fw-bold w-100 py-8 mb-3 bg-dark fw-bold text-white" data-bs-toggle="modal" data-bs-target="#instruction-youtube-modal">Watch Instruction</a>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <p class="mb-0">
                                            Please provide the email address associated with your account, and we will send you a link to access and review the updated Agreement & Conditions.
                                            <a class="btn btn-link fw-bold text-white" href="#">View Details</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="dark-transparent sidebartoggler"></div>
    <!-- Import Js Files -->

    <!-- Instruction Modal -->
    <div id="instruction-youtube-modal" class="modal fade" tabindex="-1"
        aria-labelledby="danger-header-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header modal-colored-header text-white text-center" style="background-color: rgb(178, 1, 99)">
                    <h4 class="modal-title text-white" style="text-align: center !important;" id="danger-header-modalLabel">
                        How to connet Instagram ?
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="mt-0">Instructions</h5>

                    <!-- Instructional Video -->
                    <div class="video-container mb-3">
                        <video id="instructionVideo" controls width="100%" height="auto">
                            <source src="path_to_your_video.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <!-- Optional text after the video -->
                    <p>
                        Follow the instructions in the video to verify your account and link your social media accounts with our system.
                    </p>

                    <p>
                        If you have any questions, feel free to contact our support team for further assistance.
                    </p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn bg-danger-subtle text-danger font-medium">
                        Save changes
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Modal to Display YouTube Channel Search Results -->
    <div id="add-youtube-modal" class="modal fade" tabindex="-1" aria-labelledby="danger-header-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header modal-colored-header text-white text-center" style="background-color: rgb(178, 1, 99)">
                    <h4 class="modal-title text-white" style="text-align: center !important;" id="danger-header-modalLabel">
                        Is that your YouTube Channel?
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="mt-0 text-center">Select You'r Own channel</h5>

                    <!-- YouTube Channel List Section (instead of iframe) -->
                    <div class="container mb-3">
                        <ul id="youtube-channel-list" class="list-group"></ul> <!-- Channel List Will Appear Here -->
                    </div>

                    <!-- Form Section -->
                    <form action="{{route('generate.social.otp') }}" method="POST" class="text-center">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" autocomplete="off">
                        <input type="hidden" name="platform" id="social_ac" value="youtube">
                        <input type="hidden" name="username" id="hidden-username" value="">

                        <!-- Button Section -->
                        <div class="d-flex justify-content-center align-items-center gap-3 mt-5">
                            <button type="button" id="can't_find" class="btn btn-lg btn-dark" style="width: 200px" onclick="showHiddenForm()"><b>Can't Find Account</b></button>
                            <button type="submit" class="btn btn-lg text-light" style="background-color: var(--bs-pink); width: 200px;" disabled><b>Yes It's My</b></button>
                        </div>
                    </form>

                    <!-- Form Section -->
                    <form action="{{route('generate.social.otp') }}" method="POST" class="text-cente" style="display: none;" id="youtube-hidden-form">
                        @csrf 
                        <input type="hidden" name="platform" id="social_ac" value="youtube">
                        <input type="hidden" name="username" id="hidden-username2" value="">
                        <div class="mb-3">
                            <h5 for="youtube_link" class="form-label text-dark " style="text-align: left;">Paste You'r Channel Link</h5>
                            <input type="text" class="form-control custom-input" name="profile_url" id="youtube_link" aria-describedby="url" pattern="https?://(www\.)?youtube\.com/.*" title="Please enter a valid YouTube URL.">
                            <div class="invalid-feedback">Please enter a valid YouTube URL.</div>
                        </div>
                        <!-- Button Section -->
                        <div class="d-flex justify-content-center align-items-center gap-3">
                            <button type="submit" class="btn btn-lg text-light" style="background-color: var(--bs-pink); width: 200px;"><b>Next</b></button>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->


    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/assets/js/app.min.js"></script>
    <script src="/assets/js/app.minisidebar.init.js"></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/simplebar/dist/simplebar.min.js"></script>

    <script src="/assets/js/sidebarmenu.js"></script>
    <script src="/assets/js/theme.js"></script>

    <script>
        function selectChannel(channelId, channelTitle, button) {
            const selectedButtons = document.querySelectorAll('#youtube-channel-list .btn-success');
            selectedButtons.forEach(btn => {
                btn.classList.remove('btn-success');
                btn.classList.add('btn-primary');
                btn.textContent = "Select";
                btn.disabled = false;
            });

            button.classList.remove('btn-primary');
            button.classList.add('btn-success');
            button.textContent = "Selected";
            button.disabled = true;
            document.getElementById('hidden-username').value = document.getElementById('youtubesearch').value;
            document.getElementById('social_ac').value = "youtube";
            const submitButton = document.querySelector('form button[type="submit"]');
            submitButton.disabled = false;
        }

        async function searchYouTubeChannel() {
            const apiKey = 'AIzaSyD8Ne7UFbEe5l_M0d6abLdKamSpJ2e8uPk';
            const channelName = document.getElementById('youtubesearch').value;

            if (!channelName) {
                alert("Please enter a channel name.");
                return;
            }

            const apiUrl = `https://www.googleapis.com/youtube/v3/search?part=snippet&type=channel&q=${channelName}&key=${apiKey}`;

            try {
                const response = await fetch(apiUrl);
                const data = await response.json();

                if (data.items && data.items.length > 0) {
                    const channelList = document.getElementById('youtube-channel-list');
                    channelList.innerHTML = '';
                    data.items.forEach(channel => {
                        const channelId = channel.id.channelId;
                        const channelTitle = channel.snippet.title;
                        const channelThumbnail = channel.snippet.thumbnails.default.url;

                        const listItem = document.createElement('li');
                        listItem.classList.add('list-group-item', 'd-flex', 'align-items-center');
                        listItem.innerHTML = `
                                                <img src="${channelThumbnail}" alt="${channelTitle}" class="me-3" style="width: 50px; height: 50px;">
                                                <div class="flex-grow-1">
                                                    <strong>${channelTitle}</strong><br>
                                                    <small>Channel ID: ${channelId}</small>
                                                </div>
                                                <button class="btn btn-primary ms-3" onclick="selectChannel('${channelId}', '${channelTitle}', this)">Select</button>
                                            `;
                        channelList.appendChild(listItem);
                    });

                    var modal = new bootstrap.Modal(document.getElementById('add-youtube-modal'));
                    modal.show();
                } else {
                    alert("No channels found with this name.");
                }
            } catch (error) {
                console.error("Error fetching YouTube channels:", error);
            }
        }

        function showHiddenForm() {
            document.getElementById('hidden-username2').value = document.getElementById('youtubesearch').value;
            document.getElementById('youtube-hidden-form').style.display = 'block';
        }
    </script>
</body>

</html>