(function (){
  document.addEventListener('DOMContentLoaded', function(){

    var fileName = location.href.split("/").slice(-1);

    if(fileName[0] == "index.php"){
      document.getElementById('addFieldMission').addEventListener('click', function(e){
        e.preventDefault();

        var elementHTML = "<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label'><input class='mdl-textfield__input' type='text' id='sample3' name='mission[]'><label class='mdl-textfield__label' for='mission[]'></label></div>";


        document.getElementById('missions').insertAdjacentHTML("beforeend",elementHTML);
      }, false);


      document.getElementById('addFieldTechno').addEventListener('click', function(e){
        e.preventDefault();

        var elementHTML = "<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label'><input class='mdl-textfield__input' type='text' id='sample3' name='technologie[]'><label class='mdl-textfield__label' for='technologie[]'></label></div>";


        document.getElementById('technology').insertAdjacentHTML("beforeend",elementHTML);
      }, false);


      document.getElementById('addFieldKey').addEventListener('click', function(e){
        e.preventDefault();

        var elementHTML = "<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label'><input class='mdl-textfield__input' type='text' id='sample3' name='motcle[]'><label class='mdl-textfield__label' for='motcle[]'></label></div>";


        document.getElementById('keyword').insertAdjacentHTML("beforeend",elementHTML);
      }, false);


      document.getElementById('addFieldOutil').addEventListener('click', function(e){
        e.preventDefault();

        var elementHTML = "<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label'><input class='mdl-textfield__input' type='text' id='sample3' name='outil[]'><label class='mdl-textfield__label' for='outil[]'></label></div>";


        document.getElementById('outils').insertAdjacentHTML("beforeend",elementHTML);
      }, false);
    }


    // init array
    var listData;

    // AJAX REQUEST
    var listReq = new XMLHttpRequest();
    listReq.open('GET','listWorker.php');
    listReq.send();

    var dataArray = new Array();

    listReq.onreadystatechange = function(readyState, status){
      if (listReq.readyState == 4) {
        if (listReq.status == 200) {
          listData = JSON.parse(listReq.response);

          // PUSH THE DATA INTO DATAARRAY VARIABLE
          for(var i = 0; i < listData.length; i++){
            dataArray.push(listData[i]);
          }
        } else {
          console.log('reject');
        }
      }
    };

    // instanciate a new vue
    // data.nom is a model of the directive v-for
    new Vue({
      el: '#app',
      data: {
        nom : '',
        formation : '',
        link : '',
        year : '',
        usr : dataArray
      }
    });


  });
})();
