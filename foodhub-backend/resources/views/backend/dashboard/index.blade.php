@extends('backend.layouts.app')
@section('content')
<!-- Header -->
<header class="dashboard-header">
    <nav class="navbar">
        <div class="navbar-wrapper">
            <a href="#">
                <img src="{{ asset('website/assets/images/logo.svg') }}" alt="Foodhub Logo" width="130" />
            </a>

            <ul class="navbar-nav">
                <li><a href="{{ route('admin.dashboard') }}" class="nav-link">Dashboard</a></li>
                <li><a href="#" class="nav-link">Manage Orders</a></li>
                <li><a href="#" class="nav-link">Manage Users</a></li>
                <li><a href="#" class="nav-link">Manage Products</a></li>
                <li><a href="{{ route('admin.home') }}" class="nav-link">Home</a></li>
            </ul>

            <div class="navbar-btn-group">
                <button class="btn btn-secondary">
                    <a href="{{ route('admin.logout') }}">
                        <ion-icon name="log-out-outline"></ion-icon> Logout
                    </a>
                </button>
            </div>
        </div>
    </nav>
</header>
<!-- Main -->
<main class="dashboard-main">
    <section class="dashboard-section">
        <h2>Welcome back, <span id="admin-name">Admin</span></h2>

        <div class="dashboard-cards">
            <div class="dashboard-card">
                <h3>Total Users</h3>
                <p class="dashboard-number">1,204</p>
            </div>

            <div class="dashboard-card">
                <h3>Total Orders</h3>
                <p class="dashboard-number">3,215</p>
            </div>

            <div class="dashboard-card">
                <h3>Revenue</h3>
                <p class="dashboard-number">$84,760</p>
            </div>
        </div>

        <div class="dashboard-content">

            <div class="recent-orders">
                <h3>Latest Orders</h3>
                <ul class="order-list">
                    <li>
                        <span>Order #2025</span>
                        <span class="status completed">Delivered</span>
                    </li>
                    <li>
                        <span>Order #2024</span>
                        <span class="status in-progress">Preparing</span>
                    </li>
                    <li>
                        <span>Order #2023</span>
                        <span class="status cancelled">Cancelled</span>
                    </li>
                </ul>
            </div>

            <div class="profile-info">
                <h3>Admin Info</h3>
                <p><strong>Name:</strong> Jane Smith</p>
                <p><strong>Email:</strong> admin@foodhub.com</p>
                <p><strong>Role:</strong> Super Admin</p>

                <button class="btn btn-primary">Edit Profile</button>
            </div>

        </div>
    </section>
</main>
@endsection