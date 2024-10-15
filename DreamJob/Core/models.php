<?php 

require_once 'dbConfig.php';

function insertIntoStudentRecords($pdo, $first_name, $last_name, $gender, $section, $dream_job, $reason, ) {
    $sql = "INSERT INTO DreamJob(first_name, last_name, gender, section, dream_job, reason) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$first_name, $last_name, $gender, $section, $dream_job, $reason, ]);
}

function seeAllStudentRecords($pdo) {
    $sql = "SELECT * FROM DreamJob";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getStudentByID($pdo, $student_id) {
    $sql = "SELECT * FROM DreamJob WHERE student_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$student_id]);
    return $stmt->fetch();
}

function editstudent($pdo, $student_id, $first_name, $last_name, $gender, $section, $dream_job, $reason) {
    $sql = "UPDATE DreamJob SET first_name = ?, last_name = ?, gender = ?, section = ?, dream_job = ?, reason = ? WHERE student_id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$first_name, $last_name, $gender, $section, $dream_job, $reason, $student_id]);
}

function deletestudent($pdo, $student_id) {
    $sql = "DELETE FROM DreamJob WHERE student_id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$student_id]);
}
?>
