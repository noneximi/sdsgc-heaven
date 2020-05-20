<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-165374278-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-165374278-1');
		</script>

		<title>Heaven</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="apple-touch-icon" href="https://noneximi.github.io/sdsgc-heaven/apple-touch-icon.png">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

		<style>
			#sortpvpdiv, #sortfarmdiv, #sortpassdiv {
			display: none;
		}
		</style>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!--initialize-->
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
					echo "Connected to $dbname successfully (pls ignore this mssg)<br>";
					echo "Page may take a moment to load";
					$sql = "SELECT * FROM aae99dbcx92f7n09.BaseCharacterStats ORDER BY `CharacterName` DESC";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
						echo '<div id="' . $row["CharacterName"] . 'Modal" class="modal"><div class="modal-content"><span class="close" onclick="closeButton(\'' . $row["CharacterName"] . 'Modal\')">&times;</span><h2 style="text-align:center;"><span class="image"><img src="' .  $row["ImageLink"] . '" alt="" /></span>' . $row["CharacterName"] . '</h2>
						<p><span class="image"><img src="' .  $row["PassImageLink"] . '" alt="" /></span><br>' . $row["PassiveText"] . '<br><span class="image"><img src="' .  $row["CommImageLink"] . '" alt="" /></span><br>' . $row["CommandmentText"] . '</p>
						<table> <tr><th>In Global?</th><td>' . $row["InGlobal"] . '</td></tr> <tr><th>Combat Class:</th><td>' . $row["Combat Class"] . '</td></tr> <tr><th>Max Combat Class:</th><td>' . $row["MaxCC"] . '</td></tr> <tr><th>PVP Rating:</th><td>' . $row["PVP"] . '</td></tr> <tr><th>Farming Rating:</th><td>' . $row["Farming"] . '</td></tr> <tr><th>Passive Rating:</th><td>' . $row["Passive"] . '</td></tr>
						<tr><th>Attack:</th><td>' . $row["Attack"] . '</td></tr> <tr><th>Max Attack:</th><td>' . $row["MaxAttack"] . '</td></tr> <tr><th>Defense:</th><td>' . $row["Defense"] . '</td></tr> <tr><th>Max Defense:</th><td>' . $row["MaxDefense"] . '</td></tr> <tr><th>Health:</th><td>' . $row["Health"] . '</td></tr> <tr><th>Max Health:</th><td>' . $row["MaxHP"] . '</td></tr>
						<tr><th>Pierce Rate:</th><td>' . $row["Pierce Rate"] . '%</td></tr> <tr><th>Critical Chance:</th><td>' . $row["Critical Chance"] . '%</td></tr> <tr><th>Critical Damage:</th><td>' . $row["Critical Damage"] . '%</td></tr> <tr><th>Resistance:</th><td>' . $row["Resistance"] . '%</td></tr> <tr><th>Critical Resistance:</th><td>' . $row["Critical Resistance"] . '%</td></tr> <tr><th>Critical Defense:</th><td>' . $row["Critical Defense"] . '%</td></tr>
						<tr><th>Regeneration Rate:</th><td>' . $row["Regeneration Rate"] . '%</td></tr> <tr><th>Recovery Rate:</th><td>' . $row["Recovery Rate"] . '%</td></tr> <tr><th>Lifesteal:</th><td>' . $row["Lifesteal"] . '%</td></tr>
						</table></div></div>';
						}
					} else {
						echo "0 results";
					}
					$conn->close();
					?>
				</div>

				<!-- Main -->
				<div id="main">

				</div>

				<!-- Header -->
				<div id = "mainheader"></div>
				<div id="header">

					<div class="content">
					 <div class="inner">
						 <h1>SDSGC Character Ratings</h1>
						 <h4>Sort All SDSGC Characters' Ratings (Click Character Images for Info)</h4>
						 <h4>Note: Max Stats Data is ungeared - not all character data is available; some new JP releases</h4>
						 <p>Data sources: <a href="https://docs.google.com/spreadsheets/d/1LPWgA2gJWagYyDwtXKbzQ0G5xuZ0Q4_p2Hvrs01fuM4/" target=_blank>Google Sheets</a>, <a href="https://gcdatabase.com/index.html" target=_blank>GCDatabase</a></p>
					 </div>
				 </div>

					<nav>
						<button type = "button" class="button" onclick = "divDisplayP2('sortpvpdiv','firstdiv','sortfarmdiv','sortpassdiv')"><i class="fas fa-clipboard-list fa-lg"></i> PVP Rating</button>
						<button type = "button" class="button" onclick = "divDisplayP2('sortfarmdiv','firstdiv','sortpvpdiv','sortpassdiv')"><i class="fas fa-clipboard-list fa-lg"></i> Farming Rating</button>
						<button type = "button" class="button" onclick = "divDisplayP2('sortpassdiv','firstdiv','sortpvpdiv','sortfarmdiv')"><i class="fas fa-clipboard-list fa-lg"></i> Passive Rating</button>
					</nav>
					<!--Search Bar-->
					<nav>
						<div class="autocomplete">
					  	<input id="charSearch" type="text" name="charNameInput" placeholder="Search (Choose One)" autocomplete="off"/>
						</div>
						<button type = "button" class="button" onclick="searchSub()"><i class="fas fa-search"></i></button>
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
							echo '<div id="header" class="content"><div class="table-wrapper"><table><tr><th>Image</th><th>PVP</th><th>Farming</th><th>Passive</th></tr>';
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo '<tr><td><a onclick="modalFunction(\'' . $row["CharacterName"] . 'Modal\')"><span class="image"><img src="' .  $row["ImageLink"] . '" alt="" /></span></a></td><td>' . $row["PVP"]. '</td><td>' . $row["Farming"]. '</td><td>' . $row["Passive"]. '</td></tr>';
							}
							echo '</table></div></div>';
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
				</div>

				<div id = "sortpvpdiv">
					<button type = "button" class="button" onclick = "divDisplayP2('firstdiv','sortpvpdiv','sortfarmdiv','sortpassdiv')"><i class="fas fa-sort-alpha-down"></i> Reset</button>
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

						$sql = "SELECT `CharacterName`, `ImageLink`, `PVP`, `PVPNum`, `Farming`, `Passive` FROM aae99dbcx92f7n09.BaseCharacterStats ORDER BY `PVPNum` DESC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							echo '<table><tr><th></th><th>PVP</th><th>Farming</th><th>Passive</th></tr>';
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo '<tr><td><a onclick="modalFunction(\'' . $row["CharacterName"] . 'Modal\')"><span class="image"><img src="' .  $row["ImageLink"] . '" alt="" /></span></a></td><td>' . $row["PVP"] . '</td><td>'. $row["Farming"]. '</td><td>' . $row["Passive"] . '</td></tr>';
							}
							echo '</table>';
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
				</div>
				<div id = "sortfarmdiv">
					<button type = "button" class="button" onclick = "divDisplayP2('firstdiv','sortpvpdiv','sortfarmdiv','sortpassdiv')"><i class="fas fa-sort-alpha-down"></i> Reset</button>
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

						$sql = "SELECT `CharacterName`, `ImageLink`, `Farming`, `FarmingNum`, `PVP`, `Passive` FROM aae99dbcx92f7n09.BaseCharacterStats ORDER BY `FarmingNum` DESC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							echo '<table><tr><th></th><th>Farming</th><th>PVP</th><th>Passive</th></tr>';
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo '<tr><td><a onclick="modalFunction(\'' . $row["CharacterName"] . 'Modal\')"><span class="image"><img src="' .  $row["ImageLink"] . '" alt="" /></span></a></td><td>' . $row["Farming"] . '</td><td>'. $row["PVP"]. '</td><td>' . $row["Passive"] . '</td></tr>';
							}
							echo '</table>';
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
				</div>
				<div id = "sortpassdiv">
					<button type = "button" class="button" onclick = "divDisplayP2('firstdiv','sortpvpdiv','sortfarmdiv','sortpassdiv')"><i class="fas fa-sort-alpha-down"></i> Reset</button>
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

						$sql = "SELECT `CharacterName`, `ImageLink`, `Passive`, `PassiveNum`, `PassImageLink`, `PassiveText`, `CommImageLink`, `CommandmentText`, `PVP`, `Farming` FROM aae99dbcx92f7n09.BaseCharacterStats ORDER BY `PassiveNum` DESC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							echo '<table><tr><th></th><th>Passive<br>(Click for Info)</th><th>PVP</th><th>Farming</th></tr>';
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo '<tr><td><a onclick="modalFunction(\'' . $row["CharacterName"] . 'Modal\')"><span class="image"><img src="' .  $row["ImageLink"] . '" alt="" /></span></a></td><td><button onclick="modalFunction(\'' . $row["CharacterName"] . 'PModal\')">' . $row["Passive"] . '</button></td>
							<td>'. $row["PVP"]. '</td><td>' . $row["Farming"] . '</td><div id="' . $row["CharacterName"] . 'PModal" class="modal"><div class="modal-content"><span class="close" onclick="closeButton(\'' . $row["CharacterName"] . 'PModal\')">&times;</span><p><span class="image"><img src="' .  $row["PassImageLink"] . '" alt="" /></span>
							<br>' . $row["PassiveText"] . '<br><span class="image"><img src="' .  $row["CommImageLink"] . '" alt="" /></span><br>' . $row["CommandmentText"] . '</p></div></div></tr>';
							}
							echo '</table>';
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
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
			<!--script for search bar stuff-->
			<script>
				var charactersArr = [];
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

					$sql = "SELECT `CharacterName` FROM aae99dbcx92f7n09.BaseCharacterStats ORDER BY `CharacterName` ASC";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						// data of each row
						while($row = $result->fetch_assoc()) {
							echo 'charactersArr.push("' . $row["CharacterName"] . '");';
						}
					} else {
						echo "0 results";
					}
					$conn->close();
				?>
				autocomplete(document.getElementById("charSearch"), charactersArr);
			</script>

	</body>
</html>
