<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
				//echo base_url();
		$this->load->view('mainPage');
	}

	public function newJob(){
		$this->load->helper('url');
		$this->load->view('insertData');
	}

	public function frontPage(){
		$this->load->helper('url');
		$this->load->view('mainPage');
	}


	public function insertData(){
		//echo "hello";

		$data = array
		(
			'job_headline' => $this->input->post('job_headline'),
			'job_headline_b' => $this->input->post('job_headline_b'),
			
			'company_name' => $this->input->post('company_name'),
			'company_website' => $this->input->post('company_website'),
			'company_mail' => $this->input->post('company_mail'),


			'job_type' => $this->input->post('job_type'),
			'job_category' => $this->input->post('job_category'),
			'job_location' => $this->input->post('job_location'),
			'job_description' => $this->input->post('job_description'),
			'job_how_to_apply' => $this->input->post('job_how_to_apply'),
		);
	$this->load->model('Jobs'); 
       
         $this->Jobs->insertData($data);
	//print_r($insert);
         $this->getData();
	}

	public function getdata(){
		$this->load->helper('url');
		$query = $this->db->get('jobs');
		$data = $query->result();
		//$res  = json_decode($data);
		// print_r($res);
		$this->load->view('job_listing.php', array('data'=>$data));
		// $this->insertData();
		
	}

	public function view(){

		$this->load->helper('url');
		$this->load->model('Jobs');
		 $id = $this->uri->segment(3);
		$data = $this->Jobs->viewData($id);

		$this->load->view('view.php', array('data'=>$data));

	}
}
