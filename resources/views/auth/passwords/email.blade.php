@extends('layouts.layout')
@section('content')
<section class="bg-gray-50 bg-hero-bg bg-gray-300 bg-blend-multiply">
      <div class="mx-auto content max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center">
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
          <div class="mx-auto max-w-lg bg-gray-700 rounded-lg shadow-lg">
            <form method="POST" action="{{ route('password.email') }}" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-5">
                @csrf
              <h1 class="text-center text-white font-medium">Reset Password</h1>
              @if (session('status'))
              <p class="alert alert-success text-white" role="alert"><small>{{ session('status') }}</small></p>
              @else
              <div>
                <label for="email" class="sr-only">Email</label>
                <div class="relative">
                  <input
                    type="email"
                    id="email"
                    name="email"
                    class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm form-control @error('email') is-invalid @enderror"
                    placeholder="Enter email" value="{{ old('email') }}" required autocomplete="email"/>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <small class="text-pink-400">{{ $message }}</small>
                        </span>
                    @enderror
                  <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="size-4 text-gray-400"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor">
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                    </svg>
                  </span>
                </div>
              </div>
              <button
                type="submit"
                class="block w-full rounded-lg bg-yellow-300 hover:bg-gray-900 px-5 py-3 text-sm font-medium text-white">
                Reset Password
              </button>
              @endif
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection