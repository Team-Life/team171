// app.js や別の JavaScript ファイルに以下のコードを追加します
document.addEventListener('DOMContentLoaded', function() {
    // ナビゲーションのリンクを取得
    const SCD_MapLink = document.querySelectorAll('.SCD_map_link');

    // 各リンクにクリックイベントを追加
    SCD_MapLink.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // リンクのデフォルトの動作をキャンセル
            window.alert('現在、作成途中です。しばらくお待ちください。');
        });
    });
});
