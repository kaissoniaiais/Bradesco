function CampoObrigatorio(form){
            var erro=0;
            var legenda;
            var obrigatorio;           
            for (i=0;i<form.length;i++){
                        obrigatorio = form[i].lang;
                        if (obrigatorio==1){
                                   if (form[i].value == ""){
                                               var nome = form[i].name;
                                               mudarCorCampo(form[i], 'white');
                                               legenda=document.getElementById(nome);
                                               legenda.style.color="black";
                                               erro++;
                                   }
                        }
            }
            if(erro>=1){
                        alert("Para continuar será necessário que informe todos os campos corretamente.")
						
                        return false;
            } else
                        return true;
}

function mudarCorCampo(elemento, cor){
            elemento.style.backgroundColor=cor;
}