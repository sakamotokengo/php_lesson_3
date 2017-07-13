<?php
require_once(__DIR__ . '/../config/config.php');

// var_dump($_SESSION['me']);

$app = new Kids\Controller\Index();

$app->run();

// $app->login()
// $app->getValues()->users

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <style>
    .wrapper {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <form action="logout.php" method="post" id="logout">
      <?= h($app->me()->email); ?><input type="submit" value="Log Out">
      <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
    </form>
    <h1>Users <span class="fs12">(<?= count($app->getValues()->users); ?>)</span></h1>
    <ul>
      <?php foreach ($app->getValues()->users as $user) : ?>
       <li><?= h($user->email); ?></li>
     <?php endforeach; ?>
    </ul>
  </div>
</body>
</html>
