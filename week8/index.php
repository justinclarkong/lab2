<!DOCTYPE html>
<html lang="en-us">
        <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Justin Clark Ong">
		<meta name="description" content="All about me!">
                <title>Home</title>
		<link href="favicon.ico" rel=icon>
		<link rel="stylesheet" href="styles.css">
        </head>

        <body>
		<header>
			<h1 id="introduction">Introduction</h1>
			<a href="./"><img class="avatar" src="id.jpg" alt="Home"></a>
		</header>

		<div class="shell">
<?php
$str = "Hi, I'm Justin!";
echo "<p>$ base64 -d &lt;&lt;&lt; " . base64_encode($str) . "<br>" . $str . "</p>"
?>
		</div>

		<article>
                	<p>I'm an APC student enrolled in BSCS-SF221.</p>
			<p>I chose this course because I love working with computers!</p>
			<p>I also spend my time:</p>
			<ul>
				<li>Playing the piano</li>
				<li>Reading books</li>
				<li>Playing games</li>
			</ul>
		</article>

		<table>
			<th><h3>My Favorite Albums of 2023</h3></th>
			<tr>
				<td>
					<a href="https://sufjanstevens.lnk.to/javelin" target="_blank">
						<img src="https://upload.wikimedia.org/wikipedia/en/5/55/Sufjan_Stevens_-_Javelin.png">
					</a>
					<p><em>Javelin</em><br>Sufjan Stevens</p>
				</td>
			</tr>
			<tr>
				<td>
					<a href="https://ffm.to/diwttiy" target="_blank">
						<img src="https://upload.wikimedia.org/wikipedia/en/f/f3/Caroline_Polachek_-_Desire%2C_I_Want_to_Turn_Into_You.png">
					</a>
					<p><em>Desire, I Want to Turn Into You</em><br>Caroline Polachek</p>
				</td>
			</tr>
			<tr>
				<td>
					<a href="https://hozier.lnk.to/UnrealUnearthWE" target="_blank">
						<img src="https://upload.wikimedia.org/wikipedia/en/d/d5/Hozier_-_Unreal_Unearth.png">
					</a>
					<p><em>Unreal Unearth</em><br>Hozier</p>
				</td>
			</tr>
			<tr>
				<td>
					<a href="https://mitski.lnk.to/TLIIASAW" target="_blank">
						<img src="https://upload.wikimedia.org/wikipedia/en/b/b9/Mitski_-_The_Land_Is_Inhospitable_and_So_Are_We.png">
					</a>
					<p><em>The Land Is Inhospitable and So Are We</em><br>Mitski</p>
				</td>
			</tr>
			<tr>
				<td>
					<a href="https://oliviarodrigo.lnk.to/GUTS" target="_blank">
						<img src="https://upload.wikimedia.org/wikipedia/en/0/03/Olivia_Rodrigo_-_Guts.png">
					</a>
					<p><em>GUTS</em><br>Olivia Rodrigo</p>
				</td>
			</tr>
			<tr>
				<td>
					<a href="https://chappellroan.lnk.to/TheRiseandFallofaMidwestPrincess" target="_blank">
						<img src="https://upload.wikimedia.org/wikipedia/en/3/34/Chappell_Roan_-_The_Rise_and_Fall_of_a_Midwest_Princess.png">
					</a>
					<p><em>The Rise and Fall of a Midwest Princess</em><br>Chappell Roan</p>
				</td>
			</tr>
		</table>
		<blockquote>
			It's just that I fell in love with a war<br>
			Nobody told me it ended
		</blockquote>
		<input type="text" name="urlencode" id="urlencode">
		<input type="button" value="URL Encode" onclick="urlencode()">
		<div id="encodingresult"></div>
		<footer><a href="resources.html">Resources</a><br>Source code available on <a href="https://github.com/justinclarkong/lab2/tree/main/week5" target="_blank">GitHub</a> &hearts;</footer>
		<script src="scripts.js"></script>
		<a id="cowsay" href="cowsay.html">&#128004;&#128172;</a>
        </body>
</html>
