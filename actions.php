<?php
session_start();

// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Handle different actions based on the query parameter
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    
    switch ($action) {
        case 'login':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $email = sanitize_input($_POST['email']);
                $password = $_POST['password'];
                $remember = isset($_POST['remember']) ? true : false;
                
                // Here you would typically:
                // 1. Validate the email format
                // 2. Check the credentials against a database
                // 3. Set session variables on successful login
                // 4. Set remember-me cookie if selected
                
                // For demo purposes, we'll just redirect back
                header('Location: index.php');
                exit;
            }
            break;
            
        case 'register':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $name = sanitize_input($_POST['name']);
                $email = sanitize_input($_POST['email']);
                $password = $_POST['password'];
                $confirm_password = $_POST['confirm_password'];
                $terms = isset($_POST['terms']) ? true : false;
                
                // Here you would typically:
                // 1. Validate all inputs
                // 2. Check if passwords match
                // 3. Verify email is not already registered
                // 4. Hash the password
                // 5. Store user data in database
                
                // For demo purposes, we'll just redirect back
                header('Location: index.php');
                exit;
            }
            break;
            
        case 'create-project':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $project_name = sanitize_input($_POST['project-name']);
                $project_description = sanitize_input($_POST['project-description']);
                $project_color = sanitize_input($_POST['project-color']);
                
                // Here you would typically:
                // 1. Validate the project name
                // 2. Store project data in database
                // 3. Associate project with current user
                
                // For demo purposes, we'll just redirect back
                header('Location: index.php');
                exit;
            }
            break;
            
        case 'create-task':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $task_title = sanitize_input($_POST['task-title']);
                $task_description = sanitize_input($_POST['task-description']);
                $task_project = sanitize_input($_POST['task-project']);
                $task_recurrence = sanitize_input($_POST['task-recurrence']);
                $task_priority = sanitize_input($_POST['task-priority']);
                $task_due_date = sanitize_input($_POST['task-due-date']);
                $task_tags = sanitize_input($_POST['task-tags']);
                
                // Here you would typically:
                // 1. Validate all inputs
                // 2. Store task data in database
                // 3. Associate task with project and user
                // 4. Handle recurrence settings
                
                // For demo purposes, we'll just redirect back
                header('Location: index.php');
                exit;
            }
            break;
            
        default:
            // Invalid action, redirect to home
            header('Location: index.php');
            exit;
    }
} else {
    // No action specified, redirect to home
    header('Location: index.php');
    exit;
}
?>
