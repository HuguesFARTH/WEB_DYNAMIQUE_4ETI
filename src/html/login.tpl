<link rel="stylesheet" href='css/login.less'>
<div class="login-box">
  <h2 class="heading-login-box">Login</h2>
  <form action="/login-form.php" method="post">
    <div class="user-box">
      <input class="user-box-input" type="email" required name="email" pattern="[a-zA-Z0-9._%+-]+@cpe\.fr">
      <label class="user-box-label">Username (email cpe)</label>
    </div>
    <div class="user-box">
      <input class="user-box-input" type="password" required name="password">
      <label class="user-box-label">Password</label>
    </div>
    <input class="button" type="submit" value="Connexion">
  </form>
  <h3 class="not-register">Pas encore inscrit ? <a href="/?page=register">Inscrit toi ici !</a>
  </h3>
</div>