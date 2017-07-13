<?php
  require_once(__DIR__ . '/../config/config.php');

  $app = new Kids\Controller\Signup();

  $app ->  run();

?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <style>
    .wrapper {
        text-align: center;
    }
    </style>
  </head>
  <body>
    <div class="wrapper">
    <h1>新規登録</h1>
    <form action="" method="post">
      <p>
        <input type="text" name="email" placeholder="email" >
      </p>
      <p>
        <?php echo h($app -> getErrors('email')); ?>
      </p>
      <p>
        <input type="password" name="password" placeholder="password">
      </p>
      <p>
        <?php echo h($app -> getErrors('password')); ?>
      </p>
        <input type="submit" value="Sign Up">
        <input type="hidden" name="token" value="<?php echo h($_SESSION['token']);?>">
      <p><a href="./login.php">Log In</a></p>
    </form>
    </div>
  </body>
  </html>
