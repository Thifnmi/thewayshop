<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.0/css/all.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
    <!-- Login CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/client/css/login.css">
    <title>Member The Way Shop</title>
</head>
<?php
    // if(session('message'))
    // {
    //     echo session('message');
    // }
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $path = parse_url($url, PHP_URL_PATH);
?>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="<?=base_url()?>/Register" method="post">
                <h1>Tạo tài khoản</h1>
                <input type="hidden" name="path" id="path" value="<?= $url?>"/>
                <input type="text" name="Rfullname" required="" placeholder="Tên của bạn" />
                <input type="text" name="Rusername" required="" placeholder="Tài khoản" />
                <input type="password" style="font-family: Verdana; letter-spacing: 0.125em;" name="Rpassword" required="" placeholder="Mật khẩu" />
                <input type="text" name="Remail" required="" placeholder="Địa chỉ email" />
                <button type="submit" name="signup">Đăng ký</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="<?=base_url()?>/Login" method="POST">
                <h1>Đăng nhập</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <!-- <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a> -->
                </div>
                <span>Hoặc dùng tài khoản của bạn</span>
                <input type="text" name="username" required="" placeholder="Username" />
                <input type="password" style="font-family: Verdana; letter-spacing: 0.125em;" name="password" required="" placeholder="Password" />
                <a href="#">Quên mật khẩu?</a>
                <button type="submit" name="login">Đăng nhập</button>

            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Chào mừng trở lại!</h1>
                    <p>Để tiếp tục kết nối với chúng tôi, làm ơn hãy đăng nhập với thông tin của bạn</p>
                    <button class="ghost" id="signIn">
                        <a style="color:#fff" href="<?= base_url()?>/Login">
                            Đăng nhập
                        </a>
                    </button>
                    <p>Hoặc bạn có thể</p>
                    <button class="ghost">
                        <a style="color:#fff" href="<?= base_url() ?>">Tiếp tục là khách</a>
                    </button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Chào bạn</h1>
                    <p>Đăng ký tài toàn bằng cách điền một số thông tin cá nhân và bắt đầu trở thành chúng tôi</p>
                    <button class="ghost" id="signUp">
                        <a style="color:#fff" href="<?= base_url()?>/Register">
                            Đăng ký
                        </a>
                    </button>
                    <p>Hoặc bạn có thể</p>
                    <button class="ghost">
                        <a style="color:#fff" href="<?= base_url() ?>">Tiếp tục là khách</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>/client/js/login.js"></script>
    <script>
        console.log(document.getElementById("path").getAttribute('value'));
        if((document.getElementById("path").getAttribute('value')) == "http://localhost:8080/thewayshop/public/Register"){
            document.getElementById('container').classList.toggle("right-panel-active");
        }
    </script>

</body>

</html>