<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    </style>
</head>
<body>
    <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="welcome.php" method="post">
                <label>Username</label>
                <input type="text" name="username">
                <label>Password</label>
                <input type="password" name="password">
                <input type="submit" value="Login">
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>   
</body>
</html>
