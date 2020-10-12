<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <style>
    </style>
  </head>
  <body>
  <form id="login_form">
   <label for="user">帳號 : </label>
   <input type="text" id="user" name="user"><br>
   <label for="pwd">密碼 : </label>
   <input type="text" id="pwd" name="pwd">
   <button id="login">登入</button>
  </form>
  <div id="result"></div>
  <script>  
      $("#login").click(function(){
        $.ajax({
          type: "POST",
          url: "shelly.php",
          data: $("#login_form").serialize(),
          success: function(data) {
            var user=data.user;
            var pwd=data.pwd;
            var result="帳號=" + user + " 密碼=" + pwd;
            $("#result").html(result);
            },
          error: function(xhr) {
            alert(xhr.status);
            }      
          });
        return false;
        });
  </script>
  </body>
</html>