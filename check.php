<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <?php require_once('template/header.php') ?>
    <?php
    //店舗名が空欄である場合、
    // if (!isset($_POST['storename']) || $_POST['storename'] === '') {
    //     header('Location: /nigamaro/public_html/storeEdit.php');
    //     exit;
    // }
    // //httpである場合
    // if ($_SERVER['HTTPS'] != "on") {
    //     header('Location: /nigamaro/public_html/storeEdit.php');
    // }
    // //POST経由でアクセスされたかを確認
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     header('Location: /nigamaro/public_html/storeEdit.php');
    // }
    ?>
    <h3 class="text-center ct mt-3">以下の内容でよろしいですか？</h3>
    <?php var_dump($_POST['open'])?>
    <table class="table table-striped">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 pb-5">


                <tr>
                    <td>店舗名</td>
                    <td><?= $_POST['storename'] ?></td>
                </tr>
                <tr>
                    <td>商品名</td>
                    <td><?= $_POST['productname'] ?></td>
                </tr>
                <tr>
                    <td>価格</td>
                    <td><?= $_POST['price'] ?></td>
                </tr>
                <tr>
                    <td>電話番号</td>
                    <td><?= $_POST['telno'] ?></td>
                </tr>
                <tr>
                    <td>開店時間</td>
                    <td><?= $_POST['open'] ?></td>
                </tr>
                <tr>
                    <td>閉店時間</td>
                    <td><?= $_POST['zip'] ?></td>
                </tr>
            </div>
        </div>
    </table>
    <?php require_once('template/footer.php') ?>
<!-- バリデート処理 -->