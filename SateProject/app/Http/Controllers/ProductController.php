<?php

    namespace App\Http\Controllers;

    use App\Product;
    use Illuminate\Http\Request;

    class ProductController extends Controller
    {
        public function index()
        {
          //Retorna todos los productos
            return response()->json(Product::all(),200);
        }

        public function store(Request $request)
        {
          //Introduce un nuevo producto
            $product = Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'units' => $request->units,
                'price' => $request->price,
                'image' => $request->image
            ]);

            return response()->json([
                'status' => (bool) $product,
                'data'   => $product,
                'message' => $product ? 'Producto creado!' : 'Error creando el producto'
            ]);
        }

        public function show(Product $product)
        {
          //Muestra un único producto
            return response()->json($product,200);
        }

        public function uploadFile(Request $request)
        {
          //Guarda la imagen del producto y retorna la URL
            if($request->hasFile('image')){
                $name = time()."_".$request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('images'), $name);
            }
            return response()->json(asset("images/$name"),201);
        }

        public function update(Request $request, Product $product)
        {
          //Hace un update del producto
            $status = $product->update(
                $request->only(['name', 'description', 'units', 'price', 'image'])
            );

            return response()->json([
                'status' => $status,
                'message' => $status ? 'Producto actualizado!' : 'Error actualizando el producto'
            ]);
        }

        public function updateUnits(Request $request, Product $product)
        {
          //Añade nuevas unidades al producto
            $product->units = $product->units + $request->get('units');
            $status = $product->save();

            return response()->json([
                'status' => $status,
                'message' => $status ? 'Unidades agregadas!' : 'Error agregando unidades'
            ]);
        }

        public function destroy(Product $product)
        {
          //Borra un producto
            $status = $product->delete();

            return response()->json([
                'status' => $status,
                'message' => $status ? 'Producto borrado!' : 'Error borrando el producto'
            ]);
        }
    }
