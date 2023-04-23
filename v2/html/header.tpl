<link rel="stylesheet" href="css/header.less"></link>

<ul>
  <li><a href="/?page=home">Home</a></li>
  <li><a href="/?page=search">Search {$valid_session}</a></li>
  
  {if true} 
    <li><a href="/?page=login">Se connecter</a></li>
  {else}
    <li><a href="/?page=profile">Profile</a></li>
  {/if}
</ul>