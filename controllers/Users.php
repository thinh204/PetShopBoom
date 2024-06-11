<?php

require_once '../models/User.php';
require_once '../helpers/session_helper.php';

class Users {
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User;
    }

    public function register(){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
            'usersName' => trim($_POST['usersName']),
            'usersEmail' => trim($_POST['usersEmail']),
            'usersPwd' => trim($_POST['usersPwd']),
            'pwdRepeat' => trim($_POST['pwdRepeat']),
        ];
 
        if(empty($data['usersName']) || empty($data['usersEmail']) ||
             empty($data['usersPwd']) || empty($data['pwdRepeat'])){
            flash("register", "Vui lòng điền tất cả thông tin");
            redirect("../signup.php");
        }

        if(!filter_var($data['usersEmail'], FILTER_VALIDATE_EMAIL)){
            flash("register", "Email không hợp lệ");
            redirect("../signup.php");
        }

        if(strlen($data['usersPwd']) < 6){
            flash("register", "Mật khẩu không hợp lệ - tối thiểu là 6");
            redirect("../signup.php");
        }else if($data['usersPwd'] != $data['pwdRepeat']){
            flash("register", "Mật khẩu không khớp");
            redirect("../signup.php");
        }

        if($this->userModel->findUserByEmailOrUsername($data['usersEmail'], $data['usersName'])){
            flash("register", "Tên người dùng hoặc email đã được sử dụng");
            redirect("../signup.php");
        }

        $data['usersPwd'] = password_hash($data['usersPwd'], PASSWORD_DEFAULT);
       
        if($this->userModel->register($data)){
            redirect("../login.php");
        }else{
            die("Đã xảy ra lỗi");
        }
    }

    public function login(){
   
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      
        $data=[
            'usersEmail' => trim($_POST['usersEmail']),
            'usersPwd' => trim($_POST['usersPwd'])
        ];
    
        if(empty($data['usersEmail']) || empty($data['usersPwd'])){
            flash("login", "Vui lòng điền tất cả thông tin");
            redirect("../login.php");
            exit();
        }
    
        // Tiếp tục xử lý đăng nhập với model nếu cần
        if($this->userModel->findUserByEmailOrUsername($data['usersEmail'], $data['usersEmail'])){
            $loggedInUser = $this->userModel->login($data['usersEmail'], $data['usersPwd']);
            if (!$loggedInUser){
                flash("login", "Mật khẩu không hợp lệ");
                header('Location: ../login.php');
            } else {
                //liem tra role la admin ---> reddiredct sang trang askboard
                ///
                //    print_r($loggedInUser->role);
                //    die;
               $this->createUserSession($loggedInUser);
               if($loggedInUser->role==1){
                header('location: ../admin/index.php');

               }else{
                header('Location: ../cart.php');
               }
                
            } 
        } else {
            flash("login", "Không tìm thấy người dùng");
            redirect("../login.php");
        }

    }
    //logout 
    function createUserSession($user){
        $_SESSION['usersId'] = $user->usersId;
        $_SESSION['usersName'] = $user->usersName;
        $_SESSION['usersEmail'] = $user->usersEmail;
        $_SESSION['role'] = $user->role;
        // redirect("../login.php");
    }

    function logout(){
        unset($_SESSION['usersId']);
        unset($_SESSION['usersName']);
        unset($_SESSION['usersEmail']);
        unset($_SESSION['role']);
        session_destroy();
        redirect("../login.php");
    }
}
$init = new Users();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    switch($_POST['type']){
        case 'register':          
            $init->register();
            break;
        case 'login':   
            $init->login();
            break;
}
}else{
    switch($_GET['q']){
        case 'logout':
            $init->logout();
            break;
        default:
        redirect("../PetShopBoom.php");
    }
}



    
        

    
    
    


