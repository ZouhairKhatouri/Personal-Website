<?php
	$f = "data/titles.txt";
	$file = fopen($f, "r");
	$id=0;
	do 
	{
		$title = utf8_encode(fgets($file));
		$id += 1;
	    echo '<a class="articleLink" href="Article.php?title='.$title.'&id='.$id.'">' . $title . '</a><br>';
	}
	while (!feof($file));
	fclose($file);
?>
