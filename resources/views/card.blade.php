@props(['title'])

<div {{ $attributes->merge(['class' => 'card']) }}>
    <h2>{{ $title }}</h2>
    <p>{{ $slot }}</p>
</div>