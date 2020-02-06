
<form action="{{ url($url) }}" method="post">
    @csrf

    @method( $method )

    <div>
        <label>Nombre</label>
        <input
            type="text" name="name"
            value="{{ old('name', $product->name ?? '')  }}"> <br>
            <label>Description</label>
            <input
                type="text" name="description"
                value="{{ old('description', $product->description ?? '')}}"> <br>
                <label>Price</label>
                <input
                    type="text" name="price"
                    value="{{ old('price', $product->price ?? '')}}"> <br>


           </div>
           <button type="submit">Enviar</button>
</form>
