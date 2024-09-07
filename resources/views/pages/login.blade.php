@extends('layouts.auth')

@section('title')
    Login Page | SMP 6 Temanggung
@endsection

@section('content')
<div class="container">
    <div class="py-5 my-5 d-flex justify-content-center">
        <div class="col-md-5">
            <div class="card mb-3 shadow-lg" style="background-color: #3348BB;">
                <img src="{{ asset('assets/images/Logo & Nama Sekolah.png') }}" class="card-img-top mx-auto d-block mt-4" alt="..." style="max-width: 35%; height: auto;">
                <div class="card-body" style="padding-top: 50px;">
                    <!-- Form Login -->
                    <form>
                        <div class="mb-3">
                            <label for="username" class="form-label" style="color: white;">Email</label>
                            <input type="text" class="form-control form-control-lg" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label" style="color: white;">Password</label>
                            <input type="password" class="form-control form-control-lg" id="password" name="password" required>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-warning text-white btn-lg btn-block" style="width: 100%;">Login</button>
                    </form>
                    <!-- End Form Login -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
