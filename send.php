<?php
require_once '../config/dbConnect.php';
require_once '../config/config.php';
//SESSIONから変数に格納
$storename = $_SESSION['storename'];
$productname = $_SESSION['productname'];
$price = $_SESSION['price'];
$telno = $_SESSION['telno'];
$open = $_SESSION['open'];
$close = $_SESSION['close'];

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
$stmt = $pdb->prepare("INSERT INTO other_user_data_editing_tbl (other_shop_edit_id,shop_name, tel, open, close, menu_price,menu_name) VALUES (0,':storename',:telno,:open,:close,:price,:productname)");
$stmt->bindParam(':storename', $storename, PDO::PARAM_STR);
$stmt->bindParam(':productname', $productname, PDO::PARAM_STR);
$stmt->bindValue(':price', $price, PDO::PARAM_INT);
$stmt->bindValue(':telno', $telno, PDO::PARAM_INT);
$stmt->bindParam(':open', $open, PDO::PARAM_STR);
$stmt->bindParam(':close', $close, PDO::PARAM_STR);
$stmt->execute();
?>


<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <?php require_once('template/header.php') ?>

    <h3 class="text-center ct mt-3">送信が完了しました。</h3>

    <?php require_once('template/footer.php') ?>
    <!-- バリデート処理 -->