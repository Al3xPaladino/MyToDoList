<?php

$var=trim($_GET['nome']);
if (file_exists("comprati/".$var)) {
	unlink("comprati/".$var);
}

header('location: index.php');