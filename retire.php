<!doctype html>
<html lang="ja">

<head>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php require_once('template/header.php') ?>

    <!--Navbar-->
    <!--/.Navbar-->
    <div class="text-center mt-3">

        <h1>nigamaro会員を退会しますか？</h1>
    <p>
        金谷は、nigamaroを退会しますか?<br>
        nigamaroを退会するとアカウントに紐づく情報は破棄され、 </p>
    <p>
        <span style="color: red">アカウントを復活させることはできません。</span><br>また退会後操作できません。<br>
    </p>

    <p>
        <span style="color: red">上記に同意できましたら</span>入力欄にアカウントのパスワードを入力し<br>「退会する」をクリックしてください。
    </p>
    </div>
    <div class="container">
        <form class="margin-base-vertical" method="post" action="delete.php">
            <p class="input-group">
                <!-- <span class="input-group-addon"><span class="icon-envelope"></span> -->

                <input type="text" class="form-control input-lg mx-auto" style="width: 100px;" name="password" placeholder="Password" />
            </p>
            <p class="text-center">
                <button type="submit" class="btn btn-success btn-lg">退会する</button>
            </p>
        </form>
    </div>
    <?php require_once('template/footer.php') ?>