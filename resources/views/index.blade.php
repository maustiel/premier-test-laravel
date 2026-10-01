<x-layouts.company title="Nos produits">
    <h1>Nos produits</h1>
    <ul>
        @foreach ($products as $id => $product)
            <li>
                <a href="{{ route('products.show', $id) }}">{{ $product['name'] }}</a> 
                - {{ $product['price'] }} EUR 
                
                @if ($product['on_sale']) 
                    <strong>(Promo !)</strong> 
                @endif
            </li>
        @endforeach
    </ul>
</x-layouts.company>