<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

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
                $this->session->sess_destroy();
                $data['conexion'] = $this->session->userdata('logueado');
                $this->load->view('headerhtml',$data);
                $this->load->database();
                $query = $this->db->query('SELECT * from noticias order by id DESC limit 4');
                $dato['noticias_string'] = $query;
                
                //////////////////////////////////////////////////////
                $resultado = 1;
                $this->load->database();
                $ip = $_SERVER['REMOTE_ADDR'];
                $query = $this->db->query('SELECT ip from cookies where ip ="' .$ip.'" ');
                    if ($query->num_rows() > 0)
                    {
                        $resultado= 0;   
                    }
                $dato['comprobacion'] = $resultado;
                ///////////////////////////////////////////////////////
                
                
                
                $this->load->view('welcome_message',$dato);
                
                
	}
        
        public function iniciar_sesion()
        {
            $this->load->library('user_agent');
                            $this->load->library('session');
                $this->session->sess_destroy();
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
                            $data['conexion'] = $this->session->userdata('logueado');
                $this->load->view('headerhtml',$data);
                if($this->agent->is_mobile())
            $this->load->view('iniciar_sesion_movil');
                else
            $this->load->view('iniciar_sesion');                    
                   
            


        }
        public function privacidad()
        {
            $this->load->library('user_agent');
                            $this->load->library('session');
                $this->session->sess_destroy();
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
                            $data['conexion'] = $this->session->userdata('logueado');
                $this->load->view('headerhtml',$data);
            $this->load->view('privacidad');             
                   
            


        } 
        public function quienes_somos()
        {
            $this->load->library('user_agent');
                            $this->load->library('session');
                $this->session->sess_destroy();
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
                            $data['conexion'] = $this->session->userdata('logueado');
                $this->load->view('headerhtml',$data);
            $this->load->view('quienes_somos');             
                   
            


        }             
        
        public function contratar_servicios()
        {
            $this->load->library('session');
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $data['conexion'] = $this->session->userdata('logueado');
            $this->load->view('headerhtml',$data);
            $this->load->view('contratar');
            
        }
        
        public function contratar()
        {
            $this->load->view('factura2');
            
        }
        
        public function contratar_calcular()
        {
            $get = $this->uri->uri_to_assoc();
            $producto = $get['prod']; // valor
            if($producto == "musica")
            {
                $this->load->view('contratar_musica');
            }
            if($producto == "video")
            {
                $this->load->view('contratar_video');
            }  
            if($producto == "logo")
            {
                $this->load->view('contratar_logo');
            }   
            if($producto == "web")
            {
                $this->load->view('contratar_web');
            } 
            if($producto == "banner")
            {
                echo('<span style="color:black;">HAS ELEGIDO BANNER</span>');
            }              
            
        }

        
        public function insertar_cookies()
        {
            $this->load->database();
            $ip = $_SERVER['REMOTE_ADDR'];
            $this->db->query('INSERT INTO cookies VALUES("' .$ip.'")');
            header('Location: ../'); 
        }
        public function comprobar_inicio()
        {
            //Comprobacion formulario
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'Usuario', 'required');
            $this->form_validation->set_rules('password', 'Contraseña', 'required');
            //////////////////////////////////////////////
            
            if ($this->form_validation->run() == TRUE)
            {
                $this->load->library('encrypt');
                $correo = $this->input->post('username');
                $contrasenya =  md5($this->input->post('password'));
                
                $this->load->database();
                $query = $this->db->query('SELECT correo,contrasenya from usuarios where correo ="' .$correo.'" and  contrasenya = "'.$contrasenya.'" LIMIT 1');
                if ($query->num_rows() > 0)
                {
                    $query2 = $this->db->query('INSERT INTO log (usuario,accion,fecha) VALUES("' .$correo.'", "CONEXION CRM", CURRENT_TIMESTAMP())');
                    $this->load->library('session');
                    $query3 = $this->db->query('SELECT * from usuarios where correo ="' .$correo.'" LIMIT 1');
                    
                    
                    
                    if($query3->num_rows() > 0)
                    {
                        foreach ($query3->result() as $row)
                        {
                            $this->session->set_userdata('usuario',$row->nombre );
                            $this->session->set_userdata('correo',$row->correo );
                            $this->session->set_userdata('web',$row->web );
                            $this->session->set_userdata('telefono',$row->telefono );
                            $this->session->set_userdata('direccion',$row->direccion );
                            $this->session->set_userdata('dni',$row->dni );
                            $this->session->set_userdata('empresa',$row->empresa );
                            $this->session->set_userdata('logueado',1 );    
                        }
                        
                        if($row->nombre == "admin")
                        {
                          redirect("https://www.loadingstudios.archive.tornadocore.es/administracion/index/estado/inicio");  
                        }
                        else
                        redirect("https://www.loadingstudios.archive.tornadocore.es/panel/index/estado/inicio");
                    }
                }
                else
                {
                    $query = $this->db->query('INSERT INTO log (usuario,accion,fecha) VALUES("' .$correo.'", "FALLO CONEXION CRM", CURRENT_TIMESTAMP())');
                    redirect("https://www.loadingstudios.archive.tornadocore.es/inicio/iniciar_sesion");
                }
            }
                
            else
            {
                redirect("https://www.loadingstudios.archive.tornadocore.es/inicio/iniciar_sesion");
            }
            
        }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */