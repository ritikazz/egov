<!DOCTYPE html>
<html>
<head>
    <title>Complaints List</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Submitted Complaints</h1>
    <ul>
        @foreach($complaints as $complaint)
            <li>
                <strong>Name:</strong> {{ $complaint->name }}<br>
                <strong>Email:</strong> {{ $complaint->email }}<br>
                <strong>Description:</strong> {{ $complaint->description }}<br>
                <strong>Submitted at:</strong> {{ $complaint->created_at }}<br>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('home') }}">Back to Home</a>
</body>
</html>
