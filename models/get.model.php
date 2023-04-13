<?php

    require_once "sql/connection.php";

    class GetModel {
        # Methos which handle all get request
        #===================================================
        static public function getData($table){
            try{

            # sql get sentence to return all the data. The $select variable make possible to use the * for all the data or just any columns
            $sql = "SELECT * FROM $table";
            
            # [x] 3
            # prepare the sql request statement
            $stmt = Connection::connect() -> prepare($sql);

            # Error handler session
            #===================================================
            # execute the statement
            $stmt->execute();
            
            # return all the data without the index number
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

            }catch(PDOException $e){
                echo "DataFilter: Error: " . $e->getMessage();
                //  return null;
            }
        } 
    }

?>