
<!DOCTYPE html>
<html>
<head>
    <title>Summary of Student's Details</title>

    <style>
        *{	
			text-align: center;
			margin: 0 auto;
			margin-top: 10px;
		}
    </style>
</head>
<body>

<?php

    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $idNumber = $_POST['idNumber'];
        $currentAddress = $_POST['currentAddress'];
        $homeAddress = $_POST['homeAddress'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $homeNumber = $_POST['homeNumber'];

    }

        echo "<h1>Summary of Student's Details</h1><br>";
        echo "<p> Name: $name </p>";
        echo "<p> Identification Number: $idNumber </p>";
        echo "<p>Current Address: $currentAddress </p>";
        echo "<p>Home Address: $homeAddress </p>";
        echo "<p>Email: $email </p>";
        echo "<p>Mobile Phone Number: $phoneNumber </p>";
        echo "<p>Home Phone Number (Emergency): $homeNumber </p>";
    

?>
    
</body>
</html>
