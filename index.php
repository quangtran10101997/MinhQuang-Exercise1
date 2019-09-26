<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercise 1</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php 
		require_once('DatabaseConnect.php');
	?>
	<div class="wrapper">
		<form class="form" action="" method="POST">
			<h3>Bài 3: Ajax, PHP & MySQL - Ví dụ </h3>
			<label>Chọn hộp bánh trung thu</label>
			<select name="list" onchange="display(this.value)">	
				<option class="holder">Hãy chọn...</option>	
				<?php 
					$queryOp    = "SELECT * FROM cake";
					$resultOp = $conn->query($queryOp);
					while ($arOp = mysqli_fetch_assoc($resultOp)) {
				?>
				<option value="<?php echo $arOp['id']?>" id="name" ><?php echo $arOp['name']?></option>
				<?php 
					}
				?>
			</select>
		</form>
		<div id="resultCake">
			<h4>Thông tin bánh sẽ hiện ở đây</h4>
		</div>
	</div>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript">
		function display(id) {	
			$.ajax({
				url: 'cake.php',
				type: 'POST',
				data: 'id='+id,
				async: true,
				success:function(data){
					$('#resultCake').html(data);
				}
			});
		}
	</script>
</body>
</html>
