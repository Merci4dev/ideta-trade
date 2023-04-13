<?php
    
    # Convert the url params into a variable to allow to make request to to the DB. Convert The path values into an array. The indexs will be created through the /
    #==================================================
    $routesToArray = explode("/", $_SERVER['REQUEST_URI']);
    
    # Clean the path values to remove empty values. This returns just the valud after the first /
    $routesToArray = array_filter($routesToArray);
    
    #  # condition when there are not request to the api. This determine if the path values are empty, or there are more path values aftet the main domain. If there are no path values aftet the main domain, render the homepage.
    #==================================================
    if(count($routesToArray) == 0){
        
        require "views/home.php";
        return;     
    }

    // render the signup page
    if(count($routesToArray) == 2 && $routesToArray[1] == "user" && $routesToArray[2] == "signup.php"){
        
        require "views/user/signup.php";
        
        return;     
    
    }


    # Handle the request mehtods. Detect wich kind of request method we are ussing 
    #==================================================
    $requetMethod = $_SERVER['REQUEST_METHOD'];

    if(count($routesToArray) == 1 && isset($requetMethod)){
        # Defining the table variable to be used in oll the request. This generate an array with the information that the table variable is capturing. Here we separate in index what comes to the left side or the right side of the url having as reference the ? sign
        $table = explode("?", $routesToArray[1])[0]; 
        // $table = $routesToArray;
      

        # GET Method 
        if($requetMethod == "GET"){

            // $json = array(
            //     'status' => 200,
            //     'results' => 'GET Request'
            // );
            // echo json_encode($json, http_response_code($json['status']));
    
            include "services/get.php";
        }

        # POST Method
        if($requetMethod == "POST"){

            include "services/post.php";
        }

        /*PUT Method */
        if($requetMethod == "PUT"){
            include "services/put.php";
        }
        
        /*DELETE Method */
        if($requetMethod == "DELETE"){
            
            include "services/delete.php";
        }

    }
  



?>