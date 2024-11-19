# PHP App ① レビュー

## 全般

### 以下のaタグのリンクを押下した際にedit.phpの$_GETにどんな値が格納されるか説明してください。
- 未学習範囲
```html
<a href="edit.php?todo_id=123&todo_content=焼肉">更新</a>
```

### 以下のフォームの送信ボタンを押下した際にstore.phpの$_POSTにどんな値が格納されるか説明してください。

```html
<form action="store.php" method="post">
    <input type="text" name="id" value="123">
		<textarea　name="content">焼肉</textarea>
    <button type="submit">送信</button>
</form>
```

- 下記の値が格納されます。
  - $_POST = ['id' => '123','content' => '焼肉'];

### `require_once()` は何のために記述しているか説明してください。
- 中のファイルを読み込み、中に記載あるものが使用するため。

### `savePostedData($post)`は何をしているか説明してください。
- 未学習範囲
### `header('location: ./index.php')`は何をしているか説明してください。
- リダイレクトを実行するための関数
  - 新しいURLへリダイレクトするよう指示、指定されたURL（ここでは ./index.html）に移動

### `getRefererPath()`は何をしているか説明してください。
- 未学習範囲
### `connectPdo()` の返り値は何か、またこの記述は何をするための記述か説明してください。
- `connectPdo()` の返り値はPDO クラスのインスタンスです。また、この記述はPDOを用いてデータベースに接続する処理を実行しています。

### `try catch`とは何か説明してください。
- tryとcatchは例外処理を行うための構文になります。
  - 例外が発生する可能性がある処理をtry{ }に書く
  - 例外が発生時の処理をcatch{ }に書く

### Pdoクラスをインスタンス化する際に`try catch`が必要な理由を説明してください。
- データベース接続時に発生する可能性のあるエラーを処理するためです。

## 新規作成

### `createTodoData($post)`は何をしているか説明してください。
- createTodoData関数が受け取った$postのデータをもとにToDoリストのデータをデータベースに保存しています。

## 一覧

### `getTodoList()`の返り値について説明してください。
- getAllRecords()の返り値がgetTodoList()の返り値となっています。
  - getAllRecords()では、
todosテーブルから、削除されていないレコードを全件配列で取得しています。

### `<?= ?>`は何の省略形か説明してください。
- <?php echo ?>の省略形です。

## 更新

### `getSelectedTodo($_GET['id'])`の返り値は何か、またなぜ`$_GET['id']` を引数に渡すのか説明してください。

### `updateTodoData($post)`は何をしているか説明してください。

## 削除

### `deleteTodoData($id)`は何をしているか説明してください。

### `deleted_at`を現在時刻で更新すると一覧画面からToDoが非表示になる理由を説明してください。

### 今回のように実際のデータを削除せずに非表示にすることで削除されたように扱うことを〇〇削除というか。

### 実際にデータを削除することを〇〇削除というか。

### 前問のそれぞれの削除のメリット・デメリットについて説明してください。
