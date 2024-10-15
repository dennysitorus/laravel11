<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        </a>
        <p class="text-base text-grey-500">Reporter: {{ $post['reporter'] }} | Editor: {{ $post['editor'] }}</p>
        <p class="my-4 font-light text-justify">{{ Str::limit($post['body'], 200) }}</p>
        <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read mode &raquo;</a>
    </article>

    @endforeach
</x-layout>