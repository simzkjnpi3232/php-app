<?php
require_once('connection.php');

function createData($post)//array
{
    createTodoData($post['content']);//string
}

//createData()の引数の変数$postはキーcontent、バリューが入力値の連想配列が渡されている
//createTodoData()の引数は渡された$postの連想配列のキーを指定したバリュー格納され実行
// 渡された連想配列$postはcontentキーのバリューが格納（例：焼肉）


//createTodoDataの引数は$postの連想配列のキーを指定してバリューの入力値を取得して渡している

//$変数['キー']は連想配列の該当キーのバリューを取得

function getTodoList()
{
    return getAllRecords();
}
