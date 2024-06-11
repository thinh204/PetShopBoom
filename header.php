<?php
    session_start();
    ob_start();
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
    <style> 
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

    .product-details-container {
    display: flex;
    align-items: flex-start; /* Canh chi tiết sản phẩm ở đầu trên */
    }

    .product-image {
        max-width: 200px; /* Định kích thước tối đa cho hình ảnh */
        margin-right: 20px; /* Khoảng cách giữa hình ảnh và chi tiết sản phẩm */
    }

    .modal-content {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        width: 80%;
        max-width: 500px;
        display: flex;
        flex-direction: column;
    }

    .close {
        font-size: 20px;
        cursor: pointer;
        left: 429px;
        position: relative;
        font-weight: 700;
        font-size: 3rem;
    }

    .product-details {
    flex-grow: 1; /* Chiếm phần còn lại của không gian */
    }
    
    </style>
</head>
<body>
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
                        <a href="./PetShopBoom.php" target="_self" class="header__navbar-item-link--strong">TRANG CHỦ</a>
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
                    <li class="header__navbar-item header__navbar-item--strong">
                        <a href="./signup.php" class="header__navbar-item--strong">ĐĂNG KÝ</a>
                    </li>  
                    <li class="header__navbar-item header__navbar-item--strong">
                        <a href="./login.php" class="header__navbar-item--strong">ĐĂNG NHẬP</a>
                    </li>
                </ul>
            </nav>