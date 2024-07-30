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
                <a href="{{ route('complaint.create') }}" class="button">Submit a Complaint</a>
                <a href="{{ route('complaints.list') }}" class="button">View Complaints</a>
            </div>
        </div>
    </header>
    <!-- Success Alert -->
    @if(session('success'))
        <div class="alert success">
            {{ session('success') }}
        </div>
    @endif
</body>
</html>
