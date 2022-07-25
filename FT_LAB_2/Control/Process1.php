<?php


include("../Model/db.php");
if(isset($_POST["submit"])){
    $fname = $_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
    $age = $_REQUEST["age"];
    
    $desig = $_POST["designation"];
     $skill = $_POST["skills"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["pass"];
    $file = "";
// $NameErr="";
if(empty($fname) || empty($lname))
{
$NameErr = "PLease enter your Name <br>";
   if(is_numeric($fname) && is_numeric($lname))
   {
       echo"Please donot put numeric numbers";
       $HAS_error=1;
   }
   else{
       echo"Good";
   }
}
echo"<br>";
if(empty($email))
{
    echo"Enter Your Email";
}
else{
    echo"Email entered <br>";
}
echo"<br>";
if(strlen($password)<6)
{
    
    echo"Password must be greater than 6 digits ";
}
else{
    echo"Good password";
}
echo"<br>";

if(isset($desig))
{
    echo"Designation : " . $desig;
    echo"<br>";
}
else
{
    $HAS_error=1;
    echo"Please select a designation";
}
echo"<br>";

echo"Your Skills : " ;

if(isset($_POST['skills']))
{
    foreach($_REQUEST["skills"] as $skill)
    {
    echo  $skill . " ";
    }

}
else
{
    $HAS_error=1;
    echo "not selected";
}



$file = $_FILES["myfile"]["name"];
if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads/" . $_FILES["myfile"]["name"]))
{
    echo"File uploaded <br>";
    echo $_FILES["myfile"]["name"];
}
else
{
    echo"File not uploaded";
}

$mydb=new db();
$myconn=$mydb->opencon();

$mydb->insertuser($fname,$lname,$age,$desig,$skill,$email,$password,$file,"employee",$myconn);



}

?>

