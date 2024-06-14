<?php 
    include_once 'header.php';
    include_once './helpers/session_helper.php';
?>  

<body>
<head>
    <style>
.login-page {
  padding: 35% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 25px;
  box-sizing: border-box;
  font-size: 14px;
}
.input {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #dd8dbe;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #dd8dbe;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #dd8dbe;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}

.container {
background: #dd8dbe;
width: 420px;
border: 2px solid rgba(255, 255, 255, 0.1);
box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
color: #fff;
border-radius: 10px;
padding: 30px 40px;
}

.container h1 {
  font-size: 36px;
  text-align: center;
}

.container .input-box {
  position: relative;
  width: 100%;
  height: 50px;
  margin: 30px 0px;
}

.input-box input {
  width: 100%;
  height: 100%;
  background: transparent;
  border: none;
  outline: none;
  border: 2px solid rgb(255, 255, 255, 0.2);
  border-radius: 5px;
  font-size: 16px;
  color: #fff;
  padding: 20px 45px 20px 20px;
}

.input-box input::placeholder {
  color: #000;
}

input[type="submit"] {
    background-color: #dd8dbe; /* Màu nền */
    color: white; /* Màu chữ */
    padding: 10px 20px; /* Kích thước lề nút */
    border: none; /* Không có viền */
    border-radius: 5px; /* Bo tròn góc */
    cursor: pointer; /* Con trỏ khi di chuột qua nút */
    font-size: 16px; /* Cỡ chữ */
}

.flash-message {
    color: #f44336; /* Màu chữ */
    padding: 0 20px; /* Kích thước lề */
    margin-bottom: 20px; /* Khoảng cách với các phần tử phía dưới */
    border-radius: 5px; /* Bo tròn góc */
    animation: fadeIn 0.5s ease-in-out forwards; /* Áp dụng hiệu ứng hiển thị */
}
    </style>
  </head>
<body>

<div class="login-page">
    <div class="form">
        <h2>Đăng Nhập</h2>
        <form class="register-form">
            <input type="text" placeholder="Tên người dùng" autocomplete="username" style="color: #000;">
            <input type="password" placeholder="Mật khẩu" autocomplete="current-password">
            <input type="text" placeholder="Email người dùng">
            <button>Đăng Ký</button>
            <p class="message">Đã có tài khoản? <a href="#">Đăng ký</a></p> 
        </form>
        <form method="post" action="./controllers/Users.php" class="login-form">
            <input type="hidden" name="type" value="login">
            <input type="text" name="usersEmail" placeholder="Tên tài khoản hoặc email" autocomplete="username">
            <input type="password" name="usersPwd" placeholder="Mật khẩu" autocomplete="current-password">
          <?php
              // Định nghĩa hàm flash() để hiển thị thông báo
            function showflash($key) {
              if(isset($_SESSION[$key])) {
                echo '<div class="flash-message">' . $_SESSION[$key] . '</div>';
                unset($_SESSION[$key]);
              }
            }    
            showflash('login');
          ?>
            <input type="submit" name="submit" value="Đăng nhập">
            <div class="remember-forgot">
            <p class="message">Không có tài khoản? <a href="./signup.php" style="top: 14px; left: 30px;">Đăng ký</a></p>
        </form> 
    </div>  
</div>
<script>
    $(document).ready(function() {
    $('.message a').click(function() {
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
});

</script>
</body>
</head>
</html>

<?php 
    include_once 'footer.php';
?>  