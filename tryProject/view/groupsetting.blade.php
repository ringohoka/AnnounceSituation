<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'グループ'; ?>設定</title>
    <link rel="stylesheet" type="text/css" href="css/php_groupsetting.css">
</head>

<body>

    <div id="wrapper">
        <div id="fixed-area"></div>
        <!--左固定エリア-->
        <div id="container"></div>
        <!--右エリア-->
        <!--/wrapper-->
    </div>

    <form method="POST" action="/groupview/{{ $group_lists['id'] }}">
        @method('PUT')
        @csrf

        <div>
            <input type="text" id="name" placeholder="グループネーム" name="name" value={{ $group_lists['name'] }}
                minlength="2" maxlength="50" size="30" required>
            <input type="submit" id="click-btn" value="グループの編集">
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/stickyfill/2.1.0/stickyfill.min.js"></script>
    <script src="js/php_groupsetting.js"></script>
</body>

</html>
