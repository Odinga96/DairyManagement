<?php
    class DBconnect
    {
    	private $servername;
    	private $user_Name;
    	private $password;
    	private $database_Name;
    	private $charset;
    	
      protected function connect()
      {
      	$this->servername="127.0.0.1";
      	$this->user_Name="root";
      	$this->password="";
      	$this->database_Name="TAP FARM";
      	$this->charset="utf8mb4";

      	   try {
      	   	$dsn="mysql:host=".$this->servername.";dbname=".$this->database_Name.";charset=".$this->charset;
      	   	$pdo=new PDO($dsn,$this->user_Name,$this->password);
      	   	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      	   	return $pdo;   

      	   } catch (Exception $e) {
      	   	 echo "Could not connect ".$e->getMessage();
      	   }
      }


  protected function itemExists($Query, $Primary_Key){
        //This function is used to check if user is already in the database
        $run_query=$this->connect()->prepare($Query);
        $run_query->execute([$Primary_Key]);
        $row=$run_query->rowCount();
           if ($row>0)
            return true;
            else
              return false;
      } 


  protected function register_item($Query, $Value,$Redirectory)
          {
                    $run_query=$this->connect()->prepare($Query);

                    if($run_query->execute())
                      {
                        echo "<script>alert('You sucessfylly added  ".$Value."')</script>";
                        echo "<script>window.open('".$Redirectory."','_self')</script>";
                      }else
                      echo "<script>alert('Connection problem')</script>";
                    
          }
    }  

?>