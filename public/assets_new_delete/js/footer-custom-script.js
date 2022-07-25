
$.expr[":"].icontains = $.expr.createPseudo(function(arg) {
  return function( elem ) {
      return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
  };
});

// serch for country
$('#search').keyup(function(){
  var query = $(this).val();
  
  $('.list h6:not(:icontains('+ query +'))').slideUp(100);
  $('.list h6:not(:icontains('+ query +'))').next('div').slideUp(100);
  $('.list h6:icontains('+ query +')').slideDown(100);
  $('.list h6:icontains('+ query +')').next('div').slideDown(100);
});
// end country serch

// serch for career
$('#career').keyup(function(){
  var query = $(this).val();
  
  $('.list div:not(:icontains('+ query +'))').slideUp(100);
  $('.list div:not(:icontains('+ query +'))').next('div').slideUp(100);
  $('.list div:icontains('+ query +')').slideDown(100);
  $('.list div:icontains('+ query +')').next('div').slideDown(100);
});
// end career serch

// serch support list

jQuery(document).ready(function($){

$('.live-search-list div').each(function(){
$(this).attr('data-search-term', $(this).text().toLowerCase());
});

$('.live-search-box').on('keyup', function(){

var searchTerm = $(this).val().toLowerCase();

    $('.live-search-list div').each(function(){

        if ($(this).filter('[data-search-term *= ' + searchTerm + ']').length > 0 || searchTerm.length < 1) {
            $(this).show();
        } else {
            $(this).hide();
        }

    });

});

});

// end support
