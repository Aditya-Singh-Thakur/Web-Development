
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      If else and switch
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
		  <h1>If else and switch:</h1>
		  <div>
			  <?php
			  $believeinyourdream = true;
			  if($believeinyourdream){
				  echo "<p>You will be successful.</p>";
			  }else{
				  echo "<p>Believe in your dreams to be successful in life.</p>";
			  }
			  $x = ($believeinyourdream)?"A":"B";
			  echo $x;
			  
			  $temperature = 25;
			  if($temperature<15){
				  echo "<p>It is cold!</p>";
			  }elseif($temperature>30){
				  echo "<p>It is hot!";
			  }else{
				  echo "<p>The temperature is medium.</p>";
			  }
			  $strength = "belief";
			  switch($strength){
				  case "belief":
					  echo "<p>You have core values that are unchanging. They will define your purpose in life. </p>";
					  break;
				  case "comunication":
					  echo "<p>You easily put your thoughts into words. You are a good presenter.</p>";
					  break;
				  case "competition":
					  echo "<p>You measure your progress against the prgress of others. You strive to win first place</p>";
					  break;
				  case "determination":
					  echo "<p></p>";
					  break;
				  default;
					  echo "<p>Choose a strength, you have many for sure</p>";
					  break;
			  }
			  ?>
		  </div>
	  </div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>