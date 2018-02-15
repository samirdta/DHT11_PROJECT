<?php 
use classes\Measure;
use classes\MeasureDao;
include '../inc/autoload.inc';

$config= include "../inc/config.php";

$temperature = $_POST['temperature'];
$humidite = $_POST['humidite'];

$measureDao= new MeasureDao($config);
$measure= new Measure(NULL, $temperature, $humidite);
$measureDao->insertMeasure($measure);
?>


<!DOCTYPE HTML>
<html>
    <head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       
    </head>
    <body>


         <p>Thermomètre</p>
       <form method="post" action="index.php">
  <div class="form-group">
    <label for="exampleInputEmail1">temperature</label>
    <input type="text" name="temperature" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">humidite</label>
    <input type="text" name="humidite" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
  <p>
  <?php echo $temperature;?>
  <?php echo $humidite;?>
  </p>
    </body>


   </html>

