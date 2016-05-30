(function (){
  document.addEventListener('DOMContentLoaded', function(){
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
