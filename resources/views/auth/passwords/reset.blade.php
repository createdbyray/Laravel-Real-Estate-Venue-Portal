@extends('layouts.app')
@section('content')
<div class="flex min-h-screen items-center justify-center bg-gray-50/50 px-4 py-12 sm:px-6 lg:px-8">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl border border-gray-100 shadow-xl p-8">
            <form method="POST" action="{{ route('password.request') }}" class="space-y-6">
                @csrf
                <input name="token" value="{{ $token }}" type="hidden">
                
                <div class="text-center">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 mb-2">
                        <a href="#" class="text-indigo-600 hover:text-indigo-500 transition duration-150">
                            {{ trans('panel.site_title') }}
                        </a>
                    </h1>
                    <p class="text-sm text-gray-500">
                        {{ trans('global.reset_password_instructions') ?? 'Please enter your details to set your new password.' }}
                    </p>
                </div>

                <div class="space-y-5">
                    <!-- Email Field -->
                    <div class="space-y-2">
                        <label for="email" class="block text-sm font-medium text-gray-900">
                            {{ trans('global.login_email') }}
                        </label>
                        <input 
                            id="email"
                            type="email" 
                            name="email" 
                            required 
                            placeholder="{{ trans('global.login_email') }}"
                            value="{{ old('email') }}"
                            class="block w-full rounded-lg border py-2.5 px-3.5 text-gray-900 placeholder-gray-400 transition duration-150 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-sm
                            {{ $errors->has('email') ? 'border-red-300 text-red-900 focus:ring-red-500 focus:border-red-500' : 'border-gray-300' }}"
                        >
                        @if($errors->has('email'))
                            <p class="mt-1 text-sm text-red-600">
                                {{ $errors->first('email') }}
                            </p>
                        @endif
                    </div>

                    <!-- Password Field -->
                    <div class="space-y-2">
                        <label for="password" class="block text-sm font-medium text-gray-900">
                            {{ trans('global.login_password') }}
                        </label>
                        <input 
                            id="password"
                            type="password" 
                            name="password" 
                            required 
                            placeholder="{{ trans('global.login_password') }}"
                            class="block w-full rounded-lg border py-2.5 px-3.5 text-gray-900 placeholder-gray-400 transition duration-150 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-sm
                            {{ $errors->has('password') ? 'border-red-300 text-red-900 focus:ring-red-500 focus:border-red-500' : 'border-gray-300' }}"
                        >
                        @if($errors->has('password'))
                            <p class="mt-1 text-sm text-red-600">
                                {{ $errors->first('password') }}
                            </p>
                        @endif
                    </div>

                    <!-- Password Confirmation Field -->
                    <div class="space-y-2">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-900">
                            {{ trans('global.login_password_confirmation') }}
                        </label>
                        <input 
                            id="password_confirmation"
                            type="password" 
                            name="password_confirmation" 
                            required 
                            placeholder="{{ trans('global.login_password_confirmation') }}"
                            class="block w-full rounded-lg border py-2.5 px-3.5 text-gray-900 placeholder-gray-400 transition duration-150 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-sm
                            {{ $errors->has('password_confirmation') ? 'border-red-300 text-red-900 focus:ring-red-500 focus:border-red-500' : 'border-gray-300' }}"
                        >
                        @if($errors->has('password_confirmation'))
                            <p class="mt-1 text-sm text-red-600">
                                {{ $errors->first('password_confirmation') }}
                            </p>
                        @endif
                    </div>
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
