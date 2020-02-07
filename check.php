<?php
session_start();
?>
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
    <h4 class="text-center ct mt-3">
        <p>まだ変更は完了していません。</p>
        <p>入力内容をご確認ください。</p>
        <p>この内容で登録する場合は、送信確定ボタンを押してください。</p>
    </h4>
    <!-- <div class="flow02">
        <div class="box box01">
            <span>入力</span>
        </div>
        <div class="box box02">
            <span>確認</span>
        </div>
        <div class="box box03">
            <span>完了</span>
        </div>
    </div> -->
    <?php
    //このページで表示する為の関数
    $storename = $_POST['storename'];
    $productname = $_POST['productname'];
    $price = $_POST['price'];
    $telno = $_POST['telno'];
    $open = $_POST['open'];
    $close = $_POST['close'];
    if(isset($_POST['check'])){
        $check = $_POST['check'];
    }

    //セッション関数に渡す（次のページに渡すため）
    $_SESSION['storename'] = $storename;
    $_SESSION['productname'] = $productname;
    $_SESSION['price'] = $price;
    $_SESSION['telno'] = $telno;
    $_SESSION['open'] = $open;
    $_SESSION['close'] = $close;
    ?>
    <form action="send.php storeEdit.php" method="post">
        <table class="table table-striped mx-auto" style="width: 500px">
            <tr>
                <td>店舗名</td>
                <td><?= $storename ?></td>
            </tr>
            <?php if (!empty($productname)) : ?>
                <tr>
                    <td>商品名</td>
                    <td><?= $productname ?></td>
                </tr>

            <?php endif; ?>
            <?php if (!empty($price)) : ?>
                <tr>
                    <td>価格</td>
                    <td><?= $price . "円" ?></td>
                </tr>

            <?php endif; ?>
            <?php if (!empty($telno)) : ?>
                <tr>
                    <td>電話番号</td>
                    <td><?= $telno ?></td>
                </tr>
            <?php endif; ?>
            <?php if (!empty($open)) : ?>
                <tr>
                    <td>開店時間</td>
                    <td><?= $open ?></td>
                </tr>
            <?php endif; ?>

            <?php if (!empty($close)) : ?>
                <tr>
                    <td>閉店時間</td>
                    <td><?= $close ?></td>
                </tr>
            <?php endif; ?>
            <?php if (!empty($check)) : ?>
                <tr>
                    <td>お店の状態</td>
                    <td><?= $check ?></td>
                </tr>
            <?php endif; ?>

            </div>
        </table>

        <div class="text-center mt-4">
            <a class="btn btn-lg btn-primary mr-5" href="storeEdit.php" input type="submit" value="go" role="button">戻る</a>
            <a class="btn btn-lg btn-info" href="send.php" role="button">送信</a>
        </div>

    </form>

    <?php require_once('template/footer.php') ?>
    <!-- バリデート処理 -->