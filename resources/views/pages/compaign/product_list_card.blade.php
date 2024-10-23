<div class="col-md-4 single-note-item all-category"
id="product-card-{{ $item->id }}">
<div class="card card-body">
    <span class="side-stick"></span>
    <h6 class="note-title text-truncate w-75 mb-0"
        data-noteheading="Book a Ticket for Movie">
        {{ $item->title }}</h6>
    {{-- <p class="note-date fs-2">11 March 2009</p> --}}
    <div class="note-content">
        <p class="note-inner-content"
            data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
            {{ $item->description }} </p>
    </div>
    <div class="d-flex align-items-center">
        {{-- <a href="javascript:void(0)" class="link me-1">
        <i class="ti ti-star fs-4 favourite-note"></i>
    </a> --}}
        <a href="javascript:void(0)" type="button"
            class="link text-danger delete-product"
            data-id="{{ $item->id }}">
            <i class="ti ti-trash fs-4 remove-note"></i>
        </a>
        <div class="ms-auto">
            <div class="category-selector btn-group">
                <a class="nav-link category-dropdown label-group p-0"
                    data-bs-toggle="dropdown" href="#"
                    role="button" aria-haspopup="true"
                    aria-expanded="true">
                    <div class="category">
                        <div class="category-business"></div>
                        <div class="category-social"></div>
                        <div class="category-important"></div>
                        <span class="more-options text-dark">
                            <i
                                class="ti ti-dots-vertical fs-5"></i>
                        </span>
                    </div>
                </a>
                <div
                    class="dropdown-menu dropdown-menu-right category-menu">

                    <a class="
        note-social
        badge-group-item badge-social
        dropdown-item
        position-relative
        category-social
        d-flex
        align-items-center duplicate-product
        "
                        href="javascript:void(0);"
                        data-id="{{ $item->id }}">
                        Duplicate</a>
                 </div>
            </div>
        </div>
    </div>
</div>
</div>
