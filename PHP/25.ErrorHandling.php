
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      Error Handling
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
	</style>
  <body>
	  <div class="container-fluid">
		  <div class="row">
				  <h1>Error Handling:</h1>
			  <h3>Example 1:</h3>
			  <?php
			  function errorHandler1($errno, $errstr, $errfile, $errline, $errcontext){
				  echo "<p><strong>Error: [$errno] $errstr.</strong></p>";
			  }
			  set_error_handler("errorHandler1");
			  echo filesize("inexistingfile.txt");
			  ?>
			  <h3>Example 2:</h3>
			  <?php
			  function calculateFileSize($file){
				  if(!file_exists($file)){
					  trigger_error($file, "does not exist and thus size cannot be retrieved!", E_USER_WARNING);
					  return false;
				  }else{
					  return filezise($file);
				  }
				  function errorHandler2($errno, $errstr, $errfile, $errline, $errcontext){
					  $log .= "Error[$errno] on " . date("d/m/y M:i:s") . "\r\n";
					  $log .= "Details: $errstr. \rn";
					  $log .= "Location: In $errfile on line $errline. \r\n";
					  $log .= "Variables: " . print_r($errcontext, true). "\r\n";
					  
					  error_log($log, 3, "logs/errorhandlingerrros.log");
					  error_log($log, 1, "sam0hellodevelopers89om.com");
					  die("<php An error occured please try again.</p>");
					  }
			  }
				  set_error_handler("errorhandler2");
				  echo calculateFileSize("inexistingfile.txt");
			  ?>
		  </div>
	  </div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>