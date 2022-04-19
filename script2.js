document.addEventListener('DOMContentLoaded', function() {
    var oModalYouTubeElement = document.getElementById('oModalYouTube')
    oModalYouTubeElement.addEventListener('hide.bs.modal', function (event) {
      document.getElementById('oModalYouTubeTitre').innerHTML = '';
      document.getElementById('oVideoYouTubeiFrame').setAttribute('src', '');
    })
  });
  
  window.addEventListener("DOMContentLoaded", function(e) {
       x = document.getElementsByClassName("cBtnYouTube");
       var i;
       for (i = 0; i < x.length; i++) {
         x[i].addEventListener("click", 
         function (event) {
            event.preventDefault();
            document.getElementById('oModalYouTubeTitre').innerHTML = '<i class="fab fa-youtube"></i> '+this.getAttribute('data-titre');
            document.getElementById('oVideoYouTubeiFrame').setAttribute('src', this.getAttribute('data-url'));
         }, 
         false);
       }
   }, false);