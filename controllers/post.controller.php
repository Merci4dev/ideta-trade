<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["user_name"];
        $email = $_POST["email_user"];
        $password = $_POST["password_user"];
        echo '<pre>'; print_r(     $name); echo '</pre>';
        echo '<pre>'; print_r(     $email); echo '</pre>';
        echo '<pre>'; print_r(     $password); echo '</pre>';
        return;

   
    }

    # Class to create the methods to connect the file routes.php  as main paht
    #==================================================
        // class RoutesController{

            
            # Using the file routes.php
            #==================================================   
            // public function index() {
            //     include "routes/routes.php";
            // }
        // }
    
?>