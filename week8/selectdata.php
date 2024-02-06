<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Justin Clark Ong">
		<meta name="description" content="All about me!">
		<title>Data</title>
		<link href="favicon.ico" rel=icon>
		<link rel="stylesheet" href="styles.css">
	</head>

	<body>
		<header>
			<h1 id="introduction">Data</h1>
			<a href="./"><img class="avatar" src="id.jpg" alt="Home"></a>
		</header>

<article class="center">
<?php
$servername = "localhost";
$username = "webprogmi222_sf221";
$password = "xE*Y2nleNVvZm[!!";
$dbname = "webprogmi222_sf221";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, website, comment, gender FROM jhong_myguests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    printf("id: %d - Name: %s %s %s %s %s <br>", $row["id"], $row["name"], $row["email"], $row["website"], $row["comment"], $row["gender"]);
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</article>
		<footer><a href="./">Home</a><br>Source code available on <a href="https://github.com/justinclarkong/lab2/tree/main/week8">GitHub</a> &hearts;</footer>
		<script src="scripts.js"></script>
	</body>
</html>
