<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST["insertNewStudentBtn"])) {
    $first_name = trim($_POST["first_name"]);
    $last_name = trim($_POST["last_name"]);
    $gender = trim($_POST["gender"]);
    $section = trim($_POST["section"]);
    $dream_job = trim($_POST["dream_job"]);
    $reason = trim($_POST["reason"]);
    
    // Automatically set the date_added to the current date and time
    $date_added = date('Y-m-d H:i:s');

    if (!empty($first_name) && !empty($last_name) && !empty($gender) &&
        !empty($section) && !empty($dream_job) && !empty($reason)) {
        
        $query = insertIntoStudentRecords($pdo, $first_name, $last_name, $gender, $section, $dream_job, $reason, $date_added);

        if ($query) {
            header("Location: ../index.php");
            exit;
        } else {
            echo "Insertion failed";
        }
    } else {
        echo "Make sure that no fields are empty";
    }
}

if (isset($_POST['editStudentBtn'])) {
    $student_id = $_POST['student_id'];
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $gender = trim($_POST['gender']);
    $section = trim($_POST['section']);
    $dream_job = trim($_POST['dream_job']);
    $reason = trim($_POST['reason']);
    // Keep the date_added unchanged during edit
    $date_added = trim($_POST['date_added']);

    if (!empty($student_id) && !empty($first_name) && !empty($last_name) && !empty($gender) &&
        !empty($section) && !empty($dream_job) && !empty($reason)) {
        
        $query = editstudent($pdo, $student_id, $first_name, $last_name, $gender, $section, $dream_job, $reason, $date_added);

        if ($query) {
            header("Location: ../index.php");
            exit;
        } else {
            echo "Update failed";
        }
    } else {
        echo "Make sure that no fields are empty";
    }
}

if (isset($_POST['deleteStudentBtn'])) {
    $student_id = $_GET['student_id'];
    if (!empty($student_id)) {
        $query = deletestudent($pdo, $student_id);
        if ($query) {
            header("Location: ../index.php");
            exit;
        } else {
            echo "Deletion failed";
        }
    }
}
?>
