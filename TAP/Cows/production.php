<?php  
   include '../includes/DB_Connect.php';

   /**
    * 
    */
   class Milk extends DBconnect
   {
   	private $cow_Id;
   	private $date_of_milking;
   	private $period_milked;
      private $weight_of_milk;
   	
   	function __construct($Id, $Weight)
   	{
          $this->setPeriod();

   		 $this->cow_Id=$Id;
   	    $this->date_of_milking=date('Y-m-d');
          $this->weight_of_milk=$Weight;

          //Record production
          $this->recordProduce();
   	}

      private function recordProduce()
      {
         // query to  insert new record to the database
         $query="INSERT INTO TAP_FARM.milkProduction(`C_ID`,`date_milked`,`".$this->period_milked."`) VALUES('$this->cow_Id','$this->date_of_milking','$this->weight_of_milk')";

        // query Check if the milk has already been added to the database
         $check="SELECT * FROM TAP_FARM.milkProduction WHERE C_ID=? AND $this->period_milked>0";

        // Query to check of a cow is already in the database
         $checkDb="SELECT * FROM TAP_FARM.producers WHERE C_ID=?";

         if ($this->itemExists($checkDb,$this->cow_Id))
         {

                  if (!($this->itemExists($check, $this->cow_Id))) {
                     // if the data is not recorded record
                        $run_query=$this->connect()->prepare($query);
                        $run_query->execute();
                  }else{
                       echo "<script>alert(' The milk of the cow of ID ".$this->cow_Id."  has been recorded')</script>";
                       echo "<script>window.open('../','_self')</script>";
                  }
         }else
         {
             echo "<script>alert('".$this->cow_Id."is not yet added to the milking category')</script>";
             echo "<script>window.open('../','_self')</script>";
         }

      }


      private function setPeriod()
      {
            date_default_timezone_set("Africa/Nairobi");
            $period=date('H');

           if ( ($period>=6 && $period<16) || ($period>16 && $period<19) ) 
           {
               if ($period>=6 && $period<8)
                     $this->period_milked="morning";
               else
                     $this->period_milked="evening";
           }else
            {
               // If out of period
            echo "<script>alert('No records can be inserted now')</script>";
            echo "<script>window.open('../','_self')</script>";
              
            }
         
      }

   }


   new Milk("E_1235",56.96);
?>