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


    <section class="main-container">
        <div class="container-2">
            <img src="img/img4.webp" alt="">
        </div> 
        
        <div class="container-1">
            <h2><i class='bx bx-group'></i>EMPLOYEE REGISTER</h2>
            <form action="insert.php" method="POST" enctype="multipart/form-data">

<div class="form-group">
    <label for="name">Employee Name:</label>
    <input type="text" class="form-control uppercase-input no-numbers-input" id="fullname" name="fullname"
        placeholder="Enter your name" required value="<?php echo isset($_POST['fullname']) ? htmlspecialchars($_POST['fullname']) : ''; ?>">
</div>

<div class="form-group">
    <label for="name">Employee id:</label>
    <input type="text" class="form-control uppercase-input no-numbers-input" id="Employeeid" name="Employeeid"
        maxlength="10" placeholder="" required value="<?php echo "YC_00" ?>">
</div>

<div class="form-group">
    <label for="number">Phone Number:</label>
    <input type="tel" id="number" name="number" minlength="10" maxlength="10" placeholder="Enter your number"
        value="<?php echo isset($_POST['number']) ? htmlspecialchars($_POST['number']) : ''; ?>">
</div>

<div class="form-group">
    <label for="age">DOB:</label>
    <input type="date" id="age" name="age" placeholder="Enter your age" required
        value="<?php echo isset($_POST['age']) ? htmlspecialchars($_POST['age']) : ''; ?>">
</div>

<div class="form-group">
    <label>Gender:</label>
    <div class="Male">
        <input type="radio" id="male" name="gender" value="male" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'male') ? 'checked' : ''; ?>>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'female') ? 'checked' : ''; ?>>
        <label for="female">Female</label>
    </div>
</div>

<div class="form-group">
    <label for="gmail">Gmail:</label>
    <input type="email" id="gmail" name="gmail" placeholder="Enter your Gmail" required
        value="<?php echo isset($_POST['gmail']) ? htmlspecialchars($_POST['gmail']) : ''; ?>">
</div>

<div class="form-group">
    <label>Education:</label>
    <select name="education"<?php echo isset($_POST['education']) ?>id="skils" class="Male">
        <option value="Bca" >Bca</option>
        <option value="bsc" >Bsc</option>
        <option value="mca" >MCA</option>
        <option value="msc" >Msc</option>
        <option value="mba" >Mba</option>
        <option value="mcom">Mcom</option>
    </select>
</div>

<div class="form-group">
    <label for="select">Skills</label>
    <div class="Male">
        <input type="checkbox" id="html" name="skils[]" value="HTML" <?php echo (isset($_POST['skils']) && in_array('HTML', $_POST['skils'])) ? 'checked' : ''; ?>>
        <label for="html">HTML</label>
        <input type="checkbox" id="css" name="skils[]" value="CSS" <?php echo (isset($_POST['skils']) && in_array('CSS', $_POST['skils'])) ? 'checked' : ''; ?>>
        <label for="css">CSS</label>
        <input type="checkbox" id="js" name="skils[]" value="JS" <?php echo (isset($_POST['skils']) && in_array('JS', $_POST['skils'])) ? 'checked' : ''; ?>>
        <label for="js">JS</label>
        <input type="checkbox" id="php" name="skils[]" value="PHP" <?php echo (isset($_POST['skils']) && in_array('PHP', $_POST['skils'])) ? 'checked' : ''; ?>>
        <label for="php">PHP</label>
    </div>
</div>

<div class="form-group">
    <label for="designation">Designation:</label>
    <input type="text" class="form-control uppercase-input no-numbers-input" id="Designation" name="Designation"
        placeholder="Enter your Designation" required value="<?php echo isset($_POST['Designation']) ? htmlspecialchars($_POST['Designation']) : ''; ?>">
</div>

<div class="form-group">
    <label for="Salary">Salary CTC:</label>
    <input type="tel" id="Salary" name="Salary" maxlength="7" placeholder="Enter your Salary"
        value="<?php echo isset($_POST['Salary']) ? htmlspecialchars($_POST['Salary']) : ''; ?>">
</div>

<div class="form-group">
    <label for="Duration">Duration:</label>
    <input type="text" class="form-control uppercase-input no-numbers-input" id="Duration" name="Duration"
        placeholder="Enter From-To" required value="<?php echo isset($_POST['Duration']) ? htmlspecialchars($_POST['Duration']) : ''; ?>">
</div>

<div class="form-group">
    <label for="Aadhar-number">Aadhar Number:</label>
    <input type="tel" id="Aadhar-number" name="Aadhar-number" maxlength="12" placeholder="Enter your Aadhar number only"
        value="<?php echo isset($_POST['Aadhar-number']) ? htmlspecialchars($_POST['Aadhar-number']) : ''; ?>">
</div>

<div class="form-group">
    <label for="Pan-number">Pan Number:</label>
    <input type="tel" id="Pan-number" name="Pan-number" maxlength="10" placeholder="Enter your Pan number only"
        value="<?php echo isset($_POST['Pan-number']) ? htmlspecialchars($_POST['Pan-number']) : ''; ?>">
</div>

<div class="form-group">
    <label for="City">City:</label>
    <input type="text" class="form-control uppercase-input no-numbers-input" id="city" name="city"
        placeholder="Enter your city" required value="<?php echo isset($_POST['city']) ? htmlspecialchars($_POST['city']) : ''; ?>">
</div>

<div class="form-group">
    <label for="Photo">Photo:</label>
    <input type="file" id="photo" name="photo" required>
</div>

<div class="form-group">
    <label for="resume">Resume:</label>
    <input type="file" id="resume" name="resume" required>
</div>

<div class="form-group">
    <label for="HINT">Hint:</label>
    <input type="text" id="hint" name="hint" placeholder="other" required value="<?php echo isset($_POST['hint']) ? htmlspecialchars($_POST['hint']) : ''; ?>">
</div>

<br>
<button type="submit">Sign Up</button>

</form>

            
        </div>
    </section>
    
</body>

</html>