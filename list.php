<?php
header('Content-type: text/html; charset=utf-8');
//header('Content-type: text/html; charset=windows-1251');
?>

<html>
<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Автомобіль</title>

</head>
<body>
</body>
</html>
<?php
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


$result = mysql_query("SELECT * FROM testbd");

echo "<table border=2>

<th>Фамилия</th>
<th>Имя</th>
<th>Обєм двигуна</th>
<th>Колір</th>
<th>Кількість дверей</th>
<th>Тип двигуна</th>
<th>Додаткове обладнання</th>
<th>Способ доставки</th>
<th>Количество</th>
<th>Адресс доставки</th>
"; 

while($row = mysql_fetch_array($result))
 {
  echo "<tr>";
  echo "<td>" . $row['familiya'] . "</td>";
  echo "<td>" . $row['imya'] . "</td>";
  echo "<td>" . $row['V'] . "</td>";
  echo "<td>" . $row['color'] . "</td>";
  echo "<td>" . $row['dor'] . "</td>";
  echo "<td>" . $row['DB'] . "</td>";
  echo "<td>" . $row['D'] . "</td>";
  echo "<td>" . $row['obl'] . "</td>";
  echo "<td>" . $row['dostavka'] . "</td>";
  echo "<td>" . $row['kolichestvo'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "</tr>";
 }

echo"</table>";
//mysql_close($con);
?>
