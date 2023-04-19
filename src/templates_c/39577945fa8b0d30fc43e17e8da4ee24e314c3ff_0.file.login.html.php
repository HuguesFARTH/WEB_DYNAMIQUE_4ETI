<?php
/* Smarty version 4.3.1, created on 2023-04-19 08:58:32
  from '/var/www/WEB_DYNAMIQUE_4ETI/Static/html/login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_643fad38ddc243_77115563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39577945fa8b0d30fc43e17e8da4ee24e314c3ff' => 
    array (
      0 => '/var/www/WEB_DYNAMIQUE_4ETI/Static/html/login.html',
      1 => 1681894574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643fad38ddc243_77115563 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link type="text/css"  rel="stylesheet" href='../css/login.less'>
</head>

<body class="login-page">
    <div class="login-box">
        <h2 class="heading-login-box">Login</h2>
        <form action="/login-form" method="post">
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
        <h3 class="not-register">Pas encore inscrit ?
        <a href="/register">Inscrit toi ici !</a>
        </h3>
    </div>
</body><?php }
}
