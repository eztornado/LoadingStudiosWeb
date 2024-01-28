<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Panel extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            $this->load->library('session');
            if($this->session->userdata('logueado') != null)
            {
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
                          $data['conexion'] = $this->session->userdata('logueado');
                $this->load->view('headerhtml',$data);

                        $get = $this->uri->uri_to_assoc();
            $data2['estado'] = $get['estado']; // valor
            $this->load->view('panel',$data2);
            
            
            }

            else
            {
                echo ("La sesion no ha sido iniciada. El Acceso ha sido restringido.");
            }
        }
        
        public function obtener_pdf()
        {
         $this->load->library('session');
         $usuario = $this->session->userdata('usuario');            
                        $get = $this->uri->uri_to_assoc();
            $producto = $get['pdf']; // valor            
            $this->load->database();
            $query = $this->db->query('SELECT usuario_factura,metodo_pago,trabajador_asignado,descripcion,fecha_finalizacion, facturacion.proyecto proyecto_referencia,facturacion.referencia facturacion_referencia ,proyectos.nombre proyectos_nombre ,fecha,precio from facturacion,proyectos where facturacion.usuario_factura ="' .$usuario.'" and facturacion.referencia ="'.$producto.'"  and facturacion.referencia = proyectos.referencia and facturacion.usuario_factura = proyectos.usuario limit 1');


            if ($query->num_rows() > 0)
            {
                foreach ($query->result() as $row)
            {
                
                if($usuario == $row->usuario_factura)
                {
                    $dato['usuario_factura'] = $row->usuario_factura;
                    $dato['descripcion'] = $row->descripcion;
                    $dato['fecha_finalizacion'] = $row->fecha_finalizacion;
                    $dato['facturacion_referencia'] = $row->facturacion_referencia;
                    $dato['proyecto_nombre'] = $row->proyectos_nombre;
                    $dato['facturaion_fecha'] = $row->fecha;
                    $dato['trabajador_asignado'] = $row->trabajador_asignado;
                    $dato['proyecto_referencia'] = $row->proyecto_referencia;
                    $dato['metodo_pago'] = $row->metodo_pago;
                    $dato['precio'] = $row->precio;
                    $this->load->view('factura2',$dato);
		$html = $this->output->get_output();
		
		// Load library
		$this->load->library('dompdf_gen');
		
		// Convert to PDF
		$this->dompdf->load_html($html);
		$this->dompdf->render();
                $nombre_factura = "factura_" .$row->facturacion_referencia. "";
		$this->dompdf->stream($nombre_factura);                     
                
                }

            
            }
            }
                            else
                    echo("La factura no pertenece al usuario logueado. Se ha denegado el acceso.");
            
           
            
            
        }
        public function obtener_inicio()
        {
         $this->load->library('session');
         $usuario = $this->session->userdata('usuario');
         echo("<div id=nombre_inicio>");
         echo("</br></br>");
         echo ("<htitulo>Hola de nuevo, ".$usuario." : </htitulo>");
         echo ("</div>");
         echo("</br></br></br>");
         echo("Información de Contacto:</br>");
         echo("Nombre Completo : ".$this->session->userdata('usuario')."</br>");
         echo("Correo : ".$this->session->userdata('correo')."</br>");
         echo("Web : ".$this->session->userdata('web')."</br>");
         echo("Telefono : ".$this->session->userdata('telefono')."</br>");
         echo("Direccion : ".$this->session->userdata('direccion')."</br>");
         echo("DNI : ".$this->session->userdata('dni')."</br>");
         echo("Nombre Empresa : ".$this->session->userdata('empresa')."</br>");
        }
        
        
        public function obtener_facturas()
        {
            $this->load->library('session');
            $usuario = $this->session->userdata('usuario');
            $this->load->database();
            $query = $this->db->query('SELECT facturacion.referencia,proyectos.nombre,fecha,precio from facturacion,proyectos where facturacion.usuario_factura ="' .$usuario.'" and facturacion.referencia = proyectos.referencia and facturacion.usuario_factura = proyectos.usuario ');
            if ($query->num_rows() > 0)
            {
                echo("<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>");
                echo("<link href='http://fonts.googleapis.com/css?family=Droid+Sans|Montserrat' rel='stylesheet' type='text/css'>");
                echo("<link rel=\"stylesheet\" href=\"https://www.loadingstudios.archive.tornadocore.es/images/engine1/estilos.css\">");                
                echo ("Mis facturas:");
                echo ('<table>');
                echo('<td> <b> Proyecto </b>');
                echo('<td> <b> Fecha    </b>');
                echo('<td> <b> Precio   </b>');
                echo('<td> <b> Ver Factura   </b>');

                foreach ($query->result() as $row)
                {
                    echo("<tr>");
                    echo("<td>" .$row->nombre. "</td>");
                    echo("<td>" .$row->fecha. "</td>");
                    echo("<td>" .$row->precio. "</td>");
                    echo("<td> <a href=\"https://www.loadingstudios.archive.tornadocore.es/panel/obtener_pdf/pdf/".$row->referencia."\" style=\"color:white;\">Descargar</a></td>");
                    echo("</tr>");
                }
                echo("</table>");
                
            }
        }
        
        public function obtener_chat()
        {
            $this->load->library('session');
            $usuario = $this->session->userdata('usuario');
            $this->load->database();
            $query = $this->db->query("SELECT * FROM tickets_mensajes where Destinatario = '".$usuario."' or usuario = '".$usuario."' order by fecha ASC"); // lo mandado a mi
            
            echo('<div id="espacio_chat">');

            foreach ($query->result() as $row)
            {
                
                if($row->Destinatario != "admin" )
                {
                    echo('<div id="comentario_izquierda">');
                    echo('<div id="comentario_nombre">');
                    echo $row->usuario;
                    echo('</div>');
                    echo('<div id="comentario_texto">');
                    echo $row->mensaje;
                    echo('</div>');
                    echo('</div>');                    
                    
                }
                else
                {
                    echo('<div id="comentario_derecha">');
                    echo('<div id="comentario_nombre">');
                    echo $row->usuario;
                    echo('<a href="https://www.loadingstudios.archive.tornadocore.es/panel/borrar_comentario/comentario/'.$row->referencia.'/"> Borrar</a>');
                    echo('</div>');
                    echo('<div id="comentario_texto">');
                    echo $row->mensaje;
                    echo('</div>');
                    echo('</div>');                    
                    
                }
            }
            

            
            
            
            echo('</div>');
            
            
        

            echo('</br></br></br></br></br></br></br></br>');
            
   
            
            
            
            echo('</div>');

            
            
            
        }
        
        public function obtener_chat_comentario()
        {

           echo(' <form name="chat" method="POST" action="https://www.loadingstudios.archive.tornadocore.es/panel/publicar_comentario/">');
           echo('<textarea name="mensaje" rows="3" cols="20"></textarea>');
           echo('<input name="comentar" type="submit" value="Comentar"></form>');
           echo('</form>');
            
        }
        
        public function publicar_comentario()
        {
            $mensaje = $_POST['mensaje'];
            $this->load->library('session');
            $usuario = $this->session->userdata('usuario');
            
               $this->load->database();
               
               if($mensaje != "")
                $query = $this->db->query("INSERT INTO tickets_mensajes (usuario,mensaje,fecha,Destinatario) VALUES('" .$usuario."', '".$mensaje."', CURRENT_TIMESTAMP(),'admin')");
            header('Location: https://www.loadingstudios.archive.tornadocore.es/panel/index/estado/soporte/');
        }
        
        public function borrar_comentario()
        {
            $this->load->library('session');
            $usuario = $this->session->userdata('usuario');            
            $get = $this->uri->uri_to_assoc();
            $comentario = $get['comentario']; // valor            
            $this->load->database();
            
            $query = $this->db->query("SELECT * from tickets_mensajes where usuario = '".$usuario."' and referencia = ".$comentario."");
            
            if ($query->num_rows() > 0)
            {
                $query2 = $this->db->query("DELETE from tickets_mensajes where usuario = '".$usuario."' and referencia = ".$comentario."");  
            }
            header('Location: https://www.loadingstudios.archive.tornadocore.es/panel/index/estado/soporte/');
            
            
            
        }

        
}