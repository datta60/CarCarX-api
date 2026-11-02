
<?php

header("Content-Type: application/json");

$crops = [
    [
        "id" => 1,
        "name" => "Rice",
        "season" => "Winter"
    ],
    [
        "id" => 2,
        "name" => "Wheat",
        "season" => "Winter"
    ],
    [
        "id" => 3,
        "name" => "Potato",
        "season" => "Summer"
    ]
];

echo json_encode([
    "success" => true,
    "message" => "AgriCare API is working!",
    "data" => $crops
]);

?>

