<? php
require_once(__DIR__ . '/../config/config.php');
// var_dump($_SESSION['me']);
//  $app = new Kids\Controller\Login();
  //  $app -> run
  //  echo 'まだログインしてないよ！';
  //  exit;



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
     <form action="" method="post" id="login">
         <p>
<input type="text" name="email" placeholder="email" value="<?= isset($app->getValues()->email) ? h($app->getValues()->email) : ''; ?>">        </p>
        <p>
        <input type="password" name="password" placeholder="password">
         </p>
         <p class="err"><?= h($app->getErrors('login')); ?></p>
  <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
         <input type="submit" value="Log In">
     </form>
     <p><a href="./siginup.php">Sign Up</a></p>
     </div>
   </body>
 </html>
