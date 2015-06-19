<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('rupiah')) {

    function rupiah($uang) {
        $rupiah = "";
        $panjang = Strlen($uang);
        while ($panjang > 3) {
            $rupiah = "." . substr($uang, -3) . $rupiah;
            $lebar = strlen($uang) - 3;
            $uang = substr($uang, 0, $lebar);
            $panjang = strlen($uang);
        }
        $rupiah = "Rp " . $uang . $rupiah . ",-";
        return $rupiah;
    }

}