# simple-todo-list-php-mysql
A lightweight PHP and MySQL based To-Do List application for creating, managing, tracking, and organizing daily tasks with a simple and responsive interface.

# Simple To-Do List

A lightweight and efficient **web-based task management application** designed to help users organize and manage their daily activities with ease.

The **Simple To-Do List** is developed using **PHP, HTML, CSS, Bootstrap, JavaScript, and MySQL**. The system provides essential task management functionality, including adding, updating, deleting, completing, and tracking tasks based on their current status.

The project is suitable for **personal task management, student projects, academic demonstrations, and learning PHP and MySQL based web application development**.

📌 Project Overview

The Simple To-Do List System provides a clean and user-friendly platform for managing daily tasks.

Users can:

* Create new tasks
* Add task descriptions
* Set task due dates
* Update existing tasks
* Track task progress
* Mark tasks as completed
* Delete unwanted tasks
* View task history
* Manage their tasks through a web interface

The application is designed to provide a simple and efficient way of organizing personal goals, assignments, work activities, and other day-to-day tasks.

✨ Key Features

### 1. Add Task

Users can create a new task by providing information such as:

* Task title
* Task description
* Due date

### 2. Update Task

Users can edit existing task information, including:

* Task title
* Task description
* Due date

### 3. Task Status

Tasks can be tracked according to their current status:

* **Pending**
* **In Progress**
* **Completed**

This helps users monitor the progress of their tasks.

### 4. Delete Task

Users can remove tasks that are no longer required.

### 5. Task History

The system maintains task history so that users can refer to previously completed or deleted tasks.

### 6. User Authentication

The project contains authentication-related pages, including:

* Registration
* Login
* Logout

These provide the basic structure for user account management.

🛠️ Technologies Used

### Frontend

* **HTML**
* **CSS**
* **Bootstrap**
* **JavaScript**

### Backend

* **PHP**

PHP is used for server-side processing, database interaction, and CRUD operations.

### Database

* **MySQL**

MySQL is used to store task-related information and task statuses.


📂 Project Structure

