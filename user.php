<?php
require_once('../lib/GnaviCrud.php');
require_once('../lib/functions.php');
require_once(__DIR__ . '/../config/config.php');

//有効の場合、チェックを行っており、ログインしていなければ、該当ページへ飛ばされます。
//本ページを編集する場合、以下の2行をコメントアウトしてください。
$app = new MyApp\Controller\User();
$app->checkLogin();

$userResult = [];
$userReview = [];
$userRank = [];
var_dump($userResult = getUser(1111));
var_dump($userReview = getReview(1111));
var_dump($userRank = getRank(1111));
?>
<!doctype html>
<html lang="ja">

<head>
    <?php require_once('template/header.php') ?>

    <!--Navbar-->
    <!--/.Navbar-->
    <div class="mt-3">
        <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img mt-5">
                            <img src="img/<?= h($userResult[0]['user_icon']) ?> " width="160" height="130" alt="ユーザーのアイコン" />
                            <!--<div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file" />
                            </div>-->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <h5>

                            </h5>
                            <p class="proile-rating">RANKINGS : <span><?= h($userRank[0]['rank']) ?> </span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>ユーザー ID</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>1111</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>名前</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?= h($userResult[0]['user_name']) ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?= h($userResult[0]['email']) ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>年齢</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?= h($userResult[0]['age']) ?></p>
                                    </div>
                                </div>
                                <?php
                                $gender = numToGender($userResult[0]['gender']);
                                if ($gender === "無記入") :
                                ?>
                                    <div></div>
                                <?php else : ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>性別</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?= h(numToGender($userResult[0]['gender'])) ?></p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>行った店の数</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?= h($userRank[0]['how_visited']) ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>口コミの数</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>200</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <p><?= h($userResult[0]['user_name'])  ?>のレビュー</p>
            <p><?php foreach ($userReview as $array) : 
                if($array['hide'] === "0") :?>
                    <p><?= h($array['g_shop_name']) ?></p>
                    <p><?= h($array['g_shop_review']) ?></p>
                    <?php endif ; ?>
                <?php endforeach ; ?>
                
        </div>
    </div>

    <div class="mx-auto" style="width: 100px">
        <div class="row">
            <!-- <button type="button" class="btn btn-outline-danger">退会</button> -->
            <a class="btn btn-outline-danger" href="retire.php">退会</a>

        </div>
    </div>
    <?php require_once('template/footer.php') ?>
