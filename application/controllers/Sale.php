<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sale extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('sale_m');
	}

	public function index()
	{
		$this->load->model('customer_m');
		$customer = $this->customer_m->get()->result();
		$data = array(
			'customer' => $customer,
			'invoice' => $this->sale_m->invoice_no(),
		);
		$this->template->load('template', 'transaction/sale/sale_form', $data);
	}
}
