<?php require_once 'Core/dbConfig.php'; ?>
<?php require_once 'Core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Student</title>
    <style>
        body {
            font-family: "Arial";
        }
    </style>
</head>
<body>
    <h1>Are you sure you want to delete this user?</h1>
    <?php 
    $getStudentById = getStudentByID($pdo, $_GET['student_id']); // Corrected function name
    ?>
    <form action="Core/handleform.php?student_id=<?php echo htmlspecialchars($_GET['student_id']); ?>" method="POST">
        <div class="studentContainer" style="border-style: solid; font-family: 'Arial';">
            <p>First Name: <?php echo htmlspecialchars($getStudentById['first_name']); ?></p>
            <p>Last Name: <?php echo htmlspecialchars($getStudentById['last_name']); ?></p>
            <p>Gender: <?php echo htmlspecialchars($getStudentById['gender']); ?></p>
            <p>Section: <?php echo htmlspecialchars($getStudentById['section']); ?></p>
            <p>Dream Job: <?php echo htmlspecialchars($getStudentById['dream_job']); ?></p>
            <p>Reason: <?php echo htmlspecialchars($getStudentById['reason']); ?></p>
            <p>Date Added: <?php echo htmlspecialchars($getStudentById['date_added']); ?></p>
        </div>
        <input type="submit" name="deleteStudentBtn" value="Delete">
    </form>
    <a href="index.php">Cancel</a>
</body>
</html>
