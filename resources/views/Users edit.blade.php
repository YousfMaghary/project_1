@extends('layouts.app')
@section('usercontent')

<div class="container mt-4">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card mb-4">
        <div class="card-header">Edit User</div>
        <div class="card-body">
            <form action="/users/update" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}">
                </div>

                <div class="form-group">
                    <label>New Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Update User</button>
                <a href="/users" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>

</div>

@endsection
