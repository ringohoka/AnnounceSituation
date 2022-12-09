<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="css/css_newgroup_grouplist.css"><!-- グループ作成用 -->
    <!-- <link rel="stylesheet" href="css/css_groupin_grouplist.css">グループ加入用 -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/6-4.css">
</head>

<body>


    <div id="wrapper">
        <!--左エリア-->

        <div id="container">
            <div id="brid">
                <?php for ($i = 1; $i <= 100; $i++) { ?>
                    <section>
                        <h2>Area<?php echo $i ?></h2>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </section>
                <?php } ?>
            </div>
        </div>

        <!--右固定エリア-->
        <div id="fixed-area">
            <div id="stbt_list">
                <form method="get">
                    <button class="btred" type="submit" name="1">
                        <i class="fa-solid fa-circle" style=color:red;></i>
                        取り込み中
                    </button><br>
                    <button class="btgreen" type="submit" name="2">
                        <i class="fa-solid fa-circle" style=color:green;></i>
                        退席中
                    </button><br>
                    <button class="btyellow" type="submit" name="3">
                        <i class="fa-solid fa-circle" style=color:yellow;></i>
                        会議中
                    </button><br>
                </form>
            </div>
        </div>



        <!--/wrapper-->

        <script src="https://kit.fontawesome.com/841b98f2a1.js" crossorigin="anonymous"></script>
        <script src="js/js_groupin_grouplist2.js"></script>
        <script src="js/js_newgroup_grouplist2.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/stickyfill/2.1.0/stickyfill.min.js"></script>
        <script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/6-4/js/6-4.js"></script>
        <script src="js/js_split.js"></script>

</body>

</html>