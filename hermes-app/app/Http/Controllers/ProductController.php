<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;


class ProductController extends Controller
{
    private $USER_TYPE_ADMIN = "1";
    private $USER_TYPE_MODERATOR = "2";
    private $USER_TYPE_SIMPLE_USER = "3";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('productonlyoncompany', [
            'only' => [
                'show',
                'edit'
            ]
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentCompanyId = auth::user()->company->id;
        $currentUser = auth::user();
        $products = null;
        switch ($currentUser->role_id) {
            case ($this->USER_TYPE_ADMIN):
                $products = Product::all();
                return view('products.list', compact('products', 'currentUser'));

            default:
                $products = Product::where('company_id', $currentCompanyId)->get();
                return view('products.list', compact('products', 'currentUser'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product($request->all());
        $product->company_id = auth::user()->company->id;
        $product->image = '';

        $product->save();

        //$message = $id == null ? 'Contacto creado exitosamente' : 'Contacto editado exitosamente';

        $message = 'Producto creado exitosamente';

        return redirect('products')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product =  Product::findOrFail($id);
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        $product->company_id = auth::user()->company->id;
        $product->image = '';

        $product->save();

        $message = 'Producto actualizado exitosamente';

        return redirect('products')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productToDelete = Product::findOrFail($id);
        $productToDelete->delete();
        return redirect('products')->with('message', 'Producto ' . $productToDelete->name . ' eliminado.');
    }
}
