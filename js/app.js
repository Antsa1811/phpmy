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

$(document).ready(function(){
$("#btnEvoyer").click(function(e){
e.preventDefault();

var destinataire=$("#destinataire").val();
var sujet=$("#sujet").val();
var text=$("#message").val();



var request=$("#request");

$.ajax({
    url:"envoye.php",
    type:"POST",
    data:"destinataire="+destinataire+"&sujet="+sujet+"&message="+text,
    success:function(response)
    {
        if(response=="formeValid")
        {
            request.text("Ajout du formulaire");
            location.href="baseTeste.php";
                

        }else
        {
           
            request.text("Formulaire vide veuillez verifier");
           
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
    console.log(id);

    $.ajax({
        url:"reqModif.php",
        type:"POST",
        data:"titre="+titre+"&auteur="+auteur+"&description="+description+"&id="+id,
        success:function(response)
        {
            if(response=="true")
            {
                request1.text('Mise à jour reussie');
            }
            else
            {
               request1.text('veuillez verifier votre formulaire'); 
            }
        }

//FIN AJAX 
    })
//FIn BOUTTON VERIF FILM
});

//END JQUERY
});