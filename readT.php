<?php

if ($dh = opendir("comprati")){
	while (($file = readdir($dh)) !== false) {
		if($file!="."&&$file!=".."){
			echo "<div class='task'>".$file."</div>";
		}
	}
}