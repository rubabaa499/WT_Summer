<?php
$validatename="";
$validatename1="";
$validateemail="";
$validateradio="";
$validationpass="";
$validationcb="";
$v1=$v2=$v3="";
$name=$name1=$email=$des="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_REQUEST["fname"];
    $name1=$_REQUEST["lname"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["pass"];
    
if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<3))
{
    $validatename= "*you must enter first name";

}
else
{
    $validatename="First Name : " .$name;
}

$name=$_REQUEST["lname"];
if(empty($_REQUEST["lname"]) || (strlen($_REQUEST["lname"])<3))
{
    $validatename1= "*you must enter last name";

}
else
{
    $validatename1="Last Name : " .$name1;
}

$email=$_REQUEST["email"];
if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="*you must enter email";
}
else{
    $validateemail= "your email is ".$email;
}

$password=$_REQUEST["pass"];
if((strlen($_REQUEST["pass"])<8))
{
    $validationpass= "*your password must be 8 characters";

}


if(isset($_REQUEST["myGender"]))
{
    $validateradio= $_REQUEST["myGender"];
}
else
{
    $validateradio= "*please select at least one radio";
}
if(!isset($_REQUEST["java"])&&!isset($_REQUEST["php"])&&!isset($_REQUEST["cpp"]))
{
    $validationcb = " please select at least one checkbox ";
}  

else
{
    if(isset($_REQUEST["java"]))
    {
        //$v1= $_REQUEST["java"];
        $validationcb = $validationcb.$_POST['java'];
    }
    if(isset($_REQUEST["php"]))
    { 
        //$v2= $_REQUEST["php"];
        $validationcb = $validationcb. ',' .$_POST['php'];
    }
    if(isset($_REQUEST["cpp"]))
    {
     //$v3= $_REQUEST["cpp"];
     $validationcb = $validationcb. ',' .$_POST['cpp'];
    }
}
//Get form data
$formdata = array(
    'First Name'=> $_POST["fname"],
    'Last Name'=> $_POST["lname"],
    'Age'=> $_POST["age"],
    'Designation'=> $_POST["myGender"],
    'Email'=>$_POST["email"],
    'Checkbox'=>$validationcb,
    
 );
 $existingdata = file_get_contents('data.json');
 $tempJSONdata = json_decode($existingdata);
 $tempJSONdata[] =$formdata;
 //Convert updated array to JSON
 
$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
 if(file_put_contents("data.json", $jsondata)) {
     //write json data into data.json file
      echo "Data successfully saved <br>";
  }
 else 
      echo "no data saved";

$data = file_get_contents("data.json");
$mydata = json_decode($data);


//  echo "my value: ".$mydata[1]->lastName;
// 	 foreach($mydata as $myobject)
// {
// foreach($myobject as $key=>$value)
// {
//   echo "your ".$key." is ".$value."<br>";
// } 
// }

}

?>