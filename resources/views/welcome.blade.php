<!DOCTYPE html>
<html>
<head>
    <title>Complaint Management System</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header class="hero">
        <div class="hero-content">
            
            <img src="{{ asset('/css/images/newlogo.png') }}" alt="Logo" class="logo">
            <h1>Welcome to the Complaint Management System</h1>
            <!-- <img src="{{ asset('images/OrangeComplaint.jpg') }}" alt="Complaint" class="complaint-image"> -->
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
