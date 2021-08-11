<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$query=$conn->query("SELECT COUNT(*) as count FROM `user` WHERE `username`='$username' AND `password`='$password'");
		$row=$query->fetchArray();
		$count=$row['count'];
		
		if($count > 0){
			echo "<div class='alert alert-success'>nctf{Th4ts_Why_Y0u_Ar3_4_1337_h4ck3r}</div>";
		}else{
			echo "<div class='alert alert-danger'>Invalid username or password</div>";
		}
	}
?>
