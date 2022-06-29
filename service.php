
<?php 
$city=$_GET["service"];
  require "config.php";
  echo "hello";
  $sql = "SELECT category FROM select_city where city='".$city."'";
  $result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
	echo "<datalist id='lang'>";
		
	
  while($row = $result->fetch_assoc()) {

 
    echo "<option value=".$row['category'].">".$row["category"]."</option> ";
 // }
 echo "id: " . $row["category"]. "<br>";
}
} else {
echo "0 results";
}
echo "</datalist>";
$conn->close();
