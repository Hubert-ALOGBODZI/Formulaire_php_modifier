<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>contact</h1>
    <form action="Database.php" method="post" >
        <label for="name">name</label>
       <input type="text"  id="name" name="name">
       
       <label for="Message">Message</label>
       <textarea id="Message" name="Message"></textarea>

       <label for="priority">priority</label>
       <select id="priority" name="priority">
           <option value="1">LOW</option>
           <option value="2" selected >Medium</option>
           <option value="3">Hight</option>
       </select>
       <fieldset>
           <legend>Type</legend>
           <label>
               <input type="radio" name="type" value="1" checked>
               complaint
           </label>
           <br> 

           <label>
              <input type="radio" name="type" value="2">
             suggestion
           </label>
       </fieldset>

       <label>
           <input type="checkbox" name="terms">
           I agree to the terms and conditions
       </label>

       <br>

       <button>update</button>
    </form>
</body>
</html> 




<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "MabaseD";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

// $sql = "UPDATE mabase SET lastname='Doe' WHERE id=$id";

// if (mysqli_query($conn, $sql)) {
//   echo "Record updated successfully";
// } else {
//   echo "Error updating record: " . mysqli_error($conn);
// }

// mysqli_close($conn);
?>
