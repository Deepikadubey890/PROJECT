
<?php
require 'regtration.php';
?>



<html>
    <head>
        <title>login and registration</title>
        <link rel="stylesheet" type="text/css" href="style.css"></link>
        <link rel="stylesheet"type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"></link>
</head>
<body>

    <div class="container">
        <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left" >
                <h2>Login In </h2>
                <form action="regtration.php" method="POST">
                    <div class="form-group">
                        <label>Mobileno</label>
                        <input type="number" name="mobile" class="form-control"required="">
                    </div>
                        <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control"required="">
                    </div>
                    <button type="submit" name="loginbtn"class="btn btn-primary">Log In</button>
                </form>
            </div>
            
            <div class="col-md-6 login-right" >
                <h2>Register Here! </h2>
                <form action="./regtration.php" method="post">
                <div class="form-group">
                        <label>Mobileno</label>
                        <input type="number " name="mobile" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text " name="username" class="form-control" required>
                    </div>
                
                        <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control"required="">
                    </div>
                    <button type="submit "name="registerbtn" class="btn btn-primary">Register</button>

                </form>
            </div>
        
        </div>
        </div>
    </div>
</body>
</html>