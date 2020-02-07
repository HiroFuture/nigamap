<?php
require_once '../config/dbConnect.php';
require_once '../config/config.php';
//SESSIONから変数に格納
$password = $_POST['password'];

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

//接続
$pdb = dbconnect();
//DB処理を失敗すると例外を吐かせるようにする
$pdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//insert処理(exec()は結果を返さない。)
$stmt = $pdb->prepare("DELETE FROM user_tbl WHERE password = :password");
$stmt->bindParam(':password', $password, PDO::PARAM_STR);
$stmt->execute();
?>


<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <?php require_once('template/header.php') ?>

    <h3 class="text-center ct mt-3">nigamaro会員を退会しました。</h3>

    <?php require_once('template/footer.php') ?>
    <!-- バリデート処理 -->