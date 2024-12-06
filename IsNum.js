function IsNum(obj,event){
var Tecla = event.charCode;
var ie = event.keyCode;
if (!event) event = window.event;
var code;
if (event.keyCode) code = event.keyCode;
else if (event.which) code = event.which; // Netscape 4.?
//se nao for n&#250;mero nem parentesis ou espa&#231;o
if (code < 8 || code > 57 ){
event.returnValue = false;
alert("Digite Somente Numeros!");
if (event.which){
event.preventDefault();
}
return false;
}else{
event.returnValue = true;
return true;
}
}