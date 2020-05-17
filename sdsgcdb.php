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
		#sortccdiv, #sortattkdiv, #sortdefdiv, #sorthpdiv, #sortpvpdiv, #sortfarmdiv, #sortpassdiv {
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
						 <h1>SDSGC Heaven Database</h1>
						 <h4>Sort All SDSGC Characters' Base Stats and Ratings</h4>
					 </div>
				 </div>

					<nav>
						<button type = "button" class="button" onclick = "divDisplay('sortccdiv','firstdiv','sortattkdiv','sortdefdiv','sorthpdiv','sortpvpdiv','sortfarmdiv','sortpassdiv')"><i class="fas fa-clipboard-list fa-lg"></i> CC</button>
						<button type = "button" class="button" onclick = "divDisplay('sortattkdiv','firstdiv','sortccdiv','sortdefdiv','sorthpdiv','sortpvpdiv','sortfarmdiv','sortpassdiv')"><i class="fas fa-clipboard-list fa-lg"></i> Attack</button>
						<button type = "button" class="button" onclick = "divDisplay('sortdefdiv','firstdiv','sortccdiv','sortattkdiv','sorthpdiv','sortpvpdiv','sortfarmdiv','sortpassdiv')"><i class="fas fa-clipboard-list fa-lg"></i> Defense</button>
						<button type = "button" class="button" onclick = "divDisplay('sorthpdiv','firstdiv','sortccdiv','sortattkdiv','sortdefdiv','sortpvpdiv','sortfarmdiv','sortpassdiv')"><i class="fas fa-clipboard-list fa-lg"></i> HP</button>
						<button type = "button" class="button" onclick = "divDisplay('sortpvpdiv','firstdiv','sortccdiv','sortattkdiv','sortdefdiv','sorthpdiv','sortfarmdiv','sortpassdiv')"><i class="fas fa-clipboard-list fa-lg"></i> PVP Rating</button>
						<button type = "button" class="button" onclick = "divDisplay('sortfarmdiv','firstdiv','sortccdiv','sortattkdiv','sortdefdiv','sorthpdiv','sortpvpdiv','sortpassdiv')"><i class="fas fa-clipboard-list fa-lg"></i> Farming Rating</button>
						<button type = "button" class="button" onclick = "divDisplay('sortpassdiv','firstdiv','sortccdiv','sortattkdiv','sortdefdiv','sorthpdiv','sortpvpdiv','sortfarmdiv')"><i class="fas fa-clipboard-list fa-lg"></i> Passive Rating</button>
					</nav>
				</div>
				<br>

				<div id = "firstdiv">
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

						$sql = "SELECT `InGlobal`, `CharacterName`, `ImageLink`, `Combat Class`, `PVP`, `Farming`, `Passive` FROM aae99dbcx92f7n09.BaseCharacterStats ORDER BY `CharacterName` ASC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							echo '<table class="table-wrapper"><tr><th>Image</th><th>Combat Class</th><th>Character</th><th>PVP Rating</th><th>Farming Rating</th><th>Passive Rating</th><th>In Global</th></tr>';
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo '<tr><td><span class="image"><img src="' .  $row["ImageLink"] . '" alt="" /></span></td><td>' . $row["Combat Class"] . '</td><td>'. $row["CharacterName"]. '</td><td>' . $row["PVP"]. '</td><td>' . $row["Farming"]. '</td><td>' . $row["Passive"]. '</td><td>' . $row["InGlobal"] . '</td></tr>';
							}
							echo '</table>';
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
				</div>

				<div id = "sortccdiv">
					<button type = "button" class="button" onclick = "divDisplay('firstdiv','sortccdiv','sortattkdiv','sortdefdiv','sorthpdiv','sortpvpdiv','sortfarmdiv','sortpassdiv')"><i class="fas fa-th-list fa-lg"></i> Show All</button>
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

						if ($result->num_rows > 0) {
							echo '<table><tr><th></th><th>Combat Class</th><th>Character</th><th>In Global</th></tr>';
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo '<tr><td><span class="image"><img src="' .  $row["ImageLink"] . '" alt="" /></span></td><td>' . $row["Combat Class"] . '</td><td>'. $row["CharacterName"]. '</td><td>' . $row["InGlobal"] . '</td></tr>';
							}
							echo '</table>';
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
				</div>
				<div id = "sortattkdiv">
					<button type = "button" class="button" onclick = "divDisplay('firstdiv','sortccdiv','sortattkdiv','sortdefdiv','sorthpdiv','sortpvpdiv','sortfarmdiv','sortpassdiv')"><i class="fas fa-th-list fa-lg"></i> Show All</button>
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

						$sql = "SELECT `InGlobal`, `CharacterName`, `ImageLink`, `Attack` FROM aae99dbcx92f7n09.BaseCharacterStats ORDER BY `Attack` DESC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							echo '<table><tr><th></th><th>Attack</th><th>Character</th><th>In Global</th></tr>';
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo '<tr><td><span class="image"><img src="' .  $row["ImageLink"] . '" alt="" /></span></td><td>' . $row["Attack"] . '</td><td>'. $row["CharacterName"]. '</td><td>' . $row["InGlobal"] . '</td></tr>';
							}
							echo '</table>';
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
				</div>
				<div id = "sortdefdiv">
					<button type = "button" class="button" onclick = "divDisplay('firstdiv','sortccdiv','sortattkdiv','sortdefdiv','sorthpdiv','sortpvpdiv','sortfarmdiv','sortpassdiv')"><i class="fas fa-th-list fa-lg"></i> Show All</button>
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

						$sql = "SELECT `InGlobal`, `CharacterName`, `ImageLink`, `Defense` FROM aae99dbcx92f7n09.BaseCharacterStats ORDER BY `Defense` DESC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							echo '<table><tr><th></th><th>Defense</th><th>Character</th><th>In Global</th></tr>';
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo '<tr><td><span class="image"><img src="' .  $row["ImageLink"] . '" alt="" /></span></td><td>' . $row["Defense"] . '</td><td>'. $row["CharacterName"]. '</td><td>' . $row["InGlobal"] . '</td></tr>';
							}
							echo '</table>';
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
				</div>
				<div id = "sorthpdiv">
					<button type = "button" class="button" onclick = "divDisplay('firstdiv','sortccdiv','sortattkdiv','sortdefdiv','sorthpdiv','sortpvpdiv','sortfarmdiv','sortpassdiv')"><i class="fas fa-th-list fa-lg"></i> Show All</button>
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

						$sql = "SELECT `InGlobal`, `CharacterName`, `ImageLink`, `Health` FROM aae99dbcx92f7n09.BaseCharacterStats ORDER BY `Health` DESC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							echo '<table><tr><th></th><th>Health</th><th>Character</th><th>In Global</th></tr>';
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo '<tr><td><span class="image"><img src="' .  $row["ImageLink"] . '" alt="" /></span></td><td>' . $row["Health"] . '</td><td>'. $row["CharacterName"]. '</td><td>' . $row["InGlobal"] . '</td></tr>';
							}
							echo '</table>';
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
				</div>
				<div id = "sortpvpdiv">
					<button type = "button" class="button" onclick = "divDisplay('firstdiv','sortccdiv','sortattkdiv','sortdefdiv','sorthpdiv','sortpvpdiv','sortfarmdiv','sortpassdiv')"><i class="fas fa-th-list fa-lg"></i> Show All</button>
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

						$sql = "SELECT `InGlobal`, `CharacterName`, `ImageLink`, `PVP`, `PVPNum` FROM aae99dbcx92f7n09.BaseCharacterStats ORDER BY `PVPNum` DESC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							echo '<table><tr><th></th><th>PVP Rating</th><th>Character</th><th>In Global</th></tr>';
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo '<tr><td><span class="image"><img src="' .  $row["ImageLink"] . '" alt="" /></span></td><td>' . $row["PVP"] . '</td><td>'. $row["CharacterName"]. '</td><td>' . $row["InGlobal"] . '</td></tr>';
							}
							echo '</table>';
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
				</div>
				<div id = "sortfarmdiv">
					<button type = "button" class="button" onclick = "divDisplay('firstdiv','sortccdiv','sortattkdiv','sortdefdiv','sorthpdiv','sortpvpdiv','sortfarmdiv','sortpassdiv')"><i class="fas fa-th-list fa-lg"></i> Show All</button>
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

						$sql = "SELECT `InGlobal`, `CharacterName`, `ImageLink`, `Farming`, `FarmingNum` FROM aae99dbcx92f7n09.BaseCharacterStats ORDER BY `FarmingNum` DESC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							echo '<table><tr><th></th><th>Farming Rating</th><th>Character</th><th>In Global</th></tr>';
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo '<tr><td><span class="image"><img src="' .  $row["ImageLink"] . '" alt="" /></span></td><td>' . $row["Farming"] . '</td><td>'. $row["CharacterName"]. '</td><td>' . $row["InGlobal"] . '</td></tr>';
							}
							echo '</table>';
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
				</div>
				<div id = "sortpassdiv">
					<button type = "button" class="button" onclick = "divDisplay('firstdiv','sortccdiv','sortattkdiv','sortdefdiv','sorthpdiv','sortpvpdiv','sortfarmdiv','sortpassdiv')"><i class="fas fa-th-list fa-lg"></i> Show All</button>
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

						$sql = "SELECT `InGlobal`, `CharacterName`, `ImageLink`, `Passive`, `PassiveNum` FROM aae99dbcx92f7n09.BaseCharacterStats ORDER BY `PassiveNum` DESC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							echo '<table><tr><th></th><th>Passive Rating</th><th>Character</th><th>In Global</th></tr>';
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo '<tr><td><span class="image"><img src="' .  $row["ImageLink"] . '" alt="" /></span></td><td>' . $row["Passive"] . '</td><td>'. $row["CharacterName"]. '</td><td>' . $row["InGlobal"] . '</td></tr>';
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
