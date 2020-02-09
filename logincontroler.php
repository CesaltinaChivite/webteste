<?php 
	if(empty($_POST["user"]) || empty($_POST["password"])){
               header('Location: index.php');
               exit();
          }
  
	include 'db.php';
	 $link = $conn;
     $user = $_POST["user"];
     $password = $_POST["password"];

               
               $comando = "select * from users where user='$user' and password='$password'";
               $resul = mysqli_query($link, $comando);
               $row = mysqli_num_rows($resul);
               DBClose($conn);
               echo $row;
            if($row == 1){
              
                header('Location: home.php');
                exit();
           } else{
 
                header('Location: index.php');
                exit();
           }


 ?>
