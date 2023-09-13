<?php
/**
 * open app後、
 *
 * １、ログイン後のホーム画面で、画面中央左の「Configure Add on」をクリック
 * ２、JawsDB MySQLの無料プランを選択
 * ３、画面に出てくるJawsDB MySQLのリンクを押す。（⇒Kitefin Server Dashboardと書かれた
 *     ページが出てくるので、そのページを開けぱなしにしておく）
 * ４、Herokuに戻り、Settingsタブを開き、真ん中Reveal Config Varsをクリック
 * ５、ローカル環境の.envファイルのデータベースのところ（.envのデフォルトだと12～16行目）を真似して、
 *     APP_KEYの下に続けて、３，で開いたKitefin Server DashboardのConnection info の
 *     propertyの値をKEYのところにコピペただし、DB_～（アンダーバー以外.envのように全て大文字）
 *     valueの値をVALUEのところにそのままコピペ（※こちらは大文字、小文字変えない）
 *     右のaddを押して登録していく。（変な全角などが入らないように注意）修了後、JawsDBは閉じてよい
 * ６  Herokuに戻り、Open appのとなりのmoreを押して、run consoleを選択
 * ７　入力欄が出てくるので、（bashとなっているが）そこでphp artisan migrateを入力し、runを押す
 * ８  このコマンドを実行するか聞いてくるので、点滅部分をクリックして、キーボードでYesと入力してEnter
 * ９　doneみたいなやつがローカルみたいにでてきたら、データベースの設定は成功
 *
 * ※この段階では、データベースは見えないので、可視化できるようにするには、以下の
 * MySQL Workbench（TwitterCloneのときに使ったイルカのやつ）とのコネクションの作業を行う。
 *
 * １、MySQL connectionと書かれたところの隣の＋マークを押す
 * ２、いろいろ入力する欄がでてくるので、上記の３、JawsDBのvalueの値をそれぞれ対応するところにコピペ
 *  なお、Default Schema には、Databaseのvalueのところをコピペ
 * 最後、パスワードが聞かれるので、それは同様にJawsDBのpasswordのvalueのところをコピペして、クリック
 * そのまま、OKを押し、successfullyみたいなメッセージがでてきたら接続成功
 * なお、一番上のconnection nameは任意で決められるため、これを本来のローカルで設定したデータベース名にすると
 * 見やすい。⇒successfully後、connection name名のぼたんみたいなやつが出てくる。
 *
 * **/









