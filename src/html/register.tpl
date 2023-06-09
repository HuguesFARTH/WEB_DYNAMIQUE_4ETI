<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href='../css/login.less'>
</head>

</html>

<body class="login-page">
    <div class="login-box">
        <h2 class="heading-login-box">Inscription</h2>
        <form action="/register-form.php" method="post">
            <div class="user-box">
                <input class="user-box-input" type="text" required name="last_name">
                <label class="user-box-label">Nom</label>
            </div>
            <div class="user-box">
                <input class="user-box-input" type="text" required name="name"> 
                <label class="user-box-label">Prenom</label>
            </div>
            <div class="user-box">
                <input class="user-box-input" type="email" required name="email" pattern="[a-zA-Z0-9._%+-]+@cpe\.fr"> 
                <label class="user-box-label">Email (cpe)</label>
            </div>
            <div class="user-box">
                <input class="user-box-input" type="password" required name="password"> 
                <label class="user-box-label">Password</label>
            </div>
            <input class="button" type="submit" value="Inscription">
        </form>
    </div>
</body>