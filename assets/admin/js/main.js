 $(document).ready(function() {
           var max_fields      = 10; //maximum input boxes allowed
           var wrapper         = $( ".input_fields_wrap"); //Fields wrapper
           var add_button      = $(".add_field_button"); //Add button ID
           
           var x = 1; //initlal text box count
           $(add_button).click(function(e){ //on add input button click
               e.preventDefault();
               if(x < max_fields){ //max input box allowed
                   x++; //text box increment
                   $(wrapper).append('<div class="row"><div class="col-md-4"><input type="text" class="form-control" placeholder="Phone Number" name="mytext[]"></div><div class="col-md-3"><select class="form-control"><option value="17">Main</option><option value="18">Fax</option><option value="19">Accounting</option><option value="57">Administration</option><option value="59">Advertising</option><option value="20">Billing</option><option value="21">Customer Service</option><option value="22">Human Resources</option><option value="79">Inventory</option><option value="23">IT</option><option value="63">Legal</option><option value="62">Logistics</option><option value="78">Maintenance</option><option value="24">Marketing</option><option value="25">Operations</option><option value="26">Public Relations</option><option value="58">Research</option><option value="27">Sales</option><option value="53">Technical Support</option><option value="28">Other</option></select></div> <div class="col-md-4"><div class="col-md-6 p-0"><div class="form-group"> <div class="radio radio-success"> <input id="radio1" type="radio"> <label for="radio1"> Primary Phone </label> </div> </div> </div> <div class="col-md-6 p-0"><div class="form-group"> <div class="checkbox checkbox-success"> <input id="checkbox1" type="checkbox"> <label for="checkbox1"> OPT-OUT </label> </div> </div></div></div><div class="col-md-1 remove_field"><a href="#" class="  btn btn-danger  btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div></div>'); //add input box
               }
           });
           
         
           $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
               e.preventDefault(); $(this).parent('div').remove(); x--;
           })
         });
         
         $(document).ready(function() {
           var max_fields      = 10; //maximum input boxes allowed
           var wrapper         = $( ".input_fields_wrap1"); //Fields wrapper
           var add_button      = $(".add_field_button1"); //Add button ID
           
           var x = 1; //initlal text box count
           $(add_button).click(function(e){ //on add input button click
               e.preventDefault();
               if(x < max_fields){ //max input box allowed
                   x++; //text box increment
                   $(wrapper).append('<div class="row"><div class="col-md-4"><input type="text" class="form-control" placeholder="Email Address" name="mytext[]"></div><div class="col-md-3"><select class="form-control"><option value="17">Main</option><option value="18">Fax</option><option value="19">Accounting</option><option value="57">Administration</option><option value="59">Advertising</option><option value="20">Billing</option><option value="21">Customer Service</option><option value="22">Human Resources</option><option value="79">Inventory</option><option value="23">IT</option><option value="63">Legal</option><option value="62">Logistics</option><option value="78">Maintenance</option><option value="24">Marketing</option><option value="25">Operations</option><option value="26">Public Relations</option><option value="58">Research</option><option value="27">Sales</option><option value="53">Technical Support</option><option value="28">Other</option></select></div> <div class="col-md-4"><div class="col-md-6 p-0"><div class="form-group"> <div class="radio radio-success"> <input id="radio1" type="radio"> <label for="radio1"> Primary Email </label> </div> </div> </div> <div class="col-md-6 p-0"><div class="form-group"> <div class="checkbox checkbox-success"> <input id="checkbox1" type="checkbox"> <label for="checkbox1"> OPT-OUT </label> </div> </div></div></div><div class="col-md-1 remove_field1"><a href="#" class="  btn btn-danger  btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div></div>'); //add input box
               }
           });
           
         
           $(wrapper).on("click",".remove_field1", function(e){ //user click on remove text
               e.preventDefault(); $(this).parent('div').remove(); x--;
           })
         });
         
         
         
         
         $(document).ready(function() {
           var max_fields      = 10; //maximum input boxes allowed
           var wrapper         = $( ".input_fields_wrap3"); //Fields wrapper
           var add_button      = $(".add_field_button3"); //Add button ID
           
           var x = 1; //initlal text box count
           $(add_button).click(function(e){ //on add input button click
               e.preventDefault();
               if(x < max_fields){ //max input box allowed
                   x++; //text box increment
                   $(wrapper).append('<div class="row"><div class="col-md-4"><input type="text" class="form-control" placeholder="Phone Number" name="mytext[]"></div><div class="col-md-3"><select class="form-control"><option value="17">Cell</option><option value="18">Business Cell</option><option value="19">Home</option><option value="57">Work</option><option value="59">Fax</option><option value="20">Other</option></select></div> <div class="col-md-4"><div class="col-md-6 p-0"><div class="form-group"> <div class="radio radio-success"> <input id="radio1" type="radio"> <label for="radio1"> Primary Phone </label> </div> </div> </div> <div class="col-md-6 p-0"><div class="form-group"> <div class="checkbox checkbox-success"> <input id="checkbox1" type="checkbox"> <label for="checkbox1"> OPT-OUT </label> </div> </div></div></div><div class="col-md-1 remove_field3"><a href="#" class="  btn btn-danger  btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div></div>'); //add input box
               }
           });
           
         
           $(wrapper).on("click",".remove_field3", function(e){ //user click on remove text
               e.preventDefault(); $(this).parent('div').remove(); x--;
           })
         });
         
         $(document).ready(function() {
           var max_fields      = 10; //maximum input boxes allowed
           var wrapper         = $( ".input_fields_wrap4"); //Fields wrapper
           var add_button      = $(".add_field_button4"); //Add button ID
           
           var x = 1; //initlal text box count
           $(add_button).click(function(e){ //on add input button click
               e.preventDefault();
               if(x < max_fields){ //max input box allowed
                   x++; //text box increment
                   $(wrapper).append('<div class=""><div class="col-md-4"><input type="text" class="form-control" placeholder="Email Address" name="mytext[]"></div><div class="col-md-3"><select class="form-control"><option value="17">Personal</option><option value="18">Professional</option><option value="19">Billing</option><option value="20">Other</option></select></div> <div class="col-md-4"><div class="col-md-12 p-0"><div class="form-group"> <div class="radio radio-success"> <input id="radio1" type="radio"> <label for="radio1"> Primary Email </label> </div> </div> </div></div><div class="col-md-1 remove_field4"><a href="#" class="  btn btn-danger  btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div></div>'); //add input box
               }
           });
           
         
           $(wrapper).on("click",".remove_field4", function(e){ //user click on remove text
               e.preventDefault(); $(this).parent('div').remove(); x--;
           })
         });
         
         $(document).ready(function() {
           var max_fields      = 10; //maximum input boxes allowed
           var wrapper         = $( ".input_fields_wrap5"); //Fields wrapper
           var add_button      = $(".add_field_button5"); //Add button ID
           
           var x = 1; //initlal text box count
           $(add_button).click(function(e){ //on add input button click
               e.preventDefault();
               if(x < max_fields){ //max input box allowed
                   x++; //text box increment
                   $(wrapper).append('<div class="row"><div class="col-md-6"> <div class="form-group"> <label>LINKED ACCOUNT</label> <div class="input-group"><input name="" type="text" class="form-control"> <div class="input-group-addon"><i class="fa fa-search"></i></div> </div> </div></div><div class="col-md-5"> <div class="form-group"> <label>RELATIONSHIP</label> <input name="" type="text" class="form-control"> </div> </div><div class="col-md-1 m-t-20 col-md-1 remove_field5"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div></div>'); //add input box
               }
           });
           
         
           $(wrapper).on("click",".remove_field5", function(e){ //user click on remove text
               e.preventDefault(); $(this).parent('div').remove(); x--;
           })
         });
         $(document).ready(function() {
           var max_fields      = 10; //maximum input boxes allowed
           var wrapper         = $( ".input_fields_wrap6"); //Fields wrapper
           var add_button      = $(".add_field_button6"); //Add button ID
           
           var x = 1; //initlal text box count
           $(add_button).click(function(e){ //on add input button click
               e.preventDefault();
               if(x < max_fields){ //max input box allowed
                   x++; //text box increment
                   $(wrapper).append('<div class="row m-t-15"><div class="col-md-6"><input type="text" class="form-control" placeholder="" name="mytext[]"></div><div class="col-md-2 remove_field6"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div></div>'); //add input box
               }
           });
           
         
           $(wrapper).on("click",".remove_field6", function(e){ //user click on remove text
               e.preventDefault(); $(this).parent('div').remove(); x--;
           })
         });
                  $(document).ready(function() {
           var max_fields      = 10; //maximum input boxes allowed
           var wrapper         = $( ".input_fields_wrap7"); //Fields wrapper
           var add_button      = $(".add_field_button7"); //Add button ID
           
           var x = 1; //initlal text box count
           $(add_button).click(function(e){ //on add input button click
               e.preventDefault();
               if(x < max_fields){ //max input box allowed
                   x++; //text box increment
                   $(wrapper).append('<div class="row m-b-10"> <div class="col-md-3"> <label>FULL NAME</label> <input type="text" class="form-control" placeholder="FULL NAME" name="mytext[]"> </div> <div class="col-md-3"> <label>PHONE NUMBER</label> <input type="text" class="form-control" placeholder="PHONE NUMBER" name="mytext[]"> </div> <div class="col-md-3"> <label>EMAIL</label> <input type="text" class="form-control" placeholder="EMAIL" name="mytext[]"> </div> <div class="col-md-3"> <label>PARTY TYPE</label> <select class="form-control"> <option value="0">Claimant</option><option value="1">Adjuster</option><option value="2">Witness</option><option value="3">Injured</option><option value="99">Other</option> </select> </div> <div class="col-md-12 remove_field7"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div> </div>'); //add input box
               }
           });
           
         
           $(wrapper).on("click",".remove_field7", function(e){ //user click on remove text
               e.preventDefault(); $(this).parent('div').remove(); x--;
           })
         });
                    $(document).ready(function() {
           var max_fields      = 10; //maximum input boxes allowed
           var wrapper         = $( ".input_fields_wrap8"); //Fields wrapper
           var add_button      = $(".add_field_button8"); //Add button ID
           
           var x = 1; //initlal text box count
           $(add_button).click(function(e){ //on add input button click
               e.preventDefault();
               if(x < max_fields){ //max input box allowed
                   x++; //text box increment
                   $(wrapper).append('<div class="row m-b-10"> <div class="col-md-3"> <label>DATE</label> <input type="text" class="form-control" placeholder="MM/DD/YY" name="mytext[]"> </div> <div class="col-md-3"> <label>CHECK NUMBER</label> <input type="text" class="form-control" placeholder="" name="mytext[]"> </div> <div class="col-md-3"> <label>AMOUNT</label> <input type="text" class="form-control" placeholder="" name="mytext[]"> </div> <div class="col-md-3"> <label>COMMENTS</label> <input type="text" class="form-control" placeholder="" name="mytext[]"> </div> <div class="col-md-12 .remove_field8"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div> </div> </div>'); //add input box
               }
           });
           
         
           $(wrapper).on("click",".remove_field8", function(e){ //user click on remove text
               e.preventDefault(); $(this).parent('div').remove(); x--;
           })
         });
         
         $('.my-button').click(function(){    
         if(this.id == 'btn1'){
           $('.div2').show();
           $('.div1').hide();
         }else{
           $('.div2').hide();
           $('.div1').show();
         }
         })
         $('.my-button').click(function(){    
         if(this.id == 'btn11'){
           $('.div22').show();
           $('.div11').hide();
         }else{
           $('.div22').hide();
           $('.div11').show();
         }
         })
         $('.my-button').click(function(){    
         if(this.id == 'btn31'){
           $('.div32').show();
           $('.div31').hide();
         }else{
           $('.div32').hide();
           $('.div31').show();
         }
         })
         
         $('.my-button').click(function(){    
         if(this.id == 'btn41'){
           $('.div42').show();
           $('.div41').hide();
         }else{
           $('.div42').hide();
           $('.div41').show();
         }
         })
         $('.my-button').click(function(){    
         if(this.id == 'btn51'){
           $('.div52').show();
           $('.div51').hide();
         }else{
           $('.div52').hide();
           $('.div51').show();
         }
         })
         
         $('.my-button').click(function(){    
         if(this.id == 'btn71'){
           $('.div72').show();
           $('.div71').hide();
         }else{
           $('.div72').hide();
           $('.div71').show();
         }
         })
         
         $('.my-button').click(function(){    
         if(this.id == 'btn61'){
           $('.div62').show();
           $('.div61').hide();
         }else{
           $('.div62').hide();
           $('.div61').show();
         }
         })
         
         $('.my-button').click(function(){    
         if(this.id == 'btn81'){
           $('.div82').show();
           $('.div81').hide();
         }else{
           $('.div82').hide();
           $('.div81').show();
         }
         })
          $('.my-button').click(function(){    
         if(this.id == 'btn101'){
           $('.div102').show();
           $('.div101').hide();
         }else{
           $('.div102').hide();
           $('.div101').show();
         }
         })
         $('.my-button').click(function(){    
         if(this.id == 'btn91'){
           $('.div92').show();
           $('.div91').hide();
         }else{
           $('.div92').hide();
           $('.div91').show();
         }
         })
  /*         $(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
}); */

    $(function() {
        $('#select-policy').change(function(){
            $('.box').hide();
            $('#' + $(this).val()).show();
        });
    });
		
		/*   $(document).ready(function(){
        $("select").change(function(){
            $( "select option:selected").each(function(){
                if($(this).attr("value")=="policy-list"){
                    $(".driver").hide();
					 $(".location").hide();
					  $(".vehicle").hide();
                    $(".policy-list").show();
                }
                if($(this).attr("value")=="driver"){
                    $(".driver").show();
					 $(".location").hide();
					  $(".vehicle").hide();
                    $(".policy-list").hide();
                }
                if($(this).attr("value")=="location"){
                    $(".driver").hide();
					 $(".location").show();
					  $(".vehicle").hide();
                    $(".policy-list").hide();
                }
                if($(this).attr("value")=="vehicle"){
                    $(".driver").hide();
					 $(".location").hide();
					  $(".vehicle").show();
                    $(".policy-list").hide();
                }
            });
        }).change();
    }); 

	
	*/