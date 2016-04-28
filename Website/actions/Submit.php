<?php
    // Grab our POSTed form values
    // Note that whatever is enclosed by $_POST[""] matches the form input elements
	var_dump($_POST);
	$firstName = $_POST["FirstName"];
	$lastName = $_POST["LastName"];
	$EmailAddress = $_POST["EmailAddress"];
	$Message = $_POST["Message"];
	$sql_connection = mysql_connect("localhost","saworms","saw0078", "contact");
	mysql_select_db("contact", $sql_connection);
	$sql = "INSERT INTO Contact (FirstName, LastName, EmailAddress, Message ) VALUES ('$firstName', '$lastName', '$EmailAddress', '$Message')";
	mysql_query($sql,$sql_connection);
	mysql_close($sql_connection);

	
	header("Location: http://localhost/Website2/index.php");
?>