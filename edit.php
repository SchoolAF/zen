<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>hyprOSS - Add Employees</title>
</head>
<body>
	<div class="container">
		<h2>Edit emplyee data</h2>

        <?php
            include 'config/db_handler.php';
            $id = $_GET['id'];
            $data = mysqli_query($db_handler,"select * from employee where id='$id'");
            while($d = mysqli_fetch_array($data)){
		?>

		<form class="centerize" method="post" action="src/php/update_employee.php">
			<!-- Name -->
			<div class="form-section">
				<div>
					<label for="name">Name</label>
				</div>
				<div>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
					<input class="form-input-underline" type="text" name="name" value="<?php echo $d['name']; ?>">
				</div>
			</div>

			<!-- NIK -->
			<div class="form-section">
				<div>
					<label for="name">NIK</label>
				</div>
				<div>
					<input class="form-input-underline" type="number" name="nik" value="<?php echo $d['nik']; ?>">
				</div>
			</div>

			<!-- Brith Date -->
			<div class="form-section">
				<div>
					<label for="name">Birth Date</label>
				</div>
				<div>
					<input class="form-input-underline" type="date" name="bdate" value="<?php echo $d['bdate']; ?>">
				</div>
			</div>

			<!-- Brith Place -->
			<div class="form-section">
				<div>
					<label for="name">Birth Place</label>
				</div>
				<div>
					<input class="form-input-underline" type="text" name="bplace" value="<?php echo $d['bplace']; ?>">
				</div>
			</div>

			<!-- Division -->
			<div class="form-section">
				<div>
					<label for="name">Division</label>
				</div>
				<div>
					<input class="form-input-underline" type="text" name="division" value="<?php echo $d['division']; ?>">
				</div>
			</div>

			<!-- Address -->
			<div class="form-section">
				<div>
					<label for="name">Address</label>
				</div>
				<div>
					<input class="form-input-underline" type="text" name="address" value="<?php echo $d['address']; ?>">
				</div>
			</div>

			<!-- Submit -->
			<div class="form-section">
				<div>
					<input class="btn_solid-main" type="submit" value="Update Data">
				</div>
			</div>
		</form>
        <?php 
    	}
    	?>
	</div>
</body>
</html>




