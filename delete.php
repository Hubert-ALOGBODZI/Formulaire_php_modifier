<?php
  include 'Database.php';
  if(isset($_GET['deleteid'])){
      $id = $_GET['deleteid'];

      $sql = "delete from mabase where id=$id";
      $result = mysqli_query($conn,$sql);
      if($result){
        //   echo"delete successfull";
        header('location:modif.php');
      }else{
          die(mysqli_error($conn));
      }
  }

?>