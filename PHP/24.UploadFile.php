
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      Upload file
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
			  <h1>Upload file:</h1>
			  <?php
			  if($_POST["submit"]){
				  $name = $_FILES["file"]["name"];
			      $type = $_FILES["file"]["type"];
				  $tmp_name = $_FILES["file"]["tmp_name"];
				  $size = $_FILES["file"]["size"];
				  $file_error = $_FILES["file"]["error"];
				  $permanent_destination = "uploads/" . $_FILES["file"]["name"];
				  $noFiletoUpload = "<p><strong>Please upload the file.</strong>";
				  $fileAlreadyExists = "<p><strong>This file already exists</strong></p>";
				  $wrongFormat = "<p><strong>Sorry, you can upload pdf and text files: </strong></p>";
				  $fileToolarge = "<p><strong>You can only upload files smaller than 3mb </strong></p>";
				  
				  $allowedFormats = array("pdf"=>"application/pdf", "text"=>"text/plain");
				  
			     if($fileerror == 4){
					 $errors .=$noFiletoUpload;
				 } else{
					 if(file_exists($permanent_destination)){
					  $errors .= $fileAlreadyExists;
				  }
				  if($size > 3*1024*1024){
					  $errors .= $fileToolarge;
				  }
				  if(in_array($type, $allowedFormats)){
					  $errors .= $wrongFormat;
				  }
				 }					 
				  if($errors){
					  $resultMessage = "<div class='alert alert-danger'>" . $errors . "</div>";
				  }else{
					  if(move_uploaded_file($tmp_name, $permanent_destination)){
						  $resultMessage = "<div class='alert alert-warning'>Unable to upload File. Please try again later.</div>";
						  echo $resultMessage;
					  }
				  }
				  print_r($_FILES);
				  if($_FILES["file"]["error"]>0){
					  echo"<p>There was an error:" . $_FILES["file"]["error"] . "</p>";
				  }else{
					  echo "<p>Files name: " . $_FILES["file"]["name"] . "</p>";
					  echo "<p>Files type: " . $_FILES["file"]["type"] . "</p>";
					  echo "<p>Temporary location: " . $_FILES["file"]["tmp_name"] . "</p>";
					  echo "<p>File size: " . $_FILES["file"]["size"] . "</p>";
					  echo "<p>Permanent destination: " . "uploads/" . $_FILES["file"]["name"] . "</p>";
				  }
			  }
			  ?>
			  <form method="post" enctype="multipart/form-data">
				  <div class="form-group">
					  <label for="file">Choose file</label>
					  <input type ="file" name="file" id="file" placeholder="File">
				  </div>
				  <input type="submit" name="submit" class="btn btn-success btn-lg" value="Upload">
			  </form>
		  </div>
	  </div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>