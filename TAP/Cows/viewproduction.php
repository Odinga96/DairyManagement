<?php
// This file is used to perform the functionality of creating tables from the SQLiteDatabase
    // It enables us to view
		//   1. The milk Production
		// 	 2. The calving rate.
		// 	 3. The employee data.
		//
		// 	This table is subject to expansion incase the database expands
		//
class ViewData extends DBconnect
{

	function __construct()
	{
	}

   // This function loads the data on milk production
	public  function loadDairy()
	{
		$query="SELECT * FROM TAP_FARM.producers LIMIT 30";
		$run = $this->connect()->query($query);

		echo "<table class='table table-striped table-hover table-condensed
		        table-bordered table-sm ' id='sorttable'>
 	<thead class='thead-dark'>
	<tr>
 		<th scope='col'>ID</th>
 		<th scope='col'>Date of calving</th>
 		<th scope='col'>No of calves</th>
 		<th scope='col'>Breed</th>
	</tr>
 	</thead>
 	<tbody>";

		while ($cow = $run->FETCH()) {
			$id=$cow['C_ID'];
			$date_calved=$cow['D.O.C'];
			$calves=$cow['No_of_calves'];
			$Breed=$cow['Breed'];

			echo
			"
 		<tr>
 			<td>".$id."</td>
 			<td>".$date_calved."</td>
 			<td>".$calves."</td>
 			<td>".$Breed."</td>
 		</tr>
			";
		}

		echo "
			</tbody>
          </table>";

	}


// Function to load the calving rate .
//       Shows:
// 			1. the Cow
// 			2. the number of calves
// 			3. the date of calving
//

	public  function loadProductionRecord($from, $to)
	{
		$query="SELECT * FROM TAP_FARM.milkProduction
		        WHERE date_milked BETWEEN cast('$from' as date)
						AND cast('$to' as date)LIMIT 30";

		$run = $this->connect()->query($query);
		echo "<table class='table table-striped table-sm table-hover  table-condensed
		       table-bordered' id='sorttable'>
 	<thead class='thead-dark'>
	<tr>
 		<th>ID</th>
 		<th>Date of milking</th>
 		<th>morning</th>
 		<th>evening</th>
	</tr>
 	</thead>
 	<tbody>";

		while ($cow = $run->FETCH()) {
			$id=$cow['C_ID'];
			$date_of_milking=$cow['date_milked'];
			$morning_production=$cow['morning'];
			$evening_production=$cow['evening'];

			echo
			"
 		<tr>
 			<td>".$id."</td>
 			<td>".$date_of_milking."</td>
 			<td>".$morning_production."</td>
 			<td>".$evening_production."</td>
 		</tr>
			";
		}

		echo "
			</tbody>
          </table>";

	}

//
// This function is used to view the employee information
//       this information is directly loaded from the database.....it includes
// 			   1. Name
// 				 2. category
// 				 3. Staff no
//
// This function as well implements buttons that will be used to update employee information
// or delete the employee from the database

    	public  function viewEmployees()
	{
		$query="SELECT * FROM TAP_FARM.employees LIMIT 30";
		$run = $this->connect()->query($query);

		echo "<table class='table  table-striped table-hover table-sm table-bordered ' id='sorttable'>
 	<thead class='thead-dark'>
 		   <tr>
			  <th>Staff No</th>
				<th>Name </th>
			  <th>Category No</th>
				<th>Update </th>
			  <th>Delete </th>
			 </tr>
  	</thead>
 	<tbody>";

		while ($employee = $run->FETCH()) {
			$id=$employee['Emp_ID'];
			$first_Name=$employee['F_Name'];
			$second_Name=$employee['S_Name'];
			$category=$employee['category'];

			echo
			"
 		<tr>
 			<td>".$id."</td>
 			<td>".$first_Name."  ".$second_Name."</td>
 			<td>".$category."</td>
 			<td><input class='btn btn-info' type='submit' name='login' value='update' style='background-color: #4CAF50'>
 			<td><input class='btn btn-info' type='submit' name='login' value='delete X' style='background-color: #C62828'>

 </td>
 		</tr>
			";
		}

		echo "
			</tbody>
          </table>";

	}

}
 ?>
