<?php

if ($dh = opendir("comprati")){
	while (($file = readdir($dh)) !== false) {
		if($file!="."&&$file!=".."){
			$fpath = 'comprati/'.$file;
			$Mod = filemtime($fpath);
			if(date("d/m/Y",$Mod)<date("d/m/Y",time())){
				unlink($fpath);
			}
		}
	}
}