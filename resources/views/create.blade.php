<!DOCTYPE html>
<html>
<head>
    <title>Create Complaint</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Submit a Complaint</h1>
        <form action="{{ route('complaint.store') }}" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
            
            <button type="submit">Submit</button>
        </form>
        <a href="{{ route('home') }}" class="back-link">Back to Home</a>
    </div>
</body>
</html>
