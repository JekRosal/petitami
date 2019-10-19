<?php
$sql = "SELECT * from inventory_2";
$result = $conn->query($sql);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
	echo  $row["item_name"]. "<br>";
}
} else {
	echo "awew";
}
?>