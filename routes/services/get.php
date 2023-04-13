<?php

    require_once "controllers/get.controller.php";
    require_once "sql/connection.php";

    $table = $routesToArray[1];

    # Set the select variables. if there is not a select variable defined at the url, select will habe the default value. * :
    // $select = $_GET['select'] ?? "*";
    
    # [x] 1 
    // $response = GetController::getData($table);
    $response = new GetController();
    $response -> getData($table);







    // echo "ok  get";
    // require "views/users/signup.php";

    // $requestMethod = $_SERVER['REQUEST_METHOD'];
    // echo '<pre>'; print_r($requestMethod); echo '</pre>';

    // if(count($routesToArray) == 1 && isset( $request_mathod ))

    // if(isset($_GET['signup.php'])){
    // }
    // echo "signup form";
    
?>