<main>
<body style="background-image:url('https://loadingstudios.archive.tornadocore.es/images/inicio_movil.jpg');margin: auto; text-align: center;">
<div class="contenido_movil"></br></br></br>


        <htitulo>Área de Clientes:</htitulo></br></br>

        <div id="formulario">
        <div id ="form_texto">Correo:</br></br>
        Contraseña:
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


</br></br>
<img src="https://loadingstudios.archive.tornadocore.es/images/untitled.png" width="124px" height="62px">
</br></br>
<p2>En LoadingStudios.net tenemos un panel de control donde nuestros clientes tendrán un control de sus productos contratados además de un soporte 24/7 por tickets cercano y personal.</p2>
            

       


    

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

