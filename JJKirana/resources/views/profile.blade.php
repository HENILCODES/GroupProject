@extends('layouts.app')

@section('title')
   - Profile
@endsection

@section('head')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}" />
@endsection

@section('body')
    <section class="inner-section single-banner" style="background: url(storage/images/single-banner.jpg) no-repeat center">
        <div class="container">
            <h2>my profile</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">profile</li>
            </ol>
        </div>
    </section>
    <section class="inner-section profile-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>Your Profile</h4>
                            <button data-bs-toggle="modal" data-bs-target="#profile-edit">
                                edit profile
                            </button>
                        </div>
                        <div class="account-content">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="profile-image">
                                        <a href="#"><img src="{{asset("storage/images/user.png")}}" alt="user" /></a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label">name</label><input class="form-control" type="text"
                                            value="Miron Mahmud" disabled readonly />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label">Email</label><input class="form-control" type="email"
                                            value="JJ Kirana@gmail.com" disabled readonly />
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="profile-btn">
                                        <a href="change-password.html">change password</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>Details</h4>
                            <button data-bs-toggle="modal" data-bs-target="#details-add">
                                add details
                            </button>
                        </div>
                        <div class="account-content">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card address active">
                                        <h6>Contact No :-</h6>
                                        <p>+91 xxxxxxxxxx</p>
                                        <ul class="user-action">
                                            <li>
                                                <button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal"
                                                    data-bs-target="#address-edit"></button>
                                            </li>
                                            <li>
                                                <button class="trash icofont-ui-delete" title="Remove This"
                                                    data-bs-dismiss="alert"></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card address">
                                        <h6>Address :-</h6>
                                        <p>204,baban chinese hotel,khariwad, nani daman</p>
                                        <ul class="user-action">
                                            <li>
                                                <button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal"
                                                    data-bs-target="#address-edit"></button>
                                            </li>
                                            <li>
                                                <button class="trash icofont-ui-delete" title="Remove This"
                                                    data-bs-dismiss="alert"></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card address">
                                        <h6>Email ID :-</h6>
                                        <p>test@test.com</p>
                                        <ul class="user-action">
                                            <li>
                                                <button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal"
                                                    data-bs-target="#address-edit"></button>
                                            </li>
                                            <li>
                                                <button class="trash icofont-ui-delete" title="Remove This"
                                                    data-bs-dismiss="alert"></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="details-add">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button class="modal-close" data-bs-dismiss="modal">
                    <i class="icofont-close"></i>
                </button>
                <form class="modal-form">
                    <h1 class="text-center">Details</h1>
                    <div class="col-lg-12 row">
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="form-title mt-2">
                                <h3>edit contact</h3>
                            </div>
                            <div class="form-group">
                                <label class="form-label">title</label><select class="form-select">
                                    <option value="primary" selected>primary</option>
                                    <option value="secondary">secondary</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">number</label><input class="form-control" type="text"
                                    value="+8801838288389" />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="form-title mt-2">
                                <h3>edit Email</h3>
                            </div>
                            <div class="form-group">
                                <label class="form-label">title</label><select class="form-select">
                                    <option value="primary" selected>primary</option>
                                    <option value="secondary">secondary</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email</label><input class="form-control" type="email"
                                    value="test@test.com" />
                            </div>
                        </div>
                    </div>
                    <div class="form-title mt-2">
                        <h3>add address</h3>
                    </div>
                    <div class="form-group">
                        <label class="form-label">title</label><select class="form-select">
                            <option selected>choose title</option>
                            <option value="home">home</option>
                            <option value="office">office</option>
                            <option value="Bussiness">Bussiness</option>
                            <option value="academy">academy</option>
                            <option value="others">others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">address</label>
                        <textarea class="form-control" placeholder="Enter your address"></textarea>
                    </div>
                    <button class="form-btn" type="submit">save Details</button>
                </form>
            </div>
        </div>
    </div>
@endsection
