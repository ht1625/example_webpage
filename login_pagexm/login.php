<html>

<head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <style>
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");

    body {
      margin: 0;
      padding-left: 10%;
      background-image: url("https://i.hizliresim.com/XWgelH.png");
    }


    #login .container #login-row #login-column #login-box {
      margin-top: 120px;
      max-width: 400px;
      height: 50%;
      border: 1px solid #28A8FF;
      background-color: white;
    }

    #login .container #login-row #login-column #login-box #login-form {
      padding: 20px;
    }

    #login .container #login-row #login-column #login-box #login-form #register-link {
      margin-top: -85px;
    }
  </style>
</head>

<body>

  <div id="infoMessage"><?php echo $message; ?></div>
  <div id="login">
    <div class="container">
      <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6" style="padding-top: 5%;">
          <div id="login-box" class="col-md-12" style="padding-top: 3%;">
            <form id="login-form" class="form" action="" method="post">
              <h3 class="text-center text-info"><?php echo 'Giriş Yap'; ?></h3> <br>
              <div class="form-group">
                <label for="username" class="text-info"><?php echo 'EMAIL/KULLANICI ADI'; ?></label><br>
                <input type="email" class="form-control" id="email" placeholder="Email/Kullanıcı adı giriniz:" name="identity">
              </div>
              <div class="form-group">
                <label for="password" class="text-info"><?php echo 'ŞİFRE'; ?></label>
                <input type="password" class="form-control" id="pwd" placeholder="Şifre giriniz:" name="password">
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <small><?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?> Beni unutma</small>
                </label> <br>
                <div style="padding-left:36%;">
                  <span style="color: #6AC6FF;"><?php echo form_submit('submit', lang('login_submit_btn')); ?></span>
                </div>
              </div>
            </form>
            <div style="padding-left:37%;padding-bottom:5px">
              <small><a href="forgot_password"><?php echo 'Şifremi Unuttum'; ?></a></small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>