<?php 
	session_start();
/**
* PHP CAPTCHA CLASS 
* WRITTEB BY : SEMICOLON
* AHMED MAHER HALIMA
* https://www.facebook.com/ahmedmaherhalima
**/
/**
* 
*/
class Captcha 
{
	public $img;
	public $txtCol;
	public $fontSize = 40;
	public $imageWidth = 80;
	public $imageHeight = 20;
	public $string;

	public function createImg(){
		$this->img = imagecreate($this->imageWidth, $this->imageHeight);
		imagecolorallocate($this->img, 255, 255, 255);
		$this->txtCol = imagecolorallocate($this->img, 0, 0, 0);
		//draw lines on image 
		for($i = 0; $i <= 30; $i++ ){
			$x1 = rand(1,100);
			$y1 = rand(1,100);
			$x2 = rand(1,100);
			$y2 = rand(1,100);
			imageline($this->img, $x1, $y1, $x2, $y2,$this->txtCol);
		}
		// add captcha string to image
		$this->string = md5(microtime());
		$this->string = substr($this->string, 0 , 6);
		$_SESSION['secret'] = $this->string;
		imagestring($this->img, $this->fontSize, 0, 0, $this->string, $this->txtCol);
		imagepng($this->img);
	} // end createImg function

}

$captcha = new Captcha();
$captcha->createImg();
?>