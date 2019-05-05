<?php
    require_once 'vendor/autoload.php';

    if(isset($_GET['val']) && $_GET['val']!=""){

        $text_qrcode = urldecode(trim($_GET['val']));
        echo $text_qrcode;
        header('Content-Type: image/png');
        \PHPQRCode\QRcode::png("CC".$text_qrcode, 'php://output', 'L', 4, 1);    
    }
?>