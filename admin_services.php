<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Services</title>
        <!-- <link rel="stylesheet" href="css/style.css">
        -->
        <Style>
           .admin_style {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            width: 98%;
            height: 500px;
            margin: 0 auto;
            margin-bottom: 10px;
            }
            button{
                height:max-content ;
                width: 320px;
                
            background-color: #4CAF50;
            color: white;
            padding: 14px ;
            /* margin: 100px  ; */
            margin: 5px !important ;
           
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            color: black !important;
                text-decoration: none;
            
            }
            /* a{
                color: black !important;
                text-decoration: none;
                
            } */
        </Style>
       
    </head>
    <body>
        <DIV>
        <?php include "includes/navbar.php" ;?>

        </DIV>
            
        <div class="admin_style">
                    
            <h1 align = "center">Admin Services</h1></br>
            <a href="#"><button>ADD CITY</button></a>
            <a href="#"><button>ADD CATEGORY</button></a>

            <a href="#"><button>MANNAGE USER ACCOUNT</button></a>

            <a href="#"><button>MANNAGE DOCTOR ACCOUNT</button></a>

            <a href="#"><button>MANNAGE ACCOUNT PERMISSIONS</button></a>
            <a href="#"><button>ADD NEW ADMIN</button></a>

            <!-- <button>ADD</button>
            <a href="#">dhdgdgdh</a> -->

                

            

            
            
        </div>

        <section class="my-4">  
        <div class="py-4 ">
            <?php include "includes/footer.php" ;?>
        </div>
        </section>
        
    </body>
</html>