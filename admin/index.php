<?php 
    session_start();
    ob_start();
    include "../libraries/Database.php";
    include "../libraries/danhmuc.php";
    include "../libraries/sanpham.php";

    include "view/header.php";

    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'addsp':
                //nhận yêu cầu xử lý
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tensp=$_POST['tensp'];
                //lưu đường dẫn hình ảnh vào database
                //upload hình ảnh lên host
                    $target_dir = "../uploaded/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                    //themsp($tendm);
                }
                //Lấy ds danh mục
                $kq=getall_dm();
                include "view/danhmuc.php";
                break;
            case 'danhmuc':
                //nhận yêu cầu xử lý
                //Lấy ds danh mục
                $kq=getall_dm();
                include "view/danhmuc.php";
                break;
            case 'adddm':
                //nhận yêu cầu xử lý
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tendm=$_POST['tendm'];
                    themdm($tendm);
                }
                //Lấy ds danh mục
                $kq=getall_dm();
                include "view/danhmuc.php";
                break;
            case 'deldm':
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    deldm($id);
                }
                $kq=getall_dm();
                include "view/danhmuc.php";
                break;
            case 'updatedmform':
                //Lấy 1 RECORD đúng với id truyền vào
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    $kqone=getonedm($id);
                //Cần ds danh mục    
                    $kq=getall_dm();
                include "view/updatedmform.php";
                }
                if(isset($_POST['id'])){
                    $id=$_POST['id'];
                    $tendm=$_POST['tendm'];
                    updatedm($id,$tendm);
                //Cần ds danh mục     
                    $kq=getall_dm();
                include "view/danhmuc.php";
                }
                break;
            case 'sanpham':
                //load danh sach dm
                $dsdm=getall_dm();
                //load ds san pham
                $kq=getall_sanpham();
                include "view/sanpham.php";
                break;
            case 'updatespform':
                //load danh sach dm
                $dsdm=getall_dm();
                //cần sản phẩm chi tiết theo get id
                if(isset($_GET['id'])&&($_GET['id']>0)) {
                    $spct=getonesp($_GET['id']);
                }
                //load ds san pham
                $kq=getall_sanpham();
                include "view/updatespform.php";
                break;
            case 'sanpham_update':
                //load danh sach dm
                $dsdm=getall_dm();
                //Cập nhật sản phẩm
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $gia=$_POST['gia'];
                    $id=$_POST['id'];
                    if($_FILES["hinh"]["name"]!=""){
                        $target_dir = "../uploaded/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        $img=$target_file;
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                        // Allow certain file formats
                        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif" ) {
                        //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                        }
                        if($uploadOk==1){
                            move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                            //insert_sanpham($iddm,$tensp,$gia,$img);   
                        }
                    }else{
                        $img="";
                    }
                    updatesp($id,$tensp,$img,$gia,$iddm);
                }
                //load ds san pham
                $kq=getall_sanpham();
                include "view/sanpham.php";
                break;
            case 'sanpham_add':
                if((isset($_POST['themmoi']))&&($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $gia=$_POST['gia'];

                    $target_dir = "../uploaded/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    $img=$target_file;
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    // Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                    }
                    if($uploadOk==1){
                        move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                        insert_sanpham($iddm,$tensp,$gia,$img);   
                    }
                }   
                //    if($_FILES['hinh']['name']!="") $img=$_FILES['hinh']['name']; else $img="";
                //load danh sach dm
                $dsdm=getall_dm();
                //load ds san pham
                $kq=getall_sanpham();
                include "view/sanpham.php";
                break;
            case 'delsp':
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    delsp($id);
                }
                $kq=getall_sanpham();
                include "view/sanpham.php";
                break;
            case 'taikhoan':
                include "view/taikhoan.php";
                break;
            case 'donhang':
                include "view/donhang.php";
                break;
            case 'thoat':
                include "view/thoat.php";
                break;
            default:
                include "view/home.php";
                break;
        }
    }else{
        include "view/home.php";
    }

    include "view/footer.php";

?>