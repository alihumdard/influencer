@extends('layouts.default')
@section('title', 'Dashboard')
@section('content')

<style>
    .btn-primary {
        background-color: #d63384 !important;
        border: #d63384 !important;
    }
</style>
<div class="body-wrapper">
    <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8"></h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-muted text-decoration-none" href="{{ route('admin.index') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">Create Compaigns</li>
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

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="px-4 py-3 border-bottom">
                        <h5 class="card-title fw-bold text-center mb-0" style="color:#d63384">Create Compaign</h5>
                    </div>
                    <div class="card-body p-4 border-bottom">
                        <h5 class="fs-4 fw-semibold mb-4">Compaign Details</h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="exampleInputtext3" class="form-label fw-semibold">Compaign Name</label>
                                    <input type="text" class="form-control" id="exampleInputtext3" placeholder="John Deo">
                                </div>
                                <div class="">
                                    <div class="mb-3">
                                        <label class="form-label">Gender</label>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="gender_male" name="gender" value="male">
                                                    <label class="form-check-label" for="gender_male">Male</label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="gender_female" name="gender" value="female">
                                                    <label class="form-check-label" for="gender_female">Female</label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="gender_other" name="gender" value="other">
                                                    <label class="form-check-label" for="gender_other">Other</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Campaign Banner</label>
                                    <div class="input-group border rounded-1">
                                        <input type="file" class="form-control border-0" id="compaign_banner">
                                    </div>
                                </div>
                                <div class="">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Confirm Password</label>
                                    <div class="input-group border rounded-1">
                                        <input type="password" class="form-control border-0" id="inputPassword"
                                            placeholder="John Deo">
                                        <span class="input-group-text bg-transparent px-6 border-0" id="basic-addon1"><i
                                                class="ti ti-eye fs-6"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="fs-4 fw-semibold mb-4">Personal Info</h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">First Name</label>
                                    <input type="text" class="form-control" id="exampleInputtext" placeholder="John">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Country</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="">India</option>
                                        <option value="1">United Kingdom</option>
                                        <option value="2">Srilanka</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Birth Date</label>
                                    <input id="startDate" class="form-control" type="date" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Last Name</label>
                                    <input type="text" class="form-control" id="exampleInputtext" placeholder="Deo">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Language</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="">English</option>
                                        <option value="1">French</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Phone no</label>
                                    <input type="text" class="form-control" id="exampleInputtext" placeholder="123 4567 201">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center justify-content-end gap-3 ">
                                    <button class="btn btn-primary px-5 py-2 fw-bold text-white">Submit</button>
                                    <button class="btn bg-dark-subtle text-white fw-bold px-5 py-2">Cancel</button>
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

@endPushOnce