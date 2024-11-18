<article class="border rounded-lg p-4 shadow-md">
    <h2 class="text-2xl font-bold mb-2">
        <a href="{{ route('posts.show',$id) }}" class="hover:underline">{{ $title }}</a>
    </h2>
    <time>Created at {{ date("Y-m-d") }} {{ $userName }}</time>
    <p class="text-gray-600 pt-4">{{ $summary }}</p>
    <div class="mt-4">
      <button class="bg-orange-500 text-white px-4 py-2 rounded-sm">      
        <a href="{{ route('posts.edit', $id)}}">Edit</a>
      </button>
      <form class="inline" method="POST" action="{{ route('posts.destroy', $id)}}">
        @csrf
        @method("DELETE")
        <button type="submit" class="bg-red-500 text-white px-4 py-2">Delete</button>
      </form>
    </div>
</article>
