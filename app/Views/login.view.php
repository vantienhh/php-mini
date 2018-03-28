
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php
        session_start();
     ?>
     <form method="POST" action="/login">
        <div class="form-group">
          <label>Email
              <!-- Báo lỗi -->
              <?php
                  if (isset($_COOKIE['msg'])) {
                    if ($_SESSION['email']=='') {
                      echo "Vui lòng nhập email của bạn";
                    }
                  }
               ?>
          </label>
          <div class="col-sm-10">
            <input type="email" name="email"  class="form-control" placeholder="Name..." placeholder="Email">
          </div>
        </div>
        <div class="form-group">
          <label>Password
               <!-- Báo lỗi -->
              <?php
                if (isset($_COOKIE['msg'])) {
                  if ($_SESSION['password']=='') {
                      echo "Vui lòng nhập password của bạn";
                    }
                }
               ?>
          </label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
        </div>
            <button type="submit" class="btn btn-danger" name="btnLogout">Thoát</button>
            <button type="submit" class="btn btn-primary" name="btnLogin">Đăng Nhập</button>
      </form>
</body>
</html>