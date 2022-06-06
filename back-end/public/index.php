<?php
header('Access-Control-Allow-Origin: *'); // * OR https://www.reddit.com/
header('Content-Type: application/json ; charset=utf-8');
//  header('Content-Type: multipart/form-data'); // ** FormData, for image uploading
header("Access-Control-Allow-Methods: GET, POST "); // POST,GET,DELETE,PUT
// header("Access-Control-Max-Age: 600");
header("Access-Control-Allow-Headers:*");

 require_once '../vendor/autoload.php';

 Route::run();
