<link rel="stylesheet" href="css/footer.less"></link>
<ul>
  <li><a href="/?page=home">Home</a></li>
  <li><a href="/?page=search">Search</a></li>
  <li>{if ! !(isset($smarty.session) && isset($smarty.session.user) && isset($smarty.session.user[0]['email']))}
      <a href="/?page=login">Profile</a>
    {else}
      <a href="/?page=profile">Profile</a>
    {/if}
  </li>
  <li><a href="">About</a></li>
</ul>