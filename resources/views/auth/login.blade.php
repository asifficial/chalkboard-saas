@extends('layouts.auth')

@section('title', 'Login to your account')

@section('content')
<div class="flex flex-col justify-center items-center min-h-screen">
    <div class="w-46 my-10 hidden">
        <img class="min-w-full h-auto" src="{{ asset('images/brand/chalkboard-logo-white.svg') }}" alt="{{ config('app.name') }} Logo">
    </div>

    <div class="w-40 my-10 block">
        <img class="min-w-full h-auto" src="{{ asset('images/brand/chalkboard-logo.svg') }}" alt="{{ config('app.name') }} Logo">
    </div>

    <div class="rounded-xl bg-white p-14 border border-zinc-300 w-lg">

        <h1 class="text-xl text-left">Sign in to your account</h1>

        <form method="POST" action="{{ route('login') }}" class="mt-6 space-y-4" data-formoose-form>
            @csrf

            <div class="my-5">
                <div class="mb-2">
                    <label class="text-sm font-medium text-zinc-700">Email</label>
                </div>
                <div>
                    <input type="email"
                        name="email"
                        class="w-full rounded-md border border-zinc-300 px-3 py-2 text-sm focus:border-zinc-500 focus:outline-3 focus:outline-zinc-200 focus:outline-offset-0"
                        data-formoose-required="true"
                        data-formoose-email="true"
                        autofocus>
                </div>
            </div>

            <div class="my-5">
                <div class="flex justify-between items-center mb-2">
                    <label class="text-sm font-medium text-zinc-700">Password</label>
                    <a href="#" class="text-sm text-slate-900 hover:underline focus:border-zinc-500 focus:outline-3 focus:outline-zinc-200">
                        Forgot your password?
                    </a>
                </div>
                <div>
                    <input type="password"
                        name="password"
                        class="w-full rounded-md border border-zinc-300 px-3 py-2 text-sm focus:border-zinc-500 focus:outline-3 focus:outline-zinc-200 focus:outline-offset-0"
                        data-formoose-required="true">
                </div>
            </div>

            <div class="flex items-center justify-between text-sm my-5">
                <label class="inline-flex items-center gap-2 text-zinc-700">
                    <input type="checkbox" name="remember" class="rounded w-4 h-4 focus:outline-3 focus:outline-zinc-200 focus:outline-offset-0">
                    Remember me on this device
                </label>
            </div>

            <button type="submit"
                    class="w-full rounded-md px-4 py-2 text-md font-medium bg-slate-900 text-white hover:bg-zinc-800 transition-colors focus:border-zinc-500 focus:outline-3 focus:outline-zinc-200 focus:outline-offset-0">
                Login
            </button>

        </form>
    </div>

    <div class="my-5">
        <span>
            &copy; <a class="focus:border-zinc-500 focus:outline-3 focus:outline-zinc-200 focus:outline-offset-0" href="{{ config('app.url') }}">{{ config('app.name') }}</a> 
            {{ date('Y') }}
        </span>

        <ul class="inline-flex ml-5 gap-5">
            <li>
                <a href="#" class="text-sm text-slate-900 hover:underline focus:border-zinc-500 focus:outline-3 focus:outline-zinc-200 focus:outline-offset-0">
                    Privacy
                </a>
            </li>
            <li>
                <a href="#" class="text-sm text-slate-900 hover:underline focus:border-zinc-500 focus:outline-3 focus:outline-zinc-200 focus:outline-offset-0">
                    Terms
                </a>
            </li>
        </ul>
    </div>
</div>
@endsection