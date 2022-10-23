<?php
$user = "example_user";
$password = "parole";
$database = "vtdt";
$table = "todo_list";


echo "<head><meta charset='UTF-8' /></head>";


try {
	$db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
	
	
	echo "<h2>Darāmie darbi ❤️</h2><ol>";
	foreach($db->query("SELECT content FROM $table") as $row) {
		echo "<li>" . $row["content"] . "</li>";
	}
	echo "</ol>";
	echo "<p>Un vēl citi darbi</p>"
} catch (PDOException $e) {
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
}	
