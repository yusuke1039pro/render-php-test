<?php
// SQLiteのデータベースに接続
$db = new PDO('sqlite:phone_memo.db');

// エラーモードを設定
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// メモを保存するためのテーブルが存在しない場合、作成
$query = "CREATE TABLE IF NOT EXISTS phone_memos (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    phone_number TEXT NOT NULL,
    memo TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$db->exec($query);
?>
