<html>
<head>
<title> User Login And Registration </title> 
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css"
 href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <div class="login-box">
    <div class="row">
        <div class = "col-md-6 login-left">
            <h2>Sign-In</h2>
            <form action="validation.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" class="form-control" required>

                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>

                </div>
                            <div>
                        <input type="checkbox" name="remember"
                                            checked>
                        <label for="scales">Remember me</label>
                                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>

        </div>

        <div class = "col-md-6 login-right">
            <h2>Sign-Up</h2>
            <form action="registration.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" class="form-control" required>

                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>

                </div>
                
                <div class="form-group">
                    <label>E-Mail</label>
                    <input type="E-Mail" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label>Contact</label>
                    <input type="Contact" name="contact" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary" style="position:absolute;top:409px">Register</button>
            </form>

        </div>


    </div>
    </div>
</div>
</body>
</html>