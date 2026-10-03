<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Move task to history before deleting
    $conn->query("INSERT INTO task_history (task, due_date, status) 
                  SELECT task, due_date, 'deleted' FROM tasks WHERE id=$id");

    // Delete from tasks table
    $stmt = $conn->prepare("DELETE FROM tasks WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}
?>


