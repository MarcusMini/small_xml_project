<?php
include 'include/header.php';
/*  DEBUT PAGE  */

////////// USE MUSTACHE LIKE SYNTAX USING VUE.JS
?>
<div id="app">
  <div id="input_wrapper">
    <!-- by name -->
    <div class="mdl-textfield mdl-js-textfield">
      <input class="mdl-textfield__input" type="text" id="sample1" v-model="nom">
      <label class="mdl-textfield__label" for="sample1">PAR NOM</label>
    </div>
    <!-- by formation -->
    <div class="mdl-textfield mdl-js-textfield">
      <input class="mdl-textfield__input" type="text" id="sample1" v-model="formation">
      <label class="mdl-textfield__label" for="sample1">PAR FORMATION</label>
    </div>
    <!-- by year -->
    <div class="mdl-textfield mdl-js-textfield">
      <input class="mdl-textfield__input" type="text" id="sample1" v-model="year">
      <label class="mdl-textfield__label" for="sample1">PAR ANNEE</label>
    </div>
  </div>
  <div id="wraper_app">
    <div class="demo-card-square mdl-card mdl-shadow--2dp" v-for="value in usr | filterBy nom in 'nom' | filterBy formation in 'formation' | filterBy year in 'year'">
      <div class="mdl-card__title mdl-card--expand override">
        <h2>{{value.prenom}} <span class="nom">{{value.nom}}</span></h2>
        <h2>{{value.formation}}</h2>
      </div>
      <div class="mdl-card__supporting-text">
        {{value.problematique}}
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect"   href="detail.php?file={{value.link}}">
          Voir la fiche de {{value.prenom}}
        </a>
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect"   href="modification.php?file={{value.link}}">
          Modifier le mémoire
        </a>
      </div>
    </div>
  </div>
</div>
<?php
/*  FIN PAGE     */
echo "<script src='js/script_view.js'></script>";
include 'include/footer.php';
?>
