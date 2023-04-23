<link rel="stylesheet" href="css/header.less"></link>

<ul>
  <li><a href="/?page=home">Home</a></li>
  <li><a href="/?page=search">Search</a></li>
  {if $valid_session == false} 
    <li><a href="/?page=login">Se connecter</a></li>
  {else}
    <li><a href="/?page=profile">Profile</a></li>
    <li><a href="/logout.php">
      <img src="img/logout.png" alt="logout" width="20" height="20">
      </a></li>
  {/if}
</ul>