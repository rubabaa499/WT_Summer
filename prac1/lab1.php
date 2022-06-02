<?php include "result.php"; ?>
<html>
    <body>
        <h1>Login Form</h1>
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
            <td>Age :</td>
            <td><input type="age" name="age"> <?php echo $validateage; ?></td>
            </tr>

            <tr>
            <td>Designation :</td>
            <td>
            Junior Programmer <input type="radio" name="myDesignation">
            Senior  Programmer <input type="radio" name="myDesignation">
            Project Lead <input type="radio" name="myDesignation">
            <?php echo $validateradio; ?>
            </td> 
            </tr>
            
            <tr>
            <td>Preffered Language :</td>
            <td>
            JAVA <input type="checkbox" name="myPrefferedLanguage">
            PHP <input type="checkbox" name="myPrefferedLanguage">
            C++ <input type="checkbox" name="myPrefferedLanguage">
            <?php echo $validatecheckbox; ?>
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
            <td>Phone(optinal):</td>
            <td><input type="tel" name="num"><?php echo $validationnum; ?></td>
            </tr>
            <tr>
            <td>Address :</td>
            <td><input type="text"></td>
            </tr>
            <tr>
            <td>Attach Docs:</td>
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