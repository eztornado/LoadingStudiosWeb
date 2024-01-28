<main>
<body style="background-image:url('https:/images/back_iniciosesion.jpg'); margin: auto; text-align: center;">

<div id="contenido_contratar" class="contenido"> 
            <?php echo validation_errors(); $this->load->helper('form');?>
<?php echo form_open('inicio/comprobar_inicio'); ?>
       
    </br></br>
        <htitulo>Contactar con nosotros sobre un producto:</htitulo></br></br>
        <input type="radio" name="producto" value="musica"><htitulo2>Audio</htitulo2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="producto" value="video"><htitulo2>Vídeo</htitulo2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="producto" value="logo"><htitulo2>Logo</htitulo2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="producto" value="web"><htitulo2>Web</htitulo2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="producto" value="banner"><htitulo2>Gráficos</htitulo2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     

        <div id ="respuesta_ajax">
            
            
            
        </div>
    </br></br></br>
</main>
</br></br>
    <footer>

                                <img src="https://www.loadingstudios.net/images/facebook.png" width="26px" height="26px">
                            <img src="https://www.loadingstudios.net/images/twitter.png" width="26px" height="26px">
                            <img src="https://www.loadingstudios.net/images/google.png" width="26px" height="26px">  
                                    <a href="#" >¿Quienes Somos?</a> 
        <a href="#" >Localización</a> 
        <a href="#" >Politica de privacidad</a>
    </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
 $(document).ready(function (){

    $('input[name=producto]:radio').on("click",function(e){
        var producto = $('input[name=producto]:radio:checked').val();
        
        if(producto === "musica")
        $("#respuesta_ajax").load("https://www.loadingstudios.net/inicio/contratar_calcular/prod/musica");
        if(producto === "video")
        $("#respuesta_ajax").load("https://www.loadingstudios.net/inicio/contratar_calcular/prod/video");
        if(producto === "logo")
        $("#respuesta_ajax").load("https://www.loadingstudios.net/inicio/contratar_calcular/prod/logo");
        if(producto === "web")
        $("#respuesta_ajax").load("https://www.loadingstudios.net/inicio/contratar_calcular/prod/web");
        if(producto === "banner")
        $("#respuesta_ajax").load("https://www.loadingstudios.net/inicio/contratar_calcular/prod/banner");    
    });     
     

 });
</script>


