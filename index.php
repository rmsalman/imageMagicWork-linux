
<html>
<head>
	<title>Image manipulation package testing</title>
</head>
<body>
	<h1>Hello <?php echo 'Rana' ?></h1>
<?#php phpinfo(); ?>


<?php 
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManager; 

// create an image manager instance with favored driver
$manager = new ImageManager(array('driver' => 'imagick'));

// to finally create image instances
$image = $manager->make('img/me.jpeg')->resize(300, 200)->save('img/me-2.jpeg', 100);

?>

<img src="img/me-2.jpeg" alt="">


</body>
</html>