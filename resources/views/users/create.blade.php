@extends('layouts.Adcon')
@section('title', 'Add User')

@section('content')
<div class="container py-4">
    <h2>Add New User</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Role</label>
            <select name="role" class="form-control">
                <option value="costumer">Customer</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Create User</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
