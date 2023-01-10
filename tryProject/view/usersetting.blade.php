<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css_grouplist.css">
    <title>ユーザー設定</title>
    <link rel="stylesheet" href="css/css_del_usersetting.css">
</head>

<body>
    <h3>プロフィール編集</h3>
    <form method="POST" action="/user_userlist/{{ $account['id'] }}">
        @method('PUT')
        @csrf

        <div>
            <input type="text" id="name" placeholder="ユーザーネーム" name="name" value={{ $account['name'] }}
                required minlength="2" maxlength="50" size="30">
        </div>
        <div>
            <input type="email" id="email" placeholder="メールアドレス" name="mail" value={{ $account['mail'] }}
                {{-- pattern=".+@globex\.com"  --}} size="30" required>
        </div>
        <div>
            <input type="password" id="pass" placeholder="パスワード" name="password" value={{ $account['pass'] }}
                minlength="8" size="30" required>
        </div>
        <button type="submit" value="保存">保存</button>
    </form>
    <div>
        <form action="/user_userlist/{{ $account['id'] }}" method="POST">
            @method('DELETE')
            @csrf
            <input type="submit" id="click-btn" value="アカウントの削除">
            <div id="popup-wrapper">
                <div id="popup-inside">
                    <div id="message">
                        <p>本当に削除しますか？</p>
                        <a href="/user_userlist/">キャンセル</a>
                        <a href="#">削除</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="js/js_del_usersetting.js"></script>
</body>

</html>
