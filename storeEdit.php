<!doctype html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <?php require_once('template/header.php') ?>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.timepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="css/jquery.timepicker.css" />

  <div class="bg-light">
    <div class="container">
      <div class="py-5 text-center">
        <img src="img/logo.svg" width="192" />
        <h2>店舗編集フォーム</h2>
        <p class="lead">現在掲載されている店舗情報において誤りがある場合、訂正をしてください。</p>
      </div>

      <div class="row justify-content-md-center">
        <div class="col-md-8 order-md-1">
          <form method="post" action="check.php">
            <!-- <form class="needs-validation" novalidate> -->
            <div class="mb-3">
              <label for="storename">店舗名</label>
              <input type="text" class="form-control" name="store[storename]" value="" placeholder="店舗名" required>
              <div class="invalid-feedback">
                <!-- </form> -->
                編集する店舗名を入力してください
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="productname">商品名</label>
                <input type="text" class="form-control" name="store[productname]" value="" placeholder="商品名" required>
                <div class="invalid-feedback">
                  商品名を入力してください
                </div>

              </div>
              <div class="col-md-3 mb-3">
                <label for="price">価格</label>
                <input type="tel" class="form-control" name="store[price]" value="" placeholder="税込み価格を入力" required>
                <div class="invalid-feedback">
                  価格を入力してください
                </div>
              </div>
              <div class="col-md-5 mb-3">
                <label for="telno">電話番号</label>
                <input type="tel" class="form-control" name="store[telno]" value="" placeholder="000-111-2222">
              </div>

            </div>



            <div class="row">
              <div class="col-md-3 mb-3">
                <label>開店時間</label>
                <p><input type="time" name="　store[open]" value="00:00" step="600"  required></p>
              </div>
              <div class="col-md-3 mb-3">
              <label>閉店時間</label>
                <p><input type="time" name="store[zip]" value="24:00" step="600" required></p>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="keepCheck">
              <label class="custom-control-label" for="keepCheck">閉店しています</label>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" input type="submit" value="go">入力内容を確認</button>
          </form>
        </div>
      </div>
    </div>

  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <?php require_once('template/footer.php') ?>