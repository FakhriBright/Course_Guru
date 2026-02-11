@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="profile-wrapper">

    <!-- HEADER -->
    <div class="profile-header">
        <div class="profile-avatar">
            <i class="fas fa-user"></i>
        </div>
        <h2>{{ Auth::user()->name }}</h2>
        <p>{{ Auth::user()->email }}</p>
    </div>

    <!-- ACCOUNT CARD -->
    <div class="profile-card">
        <h3>Informasi Akun</h3>

        <div class="form-group">
            <label>Email</label>
            <input type="text" value="{{ Auth::user()->email }}" readonly>
        </div>

        <div class="form-group password-group">
            <label>Password</label>
            <div class="password-wrapper">
                <input type="password" id="passwordField" value="********" readonly>
                <button type="button" class="toggle-password" onclick="togglePassword()">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-btn">
                Keluar Akun
            </button>
        </form>
    </div>

</div>

<script>
function togglePassword() {
    const field = document.getElementById('passwordField');
    const icon = document.querySelector('.toggle-password i');

    if (field.type === "password") {
        field.type = "text";
        field.value = "Password terenkripsi";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    } else {
        field.type = "password";
        field.value = "********";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }
}
</script>

@endsection
