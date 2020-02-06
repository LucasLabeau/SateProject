@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>¡Bienvenido!</h1><br>
    <h4>Lo pediste, lo querías, ¡ahora lo tenés!</h4> <br>
    <h4>Los mejores productos al mejor precio, todo eso en SateProject</h4>

    <ul>
      @forelse ($products as $product)
        <li>
          <p>{{ $product["name"] }}</p>
          <p>{{ $product["description"] }}</p>
          <p>{{ $product["price"]}}</p>
          <p>{{ $product["image"]}}</p>
        </li>
      @empty

      @endforelse

    </ul>
  </div>
