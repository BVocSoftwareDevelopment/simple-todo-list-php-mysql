<?php include 'database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task History</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center text-primary">📜 Task History</h2>
        <a href="index.php" class="btn btn-secondary mb-3">⬅ Back to To-Do List</a>

        <ul class="list-group">
            <?php
            $result = $conn->query("SELECT * FROM task_history ORDER BY completed_at DESC");
            while ($row = $result->fetch_assoc()) {
                $badge = ($row["status"] == "completed") ? "bg-success" : "bg-danger";
                echo '<li class="list-group-item d-flex justify-content-between">
                        <span>'.$row["task"].' <small class="text-muted">(Due: '.$row["due_date"].')</small></span>
                        <span class="badge '.$badge.'">'.$row["status"].'</span>
                    </li>';
            }
            ?>
        </ul>
    </div>
</body>
</html>
