<?php include "process.php"; ?>
<html>
    <body>
        <h1>Registration Form</h1>
        <form action="" method="post">
            <table>
                
            <tr>
            <td>First Name :</td>
            <td><input type="name" name="fname"><?php echo $validatename; ?></td>
            </tr>
            <tr>
            <td>Last Name :</td>
            <td><input type="name" name="lname"><?php echo $validatename1; ?></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="number" name="age"></td>
            </tr>
            <tr>
            <td>Designation :</td>
            <td>
            Junior programmer <input type="radio" name="myGender" value="Juniorprogrammer">
            Senior Programmer <input type="radio" name="myGender" value="SeniorProgrammer">
            Project Lead <input type="radio" name="myGender" value="ProjectLead">
            <?php echo $validateradio; ?>
            </td> 
            </tr>
            <tr>
             <td>Preffered Language :</td>
             <td>
             JAVA<input type="checkbox" id="java" name="java" value="Java">
             PHP<input type="checkbox" id="php" name="php" value="PHP">
             C++<input type="checkbox" id="cpp" name="cpp" Value="C++"> 
             <?php echo $validationcb; ?>

             <?php echo $v1;?>

             <?php echo $v2;?>

             <?php echo $v3;?>   
                  
            </td>   
            </tr>

            <tr>
            <td>Email :</td>
            <td><input type="email" name="email"> <?php echo $validateemail; ?></td>
            </tr>
            <tr>
            <td>Password :</td>
            <td><input type="password" name="pass"><?php echo $validationpass; ?></td>
            </tr>
            <tr>
            <td>Please choose a file:</td>
            <td><input type="file"></td>
            </tr>
            <tr>
            <td>
            <input type="reset" value="Reset"> 
            <input type="submit" value="Submit">
            </td>
            </tr>
            
            
               
</table>
</form>
</body>
    </html>