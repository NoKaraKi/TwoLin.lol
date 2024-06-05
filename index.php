<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация пользователя</title>
</head>
<body>
    <h2>Регистрация</h2>
    <form action="register.php" method="post">
        <label for="username">Имя пользователя:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <button type="submit">Зарегистрироваться</button>
    </form>
    <form action="login.php" method="post">
    <label for="username">Имя пользователя:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Войти</button>
    
    </form>
</body>
</html>