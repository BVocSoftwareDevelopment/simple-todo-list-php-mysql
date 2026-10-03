<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task = $_POST['task'];
    $due_date = $_POST['due_date'];

    $stmt = $conn->prepare("INSERT INTO tasks (task, due_date) VALUES (?, ?)");
    $stmt->bind_param("ss", $task, $due_date);
    $stmt->execute();
    $stmt->close();
}
?>t;
?>
