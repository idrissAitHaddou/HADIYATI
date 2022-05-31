<?php

namespace App\controllers;

use App\https\HttpRequest;
use App\Models\Product;
use App\Models\Citie;
use App\Models\Image;
use Controller;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        foreach($products as $product){
            $images = Image::where('id_produit' , '=' , $product->id)->get();
            $product['images'] = $images;

            $product['totelProducts']=count($products);
        }
        echo json_encode($products);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRichProducts()
    {
        $products = Product::orderBy('price' , 'DESC')->take(8)->get();
        foreach($products as $product){
            $images = Image::where('id_produit' , '=' , $product->id)->get();
            $product['images'] = $images;
        }
        echo json_encode($products);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCheapProducts()
    {
        $products = Product::where('price' , '<' , '50')->orderBy('price' , 'ASC')->take(8)->get();
        foreach($products as $product){
            $images = Image::where('id_produit' , '=' , $product->id)->get();
            $product['images'] = $images;
        }
        echo json_encode($products);
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCities(){
        $cities = Citie::all();
        echo json_encode($cities);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLastProducts(){
        $products = Product::orderBy('id' , 'DESC')->take(6)->get();
        foreach($products as $product){
            $images = Image::where('id_produit' , '=' , $product->id)->get();
            $product['images'] = $images;
        }
        echo json_encode($products);
    }





}


