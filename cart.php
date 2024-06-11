<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&family=Roboto:wght@300;400;500;700&display=swap">
    <link rel="stylesheet" href="./assets/Fonts/your-path-to-fontawesome/fontawesome-free-6.4.2-web/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="./assets/main.css">
    <link rel="stylesheet" href="./assets/style.css">
    <title>PET SHOP BOOM</title>
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

i.fa-light {
    top: 0px;
    position: relative;
}

    .product {
        text-align: center;
    }

    .product-quick-view {
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        background-color: #007BFF;
        color: white;
        text-decoration: none;
        border: none;
        border-radius: 5px;
    }

    .modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        z-index: 2;
        display: none;
    }

    .modal-content {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        width: 80%;
        max-width: 500px;
    }

    .close {
        float: right;
        font-size: 20px;
        cursor: pointer;
    }

    .product-details {
        margin-top: 20px;
        text-align: left;
    }
    
</style>

    <!-- BEM -->
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
                            <ul class="header__list-item">
                                <li class="header__list-item-link">
                                    <a href="" class="header__list-link">
                                    <div class="header__list-info">
                                        <span class="header__list-name">Chó Alaska Malamute</span>
                                    </div>
                                </a> 
                            </li>
                                <li class="header__list-item-link">
                                    <a href="" class="header__list-link">                   
                                    <div class="header__list-info">                   
                                        <span class="header__list-name">Chó Beagle</span>                    
                                    </div>                    
                                </a>                     
                            </li>                                        
                                <li class="header__list-item-link">
                                    <a href="" class="header__list-link">
                                    <div class="header__list-info">
                                        <span class="header__list-name">Chó Corgi</span>
                                    </div>
                                </a> 
                            </li>
                                <li class="header__list-item-link">
                                    <a href="" class="header__list-link">
                                    <div class="header__list-info">
                                        <span class="header__list-name">Chó Golden Retriever</span>
                                    </div>
                                </a> 
                            </li>
                                 <li class="header__list-item-link">
                                    <a href="" class="header__list-link">
                                    <div class="header__list-info">
                                        <span class="header__list-name">Chó Husky Siberian</span>
                                    </div>
                                </a> 
                            </li>
                                <li class="header__list-item-link">
                                    <a href="" class="header__list-link">
                                    <div class="header__list-info">
                                        <span class="header__list-name">Chó Phốc Sốc - Pomeranian</span>
                                    </div>
                                </a> 
                            </li>
                                <li class="header__list-item-link">
                                    <a href="" class="header__list-link">
                                    <div class="header__list-info">
                                        <span class="header__list-name">Chó Poodle</span>
                                    </div>
                                </a> 
                            </li>
                                <li class="header__list-item-link">
                                    <a href="" class="header__list-link">
                                    <div class="header__list-info">
                                        <span class="header__list-name">Chó Pug</span>
                                    </div>
                                </a> 
                            </li>
                                <li class="header__list-item-link">
                                    <a href="" class="header__list-link">
                                    <div class="header__list-info">
                                        <span class="header__list-name">Chó Samoyed</span>
                                    </div>
                                </a> 
                            </li>
                                <li class="header__list-item-link">
                                    <a href="" class="header__list-link">
                                    <div class="header__list-info">
                                        <span class="header__list-name">Mèo Anh (Dài + Ngắn)</span>
                                    </div>
                                </a> 
                            </li>
                                <li class="header__list-item-link">
                                    <a href="" class="header__list-link">
                                    <div class="header__list-info">
                                        <span class="header__list-name">Mèo Chân Ngắn</span>
                                    </div>
                                </a> 
                            </li>
                                <li class="header__list-item-link">
                                    <a href="" class="header__list-link">
                                    <div class="header__list-info">
                                        <span class="header__list-name">Mèo Tai Cụp</span>
                                    </div>
                                </a> 
                            </li>
                        </ul>
    
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
                                <strong class="mini-cart-title white">GIỏ hàng</strong>
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
<!-- SLIDE SHOW -->
    <div class="slider" style=" max-width: 639px; top: 215px;">
                <div class="list">
                    <div class="item">
                        <img src="./assets/Image/img2.png" style="width:100%">
                    </div>
                    <div class="item">
                        <img src="./assets/Image/img3.png" style="width:100%">
                    </div>
                    <div class="item">
                        <img src="./assets/Image/img4.png" style="width:100%">
                    </div>
                    <div class="item">
                        <img src="./assets/Image/img5.png" style="width:100%">
                    </div>
                </div>
                <!-- button prev and next  -->
                <div class="buttons">
                    <button id="prev"><</button>
                    <button id="next">></button>
                </div>
                <!-- dots (if 5 items => 5 dot) -->
                <ul class="dots">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            
            <script src="./index.js"></script>
    <!-- search -->
    <div class="search-with" style=" top: 153px;">
        <div class="dropdown">
            <button class="dropbtn">All Categories</button>
            <div class="dropdown-content">
                <a href="#">All Categories</a>
                <a href="#">Chó Bichon</a>
                <a href="#">Dây Vòng Cổ</a>
                <a href="#">Danh Mục Mèo</a>
                <a href="#">Mèo Anh (Dài + Ngắn)</a>
                <a href="#">Mèo Chân Ngắn</a>
                <a href="#">Mèo Tai Cụp</a>
                <a href="#">Danh Mục Cún</a>
                <a href="#">Chó Alaska Malamute</a>
                <a href="#">Chó Bắc Kinh</a>
                <a href="#">Chó Beagle</a>
                <a href="#">Chó Corgi</a>
            </div>
        </div>
            <div class="search-wrapper">
                <input id="txtSearch" type="text" id="search-input" placeholder="Tìm kiếm..." style="height: 44px;top: -15px;position: relative;width: 296px;">
                <button onclick="window.location.href = '?controllers=Product&action=search&keyword document.getElementByid('txtSearch').value" id="search-button" style="right:1px;top:-16px;"><i class="fa-solid fa-magnifying-glass"></i></button> 
            </div>
            <div class="result-box">
<!-- //public function search(){
    //$keyword $_GET["keyword"];
    require_once"../model/book.php";
    $model = new ModelBook();
    $result = $model -> get_product_by_name($keyword);
    requice_once "../view/product/product_search.php";
} -->

<!-- //public function get_product_by_name(){
    $db= new connect();
    $query = "SELLECT * FROM book WHERE book_name LIKE '%{$keyword}%'";
    $result-> getlist($query);
    return $result;
} -->

<!-- product_search 
  -->
    <!-- // print_r ($result->fetchAll) -->
<!-- --> 

        </div>
    </div>
<!-- CONTAINER -->
<div class="horizontal-line"></div>
    <div class="container">
        <div class="wrap-bread-crumb">
            <div class="bread-crumb">
                <a href="cart.php">Trang chủ</a>
                <span style="font-size: 1.4rem; color: #555;">Danh mục sản phẩm</span>
            </div>
        </div>
    </div>
<div id="main-content" class="main-page-default">
    <div class="wrap-bread-crumb">
        <div class="row">
            <div class="content-wrap col-md-12 ">
                <article id="post-1276" class="post-1276">
                    <div class="entry-content">
                        <div class="clearfix">
                            <div class="vc_row wpb_row">
                                <div class="wpb-column column_container col-sm-12">
                                    <div class="vc_column-inner vc_custom_1576307239909">
                                        <div class="wpb-wrapper">
                                            <div class="wpb_text-column">
                                                <div class="wpb_wrapper">
                                                    <h2 class="font-coiny" style="text-align: center; position: relative;right: 4%;">
                                                        <a href="">
                                                            <strong>SẢN PHẨM MỚI</strong>
                                                        </a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<!-- ROW 1 -->
<div class="block-element product-item-1 product-grid-view default js-content-wrap">
    <div class="products row list-product-wrap js-content-main">
        <!-- Single Product Start -->
        <form action="addtocart.php" method="post">
            <input type="hidden" name="tensp" value="GORDEN CÁI">
            <input type="hidden" name="img" value="img6.jpg">
            <input type="hidden" name="gia" value="1.140.000 ">
            <input type="hidden" name="id" value="SP00100">
        <div class="list-col-item list-4-item post-86466">
            <div class="item-product item-product-grid">
                <div class="product-thumb">
                    <a href="" class="product-thumb-link zoom-thumb">
                        <img src="./assets/Image/img6.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                        ./assets/Image/img6.jpg 270w,  
                        ./assets/Image/img6.jpg 150w, 
                        ./assets/Image/img6.jpg 300w, 
                        ./assets/Image/img6.jpg 266w, 
                        ./assets/Image/img6.jpg 90w, 
                        ./assets/Image/img6.jpg 70w, 
                        ./assets/Image/img6.jpg 50w" 
                        sizes="(max-width: 270px) 100vw, 270px">
                    </a>
                    <div class="product-label"> 
                        <span class="new">new</span>
                    </div>
                    <div class="product-extra-link text-center product" style="z-index: 1;">
                        <ul class="list-product-extra-link list-inline-block">
                            <li>
                                <a href="" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                data-product-title="GOLDEN CÁI">
                                <i class="fa-light fa-heart"></i>
                                    <span>Yêu thích</span>
                            </a>
                            </li>
                            <li>
                                <a title="Xem nhanh" data-product-id="86466" hrel="#openModal" class="product-quick-view quickview-link" onclick="openModal(event, 'productModal1')">
                                    <i class="fa-light fa-magnifying-glass" style="position: relative; top: -7px; left: -7px; font-size: 1.2rem;"></i>
                                    <span>Xem nhanh</span>
                                </a>
                            </li>
                        </ul>
                            <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple">
                    </div>
                    <div class="modal" id="productModal1">
                        <div class="modal-content">
                            <span class="close" onclick="closeModal('productModal1')">&times;</span>
                            <h2>Chi Tiết Sản Phẩm</h2>
                            <div class="product-details">
                                <p><strong>Tên sản phẩm:</strong> GORDEN CÁI</p>
                                <p><strong>Giá:</strong> 1.140.000 đ</p>
                                <p><strong>Mô tả:</strong> </p>
                            <!-- Thêm chi tiết sản phẩm khác nếu cần -->
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        <div class="product-info">
            <span class="title12 text-upprcase color font-bold">ID:SP00100</span>
            <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                <a href="" class="black" title="GOLDEN CÁI">GORDEN CÁI</a>
            </h3>
            <div class="product-price simple">
                <span class="woocommerce-Price-amount amount">1.140.000
                    <span class="product-Price-currencySymbol">&#x20AB;</span>
                </span>
            </div>
            <ul class="wrap-rating list-inline-block">
                <li>
                    <div class="product-rate">
                        <div class="product-rating" style="width:0%"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Single Product End -->  
                                                
<!-- Single Product Start -->
<form action="addtocart.php" method="post">
    <input type="hidden" name="tensp" value="PHỐC SỐC">
    <input type="hidden" name="img" value="img8.jpg">
    <input type="hidden" name="gia" value="8.000.000 ">
    <input type="hidden" name="id" value="ID:SP00200">
<div class="list-col-item list-4-item">
    <div class="item-product item-product-grid">
        <div class="product-thumb">
            <a href="#" class="product-thumb-link zoom-thumb">
                <img src="./assets/Image/img8.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                ./assets/Image/img8.jpg 270w,  
                ./assets/Image/img8.jpg 150w, 
                ./assets/Image/img8.jpg 300w, 
                ./assets/Image/img8.jpg 266w, 
                ./assets/Image/img8.jpg 90w, 
                ./assets/Image/img8.jpg 70w, 
                ./assets/Image/img8.jpg 50w"
                sizes="(max-width: 270px) 100vw, 270px">
            </a>
            <div class="product-label">
                <span class="new">new</span>
            </div>
            <div class="product-extra-link text-center product" style="z-index: 1;">
                <ul class="list-product-extra-link list-inline-block">
                    <li>
                        <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                        data-product-title="GOLDEN CÁI">
                        <i class="fa-light fa-heart"></i>
                            <span>Yêu thích</span>
                    </a>
                    </li>
                    <li>
                        <a title="Xem nhanh" data-product-id="86466" hrel="#openModal" class="product-quick-view quickview-link" onclick="openModal(event, 'productModal2')">
                            <i class="fa-light fa-magnifying-glass" style="position: relative; top: -7px; left: -7px; font-size: 1.2rem;"></i>
                            <span>Xem nhanh</span>
                        </a>
                    </li>
                </ul>
                <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple">
            </div>
        </div>
    </form>
        <div class="product-info">
            <span class="title12 text-upprcase color font-bold">ID:SP00200</span>
            <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                <a href="#" class="black" title="GOLDEN CÁI">PHỐC SỐC</a>
            </h3>
            <div class="product-price simple">
                <span class="woocommerce-Price-amount amount">8.000.000
                    <span class="product-Price-currencySymbol">&#x20AB;</span>
                </span>
            </div>
            <ul class="wrap-rating list-inline-block">
                <li>
                    <div class="product-rate">
                        <div class="product-rating" style="width:0%"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
<div class="modal" id="productModal2">
    <div class="modal-content">
        <span class="close" onclick="closeModal('productModal2')">&times;</span>
            <h2>Chi Tiết Sản Phẩm</h2>
                <div class="product-details">
                    <p><strong>Tên sản phẩm:</strong> GORDEN </p>
                    <p><strong>Giá:</strong> 1.140.000 đ</p>
                    <p><strong>Mô tả:</strong> </p>
                    <!-- Thêm chi tiết sản phẩm khác nếu cần -->
                </div>
    </div>
</div>
</div>
<!-- Single Product End -->  

<!-- Single Product Start -->
<form action="addtocart.php" method="post">
    <input type="hidden" name="tensp" value="POODLE NÂU">
    <input type="hidden" name="img" value="img9.jpg">
    <input type="hidden" name="gia" value="5.000.000 ">
    <input type="hidden" name="id" value="ID:SP00300">
<div class="list-col-item list-4-item">
    <div class="item-product item-product-grid">
        <div class="product-thumb">
            <a href="#" class="product-thumb-link zoom-thumb">
                <img src="./assets/Image/img9.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                ./assets/Image/img9.jpg 270w,  
                ./assets/Image/img9.jpg 150w, 
                ./assets/Image/img9.jpg 300w, 
                ./assets/Image/img9.jpg 266w, 
                ./assets/Image/img9.jpg 90w, 
                ./assets/Image/img9.jpg 70w, 
                ./assets/Image/img9.jpg 50w" 
                sizes="(max-width: 270px) 100vw, 270px">
            </a>
            <div class="product-label">
                <span class="new">new</span>
            </div>
            <div class="product-extra-link text-center product" style="z-index: 1;">
                <ul class="list-product-extra-link list-inline-block">
                    <li>
                        <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                        data-product-title="GOLDEN CÁI">
                        <i class="fa-light fa-heart"></i>
                            <span>Yêu thích</span>
                    </a>
                    </li>
                    <li>
                        <a title="Xem nhanh" data-product-id="86466" hrel="#openModal" class="product-quick-view quickview-link" onclick="openModal(event, 'productModal3')">
                            <i class="fa-light fa-magnifying-glass" style="position: relative; top: -7px; left: -7px; font-size: 1.2rem;"></i>
                            <span>Xem nhanh</span>
                        </a>
                    </li>
                </ul>
                <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple">
            </div>
        </div>
    </form>
        <div class="product-info">
            <span class="title12 text-upprcase color font-bold">ID:SP00300</span>
            <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                <a href="#" class="black" title="GOLDEN CÁI">POODLE NÂU</a>
            </h3>
            <div class="product-price simple">
                <span class="woocommerce-Price-amount amount">5.000.000
                    <span class="product-Price-currencySymbol">&#x20AB;</span>
                </span>
            </div>
            <ul class="wrap-rating list-inline-block">
                <li>
                    <div class="product-rate">
                        <div class="product-rating" style="width:0%"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="modal" id="productModal3">
        <div class="modal-content">
            <span class="close" onclick="closeModal('productModal3')">&times;</span>
                <h2>Chi Tiết Sản Phẩm</h2>
                    <div class="product-details">
                        <p><strong>Tên sản phẩm:</strong> GORDEN CÁI</p>
                        <p><strong>Giá:</strong> 1.140.000 đ</p>
                        <p><strong>Mô tả:</strong> </p>
                        <!-- Thêm chi tiết sản phẩm khác nếu cần -->
                    </div>
        </div>
    </div>
</div>
<!-- Single Product End -->

<!-- Single Product Start -->
<form action="addtocart.php" method="post">
    <input type="hidden" name="tensp" value="MÈO TRI CỤP">
    <input type="hidden" name="img" value="img10.jpg">
    <input type="hidden" name="gia" value="9.000.000 ">
    <input type="hidden" name="id" value="ID:SP00400">
<div class="list-col-item list-4-item">
    <div class="item-product item-product-grid">
        <div class="product-thumb">
            <a href="#" class="product-thumb-link zoom-thumb">
                <img src="./assets/Image/img10.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                ./assets/Image/img10.jpg 270w,  
                ./assets/Image/img10.jpg 150w, 
                ./assets/Image/img10.jpg 300w, 
                ./assets/Image/img10.jpg 266w, 
                ./assets/Image/img10.jpg 90w, 
                ./assets/Image/img10.jpg 70w, 
                ./assets/Image/img10.jpg 50w" 
                sizes="(max-width: 270px) 100vw, 270px">
            </a>
            <div class="product-label">
                <span class="new">new</span>
            </div>
            <div class="product-extra-link text-center product" style="z-index: 1;">
                <ul class="list-product-extra-link list-inline-block">
                    <li>
                        <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                        data-product-title="GOLDEN CÁI">
                        <i class="fa-light fa-heart"></i>
                            <span>Yêu thích</span>
                    </a>
                    </li>
                    <li>
                        <a title="Xem nhanh" data-product-id="86466" hrel="#openModal" class="product-quick-view quickview-link" onclick="openModal(event, 'productModal4')">
                            <i class="fa-light fa-magnifying-glass" style="position: relative; top: -7px; left: -7px; font-size: 1.2rem;"></i>
                            <span>Xem nhanh</span>
                        </a>
                    </li>
                </ul>
                <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple">
            </div>
        </div>
    </form>
        <div class="product-info">
            <span class="title12 text-upprcase color font-bold">ID:SP00400</span>
            <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                <a href="#" class="black" title="GOLDEN CÁI">MÈO TRI CỤP</a>
            </h3>
            <div class="product-price simple">
                <span class="woocommerce-Price-amount amount">9.000.000
                    <span class="product-Price-currencySymbol">&#x20AB;</span>
                </span>
            </div>
            <ul class="wrap-rating list-inline-block">
                <li>
                    <div class="product-rate">
                        <div class="product-rating" style="width:0%"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="modal" id="productModal4">
        <div class="modal-content">
            <span class="close" onclick="closeModal('productModal4')">&times;</span>
                <h2>Chi Tiết Sản Phẩm</h2>
                    <div class="product-details">
                        <p><strong>Tên sản phẩm:</strong> GORDEN CÁI</p>
                        <p><strong>Giá:</strong> 1.140.000 đ</p>
                        <p><strong>Mô tả:</strong> </p>
                        <!-- Thêm chi tiết sản phẩm khác nếu cần -->
                    </div>
        </div>
    </div>
