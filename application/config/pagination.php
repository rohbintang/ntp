<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

$config['num_links'] = 1;
$config['uri_segment'] = 4;
$config['use_page_numbers'] = TRUE;
$config['full_tag_open'] = '<div class="pagination pagination-right"><ul>';
$config['full_tag_close'] = '</ul></div>';
$config['first_link'] = FALSE;
$config['last_link'] = FALSE;
$config['next_link'] = 'Next &raquo;';
$config['next_tag_open'] = '<li class="next page">';
$config['next_tag_close'] = '</li>';
$config['prev_link'] = '&laquo; Previous';
$config['prev_tag_open'] = '<li class="prev page">';
$config['prev_tag_close'] = '</li>';
$config['cur_tag_open'] = '<li class="active"><a href="">';
$config['cur_tag_close'] = '</a></li>';
$config['num_tag_open'] = '<li class="page">';
$config['num_tag_close'] = '</li>';