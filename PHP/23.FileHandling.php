
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      File Handling
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
				  <h1>File Handling:</h1>
			  </div>
			  <h3>fopen/fclose:</h3>
		  <?php
		  if(file_exists("SomeText.txt")){
			  $myFile = fopen("SomeText.txt", "r");
			  fclose($myFile);
		  }else{
			  echo "<p>This file doesnt exist</p>";
		  }
		  ?>
		  
			  <h3>fread:</h3>
		  <?php
		  $fileHandle = fopen("SomeText.txt", "r") or die("Unable to open file!");
		  $fileContent = fread($fileHandle, filesize("SomeText.txt"));
		  fclose($fileHandle);
		  var_dump($fileContent);
		  ?>
		  
			  <h3>file_get_content:</h3>
		  <?php
		  $fileContent = file_get_contents("SomeText.txt") or die("Unable to read file");
		  var_dump($fileContent);
		  ?>
		  
			  <h3>file function:</h3>
		  <?php
		  $fileContent = file("SomeText.txt") or die("Unable to read file!");
		  var_dump($fileContent);
		  echo "<br />";
		  foreach($fileContent as $line){
			  echo $line . "<br />";
		  }
		  ?>
		  
			  <h3>fwrite:</h3>
		  <?php
		  $fileHandle = fopen("SomeText.txt", "w") or die("Unable to open file");
		  fwrite($fileHandle, "This is new content") or die("Unable to write to file!");
		  $fileContent = file("SomeText.txt") or die("Unable to read file!");
		  var_dump($fileContent);
		  ?>
		  
			  <h3>file_put_contents:</h3>
		  <?php
		  file_put_contents("SomeText.txt", "\r\n This is some other new content!", FILE_APPEND) or die("Unable to write to file");
		  $fileContent = file("SomeText.txt") or die("Unable to read file!");
		  var_dump($fileContent);
		  ?>
	  </div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>