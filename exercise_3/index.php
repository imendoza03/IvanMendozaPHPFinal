<?php 
//POST request
if($_SERVER['REQUEST_METHOD'] == 'POST') {
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
        
        return 'Car sucessfully created !';
    }
    
    return 'Car could not be created !';
}
?>