<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Payment extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('frontend/order_model');
        $this->load->model('frontend/payment_model');
    }
    
    public function detail($id) {
    	$order = $this->order_model->detail($id);
    	$order = $order->row();
    	// echo $order->payment_id;
    	// return 'ok';
    	$payment = $this->payment_model->detail($order->payment_id);
    	$data['payment'] = $payment->row();
        $this->template->frontend('payment', $data);
    }

    public function confirm() {
        if (!$this->session->userdata('customer_logged_in')) {
            redirect('login');
        }
        if ($this->input->post()) {
            $data = array(
                'payment_message' => $this->input->post('message'),
                'payment_date' => date('Y-m-d'),
                'payment_status' => 1
                );
            $order_id = $this->input->post('order');
            $payment = $this->order_model->getPaymentID($order_id);
            $payment = $payment->row();
            // echo $order_id;
            // echo $payment->payment_id;
            // return 'ok';
            $this->payment_model->update($payment->payment_id, $data);
            redirect('user');
        } else {
            $data['order_id'] = $this->payment_model->getOrderID($this->session->userdata('customer_id'));
            $this->template->frontend('confirm', $data);
        }
    }

}