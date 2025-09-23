<div class="fixed inset-0 z-50 flex items-center justify-center bg-black/40" @click.self="isOpen = false">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md mx-auto p-8 relative animate-fade-in">
        <button @click="isOpen = false" class="absolute top-3 right-3 text-gray-400 hover:text-stone-700 text-2xl font-bold">&times;</button>
        <form wire:submit="save" class="flex flex-col gap-3">
            <h3 class="text-2xl font-bold text-stone-800 mb-2 text-center">Create new Category</h3>

            <label for="name" class="font-medium">Name</label>
            <input
                class="border rounded-lg border-stone-200 p-2 focus:ring-2 focus:ring-stone-400"
                type="text" wire:model="form.name" id="name" placeholder="Category name">
            <div>
                @error('form.name') <span class="text-red-600">{{$message}}</span> @enderror
            </div>

            <label for="slug" class="font-medium">Slug</label>
            <input
                class="border rounded-lg border-stone-200 p-2 focus:ring-2 focus:ring-stone-400"
                type="text" wire:model="form.slug" id="slug" placeholder="category-slug">
            <div>
                @error('form.slug') <span class="text-red-600">{{$message}}</span> @enderror
            </div>

            <label for="description" class="font-medium">Description</label>
            <textarea
                class="border rounded-lg border-stone-200 p-2 focus:ring-2 focus:ring-stone-400"
                wire:model="form.description" id="description" cols="30" rows="3" placeholder="Describe this category..."></textarea>

            <div class="flex gap-3 pt-4 justify-center">
                <button class="bg-stone-900 hover:bg-stone-700 transition rounded-lg text-white py-2 px-6 font-semibold shadow" type="submit">Create</button>
                <button class="bg-red-600 hover:bg-red-400 transition rounded-lg text-white py-2 px-6 font-semibold shadow" type="button" @click="isOpen = false">Cancel</button>
            </div>
        </form>
        <style>
        @keyframes fade-in { from { opacity: 0; transform: scale(0.95);} to { opacity: 1; transform: scale(1);} }
        .animate-fade-in { animation: fade-in 0.2s ease; }
        </style>
    </div>
</div>
