<?php 
//POST request
if($_SERVER['REQUEST_METHOD'] == 'POST') {
//     var_dump($_POST);
//     die;
    $make = $_POST['make'] ?? null;
    $model = $_POST['model'] ?? null;
    $year = $_POST['year'] ?? null;
    $colour = $_POST['colour'] ?? null;
    
    $makeHasError = (!is_string($make) || empty($make));
    $modelHasError = (!is_string($model) || empty($model));
    $yearHasError = (!is_int($year) || empty($year));
    $colourHasError = (!is_string($colour) || empty($colour));
    
    //input validation
    if(!$makeHasError && !$modelHasError && !$yearHasError && !$colourHasError) {
        //array containing the car
        $car[] = [$make, $model, $year, $colour];
        
        $result = json_encode(['response' => 'Car sucessfully created !']);
        echo $result;
        die();
    }
    
    $result = json_encode(['response' => 'Car could not be created !']);
    echo $result;
    die();  
}
?>

<!DOCTYPE html>
<html>
<head></head>
<body>
<form>
<label for="make">Make: </label>
<input type="text" name="make"/>
<button id="submit-button" type="submit">Submit</button>
</form>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script type="text/javascript">
	$(function(){
		$("form").on('submit', function(event){
			event.preventDefault();
			$.ajax({
				type: "POST",
				url: '/index.php',
				data: {'make':'bmw'},
			}).done(function(data, textStatus, jqXHR){
				console.log(data);
			}).fail(function(data){
				console.log(data);
			});
		});
	});
</script>
</body>
</html>