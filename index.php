
<!DOCTYPE html>

<html>



<head>

   <title>Live Search using AJAX</title>
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   <script type="text/javascript" src="script.js"></script>

   <link rel="stylesheet" type="text/css" href="style.css">

</head>



<body>
<?php 
include "db.php";
?>
<!-- Search box. -->

<center>
	<input class="form-control" type="text" id="search" placeholder="Search" />

	   <br>

	   <b>Ex: </b><i>David, Ricky, Ronaldo, Messi, Watson, Robot</i>

	   <br />

	   <!-- Suggestions will be displayed in below div. -->

	   <div id="display"></div>

</center>

   


</body>



</html>