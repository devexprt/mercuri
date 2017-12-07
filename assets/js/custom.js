// to delete the agents
$('.mybutton').on('click',function(){
var id = $(this).attr('data-id');
var href = $(this).attr('value');
$('#delete1').modal('toggle');
$('#confirmOk').attr('data-id',id);
$('#confirmOk').attr('value',href);       
});
$(function() {   
$('#confirmOk').on('click',function(){
var id = $(this).attr('data-id');
var href= $(this).attr('value');
$.ajax
  ({
        type : "POST",
        url: href,
        data : {"id" : id},
        success : function(data) 
        {
          alert(data);
          location.reload();
        },
        error : function(data) 
        {
        alert("Some error <occur!></occur!>");
        }
    })
  });
 
 //modal box of edit icon in agents
  $("#edit-agent").on('hidden.bs.modal', function () {
  $(this).data('bs.modal', null);
  });
});

   $( ".selec" ).change(function() {
      var val = $(this).val();
      if(val == 'MGAs' || val == 'Cert Holders' || val == 'Lienholders' || val == 'Finance Companies' || val == 'Vendors' || val == 'Carriers')
      {
        $('.div1').hide();
         $('.div2').show();
         $('.div3').show();
         $('.div4').show();
         $('.div5').hide();
         $('.div6').hide();
         $('.div7').hide();
      }
      else
      {
        $('.div1').show();
        $('.div5').show();
         $('.div6').show();
         $('.div7').show();
      }
      if(val == 'Customers' || val == 'Prospects' || val == 'Employees')
      {
         $('.div2').hide();
         $('.div3').hide();
         $('.div4').hide();
      }
    });
   $( ".selec" ).is(function() {
      var val = $(this).val();
      if(val == 'Customers' || val == 'Prospects' || val == 'Employees')
      {
         $('.div2').hide();
         $('.div3').hide();
         $('.div4').hide();
         $('.div8').hide();
      }
    });

   $( ".selec" ).change(function() {
      var val = $(this).val();
      if(val == 'Carriers')
      {
         $('.div8').show();
         $('.div2').hide();
         $('.div3').hide();
         $('.div4').hide();
      }
      else
      {
        $('.div8').hide();
      }
    });
   $( ".selec" ).change(function() {
      var val = $(this).val();
      if(val == 'Employees')
      {
         $('.div1').hide();
      }
    });

   $( "#carri" ).is(function() {
    $('#manaul').change(function(){
             if ($(this).prop('checked'))
             {
               $('.div2').show();
               $('.div3').show();
               $('.div4').show();
             }
            else
            {
              $('.div2').hide();
              $('.div3').hide();
              $('.div4').hide();
            }  
          });   
          $('#import').change(function(){
             if ($(this).prop('checked'))
             {
              $(".div9").html("ENTER METHOD");
              $('.div2').hide();
              $('.div3').hide();
              $('.div4').hide();
             }
          });     
    });
 $( ".selec" ).change(function() {
     var val = $(this).val();
      if(val == 'Carriers')
      {
       $('#manaul').is(function(){
                 if ($(this).prop('checked'))
                 {
                   $('.div2').show();
                   $('.div3').show();
                   $('.div4').show();
                 }
                else
                {
                  $('.div2').hide();
                  $('.div3').hide();
                  $('.div4').hide();
                }  
              });  
      }
        

   });  


 

 $( ".select2" ).change(function() {
   var val = $(this).val();
   var val2 = $( ".selec" ).val();
   if(val2 == 'Prospects' && val == 'Commercial' || val2 =='Customers' && val == 'Commercial')
      {
        $('.div2').show();
         $('.div3').show();
         $('.div4').show();
         $('.div6').hide();
         $('.div7').hide();
       }
      else
      {
        $('.div2').hide();
        $('.div3').hide();
        $('.div4').hide();
        $('.div6').show();
         $('.div7').show();
      }
 });
 
 // reset the select2 options on add-contact.php
 $("#sle").change(function() {
    $("#baba").prop('selectedIndex',0);
});

 $('.conop').change(function() {
    var val = $(this).val();
    if(val == 'Cell' || val == 'Buisness Cell')
    {
      $( ".divb11" ).show();
    }
    else
    {
       $( ".divb11" ).hide();
    }

});