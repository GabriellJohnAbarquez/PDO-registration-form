<?php require_once 'Core/dbConfig.php'; ?>
<?php require_once 'Core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>
    <?php 
    $student_id = $_GET['student_id'];
    $student = getStudentByID($pdo, $student_id);
    ?>
    
    <h1>Edit Student</h1>
    <form action="Core/handleform.php" method="POST">
        <input type="hidden" name="student_id" value="<?php echo htmlspecialchars($student['student_id']); ?>">
        <p><label for="first_name">First Name</label> <input type="text" name="first_name" value="<?php echo htmlspecialchars($student['first_name']); ?>" required></p>
        <p><label for="last_name">Last Name</label> <input type="text" name="last_name" value="<?php echo htmlspecialchars($student['last_name']); ?>" required></p>
        <p><label for="gender">Gender</label> <input type="text" name="gender" value="<?php echo htmlspecialchars($student['gender']); ?>" required></p>
        <p><label for="section">Section</label> <input type="text" name="section" value="<?php echo htmlspecialchars($student['section']); ?>" required></p>
        <p><label for="dream_job">Dream Job</label> <input type="text" name="dream_job" value="<?php echo htmlspecialchars($student['dream_job']); ?>" required></p>
        <p><label for="reason">Reason</label> <input type="text" name="reason" value="<?php echo htmlspecialchars($student['reason']); ?>" required></p>
        <!-- Removed date_added field since it is now automated -->
        <input type="submit" name="editStudentBtn" value="Update">
    </form>
    <a href="index.php">Cancel</a>
</body>
</html>
