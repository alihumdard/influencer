@if($products->isEmpty())
    <p>No products found.</p>
@else
    <ul class="list-group">
        @foreach($products as $product)
            <li class="list-group-item product-item" data-title="{{ $product->title }}" data-id="{{ $product->id }}" onclick="getProduct(this)">{{ $product->title }}</li>
        @endforeach
    </ul>
@endif
