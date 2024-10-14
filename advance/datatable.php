<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Student Management</title>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Student Management</h2>

    <?php
    include("config.php");

    // Fetch all students
    $sql = "SELECT * FROM STUDENTS";
    $stmt = $conn->query($sql);
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Display the students in a table
    echo "<table class='table table-bordered'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>";

    foreach ($students as $student) {
        echo "<tr>
                <td>" . htmlspecialchars($student['id']) . "</td>
                <td>" . htmlspecialchars($student['firstName']) . "</td>
                <td>" . htmlspecialchars($student['email']) . "</td>
                <td>
                    <form method='post' action='datatable.php' style='display:inline;'>
                        <input type='hidden' name='id' value='" . htmlspecialchars($student['id']) . "' />
                        <button type='submit' class='btn btn-warning' name='edit'>Edit</button>
                    </form>
                    <form method='post' action='datatable.php' style='display:inline;'>
                        <input type='hidden' name='id' value='" . htmlspecialchars($student['id']) . "' />
                        <button type='submit' class='btn btn-danger' name='delete' onclick='return confirm(\"Are you sure you want to delete this record?\");'>Delete</button>
                    </form>
                </td>
            </tr>";
    }

    echo "</tbody>
        </table>";

        if (isset($_POST["delete"])) {
        
            $deleteId = $_POST["id"];
            $deleteSql = "DELETE FROM STUDENTS WHERE id = :id";
            $deleteStmt = $conn->prepare($deleteSql);
            $deleteStmt->bindParam(":id", $deleteId);
            $deleteStmt->execute();
            if($deleteStmt){
            $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($students as $student) {   
                echo "". htmlspecialchars($student["id"]) . "";
                echo"". htmlspecialchars($student["name"]) . "";
                echo "". htmlspecialchars($student["email"]) . "";
            }

        }
    }
     // Handle update (if edit button is clicked)
     if (isset($_POST["edit"])) {
        $editId = $_POST["id"];
        $editSql = "SELECT * FROM STUDENTS WHERE id = :id";
        $editStmt = $conn->prepare($editSql);
        $editStmt->bindParam(":id", $editId);
        $editStmt->execute();
        $studentToEdit = $editStmt->fetch(PDO::FETCH_ASSOC);
    }

    // Handle update submission
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
        $updateId = $_POST["id"];
        $updateFirstName = $_POST["firstName"];
        $updateEmail = $_POST["email"];
        $updatePassword = $_POST["password"]; // Get the password input
        $updateSql = "UPDATE STUDENTS SET firstName = :firstName, email = :email, password = :password WHERE id = :id";
        $updateStmt = $conn->prepare($updateSql);
        $updateStmt->bindParam(":firstName", $updateFirstName);
        $updateStmt->bindParam(":email", $updateEmail);
        $updateStmt->bindParam(":password", $updatePassword); // Bind the hashed password

        $updateStmt->bindParam(":id", $updateId);
        $updateStmt->execute();
        header("Location: datatable.php"); // Redirect to avoid resubmission
        exit();
    }
    ?>

    <!-- Update Form -->
    <?php if (isset($studentToEdit)): ?>
        <h3 class="mt-5">Edit Student</h3>
        <form method="post" action="datatable.php">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($studentToEdit['id']); ?>">
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" name="firstName" value="<?php echo htmlspecialchars($studentToEdit['firstName']); ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($studentToEdit['email']); ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter new password (leave blank to keep current)">
            </div>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
            <a href="datatable.php" class="btn btn-secondary">Cancel</a>
        </form>
    <?php endif; ?>

    <a href="register.php" class="btn btn-primary">Register New Student</a>
</div>

<!-- Add Bootstrap JS and jQuery (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
