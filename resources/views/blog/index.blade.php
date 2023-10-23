@extends('layouts.base')

    @section('page.title', 'Список постов')

    @section('content')

        <h1 class="mb-5">
            Список постов
        </h1>

        @if (empty($posts))
            <p>Нет постов</p>
        @else
            @foreach ($posts as $post)
                <div class="mb-4">
                    <h4><a href="{{route('blog.show', $post->id)}}">{{$post->title}}</a></h4>
                    <p>{!!$post->text!!}</p>
                </div>
            @endforeach
        @endif

    @endsection
