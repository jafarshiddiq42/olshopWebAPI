<?php
require "../config/connect.php";

$response = array();

$sql = mysqli_query($con, "SELECT a.*,b.nama FROM invoice a
                                      left join user b on a.userid = b.id
                                    
                                      order by id desc ");

while ($a = mysqli_fetch_array($sql)) {
 $invoice = $a['invoice'];
 $key['id'] = $a['id'];
 $key['userid'] = $a['userid'];
 $key['nama'] = $a['nama'];
 $key['invoice'] = $invoice;
 $key['detail'] = array();

 $cek = mysqli_query($con, "SELECT a.*, b.nama as nmProduk
                               FROM invoicedetail a
                               left join produk b on a.produkid = b.id
                               WHERE a.invoice='$invoice' ");

 while ($b = mysqli_fetch_array($cek)) {
  # code...
  $key['detail'][] = array(
   "id" => $b['id'],
   "invoice" => $b['invoice'],
   "produkid" => $b['produkid'],
   "qty" => $b['qty'],
   "harga" => $b['harga'],
   "nmProduk" => $b['nmProduk']
  );
 }
 array_push($response, $key);
}

echo json_encode($response);
