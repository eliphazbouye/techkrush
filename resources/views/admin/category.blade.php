@extends('layouts.dashboard')

@section('content')
    <div x-data="{ isOpen: false }" class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-4">
            <div>
                <h1 class="text-2xl font-bold text-stone-800 mb-1">Categories</h1>
                <p class="text-gray-500">Manage all your post categories here.</p>
            </div>
            <button class="py-2 px-6 rounded-lg bg-stone-600 hover:bg-stone-700 transition text-white font-semibold shadow" @click="isOpen = !isOpen">Add new category</button>
        </div>
        <div x-show="isOpen" class="mb-6">
            <livewire:create-category />
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-700">
                    <thead class="text-xs uppercase bg-gray-50">
                        <tr>
                            <th class="px-6 py-3">Category name</th>
                            <th class="px-6 py-3">Color</th>
                            <th class="px-6 py-3">Slug</th>
                            <th class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories ?? [] as $category)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-6 py-4 font-medium whitespace-nowrap">{{ $category->name }}</td>
                            <td class="px-6 py-4">{{ $category->color ?? '-' }}</td>
                            <td class="px-6 py-4">{{ $category->slug }}</td>
                            <td class="px-6 py-4">
                                <a href="#" class="inline-block px-3 py-1 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
