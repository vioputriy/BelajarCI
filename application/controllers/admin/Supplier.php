<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class supplier extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model("Supplier_model");
	}
	
	public function index()
	{
		//$data["products"] = $this->product_model->getAll();
		$data["supplier"] = $this->Supplier_model->getAll();
        $this->load->view("admin/supplier/list", $data); 

	}
}
