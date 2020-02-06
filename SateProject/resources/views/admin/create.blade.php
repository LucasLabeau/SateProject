@extends('layouts.app')

<body  style="background-image: url("../img/bgi1.jpg")">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                <h2>Agregar producto</h2>

                @include('admin.form', [
                  'method' => 'post',
                  'url' => '/products',
                ])
              </div>
          </div>
      </div>
  </div>
</body>
