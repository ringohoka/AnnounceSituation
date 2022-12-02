
{
  const clickBtn2 = document.getElementById('click-btn2');
const popupWrapper2 = document.getElementById('popup-wrapper2');
const close2 = document.getElementById('close2');

// ボタンをクリックしたときにポップアップを表示させる
clickBtn2.addEventListener('click', () => {
popupWrapper2.style.display = "block";
});

// ポップアップの外側又は「x」のマークをクリックしたときポップアップを閉じる
popupWrapper2.addEventListener('click', e => {
if (e.target.id === popupWrapper2.id || e.target.id === close2.id) {
  popupWrapper2.style.display = 'none';
}
});

}