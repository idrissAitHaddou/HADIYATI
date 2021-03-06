<?php

namespace App\controllers;

use App\https\HttpRequest;
use App\Models\Product;
use App\Models\Citie;
use App\Models\Image;
use App\Models\Mode;
use App\Models\Command;
use App\Models\Productscommand;
use App\Models\Like;
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
        $products = [];
        $productsCommand = Productscommand::orderBy('quantity' , 'DESC')->take(8)->get();
        foreach($productsCommand as $productC){
            $pro = Product::where('id' , $productC->id_product)->get();
            $images = Image::where('id_produit' , '=' , $productC->id_product)->get();
            $pro['images'] = $images; 
            $checkLike = Like::where('id_produit' , $productC->id_product)->get();
            $pro['numberLikes'] = count($checkLike); 
            $products[] = $pro;
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
            $checkLike = Like::where('id_produit' , $product->id)->get();
            $product['numberLikes'] = count($checkLike); 
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
            $checkLike = Like::where('id_produit' , $product->id)->get();
            $product['numberLikes'] = count($checkLike); 
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
        Command::create([
            "id_user" => $command['id_user_login'],
            "total" => $command['tottalPrice'],
            "tel" => $command['tel'],
            "adress" => $command['adress'],
            "ville" => $command['ville'],
        ]);
     
        
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


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addProduct(HttpRequest $request){
        $product = $_POST;
        $images = explode(',' , $product['image']);
        Product::create([
            "name" => $product['name'],
            "price" => $product['price'],
            "id_color" => $product['color'],
            "background" => $product['background'],
            "descritpion" => $product['description'],
            "id_categorie" => $product['categorie'],
            "id_group" => $product['type'],
            "id_country_mode" => $product['mode'],
        ]);
        $productId = Product::orderBy('id' , 'DESC')->first();

        for($i=0 ; $i<count($images) ; $i++){
            Image::create([
                "id_produit" => $productId['id'],
                "src" => $images[$i],
            ]);
        }

        echo json_encode(['message' => 'updated']);
     }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkLikeProduct(HttpRequest $request){
        $params = $_POST;
        $isLike = Like::where('id_produit' , $params['id_produit'])->where('id_user' , $params['id_user'])->first();
        if(!$isLike){
            Like::create([
                "id_produit" => $params['id_produit'],
                "id_user" => $params['id_user'],
            ]);
    
            echo json_encode(['message' => 'add']);
            die();
        }else{
            $isLike->destroy($isLike->id);
            echo json_encode(['message' => 'delete']);
            die();
        }
        echo json_encode(['message' => 'error']);

     }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLikeProduct($id){
        $checkLike = Like::where('id_produit' , $id)->get();
        if(count($checkLike)>0){
            echo json_encode(['message' => true , 'numberLikes' => count($checkLike)]);
            die();
        }else{
            echo json_encode(['message' => false , 'numberLikes' => 0]);
            die();
        }

     }

}


