<?php

require __DIR__ . '/vendor/autoload.php';

$client = new Google_Client();
$client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/index.php');
$client->setScopes(Google_Service_Sheets::SPREADSHEETS_READONLY);
$client->setAuthConfig('credentials.json');
$client->setAccessType('offline');
$client->setPrompt('select_account consent');
$service = new Google_Service_Sheets($client);
$spreadsheetId = 'PJRIfnspkd2pi02-FJWPOwojQEtoPdgpJOWEOTgjs-10';
$range = 'AdData!A1:D';
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();
var_dump($values);

?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>TABLE</title>
</head>

<body>
	<form name="adv" action="sheets_api.php" method="POST">
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

<?php
$categories = scandir(__DIR__."/categories");
$ads = [];
foreach($categories as $category){
    if ($category != "." && $category != ".."){
        $ads[$category] = scandir("categories/$category");
    }
};
echo "<table border=1><caption>Ads</caption>";

foreach($ads as $category => $arr){
  echo "<tr><th colspan=3 align=center>" . ucfirst($category) . "</th></tr>";
  foreach($arr as $ad){
    if ($ad != "." && $ad != ".."){
      $file = fopen("categories/$category/$ad", "r");
      $email = fgets($file);
      $headline = fgets($file);
      $Text = fgets($file);
      echo "<tr><td>$email</td><td>$headline</td><td>$Text</td></tr>";
    }
  }
}
echo "</table>";

?>
<body>
<form>
  <label>
    <h1>Ads from GoogleSheets</h1>
    <table border=1>
    	<tr>
				<th>category</th>
				<th>Email</th>
				<th>Header</th>
				<th>Text</th>
			</tr>
    	<tbody>
    		<?php
    		foreach($values as $adData){
    			echo "<tr>" . "<td>" . ucfirst($adData[0]) . "</td>";
    			echo "<td>" . $adData[1] . "</td>";
    			echo "<td>" . $adData[2] . "</td>";
    			echo "<td>" . $adData[3] . "</td>" . "</tr>";
    		}
    		?>
    	</tbody>
    </table>
  </label>
</form>
</body>}