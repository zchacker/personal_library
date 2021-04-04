<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>assits/css/rtl/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assits/css/login.css">
    <script src="<?= base_url() ?>assits/js/bootstrap.min.js"></script>
    <title>الدخول للنظام</title>
</head>

<body>

    <div class="sidenav">
        <div class="login-main-text">
            <h2>سجل المكتبة<br> صفحة الدخول</h2>
            <p>الرجاء ادخال بيانات المرور للتحكم بالنظام.</p>
        </div>
    </div>
    
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <?php  if(strlen($msg) > 0) {  ?>
                    <div class="alert alert-danger" role="alert"><?=$msg?></div>
                <?php } ?>

                <form method="post" action="">
                    <div class="form-group">
                        <label>اسم المستخدم</label>
                        <input type="text" name="username" class="form-control" placeholder="اسم المستخدم">
                    </div>
                    <div class="form-group">
                        <label>كلمة المرور</label>
                        <input type="password"  name="password" class="form-control" placeholder="كلمة المرور">
                    </div>
                    <button type="submit" class="btn btn-black">دخول</button>
                    <!-- <button type="submit" class="btn btn-secondary">Register</button> -->
                </form>
            </div>
        </div>
    </div>

</body>

</html>