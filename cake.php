<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
		require_once('DatabaseConnect.php');
		$idCake = $_POST['id'];
		$query  = "SELECT * FROM cake WHERE id = '{$idCake}'";
		$result = $conn->query($query);
		$arCake = mysqli_fetch_assoc($result);
	?>
	<div class="result">
		<h4>Tên bánh: <?php echo $arCake['name']?></h4>
		<h4>Giá bán: <?php echo $arCake['price']?> VNĐ</h4>
		<img src="img/<?php echo $arCake['image']?>" alt="Bánh" style="width: 240px; height: auto">
	</div>
</body>
</html>