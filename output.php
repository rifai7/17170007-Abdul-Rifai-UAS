<?php
$nama=$_POST['nama_pemesan'];
$jumlah_tiket=$_POST['jumlah_tiket'];
$kelas=$_POST['kelas'];
$tujuan=$_POST['tujuan'];
$bagasi=$_POST['bagasi'];
$asuransi=$_POST['asuransi_jiwa']?implode("",$_POST['asuransi_kecelakaan']):"Tidak pilihan";

foreach($_POST['asuransi'] as $value){
    echo $value.",";
}


if($tujuan=="bali"){
        $harga=1000000;

}elseif($tujuan=="jakarta"){
    $harga=2000000;
}elseif($tujuan=="papua"){
    $harga=3000000;
}

if($bagasi=="5kg"){
    $harga=1000000;
}elseif($bagasi=="10kg"){
    $harga=2000000;
}elseif($bagasi=="15kg"){
    $harga=3000000;
}

//diskon
if($jumlah_tiket >= 3){
    $diskon=($harga*30/100);
}elseif($jumlah_tiket <= 3){
    $diskon=$harga;
}
$totalharga=$harga+$diskon;


if($kelas=="ekonimo"){
    $warna="ekonomi";
}elseif($kelas=="vip"){
    $warna="vip";
}


?>

<table border="1">
<tr>
  <th>Nama pemesan</th>
  <th>:</th>
  <th><?php echo $nama;?></th>
</tr>
<tr>
<td>jumlah</td><td></td><td><?php echo $jumlah_tiket;?></td>
</tr>
<tr>
<td>kelas</td><td></td><td><?php echo $kelas;?></td>
</tr>
<tr>
<td>tujuan</td><td></td><td><?php echo $tujuan;?></td>
</tr>
<tr>
<td>bagasi</td><td></td><td><?php echo $bagasi;?></td>
</tr>
<tr>
<td>asuransi</td><td></td><td><?php echo $asuransi;?></td>
</tr>
<tr>
<td>Total Harga</td><td></td><td><?php echo $totalharga;?></td>
</tr>
</table>