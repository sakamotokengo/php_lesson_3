<?php
  require_once(__DIR__ . '/../config/config.php');

//  $app = new Kids\Controller\Login();

//  $app -> run
  // echo 'まだログインしてないよ！';
  // exit;


?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Log In</title>
    <style>
    .wrapper {
        text-align: center;
    }
    </style>
    </head>
    <body>
    <div class="wrapper">
    <h1>ログイン</h1>
    <form action="" method="post">
        <p>
        <input type="text" name="email" placeholder="email">
        </p>
        <p>
        <input type="password" name="password" placeholder="password">
        </p>
        <input type="submit" value="Log In">
    </form>
    <p><a href="./siginup.php">Sign Up</a></p>
    </div>
  </body>
</html>
