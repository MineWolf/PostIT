<?php

require_once 'config.php';

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
    <meta name="description" content="Your server description...">

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

    <!-- Main Content -->
    <div class="main container-fluid">
        <div class="row">
            <!-- Widget Bar -->
            <div class="col l3 s12">
                <div class="sidebar">
                    <div class="box card-panel z-depth-2">
                        <a class="twitter-timeline" data-dnt="true" data-link-color="#3C91E6" data-tweet-limit="6" href="https://twitter.com/theminemc">Tweets by MineWolfs</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                    </div>
                </div>
            </div>

            <!-- First Blog Post -->
            <div class="row">
                <div class="col l9 s12">
		
					<?php
						mysql_connect($server,  $user,  $password) or die(mysql_error());
						mysql_select_db($database) or die(mysql_error());

						$sql = "SELECT * FROM Blog ORDER BY datum";
						$query = mysql_query($sql) or die(mysql_error());
						
							while($fetch = mysql_fetch_assoc($query)) {
								echo '<div class="card-panel z-depth-2 blog-post">';
									echo '<h5>' . $fetch['titel'] . '</h5>';
									echo '<p class="blog-info">' . $fetch['datum'] .'</p>';
									echo '<div class="row" style="padding-bottom: 25px;">';
										echo '<div class="col l6 s12>';
											echo '<img class="materialboxed" width="100%" height="100%" src="/src/img/castle.jpg'.$fetch['bild'].'">';
										echo '</div>';
											echo '<div class="col s12 l6">';
												echo '<p>' . $fetch['text'] . '</p>';
											echo '</div>';
										echo '</div>';
									echo '</div>';
							
							} 
							
					?>		
		
                </div>
            </div>
        </div>
    </div>

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
