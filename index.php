<!DOCTYPE html>
<html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/tab.css">
<title>TABUADA WEB</title>
</head>
<body>
<h1 class="hOne">DIGITE UM NÚMERO INTEIRO</h1>
<!-- RISCO DE INJECT (NÃO SEI FAZER AINDA CONDIÇÕES PARA != DE NºS OU PARA CAMPO EM BRANCO) -->
<form method="post" action="" class="form1">
<input type="text" id="a" name="a" class="caixa1">
<input type="submit" value="CONFIRMAR" class="btn1">
</form><br>
</body>
</html>
<?php
$a = 10;
if(isset($_POST['a'])){
    $a = $_POST['a'];
}

//TABUADA
echo ("TABUADA DO $a<br><br>");
echo ("SOMA<br>");
for($i=1;$i<=10;$i++){
echo("$a + $i = ".$a + $i."<br>");
}
echo("<br><br>");

echo ("SUBTRAÇÃO<br>");
for($i=1;$i<=10;$i++){
echo("$a - $i = ".$a - $i."<br>");
}
echo("<br><br>");

echo ("MULTIPLICAÇÃO<br>");
for($i=1;$i<=10;$i++){
echo("$a x $i = ".$a * $i."<br>");
}
echo("<br><br>");

echo ("DIVISÃO<br>");
for($i=1;$i<=10;$i++){
echo("$a / $i = ".$a / $i."<br>");
}
echo("<br><br>");
?>

