
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      Get and Post
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
		  <h1>Get and Post:</h1>
		  <div>
			  <?php
			  echo "<h3>GET:</h3>";
			  print_r($_GET);
			  if($_GET["Submit"]){
				  if($_GET["username"]){
				  echo "<p>Hi ". $_GET["username"] . " Welcome to my page!</p>";
				  }
			  }
			  echo "<h3>POST:</h3>";
			  print_r($_POST);
			  if($_POST["Submit"]){
				  if($_POST["Country"]){
					  echo "<p>Your country is " . $_POST["Country"] . ".</p>" ;
				  }
			  }
			  ?>
			  <form method="get" action="16.Get&Post.php">
				  <label for="username">Username:</label>
				  <input type="text" name="username" id="username">
				  <input type="submit" name="Submit" value="Submit">
			  </form>
			  <form method="post" action="16.Get&Post.php">
				  <label for="Country">Country:</label>
				  <input type="text" name="Country" id="Country">
				  <input type="submit" name="Submit" value="Submit">
			  </form>
		  </div>
	  </div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>