    <?php include('css/Mobile_Detect.php');
    $detect = new Mobile_Detect();
    
    ?>
<main>
            

        <?php 
        if($detect->isMobile())
        {
        echo('<body style="background-image:url(\'https://www.loadingstudios.net/images/inicio_movil.jpg\');margin: auto; text-align: center;">');
        echo('<div class="contenido_movil"></br></br></br>');
        }
        else
        {
        echo('<body style="background-image:url(\'https://www.loadingstudios.net/images/back_iniciosesion.jpg\'); margin: auto; text-align: center;">');
        echo('<div  class="contenido">');
        }?>
        <div id="contenido2_izquierda" class="contenido2">


        <htitulo>Área de Clientes:</htitulo></br></br>

        <div id="formulario">
        <div id ="form_texto"><htitulo2>Correo: </htitulo2></br></br>
        <htitulo2>Contraseña: </htitulo2>
        </div>
            <?php echo validation_errors(); ?>
<?php echo form_open('inicio/comprobar_inicio'); ?>
    <div id ="form_introducido"><input type="text" name="username" value="" size="15" /></br></br>
        <input type="password" name="password" value="" size="15" />

    </div>
            </br></br></br></br>
            <div><input id="binicio" class="boton" type="submit" value="Conectarse" /></div>
        <a2  id="brecuperar" class="boton" href="index3.html">Recuperar Cuenta</a2>
        </form>
        </div>
    </div>


<div id="contenido2_derecha" class="contenido2">
</br></br>'
<img src="https://www.loadingstudios.net/images/untitled.png" width="124px" height="62px">
</br></br>
<p2>En LoadingStudios.net tenemos un panel de control donde nuestros clientes tendrán un control de sus productos contratados además de un soporte 24/7 por tickets cercano y personal.</p2>
            

       
</div>

    
</div>
<footer2>Copyright (c) 2014 by LoadingStudios.net</footer2>


        </main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
 $(document).ready(function (){
 
 $("#binicio").on("mouseenter",funcionManejadora);
 $("#binicio").on("mouseout",funcionManejadora2);
 // evento mouseenter !!
 
	function funcionManejadora()
	{
		$("#binicio").css({
            "border-color": "#2c3f52",
            "background-color":"rgb(243, 234, 234)",
            "border-bottom": "2px solid rgb(105, 105, 105)",
            "box-shadow": "0px 0px 5px #999",
            "color" :"rgb(41, 41, 41)"
		});
	}
	function funcionManejadora2()
	{
		$("#binicio").css({
		"background-color": "white",
                "border-bottom" : "1px solid black",
                "box-shadow" : "0px 0px 0px white",
                "color" : "rgb(105, 105, 105)"
		});
	}        

 });
</script>

