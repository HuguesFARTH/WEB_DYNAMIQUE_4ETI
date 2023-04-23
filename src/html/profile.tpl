<head>
    <link rel="stylesheet" href="../css/profile.less">
</head>
{include file="html/header.tpl"}

<h2 class>Mon profil</h2>
<div class="container">
	<div class="grid">
		<div class="form-group a">
			<label for="name">Nom</label>
            <h3> NOM</h3>
		</div>

		<div class="form-group b">
			<label for="first-name">Prénom</label>
            <h3> PRENOM</h3>
		</div>

		<div class="form-group email-group">
			<label for="email">Email (CPE)</label>
            <h3>EMAIL</h3>
		</div>

        <div class="form-group">
			<label for="password">Password</label>
            <h3> ********** </h3>
		</div>
        <form action="/profile_change" method="post">
            <div class="button-container">
                <button type="submit" class="button" >Modifier les infos</button>
            </div>
        </form>
	</div>
</div>

{include file="html/footer.tpl"}
