<?php

require_once 'config.php';

session_start();
if(!isset($_SESSION['benutzer'])) {
	header("Location: ./Admin-Login.php");
	exit;
}

	if( isset($_POST['submit']) ) {	
		$id = trim($_POST['id']);	

		// Create connection
		$conn = new mysqli($server, $user, $password, $database);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		// sql to delete a record
		$sql = "DELETE FROM `Blog` WHERE ID = ".$id."";

		if ($conn->query($sql) === TRUE) {
			echo "Record deleted successfully";
		} else {
			echo "Error deleting record: " . $conn->error;
		}

		$conn->close();
		echo "ok";
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

	<?php
		mysql_connect($server,  $user,  $password) or die(mysql_error());
		mysql_select_db($database) or die(mysql_error());
 
		$sql = "SELECT * FROM Blog ORDER BY datum";
		$query = mysql_query($sql) or die(mysql_error());
						
			while($fetch = mysql_fetch_assoc($query)) {
				echo '<div class="card-panel z-depth-2 blog-post">';
					echo '<center>' . '<FONT SIZE="6">' . '<p>' . $fetch['titel'] . '</p>' . '</FONT>' . '</center>';
					echo '<center>' . '<FONT SIZE="4">' .'<p class="blog-info">' . $fetch['datum'] . '</FONT>' .'</p>' . '</center>';
					echo '<div class="row" style="padding-bottom: 25px;">';
						echo '<div class="col l6 s12>';
							echo '<img class="materialboxed" width="100%" height="100%" src="/src/img/castle.jpg'.$fetch['bild'].'">';
						echo '</div>';
							echo '<div class="col s12 l6">';
								echo '<p>' . '<FONT SIZE="3">' . $fetch['text'] . '</FONT>' . '</p>';
							echo '</div>';
						echo '</div>';
					echo '</div>';	
				echo '<form method = "post">';
					echo '<div class="btn-group btn-group-justified" role="group" aria-label="...">';
						echo '<div class="btn-group" role="group">';
							echo '<input type="hidden" name="id" value="'.$fetch['ID'].'">';
							echo '<button type="submit" name="submit" class="btn btn-default">Post Entfernen</button>';
						echo '</div>';
					echo '</div>';
				echo '</form>';
			} 			
	?>
	
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
