{
    const btn = document.getElementById('btn');


    const openWin = document.getElementById('openWin');
    openWin.addEventListener("click",(event) =>{
        myWindow = window.open("", "myWindow", "width=200,height=100");
        myWindow.document.write("<p>ポップアップ表示だよ</p>");
    });

    // btn.addEventListener('click', function () {

    //     prompt('');

    // });
}