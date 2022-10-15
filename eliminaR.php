<?php

$var=trim($_GET['nome']);
if (file_exists("comprare/".$var)) {
	unlink("comprare/".$var);
}

header('location: index.php');