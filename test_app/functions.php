<?php
require_once('connection.php');

function getTodoList()
{
    return getAllRecords();
}

//更新処理
function getSelectedTodo($id)
{
    return getTodoTextById($id);
}

function savePostedData($post)
{
    $path = getRefererPath();
    switch ($path) {
        case '/new.php':
            createTodoData($post['content']);
            break;
        case '/edit.php':
            updateTodoData($post);
            break;
        case '/index.php': // 追記
            deleteTodoData($post['id']); // 追記
            break; // 追記
        default:
            break;
    }
}

//リクエスト元のページのパスで条件分岐をし、処理を振り分け
//新規作成ページからPOSTされたなら、createTodoData関数 を実行（INSERT処理
//編集ページからPOSTされたなら、updateTodoData関数 を実行（UPDATE処理）

function getRefererPath()
{
    $urlArray = parse_url($_SERVER['HTTP_REFERER']);
    return $urlArray['path'];
}

//リクエスト元のURLを文字列で取得しそのパスを返す
