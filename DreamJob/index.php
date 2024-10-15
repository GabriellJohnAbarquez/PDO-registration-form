<?php require_once 'Core/dbConfig.php'; ?>
<?php require_once 'Core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <style>
        body {
            font-family: "Arial";
        }
        input {
            font-size: 1.5em;
            height: 50px;
            width: 200px;
        }
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h3>Welcome to the Student Management System. Input your details here to register your DREAM JOB</h3>
    <form action="Core/handleform.php" method="POST">
        <p><label for="first_name">First Name</label> <input type="text" name="first_name" required></p>
        <p><label for="last_name">Last Name</label> <input type="text" name="last_name" required></p>
        <p><label for="gender">Gender</label> <input type="text" name="gender" required></p>
        <p><label for="section">Section</label> <input type="text" name="section" required></p>
        <p><label for="dream_job">Dream Job</label> <input type="text" name="dream_job" required></p>
        <p><label for="reason">Reason</label> <input type="text" name="reason" required></p>
        <input type="submit" name="insertNewStudentBtn" value="Register">
    </form>

    <table style="width:50%; margin-top: 50px;">
        <tr>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Section</th>
            <th>Dream Job</th>
            <th>Reason</th>
            <th>Date Added</th>
            <th>Action</th>
        </tr>

        <?php 
        $seeAllStudentRecords = seeAllStudentRecords($pdo); 
        foreach ($seeAllStudentRecords as $row) { ?>
        <tr>
            <td><?php echo htmlspecialchars($row['student_id']); ?></td>
            <td><?php echo htmlspecialchars($row['first_name']); ?></td>
            <td><?php echo htmlspecialchars($row['last_name']); ?></td>
            <td><?php echo htmlspecialchars($row['gender']); ?></td> 
            <td><?php echo htmlspecialchars($row['section']); ?></td>
            <td><?php echo htmlspecialchars($row['dream_job']); ?></td>
            <td><?php echo htmlspecialchars($row['reason']); ?></td>
            <td><?php echo htmlspecialchars($row['date_added']); ?></td>
            <td>
                <a href="editstudent.php?student_id=<?php echo htmlspecialchars($row['student_id']); ?>">Edit</a>
                <a href="deletestudent.php?student_id=<?php echo htmlspecialchars($row['student_id']); ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
