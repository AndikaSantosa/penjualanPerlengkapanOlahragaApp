<?php

$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = ".$_GET["id"]);
$pecah = $ambil->fetch_assoc();
$file_foto = $pecah['foto_produk'];

$org_image="../shop/foto_produk/".$file_foto;
$destination="../shop/sampah_foto_produk";

$img_name=basename($org_image);

if( rename( $org_image , $destination.'/'.$img_name )){

$koneksi->query("DELETE FROM produk WHERE id_produk = ".$_GET["id"]);
echo "<script> location='index.php?halaman=produk'</script>";
} else {
 echo 'Data tidak terhapus';
}
 
 ?>