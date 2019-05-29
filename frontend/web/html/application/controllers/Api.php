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


     public function search(){
        if(isset($_REQUEST['searchkey'])){
            $list=$this->Common_model->search($_REQUEST['searchkey']);
            $r=[];
            foreach( $list as $v){
                array_push($r,$v['search']);
            }
            echo json_encode($r);exit;
           
        }elseif(isset($_REQUEST['selectedSearch']))
        {
            $data['listing']=$this->Common_model->search('',$_REQUEST['selectedSearch']);
            //$data['listing']=$this->Common_model->Listing();
            $data['main_content']=$this->load->view('listing', $data, TRUE);
            echo $data['main_content'];exit;

        }else{
            $list=$this->Common_model->search($_REQUEST['searchkey']);
            $r=[];
            foreach( $list as $v){
                array_push($r,$v['search']);
            }
            echo json_encode($r);
        echo json_encode(['aaa','bbb']);
        }
     }



}
