# Task-Manager-Project
I developed a Task Manager web application using HTML, CSS, PHP, and MySQL that supports complete CRUD operations for managing tasks.

# Task Manager CRUD Application

## Project Overview
A simple web-based **Task Manager** application demonstrating full CRUD (Create, Read, Update, Delete) functionality.

**Technologies:** HTML, CSS, PHP, MySQL

---

## Features
- Add, view, edit, and delete tasks
- Tasks stored in MySQL database
- Simple and clean interface

---

## Setup
1. Install **XAMPP** and start Apache & MySQL
2. Clone the repository and copy to `htdocs`
3. Create database `task_manager` and table `tasks`:

```sql
CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    status VARCHAR(50) DEFAULT 'Pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

```

## Open in browser: http://localhost/task-manager
