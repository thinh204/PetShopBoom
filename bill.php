<?php
session_start();
include "./libraries/Database.php";

function thongtindonhang() {

}

function taodonhang($name, $address, $tel, $email, $total, $pttt) {
    $database = new Database(); // Khởi tạo đối tượng từ lớp Database

    $sql = "INSERT INTO tbl_bill (name, address, tel, email, total, pttt)
            VALUES (:name, :address, :tel, :email, :total, :pttt)";
    
    $database->query($sql);

    // Bind các giá trị đầu vào
    $database->bind(':name', $name);
    $database->bind(':address', $address);
    $database->bind(':tel', $tel);
    $database->bind(':email', $email);
    $database->bind(':total', $total);
    $database->bind(':pttt', $pttt);
    
    // Thực thi truy vấn
    $database->execute();

    return $database->lastInsertId();
}

function taogiohang($tensp, $img, $gia, $soluong, $tongtien, $idbill) {
    $database = new Database(); // Khởi tạo đối tượng từ lớp Database

    $sql = "INSERT INTO tbl_cart (tensp, img, gia, soluong, tongtien, idbill)
            VALUES (:tensp, :img, :gia, :soluong, :tongtien, :idbill)";
    
    $database->query($sql);

    // Bind các giá trị đầu vào
    $database->bind(':tensp', $tensp);
    $database->bind(':img', $img);
    $database->bind(':gia', $gia);
    $database->bind(':soluong', $soluong);
    $database->bind(':tongtien', $tongtien);
    $database->bind(':idbill', $idbill);
    
    // Thực thi truy vấn
    $database->execute();
}

$ttkh = "";
$ttgh = "";

if (isset($_POST['dathang']) && ($_POST['dathang'])) {
    $name = $_POST['hoten'];
    $address = $_POST['diachi'];
    $tel = $_POST['dienthoai'];
    $email = $_POST['email'];
    $total = 0;
    $pttt = 0;
    // insert
    $idbill = taodonhang($name, $address, $tel, $email, $total, $pttt);

    if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
        foreach ($_SESSION['giohang'] as $item) {
            $tensp = $item['tensp'];
            $img = $item['img'];
            $gia = $item['gia'];
            $soluong = $item['soluong'];

            if (is_numeric($gia) && is_numeric($soluong)) {
                $thanhtien = $gia * $soluong;
                taogiohang($tensp, $img, $gia, $soluong, $thanhtien, $idbill);
        }
    }
    unset($_SESSION['giohang']);
}
    $ttkh='Bạn đã đặt hàng thành công<br><h2>Mã đơn hàng: ' .$idbill. '</h2>
               THÔNG TIN NHẬN HÀNG:
    <table class="thongtinnhanhang">
    <tr>
        <td>Họ tên</td>
        <td>' .$name. '</td>
    </tr>
    <tr>
        <td>Địa chỉ</td>
        <td>' .$address. '</td>
    </tr>
    <tr>
        <td>Điện thoại</td>
        <td>' .$tel. '</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>' .$email. '</td>
    </tr>
    </table>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/Fonts/your-path-to-fontawesome/fontawesome-free-6.4.2-web/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="./assets/main.css">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Giỏ Hàng</title>
</head>
<body>
    <style>
        .mini-cart-box {
    margin-left: -46px;
    z-index: 10002;
    position: relative;
    display: flex;
}
    
.vc_custom_1576244154005 {
    margin-right: 5px !important;
}

.mini-cart-box, 
.mini-cart-link {
    display: inline-block;
    padding: 0px 17px 13px 26px;
    border-radius: 10px;
}

.bg-color {
    background-color: #de8ebe;
}

.mini-cart-link {
    position: relative;
}

a {
    color: #555;
    transition: all 0.3s ease-out 0s;
    -webkit-transition: all 0.3s ease-out 0s;
}

.title30 {
    font-size: 30px;
    margin: 0;
    font-size: 14px;
    font-weight: 400;
}

.white {
    color: #fff;
}

.mini-cart-link::before {
    position: absolute;
    top: 3px;
    left: 3px !important;
    bottom: 3px;
    right: 3px;
    border: 1px dashed rgba(255, 255, 255, 0.5);
    content: "";
    border-radius: 10px;
}

.mini-cart-box, 
.mini-cart-link::before {
    position: absolute;
    content: "";
    border-radius: 10px;
    top: 5px;
    right: 5px;
    bottom: 5px;
    left: 30px;
}

.mini-cart-box,
.mini-cart-text {
    position: relative;
    top: 7px;
    right: -3px;
}

.mini-cart-box,
.mini-cart-title {
    display: block;
}

