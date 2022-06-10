<?php
   include('connect.php');
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $body = $_POST['body'];
        $priority = $_POST['priority'];
        $type = $_POST['type'];

        $sql = "insert into mabase (name, body, priority, type)
                 values('$name' , '$Message', '$priority', '$type')";

                 
        $result = mysqli_query($conn,$sql);
        if($result){
            echo"record saved";
        }else{
            die(mysqli_error($conn));
        }
    }
?>



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
    <!-- <button class="btn btn-primary my-5" name="btlogin"><a href="modif.php" class="text-light">Login</a></button> -->
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

       <button name="submit">Send</button><br>
       <button class="btn btn-primary my-5 "><a href="modif.php" class="text-light">Affichage</a></button>
    </form>
   
</body>
</html>