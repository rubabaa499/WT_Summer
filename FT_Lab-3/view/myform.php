<!DOCTYPE html>
<html>
<head>
  <title>Registration form</title>
</head>
<body>
<div class="header">
</div>
</div>
</div>
<div class="registrationBox">
<h1 align="left">Registration form </h1>
</div>
<div class="frame">
</div>
<form action="" method="post" enctype="multipart/form-data" onsubmit="return formcheck()">

<table>
        <tr><td>
        First Name:
        </td><td>
        <input type="text" name="fname" id="name" onkeyup="checkname()">
        </td><td><p id="nameerror"></p></tr>
        <tr><td>

        Last Name:
        </td><td>
        <input type="text" name="lname" id="lname" onkeyup="checklname()">
        </td><td><p id="lnameerror"></p></tr>
        <tr><td>
        Age:
        </td><td>
        <input type="text" name="age" id="age" onkeyup = "agecheck()">
        </td><td><p id="ageerror"></p></td><td></td></tr>
        <tr><td>
        Designation:
        </td><td>
        <input type="radio" name="designation" value ="juniorprogrammer" id="juniorprogrammer" onclick="getradiovalue()">Junior Programmer
        <input type="radio" name="designation" value = "seniorprogrammer" id="seniorprogrammer" onclick="getradiovalue()">Senior Programmer
        <input type="radio" name="designation" value ="projectlead" id="projectlead" onclick="getradiovalue()">Project Lead
        </td><td><p id="radiovalue"></p><td></td></tr>
        <tr><td>
        Preferred language:
        </td><td>
        <input type="checkbox" name="PreferredLanguage1" value="Java" id="Java" onclick ="checkboxvalue()">JAVA
        <input type="checkbox" name="PreferredLanguage2" value="PHP" id="PHP" onclick ="checkboxvalue()">PHP
        <input type="checkbox" name="PreferredLanguage3" value="C++" id="C++" onclick ="checkboxvalue()">C++
        </td><td><p id="checkvalue"></p></td><td></td></tr>
        <tr><td>
        E-mail:
        </td><td>
        <input type="email" name="email" id ="email" onkeyup = "validateemail()">
        </td><td><p id="emailvalue"></p></td><td></td></tr>
        <tr><td>
        Enter a Password:
        </td><td>
        <input type="password" name="pass" id="pass" onkeyup = "passcheck()">
        </td><td><p id="passvalue"></p></td><td></td></tr>
        <tr><td>
        Please choose a file
        </td><td>
        <input type="file" name="myfile">
      

    </table>
    <input type="submit" class="button submit" name="Submit">
        <input type="reset" class="button reset" name="reset">
</form>

</div>
<script src="../js/myscript.js"></script>
</body>
</html>