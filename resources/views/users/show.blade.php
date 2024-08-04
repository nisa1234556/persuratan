<!-- resources/views/users/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">User Details</div>

                <div class="card-body">
                    <p><strong>Name:</strong> {{ $user->name }}</p>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Created At:</strong> {{ $user->created_at }}</p>
                    <p><strong>Updated At:</strong> {{ $user->updated_at }}</p>
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection