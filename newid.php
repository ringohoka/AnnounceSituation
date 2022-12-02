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
    <form method="post">
        <input type="text" class="usename" name="nuser" placeholder="名前" maxlength="255"><br>
        <input type="email" class="emale" name="ngmale" placeholder="メールアドレス"><br>
        <input type="password" class="mypass" name="npass" placeholder="パスワード15桁以内" maxlength="15"><br>
        <button onclick="php_grouplist">登録</button>




        <?php //if($_POST['nuser']<0 && $_POST['ngmale']<0 && $_POST['npass']<0){ ?> <!-- 何もなし -->
            <!-- <button>登録</button> -->
        <?php //}else if ($_POST['nuser']<0){ ?> <!-- 名前がない -->
            <?php //echo "名前がない"; ?>
            <!-- <button>登録</button> -->
        <?php //}else if ($_POST['ngmale']<0){?> <!-- メアドがない -->
            <?php //echo "メアドがない"; ?>
            <!-- <button>登録</button> -->
        <?php //}else if ($_POST['npass']<0){?> <!-- パスがない -->
            <?php //echo "パスがない"; ?>
            <!-- <button>登録</button> -->
        <?php //}else{?> <!-- すべて入力 -->
            <?php //echo "OK!"; ?>
            <!-- <button onclick="php_grouplist">登録</button> -->
        <?php //}?>
        <!-- echo $_POST['nuser']; -->
        
        
    </form>
    
    

</body>

</html>