</div>
<!-- Single Product End -->
                <!-- BACK 2 -->
                <div class="wpb-raw-code wpb_content_element ">
                    <div class="wpb-wrapper">
                        <a href="#" class="shop-button bg-color arrow-right block-right" style="">
                            Xem thêm
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                                    <!-- ROW 2 -->
                                    <div class="vc_row wpb-row">
                                        <div class="wpb-column column-container col-sm-12">
                                            <div class="vc_column-inner vc_custom_1576307239909">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_animate_when_almost_visible">
                                                        <div class="wpb_wrapper">
                                                            <h2 class="font-coiny" style="text-align: center; position: relative;right: 4%;">
                                                                <a href="#" class="">
                                                                    <strong>SẢN PHẨM NỔI BẬT</strong>
                                                                </a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="block-element product-item-1 product-grid-view default js-content-wrap">
                                                        <div class="products row list-product-wrap js-content-main">
                                                        <!-- Single Product Start -->
                                                            <form action="addtocart.php" method="post">
                                                                <input type="hidden" name="tensp" value="PHỐC SỐC BÉ">
                                                                <input type="hidden" name="img" value="img11.jpg">
                                                                <input type="hidden" name="gia" value="3.000.000 ">
                                                                <input type="hidden" name="id" value="ID:SP00500">
                                                            <div class="list-col-item list-4-item post-86466">
                                                                <div class="item-product item-product-grid">
                                                                    <div class="product-thumb">
                                                                        <a href="#" class="product-thumb-link zoom-thumb">
                                                                            <img src="./assets/Image/img11.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                            ./assets/Image/img11.jpg 270w,  
                                                                            ./assets/Image/img11.jpg 150w, 
                                                                            ./assets/Image/img11.jpg 300w, 
                                                                            ./assets/Image/img11.jpg 266w, 
                                                                            ./assets/Image/img11.jpg 90w, 
                                                                            ./assets/Image/img11.jpg 70w, 
                                                                            ./assets/Image/img11.jpg 50w" 
                                                                            sizes="(max-width: 270px) 100vw, 270px">
                                                                        </a>
                                                                        <div class="product-extra-link text-center">
                                                                            <ul class="list-product-extra-link list-inline-block">
                                                                                <li>
                                                                                    <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                                    data-product-title="GOLDEN CÁI">
                                                                                    <i class="fa-light fa-heart"></i>
                                                                                        <span>Yêu thích</span>
                                                                                </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                        <i class="fa-light fa-magnifying-glass"></i>
                                                                                        <span>Xem nhanh</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                            <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple">
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                    <div class="product-info">
                                                                        <span class="title12 text-upprcase color font-bold">ID:SP00500</span>
                                                                        <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                            <a href="#" class="black" title="GOLDEN CÁI">PHỐC SỐC BÉ XÍU</a>
                                                                        </h3>
                                                                        <div class="product-price simple">
                                                                            <span class="woocommerce-Price-amount amount">3.000.000
                                                                                <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                            </span>
                                                                        </div>
                                                                        <ul class="wrap-rating list-inline-block">
                                                                            <li>
                                                                                <div class="product-rate">
                                                                                    <div class="product-rating" style="width:0%"></div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single Product End -->

                                                            <!-- Single Product Start -->
                                                            <form action="addtocart.php" method="post">
                                                                <input type="hidden" name="tensp" value="POODLE VÀNG MƠ">
                                                                <input type="hidden" name="img" value="img11.jpg">
                                                                <input type="hidden" name="gia" value="25.000.000 ">
                                                                <input type="hidden" name="id" value="ID:SP00600">
                                                            <div class="list-col-item list-4-item">
                                                                <div class="item-product item-product-grid">
                                                                    <div class="product-thumb">
                                                                        <a href="#" class="product-thumb-link zoom-thumb">
                                                                            <img src="./assets/Image/img12.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                            ./assets/Image/img12.jpg 270w,  
                                                                            ./assets/Image/img12.jpg 150w, 
                                                                            ./assets/Image/img12.jpg 300w, 
                                                                            ./assets/Image/img12.jpg 266w, 
                                                                            ./assets/Image/img12.jpg 90w, 
                                                                            ./assets/Image/img12.jpg 70w, 
                                                                            ./assets/Image/img12.jpg 50w"
                                                                            sizes="(max-width: 270px) 100vw, 270px">
                                                                        </a>
                                                                        <div class="product-extra-link text-center">
                                                                            <ul class="list-product-extra-link list-inline-block">
                                                                                <li>
                                                                                    <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                                    data-product-title="GOLDEN CÁI">
                                                                                    <i class="fa-light fa-heart"></i>
                                                                                        <span>Yêu thích</span>
                                                                                </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                        <i class="fa-light fa-magnifying-glass"></i>
                                                                                        <span>Xem nhanh</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                            <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple">
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                    <div class="product-info">
                                                                        <span class="title12 text-upprcase color font-bold">ID:SP00600</span>
                                                                        <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                            <a href="#" class="black" title="GOLDEN CÁI">POODLE VÀNG MƠ</a>
                                                                        </h3>
                                                                        <div class="product-price simple">
                                                                            <span class="woocommerce-Price-amount amount">25.000.000
                                                                                <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                            </span>
                                                                        </div>
                                                                        <ul class="wrap-rating list-inline-block">
                                                                            <li>
                                                                                <div class="product-rate">
                                                                                    <div class="product-rating" style="width:0%"></div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single Product End -->

                                                            <!-- Single Product Start -->
                                                            <form action="addtocart.php" method="post">
                                                                <input type="hidden" name="tensp" value="MÈO XÁM CHÂN NGẮN">
                                                                <input type="hidden" name="img" value="img13.jpg">
                                                                <input type="hidden" name="gia" value="15.000.000 ">
                                                                <input type="hidden" name="id" value="ID:SP00700">
                                                            <div class="list-col-item list-4-item">
                                                                <div class="item-product item-product-grid">
                                                                    <div class="product-thumb">
                                                                        <a href="#" class="product-thumb-link zoom-thumb">
                                                                            <img src="./assets/Image/img13.jpeg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                            ./assets/Image/img13.jpeg 270w,  
                                                                            ./assets/Image/img13.jpeg 150w, 
                                                                            ./assets/Image/img13.jpeg 300w, 
                                                                            ./assets/Image/img13.jpeg 266w, 
                                                                            ./assets/Image/img13.jpeg 90w, 
                                                                            ./assets/Image/img13.jpeg 70w, 
                                                                            ./assets/Image/img13.jpeg 50w" 
                                                                            sizes="(max-width: 270px) 100vw, 270px">
                                                                        </a>
                                                                        <div class="product-extra-link text-center">
                                                                            <ul class="list-product-extra-link list-inline-block">
                                                                                <li>
                                                                                    <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                                    data-product-title="GOLDEN CÁI">
                                                                                    <i class="fa-light fa-heart"></i>
                                                                                        <span>Yêu thích</span>
                                                                                </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                        <i class="fa-light fa-magnifying-glass"></i>
                                                                                        <span>Xem nhanh</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                            <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple">
                                                                        </div>
                                                                    </div>
                                                                    </form> 
                                                                    <div class="product-info">
                                                                        <span class="title12 text-upprcase color font-bold">ID:SP00700</span>
                                                                        <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                            <a href="#" class="black" title="GOLDEN CÁI">MÈO XÁM CHÂN NGẮN</a>
                                                                        </h3>
                                                                        <div class="product-price simple">
                                                                            <span class="woocommerce-Price-amount amount">15.000.000
                                                                                <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                            </span>
                                                                        </div>
                                                                        <ul class="wrap-rating list-inline-block">
                                                                            <li>
                                                                                <div class="product-rate">
                                                                                    <div class="product-rating" style="width:0%"></div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single Product End -->

                                                            <!-- Single Product Start -->
                                                            <form action="addtocart.php" method="post">
                                                                <input type="hidden" name="tensp" value="SAMOYED TRẮNG TINH">
                                                                <input type="hidden" name="img" value="img11.jpg">
                                                                <input type="hidden" name="gia" value="70.000.000 ">
                                                                <input type="hidden" name="id" value="ID:SP00800">
                                                            <div class="list-col-item list-4-item">
                                                                <div class="item-product item-product-grid">
                                                                    <div class="product-thumb">
                                                                        <a href="#" class="product-thumb-link zoom-thumb">
                                                                            <img src="./assets/Image/img14.jpeg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                            ./assets/Image/img14.jpeg 270w,  
                                                                            ./assets/Image/img14.jpeg 150w, 
                                                                            ./assets/Image/img14.jpeg 300w, 
                                                                            ./assets/Image/img14.jpeg 266w, 
                                                                            ./assets/Image/img14.jpeg 90w, 
                                                                            ./assets/Image/img14.jpeg 70w, 
                                                                            ./assets/Image/img14.jpeg 50w" 
                                                                            sizes="(max-width: 270px) 100vw, 270px">
                                                                        </a>
                                                                        <div class="product-extra-link text-center">
                                                                            <ul class="list-product-extra-link list-inline-block">
                                                                                <li>
                                                                                    <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                                    data-product-title="GOLDEN CÁI">
                                                                                    <i class="fa-light fa-heart"></i>
                                                                                        <span>Yêu thích</span>
                                                                                </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                        <i class="fa-light fa-magnifying-glass"></i>
                                                                                        <span>Xem nhanh</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                            <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple">
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                    <div class="product-info">
                                                                        <span class="title12 text-upprcase color font-bold">ID:SP00800</span>
                                                                        <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                            <a href="#" class="black" title="GOLDEN CÁI">SAMOYED TRẮNG TINH</a>
                                                                        </h3>
                                                                        <div class="product-price simple">
                                                                            <span class="woocommerce-Price-amount amount">70.000.000
                                                                                <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                            </span>
                                                                        </div>
                                                                        <ul class="wrap-rating list-inline-block">
                                                                            <li>
                                                                                <div class="product-rate">
                                                                                    <div class="product-rating" style="width:0%"></div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                <div class="wpb-raw-code wpb_content_element ">
                                                                    <div class="wpb-wrapper">
                                                                        <a href="#" class="shop-button bg-color arrow-right block-right">
                                                                            Xem thêm
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single Product End -->
                                    <!-- ROW 3 -->
                                    <div class="vc_row wpb_row">
                                        <div class="wpb-column column_container col-sm-12">
                                            <div class="vc_column-inner vc_custom_1576307239909">
                                                <div class="wpb-wrapper">
                                                    <div class="wpb_text-column">
                                                        <div class="wpb_wrapper">
                                                            <h2 class="font-coiny" style="text-align: center; position: relative;right: 4%;">
                                                                <a href="#" class="">
                                                                    <strong>SHOP BÁN CHÓ MÈO CẢNH</strong>
                                                                </a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ROW 1 -->
                                            <div class="block-element product-item-1 product-grid-view default js-content-wrap">
                                                <div class="products row list-product-wrap js-content-main">
                                                    <!-- Single Product Start -->
                                                    <form action="addtocart.php" method="post">
                                                                <input type="hidden" name="tensp" value="GORDEN CÁI">
                                                                <input type="hidden" name="img" value="img6.jpg">
                                                                <input type="hidden" name="gia" value="1.140.000 ">
                                                                <input type="hidden" name="id" value="ID:SP00100">
                                                    <div class="list-col-item list-4-item post-86466">
                                                        <div class="item-product item-product-grid">
                                                            <div class="product-thumb">
                                                                <a href="#" class="product-thumb-link zoom-thumb">
                                                                    <img src="./assets/Image/img6.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                    ./assets/Image/img6.jpg 270w,  
                                                                    ./assets/Image/img6.jpg 150w, 
                                                                    ./assets/Image/img6.jpg 300w, 
                                                                    ./assets/Image/img6.jpg 266w, 
                                                                    ./assets/Image/img6.jpg 90w, 
                                                                    ./assets/Image/img6.jpg 70w, 
                                                                    ./assets/Image/img6.jpg 50w" 
                                                                    sizes="(max-width: 270px) 100vw, 270px">
                                                                </a>
                                                                <div class="product-label">
                                                                    <span class="new">new</span>
                                                                </div>
                                                                <div class="product-extra-link text-center">
                                                                    <ul class="list-product-extra-link list-inline-block">
                                                                        <li>
                                                                            <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                            data-product-title="GOLDEN CÁI">
                                                                            <i class="fa-light fa-heart"></i>
                                                                                <span>Yêu thích</span>
                                                                        </a>
                                                                        </li>
                                                                        <li>
                                                                            <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                <i class="fa-light fa-magnifying-glass"></i>
                                                                                <span>Xem nhanh</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple">
                                                                </div>
                                                            </div>
                                                        </form>
                                                            <div class="product-info">
                                                                <span class="title12 text-upprcase color font-bold">ID:SP00100</span>
                                                                <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                    <a href="#" class="black" title="GOLDEN CÁI">GORDEN CÁI</a>
                                                                </h3>
                                                                <div class="product-price simple">
                                                                    <span class="woocommerce-Price-amount amount">1.140.000
                                                                        <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                    </span>
                                                                </div>
                                                                <ul class="wrap-rating list-inline-block">
                                                                    <li>
                                                                        <div class="product-rate">
                                                                            <div class="product-rating" style="width:0%"></div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->

                                                    <!-- Single Product Start -->
                                                    <form action="addtocart.php" method="post">
                                                                <input type="hidden" name="tensp" value="PHỐC SỐC TRẮNG CÁI">
                                                                <input type="hidden" name="img" value="img8.jpg">
                                                                <input type="hidden" name="gia" value="8.000.000 ">
                                                                <input type="hidden" name="id" value="ID:SP00200">
                                                    <div class="list-col-item list-4-item">
                                                        <div class="item-product item-product-grid">
                                                            <div class="product-thumb">
                                                                <a href="#" class="product-thumb-link zoom-thumb">
                                                                    <img src="./assets/Image/img8.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                    ./assets/Image/img8.jpg 270w,  
                                                                    ./assets/Image/img8.jpg 150w, 
                                                                    ./assets/Image/img8.jpg 300w, 
                                                                    ./assets/Image/img8.jpg 266w, 
                                                                    ./assets/Image/img8.jpg 90w, 
                                                                    ./assets/Image/img8.jpg 70w, 
                                                                    ./assets/Image/img8.jpg 50w"
                                                                    sizes="(max-width: 270px) 100vw, 270px">
                                                                </a>
                                                                <div class="product-label">
                                                                    <span class="new">new</span>
                                                                </div>
                                                                <div class="product-extra-link text-center">
                                                                    <ul class="list-product-extra-link list-inline-block">
                                                                        <li>
                                                                            <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                            data-product-title="GOLDEN CÁI">
                                                                            <i class="fa-light fa-heart"></i>
                                                                                <span>Yêu thích</span>
                                                                        </a>
                                                                        </li>
                                                                        <li>
                                                                            <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                <i class="fa-light fa-magnifying-glass"></i>
                                                                                <span>Xem nhanh</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple">
                                                                </div>
                                                            </div>
                                                        </form>
                                                            <div class="product-info">
                                                                <span class="title12 text-upprcase color font-bold">ID:SP00200</span>
                                                                <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                    <a href="#" class="black" title="GOLDEN CÁI">PHỐC SỐC TRẮNG CÁI</a>
                                                                </h3>
                                                                <div class="product-price simple">
                                                                    <span class="woocommerce-Price-amount amount">8.000.000
                                                                        <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                    </span>
                                                                </div>
                                                                <ul class="wrap-rating list-inline-block">
                                                                    <li>
                                                                        <div class="product-rate">
                                                                            <div class="product-rating" style="width:0%"></div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->

                                                    <!-- Single Product Start -->
                                                    <form action="addtocart.php" method="post">
                                                        <input type="hidden" name="tensp" value="POODLE NÂU XINH">
                                                        <input type="hidden" name="img" value="img9.jpg">
                                                        <input type="hidden" name="gia" value="5.000.000 ">
                                                        <input type="hidden" name="id" value="ID:SP00300">    
                                                    <div class="list-col-item list-4-item">
                                                        <div class="item-product item-product-grid">
                                                            <div class="product-thumb">
                                                                <a href="#" class="product-thumb-link zoom-thumb">
                                                                    <img src="./assets/Image/img9.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                    ./assets/Image/img9.jpg 270w,  
                                                                    ./assets/Image/img9.jpg 150w, 
                                                                    ./assets/Image/img9.jpg 300w, 
                                                                    ./assets/Image/img9.jpg 266w, 
                                                                    ./assets/Image/img9.jpg 90w, 
                                                                    ./assets/Image/img9.jpg 70w, 
                                                                    ./assets/Image/img9.jpg 50w" 
                                                                    sizes="(max-width: 270px) 100vw, 270px">
                                                                </a>
                                                                <div class="product-label">
                                                                    <span class="new">new</span>
                                                                </div>
                                                                <div class="product-extra-link text-center">
                                                                    <ul class="list-product-extra-link list-inline-block">
                                                                        <li>
                                                                            <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                            data-product-title="GOLDEN CÁI">
                                                                            <i class="fa-light fa-heart"></i>
                                                                                <span>Yêu thích</span>
                                                                        </a>
                                                                        </li>
                                                                        <li>
                                                                            <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                <i class="fa-light fa-magnifying-glass"></i>
                                                                                <span>Xem nhanh</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple">
                                                                </div>
                                                            </div>
                                                        </form>
                                                            <div class="product-info">
                                                                <span class="title12 text-upprcase color font-bold">ID:SP00300</span>
                                                                <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                    <a href="#" class="black" title="GOLDEN CÁI">POODLE NÂU XINH</a>
                                                                </h3>
                                                                <div class="product-price simple">
                                                                    <span class="woocommerce-Price-amount amount">5.000.000
                                                                        <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                    </span>
                                                                </div>
                                                                <ul class="wrap-rating list-inline-block">
                                                                    <li>
                                                                        <div class="product-rate">
                                                                            <div class="product-rating" style="width:0%"></div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->

                                                    <!-- Single Product Start -->
                                                    <form action="addtocart.php" method="post">
                                                        <input type="hidden" name="tensp" value="MÈO TAI CỤP XÁM">
                                                        <input type="hidden" name="img" value="img10.jpg">
                                                        <input type="hidden" name="gia" value="9.000.000 ">
                                                        <input type="hidden" name="id" value="ID:SP00400"> 
                                                    <div class="list-col-item list-4-item">
                                                        <div class="item-product item-product-grid">
                                                            <div class="product-thumb">
                                                                <a href="#" class="product-thumb-link zoom-thumb">
                                                                    <img src="./assets/Image/img10.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                    ./assets/Image/img10.jpg 270w,  
                                                                    ./assets/Image/img10.jpg 150w, 
                                                                    ./assets/Image/img10.jpg 300w, 
                                                                    ./assets/Image/img10.jpg 266w, 
                                                                    ./assets/Image/img10.jpg 90w, 
                                                                    ./assets/Image/img10.jpg 70w, 
                                                                    ./assets/Image/img10.jpg 50w" 
                                                                    sizes="(max-width: 270px) 100vw, 270px">
                                                                </a>
                                                                <div class="product-label">
                                                                    <span class="new">new</span>
                                                                </div>
                                                                <div class="product-extra-link text-center">
                                                                    <ul class="list-product-extra-link list-inline-block">
                                                                        <li>
                                                                            <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                            data-product-title="GOLDEN CÁI">
                                                                            <i class="fa-light fa-heart"></i>
                                                                                <span>Yêu thích</span>
                                                                        </a>
                                                                        </li>
                                                                        <li>
                                                                            <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                <i class="fa-light fa-magnifying-glass"></i>
                                                                                <span>Xem nhanh</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple">
                                                                </div>
                                                            </div>
                                                        </form>
                                                            <div class="product-info">
                                                                <span class="title12 text-upprcase color font-bold">ID:SP00400</span>
                                                                <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                    <a href="#" class="black" title="GOLDEN CÁI">MÈO TAI CỤP XÁM</a>
                                                                </h3>
                                                                <div class="product-price simple">
                                                                    <span class="woocommerce-Price-amount amount">9.000.000
                                                                        <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                    </span>
                                                                </div>
                                                                <ul class="wrap-rating list-inline-block">
                                                                    <li>
                                                                        <div class="product-rate">
                                                                            <div class="product-rating" style="width:0%"></div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->

                                                    <!-- LIST 2 -->
                                                    <!-- Single Product Start -->
                                                    <form action="addtocart.php" method="post">
                                                        <input type="hidden" name="tensp" value="PHỐC SỐC VÀNG">
                                                        <input type="hidden" name="img" value="img15.jpg">
                                                        <input type="hidden" name="gia" value="3.000.000 ">
                                                        <input type="hidden" name="id" value="ID:SP00010"> 
                                                    <div class="list-col-item list-4-item">
                                                        <div class="item-product item-product-grid">
                                                            <div class="product-thumb">
                                                                <a href="#" class="product-thumb-link zoom-thumb">
                                                                    <img src="./assets/Image/img15.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                    ./assets/Image/img15.jpg 270w,  
                                                                    ./assets/Image/img15.jpg 150w, 
                                                                    ./assets/Image/img15.jpg 300w, 
                                                                    ./assets/Image/img15.jpg 266w, 
                                                                    ./assets/Image/img15.jpg 90w, 
                                                                    ./assets/Image/img15.jpg 70w, 
                                                                    ./assets/Image/img15.jpg 50w" 
                                                                    sizes="(max-width: 270px) 100vw, 270px">
                                                                </a>
                                                                <div class="product-label">
                                                                    <span class="new">new</span>
                                                                </div>
                                                                <div class="product-extra-link text-center">
                                                                    <ul class="list-product-extra-link list-inline-block">
                                                                        <li>
                                                                            <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                            data-product-title="GOLDEN CÁI">
                                                                            <i class="fa-light fa-heart"></i>
                                                                                <span>Yêu thích</span>
                                                                        </a>
                                                                        </li>
                                                                        <li>
                                                                            <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                <i class="fa-light fa-magnifying-glass"></i>
                                                                                <span>Xem nhanh</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple">
                                                                </div>
                                                            </div>
                                                        </form>
                                                            <div class="product-info">
                                                                <span class="title12 text-upprcase color font-bold">ID:SP00010</span>
                                                                <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                    <a href="#" class="black" title="GOLDEN CÁI">PHỐC SỐC VÀNG</a>
                                                                </h3>
                                                                <div class="product-price simple">
                                                                    <span class="woocommerce-Price-amount amount">3.000.000
                                                                        <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                    </span>
                                                                </div>
                                                                <ul class="wrap-rating list-inline-block">
                                                                    <li>
                                                                        <div class="product-rate">
                                                                            <div class="product-rating" style="width:0%"></div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->

                                                    <!-- Single Product Start -->
                                                    <form action="addtocart.php" method="post">
                                                        <input type="hidden" name="tensp" value="ĐỐM ĐỰC">
                                                        <input type="hidden" name="img" value="img16.jpg">
                                                        <input type="hidden" name="gia" value="1.000.000 ">
                                                        <input type="hidden" name="id" value="ID:SP00011"> 
                                                    <div class="list-col-item list-4-item">
                                                        <div class="item-product item-product-grid">
                                                            <div class="product-thumb">
                                                                <a href="#" class="product-thumb-link zoom-thumb">
                                                                    <img src="./assets/Image/img16.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                    ./assets/Image/img16.jpg 270w,  
                                                                    ./assets/Image/img16.jpg 150w, 
                                                                    ./assets/Image/img16.jpg 300w, 
                                                                    ./assets/Image/img16.jpg 266w, 
                                                                    ./assets/Image/img16.jpg 90w, 
                                                                    ./assets/Image/img16.jpg 70w, 
                                                                    ./assets/Image/img16.jpg 50w" 
                                                                    sizes="(max-width: 270px) 100vw, 270px">
                                                                </a>
                                                                <div class="product-extra-link text-center">
                                                                    <ul class="list-product-extra-link list-inline-block">
                                                                        <li>
                                                                            <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                            data-product-title="GOLDEN CÁI">
                                                                            <i class="fa-light fa-heart"></i>
                                                                                <span>Yêu thích</span>
                                                                        </a>
                                                                        </li>
                                                                        <li>
                                                                            <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                <i class="fa-light fa-magnifying-glass"></i>
                                                                                <span>Xem nhanh</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple">
                                                                </div>
                                                            </div>
                                                        </form>
                                                            <div class="product-info">
                                                                <span class="title12 text-upprcase color font-bold">ID:SP00011</span>
                                                                <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                    <a href="#" class="black" title="GOLDEN CÁI">ĐỐM ĐỰC</a>
                                                                </h3>
                                                                <div class="product-price simple">
                                                                    <span class="woocommerce-Price-amount amount">1.000.000
                                                                        <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                    </span>
                                                                </div>
                                                                <ul class="wrap-rating list-inline-block">
                                                                    <li>
                                                                        <div class="product-rate">
                                                                            <div class="product-rating" style="width:0%"></div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->

                                                    <!-- Single Product Start -->
                                                    <form action="addtocart.php" method="post">
                                                        <input type="hidden" name="tensp" value="GOLDEN ĐỘM ĐỰC">
                                                        <input type="hidden" name="img" value="img17.jpg">
                                                        <input type="hidden" name="gia" value="1.000.000 ">
                                                        <input type="hidden" name="id" value="ID:SP00012"> 
                                                    <div class="list-col-item list-4-item">
                                                        <div class="item-product item-product-grid">
                                                            <div class="product-thumb">
                                                                <a href="#" class="product-thumb-link zoom-thumb">
                                                                    <img src="./assets/Image/img17.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                    ./assets/Image/img17.jpg 270w,  
                                                                    ./assets/Image/img17.jpg 150w, 
                                                                    ./assets/Image/img17.jpg 300w, 
                                                                    ./assets/Image/img17.jpg 266w, 
                                                                    ./assets/Image/img17.jpg 90w, 
                                                                    ./assets/Image/img17.jpg 70w, 
                                                                    ./assets/Image/img17.jpg 50w" 
                                                                    sizes="(max-width: 270px) 100vw, 270px">
                                                                </a>
                                                                <div class="product-extra-link text-center">
                                                                    <ul class="list-product-extra-link list-inline-block">
                                                                        <li>
                                                                            <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                            data-product-title="GOLDEN CÁI">
                                                                            <i class="fa-light fa-heart"></i>
                                                                                <span>Yêu thích</span>
                                                                        </a>
                                                                        </li>
                                                                        <li>
                                                                            <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                <i class="fa-light fa-magnifying-glass"></i>
                                                                                <span>Xem nhanh</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple">
                                                                </div>
                                                            </div>
                                                        </form>
                                                            <div class="product-info">
                                                                <span class="title12 text-upprcase color font-bold">ID:SP00012</span>
                                                                <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                    <a href="#" class="black" title="GOLDEN CÁI">GOLDEN ĐỘM ĐỰC</a>
                                                                </h3>
                                                                <div class="product-price simple">
                                                                    <span class="woocommerce-Price-amount amount">1.000.000
                                                                        <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                    </span>
                                                                </div>
                                                                <ul class="wrap-rating list-inline-block">
                                                                    <li>
                                                                        <div class="product-rate">
                                                                            <div class="product-rating" style="width:0%"></div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->

                                                    <!-- Single Product Start -->
                                                    <form action="addtocart.php" method="post">
                                                        <input type="hidden" name="tensp" value="GOLDEN BẠCH KIM">
                                                        <input type="hidden" name="img" value="img18.jpg">
                                                        <input type="hidden" name="gia" value="3.000.000 ">
                                                        <input type="hidden" name="id" value="ID:SP00013"> 
                                                    <div class="list-col-item list-4-item">
                                                        <div class="item-product item-product-grid">
                                                            <div class="product-thumb">
                                                                <a href="#" class="product-thumb-link zoom-thumb">
                                                                    <img src="./assets/Image/img18.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                    ./assets/Image/img18.jpg 270w,  
                                                                    ./assets/Image/img18.jpg 150w, 
                                                                    ./assets/Image/img18.jpg 300w, 
                                                                    ./assets/Image/img18.jpg 266w, 
                                                                    ./assets/Image/img18.jpg 90w, 
                                                                    ./assets/Image/img18.jpg 70w, 
                                                                    ./assets/Image/img18.jpg 50w" 
                                                                    sizes="(max-width: 270px) 100vw, 270px">
                                                                </a>
                                                                <div class="product-extra-link text-center">
                                                                    <ul class="list-product-extra-link list-inline-block">
                                                                        <li>
                                                                            <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                            data-product-title="GOLDEN CÁI">
                                                                            <i class="fa-light fa-heart"></i>
                                                                                <span>Yêu thích</span>
                                                                        </a>
                                                                        </li>
                                                                        <li>
                                                                            <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                <i class="fa-light fa-magnifying-glass"></i>
                                                                                <span>Xem nhanh</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple">
                                                                </div>
                                                            </div>
                                                        </form>
                                                            <div class="product-info">
                                                                <span class="title12 text-upprcase color font-bold">ID:SP00013</span>
                                                                <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                    <a href="#" class="black" title="GOLDEN CÁI">GOLDEN BẠCH KIM</a>
                                                                </h3>
                                                                <div class="product-price simple">
                                                                    <span class="woocommerce-Price-amount amount">3.000.000
                                                                        <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                    </span>
                                                                </div>
                                                                <ul class="wrap-rating list-inline-block">
                                                                    <li>
                                                                        <div class="product-rate">
                                                                            <div class="product-rating" style="width:0%"></div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->
                                                    <!-- LIST 3 -->
                                                    <!-- Single Product Start -->
                                                    <form action="addtocart.php" method="post">
                                                        <input type="hidden" name="tensp" value="MÈO Tai CỤP XÁM">
                                                        <input type="hidden" name="img" value="img10.jpg">
                                                        <input type="hidden" name="gia" value="9.000.000 ">
                                                        <input type="hidden" name="id" value="ID:SP00014"> 
                                                    <div class="list-col-item list-4-item">
                                                        <div class="item-product item-product-grid">
                                                            <div class="product-thumb">
                                                                <a href="#" class="product-thumb-link zoom-thumb">
                                                                    <img src="./assets/Image/img10.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                    ./assets/Image/img10.jpg 270w,  
                                                                    ./assets/Image/img10.jpg 150w, 
                                                                    ./assets/Image/img10.jpg 300w, 
                                                                    ./assets/Image/img10.jpg 266w, 
                                                                    ./assets/Image/img10.jpg 90w, 
                                                                    ./assets/Image/img10.jpg 70w, 
                                                                    ./assets/Image/img10.jpg 50w" 
                                                                    sizes="(max-width: 270px) 100vw, 270px">
                                                                </a>
                                                                <div class="product-label">
                                                                    <span class="new">new</span>
                                                                </div>
                                                                <div class="product-extra-link text-center">
                                                                    <ul class="list-product-extra-link list-inline-block">
                                                                        <li>
                                                                            <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                            data-product-title="GOLDEN CÁI">
                                                                            <i class="fa-light fa-heart"></i>
                                                                                <span>Yêu thích</span>
                                                                        </a>
                                                                        </li>
                                                                        <li>
                                                                            <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                <i class="fa-light fa-magnifying-glass"></i>
                                                                                <span>Xem nhanh</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple">
                                                                </div>
                                                            </div>
                                                        </form>
                                                            <div class="product-info">
                                                                <span class="title12 text-upprcase color font-bold">ID:SP00014</span>
                                                                <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                    <a href="#" class="black" title="GOLDEN CÁI">MÈO Tai CỤP XÁM</a>
                                                                </h3>
                                                                <div class="product-price simple">
                                                                    <span class="woocommerce-Price-amount amount">9.000.000
                                                                        <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                    </span>
                                                                </div>
                                                                <ul class="wrap-rating list-inline-block">
                                                                    <li>
                                                                        <div class="product-rate">
                                                                            <div class="product-rating" style="width:0%"></div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->

                                            

                                                    <!-- Single Product Start -->
                                                    <form action="addtocart.php" method="post">
                                                        <input type="hidden" name="tensp" value="MÉO XÁM CÁI">
                                                        <input type="hidden" name="img" value="img20.jpg">
                                                        <input type="hidden" name="gia" value="2.000.000 ">
                                                        <input type="hidden" name="id" value="ID:SP00016">
                                                    <div class="list-col-item list-4-item">
                                                        <div class="item-product item-product-grid">
                                                            <div class="product-thumb">
                                                                <a href="#" class="product-thumb-link zoom-thumb">
                                                                    <img src="./assets/Image/img20.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                    ./assets/Image/img20.jpg 270w,  
                                                                    ./assets/Image/img20.jpg 150w, 
                                                                    ./assets/Image/img20.jpg 300w, 
                                                                    ./assets/Image/img20.jpg 266w, 
                                                                    ./assets/Image/img20.jpg 90w, 
                                                                    ./assets/Image/img20.jpg 70w, 
                                                                    ./assets/Image/img20.jpg 50w" 
                                                                    sizes="(max-width: 270px) 100vw, 270px">
                                                                </a>
                                                                <div class="product-extra-link text-center">
                                                                    <ul class="list-product-extra-link list-inline-block">
                                                                        <li>
                                                                            <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                            data-product-title="GOLDEN CÁI">
                                                                            <i class="fa-light fa-heart"></i>
                                                                                <span>Yêu thích</span>
                                                                        </a>
                                                                        </li>
                                                                        <li>
                                                                            <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                <i class="fa-light fa-magnifying-glass"></i>
                                                                                <span>Xem nhanh</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple">
                                                                </div>
                                                            </div>
                                                        </form>
                                                            <div class="product-info">
                                                                <span class="title12 text-upprcase color font-bold">ID:SP00016</span>
                                                                <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                    <a href="#" class="black" title="GOLDEN CÁI">MÉO XÁM CÁI</a>
                                                                </h3>
                                                                <div class="product-price simple">
                                                                    <span class="woocommerce-Price-amount amount">2.000.000
                                                                        <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                    </span>
                                                                </div>
                                                                <ul class="wrap-rating list-inline-block">
                                                                    <li>
                                                                        <div class="product-rate">
                                                                            <div class="product-rating" style="width:0%"></div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->

                                                    <!-- Single Product Start -->
                                                    <form action="addtocart.php" method="post">
                                                        <input type="hidden" name="tensp" value="EM MÈO GOLDER XINH">
                                                        <input type="hidden" name="img" value="img21.jpg">
                                                        <input type="hidden" name="gia" value="11.000.000 ">
                                                        <input type="hidden" name="id" value="ID:SP00017">
                                                    <div class="list-col-item list-4-item">
                                                        <div class="item-product item-product-grid">
                                                            <div class="product-thumb">
                                                                <a href="#" class="product-thumb-link zoom-thumb">
                                                                    <img src="./assets/Image/img21.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                    ./assets/Image/img21.jpg 270w,  
                                                                    ./assets/Image/img21.jpg 150w, 
                                                                    ./assets/Image/img21.jpg 300w, 
                                                                    ./assets/Image/img21.jpg 266w, 
                                                                    ./assets/Image/img21.jpg 90w, 
                                                                    ./assets/Image/img21.jpg 70w, 
                                                                    ./assets/Image/img21.jpg 50w" 
                                                                    sizes="(max-width: 270px) 100vw, 270px">
                                                                </a>
                                                                <div class="product-extra-link text-center">
                                                                    <ul class="list-product-extra-link list-inline-block">
                                                                        <li>
                                                                            <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                            data-product-title="GOLDEN CÁI">
                                                                            <i class="fa-light fa-heart"></i>
                                                                                <span>Yêu thích</span>
                                                                        </a>
                                                                        </li>
                                                                        <li>
                                                                            <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                <i class="fa-light fa-magnifying-glass"></i>
                                                                                <span>Xem nhanh</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple">
                                                                </div>
                                                            </div>
                                                        </form>
                                                            <div class="product-info">
                                                                <span class="title12 text-upprcase color font-bold">ID:SP00017</span>
                                                                <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                    <a href="#" class="black" title="GOLDEN CÁI">EM MÈO GOLDER XINH</a>
                                                                </h3>
                                                                <div class="product-price simple">
                                                                    <span class="woocommerce-Price-amount amount">11.000.000
                                                                        <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                    </span>
                                                                </div>
                                                                <ul class="wrap-rating list-inline-block">
                                                                    <li>
                                                                        <div class="product-rate">
                                                                            <div class="product-rating" style="width:0%"></div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->
                                                    <!-- LIST 4 -->
                                                    <!-- Single Product Start -->
                                                    <form action="addtocart.php" method="post">
                                                        <input type="hidden" name="tensp" value="MÈO CHÂN NGẮN TAI CỤP">
                                                        <input type="hidden" name="img" value="img22.jpg">
                                                        <input type="hidden" name="gia" value="34.000.000 ">
                                                        <input type="hidden" name="id" value="ID:SP00018">
                                                    <div class="list-col-item list-4-item">
                                                        <div class="item-product item-product-grid">
                                                            <div class="product-thumb">
                                                                <a href="#" class="product-thumb-link zoom-thumb">
                                                                    <img src="./assets/Image/img22.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                    ./assets/Image/img22.jpg 270w,  
                                                                    ./assets/Image/img22.jpg 150w, 
                                                                    ./assets/Image/img22.jpg 300w, 
                                                                    ./assets/Image/img22.jpg 266w, 
                                                                    ./assets/Image/img22.jpg 90w, 
                                                                    ./assets/Image/img22.jpg 70w, 
                                                                    ./assets/Image/img22.jpg 50w" 
                                                                    sizes="(max-width: 270px) 100vw, 270px">
                                                                </a>
                                                                <div class="product-extra-link text-center">
                                                                    <ul class="list-product-extra-link list-inline-block">
                                                                        <li>
                                                                            <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                            data-product-title="GOLDEN CÁI">
                                                                            <i class="fa-light fa-heart"></i>
                                                                                <span>Yêu thích</span>
                                                                        </a>
                                                                        </li>
                                                                        <li>
                                                                            <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                <i class="fa-light fa-magnifying-glass"></i>
                                                                                <span>Xem nhanh</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple">
                                                                </div>
                                                            </div>
                                                        </form>
                                                            <div class="product-info">
                                                                <span class="title12 text-upprcase color font-bold">ID:SP00018</span>
                                                                <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                    <a href="#" class="black" title="GOLDEN CÁI">MÈO CHÂN NGẮN TAI CỤP</a>
                                                                </h3>
                                                                <div class="product-price simple">
                                                                    <span class="woocommerce-Price-amount amount">34.000.000
                                                                        <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                    </span>
                                                                </div>
                                                                <ul class="wrap-rating list-inline-block">
                                                                    <li>
                                                                        <div class="product-rate">
                                                                            <div class="product-rating" style="width:0%"></div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->

                                                    <!-- Single Product Start -->
                                                    <form action="addtocart.php" method="post">
                                                        <input type="hidden" name="tensp" value="MÈO CHÂN NGẮN">
                                                        <input type="hidden" name="img" value="img23.jpg">
                                                        <input type="hidden" name="gia" value="28.000.000 ">
                                                        <input type="hidden" name="id" value="ID:SP00019">
                                                    <div class="list-col-item list-4-item">
                                                        <div class="item-product item-product-grid">
                                                            <div class="product-thumb">
                                                                <a href="#" class="product-thumb-link zoom-thumb">
                                                                    <img src="./assets/Image/img23.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                    ./assets/Image/img23.jpg 270w,  
                                                                    ./assets/Image/img23.jpg 150w, 
                                                                    ./assets/Image/img23.jpg 300w, 
                                                                    ./assets/Image/img23.jpg 266w, 
                                                                    ./assets/Image/img23.jpg 90w, 
                                                                    ./assets/Image/img23.jpg 70w, 
                                                                    ./assets/Image/img23.jpg 50w" 
                                                                    sizes="(max-width: 270px) 100vw, 270px">
                                                                </a>
                                                                <div class="product-extra-link text-center">
                                                                    <ul class="list-product-extra-link list-inline-block">
                                                                        <li>
                                                                            <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                            data-product-title="GOLDEN CÁI">
                                                                            <i class="fa-light fa-heart"></i>
                                                                                <span>Yêu thích</span>
                                                                        </a>
                                                                        </li>
                                                                        <li>
                                                                            <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                <i class="fa-light fa-magnifying-glass"></i>
                                                                                <span>Xem nhanh</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple"> 
                                                                </div>
                                                            </div>
                                                        </form>
                                                            <div class="product-info">
                                                                <span class="title12 text-upprcase color font-bold">ID:SP00019</span>
                                                                <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                    <a href="#" class="black" title="GOLDEN CÁI">MÈO CHÂN NGẮN</a>
                                                                </h3>
                                                                <div class="product-price simple">
                                                                    <span class="woocommerce-Price-amount amount">28.000.000
                                                                        <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                    </span>
                                                                </div>
                                                                <ul class="wrap-rating list-inline-block">
                                                                    <li>
                                                                        <div class="product-rate">
                                                                            <div class="product-rating" style="width:0%"></div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->

                                                    <!-- Single Product Start -->
                                                    <form action="addtocart.php" method="post">
                                                        <input type="hidden" name="tensp" value="MÈO XÁM TAI CỤP">
                                                        <input type="hidden" name="img" value="img24.jpg">
                                                        <input type="hidden" name="gia" value="16.000.000 ">
                                                        <input type="hidden" name="id" value="ID:SP00040">
                                                    <div class="list-col-item list-4-item">
                                                        <div class="item-product item-product-grid">
                                                            <div class="product-thumb">
                                                                <a href="#" class="product-thumb-link zoom-thumb">
                                                                    <img src="./assets/Image/img24.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                    ./assets/Image/img24.jpg 270w,  
                                                                    ./assets/Image/img24.jpg 150w, 
                                                                    ./assets/Image/img24.jpg 300w, 
                                                                    ./assets/Image/img24.jpg 266w, 
                                                                    ./assets/Image/img24.jpg 90w, 
                                                                    ./assets/Image/img24.jpg 70w, 
                                                                    ./assets/Image/img24.jpg 50w" 
                                                                    sizes="(max-width: 270px) 100vw, 270px">
                                                                </a>
                                                                <div class="product-extra-link text-center">
                                                                    <ul class="list-product-extra-link list-inline-block">
                                                                        <li>
                                                                            <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                            data-product-title="GOLDEN CÁI">
                                                                            <i class="fa-light fa-heart"></i>
                                                                                <span>Yêu thích</span>
                                                                        </a>
                                                                        </li>
                                                                        <li>
                                                                            <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                <i class="fa-light fa-magnifying-glass"></i>
                                                                                <span>Xem nhanh</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple"> 
                                                                </div>
                                                            </div>
                                                        </form>
                                                            <div class="product-info">
                                                                <span class="title12 text-upprcase color font-bold">ID:SP00040</span>
                                                                <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                    <a href="#" class="black" title="GOLDEN CÁI">MÈO XÁM TAI CỤP</a>
                                                                </h3>
                                                                <div class="product-price simple">
                                                                    <span class="woocommerce-Price-amount amount">16.000.000
                                                                        <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                    </span>
                                                                </div>
                                                                <ul class="wrap-rating list-inline-block">
                                                                    <li>
                                                                        <div class="product-rate">
                                                                            <div class="product-rating" style="width:0%"></div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->

                                                    <!-- Single Product Start -->
                                                    <form action="addtocart.php" method="post">
                                                        <input type="hidden" name="tensp" value="MÈO CHÂN NGẮN XINH">
                                                        <input type="hidden" name="img" value="img25.jpg">
                                                        <input type="hidden" name="gia" value="23.000.000 ">
                                                        <input type="hidden" name="id" value="ID:SP00020">
                                                    <div class="list-col-item list-4-item">
                                                        <div class="item-product item-product-grid">
                                                            <div class="product-thumb">
                                                                <a href="#" class="product-thumb-link zoom-thumb">
                                                                    <img src="./assets/Image/img25.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                    ./assets/Image/img25.jpg 270w,  
                                                                    ./assets/Image/img25.jpg 150w, 
                                                                    ./assets/Image/img25.jpg 300w, 
                                                                    ./assets/Image/img25.jpg 266w, 
                                                                    ./assets/Image/img25.jpg 90w, 
                                                                    ./assets/Image/img25.jpg 70w, 
                                                                    ./assets/Image/img25.jpg 50w" 
                                                                    sizes="(max-width: 270px) 100vw, 270px">
                                                                </a>
                                                                <div class="product-extra-link text-center">
                                                                    <ul class="list-product-extra-link list-inline-block">
                                                                        <li>
                                                                            <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                            data-product-title="GOLDEN CÁI">
                                                                            <i class="fa-light fa-heart"></i>
                                                                                <span>Yêu thích</span>
                                                                        </a>
                                                                        </li>
                                                                        <li>
                                                                            <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                <i class="fa-light fa-magnifying-glass"></i>
                                                                                <span>Xem nhanh</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple"> 
                                                                </div>
                                                            </div>
                                                        </form>
                                                            <div class="product-info">
                                                                <span class="title12 text-upprcase color font-bold">ID:SP00020</span>
                                                                <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                    <a href="#" class="black" title="GOLDEN CÁI">MÈO CHÂN NGẮN XINH</a>
                                                                </h3>
                                                                <div class="product-price simple">
                                                                    <span class="woocommerce-Price-amount amount">23.000.000
                                                                        <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                    </span>
                                                                </div>
                                                                <ul class="wrap-rating list-inline-block">
                                                                    <li>
                                                                        <div class="product-rate">
                                                                            <div class="product-rating" style="width:0%"></div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        <div class="wpb-raw-code wpb_content_element ">
                                                            <div class="wpb-wrapper">
                                                                <a href="#" class="shop-button bg-color arrow-right block-right" style= "left: 255px;">
                                                                    Xem thêm
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!--PHỤ KIỆN  -->
                                        <!-- ROW 1 -->
                                        <div class="vc_row wpb_row">
                                            <div class="wpb-column column_container col-sm-12">
                                                <div class="vc_column-inner vc_custom_1576307239909">
                                                    <div class="wpb-wrapper">
                                                        <div class="wpb_text-column">
                                                            <div class="wpb_wrapper">
                                                                <h2 class="font-coiny" style="text-align: center; position: relative;right: 4%;">
                                                                    <a href="#" class="">
                                                                        <strong>PHỤ KIỆN THÚ CƯNG</strong>
                                                                    </a>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- LIST 1 -->
                                                <div class="block-element product-item-1 product-grid-view default js-content-wrap">
                                                    <div class="products row list-product-wrap js-content-main">
                                                        <!-- Single Product Start -->
                                                        <form action="addtocart.php" method="post">
                                                            <input type="hidden" name="tensp" value="ĐỆM NGỒI Ô TÔ">
                                                            <input type="hidden" name="img" value="img26.jpeg">
                                                            <input type="hidden" name="gia" value="500.000 ">
                                                            <input type="hidden" name="id" value="ID:#">
                                                        <div class="list-col-item list-4-item post-86466">
                                                            <div class="item-product item-product-grid">
                                                                <div class="product-thumb">
                                                                    <a href="#" class="product-thumb-link zoom-thumb">
                                                                        <img src="./assets/Image/img26.jpeg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                        ./assets/Image/img26.jpeg 270w,  
                                                                        ./assets/Image/img26.jpeg 150w, 
                                                                        ./assets/Image/img26.jpeg 300w, 
                                                                        ./assets/Image/img26.jpeg 266w, 
                                                                        ./assets/Image/img26.jpeg 90w, 
                                                                        ./assets/Image/img26.jpeg 70w, 
                                                                        ./assets/Image/img26.jpeg 50w" 
                                                                        sizes="(max-width: 270px) 100vw, 270px">
                                                                    </a>
                                                                    <div class="product-extra-link text-center">
                                                                        <ul class="list-product-extra-link list-inline-block">
                                                                            <li>
                                                                                <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                                data-product-title="GOLDEN CÁI">
                                                                                <i class="fa-light fa-heart"></i>
                                                                                    <span>Yêu thích</span>
                                                                            </a>
                                                                            </li>
                                                                            <li>
                                                                                <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                    <i class="fa-light fa-magnifying-glass"></i>
                                                                                    <span>Xem nhanh</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                        <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple"> 
                                                                    </div>
                                                                </div>
                                                            </form>
                                                                <div class="product-info">
                                                                    <span class="title12 text-upprcase color font-bold">ID:#</span>
                                                                    <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                        <a href="#" class="black" title="GOLDEN CÁI">ĐỆM NGỒI Ô TÔ</a>
                                                                    </h3>
                                                                    <div class="product-price simple">
                                                                        <span class="woocommerce-Price-amount amount">500.000
                                                                            <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                        </span>
                                                                    </div>
                                                                    <ul class="wrap-rating list-inline-block">
                                                                        <li>
                                                                            <div class="product-rate">
                                                                                <div class="product-rating" style="width:0%"></div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->

                                                        <!-- Single Product Start -->
                                                        <form action="addtocart.php" method="post">
                                                            <input type="hidden" name="tensp" value="YẾM HỌA TIẾT CUTE">
                                                            <input type="hidden" name="img" value="img27.jpeg">
                                                            <input type="hidden" name="gia" value="70.000 ">
                                                            <input type="hidden" name="id" value="ID:#">
                                                        <div class="list-col-item list-4-item">
                                                            <div class="item-product item-product-grid">
                                                                <div class="product-thumb">
                                                                    <a href="#" class="product-thumb-link zoom-thumb">
                                                                        <img src="./assets/Image/img27.jpeg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                        ./assets/Image/img27.jpeg 270w,  
                                                                        ./assets/Image/img27.jpeg 150w, 
                                                                        ./assets/Image/img27.jpeg 300w, 
                                                                        ./assets/Image/img27.jpeg 266w, 
                                                                        ./assets/Image/img27.jpeg 90w, 
                                                                        ./assets/Image/img27.jpeg 70w, 
                                                                        ./assets/Image/img27.jpeg 50w"
                                                                        sizes="(max-width: 270px) 100vw, 270px">
                                                                    </a>
                                                                    <div class="product-extra-link text-center">
                                                                        <ul class="list-product-extra-link list-inline-block">
                                                                            <li>
                                                                                <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                                data-product-title="GOLDEN CÁI">
                                                                                <i class="fa-light fa-heart"></i>
                                                                                    <span>Yêu thích</span>
                                                                            </a>
                                                                            </li>
                                                                            <li>
                                                                                <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                    <i class="fa-light fa-magnifying-glass"></i>
                                                                                    <span>Xem nhanh</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                        <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple"> 
                                                                    </div>
                                                                </div>
                                                            </form>
                                                                <div class="product-info">
                                                                    <span class="title12 text-upprcase color font-bold">ID:#</span>
                                                                    <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                        <a href="#" class="black" title="GOLDEN CÁI">YẾM HỌA TIẾT CUTE</a>
                                                                    </h3>
                                                                    <div class="product-price simple">
                                                                        <span class="woocommerce-Price-amount amount">70.000
                                                                            <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                        </span>
                                                                    </div>
                                                                    <ul class="wrap-rating list-inline-block">
                                                                        <li>
                                                                            <div class="product-rate">
                                                                                <div class="product-rating" style="width:0%"></div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->

                                                        <!-- Single Product Start -->
                                                        <form action="addtocart.php" method="post">
                                                            <input type="hidden" name="tensp" value="MŨ CUTE CHO BOSS">
                                                            <input type="hidden" name="img" value="img28.jpeg">
                                                            <input type="hidden" name="gia" value="40.000 ">
                                                            <input type="hidden" name="id" value="ID:#">
                                                        <div class="list-col-item list-4-item">
                                                            <div class="item-product item-product-grid">
                                                                <div class="product-thumb">
                                                                    <a href="#" class="product-thumb-link zoom-thumb">
                                                                        <img src="./assets/Image/img28.jpeg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                        ./assets/Image/img28.jpeg 270w,  
                                                                        ./assets/Image/img28.jpeg 150w, 
                                                                        ./assets/Image/img28.jpeg 300w, 
                                                                        ./assets/Image/img28.jpeg 266w, 
                                                                        ./assets/Image/img28.jpeg 90w, 
                                                                        ./assets/Image/img28.jpeg 70w, 
                                                                        ./assets/Image/img28.jpeg 50w" 
                                                                        sizes="(max-width: 270px) 100vw, 270px">
                                                                    </a>
                                                                    <div class="product-extra-link text-center">
                                                                        <ul class="list-product-extra-link list-inline-block">
                                                                            <li>
                                                                                <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                                data-product-title="GOLDEN CÁI">
                                                                                <i class="fa-light fa-heart"></i>
                                                                                    <span>Yêu thích</span>
                                                                            </a>
                                                                            </li>
                                                                            <li>
                                                                                <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                    <i class="fa-light fa-magnifying-glass"></i>
                                                                                    <span>Xem nhanh</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                        <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple"> 
                                                                    </div>
                                                                </div>
                                                            </form>
                                                                <div class="product-info">
                                                                    <span class="title12 text-upprcase color font-bold">ID:#</span>
                                                                    <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                        <a href="#" class="black" title="GOLDEN CÁI">MŨ CUTE CHO BOSS</a>
                                                                    </h3>
                                                                    <div class="product-price simple">
                                                                        <span class="woocommerce-Price-amount amount">40.000
                                                                            <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                        </span>
                                                                    </div>
                                                                    <ul class="wrap-rating list-inline-block">
                                                                        <li>
                                                                            <div class="product-rate">
                                                                                <div class="product-rating" style="width:0%"></div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->

                                                        <!-- Single Product Start -->
                                                        <form action="addtocart.php" method="post">
                                                            <input type="hidden" name="tensp" value="ĐỆM Ô TÔ CHẾ SAU">
                                                            <input type="hidden" name="img" value="img29.jpeg">
                                                            <input type="hidden" name="gia" value="1.500.000 ">
                                                            <input type="hidden" name="id" value="ID:#">
                                                        <div class="list-col-item list-4-item">
                                                            <div class="item-product item-product-grid">
                                                                <div class="product-thumb">
                                                                    <a href="#" class="product-thumb-link zoom-thumb">
                                                                        <img src="./assets/Image/img29.jpeg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                        ./assets/Image/img29.jpeg 270w,  
                                                                        ./assets/Image/img29.jpeg 150w, 
                                                                        ./assets/Image/img29.jpeg 300w, 
                                                                        ./assets/Image/img29.jpeg 266w, 
                                                                        ./assets/Image/img29.jpeg 90w, 
                                                                        ./assets/Image/img29.jpeg 70w, 
                                                                        ./assets/Image/img29.jpeg 50w" 
                                                                        sizes="(max-width: 270px) 100vw, 270px">
                                                                    </a>
                                                                    <div class="product-extra-link text-center">
                                                                        <ul class="list-product-extra-link list-inline-block">
                                                                            <li>
                                                                                <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                                data-product-title="GOLDEN CÁI">
                                                                                <i class="fa-light fa-heart"></i>
                                                                                    <span>Yêu thích</span>
                                                                            </a>
                                                                            </li>
                                                                            <li>
                                                                                <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                    <i class="fa-light fa-magnifying-glass"></i>
                                                                                    <span>Xem nhanh</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                        <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple"> 
                                                                    </div>
                                                                </div>
                                                            </form>
                                                                <div class="product-info">
                                                                    <span class="title12 text-upprcase color font-bold">ID:#</span>
                                                                    <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                        <a href="#" class="black" title="GOLDEN CÁI">ĐỆM Ô TÔ CHẾ SAU</a>
                                                                    </h3>
                                                                    <div class="product-price simple">
                                                                        <span class="woocommerce-Price-amount amount">1.500.000
                                                                            <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                        </span>
                                                                    </div>
                                                                    <ul class="wrap-rating list-inline-block">
                                                                        <li>
                                                                            <div class="product-rate">
                                                                                <div class="product-rating" style="width:0%"></div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                        <!-- LIST 2 -->
                                                        <div class="list-col-item list-4-item">
                                                            <div class="item-product item-product-grid">
                                                                <div class="product-thumb">
                                                                    <a href="#" class="product-thumb-link zoom-thumb">
                                                                        <img src="./assets/Image/img30.jpeg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                        ./assets/Image/img30.jpeg 270w,  
                                                                        ./assets/Image/img30.jpeg 150w, 
                                                                        ./assets/Image/img30.jpeg 300w, 
                                                                        ./assets/Image/img30.jpeg 266w, 
                                                                        ./assets/Image/img30.jpeg 90w, 
                                                                        ./assets/Image/img30.jpeg 70w, 
                                                                        ./assets/Image/img30.jpeg 50w" 
                                                                        sizes="(max-width: 270px) 100vw, 270px">
                                                                    </a>
                                                                    <div class="product-extra-link text-center">
                                                                        <ul class="list-product-extra-link list-inline-block">
                                                                            <li>
                                                                                <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                                data-product-title="GOLDEN CÁI">
                                                                                <i class="fa-light fa-heart"></i>
                                                                                    <span>Yêu thích</span>
                                                                            </a>
                                                                            </li>
                                                                            <li>
                                                                                <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                    <i class="fa-light fa-magnifying-glass"></i>
                                                                                    <span>Xem nhanh</span>
                                                                                </a>
                                                                            </li>
                                                                            <li></li>
                                                                        </ul>
                                                                        <a href="#" rel="noffolw" data-product-id="86466" data-product-sku="SP00596" data-quantity="1" class="button addcart-link shop-button bg-color product_type_simple add_to_cart_button s7upf_ajax_add_to_cart product_type_simple" data-title="GOLDEN CÁI">
                                                                            <span>LỰA CHỌN CÁC TÙY CHỌN</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="product-info">
                                                                    <span class="title12 text-upprcase color font-bold">ID:#</span>
                                                                    <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                        <a href="#" class="black" title="GOLDEN CÁI">CÁT ĐẬU NÀNH MISO</a>
                                                                    </h3>
                                                                    <div class="product-price simple">
                                                                        <span class="woocommerce-Price-amount amount">200.000
                                                                            <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                        </span>
                                                                    </div>
                                                                    <ul class="wrap-rating list-inline-block">
                                                                        <li>
                                                                            <div class="product-rate">
                                                                                <div class="product-rating" style="width:0%"></div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Single Product Start -->
                                                        <form action="addtocart.php" method="post">
                                                            <input type="hidden" name="tensp" value="PATE THỨC ĂN">
                                                            <input type="hidden" name="img" value="img31.jpg">
                                                            <input type="hidden" name="gia" value="50.000 ">
                                                            <input type="hidden" name="id" value="ID:#">
                                                        <div class="list-col-item list-4-item">
                                                            <div class="item-product item-product-grid">
                                                                <div class="product-thumb">
                                                                    <a href="#" class="product-thumb-link zoom-thumb">
                                                                        <img src="./assets/Image/img31.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                        ./assets/Image/img31.jpg 270w,  
                                                                        ./assets/Image/img31.jpg 150w, 
                                                                        ./assets/Image/img31.jpg 300w, 
                                                                        ./assets/Image/img31.jpg 266w, 
                                                                        ./assets/Image/img31.jpg 90w, 
                                                                        ./assets/Image/img31.jpg 70w, 
                                                                        ./assets/Image/img31.jpg 50w" 
                                                                        sizes="(max-width: 270px) 100vw, 270px">
                                                                    </a>
                                                                    <div class="product-extra-link text-center">
                                                                        <ul class="list-product-extra-link list-inline-block">
                                                                            <li>
                                                                                <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                                data-product-title="GOLDEN CÁI">
                                                                                <i class="fa-light fa-heart"></i>
                                                                                    <span>Yêu thích</span>
                                                                            </a>
                                                                            </li>
                                                                            <li>
                                                                                <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                    <i class="fa-light fa-magnifying-glass"></i>
                                                                                    <span>Xem nhanh</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                        <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple"> 
                                                                    </div>
                                                                </div>
                                                            </form>
                                                                <div class="product-info">
                                                                    <span class="title12 text-upprcase color font-bold">ID:#</span>
                                                                    <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                        <a href="#" class="black" title="GOLDEN CÁI">PATE THỨC ĂN</a>
                                                                    </h3>
                                                                    <div class="product-price simple">
                                                                        <span class="woocommerce-Price-amount amount">50.000
                                                                            <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                        </span>
                                                                    </div>
                                                                    <ul class="wrap-rating list-inline-block">
                                                                        <li>
                                                                            <div class="product-rate">
                                                                                <div class="product-rating" style="width:0%"></div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->

                                                        <!-- Single Product Start -->
                                                        <form action="addtocart.php" method="post">
                                                            <input type="hidden" name="tensp" value="PATE THỨC ĂN ƯỚT">
                                                            <input type="hidden" name="img" value="img32.jpg">
                                                            <input type="hidden" name="gia" value="50.000 ">
                                                            <input type="hidden" name="id" value="ID:#">
                                                        <div class="list-col-item list-4-item">
                                                            <div class="item-product item-product-grid">
                                                                <div class="product-thumb">
                                                                    <a href="#" class="product-thumb-link zoom-thumb">
                                                                        <img src="./assets/Image/img32.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                        ./assets/Image/img32.jpg 270w,  
                                                                        ./assets/Image/img32.jpg 150w, 
                                                                        ./assets/Image/img32.jpg 300w, 
                                                                        ./assets/Image/img32.jpg 266w, 
                                                                        ./assets/Image/img32.jpg 90w, 
                                                                        ./assets/Image/img32.jpg 70w, 
                                                                        ./assets/Image/img32.jpg 50w" 
                                                                        sizes="(max-width: 270px) 100vw, 270px">
                                                                    </a>
                                                                    <div class="product-extra-link text-center">
                                                                        <ul class="list-product-extra-link list-inline-block">
                                                                            <li>
                                                                                <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                                data-product-title="GOLDEN CÁI">
                                                                                <i class="fa-light fa-heart"></i>
                                                                                    <span>Yêu thích</span>
                                                                            </a>
                                                                            </li>
                                                                            <li>
                                                                                <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                    <i class="fa-light fa-magnifying-glass"></i>
                                                                                    <span>Xem nhanh</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                        <input type="submit" value="Mua Hàng" name="btnaddtocart" class="button addcart-link shop-button bg-color add_to_cart_button s7upf_ajax_add_to_cart product_type_simple"> 
                                                                    </div>
                                                                </div>
                                                            </form>
                                                                <div class="product-info">
                                                                    <span class="title12 text-upprcase color font-bold">ID:#</span>
                                                                    <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                        <a href="#" class="black" title="GOLDEN CÁI">PATE THỨC ĂN ƯỚT</a>
                                                                    </h3>
                                                                    <div class="product-price simple">
                                                                        <span class="woocommerce-Price-amount amount">50.000
                                                                            <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                        </span>
                                                                    </div>
                                                                    <ul class="wrap-rating list-inline-block">
                                                                        <li>
                                                                            <div class="product-rate">
                                                                                <div class="product-rating" style="width:0%"></div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->

                                                        <div class="list-col-item list-4-item">
                                                            <div class="item-product item-product-grid">
                                                                <div class="product-thumb">
                                                                    <a href="#" class="product-thumb-link zoom-thumb">
                                                                        <img src="./assets/Image/img33.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                        ./assets/Image/img33.jpg 270w,  
                                                                        ./assets/Image/img33.jpg 150w, 
                                                                        ./assets/Image/img33.jpg 300w, 
                                                                        ./assets/Image/img33.jpg 266w, 
                                                                        ./assets/Image/img33.jpg 90w, 
                                                                        ./assets/Image/img33.jpg 70w, 
                                                                        ./assets/Image/img33.jpg 50w" 
                                                                        sizes="(max-width: 270px) 100vw, 270px">
                                                                    </a>
                                                                    <div class="product-extra-link text-center">
                                                                        <ul class="list-product-extra-link list-inline-block">
                                                                            <li>
                                                                                <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                                data-product-title="GOLDEN CÁI">
                                                                                <i class="fa-light fa-heart"></i>
                                                                                    <span>Yêu thích</span>
                                                                            </a>
                                                                            </li>
                                                                            <li>
                                                                                <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                    <i class="fa-light fa-magnifying-glass"></i>
                                                                                    <span>Xem nhanh</span>
                                                                                </a>
                                                                            </li>
                                                                            <li></li>
                                                                        </ul>
                                                                        <a href="#" rel="noffolw" data-product-id="86466" data-product-sku="SP00596" data-quantity="1" class="button addcart-link shop-button bg-color product_type_simple add_to_cart_button s7upf_ajax_add_to_cart product_type_simple" data-title="GOLDEN CÁI">
                                                                            <span>LỰA CHỌN CÁC TÙY CHỌN</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="product-info">
                                                                    <span class="title12 text-upprcase color font-bold">ID:#</span>
                                                                    <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                        <a href="#" class="black" title="GOLDEN CÁI">NUTRIENCE SUBZERO</a>
                                                                    </h3>
                                                                    <div class="product-price simple">
                                                                        <span class="woocommerce-Price-amount amount">190.000
                                                                            <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                        </span>
                                                                        <span class="woocommerce-Price-amount amount">- 1.500.000
                                                                            <span class="product-Price-currencySymbol">&#x20AB;</span>
                                                                        </span>
                                                                    </div>
                                                                    <ul class="wrap-rating list-inline-block">
                                                                        <li>
                                                                            <div class="product-rate">
                                                                                <div class="product-rating" style="width:0%"></div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="wpb-raw-code wpb_content_element ">
                                                                    <div class="wpb-wrapper">
                                                                        <a href="#" class="shop-button bg-color arrow-right block-right">
                                                                            Xem thêm
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                </div>  
                                                <!-- ĐẤU GIÁ THÚ CƯNG - TỪ THIỆN -->
                                                <!-- ROW 1 -->
                                                <div class="vc_row wpb_row">
                                                    <div class="wpb-column column_container col-sm-12">
                                                        <div class="vc_column-inner vc_custom_1576307239909">
                                                            <div class="wpb-wrapper">
                                                                <div class="wpb_text-column">
                                                                    <div class="wpb_wrapper">
                                                                        <h2 class="font-coiny" style="text-align: center; position: relative;right: 4%;">
                                                                            <a href="#" class="">
                                                                                <strong>PHỤ KIỆN THÚ CƯNG</strong>
                                                                            </a>
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                <!-- LIST 1 -->
                                                <div class="block-element product-item-1 product-grid-view default js-content-wrap">
                                                    <div class="products row list-product-wrap js-content-main">
                                                        <div class="list-col-item list-4-item post-86466">
                                                            <div class="item-product item-product-grid">
                                                                <div class="product-thumb">
                                                                    <a href="#" class="product-thumb-link zoom-thumb">
                                                                        <img src="./assets/Image/img34.jpg" width="270" height="270" class="attachment-270*270 size-270*270 wp-post-image" alt="" srcset="
                                                                        ./assets/Image/img34.jpg 270w,  
                                                                        ./assets/Image/img34.jpg 150w, 
                                                                        ./assets/Image/img34.jpg 300w, 
                                                                        ./assets/Image/img34.jpg 266w, 
                                                                        ./assets/Image/img34.jpg 90w, 
                                                                        ./assets/Image/img34.jpg 70w, 
                                                                        ./assets/Image/img34.jpg 50w" 
                                                                        sizes="(max-width: 270px) 100vw, 270px">
                                                                    </a>
                                                                    <div class="product-extra-link text-center">
                                                                        <ul class="list-product-extra-link list-inline-block">
                                                                            <li>
                                                                                <a href="#" class="add_to_wishlist wishlist-link" rel="nofollow" data-product-id="86466"
                                                                                data-product-title="GOLDEN CÁI">
                                                                                <i class="fa-light fa-heart"></i>
                                                                                    <span>Yêu thích</span>
                                                                            </a>
                                                                            </li>
                                                                            <li>
                                                                                <a title="Xem nhanh" data-product-id="86466" hrel="#" class="product-quick-view quickview-link">
                                                                                    <i class="fa-light fa-magnifying-glass"></i>
                                                                                    <span>Xem nhanh</span>
                                                                                </a>
                                                                            </li>
                                                                            <li></li>
                                                                        </ul>
                                                                        <a href="#" rel="noffolw" data-product-id="86466" data-product-sku="SP00596" data-quantity="1" class="button addcart-link shop-button bg-color product_type_simple add_to_cart_button s7upf_ajax_add_to_cart product_type_simple" data-title="GOLDEN CÁI">
                                                                            <span>ĐỌC TIẾP</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="product-info">
                                                                    <span class="title12 text-upprcase color font-bold">ID:XX01</span>
                                                                    <h3 class="title18 text-upprcase product-title dosis-font font-bold">
                                                                        <a href="#" class="black" title="GOLDEN CÁI">HUSKY CÁI</a>
                                                                    </h3>
                                                                    <ul class="wrap-rating list-inline-block">
                                                                        <li>
                                                                            <div class="product-rate">
                                                                                <div class="product-rating" style="width:0%"></div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb-raw-code wpb_content_element ">
                                                        <div class="wpb-wrapper">
                                                            <a href="#" class="shop-button bg-color arrow-right block-right">
                                                                Xem thêm
                                                            </a>
                                                        </div>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>   
                    </div> 
                </div>
            </div>
        </div>
        <script>
