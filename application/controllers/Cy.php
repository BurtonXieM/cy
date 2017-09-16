<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cy extends CI_Controller {

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
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('cy/index');
	}
	//solutions
	public function solutions()
	{	
		
		$this->load->helper('url');
		$this->load->view('cy/solutions');
	}
	//product
	public function product()
	{
		$this->load->helper('url');
		$this->load->view('cy/product');
	}
	//product
	public function about()
	{
		$this->load->helper('url');
		$this->load->view('cy/about');
	}
	//recruit
	public function recruit()
	{
		$this->load->helper('url');
		$this->load->view('cy/recruit');
	}
}
