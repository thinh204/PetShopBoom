<?php
function Database() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
// function themdm($tendm){
//     $conn = Database();
//     $sql = "INSERT INTO tbl_danhmuc (tendm) VALUES ('".$tendm."')";
//     // use exec() because no results are returned
//     $conn->exec($sql);
// }
// function updatedm($id,$tendm){
//     $conn = Database();
//     $sql = "UPDATE tbl_danhmuc SET tendm='".$tendm."' WHERE id=".$id;

//     // Prepare statement
//     $stmt = $conn->prepare($sql);
//     // execute the query
//     $stmt->execute();
// }
// function getonedm($id){
//     $conn = Database();
//     $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc WHERE id=".$id);
//     $stmt->execute();
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $kq = $stmt->fetchAll();
//     return $kq;
// }
// function deldm($id){
//     $conn = Database();
    
//     // First, delete associated rows in tbl_sanpham
//     $sql_delete_sanpham = "DELETE FROM tbl_sanpham WHERE iddm=".$id;
//     $conn->exec($sql_delete_sanpham);
    
//     // Then, delete the row in tbl_danhmuc
//     $sql_delete_danhmuc = "DELETE FROM tbl_danhmuc WHERE id=".$id;
//     $conn->exec($sql_delete_danhmuc);
// }

function checkuser($usersEmail,$usersPwd){
    $conn = Database();
    $stmt = $conn->prepare("SELECT * FROM users WHERE usersName='".$usersEmail."' AND usersPwd='".$usersPwd."'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq[0]['role'];
}

?>
