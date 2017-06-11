<?php

require_once 'config.php';

session_start(); 
if(!isset($_SESSION['benutzer'])) {
	header("Location: ./Admin-Login.php");
	exit;
}

	if( isset($_POST['submit']) ) {	
		date_default_timezone_set("Europe/Berlin");
		$timestamp = time();
		$datum = date("d/m/Y",$timestamp);
		$titel = trim($_POST['titel']);	
		$bild = trim($_POST['bild']);	
		$text = trim($_POST['post']);	

		// Create connection
		$conn = new mysqli($server, $user, $password, $database);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		// sql to delete a record
		$sql = "INSERT INTO `Blog`(`titel`, `datum`, `bild`, `text`) VALUES ('".$titel."','".$datum."','".$bild."','".$text."')";

		if ($conn->query($sql) === TRUE) {
			echo "Record deleted successfully";
		} else {
			echo "Error deleting record: " . $conn->error;
		}

		$conn->close();
	}
	
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Jquery -->
    <script src="./src/js/jquery-git.min.js"></script>

    <!-- Sticky -->
    <script src="./src/js/jquery.sticky.js"></script>

    <!-- Materialize -->
    <link rel="stylesheet" href="./src/css/materialize.min.css">
    <script src="./src/js/materialize.min.js"></script>

    <!-- Theme's Stylesheet -->
    <link rel="stylesheet" href="./src/css/theme.css" />

    <!-- Boostrap Stylesheet -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
    <!-- Roboto Font + Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <!-- Twitter Widget API -->
    <script type="text/javascript" src="https://platform.twitter.com/widgets.js"></script>

    <!-- Mobile Scaling -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Title -->
    <title>MineWolfs Technik Blog</title>

    <!-- Site Author. Feel free to change this... -->
    <meta name="author" content="MineWolfs">
</head>

<body>
    <!-- NAV -->
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <a href="./index.html" class="brand-logo">MineWolfs Technik Blog</a>
                <ul id="nav-mobile" class="right hide-on-small-and-down">
                    <li><a href="./Admin-Dashboard.php">Dashboard</a></li>
					<li><a href="./Admin-Post.php">Neuer Post</a></li>
					<li><a href="./Admin-Ausloggen.php">Ausloggen</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Header -->
    <div class="header" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./src/img/header-background.png);">
        <div clas="row">
            <div class="col s12">
                <br>
            </div>
        </div>
    </div>

    <!-- Main Content -->
	<form method="POST">
		<div class="form-group">
			<center><FONT SIZE="4"><p>Titel:</p></FONT></center>
			<input type="text" placeholder="Hir bitte den Name des Post eingeben!" name="titel">
		</div>
		<div class="form-group">
			<center><FONT SIZE="4"><p>Bild:</p></FONT></center>
			<input type="text" placeholder="Hir der Name des Bilds rein!" name="bild">
		</div>
		<div class="form-group">
			<center><FONT SIZE="4"><p>Post:</p></FONT></center>
			<textarea name="post" style="width:100%; height:200px;" placeholder="Hir kommt dein Post rein!"></textarea>
		</div>
		<button type="submit" name="submit" class="btn btn-default">Post Absenden</button>
	</form>

	
    <!-- FOOTER -->
    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col s6 l6 left-align">
                        <center><span>Copyright &copy; MineWolfs 2017. All rights reserved.</span></center>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
