<?php

if ($dh = opendir("comprare")){
	while (($file = readdir($dh)) !== false) {
		if($file!="."&&$file!=".."){
			echo "<div class='task'>".$file."<a href='eliminaR.php?nome=".$file."'><i id='trash' class='fas fa-trash-alt fa-2x'></i></a><a href='fatto.php?nome=".$file."'><i id='check' class='fas fa-check fa-2x'></i></a></div>";
		}
	}
}