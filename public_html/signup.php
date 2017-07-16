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
        <input type="text" name="email" placeholder="email" value="<?= isset($app->getValues()->email) ? h($app->getValues()->email): ''; ?>">
      </p>
      <p class="err">
        <?= h($app -> getErrors('email')); ?>
      </p>
      <p>
        <input type="password" name="password" placeholder="password">
      </p>
      <p class="err">
        <?= h($app -> getErrors('password')); ?>
      </p>
        <input type="submit" value="Sign Up">
        <input type="hidden" name="token" value="<?= h($_SESSION['token']);?>">
      <p class="fs12"><a href="./login.php">Log In</a></p>
    </form>
    </div>
  </body>
  </html>
