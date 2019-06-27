<?php 
	class User
	{
		private $con, $user_info;
		public function __construct($con, $username)
		{
			$this->con = $con;
			$query = $this->con->prepare("SELECT * FROM user WHERE username = :username");
			$query->bindParam(":username",$username);
			$query->execute();

			$this->user_info = $query->fetch(PDO::FETCH_ASSOC);
		}

		public static function isloggedIn()
		{
			return $_SESSION['username'];
		}

		public function getUserId()
		{
			return $this->user_info['id'];
		}

		public function getUsername()
		{
			return $this->user_info['username'];
		}

		public function getEmail()
		{
			return $this->user_info['email'];
		}

		public function getRecoveryEmail()
		{
			return $this->user_info['recovery_email'];
		}

		public function getPhone_number()
		{
			return $this->user_info['phone_number'];
		}

		public function getDate()
		{
			return $this->user_info['date'];
		}

	}
 ?>