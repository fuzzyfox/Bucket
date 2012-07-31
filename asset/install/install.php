<?php
	
	/*
	 database config
	*/
	//install.sql
	$file = file_get_contents('install.sql');
	$new = str_replace('%DATABASE%', $_GET['database'], $file);
	$fhandle = fopen('install.sql', 'w+');
	fwrite($fhandle, $new);
	fclose($fhandle);
	
	//database.php
	$file = file_get_contents('../../application/config/database.php');
	$new = str_replace('%DATABASE%', $_GET['database'], $file);
	$new = str_replace('%HOSTNAME%', $_GET['hostname'], $new);
	$new = str_replace('%USERNAME%', $_GET['username'], $new);
	$new = str_replace('%PASSWORD%', $_GET['password'], $new);
	$fhandle = fopen('../../application/config/database.php', 'w+');
	fwrite($fhandle, $new);
	fclose($fhandle);
	
	//config.php
	$file = file_get_contents('../../application/config/config.php');
	$new = str_replace('%BASEURL%', '', $file);
	$new = str_replace('%INDEXPAGE%', '', $new);
	$new = str_replace('%LANGUAGE%', 'english', $new);
	$new = str_replace('%ENCRYPTIONKEY%', file_get_contents('https://www.random.org/strings/?num=1&len=20&digits=on&upperalpha=on&loweralpha=on&unique=on&format=plain&rnd=new'), $new);
	$fhandle = fopen('../../application/config/config.php', 'w+');
	fwrite($fhandle, $new);
	fclose($fhandle);
	
	//sandcastle.php
	$file = file_get_contents('../../application/config/sandcastle.php');
	$new = str_replace('%SECRETSALT%', file_get_contents('https://www.random.org/strings/?num=1&len=20&digits=on&upperalpha=on&loweralpha=on&unique=on&format=plain&rnd=new'), $file);
	$fhandle = fopen('../../application/config/sandcastle.php', 'w+');
	fwrite($fhandle, $new);
	fclose($fhandle);