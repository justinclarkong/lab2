<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Justin Clark Ong">
		<meta name="description" content="What does the cow say?">
		<title>&#128004;&#128172;</title>
		<link href="favicon.ico" rel=icon>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
		<header>
			<h1 id="introduction">Cowsay</h1>
			<a href="./"><img class="avatar" src="id.jpg" alt="Home"></a>
		</header>
		<textarea placeholder="Moo!" id="input"></textarea>
		<input onclick="cow.say()" id="say" type="button" value="Say"/>
<pre style="margin: auto;">
 ______
&lt; <span id="output"></span> &gt;
 ------
        \   ^__^
         \  (oo)\_______
            (__)\       )\/\
                ||----w |
                ||     ||
</pre>
		<footer><a href="./">Home</a><br>Source code available on <a href="https://github.com/justinclarkong/lab2/tree/main/week8">GitHub</a> &hearts;</footer>
		<script src="scripts.js"></script>
		<script type="module">
			import {cow} from "./cowsay.js";
			cow.say();
		</script>
		<script type="text/javascript">
		</script>
	</body>
</html>
