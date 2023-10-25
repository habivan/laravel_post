@extends('layouts.main')

    @section('page.title', 'Изменение поста')

    @section('main.content')
        <x-title>
            {{__('Изминение поста')}}
            <x-slot name="link">
                <a href="{{route("user.posts")}}">
                    {{__('Назад')}}
                </a>
            </x-slot>
        </x-title>
        <x-post.form action="{{route('user.posts.update', $post->id)}}" :post='$post' />
    @endsection


