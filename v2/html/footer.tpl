<ul>
  <li><a href="/?page=home">Home</a></li>
  <li><a href="/?page=search">Search</a></li>
  <li><a href="/?page=profile">Profile</a></li>
  <li><a href="">About</a></li>
  {if isset($smarty.session.user) && isset($smarty.session.user[0]['email'])} 
    <li>Non Connecté</li>
  {else}
    <li>{$smarty.session.user[0]['email']}</li>
  {/if}
</ul>