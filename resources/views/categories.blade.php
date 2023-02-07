<x-layout>
    
    @foreach ($posts as $c)
    <article>
        <h1><a href="/posts/{{ $c->slug }}">{{ $c->title }}</a></h1>
        <p>
            {!! $c->excerpt !!}
        </p>
    </article>

    @endforeach
    
    <a href="/">Go Back</a>
</x-layout>