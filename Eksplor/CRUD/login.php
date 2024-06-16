<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
</head>
<body>
    <h2>Form Login</h2>
    <form method="POST" action="./login_proses.php">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
        
    </form>
</body>
</html>