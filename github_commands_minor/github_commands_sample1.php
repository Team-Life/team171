<?php
/**
 *githubに一度pushしてしまったファイルの名前を付け替える。（大文字小文字など）
 *
 *git mv app/Http/Controllers/Contactcontroller.php app/Http/Controllers/Contactcontroller2.php
 *　　　　　　　　　　（github上）                          （一旦変換用の名前につけかえ）
 *
 * git mv app/Http/Controllers/Contactcontroller2.php app/Http/Controllers/ContactController.php
 *                                                                                ↑
 *                                                                      (直したい名前)
 *なお、githubに載せるときには大文字・小文字は区別されるものと思って注意が必要
 *
 *特定のブランチのみをクローン
 *
 * git clone -b ブランチ名 --single-branch リポジトリのURL
 *
 * **/

?>
