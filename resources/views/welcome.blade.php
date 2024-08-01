<!DOCTYPE html>
<html>
<head>
    <title>Complaint Management System</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                    <div class="mb-2">
                        <a href="{{ route('complaint.create') }}" class="btn btn-primary btn-lg mr-2">Submit a Complaint</a>
                        <a href="{{ route('complaints.list') }}" class="btn btn-secondary btn-lg ml-2">View Complaints</a> 
                    </div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" class="btn btn-danger">
                                {{ __('Log Out') }}
                            </button>
                        </form>
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
