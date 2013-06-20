<?php
header('Content-type: text/html; charset=utf-8');
//header('Content-type: text/html; charset=windows-1251');
?>

<html>
<head>
<title>Ноутбук</title>
</head>
<body>
Вы можете посмотреть базу данных нажав <a href="added.php">сюда</a>.
</body>
</html>
<?php
define("DBName","testbd");
define("HostName","localhost");
define("UserName","root");
define("Password","");

$familiya=$_REQUEST['familiya'];
echo "<br>Фамилия=$familiya <br>";
$imya=$_REQUEST['imya'];
echo "Имя=$imya <br>";
$v=$_REQUEST['V'];
echo "Обєм двигуна=$V <br>";
$color=$_REQUEST['color'];
echo "ціна з таким кольором =$color <br>";
$dor=$_REQUEST['dor'];
echo "ціна з такою кількістю дверей =$dor <br>";
$obl=$_REQUEST['dor'];
echo "Додаткове обладнання =$obl <br>";
$dostavka=$_REQUEST['dostavka'];
echo "Способ доставки=$dostavka <br>";
$kolichestvo=$_REQUEST['kolichestvo'];
echo "Кількість машин=$kolichestvo <br>";
$address=$_REQUEST['address'];
echo "Адресс доставки=$address <br>";


$file=fopen('zakaz.txt','a+');
fputs($file,$familiya); 
fputs($file,$imya); 
fputs($file,$V); 
fputs($file,$color);
fputs($file,$dor);
fputs($file,$DB);
fputs($file,$D);
fputs($file,$obl);
fputs($file,$dostavka);
fputs($file,$kolichestvo);
fputs($file,$address);
fclose($file);



if(!mysql_connect(HostName,UserName,Password))
{ echo "Error connecting to database".DBName."!<br>";
echo mysql_error();
exit;
} 

mysql_select_db(DBName);

$sql="INSERT INTO testbd";
echo $sql;
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo "Запись успешно добавлена в базу данных.";

//mysql_close($con);

?>
