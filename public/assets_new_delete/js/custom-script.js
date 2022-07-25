  // Datatable code start

$(document).ready(function() {
   
  var table = $('#example').DataTable({ 
        select: false,
        "columnDefs": [{
            className: "Name", 
            "targets":[0],
            "visible": false,
            "searchable":false
        }]
    });//End of create main table
});
$(document).ready(function() {

  var table = $('#prospecting_example').DataTable({ 
        select: false,
        "columnDefs": [{
            className: "Name", 
            "targets":[0],
            "visible": false,
            "searchable":false
        }]
    });//End of create main table
});

function activestatus_func() {
  var x = document.getElementById("activestatus");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
// end datatable

$(document).on("click",".update_list",function() {
    var list_name = $(this).attr("data-product_id");
    $('.list_name').val($(this).data('status-text'))
    $('#date').html(list_name);
    console.log(list_name);
});

function openaccountdetail(accountdetail) {
  var i;
  var x = document.getElementsByClassName("account");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(accountdetail).style.display = "block";  
}


function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// country check 
$(".answer").hide();
$(document).on("click",".country_check",function() {
  var count = $('.country_check:checked').length;
  $('#check_count').text(count+' countries will be hidden from search results');
  if($(this).is(":checked")) {
      $(".answer").show();
  }
  $("#clear" ).click(function() {
      $('.country_check').prop('checked', false);
      var count = $('.country_check:checked').length;
      $('#check_count').text(count+' countries will be hidden from search results');
});
});

// country check end

// prospecting js
$(".filter_save").hide();
$(document).on("click",".filter_prospecting",function() {
  var count = $('.filter_prospecting:checked').length;
  $('#check_count').text(count+' people selected');
  if($(this).is(":checked")) {
      $(".filter_save").show();
  }
  $("#clear" ).click(function() {
      $('.filter_prospecting').prop('checked', false);
      var count = $('.filter_prospecting:checked').length;
      $('#check_count').text(count+' people selected');
});
});

// end prospecting js
