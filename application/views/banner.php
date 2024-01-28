
 
	/<!-- Start cssSlider.com -->
	<link rel="stylesheet" href="images/engine1/style.css">
        <link rel="stylesheet" href="images/engine1/estilos.css">
	<!--[if IE]><link rel="stylesheet" href="images/engine1/ie.css"><![endif]-->
	<!--[if lte IE 9]><script type="text/javascript" src="images/engine1/ie.js"></script><![endif]-->

        
	<div class='csslider1 autoplay '>
		<input name="cs_anchor1" id='cs_slide1_0' type="radio" class='cs_anchor slide' >
		<input name="cs_anchor1" id='cs_slide1_1' type="radio" class='cs_anchor slide' >
		<input name="cs_anchor1" id='cs_play1' type="radio" class='cs_anchor' checked>
		<input name="cs_anchor1" id='cs_pause1' type="radio" class='cs_anchor' >
		<ul>
			<div style="width: 100%; visibility: hidden; font-size: 0px; line-height: 0;">
				<img src="images/imagen1.jpg" style="width: 100%;">
			</div>
                    
                    <?php
                    $i = 0;
                    foreach ($noticias_string->result() as $row)
                    {
                      echo"<li class='num".$i." img'>";
                      echo"<a href=\"http://lloadingstudios.net/2/\" target=\"_self\"><img src='".$row->foto."'  title='".$row->titulo."' /> </a>"; 
                      echo"</li>";  
                      $i++;
                    }
                    ?>                     
		
		</ul>
		<a class="cs_lnk" href="http://www.loadingstudios.net">LoadingStudios.net</a>
		<div class='cs_description'>
                    <?php
                    $i = 0;
                    foreach ($noticias_string->result() as $row)
                    {
                        echo"<label class='num".$i."'>";
                        echo"<span class=\"cs_title\"><span class=\"cs_wrapper\">".$row->titulo."</span></span>";
			echo"</label>";
                        $i++;
                    } ?>                   
		</div>
		
		
		</div>
        <?php  
        
?>
        
       
       