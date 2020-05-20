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
		#sortccdiv, #sortmaxccdiv, #sortattkdiv, #sortmaxattkdiv, #sortdefdiv, #sortmaxdefdiv, #sorthpdiv, #sortmaxhpdiv, #sortpvpdiv, #sortfarmdiv, #sortpassdiv {
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

					// Check connection and make character modals
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
						 <h1>SDSGC Character Stats</h1>
						 <h4>Sort All SDSGC Characters' Stats (Click Character Images for Info)</h4>
						 <h4>Note: Max Stats Data is ungeared - not all character data is available; some new JP releases</h4>
						 <p>Data sources: <a href="https://docs.google.com/spreadsheets/d/1LPWgA2gJWagYyDwtXKbzQ0G5xuZ0Q4_p2Hvrs01fuM4/" target=_blank>Google Sheets</a>, <a href="https://gcdatabase.com/index.html" target=_blank>GCDatabase</a></p>
					 </div>
				 </div>

					<nav>
						<button type = "button" class="button" onclick = "divDisplay('sortccdiv','firstdiv','sortmaxccdiv','sortattkdiv','sortmaxattkdiv','sortdefdiv','sortmaxdefdiv','sorthpdiv','sortmaxhpdiv')"><i class="fas fa-clipboard-list fa-lg"></i> CC</button>
						<button type = "button" class="button" onclick = "divDisplay('sortmaxccdiv','firstdiv','sortccdiv','sortattkdiv','sortmaxattkdiv','sortdefdiv','sortmaxdefdiv','sorthpdiv','sortmaxhpdiv')"><i class="fas fa-clipboard-list fa-lg"></i> Max CC</button>
						<button type = "button" class="button" onclick = "divDisplay('sortattkdiv','firstdiv','sortccdiv','sortmaxccdiv','sortmaxattkdiv','sortdefdiv','sortmaxdefdiv','sorthpdiv','sortmaxhpdiv')"><i class="fas fa-clipboard-list fa-lg"></i> Attack</button>
						<button type = "button" class="button" onclick = "divDisplay('sortmaxattkdiv','sortattkdiv','firstdiv','sortccdiv','sortmaxccdiv','sortdefdiv','sortmaxdefdiv','sorthpdiv','sortmaxhpdiv')"><i class="fas fa-clipboard-list fa-lg"></i> Max Attk</button>
						<button type = "button" class="button" onclick = "divDisplay('sortdefdiv','firstdiv','sortccdiv','sortmaxccdiv','sortattkdiv','sortmaxattkdiv','sortmaxdefdiv','sorthpdiv','sortmaxhpdiv')"><i class="fas fa-clipboard-list fa-lg"></i> Defense</button>
						<button type = "button" class="button" onclick = "divDisplay('sortmaxdefdiv','firstdiv','sortccdiv','sortmaxccdiv','sortattkdiv','sortmaxattkdiv','sortdefdiv','sorthpdiv','sortmaxhpdiv')"><i class="fas fa-clipboard-list fa-lg"></i> Max Def</button>
						<button type = "button" class="button" onclick = "divDisplay('sorthpdiv','firstdiv','sortccdiv','sortmaxccdiv','sortattkdiv','sortmaxattkdiv','sortdefdiv','sortmaxdefdiv','sortmaxhpdiv')"><i class="fas fa-clipboard-list fa-lg"></i> HP</button>
						<button type = "button" class="button" onclick = "divDisplay('sortmaxhpdiv','firstdiv','sortccdiv','sortmaxccdiv','sortattkdiv','sortmaxattkdiv','sortdefdiv','sortmaxdefdiv','sorthpdiv')"><i class="fas fa-clipboard-list fa-lg"></i> Max HP</button>
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
							echo '<div class="dbTable"><div id="header" class="content"><div class="table-wrapper"><table><tr><td>Image</td><td>Character</td><td>PVP Rating</td><td>Farming Rating</td><td>Passive Rating</td><td>In Global</td></tr>';
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo '<tr><td><a onclick="modalFunction(\'' . $row["CharacterName"] . 'Modal\')"><span class="image"><img src="' .  $row["ImageLink"] . '" alt="" /></span></a></td><td>'. $row["CharacterName"]. '</td><td>' . $row["PVP"]. '</td><td>' . $row["Farming"]. '</td><td>' . $row["Passive"]. '</td><td>' . $row["InGlobal"] . '</td></tr>';
							}
							echo '</table></div></div></div>';
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
				</div>

				<div id = "sortccdiv">
					<button type = "button" class="button" onclick = "divDisplay('firstdiv','sortccdiv','sortmaxccdiv','sortattkdiv','sortmaxattkdiv','sortdefdiv','sortmaxdefdiv','sorthpdiv','sortmaxhpdiv')"><i class="fas fa-th-list fa-lg"></i> Show All</button>
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
							echo '<tr><td><a onclick="modalFunction(\'' . $row["CharacterName"] . 'Modal\')"><span class="image"><img src="' .  $row["ImageLink"] . '" alt="" /></span></a></td><td>' . $row["Combat Class"] . '</td><td>'. $row["CharacterName"]. '</td><td>' . $row["InGlobal"] . '</td></tr>';
							}
							echo '</table>';
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
				</div>
				<div id = "sortmaxccdiv">
					<button type = "button" class="button" onclick = "divDisplay('firstdiv','sortccdiv','sortmaxccdiv','sortattkdiv','sortmaxattkdiv','sortdefdiv','sortmaxdefdiv','sorthpdiv','sortmaxhpdiv')"><i class="fas fa-th-list fa-lg"></i> Show All</button>
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

						$sql = "SELECT `InGlobal`, `CharacterName`, `ImageLink`, `MaxCC` FROM aae99dbcx92f7n09.BaseCharacterStats ORDER BY `MaxCC` DESC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							echo '<table><tr><th></th><th>Combat Class</th><th>Character</th><th>In Global</th></tr>';
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo '<tr><td><a onclick="modalFunction(\'' . $row["CharacterName"] . 'Modal\')"><span class="image"><img src="' .  $row["ImageLink"] . '" alt="" /></span></a></td><td>' . $row["MaxCC"] . '</td><td>'. $row["CharacterName"]. '</td><td>' . $row["InGlobal"] . '</td></tr>';
							}
							echo '</table>';
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
				</div>
				<div id = "sortattkdiv">
					<button type = "button" class="button" onclick = "divDisplay('firstdiv','sortccdiv','sortmaxccdiv','sortattkdiv','sortmaxattkdiv','sortdefdiv','sortmaxdefdiv','sorthpdiv','sortmaxhpdiv')"><i class="fas fa-th-list fa-lg"></i> Show All</button>
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
							echo '<tr><td><a onclick="modalFunction(\'' . $row["CharacterName"] . 'Modal\')"><span class="image"><img src="' .  $row["ImageLink"] . '" alt="" /></span></a></td><td>' . $row["Attack"] . '</td><td>'. $row["CharacterName"]. '</td><td>' . $row["InGlobal"] . '</td></tr>';
							}
							echo '</table>';
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
				</div>
				<div id = "sortmaxattkdiv">
					<button type = "button" class="button" onclick = "divDisplay('firstdiv','sortccdiv','sortmaxccdiv','sortattkdiv','sortmaxattkdiv','sortdefdiv','sortmaxdefdiv','sorthpdiv','sortmaxhpdiv')"><i class="fas fa-th-list fa-lg"></i> Show All</button>
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

						$sql = "SELECT `InGlobal`, `CharacterName`, `ImageLink`, `MaxAttack` FROM aae99dbcx92f7n09.BaseCharacterStats ORDER BY `MaxAttack` DESC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							echo '<table><tr><th></th><th>Attack</th><th>Character</th><th>In Global</th></tr>';
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo '<tr><td><a onclick="modalFunction(\'' . $row["CharacterName"] . 'Modal\')"><span class="image"><img src="' .  $row["ImageLink"] . '" alt="" /></span></a></td><td>' . $row["MaxAttack"] . '</td><td>'. $row["CharacterName"]. '</td><td>' . $row["InGlobal"] . '</td></tr>';
							}
							echo '</table>';
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
				</div>
				<div id = "sortdefdiv">
					<button type = "button" class="button" onclick = "divDisplay('firstdiv','sortccdiv','sortmaxccdiv','sortattkdiv','sortmaxattkdiv','sortdefdiv','sortmaxdefdiv','sorthpdiv','sortmaxhpdiv')"><i class="fas fa-th-list fa-lg"></i> Show All</button>
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
							echo '<tr><td><a onclick="modalFunction(\'' . $row["CharacterName"] . 'Modal\')"><span class="image"><img src="' .  $row["ImageLink"] . '" alt="" /></span></a></td><td>' . $row["Defense"] . '</td><td>'. $row["CharacterName"]. '</td><td>' . $row["InGlobal"] . '</td></tr>';
							}
							echo '</table>';
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
				</div>
				<div id = "sortmaxdefdiv">
					<button type = "button" class="button" onclick = "divDisplay('firstdiv','sortccdiv','sortmaxccdiv','sortattkdiv','sortmaxattkdiv','sortdefdiv','sortmaxdefdiv','sorthpdiv','sortmaxhpdiv')"><i class="fas fa-th-list fa-lg"></i> Show All</button>
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

						$sql = "SELECT `InGlobal`, `CharacterName`, `ImageLink`, `MaxDefense` FROM aae99dbcx92f7n09.BaseCharacterStats ORDER BY `MaxDefense` DESC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							echo '<table><tr><th></th><th>Defense</th><th>Character</th><th>In Global</th></tr>';
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo '<tr><td><a onclick="modalFunction(\'' . $row["CharacterName"] . 'Modal\')"><span class="image"><img src="' .  $row["ImageLink"] . '" alt="" /></span></a></td><td>' . $row["MaxDefense"] . '</td><td>'. $row["CharacterName"]. '</td><td>' . $row["InGlobal"] . '</td></tr>';
							}
							echo '</table>';
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
				</div>
				<div id = "sorthpdiv">
					<button type = "button" class="button" onclick = "divDisplay('firstdiv','sortccdiv','sortmaxccdiv','sortattkdiv','sortmaxattkdiv','sortdefdiv','sortmaxdefdiv','sorthpdiv','sortmaxhpdiv')"><i class="fas fa-th-list fa-lg"></i> Show All</button>
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
							echo '<tr><td><a onclick="modalFunction(\'' . $row["CharacterName"] . 'Modal\')"><span class="image"><img src="' .  $row["ImageLink"] . '" alt="" /></span></a></td><td>' . $row["Health"] . '</td><td>'. $row["CharacterName"]. '</td><td>' . $row["InGlobal"] . '</td></tr>';
							}
							echo '</table>';
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
				</div>
				<div id = "sortmaxhpdiv">
					<button type = "button" class="button" onclick = "divDisplay('firstdiv','sortccdiv','sortmaxccdiv','sortattkdiv','sortmaxattkdiv','sortdefdiv','sortmaxdefdiv','sorthpdiv','sortmaxhpdiv')"><i class="fas fa-th-list fa-lg"></i> Show All</button>
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

						$sql = "SELECT `InGlobal`, `CharacterName`, `ImageLink`, `MaxHP` FROM aae99dbcx92f7n09.BaseCharacterStats ORDER BY `MaxHP` DESC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							echo '<table><tr><th></th><th>Health</th><th>Character</th><th>In Global</th></tr>';
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo '<tr><td><a onclick="modalFunction(\'' . $row["CharacterName"] . 'Modal\')"><span class="image"><img src="' .  $row["ImageLink"] . '" alt="" /></span></a></td><td>' . $row["MaxHP"] . '</td><td>'. $row["CharacterName"]. '</td><td>' . $row["InGlobal"] . '</td></tr>';
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
