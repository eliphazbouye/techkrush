<div class="flex items-center justify-between space-x-4">
    <div class="flex items-center space-x-4 font-medium">
        <div class="text-violet-700 font-bold">
            <a href="{{ route('home') }}">TechKrush</a>
        </div>
        <div class="">
            <a href="{{ route('post.index') }}">News</a>
        </div>
        <div class="">
            <a href="{{ route('podcasts') }}">Podcasts</a>
        </div>
        <div class="">
            <a href="{{ route('resource') }}">Resource</a>
        </div>
    </div>


    <div>
        <input type="text" placeholder="Search..." class="border border-gray-300 rounded-md px-4 py-2" />
    </div>
</div>