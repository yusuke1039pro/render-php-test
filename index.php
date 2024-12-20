<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>電話メモ入力フォーム</title>
</head>
<body>
    <h1>電話メモ入力フォーム</h1>
    
    <form action="save_memo.php" method="POST">
        <label for="name">名前:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="phone_number">電話番号:</label><br>
        <input type="text" id="phone_number" name="phone_number" required><br><br>
        
        <label for="memo">メモ:</label><br>
        <textarea id="memo" name="memo"></textarea><br><br>
        
        <button type="submit">保存</button>
    </form>
</body>
</html>