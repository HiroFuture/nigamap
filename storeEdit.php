<?php
session_start();
?>
<!doctype html>
<html lang="ja">

<head>
  <!-- リアルタイムフォームチェックで使用 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/validationEngine.jquery.min.css" type="text/css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery-1.8.2.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-ja.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    jQuery(document).ready(function() {
      jQuery("#formID").validationEngine();
    });
  </script>

  <?php require_once('template/header.php') ?>
  <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.timepicker.js"></script>

  <link rel="stylesheet" type="text/css" href="css/jquery.timepicker.css" /> -->

  <div class="bg-light">
    <div class="container">
      <div class="py-4 text-center">
        <img src="img/logo.svg" width="192" />
        <h2>店舗編集フォーム</h2>
        <p class="lead">現在掲載されている店舗情報において誤りがある場合、訂正をしてください。</p>
      </div>

      <div class="row justify-content-md-center">
        <div class="col-md-8 order-md-1">
          <form id="formID" method="post" action="check.php">
            <!-- <form class="needs-validation" novalidate> -->
            <div class="mb-3">
              <label for="storename">店舗名</label>
              <input type="text" class="form-control" name="storename" value="<?php if (!empty($_SESSION['storename'])) {
                                                                                echo $_SESSION['storename'];
                                                                              } ?>" placeholder="店舗名" required>
              <div class="invalid-feedback">
                <!-- </form> -->
                編集する店舗名を入力してください
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="productname">商品名</label>
                <input type="text" class="form-control" name="productname" value="<?php if (!empty($_SESSION['productname'])) {
                                                                                    echo $_SESSION['productname'];
                                                                                  } ?>" placeholder="商品名">
                <div class="invalid-feedback">
                  商品名を入力してください
                </div>

              </div>
              <div class="col-md-3 mb-3">
                <label for="price">価格</label>
                <input type="text" class="form-control validate[custom[number]" name="price" id="price" value="<?php if (!empty($_SESSION['price'])) {
                                                                                                                  echo $_SESSION['price'];
                                                                                                                } ?>" placeholder="税込み価格を入力">
                <div class="invalid-feedback">
                  価格を入力してください
                </div>
              </div>
              <div class="col-md-5 mb-3">
                <label for="telno">電話番号</label>
                <input type="tel" class="form-control validate[custom[phone]" name="telno" value="<?php if (!empty($_SESSION['telno'])) {
                                                                                                    echo $_SESSION['telno'];
                                                                                                  } ?>" placeholder="0001112222">
              </div>

            </div>

            <div class="row">
              <div class="col-md-3 mb-3">
                <label>開店時間</label>
                <p><input type="time" name="open" value="" step="600"></p>
              </div>
              <div class="col-md-3 mb-3">
                <label>閉店時間</label>
                <p><input type="time" name="close" value="" step="600"></p>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="check" value="閉店しています" id="keepCheck">
              <label class="custom-control-label" for="keepCheck">閉店しています</label>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" input type="submit" value="go">入力内容を確認</button>
          </form>
        </div>
      </div>
    </div>
    <?php session_destroy();
    $js = 1; ?>
  </div>
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
  <?php require_once('template/footer.php') ?>