<?php

$servername 					= "localhost";
$username 						= "XXXX";
$password 						= "XXXXX";


	echo $fullname. "" .$age "" .$Gender "" .$phonenumber "" .$email "" .$saturdayevents "" .$sundayevents "" .$emergencycontactname "" .$emergencycontactphonenumber "" .$sundayevents "" .$passworld;
}


$users_questioncomment = $_POST['comment'];

/*----Creat connection----*/
$conn = new mysqli($servername, $username, $password, $dbname);

/*----Check connection----*/
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql ="
  INSERT INTO `instruct_contactform`.`contact` (`id`, `name`, `email`, 
        `comment`, `time_stamp`) VALUES (NULL, '$users_name','$users_email', '$users_comment',
        CURRENT_TIMESTAMP);";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>