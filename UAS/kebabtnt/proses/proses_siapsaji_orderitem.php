<?php
include "connect.php";

session_start();
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";
$catatan = (isset($_POST['catatan'])) ? htmlentities($_POST['catatan']) : "";

if (!empty($_POST['siapsaji_orderitem_validate'])) {

        $query = mysqli_query($conn, "UPDATE tb_list_order SET catatan='$catatan', status=2 WHERE id_list_order='$id'");
        if ($query) {
            $message = '<script>alert("Pesanan SIap Disajikan")
        window.location="../dapur"
        </script>';
        } else {
            $message = '<script>alert("Pesanan Gagal Disajikan")
            window.location="../dapur"
            </script>';
        }}

echo $message;

?>