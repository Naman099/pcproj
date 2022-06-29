<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Doctor Sign Up</title>
        <link rel="stylesheet" href="css/style.css">
        
    </head>
    <body>
<DIV>
<?php include "includes/navbar.php" ;?>

</DIV>
    
        <div class="form">
            
            <h1 align = "center">Doctor Registration</h1></br>

            <form action="#" method="post" onsubmit='return validation();'>
             
                <label for="fname">First Name</label>
                <input type="text" name="fname" class="ur" required >
                <label for="lname">Last Name</label>
                <input type="text" name="lname" class="ur" required>
                
                <label for="user_email">Email</label>
                <input type="email" name="user_email"class="ur" required>
                <label for="user_password">Create Password</label>
                <input type="password" name="user_password" class="ur" required minlength="8">
                <label for="doctor_registration_no">Registration Number</label>
                <input type="number" name="doctor_registration_no" class="ur" required maxlength="110" min="0">
                <label for="doctor_experience">Expericence</label>
                <input type="number" name="doctor_experience" class="ur" required maxlength="110" min="0">
                <label for="user_gender">Select Gender</label>
                <select name="user_gender" id="user_gender" class="ur" required>
                    <option value="---Select_Gender---">--Select-Gender--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="other">Other</option>

                </select>

                <label for="user_gender">Specialist </label>
                <select name="user_gender" id="user_gender" class="ur" required>
                    <option value="---Select_Gender---">--Select-Specialist--</option>
                    <option value="Cardiologists">Cardiologists</option>
                    <option value="Anesthesiologists">Anesthesiologists</option>
                    <option value="Dermatologists">Dermatologists</option>
                    <option value="Endocrinologists">Endocrinologists</option>
                    <option value="Gastroenterologists">Gastroenterologists</option>
                    <option value="Neurologists">Neurologists</option>

                </select>
                <label for="user_contact">Contact No.</label>
                <input type="number" name="user_contact" minlength="10"maxlength="10" class="ur" required>
                <input type="submit" value="Register Now" name ="Register Now">
            </form>
        </div>

    <section class="my-4">  
      <div class="py-4 ">
        <?php include "includes/footer.php" ;?>
      </div>
  </section>
        
    </body>
</html>



