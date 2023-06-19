<div class="mb-2">

    <x-form.label :label="$label" :name="$name" :required="$required"/>

    <input type="{{ $type ?? 'text' }}"
        name="{{ $name }}"
        class="shadow-sm bg-white border @error($name) error-input  @enderror text-sm rounded-lg block w-full p-2.5 mb-4
         @if($readonly)  bg-gray-200  cursor-not-allowed @endif "
        placeholder="{{$placeholder}}"
           @if($required)
               required
           @endif
        @if($readonly)
            disabled readonly
        @endif
        value="{{ old($name, $value ?? '') }}"
    >

    <x-form.error :name="$name"/>
</div>