.mini-cart-box, {
    background-color: #dd8dbe; /* Màu hồng */
    color: #fff; /* Màu chữ trắng */
}

.mini-cart-box:hover .header__navbar-user-menu {
    display: block;
}

.header__navbar-user-menu {
    display: none;
    position: absolute;
    z-index: 1;
    padding-left: 0;
    top: 95%;
    right: 0;
    border-radius: 2px;
    background-color: #fff;
    width: 160px;
    list-style: none;
    box-shadow: 0 1px 2px #e0e0e0;
}

.header__navbar-user-menu::before {
    content: "";
    border-width: 20px 27px;
    border-style: solid;
    border-color: transparent transparent #fff transparent;
    position: absolute;
    right: 22px;
    top: -40px;
}

.header__navbar-user-menu::after {
    content: "";
    display: block;
    position: absolute;
    top: -8px;
    right: 0;
    width: 8px;
    background-color: #000;
}

.header__navbar-user-item a:first-child {
    border-top-left-radius: 2px;
    border-top-right-radius: 2px;
}

.header__navbar-user-item a:last-child {
    border-bottom-left-radius: 2px;
    border-bottom-right-radius: 2px;
}

.header__navbar-user-item {

}

.header__navbar-user-item a {
    text-decoration: none;
    color: #000;
    font-size: 1.4rem;
    padding: 10px 10px;
    display: block;
}

.header__navbar-user-item a:hover {
    background-color: #dd8dbe;  
    color: #fff;
}


.tensp {
    font-weight: 800;
}

i.fa-light {
    top: 0px;
    position: relative;
}

#bill {
    display: flex;
}

.lay {
    width: 120%; /* Đặt kích thước bên trái là 30% của màn hình */
}

.boxtrai {
    flex-grow: 1; /* Các phần tử bên phải sẽ tự động mở rộng để lấp đầy không gian còn lại */
}

.containe {
    display: flex;
    justify-content: space-between;
    padding: 0px;
    gap: 20px;
    max-width: 1000px;
    width: 140%;
}

.left-box, .right-box {
    position: relative;
    width: 59%; /* Độ rộng cho cả hai phần tử */
    border: 1px solid #ccc;
    padding: 0px;
    border-radius: 8px;
    background-color: #f9f9f9;
    top: 345px;
}

.left-box {
    left: 0;
}

.right-box {
    right: 0;
}

#bill h1 {
    font-size: 22px;
    margin-bottom: 20px;
    margin-left: 14px;
}

.thongtinnhanhang {
    border-collapse: collapse;
    width: 100%; /* Độ rộng cho bảng thông tin nhận hàng */
}

.thongtinnhanhang td {
    padding: 8px;
}

.thongtinnhanhang td:first-child {
    width: 20%; /* Độ rộng cố định cho cột 'Họ tên' */
}

