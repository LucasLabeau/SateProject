@extends('layouts.app')

@section('content')
  <div class="container" id="productosMain">
    <h1>Lo pediste, lo querías, ¡ahora lo tenés!</h1> <br>
    <h4>Los mejores productos al mejor precio, todo eso en SateProject</h4>
    <section class = "row justify-content-center">
      <article class="card">

    <ul>
      @forelse ($products as $product)
        <li>
          <div class="card-body">
          <h4>{{ $product["name"] }}</h4>
          <p><i>{{ $product["description"] }}</i></p>
          <p>${{ $product["price"]}}</p>
          <img src="{{ $product["image"]}}" alt="imagen del imperdible producto">
          <form class="form-group" action="{{ route('order') }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-group" style="display:none;">
              <input type="text" name= "product_id" value="{{$product["id"]}}">
          </div>
          <div class="form-group">
            <label for="quantity">Cantidad: </label>
            <input type="number" name="quantity" value="">
          </div>
          <div class="form-group">
            <label for="address">Dirección: </label>
            <input type="text" name="address" value="">
          </div>
          <div class="form-group">
            <button type="submit" name="button">Comprar</button>
          </div>
        </form>
      </div>
    </li>
      @empty

      @endforelse
      {{$products->links()}}
    </ul>

    </article>
    </section>
  </div>
