<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Boolean;

class ProductController extends Controller
{
    //
    public function index()
    {
        return Product::all();
    }

    public function show($id)
    {
        return Product::find($id);
    }

    public function store(Request $request)
    {
        return Product::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Product = Product::findOrFail($id);
        $Product->update($request->all());

        return $Product;
    }

    public function delete(Request $request, $id)
    {
        $Product = Product::findOrFail($id);
        $Product->delete();

        return 204;
    }

    public function findByName(string $value)
    {
        // echo $value ;
        $allProducts = Product::all() ;
        foreach ($allProducts as $product) {
            # code...
            if($product->name == $value) {
                return $product ;
            }
        }
    }

    public function findByParticularity(string $value)
    {
        // echo $value ;
        $allProducts = Product::all() ;
        foreach ($allProducts as $product) {
            # code...
            if($product->particularity == $value) {
                return $product ;
            }
        }
    }

    public function findByCategoryName(string $value)
    {
        // echo $value ;
        $allProducts = Product::all() ;
        $productList = array() ;
        foreach ($allProducts as $product) {
            # code...
            if(str_contains($product->category_name, $value)) {
                array_push($productList, $product);
            }
        }
        return $productList ;

    }

    public function findByNameContains(string $value)
    {
        // echo $value ;
        $allProducts = Product::all() ;
        $productList = array() ;
        foreach ($allProducts as $product) {
            # code...
            if(str_contains($product->name, $value)) {
                array_push($productList, $product);
            }
        }
        return $productList ;
    }

    public function findByPopulary(Boolean $value)
    {
        // echo $value ;
        $allProducts = Product::all() ;
        $productList = array() ;
        foreach ($allProducts as $product) {
            # code...
            if($product->populary == true) {
                array_push($productList, $product);
            }
        }
        return $productList ;
    }

    public function findByNewProduct(Boolean $value)
    {
        // echo $value ;
        $allProducts = Product::all() ;
        $productList = array() ;
        foreach ($allProducts as $product) {
            # code...
            if($product->new_product == true) {
                array_push($productList, $product);
            }
        }
        return $productList ;
    }


}
