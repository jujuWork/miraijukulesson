<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <main>
        <h3>Sign Up</h3>
            
        <div class="login">
            <form action="includes/signup.inc.php" method="post">
                <label for="username" class="label">Username:</label>
                    <input type="text" name="username" placeholder="Enter username">
                <label for="password" class="label">Password:</label>
                    <input type="password" name="pwd" placeholder="Enter password">
                <label for="email" class="label">Email:</label>
                    <input type="email" name="email" placeholder="Enter E-mail">
                
                <button type="submit" class="signBtn">Login</button>
            </form>
        </div>
    </main>

</body>
</html>