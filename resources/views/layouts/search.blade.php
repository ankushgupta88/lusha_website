 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
                $(document).ready(function() {
                    var table = $('#people_list').DataTable();
                     var table1 = $('#company_list2').DataTable();
                    
                });
                
                $(function(){
   $('body').on('click', '.show_company_detail', function () {
    
        var company_id = $(this).attr("data-company_id");
         jQuery.noConflict(); 
        $("#show_company_model").modal('show');
        
         $.ajax({
            type: "GET",
            url: base_url+'/get-company-details/',
            data: {
                company_id: company_id,
            },
            success: function (response){
                $('.show_company_results').html(response);
            }
    
    });
}); 


});
            </script>
            
            <script>
             //$_REQUEST['job_company_name'];
                 $(document).ready(function() {
                    var headesearchname =  $("#headesearchname").val();
                  
                     if(headesearchname != ""){
                       
    var filter_name = [];
            
            //Get Input Val
            const text = $("#headesearchname").val();
           filter_name.push(text);

        if(filter_name == ""){
                
      location.reload();
                }else{
                    $("#filter-data1").val(filter_name);
                    
                }
         
        $.ajax({
            type: "GET",
            url: base_url+'/search-single-company/',
            data: {
                job_company_name: filter_name,
                history: filter_name,
                filter_type:"job_company_name",
                name:"Company name"
            },
            beforeSend: function() {
                $('.show_filter_company_list_msg').show();
            },
            success: function (response){
                
                $('.show_filter_company_list_msg').hide();
                $('.show_filter_company_list').html(response);
                $('#People').hide();
                $('#Companies').hide();
                 $(".filter_search").attr("disabled", false);
            }
        });
        
                     }
    
      
   
          
 
     });
            </script>
    <script>
    

 
   $('#answers1').change(function(){
    
        $('.clear-btn').show();
         $('.save-btn').show();
   var options = document.getElementById('answers1').selectedOptions;
   var filter_name = Array.from(options).map(({ value }) => value);
 

  // $(this).find(':selected').data('data-select2-id',"1");

        if(filter_name == ""){
                
      location.reload();
                }else{
                    $("#filter-data1").val(filter_name);
                    
                }
         
        $.ajax({
            type: "GET",
            url: base_url+'/search-single-company/',
            data: {
                job_company_name: filter_name,
                history: filter_name,
                filter_type:"job_company_name",
                name:"Company name"
            },
            beforeSend: function() {
                $('.show_filter_company_list_msg').show();
            },
            success: function (response){
                
                $('.show_filter_company_list_msg').hide();
                $('.show_filter_company_list').html(response);
                $('#People').hide();
                $('#Companies').hide();
                 $(".filter_search").attr("disabled", false);
            }
        });
        
          
 
     });
     
      $("#answers1").select2({
          placeholder: "Enter Company name",
          allowClear: true,
          
         
      }).on('select2:open', () => {
      let a = $(this).data('select2');
        if ($('.include-btn').length == 0) {
        $(".select2-results:not(:has(a))").append('<div class="include-btn"> <div class="btn-group" role="group" aria-label="Basic radio toggle button group"> <label class="btn btn-outline-primary" for="btnradio1">Include</label> <label class="btn btn-outline-primary" for="btnradio2">Exclude</label> </div> </div>'
        
        
        
        
        );
}
});
         </script>
    <script>
       $('#answers2').change(function(){
     $('.clear-btn').show();
         $('.save-btn').show();
   var options = document.getElementById('answers2').selectedOptions;
   var filter_name = Array.from(options).map(({ value }) => value);
     
        if(filter_name == ""){
                
      location.reload();
                }else{
                    $("#filter-data2").val(filter_name);
                    
                }
        $.ajax({
            type: "GET",
            url: base_url+'/search-single-company/',
            data: {
                job_company_location_name: filter_name,
                 history: filter_name,
                filter_type:"job_company_location_name",
                name:"Company HQ location"
            },
            beforeSend: function() {
                $('.show_filter_company_list_msg').show();
            },
            success: function (response){
                $('.show_filter_company_list_msg').hide();
                $('.show_filter_company_list').html(response);
                $('#People').hide();
                $('#Companies').hide();
                 $(".filter_search").attr("disabled", false);
            }
        });
       });
        
        $("#answers2").select2({
          placeholder: "Enter Company HQ location",
          allowClear: true,
          
         
      }).on('select2:open', () => {
      let a = $(this).data('select2');
        if ($('.include-btn').length == 0) {
        $(".select2-results:not(:has(a))").append('<div class="include-btn"> <div class="btn-group" role="group" aria-label="Basic radio toggle button group"> <label class="btn btn-outline-primary" for="btnradio1">Include</label> <label class="btn btn-outline-primary" for="btnradio2">Exclude</label> </div> </div>'
        
        
        
        
        );
}
});
      
      
    </script>
    <script>
       $('#answers3').change(function(){
     $('.clear-btn').show();
         $('.save-btn').show();
   var options = document.getElementById('answers3').selectedOptions;
   var filter_name = Array.from(options).map(({ value }) => value);
     
        if(filter_name == ""){
                
      location.reload();
                }else{
                    $("#filter-data3").val(filter_name);
                    
                }
        $.ajax({
            type: "GET",
            url: base_url+'/search-single-company/',
            data: {
                job_company_industry: filter_name,
                 history: filter_name,
                filter_type:"job_company_industry",
                name:"Industry"
            },
            beforeSend: function() {
                $('.show_filter_company_list_msg').show();
            },
            success: function (response){
                $('.show_filter_company_list_msg').hide();
                $('.show_filter_company_list').html(response);
                $('#People').hide();
                $('#Companies').hide();
                 $(".filter_search").attr("disabled", false);
            }
        });
       });
        
        $("#answers3").select2({
          placeholder: "Enter Industry",
          allowClear: true,
        
      }).on('select2:open', () => {
      let a = $(this).data('select2');
        if ($('.include-btn').length == 0) {
        $(".select2-results:not(:has(a))").append('<div class="include-btn"> <div class="btn-group" role="group" aria-label="Basic radio toggle button group"> <label class="btn btn-outline-primary" for="btnradio1">Include</label> <label class="btn btn-outline-primary" for="btnradio2">Exclude</label> </div> </div>'
        
        
        
        
        );
}
});
      
      
    </script>
    <script>
       $('#answers4').change(function(){
     $('.clear-btn').show();
         $('.save-btn').show();
   var options = document.getElementById('answers4').selectedOptions;
   var filter_name = Array.from(options).map(({ value }) => value);
     
        if(filter_name == ""){
                
      location.reload();
                }else{
                    $("#filter-data4").val(filter_name);
                    
                }
        $.ajax({
            type: "GET",
            url: base_url+'/search-single-company/',
            data: {
                job_company_size: filter_name,
                 history: filter_name,
                filter_type:"job_company_size",
                name:"Employee headcount"
            },
            beforeSend: function() {
                $('.show_filter_company_list_msg').show();
            },
            success: function (response){
                $('.show_filter_company_list_msg').hide();
                $('.show_filter_company_list').html(response);
                $('#People').hide();
                $('#Companies').hide();
                 $(".filter_search").attr("disabled", false);
            }
        });
       });
        
        $("#answers4").select2({
          placeholder: "Enter Employee headcount",
          allowClear: true,
        
      });
      
    </script>
    <script>
       $('#answers5').change(function(){
     $('.clear-btn').show();
         $('.save-btn').show();
   var options = document.getElementById('answers5').selectedOptions;
   var filter_name = Array.from(options).map(({ value }) => value);
     
        if(filter_name == ""){
                
      location.reload();
                }else{
                    $("#filter-data5").val(filter_name);
                    
                }
        $.ajax({
            type: "GET",
            url: base_url+'/search-single-company/',
            data: {
                job_company_founded: filter_name,
                 history: filter_name,
                filter_type:"job_company_founded",
                name:"Year founded"
            },
            beforeSend: function() {
                $('.show_filter_company_list_msg').show();
            },
            success: function (response){
                $('.show_filter_company_list_msg').hide();
                $('.show_filter_company_list').html(response);
                $('#People').hide();
                $('#Companies').hide();
                 $(".filter_search").attr("disabled", false);
            }
        });
       });
        
        $("#answers5").select2({
          placeholder: "Enter Year founded",
          allowClear: true,
        
      });
      
    </script>
    <script>
       $('#answers6').change(function(){
     $('.clear-btn').show();
         $('.save-btn').show();
   var options = document.getElementById('answers6').selectedOptions;
   var filter_name = Array.from(options).map(({ value }) => value);
     
        if(filter_name == ""){
                
      location.reload();
                }else{
                    $("#filter-data6").val(filter_name);
                    
                }
        $.ajax({
            type: "GET",
            url: base_url+'/search-single-company/',
            data: {
                contact_name: filter_name,
                 history: filter_name,
                filter_type:"contact_name",
                name:"Contact name",
                search_type:1,
            },
            beforeSend: function() {
                $('.show_filter_company_list_msg').show();
            },
            success: function (response){
                $('.show_filter_company_list_msg').hide();
                $('.show_filter_company_list').html(response);
                $('#People').hide();
                $('#Companies').hide();
                 $(".filter_search").attr("disabled", false);
            }
        });
       });
        
        $("#answers6").select2({
          placeholder: "Enter Year founded",
          allowClear: true,
        
      });
      
    </script>
    <script>
       $('#answers7').change(function(){
     $('.clear-btn').show();
         $('.save-btn').show();
   var options = document.getElementById('answers7').selectedOptions;
   var filter_name = Array.from(options).map(({ value }) => value);
     
        if(filter_name == ""){
                
      location.reload();
                }else{
                    $("#filter-data7").val(filter_name);
                    
                }
        $.ajax({
            type: "GET",
            url: base_url+'/search-single-company/',
            data: {
                job_company_location_country: filter_name,
                 history: filter_name,
                filter_type:"job_company_location_country",
                name:"Contact location"
            },
            beforeSend: function() { 
                $('.show_filter_company_list_msg').show();
            },
            success: function (response){
                $('.show_filter_company_list_msg').hide();
                $('.show_filter_company_list').html(response);
                $('#People').hide();
                $('#Companies').hide();
                 $(".filter_search").attr("disabled", false);
            }
        });
       });
        
        $("#answers7").select2({
          placeholder: "Enter Contact location",
          allowClear: true,
        
      }).on('select2:open', () => {
      let a = $(this).data('select2');
        if ($('.include-btn').length == 0) {
        $(".select2-results:not(:has(a))").append('<div class="include-btn"> <div class="btn-group" role="group" aria-label="Basic radio toggle button group"> <label class="btn btn-outline-primary" for="btnradio1">Include</label> <label class="btn btn-outline-primary" for="btnradio2">Exclude</label> </div> </div>'
        
        
        
        
        );
}
});
      
    </script>
     <script>
       $('#answers8').change(function(){
     $('.clear-btn').show();
         $('.save-btn').show();
   var options = document.getElementById('answers8').selectedOptions;
   var filter_name = Array.from(options).map(({ value }) => value);
     
        if(filter_name == ""){
                
      location.reload();
                }else{
                    $("#filter-data8").val(filter_name);
                    
                }
        $.ajax({
            type: "GET",
            url: base_url+'/search-single-company/',
            data: {
                job_title_role: filter_name,
                 history: filter_name,
                filter_type:"job_title_role",
                name:"Department"
            },
            beforeSend: function() {
                $('.show_filter_company_list_msg').show();
            },
            success: function (response){
                $('.show_filter_company_list_msg').hide();
                $('.show_filter_company_list').html(response);
                $('#People').hide();
                $('#Companies').hide();
                 $(".filter_search").attr("disabled", false);
            }
        });
       });
        
        $("#answers8").select2({
          placeholder: "Enter Department",
          allowClear: true,
        
      });
      
    </script>
    <script>
       $('#answers9').change(function(){
     $('.clear-btn').show();
         $('.save-btn').show();
   var options = document.getElementById('answers9').selectedOptions;
   var filter_name = Array.from(options).map(({ value }) => value);
     
        if(filter_name == ""){
                
      location.reload();
                }else{
                    $("#filter-data9").val(filter_name);
                    
                }
        $.ajax({
            type: "GET",
            url: base_url+'/search-single-company/',
            data: {
                seniority: filter_name,
                 history: filter_name,
                filter_type:"seniority",
                name:"Seniority"
            },
            beforeSend: function() {
                $('.show_filter_company_list_msg').show();
            },
            success: function (response){
                $('.show_filter_company_list_msg').hide();
                $('.show_filter_company_list').html(response);
                $('#People').hide();
                $('#Companies').hide();
                 $(".filter_search").attr("disabled", false);
            }
        });
       });
        
        $("#answers9").select2({
          placeholder: "Enter Seniorit",
          allowClear: true,
        
      });
       
    </script>
    <script>
       $('#answers10').change(function(){
     $('.clear-btn').show();
         $('.save-btn').show();
   var options = document.getElementById('answers10').selectedOptions;
   var filter_name = Array.from(options).map(({ value }) => value);
     
        if(filter_name == ""){
                
      location.reload();
                }else{
                    $("#filter-data10").val(filter_name);
                    
                }
        $.ajax({
            type: "GET",
            url: base_url+'/search-single-company/',
            data: {
                job_title: filter_name,
                history: filter_name,
                filter_type:"job_title",
                name:"Job title"
            },
            beforeSend: function() {
                $('.show_filter_company_list_msg').show();
            },
            success: function (response){
                $('.show_filter_company_list_msg').hide();
                $('.show_filter_company_list').html(response);
                $('#People').hide();
                $('#Companies').hide();
                 $(".filter_search").attr("disabled", false);
            }
        });
       });
        
        $("#answers10").select2({
          placeholder: "Enter Job title",
          allowClear: true,
        
      }).on('select2:open', () => {
      let a = $(this).data('select2');
        if ($('.include-btn').length == 0) {
        $(".select2-results:not(:has(a))").append('<div class="include-btn"> <div class="btn-group" role="group" aria-label="Basic radio toggle button group"> <label class="btn btn-outline-primary" for="btnradio1">Include</label> <label class="btn btn-outline-primary" for="btnradio2">Exclude</label> </div> </div>'
        );
}
});
       
    </script>
    
    <script>
   

       $('.searchhistory').click(function(){
           
        
           var history_id = $(this).attr('data-history');
           
           var filter_type = $(".history_filter_type"+history_id).val();
          
           var name = $(".history_filter_name"+history_id).val();
           
            var history_array = $(".history_filter_type_array"+history_id).val();
            
            //Empty Array
            var testval = [];
            
            //Get Input Val
            const text = $(".history_filter_type_array"+history_id).val();
            const arr = text.split(',');
            
            $.each(arr, function(key, entry) {
              testval.push(entry);
            });
            
          
        
    

        $.ajax({
            type: "GET",
            url: base_url+'/search-single-company/',
            data: {
                job_title: testval,
                history: testval,
                filter_type:filter_type,
                name:name,
                all_filter:testval
            },
            beforeSend: function() {
                $('.show_filter_company_list_msg').show();
            },
            success: function (response){
                $('.show_filter_company_list_msg').hide();
                $('.show_filter_company_list').html(response);
                $('#People').hide();
                $('#Companies').hide();
                 $(".filter_search").attr("disabled", false);
            }
        });
       });
        
        $('.searchsavedhistory').click(function(){
           
       
           var history_id = $(this).attr('data-history');
           
           var filter_type = $(".history_filter_type"+history_id).val();
          
           var name = $(".history_filter_name"+history_id).val();
           
            var history_array = $(".history_filter_type_array"+history_id).val();
            
            //Empty Array
            var testval = [];
            
            //Get Input Val
            const text = $(".history_filter_type_array"+history_id).val();
           testval.push(text);
           
            
           
          
        
    

        $.ajax({
            type: "GET",
            url: base_url+'/search-single-company/',
            data: {
                job_title: testval,
                history: testval,
                filter_type:filter_type,
                name:name,
                all_filter:testval
            },
            beforeSend: function() {
                $('.show_filter_company_list_msg').show();
            },
            success: function (response){
                $('.show_filter_company_list_msg').hide();
                $('.show_filter_company_list').html(response);
                $('#People').hide();
                $('#Companies').hide();
                 $(".filter_search").attr("disabled", false);
            }
        });
       });
       
    </script>
    
    
    
      <script>
      
     var  numItems = $('.select2-selection__choice').length;
     if(numItems == 0){
         $('.clear-btn').hide();
         $('.save-btn').hide();
     }
    
     //  add new script
     $("#savehistory").attr("disabled", true);
   
    
    
          $('#savename1').on('keyup',function(){
          var len = $(this).val().length;
          if(len == 0){
               //$("#savehistory").addClass("disabledbutton");
              $("#savehistory").attr("disabled", true);
          }else{
              $("#savehistory").attr("disabled", false);
          }
         
   
        });
    
          $('.select-opt').change(function(){
               var len = $(this).val().length;
              
          if(len == 0){
               //$("#savehistory").addClass("disabledbutton");
              $("#savehistory").attr("disabled", true);
          }else{
              $("#savehistory").attr("disabled", false);
          }
          
          });
    
   
   /// end here 
   
   
     $('#savehistory').click(function(){
         
    
   
     var status =  document.querySelector("input[name=type]:checked").value;
     
      var testval1 = [];
       var testval2 = [];
        var testval3 = [];
         var testval4 = [];
          var testval5 = [];
           var testval6 = [];
            var testval7 = [];
             var testval8 = [];
             var testval9 = [];
             var testval10 = [];
     var values = $(".select2-selection__choice").text();
   
     
     var filterdata1 = $("#filter-data1").val();
    var words = filterdata1.split(",");
    testval1.push(words);
    
       var filterdata2 = $("#filter-data2").val();
    var words1 = filterdata2.split(",");
    testval2.push(words1);
    
       var filterdata3 = $("#filter-data3").val();
    var words3 = filterdata3.split(",");
    testval3.push(words3);
    
      var filterdata4 = $("#filter-data4").val();
    var words4 = filterdata4.split(",");
    testval4.push(words3);
    
      var filterdata5 = $("#filter-data5").val();
    var words5 = filterdata5.split(",");
    testval5.push(words5);
    
      var filterdata6 = $("#filter-data6").val();
    var words6 = filterdata6.split(",");
    testval6.push(words6);
    
    var filterdata7 = $("#filter-data7").val();
    var words7 = filterdata7.split(",");
    testval7.push(words7);
    
     var filterdata8 = $("#filter-data8").val();
    var words8 = filterdata8.split(",");
    testval8.push(words8);
    
    var filterdata9 = $("#filter-data9").val();
    var words9 = filterdata9.split(",");
    testval9.push(words9);
    
       var filterdata10 = $("#filter-data10").val();
    var words10 = filterdata10.split(",");
    testval10.push(words10);
//  var words  =  $(".select2-selection__choice").attr("data-select2-id");
      
//          alert(words);
    
    if(status == 1){
         var name = $("#savename1").val();
    }else{
         var name =  $('select#savename1 option:selected').val();
    }

  
     
    
     
   $.ajax({
            type: "Get",
            url: base_url+'/saved-history/',
            data: {
               job_title: values,
               history: values,
               filter_type:"job",
               name:"Job title",
               save_name:name,
               status:status,
               filterdata1:testval1,
               filterdata2:testval2,
               filterdata3:testval3,
               filterdata4:testval4,
               filterdata5:testval5,
               filterdata6:testval6,
               filterdata7:testval7,
               filterdata8:testval8,
               filterdata9:testval9,
               filterdata10:testval10,
            },
            beforeSend: function() {
               // $('.show_filter_company_list_msg').show();
            },
            success: function (response){
               location.reload();

                // $('.show_filter_company_list_msg').hide();
                // $('.show_filter_company_list').html(response);
                // $('#People').hide();
                // $('#Companies').hide();
                // $(".filter_search").attr("disabled", false);
            }
        });
    
  
  });
  
  $('.checktype').click(function(){
      
  $("#savename1").prop('disabled', true);
   $(".select-opt").prop('disabled', false);
 });
 
   $('.enableinput').click(function(){
 
  $("#savename1").prop('disabled', false);
   $(".select-opt").prop('disabled', true);
  
 });
 
 var lengthclass = $('.include-btn').length;

  if(lengthclass == 0){
      
      $('.include-btn').show()
  }
  
//  $('.btn-group').click(function(){
//      alert('here');
//     //   $("#btn-outline-primary").addClass("disabledbutton");
  
//  });
 


     </script>