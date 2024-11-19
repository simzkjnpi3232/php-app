<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>新規作成</title>
</head>
<body>
  <form action="store.php" method="post">
    <input type="text" name="content">
    <input type="submit" value="作成">
  </form>
  <div>
    <a href="index.php">一覧へもどる</a>
  </div>
</body>
</html>

<!-- 
画面側の流れ
index.phpの新規作成ボタンの押下からnew.phpへ遷移
フォームに文字列を書き、作成ボタンを押下すると再度index.phpに遷移
index.phpのtodoリストの一番下に入力内容が表示されます。
 -->

 <!--
new.php新規作成機能
新規作成画面ではユーザーがフォームにToDoを入力します。
入力後は、ボタンをクリックしてstore.phpに遷移します。
action属性にstore.phpを設定しているので遷移する

 -->