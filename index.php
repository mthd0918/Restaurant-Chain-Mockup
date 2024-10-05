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
$restaurantChains = RandomGenerator::restaurantChains(1, 1);
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
        <!-- Bootstrap CSS -->
        <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap Bundle JS (includes Popper) -->
        <script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="container mt-5">
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Employee Info</h5>
                </div>
                <div class="card-body">
                    <?php foreach ($employees as $employee): ?>
                        <?php echo $employee->toHTML(); ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Company Info</h5>
                </div>
                <div class="card-body">
                    <?php foreach ($companies as $company): ?>
                        <?php echo $company->toHTML(); ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0">Restaurant Location Info</h5>
                </div>
                <div class="card-body">
                    <?php foreach ($restaurantLocations as $restaurantLocation): ?>
                        <?php echo $restaurantLocation->toHTML(); ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header bg-warning">
                    <h5 class="mb-0">Restaurant Chain Info</h5>
                </div>
                <div class="card-body">
                    <?php foreach ($restaurantChains as $restaurantChain): ?>
                        <?php echo $restaurantChain->toHTML(); ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>