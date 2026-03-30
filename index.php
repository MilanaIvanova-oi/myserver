<?php
// Настройки подключения к базе данных
$host = '127.0.0.1';
$db = 'salon';
$user = 'root';
$pass_db = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass_db, $opt);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Ошибка подключения к БД: ' . $e->getMessage()]);
    exit;
}

// ============================================
// ОБРАБОТКА ФОРМЫ РЕГИСТРАЦИИ
// ============================================
if (isset($_GET['name']) && isset($_GET['username']) && isset($_GET['email']) && isset($_GET['phone']) && isset($_GET['password'])) {
    try {
        $name = htmlspecialchars($_GET['name']);
        $username = htmlspecialchars($_GET['username']);
        $email = htmlspecialchars($_GET['email']);
        $phone = htmlspecialchars($_GET['phone']);
        $password = htmlspecialchars($_GET['password']);

        $stmt = $pdo->prepare("INSERT INTO users (name, username, email, phone, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $username);
        $stmt->bindParam(3, $email);
        $stmt->bindParam(4, $phone);
        $stmt->bindParam(5, $password);
        $stmt->execute();

        echo json_encode(['status' => 'success', 'message' => 'Регистрация успешна!']);

    } catch (PDOException $e) {
        if ($e->getCode() == 23000) {
            http_response_code(400);
            echo json_encode(['status' => 'error', 'message' => 'Пользователь с таким именем уже существует']);
        } else {
            http_response_code(500);
            echo json_encode(['status' => 'error', 'message' => 'Ошибка: ' . $e->getMessage()]);
        }
    }
    exit;
}
?>