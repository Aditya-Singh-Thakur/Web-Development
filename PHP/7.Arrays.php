
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      Arrays
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
		  <h1>Arrays:</h1>
		  <div>
			  <?php
			  //Index Arrays
			  $carmakes = array("Audi", "BMW", "Mercedes");
			  echo "<p>Car makes:";
			  print_r($carmakes);
			  echo "<p>Car makes: Element one</p>";
			  echo $carmakes[0];
			  //Associate Arrays
			  /* multiple line
			  comment */
			  $shoppingBasket1 = array("a"=>"bread", "b"=>"milk", "c"=>"eggs");
			  echo "<p>Shopping Basket1:</p>";
			  print_r($shoppingBasket1);
			  echo "<br />";
			  var_dump($shoppingBasket1);
			  $shoppingBasket2 = array("b"=>"milk","a"=>"bread", "c"=>"eggs");
			  echo "<p>Shopping Basket2:</p>";
			   print_r($shoppingBasket2);
			  echo "<br />";
			  var_dump($shoppingBasket2);
			  echo "<br />";
			  echo "shoppingBasket1 == shoppingBasket2";
			  echo "<br />";
			  var_dump($shoppingBasket1 == $shoppingBasket2);
			  echo "<br />";
			  echo "shoppingBasket1 == shoppingBasket2";
			  echo "<br />";
			  var_dump($shoppingBasket1 === $shoppingBasket2);
			  echo "<br />";
			  $shoppingBasket3 = array("d"=>"yogurt", "e"=>"orange", "f"=>"apple");
			  echo "<p>Shopping Basket3:</p>";
			  print_r($shoppingBasket3);
			  echo "<br />";
			  echo "shoppingBasket1 <> shoppingBasket3";
			  echo "<br />";
			  var_dump($shoppingBasket1<> $shoppingBasket3);
			  $shoppingBasket = $shoppingBasket1 + $shoppingBasket3;
			  echo "shoppingBasket1 + shoppingBasket3";
			  echo "<br />";
			  var_dump($shoppingBasket);
			  echo "<br />";
			  print_r($shoppingBasket);
			  ?>
		  </div>
	  </div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>