
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      Array Functions
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
		  <h1>Array Functions:</h1>
		  <div>
			  <?php
			  $shoppingBasket1 = array("bread", "milk", "eggs");
			  $shoppingBasket2 = array("apple", "banana", "orange");
			  $shoppingBasket = array_merge($shoppingBasket1,$shoppingBasket2);
			  echo "<p>Shopping Basket:</p>";
			  print_r($shoppingBasket);
			  echo "<p>Number of items in Shopping Basket:</p>" . count($shoppingBasket);
			  
			  $count = array_count_values($shoppingBasket);
			  echo "<p>Basket Count</p>";
			  print_r($count);
			  
			  echo "<p>Number of bread items in Basket:</p>" . $count["bread"];
			  
			  if(in_array("bread", $shoppingBasket)){
				  echo "<p>There is bread in basket</p>";
			  }else{
				  echo "<p>There is no bread in the basket.";
			  }
			  
			  array_push($shoppingBasket, "yogurt");
			  echo "<p>Shopping Basket after adding yogurt.:";
			  print_r($shoppingBasket);
			  
			  if($_GET["submit"]){
				  if($_GET["item"]){
					  array_push($shoppingBasket, $_GET["item"]);
				  }
			  }
			  print_r($shoppingBasket);
			  
			  array_splice($shoppingBasket, 0, 2, array("mango", "kiwi"));
			  echo "<p>Shopping Basket:</p>";
			  print_r($shoppingBasket);
			  
			  sort($shoppingBasket);
			  echo "<p>Shopping basket sorted in ascending order:</p>";
			  print_r($shoppingBasket);
			  
			  $carMakes = array("BMW"=>"X5", "Audi"=>"A6", "Mercedes"=>"CLS");
			  echo "<p>Care makes:</p>";
			  print_r($carMakes);
			  arsort($carMakes);
			  echo "<p>Car makes sorted in ascending order by value:</p>";
			  print_r($carMakes);
			  ksort($carMakes);
			  echo "<p>Car makes sorted in ascending order by keys</p>";
			  print_r($carMakes);
			  ?>
			  <form method="get">
				  <lable for="item">Add item to shopping basket: </lable>
				  <input type="text" name="item" id="item">
				  <input type="submit" name="submit" value="Submit">
			  </form>
		  </div>
	  </div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>