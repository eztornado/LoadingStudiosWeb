<main>

                <div id="fondo_mitad4" class="fondo_mitad">
                    <hmusica>Gráficos</hmusica>
                </div>
    <div id ="graficos2" class="contenido_web">
        
            </br>
            <htitulo2>
                La imagen corporativa. Se produce al ser recibida.</br></br>
                <i class="fa fa-chevron-right"></i>  El público recibe continuamente mensajes transmitidos de manera intencionada o no intencionada.</br> 
                <i class="fa fa-chevron-right"></i>  Es la manifestación visual de una empresa o asociación por medio de la forma, el color y movimiento, 
                con el objeto de representar de manera coherente y tangible una identidad corporativa.</br>

                <i class="fa fa-chevron-right"></i>  La Imagen Corporativa va más allá que un simple logotipo o membrete.</br>
                <i class="fa fa-chevron-right"></i>  Es la expresión más concreta y visual de la identidad de una empresa, organismo o institución. </br>
                <i class="fa fa-chevron-right"></i>  En un mercado tan competitivo y cambiante, la imagen es un elemento definitivo de diferenciación y posicionamiento.
            </htitulo2>
                                        <a href="https://www.loadingstudios.net/inicio/contratar_servicios/" class="button red large">
                                <i class="fa fa-shopping-cart"></i>  Pedir Presupuesto</a>

        
        </div>  
        <center>
                <div id ="graficos1" class="contenido_web80">
                    
                    </br></br></br></br>
                    <p2> Últimos logotipos: </p2></br></br>
                                                            <?php 
                    
                    foreach ($logotipos->result() as $row)
                    {
                        
                        echo '<div class="bajable"><a href="'.$row->url.'" data-lightbox="image-1" data-title="'.$row->nombre.'"><img src="'.$row->url.'" width="120px" height="120px"><p>'.$row->nombre.'</p></a></div>' ;
                    }
                    ?>
                </div>
            </center>
        
        <div id="fila4">
            
        <div id="cuadrado4">
        <center></br>
        <i id="ico_publicidad" class="fa fa-star-o fa-4x"></i><htitulo>¿Que nos diferencia de los demás?</htitulo></br>
        <p><i id="ico_publicidad" class="fa fa-check-square-o fa-2x"></i>Según el pedido y presupuesto utilizamos renderizados 3D</p>
        <p><i id="ico_publicidad" class="fa fa-check-square-o fa-2x"></i>Panel propio. Control de facturas y soporte</p>
        <p><i id="ico_publicidad" class="fa fa-check-square-o fa-2x"></i>Creación de todo tipo de gráficos : Logotipo,Banners,GIF entre otros</p>
        <p><i id="ico_publicidad" class="fa fa-check-square-o fa-2x"></i>Trabajamos formatos variados entre ellos flash</p>
        <p><i id="ico_publicidad" class="fa fa-check-square-o fa-2x"></i>Oferta especial logtipo + Banner</p>
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

	<script>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-2196019-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>