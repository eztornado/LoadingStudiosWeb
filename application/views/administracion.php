<main>
            <body style="background-image:url('https://www.loadingstudios.archive.tornadocore.es/images/fcuadrado.png');">

<div id="barra_panel" style="text-align: center;"> 
    <div id="columna_botones">
        <a id ="binicio" class="boton3" href="https://www.loadingstudios.archive.tornadocore.es/administracion/index/estado/inicio">Inicio</a>
        <a id ="bfacturacion" class="boton3" href="https://www.loadingstudios.archive.tornadocore.es/administracion/index/estado/facturacion">Facturación</a>
        <a id ="bsoporte" class="boton3" href="https://www.loadingstudios.archive.tornadocore.es/administracion/index/estado/soporte">Soporte</a>
    </div>
    
</div>
    <div id="contenido_panel">
        <?php 
          $this->load->library('session');
          $this->load->database();
          $usuario = $this->session->userdata('usuario');
        if($estado == "inicio")
        {
         echo('<div id="resultado_inicio">');
           echo('</div>');
         
         
        }
        if($estado == "facturacion")
        {
           echo('<div id="resultado_facutras">');
           echo('</div>');

 
        }
        if($estado == "soporte")
        {
           echo('<div id="resultado_soporte">');
           echo('</div>'); 
            
        }      
         
         
         
         
         
         
         
         ?>
       
    </div>
                
    <?php
    if($estado == "soporte")
    {
        echo('<div id="resultado_soporte_comentario">');
        
           echo('</div>'); 
        
    }
        
        ?>


        </main>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
 $(document).ready(function (){
     
     
     
     
     <?php

  echo "var estado= '{$estado}';";

?>
 
 
 if(estado ==="inicio")
 {
     $("#resultado_inicio").load("https://www.loadingstudios.archive.tornadocore.es/administracion/obtener_inicio");
     $("#binicio").css({"background-color": "rgb(182, 174, 174",
                        "color" : "white"
                        });
 }
  if(estado ==="facturacion")
 {
     $("#resultado_facutras").load("https://www.loadingstudios.archive.tornadocore.es/administracion/obtener_facturas");
     $("#bfacturacion").css({"background-color": "rgb(182, 174, 174",
                        "color" : "white"
                        });
 }
   if(estado ==="soporte")
 {
     $("#resultado_soporte").load("https://www.loadingstudios.archive.tornadocore.es/administracion/obtener_chat");
     $("#resultado_soporte_comentario").load("https://www.loadingstudios.archive.tornadocore.es/administracion/obtener_chat_comentario");
     $("#bsoporte").css({"background-color": "rgb(182, 174, 174",
                        "color" : "white"
                        });
 }

 if(estado !== "inicio")
 {
 $("#binicio").on("mouseenter",funcionManejadora);
 $("#binicio").on("mouseout",funcionManejadora2);
 
 	function funcionManejadora()
	{
		$("#binicio").css({"background-color": "rgb(221, 221, 221)",
               "box-shadow": "0px 0px 5px #999"
        });
	}
 	function funcionManejadora2()
	{
		$("#binicio").css({"background-color": "transparent",
                "box-shadow": "0px 0px 0px transparent" 
        });                        
	}
 }
 if(estado !== "facturacion")
 {
 $("#bfacturacion").on("mouseenter",funcionManejadora3);
 $("#bfacturacion").on("mouseout",funcionManejadora4);
 
 	function funcionManejadora3()
	{
		$("#bfacturacion").css({"background-color": "rgb(221, 221, 221)",
               "box-shadow": "0px 0px 5px #999" 
        });                    
	}
 	function funcionManejadora4()
	{
		$("#bfacturacion").css({"background-color": "transparent",
                "box-shadow": "0px 0px 0px transparent" 
        });                             
	}  
    }
if(estado !=="soporte")
{
 $("#bsoporte").on("mouseenter",funcionManejadora5);
 $("#bsoporte").on("mouseout",funcionManejadora6);
 
 	function funcionManejadora5()
	{
		$("#bsoporte").css({"background-color": "rgb(221, 221, 221)",
               "box-shadow": "0px 0px 5px #999" 
        });                    
	}
 	function funcionManejadora6()
	{
		$("#bsoporte").css({"background-color": "transparent",
                "box-shadow": "0px 0px 0px transparent" 
        });                             
	}  
    }
 });
</script>


