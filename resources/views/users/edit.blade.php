<!-- resources/views/users/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit User</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="username">username:</label>
        <input type="text" id="username" name="username" value="{{ $user->username }}" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">

        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation">

        <button type="submit">Update</button>
    </form>
@endsection
