<?php
// コードベースのファイルのオートロード
spl_autoload_extensions(".php"); 
spl_autoload_register();

// composerの依存関係のオートロード
require_once 'vendor/autoload.php';

use Helpers\RandomGenerator;

// クエリ文字列からパラメータを取得
$min = $_GET['min'] ?? 5;
$max = $_GET['max'] ?? 20;

// パラメータが整数であることを確認
$min = (int)$min;
$max = (int)$max;

// ユーザーの生成
$users = RandomGenerator::users($min, $max);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profiles</title>
    <style>
        /* ユーザーカードのスタイル */
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .user-card {
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
        }
        .user-card h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <h1>User Profiles</h1>

    <?php foreach ($users as $user): ?>
    <div class="user-card">
        <!-- ユーザー情報の表示 -->
        <?php echo $user->toHTML(); ?>
    </div>
    <?php endforeach; ?>

</body>
</html>