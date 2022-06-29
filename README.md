# pcproj

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/styleshck.css">
 <!-- <link rel="stylesheet" href="css/style.css"> -->

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>

</head>

<body>

<?php include "includes/navbar.php" ;?>

<!-- Carousel -->
<div class="container-fluid" style=" width: 100%;height:90%;">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
      <div class="item active">
        <img src="images/Doctors+who+care.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/Curated+Experience.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/Transparent+&+Secure.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container-fluid">

  <section>

	  <h1 id="change_city" align="center">Your Specialists</h1>
  	<h3 align="center">Our vision is to help mankind live healthier, longer lives by making quality </br>healthcare accessible, affordable and convenient.</h3>

	</section></br>

  <div class='select' align="center">
    <form  action='page2.php' method='get' onsubmit='return validation();'>
  
      <select id='city' name='city' onchange='funAjax1(this.value);' style="width: 150px;height:40px;margin: 10px;">
        <option>--SELECT CITY--</option>

            <?php 
              require "config.php";
              $sql = "SELECT city_name FROM city_list";
              $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {

              // String stt=rs.getString("city ";
                echo "<option value=".$row['city_name'].">".$row["city_name"]."</option> ";
            // }
            echo "id: " . $row["city"]. "<br>";
            }
            } else {
            echo "0 results";
            }
            $conn->close();

            ?>
            </select>

            <input autocomplete='off' type='text' name='search' id='search-box' list='lang' placeholder='   SEARCH FOR A CATEGORY' class='input'size="50" style="width: 550px;height:40px;"> <input type='submit' name='sub' value='Search' id='submit' style="width: 150px;height:40px;"></br></br>

  </div>
            <h4 align="center">Eg. Dermatologist , Pediatrician , Gynecologist/Obstetrician.</h4>

    </form></br></br>

  <h1 id='yo'></h1>
  <p></p>
</div>

<!-- ------------------------------------------------- -->
  <section class="my-4">  
    <div class="py-4 container-fluid"  >
      <?php include "includes/imgpart.php" ;?>
    </div>
  </section>
<!-- -------------------------------------------------- -->
  <section class="my-4">  
      <div class="py-4 ">
        <?php include "includes/footer.php" ;?>
      </div>
  </section>

    
    



  <script src="script/aj1.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>
