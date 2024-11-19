@extends('superadmin.layouts.superadmin')

@section('title', 'Feedbacks')

@section('content')
<h2 class="mb-2">Feedbacks</h2>
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th style="width: 15%;">Username</th>
                <th style="width: 10%;">Rating</th>
                <th style="width: 50%;">Feedback</th> 
                <th style="width: 15%;">Location</th>
                <th style="width: 15%;">Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($feedbacks as $feedback)
                <tr>
                    <td>{{ $feedback->user_name }}</td>
                    <td>{{ $feedback->rating }}</td>
                    <td>{{ $feedback->feedback }}</td>
                    <td>{{ $feedback->location }}</td>
                    <td><a class="btn btn-sm btn-danger" href="">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>

@endsection
