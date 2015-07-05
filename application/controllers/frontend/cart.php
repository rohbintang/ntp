<?php
class Cart extends CI_Controller {

	public function __construct() {
        parent::__construct();
        
        $this->load->model('frontend/order_model');
        $this->load->model('frontend/payment_model');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$q['produk'] = $this->db->get("nm_theme");
		 $this->template->frontend('cart',$q);
	}

	public function checkout() {
		if (!$this->session->userdata('customer_logged_in')) {
            redirect('login');
        }
		$today = getdate();
		$payment = array(
    		// 'payment_id'	=>  'PY'.$this->session->userdata('customer_id').$today['yday'].$today['hours'].$today['minutes'].$today['seconds'],
    		'payment_id'	=>  '',
    		'payment_total' =>  $this->cart->total(),
    		'payment_message' =>  '',
    		'payment_status' =>  ''
    		);
		$this->db->trans_start();
    	$this->payment_model->add($payment);
    	// if ($payment_status) {
    	// 	echo 'ok';
    	// } else {
    	// 	echo 'nope';
    	// }
    	// return 'ok';
    	$payment_id = $this->db->insert_id();
    	// echo $payment_id;
    	$order_id = 'OR'.$this->session->userdata('customer_id').$today['yday'].$today['hours'].$today['minutes'].$today['seconds'];
    	$data = array(
        		'order_id'	=> $order_id,
        		'customer_id' =>  1,
        		// 'theme_id' =>  $items['id'],
    			'payment_id' =>  $payment_id,
        		'order_date' =>  date('Y-m-d')
        		);
        $this->order_model->add($data);
        foreach($this->cart->contents() as $items): 
        	$data = array(
        		'order_id'	=> $order_id,
        		// 'customer_id' =>  1,
        		'theme_id' =>  $items['id'],
    			// 'payment_id' =>  $payment_id,
        		// 'order_date' =>  date('Y-m-d')
        		);
        $this->order_model->add_detail($data);
		endforeach;
		$this->db->trans_complete();
		$this->cart->destroy();
        redirect('payment/detail/'.$order_id);
		
	}
	
	public function tambah()
	{
		$data = array(
			'id'      => $this->input->post('id'),
			'qty'     => 1,
			'price'   => $this->input->post('harga'),
			'name'    => $this->input->post('nama'));
		$this->cart->insert($data);
		header('location:'.base_url().'theme/detail/'.$this->input->post('id'));
	}

	public function hapus()
	{
		$data = array(
				'rowid' => $this->uri->segment(3),
				'qty'   => 0);
				$this->cart->update($data);
		header('location:'.base_url().'cart');
	}


}