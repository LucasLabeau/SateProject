<h1>Crear producto</h1>

@include('admin.products.form', [
    'method' => 'post',
    'url' => '/products',
])
