<?php 

    require_once "models/get.model.php";
    require_once "sql/connection.php";
  
   
    class GetController{
        
        # Method to convert the requests response into json format. Here we build the structure of the json we will recive from the get.php file request.
        #==================================================
        public function fncResponse($response){

            if(!empty($response)){
                $json = array(
                    'status' => 200,
                    'total' => count($response),
                    'results' => $response
                );
                
            }else{
                $json = array(
                    'status' => 404,
                    'results' => 'Not Found'
                );
            }
            echo json_encode($json, http_response_code($json['status']));
        }
    

        # This method recieve the table from the get.php file and send it to the model. Retour all the data
        #===================================================
        # [x] 2
        static public function getData($table){
            try {
            
                # [x] 4
                # instance from the GetModel class and access to the getData method
                $response = GetModel::getData($table);
    
                # controller response
                $return = new GetController();
                $return->fncResponse($response);
                Connection::close($response);
                
            } catch (PDOException $e) {
                echo "Cont-getData: Error: " . $e->getMessage();
            }
        
        }
    
        

    
    
    
    
    
    
    
    }
        
?>