<?php
// composerの依存関係のオートロード
require_once "vendor/autoload.php";

// POSTリクエストからパラメータを取得
$countEmployee = $_POST["countEmployee"] ?? 3;
$salary = $_POST["salary"] ?? "1000";
$countRestaurantLocation = $_POST["countRestaurantLocation"] ?? 3;
$postalCodeMin = $_POST["postalCodeMin"] ?? "000-0000";
$postalCodeMax = $_POST["postalCodeMax"] ?? "999-9999";
$format = $_POST["format"] ?? "html";

// パラメータが正しい形式であることを確認
$countEmployee = (int)$countEmployee;
$salary = (int)$salary;
$countRestaurantLocation = (int)$countRestaurantLocation;

if (
    is_null($countEmployee) || 
    is_null($salary) || 
    is_null($countRestaurantLocation) || 
    is_null($postalCodeMin) || 
    is_null($postalCodeMax) || 
    is_null($format)
    ) {
    exit("Missing parameters.");
}

if (!is_numeric($countEmployee) || $countEmployee < 1 || $countEmployee > 100) {
    exit('"Number of Employees:" is invalid count. Must be a number between 1 and 100.');
}

$salaryMinNum = 0;
$salaryMaxNum = 0;

if ($salary == 1000){
    $salaryMinNum = 1000;
    $salaryMaxNum = 1999;
}
elseif ($salary == 2000){
    $salaryMinNum = 2000;
    $salaryMaxNum = 2999;
}
elseif ($salary == 3000){
    $salaryMinNum = 3000;
    $salaryMaxNum = 3999;
}
else {
    $salaryMinNum = 4000;
    $salaryMaxNum = 4999;
}

if (!is_numeric($countRestaurantLocation) || $countRestaurantLocation < 1 || $countRestaurantLocation > 10) {
    exit('"Number of RestaurantLocations:" is invalid count. Must be a number between 1 and 10.');
}

$postalCodeMinNum = (int)str_replace("-", "", $postalCodeMin);
$postalCodeMaxNum = (int)str_replace("-", "", $postalCodeMax);

if (!is_numeric($postalCodeMinNum) || strlen($postalCodeMin) !== 8 || strpos($postalCodeMin,"-") !== 3) {
    exit('"Minimum postal code:" is invalid postal code. Follow the placeholders.');
}

if (!is_numeric($postalCodeMaxNum) || strlen($postalCodeMax) !== 8 || strpos($postalCodeMax,"-") !== 3) {
    exit('"Maximum postal code:" is invalid postal code. Follow the placeholders.');
}

$allowedFormats = ["json", "txt", "html", "md"];

if (!in_array($format, $allowedFormats)) {
    exit("Invalid format. Must be one of: " . implode(", ", $allowedFormats));
}

$restaurantChains = \Helpers\RandomGenerator::restaurantChains(
                                                            $countEmployee, 
                                                            $salaryMinNum, 
                                                            $salaryMaxNum, 
                                                            $countRestaurantLocation, 
                                                            $postalCodeMinNum, 
                                                            $postalCodeMaxNum
                                                        );

if ($format === "md") {
    header("Content-Type: text/markdown");
    header('Content-Disposition: attachment; filename="users.md"');
    
    print(\Helpers\RenderHelper::restaurantsToChainsMarkdown($restaurantChains));
} elseif ($format === "json") {
    header("Content-Type: application/json");
    header('Content-Disposition: attachment; filename="users.json"');

    $output = \Helpers\RenderHelper::restaurantsToChainsJson($restaurantChains);
    print(json_encode($output, JSON_PRETTY_PRINT));
} elseif ($format === "txt") {
    header("Content-Type: text/plain");
    header('Content-Disposition: attachment; filename="users.txt"');
    
    print(\Helpers\RenderHelper::restaurantsToChainsTxt($restaurantChains));
} else {
    header("Content-Type: text/html");
    
    include "toHtml.php";
}