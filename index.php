<?php
// コードベースのファイルのオートロード
spl_autoload_extensions(".php"); 
spl_autoload_register();

// composerの依存関係のオートロード
require_once 'vendor/autoload.php';

use Helpers\RandomGenerator;

// // クエリ文字列からパラメータを取得
// $min = $_GET['min'] ?? 5;
// $max = $_GET['max'] ?? 20;

// // パラメータが整数であることを確認
// $min = (int)$min;
// $max = (int)$max;

$employees = RandomGenerator::employees(1, 1);
$companies = RandomGenerator::companies(1, 1);
$restaurantLocations = RandomGenerator::restaurantLocations(1, 1);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Restaurant Chain Mockup</title>
        <style>
            .line {
                color: blue;
            }
        </style>
    </head>
    <body>
        <div class="employee-card">
            <p class="line">--------- employee info ---------</p>
            <?php foreach ($employees as $employee): ?>
                <!-- employee info -->
                <?php echo $employee->toHTML(); ?>
                <?php endforeach; ?>
        </div>
        <div class="company-card">
        <p class="line">------ company info ------</p>
        <?php foreach ($companies as $company): ?>
            <!-- company info -->
            <?php echo $company->toHTML(); ?>
            <?php endforeach; ?>
        </div>
        <div class="restaurantLocation-card">
        <p class="line">------ restaurantLocation info ------</p>
        <?php foreach ($restaurantLocations as $restaurantLocation): ?>
            <!-- company info -->
            <?php echo $restaurantLocation->toHTML(); ?>
            <?php endforeach; ?>
        </div>
    </body>
</html>