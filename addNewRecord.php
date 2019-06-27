<?php require_once 'common/header.php'; ?>

<?php 

	if (isset($_POST['submit'])) 
	{

		$user_id = $userLoggedIn->getUserId();

		$name = $_POST['name'];
		$mg = $_POST['mg'];
		$description = $_POST['description'];
		$for = $_POST['for'];
		$time = $_POST['time'];
		$date = $_POST['date'];
		$doctor_name = $_POST['doctor_name'];
		
		// $image = $_FILES['uploadFile']['name'];
		// $tmp_image = $_FILES['uploadFile']['tmp_name'];
		echo "sended";

		// $name_array = $_FILES['uploadFile']['name'];
		// 		    $tmp_name_array = $_FILES['uploadFile']['tmp_name'];
		// 		    $type_array = $_FILES['uploadFile']['type'];
		// 		    $size_array = $_FILES['uploadFile']['size'];
		// 		    $error_array = $_FILES['uploadFile']['error'];

		// 		       for($i = 0; $i < count($tmp_name_array); $i++)
		// 		    {
		// 		        if(move_uploaded_file($tmp_name_array[$i], "images/medicineImage/". $name. "-" .$name_array[$i]))
		// 		        { 
		// 		            $filepath = "images/medicineImage/". $name. "-" .$name_array[$i];
		// 		        }
		// 		    }
		// 	echo $filepath;	
		

		$query = $con->prepare("INSERT INTO `medicine`(`user_id`, `picture`, `medicine_name`, `mg`,`description`, `for`, `timing`, `date_given`, `doctor`, `date_added`)VALUES (:user_id,'pic',:name,:mg,:description,:for,:timing,:date_given,:doctor,NOW())");
		$query->bindParam(":user_id",$user_id);
		$query->bindParam(":name",$name);
		$query->bindParam(":mg",$mg);
		$query->bindParam(":description",$description);
		$query->bindParam(":for",$for);
		$query->bindParam(":timing",$time);
		$query->bindParam(":date_given",$date);
		$query->bindParam(":doctor",$doctor_name);

		$query->execute();

		if ($query) 
		{
			header("location:index");
		}
		else
		{
			echo "fail";
		}


		}


 ?>

<div class="form-area">

<span class="title">Add a new record</span>


	<form method="POST">
		<input type="file" name="uploadFile" id="picture"  accept='image/*'>
		<input type="text" placeholder="Medicine Name" value="" name="name">
		<input type="text" placeholder="Mg" value="" name="mg">
		<textarea placeholder="Description" value="" name="description"></textarea>
		<input type="text" placeholder="For" value="" name="for">
		<input type="text" placeholder="Timming" value="" name="time">
		<input type="text" placeholder="Date Given" value="" name="date">
		<input type="text" placeholder="Doctor Name" value="" name="doctor_name">
		<input type="submit" value="Add New Record" name="submit">
	</form>
</div>

 <?php require_once 'common/footer.php'; ?>