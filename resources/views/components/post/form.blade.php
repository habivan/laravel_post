@props(['post'=>null])

<x-form {{$attributes}} method="POST">
    <x-form-itam>
        <x-label required>{{__('Название поста')}}</x-label>
        <x-input name="title" value="{{$post->title ?? ''}}" autofocus />
    </x-form-itam>
    <x-form-itam>
        <x-label required>{{__('Текст поста')}}</x-label>
        <x-trix name="contect" value="{{$post->text ?? ''}}" />
    </x-form-itam>
    <x-button type="submit">
        {{__('Создать пост')}}
    </x-button>
</x-form>
