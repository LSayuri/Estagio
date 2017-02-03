<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function index(){
		
		$this->load->view('header-html');
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
		$this->load->view('footer-html');
	}
	
	public function como_ajudar(){
		
		$this->load->helper('url'); // load the helper first
		$page = $this->uri->segment(3);
		
		$this->load->view('header-html');
		$this->load->view('header');
		$this->load->view('como_ajudar/como_ajudar');
		$this->load->view('como_ajudar/' . $page);
		$this->load->view('como_ajudar/imagens');
		$this->load->view('footer');
		$this->load->view('footer-html');
	}
}