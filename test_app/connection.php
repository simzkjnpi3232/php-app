<?php
require_once('config.php');

// ↓PDOクラスのインスタンス化
function connectPdo()
{
    try {
        return new PDO(DSN, DB_USER, DB_PASSWORD);
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }
}
//connectPdo()はDBとやり取りするためのメソッド

//try・catchは例外処理を実装する構文
//try { }は例外が発生する可能性を書く
//catch { }は例外発生じの処理を書く

//本来catchの引数は
//スローはエクセプションクラスを用意する
//PDOException自動でエラーをスローする

function createTodoData($todoText)//string
{
    $dbh = connectPdo();//オブジェクト
    $sql = 'INSERT INTO todos (content) VALUES ("' . $todoText . '")';//string
    $dbh->query($sql);//bool
}

//→todosテーブルのcontentカラムにバリュー$todoTextが追加するインサート文

//createTodoData()関数には渡されたバリューの入力値が格納（例：焼肉）
//connectPdo()で変数$dbhにPDOインスタンスが代入
//変数$sqlにはtodosテーブルの引数として受け取ったバリュー追加するインサート文を代入
//PDOインスタンスqueryメソッドで()内のクエリ文を実行


function getAllRecords()
{
    $dbh = connectPdo();
    $sql = 'SELECT * FROM todos WHERE deleted_at IS NULL';
    return $dbh->query($sql)->fetchAll();
}

