<!DOCTYPE html>
<html>

<head>
    <title>グループ一覧</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/css_newgroup_grouplist.css">
    <link rel="stylesheet" href="css/css_groupin_grouplist.css">
</head>

<body>
    <h3>グループに加入するかグループを作成してください。</h3>

    
    <div class="situation">
        <p><img src="image/赤●.png">取り込み中</p>
        <p><img src="image/緑.png">退席中</p>
        <p><img src="image/黄.png">会議中</p>
    </div>
    <div class="InOrNew">
        <input type="submit" id="click-btn" value="グループの作成">
        <div id="popup-wrapper">
            <div id="popup-inside">
                <div id="close">x</div>
                <div id="message">
                    <h2>あの人気のマンガが...</h2>
                    <p>今なら80%オフ！</p>
                    <a href="#">ゲットする</a>
                </div>
            </div>
        </div>
        <input type="submit" id="click-btn2" value="グループの加入">
        <div id="popup-wrapper2">
            <div id="popup-inside2">
                <div id="close2">x</div>
                <div id="message2">
                    <h2>グループ作成</h2>
                    <input type="text" name="newgroup" placeholder="グループ名入力"><br>
                    <a href="#">グループを作成</a>
                    <a href="php_grouplist.php">キャンセル</a>
                </div>
            </div>
        </div>
    </div>
    
   
    <script src="js/js_groupin_grouplist2.js"></script>
    <script src="js/js_newgroup_grouplist2.js"></script>
</body>

</html>