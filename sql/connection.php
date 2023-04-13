<?php

    # Setting the  enviroment variable
    require __DIR__.'/../vendor/autoload.php';
    use Dotenv\Dotenv;
    $dotenv = Dotenv::createImmutable(__DIR__ . '/..');
    $dotenv->load();


    # Handle the database connection
    #============================================
    class Connection {
        
        # Counter for the database connection
        private static $counter = 0;

        # Database Info
        # ==========================================        
        static public function infoDatabase () {

            $infoDB = array(
                // "host" => "localhost",
                // "database" =>  "i_trade_db_01",
                // "user" =>  "root",
                // "password" =>  "",
                
                "host" => $_ENV["DB_HOST"],
                "database" => $_ENV["DB_NAME"],
                "user" => $_ENV["DB_USER"],
                "password" => $_ENV["DB_PASS"],
            );

            return $infoDB;
        }


        # Database connection 
        #============================================
        static public function connect(){

            # Check if the database connection has been established
            self::$counter++;

            try {
                $link = new PDO(
                    "mysql:host=localhost;dbname=" . Connection::infoDatabase()["database"],
                    Connection::infoDatabase()["user"],
                    Connection::infoDatabase()["password"]
                );

                $link -> SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $link -> exec("set names utf8");

                echo "Database Connection Established: ". Connection::infoDatabase()["database"]. "\n";

            } catch (PDOException $e) {

                echo "Error: " . $e->getMessage();
                return null;  

                # Register the error at the error file
                error_log("Error: " . $e->getMessage());

                # Theow an geneic exeption
                throw new Exception("Error al conectarse a la base de datos"); 

            }

            # Set the database connection counter
            Connection::getRequestCount();
            
            return $link;
        }


        # This method returns the total number of times a connection to the database has been established.
        #============================================
        static public function getRequestCount(){
           
            print_r("DB Connect => :". self::$counter);
            return self::$counter;
        }


        # Metho  to close the database connection
        #============================================
        static public function close($connection){
            echo '<pre>'; print_r($connection); echo '</pre>';
            
            print_r("<br /> <br />"."DB Connection Closed");
            $connection = null;
        }


        # Validation of the existence of a table in the database. This method returns all the columns that belong to a table
        #============================================
        static public function getColumnsData($table, $columns){

            $database = Connection::infoDatabase()["database"];

            #Returns a connection to the DB and a selection of all the columns that are part of the table that is passed as a parameter of the database to which we are connecting
            $validate = Connection::connect()->query("SELECT COLUMN_NAME AS item FROM information_schema.columns WHERE table_schema = '$database' AND table_name = '$table'") -> fetchAll(PDO::FETCH_ASSOC);

            # if validate is empty is because the table do not exist
            IF(empty($validate)){
                return null;
            
            }else{

                # Global columns request for the * at the 0 index
                if($columns[0] == "*"){

                    # Delete the *
                    array_shift($columns);
                }

                # If validate is no empty, validate the columns names and columns existences.
                $sum = 0;

                foreach($validate as $key => $value){
                    $sum += in_array($value -> item, $columns);
                }

                return $sum == count($columns) ? $validate : null;
            }
        }






    }



?>