<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    
    <title>Form</title>
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
    <section> 
        <div class="container login-container" >
            <H2>LOGIN</H2>
          <form action="">       
            
            <div class="login">
                <i class='bx bxs-user'></i>
                <input type="text" class="name" placeholder="User ID">
            </div>
            <div class="login">
                <i class='bx bxs-lock' ></i>
                <input type="password" class="name" placeholder="Password">

            </div>
            <a href="">forgot password</a>
            <div class="submit">
                <button type="submit">Sign In</button>
            </div>
         </form> 
        </div>
    </section>
</body>
</html>