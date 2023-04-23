
{include file="html/header.tpl"}

<!DOCTYPE html>
<html lang="fr">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href='../css/login.less'>
  </head>
  <body>
    <div class='container'>
    <h1 class='text'>Mon profil</h1>
    <p class='text'>Nom : Jean</p>
    <p class='text'>Prénom : Dupont</p>
    <p class='text'>Email : jean.dupont@gmail.com</p>
    <p class='text'>
      Mot de passe :
      <button onclick="togglePassword()">Afficher le mot de passe</button>
    </p>
    <script>
      function togglePassword() {
        var password = document.getElementById("password");
        if (password.type === "password") {
          password.type = "text";
        } else {
          password.type = "password";
        }
      }
    </script>
    <input type="password" id="password" value="monmotdepasse" style="display:none">
    </div>
  </body>
</html>


{include file="html/footer.tpl"}