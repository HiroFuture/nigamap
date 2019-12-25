<?php
try {
    require_once(__DIR__ . '/../config/config.php');
    require_once(__DIR__ . '/../config/dbConnect.php');
    $db = dbconnect();
    $sql = $db -> prepare("INSERT INTO gnavi_shop_menu_tbl(g_menu_name,g_menu_price,g_shop_id,g_shop_name)
    VALUES(:g_menu_name, :g_menu_price, :g_shop_id, :g_shop_name)");
    $sql->bindParam(':g_menu_name', $g_menu_name,PDO::PARAM_STR);
    $sql->bindParam(':g_menu_price', $g_menu_price,PDO::PARAM_STR);
    $sql->bindParam(':g_shop_id', $g_shop_id,PDO::PARAM_STR);
    $a = $sql->bindParam(':g_shop_name', $g_shop_name,PDO::PARAM_STR);
    //var_dump($a); 3演算子　
    $db = null;
} catch (PDOException $e) {
    exit("エラーが発生しました。:{$e->getMessage()}");
}
