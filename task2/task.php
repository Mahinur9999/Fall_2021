<?php include("Control/action.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h3>Registration Form</h3><hr>

	<form action="control/json.php" method="POST">
		First Name :
		<input type="text" name="fstname"> <?php echo $valMsg; ?><br>

		Last Name :
		<input type="text" name="lstname"> <?php echo $valMsg2; ?> <br>

		Age :
		<input type="text" name="age"><?php echo $ageVal; ?> <br>
	    
	    Designation :
	    <input type="radio" id="jp" name="Designation" value="Junior Programmer">
	          <label for="jp">Junior Programmer</label>
	    <input type="radio" id="sp" name="Designation" value="Senior Programmer">
	          <label for="sp">Senior Programmer</label>
	    <input type="radio" id="pl" name="Designation" value="Project Leader">
	          <label for="pl">Project Leader</label>
	          <br>

	          <?php echo $radioVal; ?>

	          <br>

	Preferred Language:
	    <input type="checkbox" id="java" name="java" value="JAVA">
	    JAVA
	    <input type="checkbox" id="php" name="php" value="PHP">
	    PHP
	    <input type="checkbox" id="c++" name="c++" value="C++">    
	    C++  <br>

	    <?php echo $checkboxVal; ?>

        <?php echo $java;?>

        <?php echo $php;?>

        <?php echo $c;?>

        <br>

	Email :
		<input type="text" name="email"> <?php echo $valMsg3; ?> <br>

    Password :
		<input type="text" name="password"> <?php echo $valMsg4; ?> <br>

    Please choose a file :
    <input type="file" name="filetoupload"><br>
    
	<input type="submit" name="submit" value="Submit">
	<input type="reset" name="reset" value="Reset">


	</form>


	
</body>
</html>