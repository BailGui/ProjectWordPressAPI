$(document).ready(function(){

    console.log("ok ça fonctionne");

    //boucle des témoignages 
 if (document.getElementById('boucle-temoignages')){
    console.log('boucle témoignages');
    let apiURL = 'http://apiwp/wordpress/wp-json/wp/v2/temoignage';

    $.getJSON(apiURL, function(temoins){
        console.log(temoins);
        temoins.foreach(function(element){
            console.log(element);
            $('#boucle-temoignages').append(blocTemoignage(element));
        });
    });
 }

 function blocTemoignage(elem){
    let bloc = '';
 }

});



 