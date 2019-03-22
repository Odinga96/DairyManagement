<?php  
   include '../includes/DB_Connect.php';

   /**
    * 
    */
   class Add_new_Milking_Cow extends DBconnect
   {
   	private $cow_Id;
   	private $date_of_calving;
   	private $no_of_calves;
   	private $breed;
   	
   	function __construct($Id, $No_of_calves, $Breed)
   	{
   		$this->cow_Id=$Id;
   		$this->no_of_calves=$No_of_calves;
   		$this->breed=$Breed;
   	    $this->date_of_calving=date('Y-m-d');

// Query for checking if the cow of the specified ID exists and to add if it does not 
         $checkDb="SELECT * FROM TAP_FARM.producers WHERE C_ID=?";
         $query="INSERT INTO TAP_FARM.producers(`C_ID`,`D.O.C`,`No_of_calves`,`Breed`) VALUES('$this->cow_Id','$this->date_of_calving','$this->no_of_calves','$this->breed')";


   		if (!$this->itemExists($checkDb,$this->cow_Id))
   		      $this-> register_item($query,$this->cow_Id,"../"); 
			else
			{
			echo "<script>alert('".$this->cow_Id." already exists')</script>";
		    echo "<script>window.open('../','_self')</script>";
		    }
   	}

   }

   new Add_new_Milking_Cow("E_1235","1","African Borana");
?>