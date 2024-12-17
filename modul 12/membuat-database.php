<?php
$file=fopen("pegawai.txt","w");
if($file){
    echo "Database pegawai berhasil dibuat.";
    fclose($file);
} else{
    echo "Gagal membuat database.";
}
?>