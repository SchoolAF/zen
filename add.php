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
		<h2>Add emplyee data</h2>
		<form class="centerize" method="post" action="src/php/add_employee.php">
			<!-- Name -->
			<div class="form-section">
				<div>
					<label for="name">Name</label>
				</div>
				<div>
					<input class="form-input-underline" type="text" name="name">
				</div>
			</div>

			<!-- NIK -->
			<div class="form-section">
				<div>
					<label for="name">NIK</label>
				</div>
				<div>
					<input class="form-input-underline" type="number" name="nik">
				</div>
			</div>

			<!-- Brith Date -->
			<div class="form-section">
				<div>
					<label for="name">Birth Date</label>
				</div>
				<div>
					<input class="form-input-underline" type="date" name="bdate">
				</div>
			</div>

			<!-- Brith Place -->
			<div class="form-section">
				<div>
					<label for="name">Birth Place</label>
				</div>
				<div>
					<input class="form-input-underline" type="text" name="bplace">
				</div>
			</div>

			<!-- Division -->
			<div class="form-section">
				<div>
					<label for="name">Division</label>
				</div>
				<div>
					<input class="form-input-underline" type="text" name="division">
				</div>
			</div>

			<!-- Address -->
			<div class="form-section">
				<div>
					<label for="name">Address</label>
				</div>
				<div>
					<input class="form-input-underline" type="text" name="address">
				</div>
			</div>

			<!-- Submit -->
			<div class="form-section">
				<div>
					<input class="btn_solid-main" type="submit" value="Add Data">
				</div>
			</div>
		</form>
	</div>
</body>
</html>




