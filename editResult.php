<?php
//店舗名が空欄である場合、
// if (!isset($_POST['storename']) || $_POST['storename'] === '') {
//         header('Location: /nigamaro/public_html/storeEdit.php');
//         exit ;
// }
//httpである場合
//  if($_SERVER['HTTPS'] != "on"){
//          header('Location: /nigamaro/public_html/storeEdit.php');
//  }
//POST経由でアクセスされたかを確認
// if($_SERVER["REQUEST_METHOD"] == "POST"){
//          header('Location: /nigamaro/public_html/storeEdit.php');
//  }
$param = $_POST['storename'];
echo $param;
//確認フォーム
//qiita 昔のライン参照
?>
