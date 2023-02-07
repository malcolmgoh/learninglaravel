<x-layout>
    
    @foreach ($posts as $c)
    <article>
        <h1><a href="/posts/{{ $c->slug }}">{{ $c->title }}</a></h1>
        <p>

        <a href="/categories/{{ $c->category->slug }}">{{ $c->category->name }}</a>
        </p>
        <div>
            {!! $c->excerpt !!}
        </div>
    </article>

    @endforeach
    
    <a href="/">Go Back</a>
</x-layout>