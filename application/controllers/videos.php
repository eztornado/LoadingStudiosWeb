<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Videos extends CI_Controller {

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
                        $data['conexion'] = $this->session->userdata('logueado');
                $this->load->database();
                $query = $this->db->query('SELECT * from videos');
                $data['videos']  = $query; 
                $this->load->view('headerhtml',$data);
                $this->load->view('videos');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/video.php */