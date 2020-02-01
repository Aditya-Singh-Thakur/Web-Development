
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      Contact Form
	  </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </head>
	<style>
		h1{
			color:purple;
		}
		.contactForm{
			border:1px solid #7c73f6;
			margin-top: 50px;
			border-radius: 15px;
		}
	</style>
  <body>
	  <div class="container-fluid">
		  <div class="row">
			  <div class = "col-sm-offset-1 col-sm-10 contactForm">
				  <h1>Contact us:</h1>
				  <?php
				  $errors = null;
				  $resultMessages = null;
				  if($_POST["submit"]){
					  if(!$_POST["name"]){
						  $errors .= '<p><strong>Please enter your name</strong></p>';
					  }else{ 
						  $_POST["name"]= filter_var($_POST["name"], FILTER_SANITIZE_STRING);
						   }
					  if(!$_POST["email"]){
						  $errors .= '<p><strong>Please enter your email</strong></p>';
					  }else{
						  $_POST["email"]= filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
						  if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
						  $errors .= '<p><strong>Please enter valid email</strong></p>';
						  }
					  }
					  if(!$_POST["message"]){
						  $errors .= '<p><strong>Please enter valid message</strong></p>';
					  }else{
						  $_POST["message"] = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
					  }
					  if($errors){
						  $resultMessages = '<div class="alert-danger">' . $errors . '</div>';
					  }else{
						  $to = "abc@xyz.com";
						  $subject = "Contact";
						  $message = '<p>Name: ' . $_POST["name"] . '</p>
						  <p>Email: ' . $_POST["email"] . '</p>
						  <p>Message: ' . $_POST["message"] . '</p>';
						  $header = "Content-type: text/html";
						  if(mail($to, $subject, $message, $header)){
							  /*$resultMessage = '<div class="alert alert-success">Thanks for your message. We will get back to you as soon as possible</div>'*/
							  header("Location: ThanksMessage.php");
						  }else{
							  $resultMessage = '<div class="alert alert-warning">Unable to send email. PLease try again later.</div>';
						  }
					  }
					  echo $resultMessages;
				  }
				  ?>
				  <form method="post" action="20.ContactForm.php">
					  <div class="form-group">
						  <label for="name">Name:</label>
						  <input type="text" name="name" id="name" placeholder = "Name" class="form-control" value="<?php echo $_POST["name"]; ?>">
					  </div>
					  <div class="form-group">
						  <label for="email">Email:</label>
						  <input type="email" name="email" id="email" placeholder = "Email" class="form-control"value="<?php echo $_POST["email"]; ?>">
					  </div>
					  <div class="form-group">
						  <label for="message">Message:</label>
						  <textarea name="message" id="message" class="form-control" rows="5">value="<?php echo $_POST["message"];?></textarea>
					  </div>
					  <input type="submit" name="submit" class="btn btn-success btn-lg" value="Send Message">
				  </form>
			  </div>
		  </div>
	  </div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>