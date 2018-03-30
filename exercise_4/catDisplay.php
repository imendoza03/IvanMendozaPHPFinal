<?php 
require_once 'Cat.php';

use exercise_4\Cat;

//Instantiation of object Cat
$cat_1 = new Cat();
$cat_1->setFirstName('Carlos')->setAge(11)->setSex('male')->setRace('angora')->setColor('black');

$cat_1_details = $cat_1->getInfo();

$cat_2 = new Cat();
$cat_2->setFirstName('Marta')->setAge(5)->setSex('female')->setRace('chinese')->setColor('yellow');

$cat_2_details = $cat_2->getInfo();

$cat_3 = new Cat();
$cat_3->setFirstName('Pedro')->setAge(7)->setSex('male')->setRace('dominican')->setColor('red');

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
