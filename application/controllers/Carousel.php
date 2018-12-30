<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carousel extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('carousel_model');
		
		$user = $this->session->userdata('admin');

		   if (!isset($user)) { 
		   		echo "<script> alert('Anda harus login dahulu!');
				window.location.href='admin';</script>"; 
		   } 
		   else { 
		      return true;
		   }
	}

	public function index()
	{
		$data['carousel'] = $this->carousel_model->get();
		$this->load->view('admin/carousel',$data);
	}

	public function add()
	{
		$this->form_validation->set_rules('title', 'title', 'trim|required');
		$this->form_validation->set_rules('desc', 'desc', 'trim|required');
		

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/add_carousel');
		} else {
			$config['upload_path']      ='./assets/carousel';
			$config['allowed_types']    ='gif|jpg|png|jpeg';
			$config['max_size']         =1000000000;
			$config['max_width']        =10240;
			$config['max_height']       =7680;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile'))
			{
				echo $this->upload->display_errors();
			}
			else
			{
				$this->carousel_model->insert();
				echo "<script> alert('carousel telah ditambahkan');</script>";
			}
		}
	}
}
