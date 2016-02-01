/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (window.location.host == "localhost")
{
    // Do whatever
    var newlocation = '/agencyDelta/bhojonbilash/';
}
else{
    //for live
    var newlocation = '/';
}

/*JQuery onclick ZIS*/

//FAQ
var flag = false;
$(document).ready(function() {

    //$( ".answer" ).hide();
            var first = true;
            $(".question").click(function() {

               /* var $xyz = $(this).next(".faq_icon");
                var $ans = $(this).next(".answer");
                if (!first) {
                    $ans.toggle();
                }
                $('.answer').not($ans).hide();
                $("span", this).toggleClass("glyphicon-minus glyphicon-plus");
                first = false;*/

                var $ans = $(this).next(".answer");
                if (!first) {
                    $ans.slideToggle();
                    $(this).find('.glyphicon').toggleClass('glyphicon-minus glyphicon-plus')
                }
                $('.answer').not($ans).slideUp().prev('.question').find('.glyphicon').addClass('glyphicon-plus').removeClass('glyphicon-minus');
                first = false;


               //$("span").toggleClass(" glyphicon-minus glyphicon-plus");

    });



});

//TOOLTIP
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
