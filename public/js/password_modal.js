'use strict';


//------サイト訪問者からの意見や質問を一覧表示するためのリンクを-----------------

// リンクがクリックされたときの処理
function Modalshow4() {
    let modal = document.getElementById('password-modal4');
    modal.style.display = 'block';
};

// 閉じるをおしたときの処理
function Modalerase4() {
    let modal = document.getElementById('password-modal4');
    modal.style.display = 'none';
};

// パスワード送信ボタンがクリックされたときの処理
function passwordCheck4() {
    let password = document.getElementById('password-input4').value;

    // 仮の認証ロジックを示します。実際のアプリケーションでは適切な認証手段を使用してください。
    if (password === "任意のパスワード") {//左の""には照合させたいパスワードを入れる
        window.location.href = "../";//「/」はそれに続くようにweb.phpで設定した遷移させたいURLの末尾を入れる
                                //""内は本来のリンク先URL
    } else {
        // パスワードが異なる場合、エラーメッセージを表示
        document.getElementById('error-message4').innerText = "パスワードが正しくありません。";
    }
};

//--------------------------------------------------------------------------------------------------

// リンクがクリックされたときの処理
function Modalshow5() {
    let modal = document.getElementById('password-modal5');
    modal.style.display = 'block';
};

// 閉じるをおしたときの処理
function Modalerase5() {
    let modal = document.getElementById('password-modal5');
    modal.style.display = 'none';
};

// パスワード送信ボタンがクリックされたときの処理
function passwordCheck5() {
    let password = document.getElementById('password-input5').value;

    // 仮の認証ロジックを示します。実際のアプリケーションでは適切な認証手段を使用してください。
    if (password === "任意のパスワード") {//左の""には照合させたいパスワードを入れる
        window.location.href = "../";//「/」はそれに続くようにweb.phpで設定した遷移させたいURLの末尾を入れる
    } else {
        // パスワードが異なる場合、エラーメッセージを表示
        document.getElementById('error-message5').innerText = "パスワードが正しくありません。";
    }
};
