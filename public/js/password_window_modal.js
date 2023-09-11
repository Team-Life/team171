'use strict';

//home SCD_map
function showAlert() {
    window.alert('現在、作成途中です。しばらくお待ちください。');
}


//モーダルのJavascript
// リンクがクリックされたときの処理
function Modalshow1() {
    let modal = document.getElementById('password-modal1');
    modal.style.display = 'block';
};

// 閉じるをおしたときの処理
function Modalerase1() {
    let modal = document.getElementById('password-modal1');
    modal.style.display = 'none';
};

// パスワード送信ボタンがクリックされたときの処理
function passwordCheck1() {
    let password = document.getElementById('password-input1').value;

    // 仮の認証ロジックを示します。実際のアプリケーションでは適切な認証手段を使用してください。
    if (password === "正しいパスワード") {//左の""には照合させたいパスワードを入れる
        window.location.href = "#";//左""内は本来のリンク先URL
    } else {
        // パスワードが異なる場合、エラーメッセージを表示
        document.getElementById('error-message1').innerText = "パスワードが正しくありません。";
    }
};

//--------------------------------------------------------------------------------------------------

// リンクがクリックされたときの処理
function Modalshow2() {
    let modal = document.getElementById('password-modal2');
    modal.style.display = 'block';
};

// 閉じるをおしたときの処理
function Modalerase2() {
    let modal = document.getElementById('password-modal2');
    modal.style.display = 'none';
};

// パスワード送信ボタンがクリックされたときの処理
function passwordCheck2() {
    let password = document.getElementById('password-input2').value;

    // 仮の認証ロジックを示します。実際のアプリケーションでは適切な認証手段を使用してください。
    if (password === "正しいパスワード") {//左の""には照合させたいパスワードを入れる
        window.location.href = "#";//左""内は本来のリンク先URL
    } else {
        // パスワードが異なる場合、エラーメッセージを表示
        document.getElementById('error-message2').innerText = "パスワードが正しくありません。";
    }
};

//--------------------------------------------------------------------------------------------------

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
    if (password === "正しいパスワード") {//左の""には照合させたいパスワードを入れる
        window.location.href = "#";//左""内は本来のリンク先URL
    } else {
        // パスワードが異なる場合、エラーメッセージを表示
        document.getElementById('error-message3').innerText = "パスワードが正しくありません。";
    }
};
