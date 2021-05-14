<!DOCTYPE html>
<html>
    <head>
        <title>Đăng nhập </title>
        <link rel="stylesheet" href="/stylesheets/bootstrap.css">
        <link rel="stylesheet" href="/stylesheets/style_1.css">
    </head>

    <body class="login">
        <div class="form-signin">
            <div class="text-center">
                <h2 class="text-primary">ĐĂNG NHẬP</h2>
            </div>
            <hr>
            <div class="tab-content">
                <div class="tab-pane active">
                    <form action="/admin/auth" class="text-muted text-center" method="POST">
                        {{ csrf_field() }}
                        <p class="text-muted text-center">
                            Nhập mật tài khoản và mật khẩu
                        </p>
                        <input type="text" name="email" value="{{$account->email}}" class="form-control" placeholder="Địa chỉ email" />
                        <input type="password" name="matkhau" class="form-control" placeholder="mật khẩu" />

                        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Đăng Nhập">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
