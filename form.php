<?php
header('Content-type: text/html; charset=utf-8');
//header('Content-type: text/html; charset=windows-1251');
?>
<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="content-type" content="text/html; charset=windows-1251">
<script>
function calculate()
{
var radios = document.getElementsByTagName('input');
var summ=0;
for (var i = 0; i < radios.length; i++) {
    if (radios[i].type === 'radio' && radios[i].checked) {
        summ+=parseFloat(radios[i].value);   
    }
}


var nubmer=parseFloat(document.forma.data10.value);
  document.forma.result.value=summ*nubmer;
}
</script>

<title> Зробіть свій вибір автомобіля </title>
</head>
<body>
<form name="forma" method="post" action="add.php">
<p>Замовлення</p>
<p>
Введите свою фамилию:<br>
<input type="text" name="familiya" >
</p>
<p>
Введите свое имя:<br>
<input type="text" name="imya">
</p>
<p>Виберіть обєм двигуна</p>
<p>
<input  type="radio" name="V" value="100" checked>
1.2<br>
<input   type="radio" name="V"  value="200">
1.3<br>
<input   type="radio" name="V"  value="300">
1.4<br>
<input   type="radio" name="V"  value="400">
1.5<br>
<input   type="radio" name="V"  value="500">
1.6<br>
<input   type="radio" name="V"  value="600">
2.0 TDI <br>
<input   type="radio" name="V"  value="700">
2.2 TDI<br>
</p>
<p>Виберіть колір</p>
<p>
<input  type="radio" name="color" value="100" checked>
Білий <br>
<input   type="radio" name="color"  value="200">
Чорний <br>
<input   type="radio" name="color"  value="300">
Зелений<br>
<input   type="radio" name="color"  value="400">
Синій<br>
</p>

<p>Кількість дверей</p>
<p>
<input  type="radio" name="dor" value="100" checked>
3<br>
<input   type="radio" name="dor"  value="200">
4 <br>
<input   type="radio" name="dor"  value="300">
5 <br>
</p>

<p>Тип двигуна</p>
<p>
<input  type="radio" name="DB" value="1000" checked>
Дизель<br>
<input   type="radio" name="DB"  value="400">
Бензин<br>
</p>
<p>Колесні диски </p>
<p>
<input  type="radio" name="D" value="100" checked>
13 <br>
<input   type="radio" name="D"  value="200">
14 <br>
<input   type="radio" name="D"  value="300">
16 <br>
</p>

<<p>Додаткове обладнання:</p>
<p>
<select name="obl" size="1">
<option selected value="10"> GPS</option>
<option value="20">ABS </option>
</select>
</p> 

<p>Выберите способ доставки:</p>
<p>
<select name="dostavka" size="1">
<option selected value="10"> К подезду</option>
<option value="0"> Самовывоз</option>
</select>
</p> 
<p>
Введите количество :<br>
<input type="text" name="kolichestvo" value="1">
</p>
<p> Введите адрес для доставки:<br>
<textarea name="address" cols="40" rows="5"></textarea>
</p>
<input type=button value="Приблизительная стоимость" onClick="calculate();"><br>
<textarea name=result></textarea>
<p>
<input type="submit" value="Показать Ваш заказ" width="20">
 <input type="reset" value="Отмена ">
</p>
</form>
</body>
</html>
