<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lecture 11 Form Handling</title>
</head>
<body>
	<?php
	// uncomment the line below to see the value of the POST data
	// echo '<pre>' . print_r($_POST, true) . '</pre>';
	 ?>
	<h1>Lecture 11: Form Handling</h1>
	<h2>Student Info Form</h2>
	<form action="index.php" method="post">
		<!-- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/fieldset -->
		<fieldset>
			<label for="first_name">Enter first name</label>
			<input type="text" name="first_name" required>
		</fieldset>

		<fieldset>
			<label for="last_name">Enter last name</label>
			<input type="text" name="last_name" required>
		</fieldset>

		<fieldset>
			<label for="age">Enter age</label>
			<input type="number" name="age">
		</fieldset>

		<fieldset>
			<p>Select gender</p>
			<label for="male">Male</label>
			<input type="radio" name="gender" value="male">
			<br>
			<label for="female">Female</label>
			<input type="radio" name="gender" value="female">
		</fieldset>

		<fieldset>
			<select name="year" id="year">
				<option value="freshman">Freshman</option>
				<option value="sophomore" selected>Sophomore</option>
				<option value="junior">Junior</option>
				<option value="senior">Senior</option>
			</select>
		</fieldset>

		<fieldset>
			<p>Select classes completed</p>
			<label for="classes[]">CS101</label>
			<input type="checkbox" value="cs101" name="classes[]">
			<br>
			<label for="classes[]">CS102</label>
			<input type="checkbox" value="cs102" name="classes[]">
			<br>
			<label for="classes[]">CS2350</label>
			<input type="checkbox" value="cs2350" name="classes[]">
			<br>
		</fieldset>

		<fieldset>
			<label for="telephone">Enter telephone</label>
			<input type="tel" name="telephone">
		</fieldset>

		<input type="submit" name="Submit">
	</form>

	<?php if ( !empty($_POST['first_name']) ): ?>
		<h3>Thanks for submitting <?php $_POST['first_name'] ?>, this is the data we collected:</h3>
		<table>
			<tr>
				<td>First Name</td>
				<td><?php echo $_POST['first_name'] ?></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><?php echo $_POST['last_name'] ?></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><?php echo $_POST['age'] ?></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><?php echo $_POST['gender'] ?></td>
			</tr>
			<tr>
				<td>Classification year</td>
				<td><?php echo $_POST['year'] ?></td>
			</tr>
			<tr>
				<td>Classes completed</td>
				<td>
					<?php
						// http://php.net/manual/en/function.implode.php
						echo implode(', ', $_POST['classes'])
					?>
				</td>
			</tr>

			<tr>
				<td>Telephone</td>
				<td><?php echo $_POST['telephone'] ?></td>
			</tr>
		</table>
	<?php endif ?>
</body>
</html>
