<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Heaven</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="apple-touch-icon" href="https://noneximi.github.io/sdsgc-heaven/apple-touch-icon.png">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

		<style>
		#sortccdiv {
			display: none;
		}
		</style>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<div id = "phpconnect">
					<?php
					$servername = "pqxt96p7ysz6rn1f.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
					$username = "h4h3e3qtsw5tyb6s";
					$password = "kwrzwwxn23vj4trr";
					$dbname = "sdsgc-heaven-db";

					// Create connection
					$conn = new mysqli($servername, $username, $password);

					// Check connection
					if ($conn->connect_error) {
					  die("Connection failed: " . $conn->connect_error);
					}
					echo "Connected to $dbname successfully (pls ignore this mssg)";
					$conn->close();
					?>
				</div>
				<div id = "mainheader"></div>
				<div id="header">
					<div class="content">
					 <div class="inner">
						 <h1>SDSGC Database</h1>
						 <?php echo Hello; ?>
					 </div>
				 </div>

					<nav>
						<button type = "button" class="button primary" onclick = "ccSortFunction()"><i class="fas fa-clipboard-list fa-lg"></i>Sory by CC</button>
					</nav>
				</div>
				<br>
				<div id = "sortccdiv">
					<?php
						$servername = "pqxt96p7ysz6rn1f.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
						$username = "h4h3e3qtsw5tyb6s";
						$password = "kwrzwwxn23vj4trr";
						$dbname = "sdsgc-heaven-db";

						// Create connection
						$conn = new mysqli($servername, $username, $password);

						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						}

						$sql = "SELECT `InGlobal`, `CharacterName`, `ImageLink`, `Combat Class` FROM aae99dbcx92f7n09.BaseCharacterStats ORDER BY `Combat Class` DESC";
						$result = $conn->query($sql);
						$fontawesome = '<i class="far fa-check-square"></i>';
						if ($result->num_rows > 0) {
							echo '<table><tr><th></th><th>Combat Class</th><th>Character</th><th>In Global</th></tr>';
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo '<tr><td><img src="' .  $row["ImageLink"] . '" alt="" /></td><td>CC: ' . $row["Combat Class"] . '</td><td>'. $row["CharacterName"]. '</td><td>' . $row["InGlobal"] . '</td></tr>';
							}
							echo '</table>';
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
				</div>

				<!-- Main -->
				<div id="main">

	        <article id = "characterinfo">

	        </article>
				</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; SDSGC Heaven. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
