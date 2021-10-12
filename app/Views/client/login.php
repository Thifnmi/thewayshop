<!DOCTYPE html>
<html lang="en">
<?php
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$path = parse_url($url, PHP_URL_PATH);
$pa = (explode("/", $path))[3];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.0/css/all.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous" />
    <!-- Login CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/client/css/login.css">
    <!-- check url to get title -->
    <?php if (($pa) == "Login") : ?>
        <title>Đăng nhập | Mỹ Hạnh</title>
    <?php else : ?>
        <title>Đăng ký tài khoản | Mỹ Hạnh</title>
    <?php endif ?>
    <!-- end check url -->
</head>

<body>
    <?php if(isset($messLogin)){?>
        <div class="modal fade bd-example-modal-sm show" id="showmess" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: block;padding-right: 17px;">
            <div class="modal-dialog modal-sm">
                <div class="modal-content" style="width: 500px;">
                    <!-- <div class="modal-header">
                        <h3 align="center" class="modal-title" style="font-weight:bold;width: 450px;">Thông báo</h3>
                        <a type="button" id="close=modal" onclick="hiddenNoti()" class="close" data-dismiss="modal">×</a>
                    </div> -->
                    <h5 align="center">Tài khoản hoặc mật khẩu không chính xác.</h1>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php if(isset($messRegisterSuccess)){?>
        <div class="modal fade bd-example-modal-sm show" id="showmess" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: block;padding-right: 17px;">
            <div class="modal-dialog modal-sm">
                <div class="modal-content" style="width: 500px;">
                    <!-- <div class="modal-header">
                        <h3 align="center" class="modal-title" style="font-weight:bold;width: 450px;">Thông báo</h3>
                        <a type="button" id="close=modal" onclick="hiddenNoti()" class="close" data-dismiss="modal">×</a>
                    </div> -->
                    <h5 align="center">Đăng ký tài khoản thành công.</h1>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php if(isset($messRegisterFalse)){?>
        <div class="modal fade bd-example-modal-sm show" id="showmess" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: block;padding-right: 17px;">
            <div class="modal-dialog modal-sm">
                <div class="modal-content" style="width: 500px;">
                    <!-- <div class="modal-header">
                        <h3 align="center" class="modal-title" style="font-weight:bold;width: 450px;">Thông báo</h3>
                        <a type="button" id="close=modal" onclick="hiddenNoti()" class="close" data-dismiss="modal">×</a>
                    </div> -->
                    <h5 align="center">Tên tài khoản không có sẵn.</h1>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="<?= base_url() ?>/Register" method="post">
                <h1 style="font-size: 2rem;">Tạo tài khoản</h1>
                <input type="hidden" name="path" id="path" value="<?= $url ?>" />
                <input type="text" name="Rfullname" required placeholder="Họ và tên của bạn" />
                <input type="text" name="Rusername" required placeholder="Tên tài khoản" />
                <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Phải bao gồm ít nhất 01 chữ số, 01 chữ cái viết thường, 01 chữ cái viết hoa, 01 ký tự đặc biệt và ít nhất 08 ký tự" style="font-family: Verdana; letter-spacing: 0.125em;" name="Rpassword" required placeholder="Mật khẩu" />
                <input type="email" name="Remail" required placeholder="Địa chỉ email" />
                <button type="submit" style="cursor: pointer;" name="signup">Đăng ký</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="<?= base_url() ?>/Login" method="POST">
                <h1>Đăng nhập</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                </div>
                <span>Hoặc dùng tài khoản của bạn</span>
                <input type="text" name="username" required placeholder="Tài khoản" />
                <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Phải bao gồm ít nhất 01 chữ số, 01 chữ cái viết thường, 01 chữ cái viết hoa, 01 ký tự đặc biệt và ít nhất 08 ký tự" style="font-family: Verdana; letter-spacing: 0.125em;" name="password" required placeholder="Mật khẩu" />
                <a href="#">Quên mật khẩu?</a>
                <button type="submit" style="cursor: pointer;" name="login">Đăng nhập</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Chào mừng trở lại!</h1>
                    <p>Để tiếp tục kết nối với chúng tôi, làm ơn hãy đăng nhập với thông tin của bạn</p>
                    <a style="color:#fff; cursor: pointer;" href="<?= base_url() ?>/Login">
                        <button style="cursor: pointer;" class="ghost" id="signIn">
                            Đăng nhập
                        </button>
                    </a>
                    <p>Hoặc bạn có thể</p>
                    <a style="color:#fff; cursor: pointer;" href="<?= base_url() ?>">
                        <button style="cursor: pointer;" class="ghost">Tiếp tục là khách</button>
                    </a>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Chào bạn</h1>
                    <p>Đăng ký tài toàn bằng cách điền một số thông tin cá nhân và bắt đầu là thanh viên của chúng tôi</p>
                    <a style="color:#fff; cursor: pointer;" href="<?= base_url() ?>/Register">
                        <button style="cursor: pointer;" class="ghost" id="signUp">
                            Đăng ký
                        </button>
                    </a>
                    <p>Hoặc bạn có thể</p>
                    <a style="color:#fff; cursor: pointer;" href="<?= base_url() ?>">
                        <button style="cursor: pointer;" class="ghost">Tiếp tục là khách</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>/client/js/login.js"></script>
    <!-- check url to return view -->
    <script>
        // console.log((document.getElementById("path").getAttribute('value')).split("/")[5]);
        let path = (document.getElementById("path").getAttribute('value')).split("/")[5];
        if (path == "Register") {
            document.getElementById('container').classList.toggle("right-panel-active");
        }
    </script>
    <script>
        var x = function hiddenNoti() {
            document.getElementById('showmess').classList.remove('show');
            document.getElementById('showmess').style.display = 'none';
        }
        setTimeout(x,2000);
    </script>
    <!-- end check -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>