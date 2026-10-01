@props(['product'])

<article {{ $attributes }}>
    <h2>{{ $product['name'] }}</h2>
    <p>{{ $product['price'] }} EUR</p>

    @if ($product['on_sale'])
        <p>Promo !</p>
    @endif
</article>