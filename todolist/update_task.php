<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $task = $_POST['task'];
    $due_date = $_POST['due_date'];

    $stmt = $conn->prepare("UPDATE tasks SET task=?, due_date=? WHERE id=?");
    $stmt->bind_param("ssi", $task, $due_date, $id);
    $stmt->execute();
    $stmt->close();
}
?>
