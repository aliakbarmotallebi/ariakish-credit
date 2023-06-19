@props([
    'heading',
    'content',
    'footer' => NULL,
])

<!-- Cart -->
<section class="cart mt-4 rounded-t-md {{ $attributes->get('class') }} rounded-xl border shadow-md bg-white">
    <div class="cart__title flex w-full items-center justify-between border-b p-5 pb-3">
        <span class="font-semibold">
            {{ $title }}
        </span>
    </div>
    <div class="cart__content overflow-x-auto whitespace-nowrap">
        <div {{ $header->attributes->class([
                'flex px-5 py-3 w-full'
                ]) }}>
            {{ $header }}
        </div>
        <div {{ $content->attributes->class(['']) }}>
            {{ $content }}
        </div>
        {{ $slot }}
    </div>
</section>

<div class="{{ $footer ? $footer->attributes->get('class') : NULL}}">
    {{ $footer }}
</div>
<!-- /Cart -->
