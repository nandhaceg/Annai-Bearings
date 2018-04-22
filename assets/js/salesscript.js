 //$(document).ready(function () {
  /*  var count=0;
    $('.btnclss').click(function () {
        $(this).prop("disabled", true);
        $(this).addClass("cursorprop");
        swal("Success!", "Item Added to Your Cart!", "success")
        count = count + 1;
        $('.countclass').text(count);
        $(this).addClass("tooltip");
    });*/
   // $("#addcart").click(function () {
        
        //var stockid= $("#addcart").val();
     //  alert("sathish");
    
    // });
//}); 

function addcart()
{
    var stockid= $("#stockid").val();
    var quant= $("#quant").val();
   
    var stock_id = {"id":stockid,"quant":quant};
    var formData={"stock_id":stock_id};
    
    
     $.ajax
            ({
            type: "POST",
            url: base_url+"/Sales/addcart",
            data: formData,
            cache: false,

            success: function(data, textStatus, jqXHR){

             /*var json = data;

            var parsed = JSON.parse(json);

            var arr = [];

            for (var x in parsed) {
                arr.push(parsed[x]);
            }
            

            var row1 = document.getElementById("brand");
            var row2 = document.getElementById("size");
           
            row1.innerHTML = arr[0];
            row2.innerHTML = arr[1];
            


      
    },
     error: function(jqXHR, textStatus, errorThrown) {}
});*/
                if(data=="false")
                {
                    swal({
           title: "error!",
           text: "Item already exists",
           type: "error",
           confirmButtonColor: '#3085d6',
           cancelButtonColor: '#d33',
           confirmButtonText: 'Done' 
         });
         
         return false;
                }
                
                else if(data=="fail")
                {
                
                    swal({
           title: "error!",
           text: "Sorry Out of Stock..!!",
           type: "error",
           confirmButtonColor: '#3085d6',
           cancelButtonColor: '#d33',
           confirmButtonText: 'Done' 
         });
         
         return false;
                }
                
                
                else
                {
                        swal({
           title: "success!",
           text: "Item successfully Added!!",
           type: "success",
           confirmButtonColor: '#3085d6',
           cancelButtonColor: '#d33',
           confirmButtonText: 'Done' 
         },
        function(isConfirm) {
          if (isConfirm) {
                window.open(base_url+"/Sales/sales_index","_self");
          }
        });
                }
      
}
            });
            }

function checktype()
{
   var type1= $("#type").val();
  if(type1=="3")
  {
  $('#brandall').hide();
 }
       else
      {
          $('#brandall').show();
      }
   //alert(loadtype['type_name'])
             var loadtype = {"type_name":type1};
             var formData={"loadtype":loadtype};

     $.ajax
            ({
            type: "POST",
            url: base_url+"/Sales/checkbrand",
            data: formData,
            cache: false,

            success: function(data, textStatus, jqXHR){

             var json = data;

            var parsed = JSON.parse(json);

            var arr = [];

            for (var x in parsed) {
                arr.push(parsed[x]);
            }
            
 // alert(arr[1]);
            var row1 = document.getElementById("brand");
             var row2 = document.getElementById("size");
           
            row1.innerHTML = arr[0];
            row2.innerHTML = arr[1];
           


     // $('#brandall').show();
    },
     error: function(jqXHR, textStatus, errorThrown) {}
});
       

 
}

function getall()
{
    var type_val= $("#type").val();
    var brand_val= $("#brand").val();
    var size_val= $("#size").val();
    
    
    var loadtype = {"type_val":type_val,"brand_val":brand_val,"size_val":size_val};
    var formData={"loadtype":loadtype};
    
    $.ajax
            ({
            type: "POST",
            url: base_url+"/Sales/getall",
            data: formData,
            cache: false,

            success: function(data, textStatus, jqXHR){

             var json = data;

            var parsed = JSON.parse(json);

            var arr = [];

            for (var x in parsed) {
                arr.push(parsed[x]);
            }
            

            
            var row1 = document.getElementById("getall");
           
            row1.innerHTML = arr[0];
           
            


      
    },
     error: function(jqXHR, textStatus, errorThrown) {}
});
    
}
function deletecart($cart_id)
{
    var cart= $cart_id;
    var cart_id = {"id":cart};
    var formData={"cart_id":cart_id};
    
     $.ajax
            ({
            type: "POST",
            url: base_url+"/Sales/deletecart",
            data: formData,
            cache: false,

            success: function(data, textStatus, jqXHR){

             /*var json = data;

            var parsed = JSON.parse(json);

            var arr = [];

            for (var x in parsed) {
                arr.push(parsed[x]);
            }
            

            var row1 = document.getElementById("brand");
            var row2 = document.getElementById("size");
           
            row1.innerHTML = arr[0];
            row2.innerHTML = arr[1];
            


     
    },
     error: function(jqXHR, textStatus, errorThrown) {}
});*/
                
                if(data=="true")
                {
              
     
      window.open(base_url+"/Sales/cart","_self");
  
                }
      
}
            });
    
}
function findtotal(price,element,cart_id)
{
     
  var rowID=$(element).parent().parent().index();
   var piece=element.value;
    var total=price * piece;
 /// var v=$("#cart_total").val(" "); 
  
     
   //var quant= $("#quant" + rowID).val();
   //alert(rowID)
    // alert(price);
    // alert(element.value);
  
  ///alert(rowID);
  
     //alert($(element).parent().parent().index())
     //alert($(element).parent().parent().html());
    /// var total_val= $("#cart_total").val();
     var allocate_data = {"id":cart_id,"allocate_price":total,"allocate_pieces":piece};
    var formData={"allocate_data":allocate_data};
    
    
     $.ajax
            ({
            type: "POST",
            url: base_url+"/Sales/addpiece",
            data: formData,
            cache: false,

            success: function(data, textStatus, jqXHR){
            }
            
            });
   
    
    $("#carts_total" + rowID).val(total);
   var v=0;
   $("#cart_total").val(""); 
   $('tr td .carts_total').each(function() {
      
    var tot=this.value;
    v = v -( -tot);
    
    
   });
 // alert(v);
 $("#cart_total").val(v);
  // alert(cart);
   
     
}

$(document).ready(function() {

    $("#order").click(function() {
        HoldOn.open({
     theme:"sk-folding-cube",
     message: "<h4>Processing Please Wait... </h4>"
});

        
         var json_arr = [];
        
        $('tr').each(function()
     {
       var  cart_id=$(this).find('td').find("input[name='cart_id']").val();
       var  stock_id=$(this).find('td').find("input[name='stock_id']").val();
       var  quant=$(this).find('td').find("input[name='quant']").val();
       var  amount=$(this).find('td').find("input[name='carts_total']").val();
       
       var json={
           
           "cart_id":cart_id,
           "quant":quant,
           "amount":amount,
           "stock_id":stock_id
       };
       json_arr.push(json);
     });
        
    var cart = {"cart_det":json_arr};
    var formData={"cart":cart};
    
     $.ajax
            ({
            type: "POST",
            url: base_url+"/Sales/updatecart",
            data: formData,
            cache: false,

            success: function(data, textStatus, jqXHR){
                HoldOn.close();
        
           
      swal({
           title: "success!",
           text: "Item successfully sold!!",
           type: "success",
           confirmButtonColor: '#3085d6',
           cancelButtonColor: '#d33',
           confirmButtonText: 'Done' 
         },
        function(isConfirm) {
          if (isConfirm) {
                window.open(base_url+"/Sales/sales_index","_self");
          }
        });
  
                
      
}
            });
        
    

    });
});
    
