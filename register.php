<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register </h1><h3>Are you a doctor? <a href="doctor_sign_up.php" >Register Here</a>
</h3>
    <form>
        <table>
        <tr>
       <td> <label for="user">Name</label></td>
       <td><input type="text" name="user" required></td>
        </tr>
        
        <tr>
        <td><label for="user_email">Email</label></td>
        <td><input type="email" name="user_email" required></td>
        
    </tr>

        <tr>
        <td><label for="user_password">Create Password</label></td>
        <td><input type="password" name="user_password" required minlength="8"><td>
        </tr>

        <tr>
            <td><label for="user_age">Age</label></td>
            <td><input type="number" name="user_age" required maxlength="110"><td>
        </tr>
        <tr>

        <td><label for="user_gender">Select Gender</label></td>
        <td><select name="user_gender" id="user_gender" required>
            <option value="---Select_Gender---">--Select-Gender--</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="other">Other</option>

        </select></td>
        </tr>
        <tr>
            <td><label for="user_contact">Contact No.</label></td>
            <td>
                <select name="user_gender" id="user_gender" required>
                    <option value="+91">+91(IND)</option>
                    <option value="+1">+1(USA)</option>
                </select>
                <input type="number" name="user_contact" minlength="10"maxlength="10" required>
            <td>
        </tr>
        <tr>
            <td><label for="remember_me"><input type="checkbox" name="remember_me" id="remember_me"></label></td> 
            <td> <span name="remember_me">remember_me</span><td>
        </tr>
        <tr>
        <td><a href="#">Forget password?</a></td>
        </tr>
        
        <tr colspan="2">
            <Td><input type="submit" value="Register"></Td>

        </tr>
        </table>

    </form>
    
</body>
</html>