<?php

// 新規登録

require_once(__DIR__ . '/../config/config.php');


$app = new MyApp\Controller\Signup();

$app->run();

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>新規登録</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
  <!-- template読み込み -->
  <?php require_once(__DIR__ . '/template/header.php'); ?>
  <!-- template読み込み -->
  <div class="container text-center w-75 shadow p-5 bg-light">
    <div class="wrapper p-3">
      <form action="" method="post" id="signup">
        <h1 class="h3 mb-3 font-weight-normal">新規登録</h1>
        <input type="text" name="email"placeholder="E-mail" value="<?=
          isset($app->getValues()->email) ? h($app->getValues()->email) : ''; ?>">
        <p class="err"><?= h($app->getErrors('email')); ?></p>
        <input type="password" name="password"placeholder="Password">
        <p class="err"><?= h($app->getErrors('password')); ?></p>
        <input type="text" name="user_id"placeholder="User id">
        <p class="err"><?= h($app->getErrors('user_id')); ?></p>
        <!--<div class="btn" onclick="document.getElementById('signup').submit();">Sign Up</div>-->
        <button class="btn btn-primary active" type="submit" onclick="document.getElementById('signup').submit();">登録する</button>
        <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
      </form>
      <div class="p-4">
        <button class="btn btn-primary" onclick="location.href='./login.php'">ログインページへ</button>
      </div>
    </div>
  </div>
  <!-- template読み込み -->
  <?php require_once(__DIR__ . '/template/footer.php'); ?>
  <!-- template読み込み -->
</body>
</html>