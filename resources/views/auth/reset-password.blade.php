@extends('auth.master')
@section('content')
    <!--start wrapper-->
    <div class="wrapper">

        <!--start content-->
        <main class="authentication-content">
            <div class="container-fluid">
                <div class="authentication-card">
                    <div class="card shadow rounded-0 overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6 d-flex align-items-center justify-content-center border-end">
                                <img src="{{ asset('dashboard_asset/assets/images/error/forgot-password-frent-img.jpg') }}"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body p-4 p-sm-5">
                                    <h5 class="card-title">Genrate New Password</h5>
                                    <p class="card-text mb-5">We received your reset password request. Please enter your new
                                        password!</p>
                                    <form class="form-body" action="{{ route($guard . '.password.update') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <input type="hidden" name="email" value="{{ request('email') }}">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label for="email" class="form-label">Enter Email</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-lock-fill"></i>
                                                    </div>
                                                    <input type="email" name="email" class="form-control radius-30 ps-5"
                                                        id="inputEmail" placeholder="Enter email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputNewPassword" class="form-label">New Password</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-lock-fill"></i>
                                                    </div>
                                                    <input type="password" name="password"
                                                        class="form-control radius-30 ps-5" id="inputNewPassword"
                                                        placeholder="Enter New Password">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputConfirmPassword" class="form-label">New Password</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-lock-fill"></i>
                                                    </div>
                                                    <input type="password" name="password_confirmation"
                                                        class="form-control radius-30 ps-5" id="inputNewPassword"
                                                        placeholder="Enter New Password">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid gap-3">
                                                    <button type="submit" class="btn btn-primary radius-30">Change
                                                        Password</button>
                                                    {{-- <a href="{{ route('') }}" class="btn btn-light radius-30">Back to
                                                        Login</a> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!--end page main-->

    </div>
    <!--end wrapper-->
@endsection
