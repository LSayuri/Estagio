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
	
	public function como_ajudar($page){
		
		$this->load->view('header-html');
		$this->load->view('header');
		$this->load->view('como_ajudar/como_ajudar');
		$this->load->view('como_ajudar/' . $page);
		$this->load->view('footer');
		$this->load->view('como_ajudar/imagens');
		$this->load->view('footer-html');
	}
	
	public function institucional($page){
		
		$this->load->view('header-html');
		$this->load->view('header');
		$this->load->view('institucional/institucional');
		$this->load->view('institucional/' . $page);
		$this->load->view('footer');
		$this->load->view('footer-html');
	}
	
	public function fazemos($page){
		
		$this->load->view('header-html');
		$this->load->view('header');
		$this->load->view('fazemos/fazemos');
		$this->load->view('fazemos/' . $page);
		$this->load->view('footer');
		$this->load->view('footer-html');
	}
	
	public function deficiencia($page){
		
		$this->load->view('header-html');
		$this->load->view('header');
		$this->load->view('deficiencia/deficiencia');
		$this->load->view('deficiencia/' . $page);
		$this->load->view('footer');
		$this->load->view('footer-html');
	}
	
	public function fale_conosco(){
		
		$this->load->view('header-html');
		$this->load->view('header');
		$this->load->view('fale_conosco');
		$this->load->view('message_box');
		$this->load->view('footer');
		$this->load->view('footer-html');
	}
	
	public function parceiros($page){

		$this->load->view('header-html');
		$this->load->view('header');
		$this->load->view('parceiros/parceiros');
		$this->load->view('parceiros/' . $page);
		$this->load->view('footer');
		$this->load->view('footer-html');
	}

	public function galeria($parceiro){
		//LEMBRE-SE DE EDITAR ESSA PORRA AQUI--------------------------------------------------------------------------------------------------------------
		//CAIO---------------------------------------------------------------------------------------------------------------------------------------------
		//SIM, VOCÊ MESMO----------------------------------------------------------------------------------------------------------------------------------
		$fi = new FilesystemIterator('C:\Users\Caio Nogueira\Documents\GitHub\Estagio\CodeIgniter\assets\imgs\parceiros\\' . $parceiro, FilesystemIterator::SKIP_DOTS);
		$quantity = iterator_count($fi);
		$data = array(
			"quantity" => $quantity - 1,
			"url" => base_url('assets/imgs/parceiros/' . $parceiro) . '/',
		);

		$this->load->view('header-html');
		$this->load->view('header');
		$this->load->view('parceiros/gallery', $data);
		$this->load->view('footer');
		$this->load->view('footer-html');
	}

	public function fotos(){
		
		$fi = new FilesystemIterator('C:\Users\Caio Nogueira\Documents\GitHub\Estagio\CodeIgniter\assets\imgs\fotos', FilesystemIterator::SKIP_DOTS);
		$quantity = iterator_count($fi);
		$data = array(
			"quantity" => $quantity - 1,
			"url" => base_url('assets/imgs/fotos') . '/',
		);
		$this->load->view('header-html');
		$this->load->view('header');
		$this->load->view('fotos', $data);
		$this->load->view('footer');
		$this->load->view('footer-html');
	}

	public function eventos($year){

		$events_array = parse_ini_file(base_url('assets/events/2017.ini'));
	}
}
