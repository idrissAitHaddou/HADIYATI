<?php

namespace App\controllers;

use App\https\HttpRequest;
use App\Models\Categorie;
use App\Models\Color;
use App\Models\Groupe;
use App\Models\Mode;
use App\Models\Product;
use Controller;

class CategorieController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        echo json_encode($categories);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bestCategories()
    {
        $categories = Categorie::take(6)->get();
        echo json_encode($categories);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSearchDetaills(){
        $res = [];

        $categories = Categorie::all();
        $res['categories'] = $categories;

        $colors = Color::all();
        $res['colors'] = $colors;

        $groupe = Groupe::all();
        $res['groupes'] = $groupe;

        $modes = Mode::all();
        $res['modes'] = $modes;

        $maxproduct = Product::max('price');
        $res['maxPrice'] = $maxproduct;

        $minproduct = Product::min('price');
        $res['minPrice'] = $minproduct;

        echo json_encode($res);
    }


}


