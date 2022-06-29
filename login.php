<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Sign Up</title>
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
        <div>
            <?php include "includes/navbar.php" ;?>

        </div>
    
        <div class="form">
            
            <h1 align = "center">Login</h1></br>

            <form action="#" method="post" onsubmit='return validation();'>
             
                <label for="fname">User Name or Email Id</label>
                <input type="text" name="fname" class="ur" required >
               
                <label for="user_password">Password</label>
                <input type="password" name="user_password" class="ur" required minlength="8"></br>
                <label for="remember_me" ><input type="checkbox" name="remember_me" id="remember_me" >&nbsp; &nbsp;<span name="remember_me">Remember me</span></label></br>
                <a href="#">Forget password?</a>
                <input type="submit" value="Login " name ="Login">
           </form>
        </div>
        <section class="my-4">  
            <div class="py-4 ">
                <?php include "includes/footer.php" ;?>
            </div>
        </section>
        
    </body>
</html>