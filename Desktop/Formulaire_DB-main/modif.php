<?php
   include "connect.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5 "><a href="form.php" class="text-light">Add user</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">body</th>
      <th scope="col">priority</th>
      <th scope="col">type</th>
      <th scope="col">opérations</th>    </tr>
  </thead>

<?php


$sql = "select * from mabase";
$result = mysqli_query($conn,$sql);
if($result){
 while($row=mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $name = $row['name'];
    $body = $row['body'];
    $priority = $row['priority']; 
    $type = $row['type']; 
    echo ' <tr>
    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
    <td>'.$body.'</td>
    <td>'.$priority.'</td>
    <td>'.$type.'</td>
    <td>
      <button class="btn btn-primary"><a href="update.php?
      updateid='.$id.'" class="text-light">Update</a></button>
      <button class="btn btn-danger"><a href="delete.php? 
      deleteid='.$id.'" class="text-light">Delete</a></button>
    </td>
  </tr>';
}
}


// //connexion
// $conn = new mysqli("localhost","root", "", "MabaseD");

// //approuver la connexion

// if($conn ->mysqli_connect_error){
//   die("connection failed" . $conn->connect_error);
// }

// $sql = "SELECT * FROM 'mabase' ";
// $result = $conn->query($sql);

// if($result->num_rows > 0){
//   //output data of each row_______Affichage

//   while($row = $result->fetch_assoc()){
//     echo "id:" .$row["id"] ."-name:" .$row["name"] ."body:" .$row["body"] ."priority:" .$row["priority"] . "<br>";
//   }
// }else{
//     echo"0 results";
//   }
// $conn->close();


//   if($result){
//     while($row=mysqli_fetch_assoc($result)){
//        $id = $row['id'];
//        $name = $row['name'];
//        $body = $row['body'];
//        $priority = $row['priority']; 
//        $type = $row['type']; 
//        echo ' <tr>
//        <th scope="row">'.$id.'</th>
//        <td>'.$name.'</td>
//        <td>'.$body.'</td>
//        <td>'.$priority.'</td>
//        <td>'.$type.'</td>
//        <td>
//          <button class="btn btn-primary"><a href="update.php?
//          updateid='.$id.'" class="text-light">Update</a></button>
//          <button class="btn btn-primary"><a href="delete.php? 
//          deleteid='.$id.'" class="text-light">Delete</a></button>
//        </td>
//      </tr>';
//  }
//    }

?>

  <!-- <tbody>
   
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody> -->
</table>
    </div>
</body>
</html>