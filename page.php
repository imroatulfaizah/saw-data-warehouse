<?php
$page=htmlspecialchars(@$_GET['page']);
switch ($page){
    case null:
        include 'page/beranda.php';
        break;
    case 'beranda':
        include 'page/beranda.php';
        break;
    case 'grafik':
        include 'page/grafik.php';
        break;
    case 'cuti':
        include 'page/cuti.php';
        break;
    case 'kota':
        include 'page/kota.php';
        break;
    case 'sekolah':
        include 'page/sekolah.php';
        break;
    case 'kriteria':
        include 'page/kriteria.php';
        break;
    case 'subkriteria':
        include 'page/subkriteria.php';
        break;
    case 'bobot':
        include 'page/bobot.php';
        break;
    case 'penilaian':
        include 'page/nilai.php';
        break;
    case 'hasil':
        include 'page/hasil.php';
        break;
    case 'tambahbobot':
        include 'page/tambahbobot.php';
        break;
    case 'test':
        include 'page/test.php';
        break;
    case 'laporankota':
        include 'page/laporankota.php';
        break;
    case 'agama':
        include 'page/agama.php';
        break;
    case 'pindah_prodi':
        include 'page/pindah_prodi.php';
        break;
    default:
        include 'page/404.php';
}