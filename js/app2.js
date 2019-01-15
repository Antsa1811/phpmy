/**
 * Created by Antsa on 14/01/2019.
 */
$(document).ready(function(){

    var btnToast=$("#btntoast");

    btnToast.click(function(e){
        e.preventDefault();
        toastr.error("Vous avez cliquer ",{"progressBar":true});
    });

});


