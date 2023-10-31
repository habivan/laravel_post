@props(['post'=>null])

<x-form {{$attributes}}>
    <x-form-itam>
        <x-label required>{{__('Название поста')}}</x-label>
        <x-input name="title" value="{{$post->title ?? ''}}" autofocus />
    </x-form-itam>
    <x-form-itam>
        <x-label required>{{__('Текст поста')}}</x-label>
        <x-trix name="contect" value="{{$post->text ?? ''}}" />
    </x-form-itam>
    <x-button type="submit">
        {{$slot}}
    </x-button>
</x-form>
