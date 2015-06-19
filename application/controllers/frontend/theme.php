
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Theme extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('frontend/theme_model');
        $this->load->model('frontend/dev_model');
    }

    public function index() {
        redirect('theme/all');
    }

    public function all() {
        $data['themes']= $this->theme_model->all();
        $this->template->frontend('alltheme', $data);
    }

    public function checkout() {
        
    }

    public function buy($id) {
        $theme = $this->theme_model->buy($id);
        // $theme = $theme->row();
        // echo "<pre>";
        // var_dump($theme->theme_price);
        // echo "</pre>";
        // return 'ok';
        $data = array(
               'id'      => $theme->theme_id,
               'qty'     => 1,
               'price'   => $theme->theme_price,
               'name'    => $theme->theme_name,
               'options' => ''
            );
        // echo "<pre>";
        // var_dump($data);
        // echo "</pre>";
        // return 'ok';
        $insert = $this->cart->insert($data);
        if ($insert) {
            redirect('theme/detail/'.$id);
        } else {
            echo "<pre>";
        var_dump($this->cart->contents());
        echo "</pre>";
        return 'ok';
            
            echo "Ups";
            return 'ok';
        }
        
    }

    public function cari() {
        $this->template->frontend('search');

    }
    public function detail ($id){

      if ($id == NULL) {
            redirect('dashboard/theme');
        }
     
        $data['getone'] = $this->theme_model->getOne($id);
        
        $this->template->frontend('theme',$data);
    }

}