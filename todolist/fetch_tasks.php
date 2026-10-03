<?php
include 'database.php';

$today = date('Y-m-d');
$conn->query("UPDATE tasks SET status='overdue' WHERE due_date < '$today' AND status='pending'");

$result = $conn->query("SELECT * FROM tasks ORDER BY created_at DESC");
$output = '';

while ($row = $result->fetch_assoc()) {
    // Use switch-case instead of match() for compatibility
    $statusBadge = '';
    switch ($row["status"]) {
        case "pending":
            $statusBadge = '<span class="badge bg-warning">Pending</span>';
            break;
        case "in progress":
            $statusBadge = '<span class="badge bg-primary">In Progress</span>';
            break;
        case "completed":
            $statusBadge = '<span class="badge bg-success">Completed</span>';
            break;
        case "overdue":
            $statusBadge = '<span class="badge bg-danger">Overdue</span>';
            break;
    }

    $progressButton = ($row["status"] == "pending") ? '<button class="btn btn-info btn-sm progress-task" data-id="'.$row["id"].'">⏳ In Progress</button>' : '';
    $completeButton = ($row["status"] == "in progress") ? '<button class="btn btn-success btn-sm complete-task" data-id="'.$row["id"].'">✅ Complete</button>' : '';

    $output .= '
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <div>
            <span>'.$row["task"].' <small class="text-muted">(Due: '.$row["due_date"].')</small></span>
            '.$statusBadge.'
        </div>
        <div>
            '.$progressButton.'
            '.$completeButton.'
            <button class="btn btn-warning btn-sm edit-task" data-id="'.$row["id"].'" data-task="'.$row["task"].'" data-due="'.$row["due_date"].'">✏️ Edit</button>
            <button class="btn btn-danger btn-sm delete-task" data-id="'.$row["id"].'">🗑 Delete</button>
        </div>
    </li>';
}

echo $output;
?>



