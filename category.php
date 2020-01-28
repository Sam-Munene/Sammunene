<?php
require_once("index.php");


?>
<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<style type="text/css">
		input[type="text"]{
			color: green;
		}
	</style>
	
</head>
<body>
	<div id="head">
			<h1></h1><br><h1></h1><br><h1></h1><br><h1>ADD SHOP ITEMS IN DATABASE HERE </h1>
	<div id="items">
		<div id="form"><form action="category.php" method="post">
				<?php

$db = mysqli_connect("localhost","root","","inventory system");
if (isset($_POST['add-items'])) {
	# code...
	$name = $_POST['name'];
	$category = $_POST['category'];
	$quantity = $_POST['quantity'];
	$bprice =$_POST['bprice'];
	$sprice = $_POST['sprice'];



$sql = "INSERT INTO items(name,category,quantity,bprice,sprice)VALUES ('$name','$category','$quantity','$bprice','$sprice')";
$query = mysqli_query($db,$sql);

}



	?>

			<b>ITEM NAME TO ADD:</b><input type="text" name="name"><br>
						<b>ITEM CATEGORY :</b><input type="text" name="category"><br>
					<b>QUANTITY IN PCS:</b><input type="text" name="quantity" value="1"><br>
						
				<b>BUY/ PRICE/PCS:</b>:<input type="text" name="bprice"><br>
			<b>SELL/ PRICE/PCS:</b><input type="text" name="sprice"><br>
					<b>PROFIT TO MAKE:</b><input type="text" name="total" value="<?php
if(isset($_POST['add-items'])){


             $sprice = $_POST['sprice'];
			 $bprice = $_POST['bprice'];
			 $profit = $sprice - $bprice;
			 echo"$profit" ;
			 } ?>"><br>
			<B>ITEM CONFIRM:</B> <input type="text" name="" value="<?php 
			$item=$_POST['name'];if ($query) {
	# code...
				echo "SUCCESSFULLY ADDED". $item;
}else{
	echo "NOT ADDED";
}    ?>" ><br></center>
		
			
			 	<b>ADD ITEMS:</b><input type="submit" name="add-items" value="ADD ITEMS TO DATABASE">



		</form>
	</div>
		
	</div>

	</div>

<center></center>


	</body>
</html>
