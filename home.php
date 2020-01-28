<?php
require_once("index.php");


?>
<!DOCTYPE html>
<html>
<head>
	<title>home</title>
<link rel="stylesheet" type="text/css" href="category.css">	
</head>
<body>
	<div id="head">
			<h1></h1><br><h1></h1><br><h1></h1><br><h1>WELCOME TO INVENTORY MANAGEMENT SYSTEM</h1>
	<div id="items">
		<div id="form"><form>
		<?php
		$db = mysqli_connect("localhost","root","","inventory system");
	if (isset($_POST['buy'])) {
			$post = $_POST['item'];
		 $search = mysqli_real_escape_string($conn, $post);
		 $sql = "SELECT * FROM items WHERE category LIKE '%$search%' OR sprice LIKE '%$search%'";
		 $result = mysqli_query($conn, $sql);
		 $queryResult = mysqli_num_rows($result);

		 echo "There are ".$queryResult." results found!";

		 if ($queryResult > 0) {
		 	while ($row = mysqli_fetch_array($result)) {
		 		
		 	$category = $row['category'];
		 	$sprice = $row['sprice'];

		 	
		 	}
		 
		 }else{
		 	echo "No results found";
		 }


}



		?>
						<b>ITEM NAME:</b><input type="text" name="item"><b>CATEGORY:</b><input type="text" name="category" value="<?php
								$db = mysqli_connect("localhost","root","","inventory system");
	if (isset($_POST['buy'])) {
			$post = $_POST['item'];
		 $search = mysqli_real_escape_string($conn, $post);
		 $sql = "SELECT * FROM items WHERE category LIKE '%$search%' ";
		 $result = mysqli_query($conn, $sql);
		

		 
		 	while ($row = mysqli_fetch_assoc($result)) {
		 		$category = $row['category'];
		 		echo '$category';
		 		
		

		 	
		 	}
		 
		


}
						    ?>">
						<br>
			
			<b>QUANTITY:</b><input type="text" name="quantity" value="1">
			<b>PRICE:</b><input type="text" name="price" value="<?php  echo'$sprice'  ?>"><br><br>
			
				<b>CASH</b>:<input type="text" name="cash">
				<b>CHANGE</b>:<input type="text" name="change"><br>

			<center><b>TOTAL:</b><input type="text" name="total"><br><br></center>
					<b>BUY:</b><input type="submit" name="buy" value="BUY SELECTED ITEMS">


		</form>
	</div>
		
	</div>

	</div>
	</body>
</html>
