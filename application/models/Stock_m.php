<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock_m extends CI_Model {

	public function add_stock_in($post)
	{
		$params = [
			'item_id' => $post['item_id'],
			'type' => 'in',
			'detail' => $post['detail'],
			'supplier_id' => $post['supplier'] == '' ? null : $post['supplier'],
			'qty' => $post['qty'],
			'date' => $post['date'],
			'user_id' => $this->session->userdata('userid'),
		];
		$this->db->insert('t_stock', $params);
	}
}