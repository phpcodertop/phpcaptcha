# php captcha class for security check for human usage 
 Usage : 
 Your Captcha image src should point to captcha.php

 Check :
 compare your user input with $_SESSION['secret']

 Example check
if(!empty($_POST['input']) && $_POST['input'] == $_SESSION['secret']){
			echo 'good';
		}else{
			echo 'wrong';
		}

#Note : 
You can edit this class and use it as you want , 
This class will generate an image with numbers and 
random lines over these numbers to insure human usage <3
