<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My php app</title>
    
    <!-- Bootstrap Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="./statics/css/main-styles.css">   
    
    <!-- Bootstrap Scripts -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- jQuery CDN -->
    <!-- <script defer src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" defer></script>
    <script defer src="./statics/js/main.js"></script>


    <!-- js script -->
    <!-- Identifying the path of the js script to load them in the index file  -->
    <!-- Queries can be passed to routes. Here we validate that if a query is passed to the route that it be eliminated -->

    <!-- Saving the URI where we are. parse_url we pass a url to it and it extracts the different components that it has (REQUEST_URI). PHP_URL_PATH , this function extracts only the path -->
    <?php $uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH); ?>
      
  
    <!-- Validation of the uri to load so that a script is executed or not in a certain route   -->
    <?php
      // if ($uri == "/php_course/Projects/MyApp/" || $uri == "php_course/Projects/MyApp/index.php") :
      if ($uri == "/localhost/php_course/Projects/MyApp/contacts.php" || $uri == "/opt/lampp/htdocs/php_course/Projects/MyApp/home.php") :
    ?>
      <script defer src="../statics/js/welcome.js"></script>
    <?php endif ?>
    
</head>

<body>
    <!-- Including the Navbar -->
   
    <?php require "views/layouts/navbar.php" ?>
    
  <!-- Main Start Section -->
  <main>



