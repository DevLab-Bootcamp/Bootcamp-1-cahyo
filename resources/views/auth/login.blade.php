@extends('template.auth')
@section('title', 'LOGIN')
@section('form')
<form class="mx-auto max-w-sm" action="{{route('auth.login')}}" method="POST">
    @csrf

    @if(@session('error'))
        <div class="text-red-600">
            {{session('error')}}
        </div>
    @endif
    <div class="mb-5">
        <label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Your email</label>
        <input type="email" name="email" id="email"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
            placeholder="name@flowbite.com" required />
    </div>
    <div class="mb-5">
        <label for="password" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Your
            password</label>
        <input type="password" name="password" id="password"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
            required />
    </div>
    <div class="mb-5 flex items-start">
        <div class="flex h-5 items-center">
            <input id="remember" type="checkbox" value=""
                class="focus:ring-3 h-4 w-4 rounded border border-gray-300 bg-gray-50 focus:ring-blue-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-800"
                required />
        </div>
        <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
    </div>
    <button type="submit"
        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto">Submit</button>
</form>
@endsection
