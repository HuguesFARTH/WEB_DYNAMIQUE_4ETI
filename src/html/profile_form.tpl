<head>
<link rel="stylesheet" href="../css/profile.less">
</head>
{include file="html/header.tpl"}


<h2>Modifier mon profil</h2>
<div class="container-profile">
    <form action="/profile_form" method="post">
	<div class="grid">
		<div class="form-group">
			<label for="name">Nom</label>
			<input id="name" type="text" name="nom" required>
		</div>

		<div class="form-group">
			<label for="first-name">Prénom</label>
			<input id="first-name" type="text" name="prenom" required>
		</div>

		<div class="form-group email-group">
			<label for="email">Email (CPE)</label>
			<input id="email" type="email" name="email" required>
		</div>


		<div class="form-group">
			<label for="Sender_psid">Code de liaison</label>
			<input id="psid" type="number" name="code" required>
		</div>

        <div class="form-group">
			<label for="password">Password</label>
			<input id="password" type="password" name="password" placeholder="votre mot de passe actuel" required>
		</div>
	</div>

	<div class="button-container">
		<button type="submit" class="button">Enregister les modifications</button>
	</div>
	<% if (locals.error) { %>
		<div class="error-profile">
			<p class="error"><%= error %></p>
		</div>
	<% } %>
</form>
</div>

{include file="html/footer.tpl"}
