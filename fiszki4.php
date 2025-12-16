<?php
// ===== USTAWIENIA =====
$host = "localhost";
$user = "root";
$pass = "";
$db   = "kraje";

// ===== POŁĄCZENIE =====
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["error" => "Błąd połączenia z bazą"]);
    exit;
}

// ===== ZAPYTANIE =====
$sql = "SELECT id, eng, pl FROM fiszki4 ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

if (!$result) {
    http_response_code(500);
    echo json_encode(["error" => "Błąd zapytania SQL"]);
    exit;
}

// ===== DANE =====
$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// ===== JSON =====
header("Content-Type: application/json; charset=utf-8");
echo json_encode($data);

// ===== ZAMKNIĘCIE =====
$conn->close();
