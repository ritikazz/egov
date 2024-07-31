<!DOCTYPE html>
<html>
<head>
    <title>Complaint Management System</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <header class="hero">
        <div class="hero-content">
        @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: '{{ session('success') }}',
                });
            });
        </script>
    @endif
            <img src="{{ asset('/css/images/newlogo.png') }}" alt="Logo" class="logo">
            <h1>Welcome to the Complaint Management System</h1>
            <div class="button-container">
                 @if (Route::has('login'))
                    @auth
                        <a href="{{ route('complaint.create') }}" class="button">Submit a Complaint</a>
                        <a href="{{ route('complaints.list') }}" class="button">View Complaints</a>
                    @else
                        <a href="{{ route('login') }}" class="button">Log in</a>
                        <a href="{{ route('register') }}" class="button">Register</a>
                    @endauth
                @endif
            </div>
        </div>
    </header>
</body>
</html>
