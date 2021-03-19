<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "acecontact";

$conn = mysqli_connect($server, $username, $password, $dbname);if(isset($_POST['submit'])){
    
 if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['role']) && !empty($_POST['massege'])){     
    
    $name =  $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $mssege = $_POST['massege'];
    
    $query = "contact into form(name,email,role,massege) values('$name', '$email',
    '$role', '$massege')";
    
    $run = mysqli_query($conn,$query) or die (mysqli_error());
    
    if($run){
        echo "Form submitted successfully";
    }
    else {
       echo "Form not submitted";
    }   
}
}
    
?>
