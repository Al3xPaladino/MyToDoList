<?php

$var=trim($_GET['nome']);

if (file_exists("comprare/".$var)) {
	unlink("comprare/".$var);
	chdir("comprati/");
	fopen($var, "w");
	chdir("../");
}

header('location: index.php');