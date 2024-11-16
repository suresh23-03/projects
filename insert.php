<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLOYEE</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  
</head>

<body>
    <section >
        <div class="navbar-toggler">
            <nav class="navbar">
                <div class="logo">
                    <a href="#">
                        <img src="img/yamee_logo-removebg-preview.png" alt="yameecluster">
                    </a>
                </div>
                <ul class="navbar-menu">
                    <li><a href="login.php" class="nav-link">Login</a></li>
                    <li><a href="rigister.php" class="nav-link">Register</a></li>
                    <li><a href="admin.php" class="nav-link">Admin</a></li>
                </ul>
            </nav>
        </div>
    </section>
<?php
include 'config.php'; // Include your database configuration file

// Retrieve form data
$employee_name = strtoupper(trim($_POST['fullname']));
$employee_id = strtoupper(trim($_POST['Employeeid']));
$phone_number = trim($_POST['number']);
$dob = $_POST['age'];
$gender = $_POST['gender'];
$email = trim($_POST['gmail']);
$education =isset($_POST['education']);
$skills = isset($_POST['skils']) ? implode(', ', $_POST['skils']) : '';
$designation = strtoupper(trim($_POST['Designation']));
$salary = trim($_POST['Salary']);
$duration = strtoupper(trim($_POST['Duration']));
$aadhar_number = trim($_POST['Aadhar-number']);
$pan_number = trim($_POST['Pan-number']);
$city = strtoupper(trim($_POST['city']));
$hint = trim($_POST['hint']);

// Handle file uploads
$target_dir = "uploads/";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

$photo_target_file = $target_dir . basename($_FILES["photo"]["name"]);
$resume_target_file = $target_dir . basename($_FILES["resume"]["name"]);
$photo_file_type = strtolower(pathinfo($photo_target_file, PATHINFO_EXTENSION));
$resume_file_type = strtolower(pathinfo($resume_target_file, PATHINFO_EXTENSION));

$uploadOk = 1;

// Check file size (optional)
if ($_FILES["photo"]["size"] > 500000 || $_FILES["resume"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if (!in_array($photo_file_type, ['jpg', 'png', 'jpeg', 'gif']) || !in_array($resume_file_type, ['pdf', 'doc', 'docx'])) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed for photos and PDF, DOC, DOCX files are allowed for resumes.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $photo_target_file) && move_uploaded_file($_FILES["resume"]["tmp_name"], $resume_target_file)) {
        // Prepare an SQL statement
        $stmt = $conn->prepare("INSERT INTO `employee-details` (`ename`, `emid`, `number`, `dob`, `gender`, `gmail`, `education`, `skills`, `designation`, `salary`, `duration`, `aadhar`, `pan`, `city`, `photo`, `resume`, `hint`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        // Check if the prepare statement is successful
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }

        $stmt->bind_param("sssssssssssssssss", $employee_name, $employee_id, $phone_number, $dob, $gender, $email, $education, $skills, $designation, $salary, $duration, $aadhar_number, $pan_number, $city, $photo_target_file, $resume_target_file, $hint);

        // Execute the statement
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . htmlspecialchars($stmt->error);
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Sorry, there was an error uploading your files.";
    }
}

// Close the connection
$conn->close();
?>


<?php
include 'config.php'; // Include your database configuration file
$employee_name = strtoupper(trim($_POST['fullname']));

$aadhar_number = trim($_POST['Aadhar-number']);


// Handle file uploads
$target_dir = "uploads/";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}


// Retrieve form data
$employee_name = strtoupper(trim($_POST['fullname']));
$aadhar_number = trim($_POST['Aadhar-number']); // Assuming Aadhar Number is entered in the form

// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO `user` (`emname`, `aadhar`) VALUES (?,?)");

// Check if the prepare statement is successful
if ($stmt === false) {
    echo "Prepare failed for users: " . htmlspecialchars($conn->error);
} else {
    // Bind parameters to the statement
    $stmt->bind_param("ss", $employee_name, $aadhar_number);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Execute failed for users: " . htmlspecialchars($stmt->error);
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>



</body>

</html>
