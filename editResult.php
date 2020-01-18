<?php
if (!isset($_POST['param']) || $_POST['param'] === '') {
        header('Location: /nigamaro//public_html/storeEdit.php');
        exit ;
}
$param = $_POST['param'];
echo $param;
?>
