<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php require_once('template/header.php') ?>
    <!--Navbar-->
    <!--/.Navbar-->
    <div class="mt-5">
        <div class="text-center ">
            <h2>よくある質問</h2>
        </div>
    </div>
    <div class="accordion mx-auto mt-5" style="width: 500px" id="accordion-4">
        <div class="card">
            <div class="card-header" id="header-4a">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#card-4a" aria-expanded="true" aria-controls="card-4a">
                    使用方法
                </button>
            </div>
            <div id="card-4a" class="collapse" aria-labelledby="header-4a" data-parent="#accordion-4">
                <div class="card-body">
                    <a href="howto.php">こちら</a>から確認お願いします。
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="header-4b">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#card-4b" aria-expanded="false" aria-controls="card-4b">
                    このサービスは無料ですか？
                </button>
            </div>
            <div id="card-4b" class="collapse" aria-labelledby="header-4b" data-parent="#accordion-4">
                <div class="card-body">
                    無料で利用可能です。
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="header-4c">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#card-4c" aria-expanded="false" aria-controls="card-4c">
                    現在地が取得できない(位置情報が取得できない)
                </button>
            </div>
            <div id="card-4c" class="collapse" aria-labelledby="header-4c" data-parent="#accordion-4">
                <div class="card-body">
                    現在地アイコンをクリックしてください。現在地を示す青い点が表示されます。 </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="header-4d">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#card-4d" aria-expanded="false" aria-controls="card-4d">
                    Web価格と店舗価格が違う
                </button>
            </div>
            <div id="card-4d" class="collapse" aria-labelledby="header-4d" data-parent="#accordion-4">
                <div class="card-body">
                    価格の変更は<a href="storeEdit.php">こちら</a>から編集可能です。
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="header-4e">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#card-4e" aria-expanded="false" aria-controls="card-4e">
                        退会したい
                    </button>
                </div>
                <div id="card-4e" class="collapse" aria-labelledby="header-4b" data-parent="#accordion-4">
                    <div class="card-body">
                        <a href="retire.php">こちら</a> から退会手続きを行ってください。</div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php require_once('template/footer.php') ?>