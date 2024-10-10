@extends('layouts.default')
@section('title', 'Dashboard')
@section('content')
<div class="page-wrapper">

    <aside class="left-sidebar with-horizontal">
        <!-- Sidebar scroll-->
        <div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar container-fluid">
                <ul id="sidebarnav">
                    <!-- ============================= -->
                    <!-- Home -->
                    <!-- ============================= -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Home</span>
                    </li>
                    <!-- =================== -->
                    <!-- Dashboard -->
                    <!-- =================== -->
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <span>
                                <i class="ti ti-home-2"></i>
                            </span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../minisidebar/index.html" class="sidebar-link">
                                    <i class="ti ti-aperture"></i>
                                    <span class="hide-menu">Modern</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/index2.html" class="sidebar-link">
                                    <i class="ti ti-shopping-cart"></i>
                                    <span class="hide-menu">eCommerce</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/index3.html" class="sidebar-link">
                                    <i class="ti ti-currency-dollar"></i>
                                    <span class="hide-menu">NFT</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/index4.html" class="sidebar-link">
                                    <i class="ti ti-cpu"></i>
                                    <span class="hide-menu">Crypto</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/index5.html" class="sidebar-link">
                                    <i class="ti ti-activity-heartbeat"></i>
                                    <span class="hide-menu">General</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/index6.html" class="sidebar-link">
                                    <i class="ti ti-playlist"></i>
                                    <span class="hide-menu">Music</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- ============================= -->
                    <!-- Apps -->
                    <!-- ============================= -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Apps</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <span>
                                <i class="ti ti-archive"></i>
                            </span>
                            <span class="hide-menu">Apps</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../minisidebar/app-calendar.html" class="sidebar-link">
                                    <i class="ti ti-calendar"></i>
                                    <span class="hide-menu">Calendar</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/apps-kanban.html" class="sidebar-link">
                                    <i class="ti ti-layout-kanban"></i>
                                    <span class="hide-menu">Kanban</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/app-chat.html" class="sidebar-link">
                                    <i class="ti ti-message-dots"></i>
                                    <span class="hide-menu">Chat</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="../minisidebar/app-email.html" aria-expanded="false">
                                    <span>
                                        <i class="ti ti-mail"></i>
                                    </span>
                                    <span class="hide-menu">Email</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/app-contact.html" class="sidebar-link">
                                    <i class="ti ti-phone"></i>
                                    <span class="hide-menu">Contact Table</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/app-contact2.html" class="sidebar-link">
                                    <i class="ti ti-list-details"></i>
                                    <span class="hide-menu">Contact List</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/app-notes.html" class="sidebar-link">
                                    <i class="ti ti-notes"></i>
                                    <span class="hide-menu">Notes</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/app-invoice.html" class="sidebar-link">
                                    <i class="ti ti-file-text"></i>
                                    <span class="hide-menu">Invoice</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/page-user-profile.html" class="sidebar-link">
                                    <i class="ti ti-user-circle"></i>
                                    <span class="hide-menu">User Profile</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/blog-posts.html" class="sidebar-link">
                                    <i class="ti ti-article"></i>
                                    <span class="hide-menu">Posts</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/blog-detail.html" class="sidebar-link">
                                    <i class="ti ti-details"></i>
                                    <span class="hide-menu">Detail</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/eco-shop.html" class="sidebar-link">
                                    <i class="ti ti-shopping-cart"></i>
                                    <span class="hide-menu">Shop</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/eco-shop-detail.html" class="sidebar-link">
                                    <i class="ti ti-basket"></i>
                                    <span class="hide-menu">Shop Detail</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/eco-product-list.html" class="sidebar-link">
                                    <i class="ti ti-list-check"></i>
                                    <span class="hide-menu">List</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/eco-checkout.html" class="sidebar-link">
                                    <i class="ti ti-brand-shopee"></i>
                                    <span class="hide-menu">Checkout</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- ============================= -->
                    <!-- PAGES -->
                    <!-- ============================= -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">PAGES</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <span>
                                <i class="ti ti-notebook"></i>
                            </span>
                            <span class="hide-menu">Pages</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../minisidebar/page-faq.html" class="sidebar-link">
                                    <i class="ti ti-help"></i>
                                    <span class="hide-menu">FAQ</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/page-account-settings.html" class="sidebar-link">
                                    <i class="ti ti-user-circle"></i>
                                    <span class="hide-menu">Account Setting</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/page-pricing.html" class="sidebar-link">
                                    <i class="ti ti-currency-dollar"></i>
                                    <span class="hide-menu">Pricing</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/widgets-cards.html" class="sidebar-link">
                                    <i class="ti ti-cards"></i>
                                    <span class="hide-menu">Card</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/widgets-banners.html" class="sidebar-link">
                                    <i class="ti ti-ad"></i>
                                    <span class="hide-menu">Banner</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/widgets-charts.html" class="sidebar-link">
                                    <i class="ti ti-chart-bar"></i>
                                    <span class="hide-menu">Charts</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../../../landingpage/index.html" class="sidebar-link">
                                    <i class="ti ti-app-window"></i>
                                    <span class="hide-menu">Landing Page</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- ============================= -->
                    <!-- UI -->
                    <!-- ============================= -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">UI</span>
                    </li>
                    <!-- =================== -->
                    <!-- UI Elements -->
                    <!-- =================== -->
                    <li class="sidebar-item mega-dropdown">
                        <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                            <span class="rounded-3">
                                <i class="ti ti-layout-grid"></i>
                            </span>
                            <span class="hide-menu">UI</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../minisidebar/ui-accordian.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Accordian</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/ui-badge.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Badge</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/ui-buttons.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Buttons</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/ui-dropdowns.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Dropdowns</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/ui-modals.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Modals</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/ui-tab.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Tab</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/ui-tooltip-popover.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Tooltip & Popover</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/ui-notification.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Notification</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/ui-progressbar.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Progressbar</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/ui-pagination.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Pagination</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/ui-typography.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Typography</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/ui-bootstrap-ui.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Bootstrap UI</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/ui-breadcrumb.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Breadcrumb</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/ui-offcanvas.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Offcanvas</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/ui-lists.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Lists</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/ui-grid.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Grid</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/ui-carousel.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Carousel</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/ui-scrollspy.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Scrollspy</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/ui-spinner.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Spinner</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/ui-link.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Link</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- ============================= -->
                    <!-- Forms -->
                    <!-- ============================= -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Forms</span>
                    </li>
                    <!-- =================== -->
                    <!-- Forms -->
                    <!-- =================== -->
                    <li class="sidebar-item">
                        <a class="sidebar-link two-column has-arrow" href="#" aria-expanded="false">
                            <span class="rounded-3">
                                <i class="ti ti-file-text"></i>
                            </span>
                            <span class="hide-menu">Forms</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <!-- form elements -->
                            <li class="sidebar-item">
                                <a href="../minisidebar/form-inputs.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Forms Input</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/form-input-groups.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Input Groups</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/form-input-grid.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Input Grid</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/form-checkbox-radio.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Checkbox & Radios</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/form-bootstrap-touchspin.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Bootstrap Touchspin</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/form-bootstrap-switch.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Bootstrap Switch</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/form-select2.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Select2</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/form-dual-listbox.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Dual Listbox</span>
                                </a>
                            </li>
                            <!-- form inputs -->
                            <li class="sidebar-item">
                                <a href="../minisidebar/form-basic.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Basic Form</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/form-vertical.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Form Vertical</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/form-horizontal.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Form Horizontal</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/form-actions.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Form Actions</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/form-row-separator.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Row Separator</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/form-bordered.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Form Bordered</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/form-detail.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Form Detail</span>
                                </a>
                            </li>
                            <!-- form wizard -->
                            <li class="sidebar-item">
                                <a href="../minisidebar/form-wizard.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Form Wizard</span>
                                </a>
                            </li>
                            <!-- Quill Editor -->
                            <li class="sidebar-item">
                                <a href="../minisidebar/form-editor-quill.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Quill Editor</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- ============================= -->
                    <!-- Tables -->
                    <!-- ============================= -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Tables</span>
                    </li>
                    <!-- =================== -->
                    <!-- Bootstrap Table -->
                    <!-- =================== -->
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                            <span class="rounded-3">
                                <i class="ti ti-layout-sidebar"></i>
                            </span>
                            <span class="hide-menu">Tables</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../minisidebar/table-basic.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Basic Table</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/table-dark-basic.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Dark Basic Table</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/table-sizing.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Sizing Table</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/table-layout-coloured.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Coloured Table</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/table-datatable-basic.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Basic Initialisation</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/table-datatable-api.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">API</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/table-datatable-advanced.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Advanced Initialisation</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- ============================= -->
                    <!-- Charts -->
                    <!-- ============================= -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Charts</span>
                    </li>
                    <!-- =================== -->
                    <!-- Apex Chart -->
                    <!-- =================== -->
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                            <span class="rounded-3">
                                <i class="ti ti-chart-pie"></i>
                            </span>
                            <span class="hide-menu">Charts</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../minisidebar/chart-apex-line.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Line Chart</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/chart-apex-area.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Area Chart</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/chart-apex-bar.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Bar Chart</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/chart-apex-pie.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Pie Chart</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/chart-apex-radial.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Radial Chart</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../minisidebar/chart-apex-radar.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Radar Chart</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- ============================= -->
                    <!-- Icons -->
                    <!-- ============================= -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Icons</span>
                    </li>
                    <!-- =================== -->
                    <!-- Tabler Icon -->
                    <!-- =================== -->
                    <li class="sidebar-item">
                        <a class="sidebar-link sidebar-link" href="../minisidebar/icon-tabler.html" aria-expanded="false">
                            <span class="rounded-3">
                                <i class="ti ti-archive"></i>
                            </span>
                            <span class="hide-menu">Icon</span>
                        </a>
                    </li>
                    <!-- multi level -->
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                            <span class="rounded-3">
                                <iconify-icon icon="solar:airbuds-case-minimalistic-line-duotone" class="ti"></iconify-icon>
                            </span>
                            <span class="hide-menu">Multi DD</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Page 1</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link has-arrow">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Page 2</span>
                                </a>
                                <ul aria-expanded="false" class="collapse second-level">
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Page 2.1</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Page 2.2</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Page 2.3</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Page 3</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>

    <div class="body-wrapper">
        <div class="container-fluid">
            <!--  Owl carousel -->
            <div class="owl-carousel counter-carousel owl-theme">
                <div class="item">
                    <div class="card border-0 zoom-in bg-primary-subtle shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="../assets/images/svgs/icon-user-male.svg" width="50" height="50" class="mb-3" alt="" />
                                <p class="fw-semibold fs-3 text-primary mb-1">
                                    Employees
                                </p>
                                <h5 class="fw-semibold text-primary mb-0">96</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0 zoom-in bg-warning-subtle shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="../assets/images/svgs/icon-briefcase.svg" width="50" height="50" class="mb-3" alt="" />
                                <p class="fw-semibold fs-3 text-warning mb-1">Clients</p>
                                <h5 class="fw-semibold text-warning mb-0">3,650</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0 zoom-in bg-info-subtle shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="../assets/images/svgs/icon-mailbox.svg" width="50" height="50" class="mb-3" alt="" />
                                <p class="fw-semibold fs-3 text-info mb-1">Projects</p>
                                <h5 class="fw-semibold text-info mb-0">356</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0 zoom-in bg-danger-subtle shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="../assets/images/svgs/icon-favorites.svg" width="50" height="50" class="mb-3" alt="" />
                                <p class="fw-semibold fs-3 text-danger mb-1">Events</p>
                                <h5 class="fw-semibold text-danger mb-0">696</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0 zoom-in bg-success-subtle shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="../assets/images/svgs/icon-speech-bubble.svg" width="50" height="50" class="mb-3"
                                    alt="" />
                                <p class="fw-semibold fs-3 text-success mb-1">Payroll</p>
                                <h5 class="fw-semibold text-success mb-0">$96k</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0 zoom-in bg-info-subtle shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="../assets/images/svgs/icon-connect.svg" width="50" height="50" class="mb-3" alt="" />
                                <p class="fw-semibold fs-3 text-info mb-1">Reports</p>
                                <h5 class="fw-semibold text-info mb-0">59</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Row 1 -->
            <div class="row">
                <div class="col-lg-8 d-flex align-items-strech">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                                <div class="mb-3 mb-sm-0">
                                    <h5 class="card-title fw-semibold">Revenue Updates</h5>
                                    <p class="card-subtitle mb-0">Overview of Profit</p>
                                </div>
                                <select class="form-select w-auto">
                                    <option value="1">March 2023</option>
                                    <option value="2">April 2023</option>
                                    <option value="3">May 2023</option>
                                    <option value="4">June 2023</option>
                                </select>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div id="chart"></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="hstack mb-4 pb-1">
                                        <div
                                            class="p-8 bg-primary-subtle rounded-1 me-3 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-grid-dots text-primary fs-6"></i>
                                        </div>
                                        <div>
                                            <h4 class="mb-0 fs-7 fw-semibold">$63,489.50</h4>
                                            <p class="fs-3 mb-0">Total Earnings</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-baseline mb-4">
                                            <span class="round-8 text-bg-primary rounded-circle me-6"></span>
                                            <div>
                                                <p class="fs-3 mb-1">Earnings this month</p>
                                                <h6 class="fs-5 fw-semibold mb-0">$48,820</h6>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-baseline mb-4 pb-1">
                                            <span class="round-8 text-bg-secondary rounded-circle me-6"></span>
                                            <div>
                                                <p class="fs-3 mb-1">Expense this month</p>
                                                <h6 class="fs-5 fw-semibold mb-0">$26,498</h6>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn btn-primary w-100">
                                                View Full Report
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <!-- Yearly Breakup -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h5 class="card-title mb-9 fw-semibold">
                                                Yearly Breakup
                                            </h5>
                                            <h4 class="fw-semibold mb-3">$36,358</h4>
                                            <div class="d-flex align-items-center mb-3">
                                                <span
                                                    class="me-1 rounded-circle bg-success-subtle round-20 d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-arrow-up-left text-success"></i>
                                                </span>
                                                <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                                                <p class="fs-3 mb-0">last year</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="me-4">
                                                    <span class="round-8 text-bg-primary rounded-circle me-2 d-inline-block"></span>
                                                    <span class="fs-2">2023</span>
                                                </div>
                                                <div>
                                                    <span class="round-8 bg-primary-subtle rounded-circle me-2 d-inline-block"></span>
                                                    <span class="fs-2">2023</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex justify-content-center">
                                                <div id="breakup"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <!-- Monthly Earnings -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h5 class="card-title mb-9 fw-semibold">
                                                Monthly Earnings
                                            </h5>
                                            <h4 class="fw-semibold mb-3">$6,820</h4>
                                            <div class="d-flex align-items-center pb-1">
                                                <span
                                                    class="me-2 rounded-circle bg-danger-subtle round-20 d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-arrow-down-right text-danger"></i>
                                                </span>
                                                <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                                                <p class="fs-3 mb-0">last year</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex justify-content-end">
                                                <div
                                                    class="text-white text-bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-currency-dollar fs-6"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="earning"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Row 2 -->
            <div class="row">
                <!-- Employee Salary -->
                <div class="col-lg-4 d-flex align-items-strech">
                    <div class="card w-100">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title fw-semibold mb-1">
                                    Employee Salary
                                </h5>
                                <p class="card-subtitle mb-0">Every month</p>
                                <div id="salary" class="mb-7 pb-8"></div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="bg-primary-subtle rounded me-8 p-8 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-grid-dots text-primary fs-6"></i>
                                        </div>
                                        <div>
                                            <p class="fs-3 mb-0 fw-normal">Salary</p>
                                            <h6 class="fw-semibold text-dark fs-4 mb-0">
                                                $36,358
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="text-bg-light rounded me-8 p-8 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-grid-dots text-muted fs-6"></i>
                                        </div>
                                        <div>
                                            <p class="fs-3 mb-0 fw-normal">Profit</p>
                                            <h6 class="fw-semibold text-dark fs-4 mb-0">
                                                $5,296
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project -->
                <div class="col-lg-4">
                    <div class="row">
                        <!-- Customers -->
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body pb-0 mb-xxl-4 pb-1">
                                    <p class="mb-1 fs-3">Customers</p>
                                    <h4 class="fw-semibold fs-7">36,358</h4>
                                    <div class="d-flex align-items-center mb-3">
                                        <span
                                            class="me-2 rounded-circle bg-danger-subtle round-20 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-arrow-down-right text-danger"></i>
                                        </span>
                                        <p class="text-dark fs-3 mb-0">+9%</p>
                                    </div>
                                </div>
                                <div id="customers"></div>
                            </div>
                        </div>
                        <!-- Projects -->
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <p class="mb-1 fs-3">Projects</p>
                                    <h4 class="fw-semibold fs-7">78,298</h4>
                                    <div class="d-flex align-items-center mb-3">
                                        <span
                                            class="me-1 rounded-circle bg-success-subtle round-20 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-arrow-up-left text-success"></i>
                                        </span>
                                        <p class="text-dark fs-3 mb-0">+9%</p>
                                    </div>
                                    <div id="projects"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Comming Soon -->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-7 pb-2">
                                <div class="me-3 pe-1">
                                    <img src="../assets/images/profile/user-1.jpg" class="shadow-warning rounded-2" alt="" width="72"
                                        height="72" />
                                </div>
                                <div>
                                    <h5 class="fw-semibold fs-5 mb-2">
                                        Super awesome, Vue coming soon!
                                    </h5>
                                    <p class="fs-3 mb-0">22 March, 2023</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <ul class="hstack mb-0">
                                    <li class="ms-n8">
                                        <a href="javascript:void(0)" class="me-1">
                                            <img src="../assets/images/profile/user-2.jpg"
                                                class="rounded-circle border border-2 border-white" width="44" height="44" alt="" />
                                        </a>
                                    </li>
                                    <li class="ms-n8">
                                        <a href="javascript:void(0)" class="me-1">
                                            <img src="../assets/images/profile/user-3.jpg"
                                                class="rounded-circle border border-2 border-white" width="44" height="44" alt="" />
                                        </a>
                                    </li>
                                    <li class="ms-n8">
                                        <a href="javascript:void(0)" class="me-1">
                                            <img src="../assets/images/profile/user-4.jpg"
                                                class="rounded-circle border border-2 border-white" width="44" height="44" alt="" />
                                        </a>
                                    </li>
                                    <li class="ms-n8">
                                        <a href="javascript:void(0)" class="me-1">
                                            <img src="../assets/images/profile/user-5.jpg"
                                                class="rounded-circle border border-2 border-white" width="44" height="44" alt="" />
                                        </a>
                                    </li>
                                </ul>
                                <a href="#" class="text-bg-light rounded py-1 px-8 d-flex align-items-center text-decoration-none">
                                    <i class="ti ti-message-2 fs-6 text-primary"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Selling Products -->
                <div class="col-lg-4 d-flex align-items-strech">
                    <div class="card text-bg-primary border-0 w-100">
                        <div class="card-body pb-0">
                            <h5 class="fw-semibold mb-1 text-white card-title">
                                Best Selling Products
                            </h5>
                            <p class="fs-3 mb-3 text-white">Overview 2023</p>
                            <div class="text-center mt-3">
                                <img src="../assets/images/backgrounds/piggy.png" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="card mx-2 mb-2 mt-n2">
                            <div class="card-body">
                                <div class="mb-7 pb-1">
                                    <div class="d-flex justify-content-between align-items-center mb-6">
                                        <div>
                                            <h6 class="mb-1 fs-4 fw-semibold">MaterialPro</h6>
                                            <p class="fs-3 mb-0">$23,568</p>
                                        </div>
                                        <div>
                                            <span class="badge bg-primary-subtle text-primary fw-semibold fs-3">55%</span>
                                        </div>
                                    </div>
                                    <div class="progress bg-primary-subtle" style="height: 4px">
                                        <div class="progress-bar w-50" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex justify-content-between align-items-center mb-6">
                                        <div>
                                            <h6 class="mb-1 fs-4 fw-semibold">Flexy Admin</h6>
                                            <p class="fs-3 mb-0">$23,568</p>
                                        </div>
                                        <div>
                                            <span class="badge bg-secondary-subtle text-secondary fw-bold fs-3">20%</span>
                                        </div>
                                    </div>
                                    <div class="progress bg-secondary-subtle" style="height: 4px">
                                        <div class="progress-bar text-bg-secondary w-25" role="progressbar" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Row 3 -->
            <div class="row">
                <!-- Weekly Stats -->
                <div class="col-lg-4 d-flex align-items-strech">
                    <div class="card w-100">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Weekly Stats</h5>
                            <p class="card-subtitle mb-0">Average sales</p>
                            <div id="stats" class="my-4"></div>
                            <div class="position-relative">
                                <div class="d-flex align-items-center justify-content-between mb-7">
                                    <div class="d-flex">
                                        <div
                                            class="p-6 bg-primary-subtle rounded me-6 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-grid-dots text-primary fs-6"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1 fs-4 fw-semibold">Top Sales</h6>
                                            <p class="fs-3 mb-0">Johnathan Doe</p>
                                        </div>
                                    </div>
                                    <div class="bg-primary-subtle badge">
                                        <p class="fs-3 text-primary fw-semibold mb-0">+68</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-7">
                                    <div class="d-flex">
                                        <div
                                            class="p-6 bg-success-subtle rounded me-6 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-grid-dots text-success fs-6"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1 fs-4 fw-semibold">Best Seller</h6>
                                            <p class="fs-3 mb-0">MaterialPro Admin</p>
                                        </div>
                                    </div>
                                    <div class="bg-success-subtle badge">
                                        <p class="fs-3 text-success fw-semibold mb-0">+68</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex">
                                        <div class="p-6 bg-danger-subtle rounded me-6 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-grid-dots text-danger fs-6"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1 fs-4 fw-semibold">
                                                Most Commented
                                            </h6>
                                            <p class="fs-3 mb-0">Ample Admin</p>
                                        </div>
                                    </div>
                                    <div class="bg-danger-subtle badge">
                                        <p class="fs-3 text-danger fw-semibold mb-0">+68</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Top Performers -->
                <div class="col-lg-8 d-flex align-items-strech">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="d-sm-flex d-block align-items-center justify-content-between mb-7">
                                <div class="mb-3 mb-sm-0">
                                    <h5 class="card-title fw-semibold">Top Performers</h5>
                                    <p class="card-subtitle mb-0">Best Employees</p>
                                </div>
                                <div>
                                    <select class="form-select">
                                        <option value="1">March 2023</option>
                                        <option value="2">April 2023</option>
                                        <option value="3">May 2023</option>
                                        <option value="4">June 2023</option>
                                    </select>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-middle text-nowrap mb-0">
                                    <thead>
                                        <tr class="text-muted fw-semibold">
                                            <th scope="col" class="ps-0">Assigned</th>
                                            <th scope="col">Project</th>
                                            <th scope="col">Priority</th>
                                            <th scope="col">Budget</th>
                                        </tr>
                                    </thead>
                                    <tbody class="border-top">
                                        <tr>
                                            <td class="ps-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 pe-1">
                                                        <img src="../assets/images/profile/user-1.jpg" class="rounded-circle" width="40"
                                                            height="40" alt="" />
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-semibold mb-1">Sunil Joshi</h6>
                                                        <p class="fs-2 mb-0 text-muted">
                                                            Web Designer
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 fs-3">Elite Admin</p>
                                            </td>
                                            <td>
                                                <span class="badge fw-semibold py-1 w-85 bg-primary-subtle text-primary">Low</span>
                                            </td>
                                            <td>
                                                <p class="fs-3 text-dark mb-0">$3.9K</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 pe-1">
                                                        <img src="../assets/images/profile/user-2.jpg" class="rounded-circle" width="40"
                                                            height="40" alt="" />
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-semibold mb-1">John Deo</h6>
                                                        <p class="fs-2 mb-0 text-muted">
                                                            Web Developer
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 fs-3">Flexy Admin</p>
                                            </td>
                                            <td>
                                                <span class="badge fw-semibold py-1 w-85 bg-warning-subtle text-warning">Medium</span>
                                            </td>
                                            <td>
                                                <p class="fs-3 text-dark mb-0">$24.5K</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 pe-1">
                                                        <img src="../assets/images/profile/user-3.jpg" class="rounded-circle" width="40"
                                                            height="40" alt="" />
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-semibold mb-1">Nirav Joshi</h6>
                                                        <p class="fs-2 mb-0 text-muted">
                                                            Web Manager
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 fs-3">Material Pro</p>
                                            </td>
                                            <td>
                                                <span class="badge fw-semibold py-1 w-85 bg-info-subtle text-info">High</span>
                                            </td>
                                            <td>
                                                <p class="fs-3 text-dark mb-0">$12.8K</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 pe-1">
                                                        <img src="../assets/images/profile/user-4.jpg" class="rounded-circle" width="40"
                                                            height="40" alt="" />
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-semibold mb-1">Yuvraj Sheth</h6>
                                                        <p class="fs-2 mb-0 text-muted">
                                                            Project Manager
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 fs-3">Xtreme Admin</p>
                                            </td>
                                            <td>
                                                <span class="badge fw-semibold py-1 w-85 bg-success-subtle text-success">Low</span>
                                            </td>
                                            <td>
                                                <p class="fs-3 text-dark mb-0">$4.8K</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 ps-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 pe-1">
                                                        <img src="../assets/images/profile/user-5.jpg" class="rounded-circle" width="40"
                                                            height="40" alt="" />
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-semibold mb-1">Micheal Doe</h6>
                                                        <p class="fs-2 mb-0 text-muted">
                                                            Content Writer
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-0">
                                                <p class="mb-0 fs-3">Helping Hands WP Theme</p>
                                            </td>
                                            <td class="border-0">
                                                <span class="badge fw-semibold py-1 w-85 bg-danger-subtle text-danger">High</span>
                                            </td>
                                            <td class="border-0">
                                                <p class="fs-3 text-dark mb-0">$9.3K</p>
                                            </td>
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

@stop

@pushOnce('scripts')

@endPushOnce