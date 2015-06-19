<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Order_model extends CI_Model {

    function add($data) {
        return $this->db->insert('nm_orders', $data);
    }

    function add_detail($data) {
        return $this->db->insert('nm_order_detail', $data);
    }

    function detail($id) {
        $this->db->select('*');
        $this->db->from('nm_orders');
        $this->db->join('nm_customers', 'nm_orders.customer_id=nm_customers.customer_id');
        // $this->db->join('nm_theme', 'nm_orders.theme_id=nm_theme.theme_id');
        $this->db->join('nm_payments', 'nm_orders.payment_id=nm_payments.payment_id');
        $this->db->group_by('order_id'); 
        $this->db->where('nm_orders.order_id', $id);
        return $this->db->get();
    }

    function getPaymentID($id) {
        $this->db->select('nm_payments.payment_id');
        $this->db->from('nm_payments');
        $this->db->join('nm_orders', 'nm_orders.payment_id=nm_payments.payment_id');
        $this->db->where('order_id', $id);
        return $this->db->get();
    }

   var $gallery_path;
        var $gallery_path_url;
        function __construct(){
            parent::__construct();
            $this->gallery_path = realpath(APPPATH . '../asset/images/barang');
            $this->gallery_path_url = base_url().'assets\frontend\images\preview';
    }

    function insert_invitation_basic() {

        $developer_id = developer_id();
        $theme_id = theme_id();
        $request_id = request_id();
        $approval_id = approval_id();
        //echo $request_id;
        
            
      

        $query = $this->db->get('nm_developers');




        $data = '';
        $data = array(
            'theme_id' => $theme_id,
            
            //data pria
            'theme_name' => $this->input->post('namatheme'),
            'theme_description' => $this->input->post('deskripsitheme'),
            'theme_preview' => $this->input->post('gbprev'),
            'theme_images' => $this->input->post('gbket'),
            //data wanita
            'theme_files' => $this->input->post('filetheme'),
            'theme_category' => $this->input->post('kategoritheme'),
            'theme_resolution' => $this->input->post('resolution'),
            'theme_widget' => $this->input->post('widget'),
            //info akad 
            'theme_compatibility' => $this->input->post('compatibility'),
            'theme_framework' => $this->input->post('framework'),
            
            'theme_wp_version' => $this->input->post('wpver'),
            'theme_files_included' => $this->input->post('fileincluded'),
            
            'theme_column' => $this->input->post('column'),
            'theme_layout' => $this->input->post('layout'),
            'theme_demo_url' => $this->input->post('demourl'),
            'theme_usulan_harga' =>$this->input->post('usulanharga'),
            'theme_tags' => $this->input->post('tags'),
            'theme_msg_reviewer' =>$this->input->post('msgreviewer'),
            'theme_agrement' =>$this->input->post('agrement'),


        );
        $this->db->insert('nm_theme', $data);
        $data = '';
        $data = array(
            'approval_id' => $approval_id,
            'approval_date' => date('Y-m-d'),
            'approval_status' => 0,
            'approval_total' => 500000,
        );
        $this->db->insert('nm_approvals', $data);
        $data = '';
        $data = array(
            'request_id' => $request_id,
            'theme_id' => $theme_id,
            'developer_id' => $developer_id,
            'approval_id' => $approval_id,
            'package_id' => $this->input->post('package'),
            'request_date' => date('Y-m-d'),
        );
        return $this->db->insert('nm_requests', $data);
    }



function insert($foto = ''){

     $developer_id = developer_id();
        $theme_id = theme_id();
        $request_id = request_id();
        $approval_id = approval_id();
        //echo $request_id;
        
            
      

        $query = $this->db->get('nm_developers');

        foreach ($query->result() as $row)
        {
            $data = array(
            'developer_id' => $developer_id,
            'customer_name' => $row->developer_name,
            'customer_email' => $row->developer_email,
            'customer_phone' => $row->developer_kontak,
             'customer_address' => $row->developer_address,

              );
           
        }
            if(!$foto){
                $data = array(
                    'theme_id' => $theme_id,
            
            //data pria
            'theme_name' => $this->input->post('namatheme'),
            'theme_description' => $this->input->post('deskripsitheme'),
            
            'theme_images' => $this->input->post('gbket'),
            //data wanita
            'theme_files' => $this->input->post('filetheme'),
            'theme_category' => $this->input->post('kategoritheme'),
            'theme_resolution' => $this->input->post('resolution'),
            'theme_widget' => $this->input->post('widget'),
            //info akad 
            'theme_compatibility' => $this->input->post('compatibility'),
            'theme_framework' => $this->input->post('framework'),
            
            'theme_wp_version' => $this->input->post('wpver'),
            'theme_files_included' => $this->input->post('fileincluded'),
            
            'theme_column' => $this->input->post('column'),
            'theme_layout' => $this->input->post('layout'),
            'theme_demo_url' => $this->input->post('demourl'),
            'theme_usulan_harga' =>$this->input->post('usulanharga'),
            'theme_tags' => $this->input->post('tags'),
            'theme_msg_reviewer' =>$this->input->post('msgreviewer'),
            'theme_agrement' =>$this->input->post('agrement'),


                );
            }else{
                $data = array(
                    'theme_id' => $theme_id,
            
            //data pria
            'theme_name' => $this->input->post('namatheme'),
            'theme_description' => $this->input->post('deskripsitheme'),
            'theme_preview' => $foto,
            'theme_images' => $this->input->post('gbket'),
            //data wanita
            'theme_files' => $this->input->post('filetheme'),
            'theme_category' => $this->input->post('kategoritheme'),
            'theme_resolution' => $this->input->post('resolution'),
            'theme_widget' => $this->input->post('widget'),
            //info akad 
            'theme_compatibility' => $this->input->post('compatibility'),
            'theme_framework' => $this->input->post('framework'),
            
            'theme_wp_version' => $this->input->post('wpver'),
            'theme_files_included' => $this->input->post('fileincluded'),
            
            'theme_column' => $this->input->post('column'),
            'theme_layout' => $this->input->post('layout'),
            'theme_demo_url' => $this->input->post('demourl'),
            'theme_usulan_harga' =>$this->input->post('usulanharga'),
            'theme_tags' => $this->input->post('tags'),
            'theme_msg_reviewer' =>$this->input->post('msgreviewer'),
            'theme_agrement' =>$this->input->post('agrement'),

                );
            }
            if($this->input->post('theme_id')){
                $this->db->where("theme_id", $this->input->post('theme_id'));
                $this->db->update("nm_theme", $data);
            }else{
                $this->db->insert("nm_theme",$data);
            }
       

         $data = '';
         $data = array(
            'approval_id' => $approval_id,
            'approval_date' => date('Y-m-d'),
            'approval_status' => 0,
            'approval_total' => 500000,
        );
        $this->db->insert('nm_approvals', $data);
        $data = '';
        $data = array(
            'request_id' => $request_id,
            'theme_id' => $theme_id,
            'developer_id' => $developer_id,
            'approval_id' => $approval_id,
            'package_id' => $this->input->post('package'),
            'approval_date' => date('Y-m-d'),
        );
        return $this->db->insert('nm_requests', $data);
        }
    }

