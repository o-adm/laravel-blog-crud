<header class="bg-blue-500 text-white p-4 backdrop-blur-md">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold"><a href="{{ route('posts.index') }}">ADM Blog</a></h1>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="{{ route('posts.index') }}" class="hover:underline">All Posts</a></li>
                <li><a href="{{ route('about')}}" class="hover:underline">About</a></li>
                <li><a href="/contact" class="hover:underline">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
