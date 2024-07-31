@extends('layouts.app')

@section('content')
    <h2>List of Complaints</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <ul class="list-group">
        @foreach ($complaints as $complaint)
            <li class="list-group-item">
                <h5>{{ $complaint->name }}</h5>
                <p>{{ $complaint->email }}</p>
                <p>{{ $complaint->address }}</p>
                <p>{{ $complaint->title }}</p>
                <p>{{ $complaint->description }}</p>
                <small>{{ $complaint->created_at }}</small>
            </li>
        @endforeach
    </ul>
@endsection
