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
            
        <h2 align="center">Can not find what you are looking for?</h2> 
            <h3 align = "center">Request a Callback</h3></br>

            <form action="#" method="post" onsubmit='return validation();'>
             
            <form action="action/a_request_callback.php" method="post" >
                <label for="fname">Name</label>
                <input type="text" id="fname" name="name"  class="ur" placeholder="Your name.." required>

                <label for="email">E mail</label>
                <input type="email" id="email" name="email"class="ur" placeholder="Your Email.." required>

                <label for="m_number">Mobile Number</label>
                <input type="number" id="m_number" class="ur" name="m_number"  placeholder="Your Mobile Number.." minlength="10"maxlength="10" min="0" required>

            
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