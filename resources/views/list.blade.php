<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints List</title>
    <style>
        body {
            font-family: APPLE Chancery, cursive;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #1a202c;
            padding: 20px;
            background-color: #4a5568;
            color: #fff;
            margin: 0;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 20px auto;
            max-width: 800px;
        }

        li {
            background-color: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 10px;
        }

        strong {
            color: #2d3748;
        }

        a {
            display: block;
            text-align: center;
            margin: 20px auto;
            padding: 10px 20px;
            max-width: 200px;
            background-color: #3182ce;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
        }

        a:hover {
            background-color: #2b6cb0;
        }
    </style>
</head>
<body>
    <h1>Submitted Complaints</h1>
    <ul>
        @foreach($complaints as $complaint)
            <li>
                <strong>Name:</strong> {{ $complaint->name }}<br>
                <strong>Email:</strong> {{ $complaint->email }}<br>
                <strong>Address:</strong> {{ $complaint->address }}<br>
                <strong>Title:</strong> {{ $complaint->title }}<br>
                <strong>Description:</strong> {{ $complaint->description }}<br>
                <strong>Submitted at:</strong> {{ $complaint->created_at }}<br>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('home') }}">Back to Home</a>
</body>
</html>
