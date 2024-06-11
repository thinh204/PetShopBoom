<?php
    session_start();
    if(isset($_SESSION['usersEmail'])&&($_SESSION['usersEmail']!="")){
        unset($_SESSION['usersEmail']);
    }
    if(isset($_SESSION['usersPwd'])&&($_SESSION['usersPwd']!="")){
        unset($_SESSION['usersPwd']);
    }
    header('location: PetShopBoom.php');
?>


<!-- Code sibmit thu  -->
 <!-- 1. G -->