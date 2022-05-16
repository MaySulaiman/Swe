<?php 
include("db-connect.php");
 $placeId=0;
    if(isset($_GET['id'])){
        $placeId=$_GET['id'];
           }
?>

 <?php 
   $query="select * FROM place WHERE place_id='$placeId'" ;
   $result = $connection->query($query);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $photo=$row['photo'] ;
        $location=$row['location'] ;
        $placeName=$row['place_name'] ;

        }}
    ?>
<!DOCTYPE html>
<html>
    <head>
      <meta name="viewport" content="width=device-width  initial-scale= 1.0">
      <link rel="stylesheet" href="style.css">
      <link href='https://css.gg/user.css' rel='stylesheet'>
      <link href='https://css.gg/close.css' rel='stylesheet'>
      <link href='https://css.gg/menu.css' rel='stylesheet'>
      <link href='https://css.gg/search.css' rel='stylesheet'>
      <link href='https://css.gg/log-off.css' rel='stylesheet'>
      <link rel="stylesheet" href="review.css">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
      <title> RUH-tainment </title>
    </head>

    <body>
        <section class="header">
            <nav>
                <a href="Admin-Homepage.php"> <img src="images/logo.png"> </a>
                <div class="nav-links" id="navLinks">
                    <i class="gg-close fa"  onclick="hideBurger()"></i>
                    <ul>
                        <li> <a href="Admin-Homepage.php"> HOME </a></li>
                        <li> <a href="Admin-Page.php"> PLACES <br></a></li>
                        <li style="position:absolute;"> <a href="Logout.php" > <i class="gg-log-off"></i></a> </li> 
                    </ul>
                </div>
                <i class="gg-menu fa" id="gg-menu" onclick="showBurger()"></i>
            </nav>

            <div class="text-box">
                <h1> VISIT RIYADH <br> <br> </h1>
                <P> <br> <br></P>
                    <div class="search-box">
                      <input class="search-txt" type="text" name="" id="srch" placeholder="Type to search">
                      
                      <button class="search-btn" onclick="search()" style="border: none;"> <i class="gg-search"></i></button>
                      
                    </div>
            </div>

        </section>

        <br>
        <div class="winH1">
        <h1>  <?php echo $placeName ?></h1> </div>
      <div class="btn-eg">
          <button  type="button" class="btn-ed" onclick= "window.location.href='Delete-Place.php?id=<?php echo $placeId ?>';" >Delete</button>
          <button  type="button" class="btn-ed" onclick= "window.location.href='Edit-Place.php?id=<?php echo $placeId ?>';" >Edit</button>
      </div>
        <hr style="width:35%; text-align:center; margin-left:32.5%; height:10px; color:rgb(255, 255, 255); background-color:rgba(149, 214, 100, 0.66) ;">
        
<br> 
<br> 


<img src="<?php echo $photo ?>" alt=""  class="winImg">
<br>
<iframe src="<?php echo $location ?>"
class="frame"
></iframe>


        <section class="reviews">
            <a href="review.html" ><h1>Reviews <?php echo $placeName ?></h1> </a>
            <br> 
             <?php 
      $query="select * FROM reviews WHERE place_id='$placeId'";
       $result = mysqli_query($connection, $query);

     if ( $result ){
     while ($row = mysqli_fetch_array($result) ) {
                            ?>

                <div class="reviews-col">
                    <img src="Images/user1.png">
                    <div>
                        <h3> <?php echo $row['username'] ?> </h3>
                       <p> <?php echo $row['comments'] ?> </p>
                       <?php if($row['star']==5){ ?>
                       <i class="fa fa-star "></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <?php }?>
                       <?php if($row['star']==4){ ?>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <?php }?>
                        <?php if($row['star']==3){ ?>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <?php }?>
                        <?php if($row['star']==2){ ?>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <?php }?>
                       <?php if($row['star']==1){ ?>
                       <i class="fa fa-star"></i>
                       <?php }?>
                    </div>
                </div>
            <?php } }?>
            <br> 
            <br> 


        </section>
 <!-- MENU TOGGLE -->
       

 <hr style="width:50%; margin-left:25% !important; margin-right:25% !important;">
 <footer class="stickyfooter"> Copyright 2022 - RUH-tainment ALL Rights Reserved </footer>

 <script>

     var navLinks = document.getElementById("navLinks");

     function search() {
                 url = 'Admin-Page.php?sort='+document.getElementById("srch").value;
                 window.open(url);
            }

     function hideBurger() {
         navLinks.style.right="-300px";
        
     }
     function showBurger() {
         navLinks.style.right="0";
        
     }
 </script>

</body>
</html>
        