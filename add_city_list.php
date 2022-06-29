<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         input[type=text]{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            } 
            .ur{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }

            input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }

            input[type=submit]:hover {
            background-color: #45a049;
            }

            div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            width: 250px;
            height: 300px;
            margin: 0 auto;
            } 
    </style>
</head>
<body>
    <div>
    <form action="action/a_add_city_list.php" method="post">
        <label for="city_name">City Name</label>
        <input type="text" name="city_name" class="ur" required >
        <label for="pin_code">Pin code</label>
        <input type="text" name="pin_code" class="ur" required>
                  

        <input type="submit" value="Add City" name ="Add City">
    </form>
    </div>

</body>
</html>
