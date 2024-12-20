<?php
// データベース接続
$db = new PDO('sqlite:phone_memo.db');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// フォームから送信されたデータを受け取る
$name = $_POST['name'];
$phone_number = $_POST['phone_number'];
$memo = $_POST['memo'];

// SQLクエリでデータを保存
$query = "INSERT INTO phone_memos (name, phone_number, memo) VALUES (:name, :phone_number, :memo)";
$stmt = $db->prepare($query);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':phone_number', $phone_number);
$stmt->bindParam(':memo', $memo);
$stmt->execute();

// 保存が完了したら、確認メッセージを表示
echo "<p>メモが保存されました！</p>";
echo "<a href='index.php'>戻る</a>";
?>
