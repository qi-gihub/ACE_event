<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "ace";

$conn = mysqli_connect($server,$username, $password, $dbname);

if(isset($_POST['submit'])){
    
 if(!empty($_POST['fullName']) && 
    !empty($_POST['age']) && 
    !empty($_POST['gender']) && 
    !empty($_POST['email'] && 
    !empty($_POST['phonenumber'] && 
    !empty($_POST['emergencyContactName'] && 
    !empty($_POST['emergencyContactNumber'] &&
    !empty($_POST['saturdayEvent'] &&
    !empty($_POST['role'] &&
    !empty($_POST['tshirtSize'] && 
    !empty($_POST['sundayEvent'] && 
    !empty($_POST['role'] && 
    !empty($_POST['tshirtSize1']  && 
    !empty($_POST['massege'])) {     
    
$fulalName = $_POST['FullName'];
$age = $_POST['Age'];
$gender = $_POST['Gender'];
$email = $_POST['Email'];
$phonenumber = $_POST['Phonenumber'];
$emergencyContactName = $_POST['EmergencyContactName'];
$emergencyContactNumber = $_POST['EmergencyContactNumber'];
$saturdayEvent = $_POST['SaturdayEvent'];
$role = $_POST['Role'];
$tshirtSize = $_POST['TshirtSize'];
$sundayEvent = $_POST['SundayEvent'];
$role1 = $_POST['Role1'];
$tshirtSize1 = $_POST['TshirtSize1'];
$massege = $_POST['Massege'];


 $query = "ace into form(fullName, age, gender, email,
          phonenumber, emergencyContactName,
          emEergencyContactNumber,saturdayEvent, role, tshirtSize,
          sundayEvent, role1, tshirtSize1, massege) values('$fullName' ,'$age', '$gender', '$email','$phonenumber' ,'$emergencyContactName',
          '$emergencyContactNumber' ,'$saturdayEvent',
          '$role' ,'$tshirtSize' ,'$sundayEvent' ,'$role1' ,'$tshirtSize1' ,'$massege')";
    
    $run = mysqli_query($conn,$query) or die (mysqli_error());
   
    if($run){
        echo "Form submitted successfully";
    }
    else {
       echo "Form not submitted" ;
    }   
}
           
?>