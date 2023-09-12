'use strict';

//---Githubへのリンクを出すためのパスワード認証モーダル--------------------

// リンクがクリックされたときの処理
function Modalshow3() {
    let modal = document.getElementById('password-modal3');
    modal.style.display = 'block';
};

// 閉じるをおしたときの処理
function Modalerase3() {
    let modal = document.getElementById('password-modal3');
    modal.style.display = 'none';
};

// パスワード送信ボタンがクリックされたときの処理
function passwordCheck3() {
    let password = document.getElementById('password-input3').value;

    // 仮の認証ロジックを示します。実際のアプリケーションでは適切な認証手段を使用してください。
    if (password === "Miem605750887GithubURL") {//左の""には照合させたいパスワードを入れる
        window.location.href = "../github_contact";//左""内は本来のリンク先URL
    } else {
        // パスワードが異なる場合、エラーメッセージを表示
        document.getElementById('error-message3').innerText = "パスワードが正しくありません。";
    }
};

