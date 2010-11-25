<?php
    //LINUX
	$link = mysql_connect("localhost", $argv[1], $argv[2]) or die(mysql_error());

    //MAC OS X
    //$link = mysql_connect(":/Applications/MAMP/tmp/mysql/mysql.sock", $argv[1], $argv[2]) or die(mysql_error());
    
	mysql_select_db($argv[3], $link);
	mysql_query("DROP DATABASE {$argv[3]}");
	mysql_query("CREATE DATABASE {$argv[3]} DEFAULT CHARACTER SET utf8") or notify("Erro ao criar o banco de dados: ".mysql_error());	
	$handle = opendir(".");
	while (false !== ($file = readdir($handle))) if (substr($file, -3) == "sql") $files[] = $file;
	arsort($files);
	$db_file = array_shift($files);
	echo "\nBanco: ".$argv[3];
	echo "\nArquivo: ".$db_file;
	shell_exec("mysql -u".$argv[1]." -p".$argv[2]." -D".$argv[3]." < ".$db_file);
	mysql_close($link);
?>
