
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      String Function
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
		  <h1>For Loop:</h1>
		  <div>
			  <?php
			  for($i = 1; $i <= 10; $i++){
				  echo $i . "<br />";
			  }
			  
			  $carmakes = array("BMW", "Audi", "Mercedes");
			  foreach($carmakes as $value){
				  echo $value . "<br />";
			  }
			  $shoppingBasket = array ("a"=>"yogurt","b"=>"bread","c"=>"eggs",);
			  foreach($shoppingBasket as $key=>$value){
				  echo $key . " : " . $value . "<br />";
			  }
			  ?>
		  </div>
	  </div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>