var isModalOpen = false; // Biến kiểm soát trạng thái của modal

function openModal(event, modalId) {
    event.preventDefault();
    if (!isModalOpen) { // Kiểm tra xem modal đã mở chưa
        isModalOpen = true; // Đặt biến trạng thái là true khi mở modal lần đầu tiên
        document.getElementById(modalId).style.display = 'flex';
    }
}

function closeModal(modalId) {
    isModalOpen = false; // Đặt biến trạng thái là false khi đóng modal
    document.getElementById(modalId).style.display = 'none';
}

window.onclick = function(event) {
    var modal1 = document.getElementById('productModal1');
    var modal2 = document.getElementById('productModal2');
    var modal3 = document.getElementById('productModal3');
    var modal4 = document.getElementById('productModal4');
    if (event.target == modal1) {
        closeModal('productModal1'); // Đóng modal nếu click ra ngoài modal
    } else if (event.target == modal2) {
        closeModal('productModal2');
    } else if (event.target == modal3) {
        closeModal('productModal3');
    } else if (event.target == modal4) {
        closeModal('productModal4');
    }
}

// Chờ trang tải xong trước khi kiểm tra và mở modal nếu cần
document.addEventListener("DOMContentLoaded", function() {
    // Xác định nếu modal nên được mở dựa trên URL
    var quickViewButtons = document.querySelectorAll('.product-quick-view');
    quickViewButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            var productId = this.getAttribute('data-product-id');
            var modalId;
            switch (productId) {
                case '86466':
                    modalId = 'productModal1';
                    break;
                case '86467':
                    modalId = 'productModal2';
                    break;
                case '86468':
                    modalId = 'productModal3';
                    break;
                case '86469':
                    modalId = 'productModal4';
                    break;
                default:
                    modalId = '';
            }
            if (modalId) {
                openModal(event, modalId);
            }
        });
    });
});
    </script>
<?php 
    include_once 'footer.php'
?>