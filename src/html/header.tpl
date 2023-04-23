<!DOCTYPE html>
<link rel="stylesheet" href="css/index.less"></link>
<link rel="stylesheet" href="css/header.less"></link>
<div id="header">
  <ul>
    <li><a href="/?page=home">Home</a></li>
    <li><a href="/?page=search">Search</a></li>
    <li><a href="/?page=profile">Profile</a></li>
    <li><a href="">About</a></li>
    {if session_status() != 'PHP_SESSION_ACTIVE'} 
      <li>Non Connecté</li>
    {else}
      <li>{$smarty.session.user[0]['email']}</li>
    {/if}
  </ul>
</div>