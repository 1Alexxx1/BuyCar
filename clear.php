<?php
header('Content-type: text/html; charset=utf-8');
define("DBName","testbd");
define("HostName","localhost");
define("UserName","root");
define("Password","");
if(!mysql_connect(HostName,UserName,Password))
{ echo "Error connecting to database".DBName."!<br>";
echo mysql_error();
exit;
}

mysql_select_db(DBName);
 $r=mysql_query("drop database if exists ".DBName);

 $r=mysql_query("create database ".DBName);
mysql_select_db(DBName);

 $r=mysql_query('SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO"');
if(!$r)
{ echo "Error !<br>";
echo mysql_error();
}

 $r=mysql_query('SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO"');
if(!$r)
{ echo "Error !<br>";
echo mysql_error();
}

 $r=mysql_query('SET time_zone = "+00:00"');
if(!$r)
{ echo "Error !<br>";
echo mysql_error();
}
 $r=mysql_query("DROP TABLE IF EXISTS testbd");
if(!$r)
{ echo "Error !<br>";
echo mysql_error();
}

 $r=mysql_query("CREATE TABLE IF NOT EXISTS `testbd` (  `familiya` text NOT NULL,  `imya` text NOT NULL,  `V` int NOT NULL,  `color` text NOT NULL,  `dor` int NOT NULL,  `DB` text NOT NULL, D text NOT NULL, `obl` text NOT NULL,  `dostavka` int NOT NULL,  `kolichestvo` int NOT NULL,  `address` text NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
if(!$r)
{ echo "Error !<br>";
echo mysql_error();
}

 $r=mysql_query("INSERT INTO `testbd` (`familiya`, `imya`, `V`, `color`, `dor`, `DB`, D, `obl`, `dostavka`, `kolichestvo`, `address`) VALUES ('', '', '100', '100', '100', '', '', '100', '? ???????', '1', ''),('', '', '100', '100', '100', '1000', '100', '100', '0', '1', '');");
if(!$r)
{ echo "Error !<br>";
echo mysql_error();
}
 
 
?>
