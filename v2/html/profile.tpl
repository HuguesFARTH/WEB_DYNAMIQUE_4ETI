<link rel="stylesheet" href="../css/profile.less">
<h2 class='text'>Mon profil</h2>
<div class="container-profile">
	<div class="grid">
		<div class="form-group a">
			<label for="name">Nom</label>
            <h3> {$smarty.session.user[0]['last_name']}</h3>
		</div>

		<div class="form-group b">
			<label for="first-name">Prénom</label>
            <h3> {$smarty.session.user[0]['name']}</h3>
		</div>

		<div class="form-group email-group">
			<label for="email">Email (CPE)</label>
            <h3>{$smarty.session.user[0]['email']}</h3>
		</div>

        <div class="form-group">
			<label for="password">Password</label>
            <h3> ********** </h3>
		</div>
        <form action="/?page=profile_form" method="post">
            <div class="button-container">
                <button type="submit" class="button" >Modifier les infos</button>
            </div>
        </form>
		<form action="/logout.php" method="post">
            <div class="button-container">
                <button type="submit" class="button" >deconnection</button>
            </div>
        </form>
	</div>
</div>

