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

	 public function __construct(){
		 parent::__construct();
		$this->load->database();
	 }

	public function index()
	{
		$data = array();
        $data['page_title'] = 'Home';
        //$data['services'] = $this->common_model->select('product_services');
        $data['main_content'] = $this->load->view('home', $data, TRUE);
        $this->load->view('index', $data);
	}

	public function search($slug,$sub=null)
	{
		
		$categories=$this->Common_model->gets('categories',['slug'=>$slug])[0];
		$subcat=$this->Common_model->gets('subcat',['categories_id'=>$categories->id,'status'=>1]);
		//echo "<pre>";print_r($subcat);exit;
		$data = array();
		$data['page_title'] = 'Dance Schools - Dance Globe';
		$data['SearchList'] = $subcat;
		$data['slug']=$slug;
		$data['banner']=base_url('assets').'/wp-content/themes/dance-theme/images/dance-banner.jpg';
		$data['main_content']=$this->load->view('subcategories', $data, TRUE);
        //$data['services'] = $this->common_model->select('product_services');
	   // $data['main_content'] = $this->load->view('home', $data, TRUE);
	   
	   if($sub!=null)
	   {
		$data['listing']=$this->Common_model->Listing();
		$data['main_content']=$this->load->view('listing', $data, TRUE);
		//echo "<pre>";print_r($l);exit;
		}
        $this->load->view('index', $data);
	}

	

	


}
