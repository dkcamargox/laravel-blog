<x-layout>
    <h1>My Blog</h1>
    @foreach ($posts as $post)
        <article>
            <h2 style="align-self: flex-start;">{{$post->title}}</h2>
            <p>{{$post->excerpt}}..</p>
            <a class="read-more" href="post/{{$post->slug}}">
                <p>read more</p>
                <p style="font-family: 'Fira Code';" >
                    ->
                </p>
            </a>
        </article>
    @endforeach
</x-layout>
