$(function () {
    $('[data-toggle="popover"]').popover()
})

$(function () {
    $('.example-popover').popover({
        container: 'body'
    })
})

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

function reset(text)
{
    text.text('');
}



$(document).ready(function(){
$("#btnEvoyer").click(function(e){
e.preventDefault();

var destinataire=$("#destinataire").val();
var sujet=$("#sujet").val();
var text=$("#message").val();

var formulaire=$("#baseteste");
 

var resetDestinataire = $("#destinataire");

var request=$("#request");

$.ajax({
    url:"envoye.php",
    type:"POST",
    data:"destinataire="+destinataire+"&sujet="+sujet+"&message="+text,
    success:function(response)
    {
        if(response=="formeValid")
        {
            /*request.text("Ajout du formulaire");
            location.href="baseTeste.php";*/
            formulaire[0].reset();
            toastr.success('Transfert Terminer');
          	
            
                

        }else
        {
           
            //request.text("Formulaire vide veuillez verifier");
            toastr.error('Transfert echouer');
           
        }
    }

    //FORMULAIRE FORM VALIDE




//END AJAX
});
//END Button verificaion email
});



//DEBUT BOUTTON VERIF FILM
$('#btnModif').click(function(e){
    e.preventDefault();
    var titre=$("#titre").val();
    var auteur=$("#auteur").val();
    var description=$("#description").val();

    var request1=$("#request1");
    var id=$("#id").val();
    

    $.ajax({
        url:"reqModif.php",
        type:"POST",
        data:"titre="+titre+"&auteur="+auteur+"&description="+description+"&id="+id,
        success:function(response)
        {
            if(response=="true")
            {
                  toastr.success('Modification reussie Terminer');
            }
            else
            {
              		toastr.error('Echec de la modification');
            }
        }

//FIN AJAX 
    })
//FIn BOUTTON VERIF FILM
});

var formulaire=$("#baseteste");

$("#reset").click(function(e){
    e.preventDefault();
    formulaire[0].reset();

});

//END JQUERY
});