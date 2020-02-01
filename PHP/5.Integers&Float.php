
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      Integers and Floats
	  </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </head>
	<style>
		h1{
			color:purple;
		}
	</style>
  <body>
	  <div class="container-fluid">
		  <h1>Integers and Floats</h1>
		  <div>
			  <?php
			  $x = 7;
			  echo $x;
			  echo "<br />";
			  var_dump($x);
			  $y = 3;
			  $z = $x+$y;
			  echo "<br />";
			  echo $z;
			  $z = 0x1A;
			  echo "<br/>";
			  var_dump($z);
			  $w = 0232;
			  echo "<br/>";
			  var_dump($w);
			  
			  $floatingNumber = 3.7;
			  echo "<br/>";
			  var_dump($floatingNumber);
			  ?>
		  </div>
	  </div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>