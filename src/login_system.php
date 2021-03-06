<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Weekly Coding Challenge #1 - Sign in/up Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Handlee|Josefin+Sans:300,600&amp;display=swap'><link rel="stylesheet" href="./css/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="card-wrap">
    <div class="card border-0 shadow card--welcome is-show" id="welcome">
      <div class="card-body">
        <h2 class="card-title">歡迎</h2>
        <p>歡迎來到產銷履歷登入頁面</p>
        <div class="btn-wrap"><a class="btn btn-lg btn-register js-btn" data-target="register">註冊</a><a class="btn btn-lg btn-login js-btn" data-target="login">登錄</a></div>
      </div>
    </div>
    <div class="card border-0 shadow card--register" id="register">
      <div class="card-body">
        <h2 class="card-title">建立帳號</h2>
          <!--
        <p class="card-text">輸入您的個人資料<br/>和我們一起開始旅程</p>
        <p class="badge-wrap"><a class="badge"><i class="fab fa-facebook-f"></i></a><a class="badge"><i class="fab fa-google"></i></a><a class="badge"><i class="fab fa-twitter"></i></a></p>
        -->

        <p>使用您的信箱作為登入帳號</p>
        <form>
          <div class="form-group">
            <input id="name" class="form-control" type="text" placeholder="姓名" required/>
          </div>
          <div class="form-group">
            <input id="Email"class="form-control" type="email" placeholder="信箱" required/>
          </div>
            <div class="form-group">
            <input id="name" class="form-control" type="ID" placeholder="帳號" required/>
          </div>
          <div class="form-group">
            <input id="pswd" class="form-control" type="password" placeholder="密碼" required/>
          </div>
          <div class="form-group">
            <input id="pswd2" class="form-control" type="password2" placeholder="密碼確認" required/>
          </div>
          <button class="btn btn-lg">註冊</button>
        </form>
      </div>
        
        
      <button class="btn btn-back js-btn" data-target="welcome"><i class="fas fa-angle-left"></i></button>
    </div>
    <div class="card border-0 shadow card--login" id="login">
      <div class="card-body">
        <h2 class="card-title">歡迎回來！</h2>
          <!--
        <p>為了與我們保持聯繫<br/>請用您的個人資料進行登錄</p>          
        <p class="badge-wrap"><a class="badge"><i class="fab fa-facebook-f"></i></a><a class="badge"><i class="fab fa-google"></i></a><a class="badge"><i class="fab fa-twitter"></i></a></p>
          -->
        <p>請用您的個人資料進行登錄<br/>或使用您的帳號</p>
        <form>
          <div class="form-group">
            <input class="form-control" type="email" placeholder="帳號" required/>
          </div>
          <div class="form-group">
            <input class="form-control" type="password" placeholder="密碼" required/>
          </div>        
          <p><a class="js-btn" data-target="Forgot_password" style="color:#a7bfe8">忘記密碼了嗎？</a></p>
          <button class="btn btn-lg">登錄</button>
        </form>
      </div>      
        <button class="btn btn-back js-btn" data-target="welcome"><i class="fas fa-angle-left"></i></button>
  </div>
  <div class="card border-0 shadow card--login" id="Forgot_password">
      <div class="card-body">
        <h2 class="card-title">無法登錄</h2>
        <p>輸入您的使用者名稱或信箱然後我們會寄給您連結以此恢復對您帳戶的訪問權限</p>
        <div class="form-group">
           <input class="form-control" type="email" placeholder="Email" required/>
      </div>
        <button class="btn btn-lg">傳送登錄連結</button>
    </div>
     <button class="btn btn-back js-btn" data-target="login"><i class="fas fa-angle-left"></i></button>
   </div>  
  </div>
</div>

<!-- partial -->
  <script  src="./js/login.js"></script>

</body>
</html>
