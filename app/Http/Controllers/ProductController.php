<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = [];

        //Buscar todos produtos do banco
        $listProduct = \App\Models\Product::all();
        $data['list'] = $listProduct;

        return view('home', $data);
    }

    public function category($idCategory = 0)
    {
        $data = [];
        //Select * from category
        $listCategory = Category::all();

        //Select * from product
        $queryProduct = Product::limit(4);

        if($idCategory != 0)
        {
            //Where category_id = idCategory
            $queryProduct->where('category_id', $idCategory);
        }

        $listProduct = $queryProduct->get();

        $data['list'] = $listProduct;
        $data['listCategory'] = $listCategory;
        $data['idCategory'] = $idCategory;

        return view('category', $data);
    }

    public function cartAdd($idProduct = 0, Request $request)
    {
        //Buscar o produto pelo ID
        $prod = Product::find($idProduct);

        if($prod)
        {
            //Encontrou um produto

            //Buscar da sessão o carrinho atual
            $cart = session('cart', []);

            array_push($cart, $prod);
            session(['cart' => $cart]);
        }

        return redirect()->route('home');
    }

    public function seeCart()
    {
        $cart = session('cart', []);
        $data = ['cart' => $cart];

        return view('cart', $data);
    }

    public function deleteItemCart($indice, Request $request)
    {
        $cart = session('cart', []);
        if(isset($cart[$indice]))
        {
            unset($cart[$indice]);
        }

        session(['cart' => $cart]);
        return redirect()->route('see.cart');

    }
}
