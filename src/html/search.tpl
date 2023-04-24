<link rel="stylesheet" href="css/search.less">
</link>
<form class="filter_menu" id="form_menu" action="/search.php" method="post"> {* ou get ? avec du js ?*}
 <input id="keywords" class="" placeholder="Que recherchez-vous ?" value="">
 <div id="meridien_form" class="dropdown"> Meridiens <div class="dropdown-content">
    {foreach from=$meridiens item=$meridien}
      <li>
        <input id="{$meridien.name}" type="checkbox" value="{$meridien.name}" name="{$meridien.name}">
        <Label for='{$meridien.name}'>{$meridien.name}</Label>
      </li>
    {/foreach}
    </div>
  </div>
  <div id="category_form" class="dropdown"> Catégorie de pathologie <div class="dropdown-content">
      <li>
        <input id="patho_mer" type="checkbox" value="m" name="patho_mer">
        <Label for='patho_mer'>Pathologies de méridien</Label>
      </li>
      <li>
        <input id="patho_vis" type="checkbox" value="tf" name="patho_vis">
        <Label for='patho_vis'>Pathologies d’organe/viscère (tsang/fu)</Label>
      </li>
      <li>
        <input id="patho_mus" type="checkbox" value="j" name="patho_mus" >
        <Label for="patho_mus">Pathologies des tendino–musculaires (jing jin)</Label>
      </li>
      <li>
        <input id="patho_bran" type="checkbox" value="l" name="patho_bran">
        <Label id="patho_bran">Pathologie des branches (voies luo)</Label>
      </li>
      <li>
        <input id="patho_vaiss" type="checkbox" value="patho_vaiss" name="patho_vaiss">
        <Label for="patho_vaiss">Pathologies des merveilleux vaisseaux</Label>
      </li>
    </div>
  </div>
  <div id="caracteristique_form" class="dropdown"> Caractéristique.s <div class="dropdown-content">
      <li>
        <input id="car_int" type="checkbox" value="car_int" name="car_int">
        <Label for='car_int'>interne</Label>
      </li>
      <li>
        <input id="car_ext" type="checkbox" value="car_ext" name="car_ext">
        <Label for='car_ext'>externe</Label>
      </li>
      <li>
        <input id="car_plein" type="checkbox" value="car_plein" name="car_plein">
        <Label for="car_plein">plein</Label>
      </li>
      <li>
        <input id="car_vide" type="checkbox" value="car_vide" name="car_vide">
        <Label id="car_vide">vide</Label>
      </li>
      <li>
        <input id="car_chaud" type="checkbox" value="car_chaud" name="car_chaud">
        <Label for="car_chaud">chaud</Label>
      </li>
      <li>
        <input id="car_froid" type="checkbox" value="car_froid" name="car_froid">
        <Label for="car_froid">froid</Label>
      </li>
    </div>
  </div>
  <input type="submit" value="Rechercher" id="search_button">
</form>
<div class="results">
  <h1> Résultats de la recherche</h1>
  <div class="result_page" id="result_page">
  </div>
</div>
<script type="text/javascript" src="../js/search.js"></script>