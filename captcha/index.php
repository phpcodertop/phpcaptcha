<?php
//usage of the class 

//confirmation
session_start();
	if (isset($_POST['check'])) {
		if(!empty($_POST['input']) && $_POST['input'] == $_SESSION['secret']){
			echo 'good';
		}else{
			echo 'wrong';
		}	
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>captcha</title>
</head>
<body>
<img src="captcha.php" /> <br />
enter the captcha : 
<form method="post">
<input type="text" name="input">
<input type="submit" name="check" value="submit" />
</form>

</body>
</html>