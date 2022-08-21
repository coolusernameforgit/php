<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>TABLE</title>
</head>

<body>
	<form name="adv" action="store_and_display.php" method="POST">
		<div id="wrapper" style="display: grid; width: 10px;">
			<label for="email">email</label>
			<input id="email" type="email" name="email" />

			<label for="category">category</label>
			<select id="category" name="category">
				<option selected disabled>Категория</option>
				<?php foreach (array_diff(scandir("categories"), array('.', '..')) as $category) {
					echo "<option>{$category}</option>";
				} ?>
			</select>

			<label for="header">header</label>
			<input id="header" type="text" name="header" />

			<label for="text">your text</label>
			<textarea id="text" name="text" rows="10"></textarea>

			<input type="submit" value="submit" />
		</div>
	</form>

</body>
</html>