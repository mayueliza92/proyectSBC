/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function dimePropiedades(){ 
   	var texto
   	texto = "El numero de opciones del select: " + document.formul.miSelect.length 
   	var indice = document.formul.miSelect.selectedIndex 
   	texto += "nIndice de la opcion escogida: " + indice 
   	var valor = document.formul.miSelect.options[indice].value 
   	texto += "nValor de la opcion escogida: " + valor 
   	var textoEscogido = document.formul.miSelect.options[indice].text 
   	texto += "nTexto de la opcion escogida: " + textoEscogido 
   	alert(texto) }