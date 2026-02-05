@extends('backend.layouts.app')

@section('content')
<section class="login-section" id="login">
    <div class="form-box login-form">
        <h2> Admin Login</h2>

        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
            </div>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Login</button>

            <p class="form-link">
                Don't have an account? <a href="#">Register here</a>
            </p>
        </form>
    </div>
</section>
@endsection