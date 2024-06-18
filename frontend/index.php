<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form action="http://localhost:8081/login.php" method="post">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required minlength="7" pattern="[a-zA-Z0-9]{7,}">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" id="loginButton">Login</button>
    </form>
</div>

</body>
</html>
