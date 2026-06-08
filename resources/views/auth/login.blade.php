@extends('layouts.app')

@section('content')
<div class="flex min-h-[80vh] items-center justify-center px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8 rounded-2xl bg-white p-8 shadow-xl border border-gray-100">
        <div>
            @if(session()->has('message'))
                <div class="rounded-lg bg-blue-50 p-4 text-sm text-blue-700 border border-blue-100 mb-6">
                    {{ session()->get('message') }}
                </div>
            @endif

            <h1 class="text-center text-3xl font-extrabold tracking-tight text-gray-900">
                {{ trans('panel.site_title') }}
            </h1>
            <p class="mt-2 text-center text-sm text-gray-500">
                {{ trans('global.login') }}
            </p>
        </div>

        <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="space-y-4 rounded-md">
                
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <div class="relative">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                            <i class="fa fa-user text-sm"></i>
                        </div>
                        <input id="email" name="email" type="text" required autofocus 
                            class="block w-full rounded-lg border {{ $errors->has('email') ? 'border-red-300 text-red-900 placeholder-red-300 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500' }} pl-10 pr-3 py-2.5 text-sm focus:outline-none focus:ring-2" 
                            placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">
                    </div>
                    @if($errors->has('email'))
                        <p class="mt-1.5 text-xs text-red-600">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <div class="relative">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                            <i class="fa fa-lock text-sm"></i>
                        </div>
                        <input id="password" name="password" type="password" required 
                            class="block w-full rounded-lg border {{ $errors->has('password') ? 'border-red-300 text-red-900 placeholder-red-300 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500' }} pl-10 pr-3 py-2.5 text-sm focus:outline-none focus:ring-2" 
                            placeholder="{{ trans('global.login_password') }}">
                    </div>
                    @if($errors->has('password'))
                        <p class="mt-1.5 text-xs text-red-600">{{ $errors->first('password') }}</p>
                    @endif
                </div>
            </div>

            
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember" name="remember" type="checkbox" 
                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    <label for="remember" class="ml-2 block text-sm text-gray-600">
                        {{ trans('global.remember_me') }}
                    </label>
                </div>

                <div class="text-sm">
                    <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500 transitions duration-150">
                        {{ trans('global.forgot_password') }}
                    </a>
                </div>
            </div>

           
            <div>
                <button type="submit" 
                    class="group relative flex w-full justify-center rounded-lg bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition duration-150">
                    {{ trans('global.login') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
