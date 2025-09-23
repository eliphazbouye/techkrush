@extends('layouts.dashboard')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-stone-800 mb-2">Welcome to your Dashboard</h1>
            <p class="text-gray-500">Here is a quick overview of your site activity and stats.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
                <div class="bg-stone-100 rounded-full p-3 mb-3">
                    <svg class="w-8 h-8 text-stone-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 4.354a8 8 0 1 0 0 15.292a8 8 0 0 0 0-15.292z"/></svg>
                </div>
                <div class="text-2xl font-bold">123</div>
                <div class="text-gray-500">Users</div>
            </div>
            <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
                <div class="bg-stone-100 rounded-full p-3 mb-3">
                    <svg class="w-8 h-8 text-stone-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>
                </div>
                <div class="text-2xl font-bold">45</div>
                <div class="text-gray-500">Posts</div>
            </div>
            <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
                <div class="bg-stone-100 rounded-full p-3 mb-3">
                    <svg class="w-8 h-8 text-stone-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 20h5v-2a4 4 0 0 0-3-3.87"/><path d="M9 20H4v-2a4 4 0 0 1 3-3.87"/><circle cx="12" cy="7" r="4"/></svg>
                </div>
                <div class="text-2xl font-bold">8</div>
                <div class="text-gray-500">Categories</div>
            </div>
            <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
                <div class="bg-stone-100 rounded-full p-3 mb-3">
                    <svg class="w-8 h-8 text-stone-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                </div>
                <div class="text-2xl font-bold">32</div>
                <div class="text-gray-500">Comments</div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-semibold mb-4 text-stone-700">Quick Actions</h2>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('dashboard.category') }}" class="inline-block px-5 py-2 bg-stone-600 text-white rounded hover:bg-stone-700 transition">Manage Categories</a>
                <a href="#" class="inline-block px-5 py-2 bg-stone-600 text-white rounded hover:bg-stone-700 transition">Create Post</a>
                <a href="#" class="inline-block px-5 py-2 bg-stone-600 text-white rounded hover:bg-stone-700 transition">View Comments</a>
            </div>
        </div>
    </div>
@endsection