```text
todolist/
│
├── add_task.php
├── complete_task.php
├── database.php
├── delete_task.php
├── fetch_tasks.php
├── home.php
├── index.php
├── login.php
├── logout.php
├── progress_task.php
├── register.php
├── task_history.php
├── todo_list.sql
├── todolist.php
├── update_task.php
│
└── style.css

📁 File and Module Description

### `index.php`

The main entry point of the application.

It provides access to the application's initial interface.

### `register.php`

Provides the registration functionality for creating a user account.

### `login.php`

Provides the login interface for registered users.

### `logout.php`

Handles user logout functionality.

### `home.php`

Provides the main task management interface for users.

### `todolist.php`

Contains the To-Do List related application functionality.

### `add_task.php`

Handles the creation and addition of new tasks.

### `update_task.php`

Allows existing task information to be updated.

### `delete_task.php`

Handles the deletion of tasks.

### `complete_task.php`

Handles the process of marking a task as completed.

### `progress_task.php`

Handles task progress/status functionality.

### `fetch_tasks.php`

Handles retrieving task information for display within the application.

### `task_history.php`

Provides access to task history, including previously handled tasks.

### `database.php`

Contains the database-related PHP functionality used by the application.

### `style.css`

Contains the CSS styles used to customize the appearance of the application.

### `todo_list.sql`

The SQL database file used to create/import the database structure required by the application.

🗄️ Database

The project includes an SQL database file:

todo_list.sql

The database is intended to store information related to users, tasks, task status, and other application data according to the project's database structure.

The database name specified for the setup is:

todo_list

🚀 How to Run

### Requirements

Before running the project, install a local web development environment such as:

* **XAMPP**
* **Apache**
* **MySQL**
* **phpMyAdmin**
* Modern Web Browser

⚙️ Installation and Setup

### Step 1: Install XAMPP

Download and install XAMPP on your computer.

Open the XAMPP Control Panel and start:

Apache
MySQL

### Step 2: Copy the Project

Extract or download the project source code.

Copy the `todolist` project folder into the XAMPP `htdocs` directory:

xampp/htdocs/

The resulting structure should be similar to:

xampp/
└── htdocs/
    └── todolist/

### Step 3: Open phpMyAdmin

Open the following address in your browser:

http://localhost/phpmyadmin

### Step 4: Create the Database

Create a new MySQL database named:

todo_list

### Step 5: Import the SQL File

Import the provided:

todo_list.sql

file into the newly created `todo_list` database.

### Step 6: Check Database Configuration

Make sure the database connection settings in:

database.php

match your local MySQL configuration.

For example:

Host: localhost
Username: root
Password: [your local MySQL password]
Database: todo_list


Use the actual values required by your local environment and project configuration.

### Step 7: Run the Application

Open the following URL in your browser:

http://localhost/todolist/

The application should now be accessible through the local web server.

🎯 Learning Objectives

This project provides practical exposure to:

* PHP web development
* MySQL database integration
* CRUD operations
* User registration
* User login and logout
* Form handling
* Task management
* Task status management
* Database connectivity
* PHP and MySQL integration
* HTML forms
* CSS styling
* Bootstrap-based interface development
* JavaScript integration
* Basic web application architecture

📚 CRUD Operations Demonstrated

The project provides a practical example of the four basic database operations:

| Operation  | Application Example            |
| ---------- | ------------------------------ |
| **Create** | Add a new task                 |
| **Read**   | Fetch and display tasks        |
| **Update** | Update task information/status |
| **Delete** | Delete an existing task        |

Understanding these operations is an important part of learning database-driven web application development.

🔄 Task Management Flow

A basic task management flow can be represented as:

User Login
    ↓
Task Management
    ↓
Add Task
    ↓
View Tasks
    ↓
Update / Change Progress
    ↓
Mark as Completed
    ↓
Task History

Users can manage their tasks throughout their lifecycle, from creation to completion or deletion.

🎓 Academic Context

This project is suitable for practical learning and demonstration in the:

**B.Voc in Software Development**
**Department of Vocational Education**
**Indira Gandhi National Tribal University (IGNTU)**
**Amarkantak, Madhya Pradesh, India**

It can be used as a practical example for learning **PHP, MySQL, CRUD operations, authentication, and database-driven web application development**.

👨‍🎓 Intended Audience

This project is suitable for:

* B.Voc Software Development students
* Beginner PHP learners
* MySQL learners
* Web development students
* Backend development learners
* Students practicing CRUD operations
* Students learning database-driven applications
* Students developing academic projects

💡 Possible Future Improvements

Students can further improve the application by adding:

* Task priority levels
* Task categories
* Search functionality
* Task filtering
* Task sorting
* Reminder notifications
* Email notifications
* Calendar integration
* Drag-and-drop task management
* User profile management
* Password reset functionality
* Dashboard with task statistics
* Improved responsive design
* AJAX-based task operations
* REST API integration
* Advanced authentication and authorization

🔐 Security Considerations

This project is intended primarily for academic and learning purposes.

Before deploying it publicly, appropriate security measures should be implemented, including:

* Secure password hashing
* Input validation
* Input sanitization
* Prepared SQL statements
* Session security
* Authentication and authorization
* CSRF protection
* Secure database credentials
* Proper error handling

**Do not publish real passwords, database credentials, or other sensitive information in a public GitHub repository.**

📌 Project Information

| Property            | Details                          |
| ------------------- | -------------------------------- |
| Project Name        | Simple To-Do List                |
| Project Type        | Web-Based Task Management System |
| Level               | Academic / Student Project       |
| Frontend            | HTML, CSS, Bootstrap, JavaScript |
| Backend             | PHP                              |
| Database            | MySQL                            |
| Main Function       | Task Management                  |
| Database Operations | CRUD                             |
| Application Type    | Database-Driven Web Application  |


📄 License

This project is intended primarily for **educational and academic purposes**. Students and learners are encouraged to study the source code, experiment with the implementation, and extend the project for learning purposes.


🙏 Acknowledgement

This project is maintained as part of practical and academic learning activities in **PHP and MySQL based web application development**.

It is intended to provide students with hands-on experience in developing a practical task management application using **HTML, CSS, Bootstrap, JavaScript, PHP, and MySQL**.
