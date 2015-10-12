$(document).ready(function(){

/*
 *Disable submit action when press enter in 'tel'
 */
    $("#tel input[name='tel']").keydown(function(e){
        ev = e || event;
        if(ev.keyCode==13){ev.preventDefault();}

    });

    if('#info_success'){
        setTimeout(shutInfo, 3000);
    }

    function shutInfo() {
        $("#info_success").slideUp('slow',function(){$("#info_success").remove();});
    }
})

