<!DOCTYPE html>
<link rel="stylesheet" href="css/index.less"></link>
<link rel="stylesheet" href="css/search.less"></link>

<body>
    <div id="header">
    <?php include "./html/header.html" ?>
    </div>
    <div class="container">
        <div class="filter_menu">
            <input class="" placeholder="Que recherchez-vous ?" value="">
            <div class="dropdown">
                Catégorie de pathologie
                <div class="dropdown-content">
                    <ol>
                        <li>
                            <input id="patho_mer" type="checkbox" value="patho_mer">
                            <Label for='patho_mer'>Pathologies de méridien</Label>
                        </li>
                        <li>
                            <input id="patho_vis" type="checkbox" value="patho_vis">
                            <Label for='patho_vis'>Pathologies d’organe/viscère (tsang/fu)</Label>
                        </li>
                        <li>    
                            <input id="patho_mus" type="checkbox" value="patho_mus">
                            <Label for="patho_mus">Pathologies des tendino–musculaires (jing jin)</Label>
                        </li>
                        <li>
                            <input id="patho_bran" type="checkbox" value="patho_bran">
                            <Label id="patho_bran">Pathologie des branches (voies luo)</Label>
                        </li>
                        <li>
                            <input id="patho_vaiss" type="checkbox" value="patho_vaiss">
                            <Label for="patho_vaiss">Pathologies des merveilleux vaisseaux</Label>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="hidden_child_div">
                Caractéristique.s
                <div class="">
                    <ol>
                        <li>
                            <input id="car_int" type="checkbox" value="car_int">
                            <Label for='car_int'>interne</Label>
                        </li>
                        <li>
                            <input id="car_ext" type="checkbox" value="car_ext">
                            <Label for='car_ext'>externe</Label>
                        </li>
                        <li>    
                            <input id="car_plein" type="checkbox" value="car_plein">
                            <Label for="car_plein">plein</Label>
                        </li>
                        <li>
                            <input id="car_vide" type="checkbox" value="car_vide">
                            <Label id="car_vide">vide</Label>
                        </li>
                        <li>
                            <input id="car_chaud" type="checkbox" value="car_chaud">
                            <Label for="car_chaud">chaud</Label>
                        </li>
                        <li>
                            <input id="car_froid" type="checkbox" value="car_froid">
                            <Label for="car_froid">froid</Label>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
    <?php include "./html/footer.html" ?>
    </div> 
</body>