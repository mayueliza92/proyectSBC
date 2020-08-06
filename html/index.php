<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head><link href='../css/images/rdf.ico' rel='shortcut icon' type='image/png'></head>
    <title>buscador web</title>
    <link rel="stylesheet" href="../css/styles/layout.css" type="text/css" />
   <!-- <script type="text/javascript" src="../css/scripts/jquery-ui-1.8.12.custom.min.js"></script>
    --><script type="text/javascript" src="../css/scripts/jquery-1.4.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    
  <!--  <script type="text/javascript" src="../js/searchDBPedia.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
   --><script type="text/javascript" src="../js/lectPresidentJSON.js"></script>
   <link rel="stylesheet" href="../css/styles/layout2.css" type="text/css" />
 

    <body id="top">

        <div class="wrapper col1">
            <div id="header" class="clear">
                <div id="titulo" class="fl_left">
                    <h1><a href="../html/index.php">       PRESIDENTES DEL ECUADOR fallecidos </a></h1>
                    <div class="shadow p-3 mb-5 rounded border border-info">
            
            
          </div>
                    
                    
                </div>

 


            </div>
        </div>
        

       <!-- ####################################################################################################### -->
       <!-- <div class="wrapper col1">
            <div id="topbar" class="clear">


                <div action="" method="post" id="search"> 
                    <fieldset>
                        <legend>Presidente del Ecuador</legend>
                        <input id="searchInput"  placeholder="Nombre del presidente"/>
                        <input type="image" id="go" src="../css/images/search.gif" alt="Search" />
                    </fieldset>
                </div> 
            </div>
        </div> -->
       

          <!--#######################################################################################################--> 
          
          <?php
             define("JSONlocal", "../class/presidentes.json"); 
             $data = file_get_contents(JSONlocal);
                $items = json_decode($data, true);
                $listaItems = $items["presidentes"];
          ?>
                  
          <div id="mayor">
              <div id="page2" class="container1">
                  <div id="seleccion">
                      <form name="fomul"> 
                       <h4>Lista de Presidentes</h4>
                       <select id="producto" name="producto" onchange="ShowSelected();" >                          
                           <option value="" selected>seleccione porfavor</option>

                           <?php
                                    //bucle para recorrer los elementos del array
                                    for ($i = 0; $i<count($listaItems); $i++){
                            ?>
                           
                           <?php
                           echo '<option value="' . $i . '">' . $listaItems[$i]["nombre"]["value"] . '</option>';
                           ?>
                           <?php 
                                    } //cerramos bucle
                            ?>
                             <!--<option value="" selected>seleccione porfavor</option>
                            <option value="" id='displayData'>seleccione porfavor</option>
                     -->
                        </select><br />
                        <br> 
<input type=button value="Buscar" onclick="dimePropiedades()"> 
                        </form>
                  </div>
                 
                  <script type="text/javascript">
                  
     
                  
                  
                  </script>
             <!-- <div class="toc">
        <p>Tabla de contenidos</p>
        <ul>
          <li><a class="mn" href="../forms.html#concept" style="transform: translate(0px, 0px); border-color: rgb(165, 182, 200); color: rgb(53, 100, 148);"><span class="num" style="background-color: rgb(165, 182, 200);">01</span><span class="mul">Concepto</span></a></li>
          <li><a class="mn" href="../forms.html#text-controls" style="transform: translate(0px, 0px); border-color: rgb(165, 182, 200); color: rgb(53, 100, 148);"><span class="num" style="background-color: rgb(165, 182, 200);">02</span><span class="mul">Controles de texto</span></a>
            <ul class="m2">
              <li><a href="../forms.html#single-line-text-input" style="transform: translate(0px, 0px); border-color: rgb(165, 182, 200); color: rgb(53, 100, 148);">Campos de texto de una sola línea</a></li>
              <li><a href="../forms.html#multi-line-text-input" style="transform: translate(0px, 0px); border-color: rgb(165, 182, 200); color: rgb(53, 100, 148);">Campos de texto multilínea</a></li>
            </ul>
          </li>
          <li><a class="mn" href="#option-controls" style="transform: translate(0px, 0px); border-color: rgb(165, 182, 200); color: rgb(53, 100, 148);"><span class="num" style="background-color: rgb(165, 182, 200);">02</span><span class="mul">Controles de opción</span></a>
            <ul class="m2">
              <li><a href="#checkboxes" style="transform: translate(0px, 0px); border-color: rgb(165, 182, 200); color: rgb(53, 100, 148);">Casillas de verificación</a></li>
              <li><a href="#radio-buttons" style="transform: translate(0px, 0px); border-color: rgb(165, 182, 200); color: rgb(53, 100, 148);">Botones de opción</a></li>
              <li><a href="#lists" style="transform: translate(0px, 0px); border-color: rgb(165, 182, 200); color: rgb(53, 100, 148);">Listas</a></li>
            </ul>
          </li>
          <li><a class="mn" href="3.html#buttons"><span class="num">03</span><span class="mul">Botones</span></a>
            <ul class="m2">
              <li><a href="3.html#submit-buttons">Botones de envío</a></li>
              <li><a href="3.html#reset-buttons">Botones de reinicio</a></li>
            </ul>
          </li>
          <li><a class="mn" href="3.html#labeling-controls"><span class="num">04</span><span class="mul">Etiquetado de controles</span></a></li>
          <li><a class="mn" href="3.html#grouping-controls"><span class="num">05</span><span class="mul">Agrupación de controles</span></a></li>
          <li><a class="mn" href="4.html#practice"><span class="num">06</span><span class="mul">Práctica</span></a></li>
        </ul>
      </div>-->
             
             
             
          </div>
          <div id="page1" class="container1">
            

            
            <h1 id="searchTitle"></h1>
            <div id="loading_gif" class="hidden">
                <img id="loading_img" src="../css/images/loading.gif" alt="" />
            </div>
            <div >
                    <?php
	//bucle para recorrer los elementos del array
	for ($i = 0; $i<4; $i++){
?>
	<table border="1">
		<tr>
			<td>link: </td>
			<td>
                            
				<?php 
                                echo $listaItems[$i]["link"]["value"]; ?>	
			</td>
		</tr>
		<tr>
			<td>nombre: </td>
			<td>
				<?php echo $listaItems[$i]["nombre"]["value"]; ?>
			</td>
		</tr>
		<tr>
			<td>Descripcion: </td>
			<td>
				<?php echo $listaItems[$i]["descripcion"]["value"]; ?>
			</td>
		</tr>
		<tr>
			<td>fecha muerte: </td>
			<td>
				<?php echo $listaItems[$i]["fechaMu"]["value"]; ?>
			</td>
		</tr>
		
	</table><br />
        <?php }  ?>
            </div>
            <div id="loading_gif" class="hidden">
                <img id="loading_img" src="../css/images/loading.gif" alt="" />
            </div>
        </div>
          </div>
          
 <!--#######################################################################################################--> 

<div class="content-all">
        <div class="content-carrousel">
            <figure><img src="../css/images/img1.jpg"></figure>
            <figure><img src="../css/images/img2.jpg"></figure>
            <figure><img src="../css/images/img3.jpg"></figure>
            <figure><img src="../css/images/img4.jpg"></figure>
            <figure><img src="../css/images/img5.jpg"></figure>
            <figure><img src="../css/images/img6.jpg"></figure>
            <figure><img src="../css/images/img7.jpg"></figure>
            <figure><img src="../css/images/img8.jpg"></figure>
            
        </div>
    </div>

    </body>
</html>

