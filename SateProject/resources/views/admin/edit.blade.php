<h1>Editar producto</h1>

@include('admin.products.form', [
    'method' => 'patch',
    'url' => '/products/' . $product->id
])
