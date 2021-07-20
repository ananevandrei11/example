<?php
	$str1 = "text";
	echo nl2br("$str1[3] \n");
	echo nl2br("$str1[2] \n");
	$str2 = "текст";
	echo strlen("$str2")."<br>"; // русские юуквы по 2 байта
	echo mb_strlen("$str2")."<br>"; // русские юуквы c расширением mbstring

	echo chr(36)."<br>";

	echo mb_substr($str2, 0, 2)."<br>"; // mb_ для кириллицы
	echo substr($str1, 0, 2)."<br>";
	
	$str3 = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, sint.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, sint.";

	$str4 = str_replace('.', '.<br>', $str3);
	echo $str4."<br>";
?>
