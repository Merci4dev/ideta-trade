<?php
    require_once "sql/connection.php";

    # ====================================================
    # Error handler from the browser
    ini_set("display_errors", 1);
    # To create the error file on this project
    ini_set("log_errors", 1);
    # Path where to save the error file
    ini_set("error_log", "/home/merci4dev/Documents/MyCode/Private/php-code/idea-trade/php_error.log");
    
    # display the php version
    // phpinfo();

    # ====================================================
    # Database connection 
    // require "models/connection.php";
    //[x] 1r $conn = Connection::infoDatabase()["database"];

    // if(!$conn){
    //     die("Error al conectar con la base de datos.");
    // }
    
    # Cerrar la conexión
    // sleep(3);
    // $conn = null;

    # Testing the database
    // echo '<pre>'; print_r(Connection::infoDatabase()["database"]); echo '</pre>';
    // echo '<pre>'; print_r(Connection::connect()); echo '</pre>';
    // return;
    

    #==================================================
    # Requiring the routes.controllers.php file and make an instances of his class to  execute the index method. This convert the routes.php as the main path
    require "controllers/routes.controller.php";

    $index = new RoutesController();
    $index->index();
?>