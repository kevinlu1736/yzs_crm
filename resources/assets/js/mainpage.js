$('#hotest td:nth-of-type(1)').css('text-align', 'right');


//$.fn.centerDiv = function(){
//
//    var parent = $(this).parent();
//    var horizontalGap = (parent.width()-$(this).width())/2;
//    var verticalGap = (parent.height()-$(this).height())/2;
//    var left = parent.scrollLeft() + parent.css('left').parseInt() + horizontalGap;
//    var top = parent.scrollTop() + parent.css('top').parseInt() + verticalGap;
//
//
//
//
//}

$.fn.centerDiv = function(){
    var oParent = $(this).parent();
    alert(oParent.width());
    var horizontalGap = (oParent.width() - $(this).width())/2;
    var verticalGap = (oParent.height() - $(this).height())/2;
    $(this).css('left',horizontalGap + 'px');
    $(this).css('top', verticalGap + 'px');
}

$(document).ready(function(){
    $('.testfuck').select2({
        placeholder: "select a taste...",
    });

    $('button').click(function(){
        btnVal = $(this).text();
        var selected=[];
        var exist = false;
        var oData = $(".testfuck").select2("data");
        if(oData){
            $.each(oData, function(i){
                if(btnVal==oData[i].id){
                    exist = true;
                }
//                    alert('fuck' + oData[i].id);
                selected.push(oData[i].id)
            })

        }


        if(exist == false)
        {
            selected.push(btnVal);
        }
        else
        {
            selected.splice(selected.indexOf(btnVal), 1);
        }
//            alert(selected);
        $('.testfuck').val(selected).trigger("change");
    });


})