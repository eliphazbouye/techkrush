@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Welcome to {{ config('app.name', 'Laravel') }}
                </h2>
            </div>
        </div>
    </div>
@endsection