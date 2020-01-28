<?php
$msg="";
// at button press
if(isset($_POST['upload'])){
    //path to store uploaded image
    $target = "images/".basename($_FILES['image']['name']);
    //connect to database
    $db = mysqli_connect("localhost", "root", "", "ADMIN PANEL");
    //get submitted data from form
    $image = $_FILES['image']['name'];
    $content = $_POST['content'];
    $contacts = $_POST['contacts'];


    $sql = "INSERT INTO addcontent (image, content, contacts) VALUES ('$image', '$content', '$contacts')";
    mysqli_query($db, $sql); //store tyhe submitted into db table: images
    // move uploaded image into folder:images
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded well";       
    }else{

        $msg = "error";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
   
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-compatible" content="ie=edge">
 <title>Index.php</title>
</head>
<style> #header{
        
    
        width: 100%;
        position: fixed;
        background-color: green;
        color: white;
  background-color: green;
  color: white;
  height:auto;
  margin-bottom: 40px;

  padding-bottom: auto;

}
li{
  display: inline-block;
}
li a {

    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li a:hover:not(.active) {
    background-color: orange;
}



#sidebar{
  position: fixed;
  background-color: gray;
  color: white;
  font-size: 15px;
  font-family: sans-serif;
  font-color:white;
  float: left;
  width: auto;
  height: 600px;
padding-bottom: 40px;
margin-top: 75px;


}
  ul li:hover{
    background-color: white;

}

    }
    #content{
        float: right;
        width: 100%;
        margin-left: 35%;
        
                border:2px solid blue;
    }
    #table{
        margin-left: 25%;
    }
    form{
        width: width:100%;
        margin: 20px auto;
    }
    form div{
        margin-top: 5px;
    }
    #img_div{
        width: 650px;
        height: 80%;
    float: center;
        padding: 5px;
        margin: 15px auto;
        border:1px solid red;

    }
    
    }
    img{
       
        margin: 5px;
        width: 100%;
        height: 80%;
    }


    
</style>
<body bgcolor="">

       
   <div id="header"> 
<ul>
    <li><a  href="index.php">HOME</a></li>

  <li><a  href="signup.php">SIGNUP</a></li>
  <li><a href="login.php">LOGIN</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  <li><a href="login.php">ADVERTISE HERE</a></li>


  <li><ol> <form action="search.php" method="post"> 
    <input type="text" name="search" placeholder="search here">
 <input type="submit" name="submit-search" value="SEARCH">

</form></ol></li>

</ul>

 </div>


  <div id="sidebar">
    <ul>
      
    <li><a href="electricals.php">ELECTRICALS</a></li><br>
    <li><a href="cars.php">CARS</a></li><br>
    <li><a href="home appliances.php">HOME APPLIANCES</a></li><br>
    <li><a href="IT.php">IT PROFESSIONS</a></li><br>
    <li><a href="machines.php">MACHINES</a></li><br>
    <li><a href="buildings.php">BUILDINGS</a></li><br>
  
</ul>
  </div>




<div class="article-container">
    <?php
    $host="localhost";
    $username="root";
    $password="";
    $dbname="ADMIN PANEL";
    //create connection
    $conn=mysqli_connect($host,$username,$password,$dbname);
    $sql = "SELECT * FROM  addcontent";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);

    if ($queryResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div>
            
            
            
            </div>";
        }

    }

    ?>
</div></th>



    </div>
</div>
    <div id="content">
   <?php
        $db = mysqli_connect("localhost","root", "", "ADMIN PANEL");
        $sql = "SELECT *FROM addcontent ";
        $result = mysqli_query($db,$sql);
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<div id='img_div'>";
            echo "<th>";
            echo "<img src='images/".$row['image']." ' width='200px height='200px>";
            echo "</th>";
            echo "</tr>";
            echo "<p>".$row['content']."</p>";
            echo "<p>".$row['contacts']."</p>";
           

            echo "</div>";
        }

        ?>

            
          
    </div></center>

</body>
</html>