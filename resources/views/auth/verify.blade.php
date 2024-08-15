@extends('layouts.layout')
@section('content')
<section class="bg-gray-50 bg-hero-bg bg-gray-300 bg-blend-multiply">
      <div class="mx-auto content max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center">
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
          <div class="mx-auto max-w-lg bg-gray-700 rounded-lg shadow-lg">
            <div class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-5">
                @if (session('resent'))
                    <h1 class="text-center text-white font-medium">Success, Please check your email</h1>
                @else
                      <h1 class="text-center text-white font-medium">Verify Your Account</h1>
                      <small class="text-white text-center">Before proceeding, please check your email for a verification link. <br> If you did not receive the email.</small>
                  <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                  @csrf
                    <button
                      type="submit"
                      class="block w-full rounded-lg bg-yellow-300 hover:bg-gray-900 px-5 py-3 text-sm font-medium text-white">
                      click here to request another
                    </button>
                  </form>
                @endif
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection