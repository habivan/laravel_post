@php($id = Str::uuid())

<div class="form-check">
    <input {{$attributes->merge([
        "type"=>"button",
        'value'=>1,
        'checked' => !! old($attributes->get('name')),
    ])}}  class="form-check-input" type="checkbox"id="{{$id}}">
    <label class="form-check-label" for="{{$id}}">
        {{$slot}}
    </label>
</div>