.thongtinnhanhang input[type="text"] {
    width: calc(100% - 16px); /* Đặt chiều rộng cho input, trừ đi khoảng cách padding */
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Phần giỏ hàng */
.gio-hang {
    margin-bottom: 20px;
}

.item-gio-hang {
    display: flex;
    align-items: center; /* Canh các phần tử theo chiều dọc */
    padding: 10px;
    border-bottom: 1px solid #ccc;
    font-size: 1.1rem;
}

.item-gio-hang .image img {
    max-width: 50px;
    margin-right: 10px;
}

.item-gio-hang .info {
    flex-grow: 1; /* Căn giữa các phần tử bên trong .info */
}

.item-gio-hang .id, .item-gio-hang .gia, .item-gio-hang .soluong, .item-gio-hang .tongtien, .item-gio-hang .icon {
    margin-left: auto; /* Căn phần tử này sang phải */
}

.item-gio-hang .soluong, .item-gio-hang .tongtien, .item-gio-hang .icon {
    margin-left: 30px;
    width: 32px;
    right: -5px;
    position: relative;
}

.item-gio-hang .soluong input {
    width: 40px; /* Đặt chiều rộng cho ô nhập số lượng */
}

.item-gio-hang .icon {
    cursor: pointer;
}

.item-gio-hang .icon i {
    color: red;
}

/* Phần tổng tiền */
.total-section {
    display: flex;
    justify-content: space-around;
    margin-top: 20px;
}

.total-row h4 {
    margin: 0;
}

.total-row {
    font-size: 1.6rem;
    position: relative;
    display: flex;
}

.cart-summary-button {
    text-align: right;
    position: relative;
    top: -11px;
}

.btn {
    background-color: #dd8dbe;
    border: none;
    padding: 10px 20px;
    color: #fff;
    cursor: pointer;
    border-radius: 5px;
}

.btn:hover {
    background-color: #ca75aa;
}

    </style>
<div class="main">
        <header class="header">
            <div class="grid" style="width: 817px;">
                <a href="./PetShopBoom.php" target="_self" class="logo">
                    <img src="./assets/Image/img1.jpeg" alt="" width="215" height="213" scale="0" style= "right: 70px; position: relative">   
                </a>
                <nav class="header__navbar" style="width: 625px; left: 370px; top: 4px;">
                <ul class="header__navbar-list">
                    <li class="header__navbar-item">
                        <a href="cart.php" target="_self" class="header__navbar-item-link--strong">TRANG CHỦ</a>
                    </li>
                        <li class="header__navbar-item header__navbar-item--has-list">
                            <a href="" class="header__navbar-icon header__navbar-item-link">THÚ CƯNG<i class="fa-solid fa-chevron-down"></i></a>
                            <div class="header__list">
                                <!-- Danh sách các mục con -->
                            </div>  
                        </li>
                        <li class="header__navbar-item">PHỤ KIỆN</li>
                        <li class="header__navbar-item">
                            <a href="" class="header__navbar-icon header__navbar-item-link">
                                DỊCH VỤ
                                <i class="fa-solid fa-chevron-down"></i>
                            </a>
                        </li>
                        <div class="mini-cart-box mini-cart1 aside-box vc_custom_1576244154005">
                            <a class="mini-cart-link bg-color" href="cartproduct.php">
                                <span class="mini-cart-icon title30 white" style="position: absolute;">
                                    <i class="fa-solid fa-cart-shopping" style=" position: relative; top: 16px; right: 17px;"></i>
                                </span>
                                <span class="mini-cart-text">
                                    <strong class="mini-cart-title white">Giỏ hàng</strong>
                                    <span class="mini-cart-number white set-cart-number">0 </span> 
                                    <span class="white mini-cart-space">sản phẩm -</span>
                                    <span class="mini-cart-total-price set-cart-price white">
                                        <span class="woocommerce-Price-amount amount">0
                                            <span class="woocommerce-Price-currencySymbol">₫</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                            <ul class="header__navbar-user-menu">
                                <li class="header__navbar-user-item">
                                    <a href="cartproduct.php">Giỏ hàng của tôi</a>
                                </li>
                                <li class="header__navbar-user-item">
                                    <a href="logout.php">Đăng xuất</a>
                                </li>
                            </ul>
                        </div> 
                    </ul>    
                </nav>
            </div>
            <!-- Form thông tin nhận hàng và giỏ hàng -->
            <div class="grid">
                <div class="containe">
                    <div class="left-box">
                        <!-- Form thông tin nhận hàng -->
                        <div class="boxtrai mr" id="bill">
                            
                                <div class="lay">
                                <?php echo $ttkh; ?>
                                
                                </div>
                            </div>      
                        </div>
                    <div class="right-box">
                        <!-- Giỏ hàng -->
                        <?php echo $ttgh; ?>
                        
                    </div>
                </div>
            </div>
    </header>  
</div>
<!-- footer -->
<footer class="footer" style="top: 535px; position: relative;">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Chăm sóc khách hàng</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Trung Tâm Trợ Giúp</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">PetShopBoom Mail</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Hướng dẫn mua hàng</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Giới thiệu</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Giới Thiệu Về PetShop Việt Nam</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Tuyển Dụng</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Điểu Khoản PetShop</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Danh mục</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Sản phẩm mới</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Sản phẩm nổi bật</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Shop bán chó mèo cảnh</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Theo dõi chúng tôi</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                    <i class="footer-item__icon fa-brands fa-facebook"></i>
                                    Facebook
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                    <i class="footer-item__icon fa-brands fa-instagram"></i>
                                    Instagram
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                    <i class="footer-item__icon fa-brands fa-pinterest"></i>
                                    Pinterest
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Vào cửa hàng trên ứng dụng</h3>
                        <div class="footer__download">
                            <img src="./assets/Image/img42.jpeg" alt="Download QR" class="footer__download-qr">
                            <div class="footer__download-apps">
                                <a href="" class="footer__download-app-link">
                                    <img src="./assets/Image/img45.png" alt="Google Play" class="footer__download-app-img">
                                </a>
                                <a href="" class="footer__download-app-link">
                                    <img src="./assets/Image/img44.png" alt="App Store" class="footer__download-app-img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="footer__bottom">
                <div class="grid">
                   <p class="footer__text" style="text-align: center;">© 2023 - Bản quyền thuộc về Công ty Boom</p>
                </div>
            </div>
        </footer>
</div>
</body>
</html>

