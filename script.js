   let nombre=document.getElementById("nombre");
   let nombre1=document.getElementById("nombre1");
   let nombre2=document.querySelector(".nombre2");
   let nombre3=document.querySelector(".nombre3");
   let quantite1=document.getElementById("quantite1");
   let quantite2=document.getElementById("quantite2");
   let quantite3=document.getElementById("quantite3");
   let quantitetotal=document.querySelectorAll(".quantitetotal");
   let ok=document.querySelectorAll(".ok");
   let submit=document.querySelector(".submit");
   let groupe=document.querySelector(".groupe");
   let groupe1=document.querySelector(".groupe1");


   submit.style.display="none";

   for(var i=0;i<quantitetotal.length;i++){
     quantitetotal[i].addEventListener("keyup",() =>{
         nombre.innerText=Number(quantite1.value)+Number(quantite2.value)+Number(quantite3.value);
         if((Number(quantite1.value)+Number(quantite2.value)+Number(quantite3.value))>1){
             nombre1.innerText="PLACES";
         }
         else{
             nombre1.innerText="PLACE";
         }
         if((Number(quantite1.value)+Number(quantite2.value)+Number(quantite3.value))==0){
             alert("Veuillez renseigner une quantité de place");
         }
         if((Number(quantite1.value)+Number(quantite2.value)+Number(quantite3.value))>0){
         nombre2.innerText="PRIX TARIFAIRE : "+(((Number(quantite1.value)*9.2)+(Number(quantite2.value)*7.6)+(Number(quantite3.value)*5.9))).toFixed(2)+" €";
         }
         else{
             nombre2.innerText="";
         }
         nombre3.innerText="RESTE "+(Number(quantite1.value)+Number(quantite2.value)+Number(quantite3.value));
});
}



$(document).ready(function() {
 $('.ok').click(function() {
     let check = $('input:checkbox:checked').length;
     if(check>(Number(quantite1.value)+Number(quantite2.value)+Number(quantite3.value))){
         $(this).prop('checked',false);
       
         alert("Vous avez atteint le nombre maximal de place");
     }
     else{
         $(".nombre3").text("RESTE "+(Number(quantite1.value)+Number(quantite2.value)+Number(quantite3.value)-check));
     }
     if(check===(Number(quantite1.value)+Number(quantite2.value)+Number(quantite3.value))){
    submit.disabled=false;
    submit.style.display="inline";
  }
  else{
    submit.disabled=true;
    submit.style.display="none";
  }
 })
});





$(document).ready(function() {
  $('.ok').click(function() {
      let check = $('input:checkbox:checked').length;
      if(check>0){
        quantite1.disabled=true;
        quantite2.disabled=true;
        quantite3.disabled=true;
      
      }
      else{
        quantite1.disabled=false;
        quantite2.disabled=false;
        quantite3.disabled=false;
      
      }
  })
 });

 
$(document).ready(function() {
  $('.groupe1').click(function() {
      let check = $('input:checkbox:checked').length;
      if(check>0){
          alert( "Veuillez désélectionner toutes les cases pour modifier le nombre de places" );
      }
  })
 });

 $(document).ready(function() {
  $('.submit').click(function() {
    quantite1.disabled=false;
    quantite2.disabled=false;
    quantite3.disabled=false;
  })
 });



