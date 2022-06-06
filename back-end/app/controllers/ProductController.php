<?php

namespace App\controllers;

use App\https\HttpRequest;
use App\Models\Product;
use App\Models\Citie;
use App\Models\Image;
use App\Models\Mode;
use App\Models\Command;
use App\Models\Productscommand;
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
        $products = Product::where('price' , '<' , '50')->orderBy('price' , 'ASC')->take(7)->get();
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProduct($id){
        $product = Product::where('id' , $id)->take(1)->skip(0)->get();
        foreach($product as $pro){
            $images = Image::where('id_produit' , '=' , $pro->id)->get();
            $product['images'] = $images;
            $mode = Mode::where('id' , '=' , $pro->id_country_mode)->take(1)->skip(0)->get();
            $product['mode'] = $mode;
        }
        echo json_encode($product);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCommand(HttpRequest $request){
       $command = $_POST;
       $myCommand = Command::create([
            "id_user" => $command['id_user_login'],
            "total" => $command['tottalPrice'],
            "tel" => $command['tel'],
            "adress" => $command['adress'],
            "ville" => $command['ville'],
        ]);
        $myCommand->save();
        
        echo json_encode(['status' => 'success']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addProductCommand(HttpRequest $request){
        $command = Command::orderBy('id', 'DESC')->first();
        $products = $_POST;
        Productscommand::create([
            "id_product" => $products['id_product'],
            "quantity" => $products['quantity'],
            "price" => $products['price'],
            "command_id" => $command->id,
        ]);
         
         echo json_encode(['status' => 'success']);
     }



}


