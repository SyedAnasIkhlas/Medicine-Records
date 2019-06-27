<?php 
		class TableGenerator
		{

			public static function create($dataTable)
			{

		 		$medicine_name =  $dataTable->getMedicineName();
		 		$medicine_id =  $dataTable->getMedicineId();
		 		$medicine_picture =  $dataTable->getMedicinePicture();
		 		$medicine_mg =  $dataTable->getMg();
		 		$medicine_description =  $dataTable->getDescription();
		 		$medicine_for =  $dataTable->getFor();
		 		$medicine_timing =  $dataTable->getTiming();
		 		$medicine_date_given =  $dataTable->getDateGiven();
		 		$doctor_name =  $dataTable->getDoctorName();
		 		$medicine_added =  $dataTable->getDateAdded();


		 		return"
		 		<div class='data-tatble-container'>
	  	
					<table>
					  <tr>
					    <th>S/N</th>
					    <th>Medicine Name</th>
					    <th>Mg</th>
					    <th>Description</th>
					    <th>For</th>
					    <th>Timings</th>
					    <th>Date Given</th>
					    <th>Doctor</th>
					    <th>Date Added</th>
					  </tr>




					  <tr>
					    <td>$medicine_id</td>
					    <td>$medicine_name</td>
					    <td>$medicine_mg</td>
					    <td>$medicine_description</td>
					    <td>$medicine_for</td>
					    <td>$medicine_timing</td>
					    <td>$medicine_date_given</td>
					    <td>$doctor_name</td>
					    <td>$medicine_added</td>
					  </tr>
					  
					</table>

	  			</div>";


			}



			


		}
		
 ?>