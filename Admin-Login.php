<?php 

	ob_start();
	session_start();
	require_once 'config.php';
	
	// it will never let you open index(login) page if session is set
	if (isset($_SESSION['benutzer'])) {
		header("Location: Admin-Dashboard.php");
		exit;
	}
	
if( isset($_POST['submit']) ) {	

	$b = $_POST['benutzer'];
	$p = $_POST['passwort'];

	if ($b == $benutzer) {
		if ($p == $passwort) {
			$_SESSION['benutzer'] = "true";
			header("Location: Admin-Dashboard.php");
			exit;
		}else{	
			echo "passwort fehler";
		}
	}else{
		echo "benutzerfehler";
	}	
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!-- Roboto Font + Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <!-- Twitter Widget API -->
    <script type="text/javascript" src="https://platform.twitter.com/widgets.js"></script>

    <!-- Mobile Scaling -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Title -->
    <title>MineWolfs Technik Blog</title>

    <!-- Site Description -->
    <meta name="description" content="A simple, easy to work with blog template, for server owners.">

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
                    <li><a href="./Blog.php">Blog</a></li>
                    <li><a href="./Impressum.php">Impressum</a></li>
					<li><a href="./Haftungsschluss.php">Haftungsschluss</a></li>
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
	
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
		
    <!-- Main Content -->
	<form method="POST">
		<div class="form-group">
			<center><FONT SIZE="4"><p>Benutzer:</p></FONT></center>
			<input type="text" placeholder="Gebe deinen Benutzername ein!" name="benutzer">
		</div>
		<div class="form-group">
			<center><FONT SIZE="4"><p>Passwort:</p></FONT></center>
			<input type="password" placeholder="Gebe dein Passwort ein!" name="passwort">
		</div>
		<button type="submit" name="submit" class="btn btn-default">Einloggen</button>
	</form>

	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	
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
