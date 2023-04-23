<!DOCTYPE html>
<link rel="stylesheet" href="css/index.less"></link>
<link rel="stylesheet" href="css/header.less"></link>
<div id="header">
  <ul>
    <li><a href="/?page=home">Home</a></li>
    <li><a href="/?page=search">Search</a></li>
    <li><a href="/?page=profile">Profile</a></li>
    <li><a href="">About</a></li>
    {if isset($smarty.session.user) && isset($smarty.session.user[0]['email'])} 
      <li>{$smarty.session.user[0]['email']}</li>
    {else}
      <li>Non Connecté</li>
    {/if}
  </ul>
</div>