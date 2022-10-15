<?php

chdir("comprare/");
$var=trim($_GET['nome']);
fopen($var, "w");
chdir("../");
header('location: index.php');