@extends('layouts.default')
@section('title', 'Ptoducts')
@section('content')

<div class="body-wrapper">
    <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Products</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-muted text-decoration-none" href="/minisidebar/index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">Products</li>
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

        <div class="col-12">
            <div class="card">
                <div class="card-body ">
                    <div id="note-full-container" class="note-has-grid row">
                        <div class="col-md-4 single-note-item all-category">
                            <div class="card card-body">
                                <span class="side-stick"></span>
                                <h6 class="note-title text-truncate w-75 mb-0" data-noteheading="Book a Ticket for Movie"> Book a
                                    Ticket for Movie </h6>
                                <p class="note-date fs-2">11 March 2009</p>
                                <div class="note-content">
                                    <p class="note-inner-content" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis."> Blandit
                                        tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0)" class="link me-1">
                                        <i class="ti ti-star fs-4 favourite-note"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="link text-danger ms-2">
                                        <i class="ti ti-trash fs-4 remove-note"></i>
                                    </a>
                                    <div class="ms-auto">
                                        <div class="category-selector btn-group">
                                            <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                <div class="category">
                                                    <div class="category-business"></div>
                                                    <div class="category-social"></div>
                                                    <div class="category-important"></div>
                                                    <span class="more-options text-dark">
                                                        <i class="ti ti-dots-vertical fs-5"></i>
                                                    </span>
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right category-menu">
                                                <a class="
                                  note-business
                                  badge-group-item badge-business
                                  dropdown-item
                                  position-relative
                                  category-business
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);">Business</a>
                                                <a class="
                                  note-social
                                  badge-group-item badge-social
                                  dropdown-item
                                  position-relative
                                  category-social
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Social</a>
                                                <a class="
                                  note-important
                                  badge-group-item badge-important
                                  dropdown-item
                                  position-relative
                                  category-important
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Important</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 single-note-item all-category note-important">
                            <div class="card card-body">
                                <span class="side-stick"></span>
                                <h6 class="note-title text-truncate w-75 mb-0" data-noteheading="Go for lunch"> Go for lunch </h6>
                                <p class="note-date fs-2">01 April 2002</p>
                                <div class="note-content">
                                    <p class="note-inner-content" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis."> Blandit
                                        tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0)" class="link me-1">
                                        <i class="ti ti-star fs-4 favourite-note"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="link text-danger ms-2">
                                        <i class="ti ti-trash fs-4 remove-note"></i>
                                    </a>
                                    <div class="ms-auto">
                                        <div class="category-selector btn-group">
                                            <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                <div class="category">
                                                    <div class="category-business"></div>
                                                    <div class="category-social"></div>
                                                    <div class="category-important"></div>
                                                    <span class="more-options text-dark">
                                                        <i class="ti ti-dots-vertical fs-5"></i>
                                                    </span>
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right category-menu">
                                                <a class="
                                  note-business
                                  badge-group-item badge-business
                                  dropdown-item
                                  position-relative
                                  category-business
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);">Business</a>
                                                <a class="
                                  note-social
                                  badge-group-item badge-social
                                  dropdown-item
                                  position-relative
                                  category-social
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Social</a>
                                                <a class="
                                  note-important
                                  badge-group-item badge-important
                                  dropdown-item
                                  position-relative
                                  category-important
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Important</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 single-note-item all-category note-social">
                            <div class="card card-body">
                                <span class="side-stick"></span>
                                <h6 class="note-title text-truncate w-75 mb-0" data-noteheading="Meeting with Mr.Jojo"> Meeting with
                                    Mr.Jojo </h6>
                                <p class="note-date fs-2">19 October 2021</p>
                                <div class="note-content">
                                    <p class="note-inner-content" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis."> Blandit
                                        tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0)" class="link me-1">
                                        <i class="ti ti-star fs-4 favourite-note"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="link text-danger ms-2">
                                        <i class="ti ti-trash fs-4 remove-note"></i>
                                    </a>
                                    <div class="ms-auto">
                                        <div class="category-selector btn-group">
                                            <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                <div class="category">
                                                    <div class="category-business"></div>
                                                    <div class="category-social"></div>
                                                    <div class="category-important"></div>
                                                    <span class="more-options text-dark">
                                                        <i class="ti ti-dots-vertical fs-5"></i>
                                                    </span>
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right category-menu">
                                                <a class="
                                  note-business
                                  badge-group-item badge-business
                                  dropdown-item
                                  position-relative
                                  category-business
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);">Business</a>
                                                <a class="
                                  note-social
                                  badge-group-item badge-social
                                  dropdown-item
                                  position-relative
                                  category-social
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Social</a>
                                                <a class="
                                  note-important
                                  badge-group-item badge-important
                                  dropdown-item
                                  position-relative
                                  category-important
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Important</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 single-note-item all-category note-business">
                            <div class="card card-body">
                                <span class="side-stick"></span>
                                <h6 class="note-title text-truncate w-75 mb-0" data-noteheading="Give Review for design"> Give Review
                                    for design </h6>
                                <p class="note-date fs-2">02 January 2000</p>
                                <div class="note-content">
                                    <p class="note-inner-content" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis."> Blandit
                                        tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0)" class="link me-1">
                                        <i class="ti ti-star fs-4 favourite-note"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="link text-danger ms-2">
                                        <i class="ti ti-trash fs-4 remove-note"></i>
                                    </a>
                                    <div class="ms-auto">
                                        <div class="category-selector btn-group">
                                            <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                <div class="category">
                                                    <div class="category-business"></div>
                                                    <div class="category-social"></div>
                                                    <div class="category-important"></div>
                                                    <span class="more-options text-dark">
                                                        <i class="ti ti-dots-vertical fs-5"></i>
                                                    </span>
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right category-menu">
                                                <a class="
                                  note-business
                                  badge-group-item badge-business
                                  dropdown-item
                                  position-relative
                                  category-business
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);">Business</a>
                                                <a class="
                                  note-social
                                  badge-group-item badge-social
                                  dropdown-item
                                  position-relative
                                  category-social
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Social</a>
                                                <a class="
                                  note-important
                                  badge-group-item badge-important
                                  dropdown-item
                                  position-relative
                                  category-important
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Important</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 single-note-item all-category note-social">
                            <div class="card card-body">
                                <span class="side-stick"></span>
                                <h6 class="note-title text-truncate w-75 mb-0" data-noteheading="Nightout with friends"> Nightout with
                                    friends </h6>
                                <p class="note-date fs-2">01 August 1999</p>
                                <div class="note-content">
                                    <p class="note-inner-content" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis."> Blandit
                                        tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0)" class="link me-1">
                                        <i class="ti ti-star fs-4 favourite-note"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="link text-danger ms-2">
                                        <i class="ti ti-trash fs-4 remove-note"></i>
                                    </a>
                                    <div class="ms-auto">
                                        <div class="category-selector btn-group">
                                            <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                <div class="category">
                                                    <div class="category-business"></div>
                                                    <div class="category-social"></div>
                                                    <div class="category-important"></div>
                                                    <span class="more-options text-dark">
                                                        <i class="ti ti-dots-vertical fs-5"></i>
                                                    </span>
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right category-menu">
                                                <a class="
                                  note-business
                                  badge-group-item badge-business
                                  dropdown-item
                                  position-relative
                                  category-business
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);">Business</a>
                                                <a class="
                                  note-social
                                  badge-group-item badge-social
                                  dropdown-item
                                  position-relative
                                  category-social
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Social</a>
                                                <a class="
                                  note-important
                                  badge-group-item badge-important
                                  dropdown-item
                                  position-relative
                                  category-important
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Important</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 single-note-item all-category note-important">
                            <div class="card card-body">
                                <span class="side-stick"></span>
                                <h6 class="note-title text-truncate w-75 mb-0" data-noteheading="Launch new template"> Launch new
                                    template </h6>
                                <p class="note-date fs-2">21 January 2015</p>
                                <div class="note-content">
                                    <p class="note-inner-content" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis."> Blandit
                                        tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0)" class="link me-1">
                                        <i class="ti ti-star fs-4 favourite-note"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="link text-danger ms-2">
                                        <i class="ti ti-trash fs-4 remove-note"></i>
                                    </a>
                                    <div class="ms-auto">
                                        <div class="category-selector btn-group">
                                            <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                <div class="category">
                                                    <div class="category-business"></div>
                                                    <div class="category-social"></div>
                                                    <div class="category-important"></div>
                                                    <span class="more-options text-dark">
                                                        <i class="ti ti-dots-vertical fs-5"></i>
                                                    </span>
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right category-menu">
                                                <a class="
                                  note-business
                                  badge-group-item badge-business
                                  dropdown-item
                                  position-relative
                                  category-business
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);">Business</a>
                                                <a class="
                                  note-social
                                  badge-group-item badge-social
                                  dropdown-item
                                  position-relative
                                  category-social
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Social</a>
                                                <a class="
                                  note-important
                                  badge-group-item badge-important
                                  dropdown-item
                                  position-relative
                                  category-important
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Important</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 single-note-item all-category note-social">
                            <div class="card card-body">
                                <span class="side-stick"></span>
                                <h6 class="note-title text-truncate w-75 mb-0" data-noteheading="Change a Design"> Change a Design
                                </h6>
                                <p class="note-date fs-2">25 December 2016</p>
                                <div class="note-content">
                                    <p class="note-inner-content" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis."> Blandit
                                        tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0)" class="link me-1">
                                        <i class="ti ti-star fs-4 favourite-note"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="link text-danger ms-2">
                                        <i class="ti ti-trash fs-4 remove-note"></i>
                                    </a>
                                    <div class="ms-auto">
                                        <div class="category-selector btn-group">
                                            <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                <div class="category">
                                                    <div class="category-business"></div>
                                                    <div class="category-social"></div>
                                                    <div class="category-important"></div>
                                                    <span class="more-options text-dark">
                                                        <i class="ti ti-dots-vertical fs-5"></i>
                                                    </span>
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right category-menu">
                                                <a class="
                                  note-business
                                  badge-group-item badge-business
                                  dropdown-item
                                  position-relative
                                  category-business
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);">Business</a>
                                                <a class="
                                  note-social
                                  badge-group-item badge-social
                                  dropdown-item
                                  position-relative
                                  category-social
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Social</a>
                                                <a class="
                                  note-important
                                  badge-group-item badge-important
                                  dropdown-item
                                  position-relative
                                  category-important
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Important</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 single-note-item all-category note-business">
                            <div class="card card-body">
                                <span class="side-stick"></span>
                                <h6 class="note-title text-truncate w-75 mb-0" data-noteheading="Give review for foods"> Give review
                                    for foods </h6>
                                <p class="note-date fs-2">18 December 2021</p>
                                <div class="note-content">
                                    <p class="note-inner-content" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis."> Blandit
                                        tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0)" class="link me-1">
                                        <i class="ti ti-star fs-4 favourite-note"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="link text-danger ms-2">
                                        <i class="ti ti-trash fs-4 remove-note"></i>
                                    </a>
                                    <div class="ms-auto">
                                        <div class="category-selector btn-group">
                                            <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                <div class="category">
                                                    <div class="category-business"></div>
                                                    <div class="category-social"></div>
                                                    <div class="category-important"></div>
                                                    <span class="more-options text-dark">
                                                        <i class="ti ti-dots-vertical fs-5"></i>
                                                    </span>
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right category-menu">
                                                <a class=" note-business badge-group-item badge-business dropdown-item position-relative category-business d-flex align-items-center" href="javascript:void(0);">Business</a>
                                                <a class="
                                  note-social
                                  badge-group-item badge-social
                                  dropdown-item
                                  position-relative
                                  category-social
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Social</a>
                                                <a class="
                                  note-important
                                  badge-group-item badge-important
                                  dropdown-item
                                  position-relative
                                  category-important
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Important</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 single-note-item all-category note-important">
                            <div class="card card-body">
                                <span class="side-stick"></span>
                                <h6 class="note-title text-truncate w-75 mb-0" data-noteheading="Give salary to employee"> Give salary
                                    to employee </h6>
                                <p class="note-date fs-2">15 Fabruary 2021</p>
                                <div class="note-content">
                                    <p class="note-inner-content" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis."> Blandit
                                        tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0)" class="link me-1">
                                        <i class="ti ti-star fs-4 favourite-note"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="link text-danger ms-2">
                                        <i class="ti ti-trash fs-4 remove-note"></i>
                                    </a>
                                    <div class="ms-auto">
                                        <div class="category-selector btn-group">
                                            <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                <div class="category">
                                                    <div class="category-business"></div>
                                                    <div class="category-social"></div>
                                                    <div class="category-important"></div>
                                                    <span class="more-options text-dark">
                                                        <i class="ti ti-dots-vertical fs-5"></i>
                                                    </span>
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right category-menu">
                                                <a class="
                                  note-business
                                  badge-group-item badge-business
                                  dropdown-item
                                  position-relative
                                  category-business
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);">Business</a>
                                                <a class="
                                  note-social
                                  badge-group-item badge-social
                                  dropdown-item
                                  position-relative
                                  category-social
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Social</a>
                                                <a class="
                                  note-important
                                  badge-group-item badge-important
                                  dropdown-item
                                  position-relative
                                  category-important
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Important</a>
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
</div>

@stop

@pushOnce('scripts')
<script>

</script>
@endPushOnce