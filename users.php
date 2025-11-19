<?php
header('Content-Type: application/json');

// هنا الـ id اللي مسموح له
$allowedUserId = "gg_112109077759305132495";

// استلام الـ id من GET أو POST
$userId = '';
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
} elseif (isset($_POST['id'])) {
    $userId = $_POST['id'];
}

$response = [
    "success" => false,
    "message" => "Unauthorized",
    "servers" => []
];

// إذا الـ id مسموح
if ($userId === $allowedUserId) {
    $response["success"] = true;
    $response["message"] = "Authorized";

    // مثال: بيانات السيرفرات اللي نحملها
    $response["servers"] = [
        [
            "name" => "Server 1",
            "url"  => "https://saifuu3.github.io/volte1234.s0jj/wormworld.html"
        ],
        [
            "name" => "Server 2",
            "url"  => "https://example.com/other-server.html"
        ]
    ];
}

echo json_encode($response);
?>
