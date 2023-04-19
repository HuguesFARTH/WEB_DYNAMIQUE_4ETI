<!DOCTYPE html>
<link rel="stylesheet" href="css/index.less"></link>
<link rel="stylesheet" href="css/search.less"></link>

<body>
    <div id="header">
    <?php include "./html/header.html" ?>
    </div>
    <div class="container">
        <input class="" placeholder="Que recherchez-vous ?" value="">
        <div class="hidden_child_div">Catégorie de pathologie
            <div class="">
                <Label for='patho_mer'>Pathologies de méridien</Label>
                <input id="patho_mer" type="checkbox" value="patho_mer">

                <Label for='patho_vis'>Pathologies d’organe/viscère (tsang/fu)</Label>
                <input id="patho_vis" type="checkbox" value="patho_vis">
                
                <Label for="patho_mus">Pathologies des tendino–musculaires (jing jin)</Label>
                <input id="patho_mus" type="checkbox" value="patho_mus">

                <Label id="patho_bran">Pathologie des branches (voies luo)</Label>
                <input id="patho_bran" type="checkbox" value="patho_bran">

                <Label for="patho_vaiss">Pathologies des merveilleux vaisseaux</Label>
                <input id="patho_vaiss" type="checkbox" value="patho_vaiss">
            </div>
        </div>

    </div>
    <div id="footer">
    <?php include "./html/footer.html" ?>
    </div> 
</body>