<?php

namespace App\controllers;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

use App\https\HttpRequest;
use App\Models\User;
use App\Models\Categorie;
use App\Models\Color;
use App\Models\Groupe;
use App\Models\Mode;
use App\Models\Product;
use Controller;

class UserController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = User::where('id' , $id)->get(); 
        echo json_encode($user);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(HttpRequest $request){
        $user = $_POST;
        $validateUser = User::where('email' , $user['email'])->get();
            if(count($validateUser)=== 0){
                $isUser = User::create([
                    "email" => $user['email'],
                    "password" => password_hash($user['password'] , PASSWORD_DEFAULT),
                    "firstname" => $user['firstname'],
                    "lastname" => $user['lastname'],
                    "fullname" => $user['firstname'].' '.$user['lastname'],
                    "birthday" => $user['birthday'],
                    "tel" => $user['tel'],
                ]);
                $isUser->save();

                // start login

                $isLogin = User::where('email' , $user['email'])->get();
                if($isLogin){
                    if(password_verify($user['password'] , $isLogin[0]['password'])){
                        $key = 'idriss ait haddou';
                        $payload = [
                            'iss' => 'localhost:4408',
                            'aud' => 'localhost:4408',
                            'exp' => time()+10000, // 10 minutes
                            'data' => [
                                'id' =>$isLogin[0]['id'],
                                'email' => $isLogin[0]['email'],
                            ]
                        ];
                        $jwt = JWT::encode($payload, $key, 'HS256');
        
                        echo json_encode([
                            'status' => 'inserted',
                            'jwt' => $jwt,
                            'id' => $isLogin[0]['id'],
                            'email' => $isLogin[0]['email'],
                            'message' => 'is login',
                        ]);
                        die();
        
                    }
                }
                echo json_encode([
                    'status' => 'email invalid',
                    'jwt' => '',
                    'message' => 'invalid',
                ]);

                //  end login

            }else{
                echo json_encode([
                    'status' => 'email invalid',
                    'jwt' => '',
                    'message' => 'invalid',
                ]);
            }
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(HttpRequest $request)
    {
        $user = $_POST;
        $isUser = User::where('email' , $user['email'])->get();
        if($isUser){
            if(password_verify($user['password'] , $isUser[0]['password'])){
                $key = 'idriss ait haddou';
                $payload = [
                    'iss' => 'localhost:4408',
                    'aud' => 'localhost:4408',
                    'exp' => time()+10000, // 10 minutes
                    'data' => [
                        'id' =>$isUser[0]['id'],
                        'email' => $isUser[0]['email'],
                        'role' => $isUser[0]['role'],
                    ]
                ];
                $jwt = JWT::encode($payload, $key, 'HS256');

                echo json_encode([
                    'status' => 0,
                    'jwt' => $jwt,
                    'role' => $isUser[0]['role'],
                    'id' => $isUser[0]['id'],
                    'email' => $isUser[0]['email'],
                    'message' => 'is login',
                ]);
                die();

            }
        }
        echo json_encode([
            'status' => 0,
            'jwt' => '',
            'message' => 'invalid',
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(HttpRequest $request , $id)
    {
        $userUpdate = $_POST;
        $user = User::find($id);
        $user->update([
             "email" => $userUpdate['email'],
             "firstname" => $userUpdate['firstname'],
             "lastname" => $userUpdate['lastname'],
             "fullname" => $userUpdate['firstname'].' '.$userUpdate['lastname'],
             "birthday" => $userUpdate['birthday'],
             "tel" => $userUpdate['tel'],
             "ville" => $userUpdate['ville'],
             "adress" => $userUpdate['adress'],
         ]);
         if($user->save()){
             echo json_encode(['message' => 'updated']);
             die();
            }else{
             echo json_encode(['message' => 'error']);
             die();
         }
         
    }
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPassword(HttpRequest $request , $id)
    {
        $userPassword = $_POST;
        $user = User::find($id);
            if(password_verify($userPassword['new_password'] , $user['password'])){
                echo json_encode(['validate' => true]);
            }else{
                echo json_encode(['validate' => false]);
            }
         
    }
    

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(HttpRequest $request , $id)
    {
        $passwordUpdate = $_POST;
        $user = User::find($id);
        $user->update([
             "password" => password_hash($passwordUpdate['new_password'] , PASSWORD_DEFAULT),
         ]);
         $user->save();
         
         echo json_encode(['message' => 'password updated']);
         
    }


}


