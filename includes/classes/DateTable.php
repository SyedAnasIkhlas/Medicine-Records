<?php 
	class DataTable
	{
		private $con, $info;
		public function __construct($con, $userLoggedIn)
		{
			$user_id = $userLoggedIn->getUserId();
			$this->con = $con;
			$query = $this->con->prepare("SELECT * FROM medicine WHERE user_id = :user_id");
			$query->bindParam(":user_id",$user_id);
			$query->execute();

			
			$this->info = $query->fetch(PDO::FETCH_ASSOC);
		}

		public function getMedicineId()
		{
			return $this->info['id'];
		}

		public function getUserId()
		{
			return $this->info['user_id'];
		}

		public function getMedicinePicture()
		{
			return $this->info['picture'];
		}

		public function getMedicineName()
		{
			return $this->info['medicine_name'];
		}

		public function getMg()
		{
			return $this->info['mg'];
		}

		public function getDescription()
		{
			return $this->info['description'];
		}

		public function getFor()
		{
			return $this->info['for'];
		}

		public function getTiming()
		{
			return $this->info['timing'];
		}
		public function getDateGiven()
		{
			return $this->info['date_given'];
		}
		public function getDoctorName()
		{
			return $this->info['doctor'];
		}

		public function getDateAdded()
		{
			return $this->info['date_added'];
		}





	}

 ?>