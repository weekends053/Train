<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Train extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('train_model','TM');
		$this->load->helper('url');
	}
	
	public function index()
	{
		$this->load->view('index');
	}

	public function insert_Register(){
		$result = array(
			't_id' => $this->input->post("t_id"),
			'note' => $this->input->post("note"),
			
		);

		$result1 = array(	
			't_id'=> $this->input->post("t_id"),
			's_name' => $this->input->post("s_name"),
			'Time_out' => $this->input->post("Time_out"),
			
		);

		$result2 = array(
			't_id'=> $this->input->post("t_id"),
			'H_Time_in' => $this->input->post("H_Time_in"),
			'H_Time_out' => $this->input->post("H_Time_out"),
		);

		$result3 = array(
			't_id' => $this->input->post("t_id"),
			'end_name' => $this->input->post("end_name"),
			'E_Time_in' => $this->input->post("E_Time_in"),
			
		);
		
		

		if($this->input->post("note")!= "" && $this->input->post("t_id")!== ""){
			$this->TM->insert_Train($result);
			$this->TM->insert_Origin($result1);
			$this->TM->insert_Huayrach($result2);
			$this->TM->insert_End($result3);
			$data['TM'] = $this->TM->travel();
			$this->load->view('view_travel',$data);

		}else {
			echo "ไม่สามารถเพิ่มข้อมูลได้ค่ะ !";
		}

	}
	
	public function show_travel()
	{
		$data['TM'] = $this->TM->travel();
		$this->load->view('view_travel',$data);
	}

	public function insert_travel()
	{
		$this->load->view('view_insert');
	}
}
