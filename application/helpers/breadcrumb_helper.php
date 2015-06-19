<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('breadcrumb')) {

    function breadcrumb($delimiter_config = '', $exclude = '', $config = array()) {
        $CI = & get_instance();
        $CI->load->helper('url');
        $total = $CI->uri->total_segments();
        $url = $CI->uri->segment(1);
        for ($i = 1; $i <= $total; $i++) {
            if ($i == $CI->uri->total_segments()) {
                echo '<li><a href="' . base_url($url) . '">' . ucwords($CI->uri->segment($i)) . '</a></li>';
            } else {
                echo '<li><a href="' . base_url($url) . '">' . ucwords($CI->uri->segment($i)) . '</a><span class="divider">/</span></li>';
            }
            $url = $url . '/' . $CI->uri->segment($i + 1);
        }
    }

}
