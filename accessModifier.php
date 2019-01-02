<?php
class ForceUser{

	public function userName(){
		return $name = "Rafikul Islam Rafi";
	}

	private function userEmail(){
		return $email = "rafikulswe@gmail.com";
	}

	protected function userMobile(){
		return $mobile = "01729346959";
	}
	public function userDetails(){
		$data = array(
			'name' => $this->userName(),
			'email' => $this->userEmail(),
			'mobile' => $this->userMobile()

		);
		return $data;
	}
}
$forceUser = new ForceUser;

class RecentUser extends ForceUser{
	public function showUserName(){
		return $this->userName();
	}

	public function showUserMobile(){
		return $this->userMobile();
	}
}
$recentUser = new RecentUser;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Object Oriented Programming in php</title>
</head>
<body>
	<h4>Here I practiced about oop in php.</h4>
	<p>Output the public method from the parent class:  <b><?= $recentUser->showUserName();?></b></p>
	<p>Output protected method from the parent class:   <b><?= $recentUser->showUserMobile();?></b></p>
	<p>Private method can't call from the child class. But it can be called from the same class.</p>
	
	<?php 
		$value = $forceUser->userDetails();
		foreach($value as $val){
	?>
	<p><?= $val;?></p>
	<?php
		}
	?>



	
</body>
</html>