(function (){
  document.addEventListener('DOMContentLoaded', function(){

      var idMissions  = 0;
      var idTechno = 0;
      var idTools = 0;
      var idKeys = 0;

      document.getElementById('addFieldMission').addEventListener('click', function(e){
        // prevent the default behavior
        e.preventDefault();
        // create a field...
        var elementHTML = "<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label' id='mission-"+idMissions+"' data-category='missions'><input class='mdl-textfield__input' type='text' id='sample3' name='mission[]' required><label class='mdl-textfield__label' for='mission[]'></label><button class='mdl-button mdl-js-button mdl-button--icon mdl-button--colored close_but'><i class='material-icons'>close</i></button></div>";

        // append the text
        document.getElementById('missions').insertAdjacentHTML("beforeend",elementHTML);

        // increment the id value;
        idMissions++;

        // add listener
        addList();
      }, false);


      document.getElementById('addFieldTechno').addEventListener('click', function(e){
        // prevent the default behavior
        e.preventDefault();
        // create a field...
        var elementHTML = "<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label' id='techno-"+idTechno+"' data-category='techno'><input class='mdl-textfield__input' type='text' id='sample3' name='technologie[]' required><label class='mdl-textfield__label' for='technologie[]'></label><button class='mdl-button mdl-js-button mdl-button--icon mdl-button--colored close_but'><i class='material-icons'>close</i></button></div>";

        // append the text
        document.getElementById('technology').insertAdjacentHTML("beforeend",elementHTML);

        // increment the id value;
        idTechno++;

        // add listener
          addList();
      }, false);


      document.getElementById('addFieldKey').addEventListener('click', function(e){
        // prevent the default behavior
        e.preventDefault();
        // create a field...
        var elementHTML = "<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label'  data-category='key' id='keys-"+idKeys+"'><input class='mdl-textfield__input' type='text' id='sample3' name='motcle[]' required><label class='mdl-textfield__label' for='motcle[]'></label><button class='mdl-button mdl-js-button mdl-button--icon mdl-button--colored close_but'><i class='material-icons'>close</i></button></div>";



        // append the text
        document.getElementById('keyword').insertAdjacentHTML("beforeend",elementHTML);

        // increment the id value
        idKeys++;

        // add listener
        addList();
      }, false);

      document.getElementById('addFieldOutil').addEventListener('click', function(e){
        // prevent the default behavior
        e.preventDefault();
        // create a field...
        var elementHTML = "<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label' data-category='tools' id='tools-"+idTools+"'><input class='mdl-textfield__input' type='text' id='sample3' name='outil[]' required><label class='mdl-textfield__label' for='outil[]'></label><button class='mdl-button mdl-js-button mdl-button--icon mdl-button--colored close_but'><i class='material-icons'>close</i></button></div>";


        // append the text
        document.getElementById('outils').insertAdjacentHTML("beforeend",elementHTML);

        // increment the id value
        idTools++;

        // add listener
        addList();
      }, false);


      var isHere = document.getElementsByClassName('close_but');
      if(isHere){
        addList();
      }
    });


    // add listener and when click on the cross button -> remove the select field
    function addList(){
      var el = document.getElementsByClassName('close_but');

      for(var i = 0; i < el.length; i++){
        el[i].addEventListener('click', function(e){
          // prevent the default behavior of the button
          e.preventDefault();

          // get the attribute so we can target the right node...
          var attr = this.parentElement.getAttribute('data-category');

          // get the id of the parent element
          var elID = this.parentElement.id;

          // store the id element in this variable
          var eltorm = document.getElementById(elID);

          // remove the elements
          if(attr == "missions"){
            document.getElementById('missions').removeChild(eltorm);
          } else if(attr == "techno"){
            document.getElementById('technology').removeChild(eltorm);
          } else if(attr == "tools"){
            document.getElementById('outils').removeChild(eltorm);
          } else{
            document.getElementById('keyword').removeChild(eltorm);
          }


        });

      }
    }
})();
