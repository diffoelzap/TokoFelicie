<?php
//PROTEKSI HALAMAN ADMIN DENGAN FUNGSI CEK_LOGIN YANG ADA DI Simple_Login
$this->simple_login->cek_login();

// GABUNGAN SEMUA BAGIAN LAYOUT MENJADI SATU


require_once('head.php');
require_once('header.php');
require_once('nav.php');
require_once('content.php');
require_once('footer.php');

