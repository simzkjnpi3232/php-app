<?php
require_once('functions.php');

createData($_POST);//array
header('Location: ./index.php');

//require_once() 関数は引数に渡したファイルで定義されている関数などを使用できる
//functions.phpというファイルを引数に渡している

//引数の$_POSTにはnew.phpで入力したキーcontent、バリュー入力値の連想配列が格納
// createData() 関数が実行→functions.phpを呼び出す

//ファイル遷移は内部的なものなのでcreateData()の処理が終わるとheader()が実行


//header()は今回はリダイレクトを実行するための関数
//指定のURLへリダイレクトするよう指示、指定されたURL（ここでは ./index.php）に移動

//リクエストヘッダー