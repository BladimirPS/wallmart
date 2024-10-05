<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index(Request $request)
    {
        $query = Producto::where('oferta', 'S');

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('descripcion', 'like', "%{$search}%")
                  ->orWhere('codigo', 'like', "%{$search}%");
            });
        }

        $productos = $query->orderBy('descripcion')->get();

        return view('productos.index', compact('productos'));
    }

   /* public function __construct()
{
    $this->middleware('auth:cliente');
}*/

}
