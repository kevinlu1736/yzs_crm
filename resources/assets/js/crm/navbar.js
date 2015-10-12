/**
 * navbar hover class
 */
$('#nav_links_left li').hover(function(){
    $(this).addClass('active');
}).mouseout(function(){
    $(this).removeClass('active');
});
