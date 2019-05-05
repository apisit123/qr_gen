<?php
    require_once 'vendor/autoload.php';
    echo "sdasd";
    if(isset($_GET['val']) && $_GET['val']!=""){
        $text_qrcode = urldecode(trim($_GET['val']));
        header('Content-Type: image/png');
        \PHPQRCode\QRcode::png("CC".$text_qrcode, 'php://output', 'L', 4, 1);    
    }
?>