<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    
    <main>
        <h3>Login</h3>
        
        <div class="login">
            <form action="action.php" method="post">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" class="logBtn">Login</button>
            </form>
        </div>

        <div class="menu">
            <span>
                Don't have an account? <a href="signup.php"> Sign up</a>
            </span>
        </div>
    </main>

</body>
</html>