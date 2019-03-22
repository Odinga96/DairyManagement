<?php  
include '../includes/DB_Connect.php';


/**
 * 
 */
class Login  extends DBconnect
{
	private $employee_ID;
	private $password;
	
	function __construct($user, $pass_code)
	{
		/**User atributes*/
		$this->employee_ID=$user;
		$this->password=$pass_code;

		$this->validate_User();
	}

	private function validate_User()
	{
		$query="SELECT * FROM TAP_FARM.employees where  Emp_ID=?";

	    $run_query=$this->connect()->prepare($query);
	    $run_query->execute([$this->employee_ID]);

	    if ($run_query->rowCount()<1) 
	    {
	    	echo "<script>alert('Employee Id incorrect')</script>";
			echo "<script>window.open('../','_self')</script>";
	    }else
	    {

				if($row = $run_query->fetch(PDO::FETCH_ASSOC))
				{
					$dehash_Password=password_verify($this->password,$row['pass_code']);

					if($dehash_Password==false)
					{
						echo "<script>alert('Employee ID or Password Incorrect')</script>";
						echo "<script>window.open('../','_self')</script>";
					}							
					elseif($dehash_Password==true)
					{
							$_SESSION['username']=$row['F_Name']."  ".$row['S_Name'];
							// $_SESSION['image']=$row['Image'];
                             echo "<script>alert('Welcome ".$_SESSION['username']."')</script>";

							 //header(strtolower($_SESSION['username']).".php?logged in Successfully");

					}

				}
	    }
	}
}

if (isset($_POST['login']))
	new Login($_POST['ID'],$_POST['password']);
  
?>
