<?php
class ForceUser{

	public function userName(){
		return $name = "Rafikul Islam Rafi";
	}
	private function userEmail(){
		return $email = "rafikulswe@gmail.com";
	}
	public function userDetails(){
		$data = array(
			'name' => $this->userName(),
			'email' => $this->userEmail(),
			'mobile' => "01729346959"

		);
		return $data;
	}
}
$forceUser = new ForceUser;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Object Oriented Programming in php</title>
</head>
<body>
	<h4>Here we practice about oop in php.</h4>
	<p><?php echo $forceUser->userName();?></p>
	
	<?php 
		$value = $forceUser->userDetails();
		foreach($value as $val){
	?>
	<h5><?= $val;?></h5>
	<?php
		}
	?>



	
</body>
</html>