<?php
    session_start();
    ob_start();
    if(isset($_POST['btnaddtocart']) && ($_POST['btnaddtocart'])){
        $img=$_POST['img'];
        $tensp=$_POST['tensp'];
        $gia=$_POST['gia'];
        $id=$_POST['id'];
        $soluong=1;
        $sp=[
            "id"=>$id,
            "img"=>$img,
            "tensp"=>$tensp,
            "gia"=>$gia,
            "soluong"=>$soluong
        ];

        $_SESSION['giohang'][]=$sp;

        header('location: cartproduct.php');
        exit();
    }
?>
