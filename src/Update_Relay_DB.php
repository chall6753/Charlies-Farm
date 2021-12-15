<?php     
  include_once 'database.php';
  
 echo $_SERVER["REQUEST_METHOD"];
 if(isset($_POST['status'])){
     echo 'yeet';
 }
    
    $id = $_GET['id'];
    $status = $_GET['status'];

    
    echo $id;
    $sql = "UPDATE relays SET status = $status WHERE id=$id"; //update status of relay off or on
    mysqli_query($conn,$sql);
    
    header('Location: ./main.php')
    

  
?>