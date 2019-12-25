<?php
//データベース読み込み
require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../config/dbConnect.php');
function disp_post() {
  $nigamaroDbObj = dbConnect();
  //var_dump($nigamaroDbObj);
  //記事タイトル、記事内容、投稿時刻、画像パスを配列で取得し、返す。
  $sql = "SELECT * FROM `gnavi_shop_tbl` WHERE 1";
  $stmt = $nigamaroDbObj->query($sql);
  //var_dump($stmt);
  $posts = $stmt->fetchAll();

  foreach ($posts as $value) {
    echo $value['g_shop_id'];
  }
}
disp_post();
