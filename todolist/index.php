<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List with Task History</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-body">
                <h2 class="text-center text-primary mb-4">📌 To-Do List</h2>

                <!-- Logout Button -->
                <div class="d-flex justify-content-between mb-3">
                    <form method="POST" action="">
                        <button type="submit" class="btn btn-danger" name="logout">Logout</button>
                    </form>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addTaskModal">➕ Add Task</button>
                    <a href="task_history.php" class="btn btn-secondary">📜 View Task History</a>
                </div>

                <hr>

                <!-- Task List -->
                <ul id="taskList" class="list-group"></ul>
            </div>
        </div>
    </div>

    <!-- Add Task Modal -->
    <div class="modal fade" id="addTaskModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Task</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <input type="text" id="taskInput" class="form-control mb-2" placeholder="Enter task..." required>
                    <input type="date" id="dueDateInput" class="form-control" required>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="addTaskBtn">Save Task</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Task Modal -->
    <div class="modal fade" id="editTaskModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Task</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="editTaskId">
                    <input type="text" id="editTaskInput" class="form-control mb-2">
                    <input type="date" id="editDueDateInput" class="form-control">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="saveEditTask">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            function loadTasks() {
                $.ajax({
                    url: "fetch_tasks.php",
                    type: "GET",
                    success: function (data) {
                        $("#taskList").html(data);
                    }
                });
            }

            loadTasks();

            $("#addTaskBtn").click(function () {
                var task = $("#taskInput").val();
                var due_date = $("#dueDateInput").val();
                if (task && due_date) {
                    $.post("add_task.php", { task: task, due_date: due_date }, function () {
                        $("#taskInput").val("");
                        $("#dueDateInput").val("");
                        $("#addTaskModal").modal("hide");
                        loadTasks();
                    });
                }
            });

            $(document).on("click", ".edit-task", function () {
                $("#editTaskId").val($(this).data("id"));
                $("#editTaskInput").val($(this).data("task"));
                $("#editDueDateInput").val($(this).data("due"));
                $("#editTaskModal").modal("show");
            });

            $("#saveEditTask").click(function () {
                var id = $("#editTaskId").val();
                var task = $("#editTaskInput").val();
                var due_date = $("#editDueDateInput").val();
                $.post("update_task.php", { id: id, task: task, due_date: due_date }, function () {
                    $("#editTaskModal").modal("hide");
                    loadTasks();
                });
            });

            $(document).on("click", ".progress-task", function () {
                var id = $(this).data("id");
                $.get("progress_task.php?id=" + id, function () {
                    loadTasks();
                });
            });

            $(document).on("click", ".complete-task", function () {
                var id = $(this).data("id");
                $.get("complete_task.php?id=" + id, function () {
                    loadTasks();
                });
            });

            $(document).on("click", ".delete-task", function () {
                var id = $(this).data("id");
                $.get("delete_task.php?id=" + id, function () {
                    loadTasks();
                });
            });
        });
    </script>
</body>
</html>





