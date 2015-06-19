<?php

$config = array(
    array(
        'field' => 'namalengkap',
        'label' => 'Nama Lengkap',
        'rules' => 'required|max_length[35]|xss_clean'
    ),
    array(
        'field' => 'alamat',
        'label' => 'Alamat',
        'rules' => 'required|max_length[30]|xss_clean'
    ),
    array(
        'field' => 'nomortelfon',
        'label' => 'Nomor Telfon',
        'rules' => 'required|numeric|max_length[12]|xss_clean'
    ),
    array(
        'field' => 'namalengkappria',
        'label' => 'Nama Lengkap Pria',
        'rules' => 'required|max_length[35]|xss_clean'
    ),
    array(
        'field' => 'namapanggilanpria',
        'label' => 'Nama Panggilan Pria',
        'rules' => 'required|max_length[35]|xss_clean'
    ),
    array(
        'field' => 'namaayahpria',
        'label' => 'Nama Ayah Pria',
        'rules' => 'required|max_length[35]|xss_clean'
    ),
    array(
        'field' => 'namaibupria',
        'label' => 'Nama Ibu Pria',
        'rules' => 'required|max_length[35]|xss_clean'
    ),
    array(
        'field' => 'namalengkapwanita',
        'label' => 'Nama Lengkap Wanita',
        'rules' => 'required|max_length[35]|xss_clean'
    ),
    array(
        'field' => 'namapanggilanwanita',
        'label' => 'Nama Panggilan Wanita',
        'rules' => 'required|max_length[35]|xss_clean'
    ),
    array(
        'field' => 'namaayahwanita',
        'label' => 'Nama Ayah Wanita',
        'rules' => 'required|max_length[35]|xss_clean'
    ),
    array(
        'field' => 'namaibuwanita',
        'label' => 'Nama Ibu Wanita',
        'rules' => 'required|max_length[35]|xss_clean'
    ),
    array(
        'field' => 'biodatapria',
        'label' => 'Biodata Pria',
        'rules' => 'required|max_length[1000]|xss_clean'
    ),
    array(
        'field' => 'biodatawanita',
        'label' => 'Biodata Wanita',
        'rules' => 'required|max_length[1000]|xss_clean'
    ),
    array(
        'field' => 'kisahcinta',
        'label' => 'Kisah Cinta',
        'rules' => 'required|max_length[3000]|xss_clean'
    ),
    array(
        'field' => 'tanggalnikah',
        'label' => 'Tanggal Nikah',
        'rules' => 'required|max_length[30]|xss_clean'
    ),
    array(
        'field' => 'waktunikah',
        'label' => 'Waktu Nikah',
        'rules' => 'required|max_length[35]|xss_clean'
    ),
    array(
        'field' => 'alamatnikah',
        'label' => 'Alamat Nikah',
        'rules' => 'required|max_length[35]|xss_clean'
    ),
    array(
        'field' => 'tanggalresepsi',
        'label' => 'Tanggal Resepsi',
        'rules' => 'required|max_length[35]|xss_clean'
    ),
    array(
        'field' => 'wakturesepsi',
        'label' => 'Waktu Resepsi',
        'rules' => 'required|max_length[35]|xss_clean'
    ),
    array(
        'field' => 'alamatresepsi',
        'label' => 'Alamat Resepsi',
        'rules' => 'required|max_length[50]|xss_clean'
    ),
    array(
        'field' => 'judul',
        'label' => 'Judul',
        'rules' => 'required|max_length[25]|xss_clean'
    ),
);