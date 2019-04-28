<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<h2>Registration Form</h2>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
	First Name: <input type="text" name="Fname" value="<?php echo $fname; ?>"><br>
  <span class="error">*<?php echo $fnameErr; ?></span>
	Last Name : <input type="text" name="Lname" value="<?php echo $lname; ?>"><br><br>
  <span class="error">*<?php echo $lastnameErr; ?></span>

	<input type="submit">
	</form>
  <h2>Thank you <?php echo $fname; ?></h2>
  <p>You have been registered as <?php echo $fname." ".$lname; ?></p>
</body>
</html>
