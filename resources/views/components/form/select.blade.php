
<div class="mb-2">

    <x-form.label :label="$label" :name="$name" :required="$required"/>

    <select class="categories form-select appearance-none block w-full
        px-3 py-2 mt-1 bg-white border rounded-lg transition ease-in-outtext-gray-700 m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error($name) error-input  @enderror"
            name="{{ $name }}"
            @if($readonly)
            disabled readonly
            @endif
            @if($select2)
                id="select2"
                multiple
            @endif
            >

            @if( $placeholder )
            <option value="">
                {{$placeholder}}
            </option>
            @endif
            @foreach($options as $value => $label)
            <option value="{{$value}}"
            @if (is_array($selected))

                {{ in_array($value, $selected) ? 'selected' : NULL }}
            @else
                {{ $selected == $value ? 'selected' : NULL}}
            @endif

            >
                {{$label}}
            </option>
            @endforeach
    </select>

    <x-form.error :name="$name"/>
</div>
