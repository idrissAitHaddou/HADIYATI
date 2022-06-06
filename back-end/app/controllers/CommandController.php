<?php

namespace App\controllers;

use App\https\HttpRequest;
use App\Models\Command;
use App\Models\Product;
use App\Models\Productscommand;
use App\Models\Image;


use Controller;

class CommandController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProductCommand($id)
    {
        $response = [];
        $commands = Command::where('id_user' , $id)->get();
        foreach($commands as $command){
            $products = Productscommand::orderBy('created_at' , 'DESC')->where('command_id' , $command['id'])->get();
            foreach($products as $product){
                $oneProduct = Product::where('id' , $product['id_product'])->get();
                $images = Image::where('id_produit' , $product['id_product'])->get();
                $product['name'] = $oneProduct[0]['name'];
                $product['image'] = $images[0]['src'];
                $product['state'] = $command['state'];                         
                array_push($response , $product);
            }
        }
        echo json_encode($response);
    }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Productscommand::where('id' , $id)->get();
        // $command->delete();
        foreach($products as  $product){
            if(count($products)==1){
                $commands = Command::where('id' , $product['command_id'])->get();
                foreach($commands as $command){
                    $command->destroy($command['id']);
                }
            }
            $product->destroy($product['id']);
        }
        

        echo json_encode(['status' => 'deleted']);
    }





}


