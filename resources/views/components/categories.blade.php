<div>
    <ul class="flex gap-4">
        @foreach($categories as $category)
            <li class="px-3 py-1 bg-gray-200 rounded-full text-sm">
                <a href="">
                {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>