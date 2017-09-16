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
		$data = array(
	    'flag' => 1
		);
		
		$this->load->helper('url');
		$this->load->view('cy/index',$data);
	}
	//solutions
	public function solutions()
	{	
		$data = array(
	    'flag' => 2
		);
		$this->load->helper('url');
		$this->load->view('cy/solutions',$data);
	}
	//product
	public function product()
	{	
		$data = array(
	    'flag' => 3
		);
		$this->load->helper('url');
		$this->load->view('cy/product',$data);
	}
	//product
	public function about()
	{
		$data = array(
	    'flag' => 4
		);
		$this->load->helper('url');
		$this->load->view('cy/about',$data);
	}
	//recruit
	public function recruit()
	{
		$data = array(
	    'flag' => 5
		);
		$this->load->helper('url');
		$this->load->view('cy/recruit',$data);
	}
}
