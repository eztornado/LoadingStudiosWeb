<main>

    <?php 
    $ancho = '17%';
     $alto = '27%';?>
                <div id="fondo_mitad2" class="fondo_mitad">
                    <hvideos>Vídeos</hvideos>
                </div>
    <div id ="video2" class="contenido_web">
        
            </br>
            <htitulo2>¿Qué funciones presenta a nuestra empresa un video corporativo?</br></br>

                <i class="fa fa-chevron-right"></i>  Imagen profesional: las empresas profesionales siempre utilizan estos recursos para mostrar una imagen profesional a los usuarios, por medio de este video podemos mostrarle a los usuarios la calidad de nuestro trabajo de una manera rápida y efectiva.</br>

                <i class="fa fa-chevron-right"></i> Ideas claras de nuestro trabajo: otra importante función de utilizar un video corporativo, es mostrarle a los usuarios que hacemos y porque lo hacemos así como las ventajas de utilizar nuestros productos o servicios en su empresa.</br>

                            <i class="fa fa-chevron-right"></i>  Costos mínimos: al exponer nuestros videos corporativos en redes sociales y en el ciberespacio logramos un ahorro importante de recursos económicos lo que representa una importante solución para empresa que van comenzando o no tiene los recursos necesarios.</htitulo2>
                            <a href="https://www.loadingstudios.net/inicio/contratar_servicios/" class="button blue large">
                                <i class="fa fa-shopping-cart"></i>  Pedir Presupuesto</a>

                
      
            
        
        </div>  
        <center>
                <div id ="video1" class="contenido_web80">
                    
                    </br></br>
                    <p2> Últimos Proyectos: </p2></br></br><center>       
                                        <?php 
                    
                    foreach ($videos->result() as $row)
                    {
                        
                        echo '<div class="bajable">'.$row->url.'</div>';
                    }
                    ?>
                    
                    </center>
                </div>
            </center>
</div>
        
        <div id="fila4">
            
        <div id="cuadrado4">
            <center>
                </br>
        <i id="ico_publicidad" class="fa fa-star-o fa-4x"></i><htitulo>¿Que nos diferencia de los demás?</htitulo></br>
        <p><i id="ico_publicidad" class="fa fa-check-square-o fa-2x"></i>Precio más económico que la competencia</p>
        <p><i id="ico_publicidad" class="fa fa-check-square-o fa-2x"></i>Panel propio. Control de facturas y soporte</p>
        <p><i id="ico_publicidad" class="fa fa-check-square-o fa-2x"></i>Renderizados de estudio con programas profesionales</p>
        <p><i id="ico_publicidad" class="fa fa-check-square-o fa-2x"></i>Renderizamos en altas resuluciones (720p,1080p,2K,4K)</p>
        <p><i id="ico_publicidad" class="fa fa-check-square-o fa-2x"></i>Experiencia con vídeos corporativos</p>
            </center>
                        
                    </div>
        </div>

        <div id="fila3">
            <a href="https://www.loadingstudios.net/inicio/privacidad" >Politica de privacidad</a>
            <a href="https://www.loadingstudios.net/contacto/" >Localización</a>
            <a href="https://www.loadingstudios.net/inicio/quienes_somos/" >¿Quienes Somos?</a> 
        <a id="icono_social"href="#" > <i class="fa fa-google-plus-square fa-2x"></i></a>
        <a id="icono_social" href="#" > <i class="fa fa-twitter-square fa-2x"></i></a>
        <a id="icono_social"href="#" > <i class="fa fa-facebook-square fa-2x"></i></a>
        <p> © 2014 Loadingstudios.net </p>
        </div>
	</main>
        <script type='text/javascript'>(function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://widget.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({ c: '86da088d-10f2-41b9-bbba-3b72a5d6643e', f: true }); done = true; } }; })();</script>
