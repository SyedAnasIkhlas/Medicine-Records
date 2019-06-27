<?php require_once 'common/header.php'; ?>

<?php 
	if (isset($_SESSION['notSignIn'])) 
	{
	?>

	<div class="signin-message">
		<span class="promotion-message">
			Keep track of all your Medicines
		</span>

		<div class="sign-button">
			<button class="button btn-green"><a href="signIn">SignIn</a></button>
			<button class="button btn-blue"><a href="signUp">SignUp</a></button>
		</div>
	</div>

	<?php 
	}
	?>

	<?php 


	 ?>
	 <?php 
	 		$dataTable = new DataTable($con, $userLoggedIn);
	 		$table = TableGenerator::create($dataTable);
	 		echo $table;

	  ?>



	 





 <?php require_once 'common/footer.php'; ?>