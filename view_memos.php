<?php
// データベース接続
$db = new PDO('sqlite:phone_memo.db');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// メモのデータを取得
$query = "SELECT * FROM phone_memos ORDER BY created_at DESC";
$stmt = $db->query($query);
$memos = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<h1>保存されたメモ一覧</h1>";
echo "<table border='1'><tr><th>名前</th><th>電話番号</th><th>メモ</th><th>作成日</th></tr>";

foreach ($memos as $memo) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($memo['name']) . "</td>";
    echo "<td>" . htmlspecialchars($memo['phone_number']) . "</td>";
    echo "<td>" . htmlspecialchars($memo['memo']) . "</td>";
    echo "<td>" . htmlspecialchars($memo['created_at']) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
