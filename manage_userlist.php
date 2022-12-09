<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "グループ名"; ?></title>
    <link rel="stylesheet" href="css/css_userlist.css">

</head>

<body>
    <div id="div1">
        <p class="groupname"><?php echo "グループ名"; ?></p>
        <form id="form2" action="#" method="get">
            <input id="sbox2" id="s" name="s" type="text" placeholder="フリーワードを入力" />
            <button type="submit" id="sbtn2"><i class="fas fa-search"></i></button>
        </form>

    </div>
    <button type=“button” style="position:fixed;right:20px;bottom:20px;">グループの編集</button>
    <script src="https://kit.fontawesome.com/841b98f2a1.js" crossorigin="anonymous"></script>

</body>

</html>