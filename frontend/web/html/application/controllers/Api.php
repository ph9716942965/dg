<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	 public function __construct(){
		 parent::__construct();
		$this->load->database();
	 }

     public function Listing($id=0){
         $return=($id)
            ? $this->Common_model->Listing($id)
            : $this->Common_model->Listing();
        echo json_encode($return);exit;
     }

     

}
