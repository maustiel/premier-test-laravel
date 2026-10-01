<x-layouts.company :title="$product['name']">
    <h1>{{ $product['name'] }}</h1>
    
    <p>Prix : {{ $product['price'] }} EUR</p>
    
    @if ($product['on_sale'])
        <p><strong>Ce produit est actuellement en promotion !</strong></p>
    @endif

    <p><a href="{{ route('products.index') }}">Retour Ã la liste des produits</a></p>
</x-layouts.company>