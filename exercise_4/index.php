<?php 
require_once 'Cat.php';

use exercise_4\Cat;

//Instantiation of object Cat
//Fisrt cat
$cat_1 = new Cat('Carlos', 11, 'black', 'male', 'angora');
$cat_1_details = $cat_1->getInfo();

//Second cat
$cat_2 = new Cat('Marta', 5, 'yellow', 'female', 'chinese');
$cat_2_details = $cat_2->getInfo();

//Third cat
$cat_3 = new Cat('Pedro', 5, 'green', 'male', 'american');
$cat_3_details = $cat_3->getInfo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
	<ul>
		<?php foreach($cat_1_details as $key => $value) {?>
			<li><?php echo $key . ': ' . $value;?></li>
		<?php } ?>
	</ul>
	<ul>
		<?php foreach($cat_2_details as $key => $value) {?>
			<li><?php echo $key . ': ' . $value; ?></li>
		<?php } ?>
	</ul>
	<ul>
		<?php foreach($cat_3_details as $key => $value) {?>
			<li><?php echo $key . ': ' . $value; ?></li>
		<?php } ?>
	</ul>
</body>
</html>
