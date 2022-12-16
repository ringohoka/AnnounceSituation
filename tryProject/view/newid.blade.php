<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <p>新規登録</p>
    <form action="/user_userlist" method="post">
        @csrf
        <input type="text" class="usename" name="name" placeholder="名前" maxlength="255"><br>
        <input type="email" class="emale" name="mail" placeholder="メールアドレス"><br>
        <input type="password" class="mypass" name="pass" placeholder="パスワード15桁以内" maxlength="15"><br>
        <button>登録</button>
    </form>

</body>

</html>
