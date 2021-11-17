<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="extras/index.css">
	<link rel="stylesheet" href="extras/prism.css">
	<script defer src="extras/prism.js"></script>
	<title>PHP Tutorial</title>
</head>

<body>
	<div class="container">
		<div class="header">
			<h1>Learn PHP The Right Way!</h1>
			<hr>
			<h2>Section 1 - Basics</h2>
			<?php
			$name = "Nouman";
			$languages = array("PHP", "JavaScript", "Python", "Java");
			function isPhp($array)
			{
				echo "<ul>";
				for ($i = 0; $i < count($array); $i++) {
					if ($array[$i] == "PHP") {
						echo "I am Learning $array[$i]";
					} else {
						continue;
					}
				}
				echo "</ul>";
			}
			isPhp($languages);
			echo "<h1>Hello $name</h1>";
			?>
			<pre><code class="language-php">&lt;?php
$name = "Nouman";
$languages = array(
    "PHP",
    "JavaScript",
    "Python",
    "Java"
);
function isPhp($array)
{
    echo "&lt;ul&gt;";
    for ($i = 0;$i &lt; count($array);$i++)
    {
        if ($array[$i] == "PHP")
        {
            echo "I am Learning $array[$i]";
        }
        else
        {
            continue;
        }
    }
    echo "&lt;/ul&gt;";
}
isPhp($languages);
echo "&lt;h1&gt;Hello $name&lt;/h1&gt;";
?&gt;</code></pre>

			<hr>
			<h2>Section 2 - Database</h2>
			<?php
			class Database extends SQLite3
			{
				function __construct()
				{
					$this->open('database.db');
				}
			}
			$db = new Database();
			$exec = $db->exec($sql);
			$sql = "";
			$result = $db->query($sql);
			while ($row = $result->fetchArray()) {
				echo "ID: " . $row[0] . "<br>";
				echo "Name: " . $row[1] . "<br>";
				echo "Age: " . $row[2] . "<br>";
				echo "<br>";
			}
			if (!$db) {
				echo $db->lastErrorMsg();
			} else {
				echo "Opened database successfully <br>";
			}
			if (!$exec) {
				echo $db->lastErrorMsg();
			} else {
				echo "SQL Executed successfully <br>";
			}
			$db->close();
			?>
			<h3>Connect To Database (SQLite)</h3>
			<pre><code class="language-php">&lt;?php
class Database extends SQLite3
{
	function __construct()
	{
		$this->open('database.db');
	}
}
$db = new Database();
if (!$db) {
	echo $db-&gt;lastErrorMsg();
} else {
	echo "Opened database successfully <br>";
}
$db->close();
?&gt;
</code></pre>
			<h3>Create Table</h3>
			<pre><code class="language-php">&lt;?php
$sql = "CREATE TABLE users (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	name VARCHAR(255),
	age INTEGER,
)"
$exec = $db->exec($sql);
if ($exec) {
	echo "Table Created Successfully";
} else {
	echo $db->lastErrorMsg();
}
?&gt;</code></pre>
			<h3>Insert Data</h3>
			<pre><code class="language-php">&lt;?php
$sql = "INSERT INTO users (name, age) VALUES ('Nouman', '21')";
$exec = $db->exec($sql);
if ($exec) {
	echo "Data Inserted Successfully";
} else {
	echo $db->lastErrorMsg();
}
?&gt;</code></pre>
			<h3>Select Data</h3>
			<pre><code class="language-php">&lt;?php
$sql = "SELECT * FROM users";
$result = $db->query($sql);
while ($row = $result-&gt;fetchArray()) {
	echo "ID: " . $row[0] . "&lt;br&gt;";
	echo "Name: " . $row[1] . "&lt;br&gt;";
	echo "Age: " . $row[2] . "&lt;br&gt;";
}
?&gt;</code></pre>
		</div>
	</div>
</body>

</html>