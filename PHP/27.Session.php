
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
		Sessions
	  </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </head>
	<style>
		h1{
			color:purple;
		}
		h3{
			color:deepskyblue
		}
		.containingDiv{
			border:1px solid #7c73f6;
			margin: 100px;
			border-radius: 15px;
		}
	</style>
  <body>
	  <div class="container-fluid">
		  <h1>Sessions:</h1>
		  <?php
		  session_start();
		  $_SESSION["Firstname"] = "Mark";
		  $_SESSION["Lastname"] = "Zuckerberg";
		  $firstname = $_SESSION["Firstname"] = "Mark";
		  $lastname = $_SESSION["Lastname"] = "Zuckerberg";
		  echo "<p>Hi $firstname $lastname:</p>";
		  if(isset($_SESSION["Firstname"])){
			  unset($_SESSION["Firstname"]);
		  }
		  echo $_SESSION["Firstname"]?1:0;
		  session_destroy();
		  ?>
	  </div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>