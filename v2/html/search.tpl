<link rel="stylesheet" href="../css/search.less">
</link>
<form class="filter_menu" id="form_menu" method="post"> {* ou get ? avec du js ?*} <input id="keywords" class="" placeholder="Que recherchez-vous ?" value="">
  <div class="dropdown"> Catégorie de pathologie <div class="dropdown-content">
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
    </div>
  </div>
  <div class="dropdown"> Caractéristique.s <div class="dropdown-content">
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
    </div>
  </div>
  <input type="submit" value="Rechercher" id="search_button">
</form>
<div class="results">
  <div class="result_page" id="result_page">
    <div class="result_page_title">
      <h2>Resultat de la recherche</h2>
    </div>
    <div id="result_page_content" class="result_page_content">
      <div class="result_page_content_item">
        <div class="result_page_content_item_title">
          <h3>Titre de la pathologie</h3>
        </div>
        <div class="result_page_content_item_description">
          <p>description de la pathologie</p>
        </div>
      </div>
      <div class="result_page_content_item">
        <div class="result_page_content_item_title">
          <h3>Titre de la pathologie</h3>
        </div>
        <div class="result_page_content_item_description">
          <p>description de la pathologie</p>
        </div>
      </div>
      <div class="result_page_content_item">
        <div class="result_page_content_item_title">
          <h3>Titre de la pathologie</h3>
        </div>
        <div class="result_page_content_item_description">
          <p>description de la pathologie</p>
        </div>
      </div>
      <div class="result_page_content_item">
        <div class="result_page_content_item_title">
          <h3>Titre de la pathologie</h3>
        </div>
        <div class="result_page_content_item_description">
          <p>description de la pathologie</p>
        </div>
      </div>
      <div class="result_page_content_item">
        <div class="result_page_content_item_title">
          <h3>Titre de la pathologie</h3>
        </div>
        <div class="result_page_content_item_description">
          <p>description de la pathologie</p>
        </div>
      </div>
      <div class="result_page_content_item">
        <div class="result_page_content_item_title">
          <h3>Titre de la pathologie</h3>
        </div>
        <div class="result_page_content_item_description">
          <p>description de la pathologie</p>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="../js/search.js"></script>