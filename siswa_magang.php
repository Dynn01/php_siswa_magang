<?php

$data_siswa=[];

while(true)
{
    // data siswa
    $siswa=&$data_siswa;

    // banner aplikasi
    tampil("Data Siswa Magang TOP");
    tampil("=====================");

    // user memilih input data siswa
    $input_siswa=readline("Masukkan Data Siswa ! ");

    if(!preg_match("/^[A-z ]*$/",$input_siswa || empty($input_siswa)))
    {
        echo "Oops! Input hanya bisa huruf ...!\n";
        continue;
    }

    // simpan data siswa
    $siswa[]=$input_siswa;

    // munculkan data siswa magang
    $nomor=1;

    foreach($siswa as $key)
    {
        tampil("$nomor.$key");
        $nomor++;
    }
    // tanya user untuk memasukkan data lagi
    
    tanyaUser();
}

function tampil($pesan)
{
    echo $pesan.PHP_EOL;
}

function tanyaUser()
{
    $tanya=readline("Tambah Data (yes/no) ? ");

    if($tanya=="no" || $tanya!=="yes")
    {
        tampil("Terima Kasih");
    exit;
    }
}

  
