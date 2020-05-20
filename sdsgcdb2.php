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
					$conn->close();
					?>
				</div>

				<!-- Main -->
				<div id="main">

					<article id = "characterinfo">
						<?php
							echo "character page WIP";
						?>
					</article>
				</div>

				<!-- Header -->
				<div id = "mainheader"></div>
				<div id="header">

					<div class="content">
					 <div class="inner">
						 <h1>SDSGC Character Ratings (WIP)</h1>
						 <h4>Sort All SDSGC Characters' Ratings</h4>
						 <p>Data sources: <a href="https://docs.google.com/spreadsheets/d/1LPWgA2gJWagYyDwtXKbzQ0G5xuZ0Q4_p2Hvrs01fuM4/" target=_blank>Google Sheets</a>, <a href="https://gcdatabase.com/index.html" target=_blank>GCDatabase</a></p>
					 </div>
				 </div>

					<nav>
						<button type = "button" class="button" onclick = "divDisplayP2('sortpvpdiv','firstdiv','sortfarmdiv','sortpassdiv')"><i class="fas fa-clipboard-list fa-lg"></i> PVP Rating</button>
						<button type = "button" class="button" onclick = "divDisplayP2('sortfarmdiv','firstdiv','sortpvpdiv','sortpassdiv')"><i class="fas fa-clipboard-list fa-lg"></i> Farming Rating</button>
						<button type = "button" class="button" onclick = "divDisplayP2('sortpassdiv','firstdiv','sortpvpdiv','sortfarmdiv')"><i class="fas fa-clipboard-list fa-lg"></i> Passive Rating</button>
					</nav>
					<!--Search Bar-->
					<form autocomplete="off" action="" method="post">
					  <div class="autocomplete">
					    <input id="charSearch" type="text" name="charNameInput" placeholder="Search (Choose One)"/>
					  </div>
					  <input type="submit" name="SubmitButton"/>
					</form>
				</div>
				<!--/*php
					if(isset($_POST['SubmitButton'])){ //check if form was submitted
					  $input = $_POST['inputText']; //get input text
						echo '<html><script>window.location.href="#characterinfo";</script></html>';
					}
				-->
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
							echo '<tr><td><a href="#characterinfo"><span class="image"><img src="' .  $row["ImageLink"] . '" alt="" /></span></a></td><td>'. $row["CharacterName"]. '</td><td>' . $row["PVP"]. '</td><td>' . $row["Farming"]. '</td><td>' . $row["Passive"]. '</td><td>' . $row["InGlobal"] . '</td></tr>';
							}
							echo '</table></div></div></div>';
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
				</div>

				<div id = "sortpvpdiv">
					<button type = "button" class="button" onclick = "divDisplayP2('firstdiv','sortpvpdiv','sortfarmdiv','sortpassdiv')"><i class="fas fa-th-list fa-lg"></i> Show All</button>
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
					<button type = "button" class="button" onclick = "divDisplayP2('firstdiv','sortpvpdiv','sortfarmdiv','sortpassdiv')"><i class="fas fa-th-list fa-lg"></i> Show All</button>
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
					<button type = "button" class="button" onclick = "divDisplayP2('firstdiv','sortpvpdiv','sortfarmdiv','sortpassdiv')"><i class="fas fa-th-list fa-lg"></i> Show All</button>
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

						$sql = "SELECT `InGlobal`, `CharacterName`, `ImageLink`, `Passive`, `PassiveNum`, `PassImageLink`, `PassiveText`, `CommImageLink`, `CommandmentText` FROM aae99dbcx92f7n09.BaseCharacterStats ORDER BY `PassiveNum` DESC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							echo '<table><tr><th></th><th>Passive Rating<br>(Click for Info)</th><th>Character</th><th>In Global</th></tr>';
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo '<tr><td><span class="image"><img src="' .  $row["ImageLink"] . '" alt="" /></span></td><td><button onclick="modalFunction(\'' . $row["CharacterName"] . 'Modal\')">' . $row["Passive"] . '</button></td><td>'. $row["CharacterName"]. '</td><td>' . $row["InGlobal"] . '</td>
							<div id="' . $row["CharacterName"] . 'Modal" class="modal"><div class="modal-content"><span class="close" onclick="closeButton(\'' . $row["CharacterName"] . 'Modal\')">&times;</span><p><span class="image"><img src="' .  $row["PassImageLink"] . '" alt="" /></span>
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
