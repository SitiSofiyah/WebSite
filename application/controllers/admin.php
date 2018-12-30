<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

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

	function __construct() {
        parent::__construct();
        $this->load->model('Login_admin');
    }

	public function index()
	{
		$this->load->view('admin/login');
	}

	
	function chek_login() {
        if (isset($_POST['submit'])) {
            // proses login disini

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $loginadmin = $this->Login_admin->chekLogin($username, $password);
            if (!empty($loginadmin)) {
                $this->session->set_userdata('admin',$loginadmin);
                redirect('dashboard');
            } else {
                
                redirect('admin');
            }
    }}

    function logout() {
        $this->session->sess_destroy();
        redirect('admin');
        
    }
}
