<?php
// Example student data
$students = [
    ["id" => 101, "name" => "Atharva", "age" => 21],
    ["id" => 102, "name" => "Riya", "age" => 20],
    ["id" => 103, "name" => "Karan", "age" => 22],
    ["id" => 104, "name" => "Sneha", "age" => 23]
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Portal</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #2c3e50; }
        table { border-collapse: collapse; width: 60%; margin-bottom: 30px; }
        th, td { border: 1px solid #444; padding: 8px; text-align: center; }
        th { background-color: #f4f4f4; }
        .section { margin-bottom: 40px; }
    </style>
</head>
<body>
    <h1>Welcome to the Student Portal</h1>
    <p>Manage your Enrolments, Attendance, Schedules, and Student Info.</p>

    <div class="section">
        <h2>Student Information</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
            </tr>
            <?php foreach($students as $s): ?>
            <tr>
                <td><?php echo $s["id"]; ?></td>
                <td><?php echo $s["name"]; ?></td>
                <td><?php echo $s["age"]; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <div class="section">
        <h2>Enrolments</h2>
        <p>Students can register and view their course enrolments here.</p>
    </div>

    <div class="section">
        <h2>Attendance</h2>
        <p>Track and manage student attendance records.</p>
    </div>

    <div class="section">
        <h2>Schedules</h2>
        <p>View class schedules and academic calendar here.</p>
    </div>
</body>
</html>
