<?php
require_once 'danhmuc.php'; 

function themsp($tensp,$img,$gia,$iddm){
    $conn = Database();
    $sql = "INSERT INTO tbl_sanpham (tensp,img,gia,iddm) VALUES ('".$tensp."','".$img."','".$gia."','".$iddm."')";
    // use exec() because no results are returned
    $conn->exec($sql);
}

function updatesp($id,$tensp,$img,$gia,$iddm){
    $conn = Database();
    if($img==""){
        $sql = "UPDATE tbl_sanpham SET tensp='".$tensp."', gia ='".$gia."', iddm ='".$iddm."' WHERE id=".$id;
    }else{
        $sql = "UPDATE tbl_sanpham SET tensp='".$tensp."', gia ='".$gia."', iddm ='".$iddm."', img ='".$img."' WHERE id=".$id;
    }
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}

function getonesp($id){
    $conn = Database();
    $stmt = $conn->prepare("SELECT * FROM tbl_sanpham WHERE id=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function delsp($id){
    $conn = Database();
    $sql = "DELETE FROM tbl_sanpham WHERE id=".$id;
    // use exec() because no results are returned
    $conn->exec($sql);
}

function insert_sanpham($iddm,$tensp,$gia,$img){
    $conn = Database();
    $sql = "INSERT INTO tbl_sanpham (iddm, tensp, gia, img) VALUES ('$iddm', '$tensp', '$gia', '$img')";
    // use exec() because no results are returned
    $conn->exec($sql);
}

function getall_sanpham(){
    $conn = Database();
    $stmt = $conn->prepare("SELECT * FROM tbl_sanpham");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

?>
