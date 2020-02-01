
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      Date and Time
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
				  <h1>Date and Time:</h1>
			  </div>
			  <h3>Date using the date() functoin:</h3>
			  <?php
			  $today = date("d M, Y");
			  echo "<p>Today is: $today.</p>";
			  //Formatting the Dates and Times with PHP
/*Day of the month:
d (01/31)->two digits with leading zeros
j (1/31)->without leading zeros
 Day of the week:
D (Mon/Sun)->text as an abbreviation
l (monday)->full lowercase
L (MONDAY)->full uppercase
 Month:
m (01/12)->two digits with leading zeros
M (Jan)->text as an abbreviation
F (January)-> Full month
 Year:
y (09/15)->two digits
Y (2009-2015)->Four Digits
 Separators:
hyphens: (-)
dots: (.)
slashes: (/)
spaces: ( )*/
			  ?>
			  <h3>Time using the date() function:</h3>
			  <?php
			  $today = date("h:i:s A");
			  echo "<p>Time is: $today.</p>";
			  //format the time string:
/*hour:
h (01-12)->12-hour format with leading zeros
H (00-24)->24-hour format with leading zeros
minutes:
i (01-59)->minutes with leading zeros
seconds:
s (01-59) ->seconds with leading zeros
Ante meridiem and Post meridiem
a->lowercase
A->uppercase*/
			  ?>
			  <h3>Current timestramp using time() funciton:</h3>
			  <?php
			  $timestamp = time();
			  echo "<p>Timestamp is : $timestamp</p>";
			  ?>
			  <h3>Convert timestamp to time:</h3>
			  <?php
			  $time = date("F d, Y h:i:s A",$timestamp);
			  echo "<p>Time is: $time.</p>";
			  ?>
			  <h3>Convert time to timestamp using mktime() functino:</h3>
			  <?php
			  /*mktime(hour, minute, second, month, day, year)*/
			  $timestamp = mktime(15, 20, 12, 5, 10, 2017);
			  echo "<p>Timestamp is: $timestamp</p>";
			  $time = date("F d, Y h:i:s A",$timestamp);
			  echo "Time will be $time.</p>";
			  ?>
			  <h3>Find out what day week you were born:</h3>
			  <?php
			  $timestamp = mktime(0, 0, 0, 15, 04, 1977);
			  $time = date("l", $timestamp);
			  echo "<p>You were born on a $time.</p>";
			  ?>
			  <h3>Date in 1000 days from now:</h3>
			  <?php
			  $timestamp = mktime(0, 0, 0, date("m"), date("d")+1000, date("y"));
			  $time = date("D d M, y",$timestamp);
			  echo "<p>Date in 1000 days from now: $time</p>"
			  ?>
	  </div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>