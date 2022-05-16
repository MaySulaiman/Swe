<?php 
include 'db-connect.php' 
?>
<?php
$errors = array(); //To store errors
$form_data = array(); //Pass back the data to `form.php`
 
    $userName = $_POST['username'];
    $comments = $_POST['comments'];
    $placeId = $_POST['placeId'];
    $date=date('Y-m-d H:i:s');
    $star= $_POST['star'];;
   
    

   $insertStr ="INSERT INTO `reviews` (`comments`, `date`, `place_id`, `star`, `username`)
   VALUES ('".$comments."', '".$date."', '".$placeId."', '".$star."', '".$userName."')";
   $response= mysqli_query($connection ,$insertStr);
   $request_id= mysqli_insert_id($connection);

   header("Location:reviewss.php?id=".$placeId);
?>