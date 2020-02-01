
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      Filters
	  </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </head>
	<style>
		h1{
			color:purple;
		}
		h3{
			color:green;
		}
	</style>
  <body>
	  <div class="container-fluid">
		  <h1>Filters:</h1>
		  <h3>Clean user inputs:</h3>
			  <?php
			  //username example
		  $myUsername = "<script>window.alert('Hi')</script>";
		  $myUsername = filter_var($myUsername, FILTER_SANITIZE_STRING);
		  echo $myUsername . "<br />";
		      //email example
		  $myEmail = "sam@    completewebdevelopm\\\\ entcour se.co.uk";
		  $myEmail = filter_var($myEmail, FILTER_SANITIZE_EMAIL);
		  echo $myEmail . "<br />";
		      //url example
		  $myURL = "http://www. google.com";
		  $myURL = filter_var($myURL, FILTER_SANITIZE_URL);
		  echo $myURL;
			  ?>
	  </div>
	  <h3>Validate user inpurts:</h3>
	  <div>
		  <?php
		  //Email validation
		  $myEmail = "sam @   completewebdevelopm\\\\ entcour se.co.uk";
		  $myEmail = filter_var($myEmail, FILTER_SANITIZE_EMAIL);
		  echo "<p>Cleaned Email: $myEmail</p>";
		  echo "<p>Email validation: ".filter_var($myEmail, FILTER_VALIDATE_EMAIL) . "</p>";
		  if(filter_var($myEmail, FILTER_VALIDATE_EMAIL)){
			  echo "Valid Email";
		  }else{
			  echo "Invalid Email";
		  }
		  //URL validation
		  $myURL = "http://www. google.com";
		  $myURL = filter_var($myURL, FILTER_SANITIZE_URL);
		  echo "<p>Cleaned URL: $myURL</p>";
		  echo "<p>URL validation: ".filter_var($myURL, FILTER_VALIDATE_URL) . "</p>";
		  ?>
	  </div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>