<?php

// Filename: header.inc

$title = "NLCC 142 AURORA"; // The organization licensed to run the software
$version = "0.0.1"; // The active version number.

/* Time Tracking ver 0.0.1
Created by: Luke Barone (NLCC 142 AURORA)
Copyright 2014. All rights reserved.
Released under the GPL license.

FEATURES:
- Mobile access
- Choose administrator to enter new staff/volunteers
- Create reports showing their times in/out
- Access from remote locations
- All data stored on your own host (no secondary provider required, but it's
  possible)

CHANGELOG:
Version 0.0.1 (Initial Release)
*/
// BELOW - DEBUG ONLY. Remove in production
$loggedin = true;
// END - DEBUG ONLY

if ((!$loggedin) && ((basename($_SERVER['SCRIPT_FILENAME'], '.php') != ("login" | "register"))) ) {
	header('Location: login.php');
}
// echo basename($_SERVER["SCRIPT_FILENAME"], '.php');

?>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
	</head>
	<body>
		<header>Zeitgrab Time Tracker</header>
		
		<nav> <!-- Navigation bar - Left side -->
			<ul>
			<?php
				// Check if user is logged in. If so, remove Login item, add remainder.
				// If not, then only show the Login and Register links.
				if (!$loggedin) {
					echo '
						<li><a href="login.php">Login</a></li>
						<li><a href="register.php">Register</a></li>
						<div id="smallText">Note: the administrator needs to allow registration for public users to register automatically.
						</div>';
				} else {
					echo '
						<li>Enter Time (auto)</li>
						<li>Enter Time (manual)</li>
						<li>View report of time spent</li>
						<li>Help</li>
						<li>Log Out</li>';
				}
			?>
			</ul>
		</nav>
		
		<section> <!-- Actual content -->