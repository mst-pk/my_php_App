<?php
    require('dbconnect.php');
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>潜っChao! | 新規登録</title>
        <link rel="stylesheet" href="css/signup.css">
    </head>
    <body>
        <div>
            <h2>アカウント新規登録</h2>
            <form action="check.php" method="post">
                <label for="name">ユーザー名</labal>
                <input type="text" name="name" value=""><br>
                <label for="email">メールアドレス</label>
                <input type="email" name="email" value=""><br>
                <label for="password">パスワード</label>
                <input type="password" name="password" value=""><br>
                <input type="submit" value="登録する">
            </form>
        </div>
    </body>
</html>