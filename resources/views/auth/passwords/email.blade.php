@extends('layouts.app')
@section('content')
<div class="flex min-h-screen items-center justify-center bg-gray-50/50 px-4 py-12 sm:px-6 lg:px-8">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl border border-gray-100 shadow-xl p-8">
            <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
                @csrf
                
                <div class="text-center">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 mb-2">
                        <a href="#" class="text-indigo-600 hover:text-indigo-500 transition duration-150">
                            {{ trans('panel.site_title') }}
                        </a>
                    </h1>
                    <p class="text-sm text-gray-500">
                        {{ trans('global.reset_password_instructions') ?? 'Enter your email to receive a password reset link.' }}
                    </p>
                </div>

                <div class="space-y-2">
                    <label for="email" class="block text-sm font-medium text-gray-900">
                        {{ trans('global.login_email') }}
                    </label>
                    <div class="relative">
                        <input 
                            id="email"
                            type="email" 
                            name="email" 
                            required 
                            autofocus 
                            placeholder="{{ trans('global.login_email') }}"
                            value="{{ old('email') }}"
                            class="block w-full rounded-lg border py-2.5 px-3.5 text-gray-900 placeholder-gray-400 transition duration-150 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-sm
                            {{ $errors->has('email') ? 'border-red-300 text-red-900 focus:ring-red-500 focus:border-red-500' : 'border-gray-300' }}"
                        >
                    </div>
                    @if($errors->has('email'))
                        <p class="mt-1 text-sm text-red-600">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-lg bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition duration-150">
                        {{ trans('global.reset_password') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
